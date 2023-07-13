<?php

class Userdata extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    function index()
    {
        $datas['data'] = $this->db->select('*')->from('user')->get()->result(); //Untuk mengambil data dari database webinar

        $datas['title'] = 'User Data';
        $datas['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $datas);
        $this->load->view('templates/sidebar', $datas);
        $this->load->view('templates/topbar', $datas);
        $this->template->load('template1', 'userdata/list', $datas);
        //$this->load->view('templates/footer'); // gak usah di pakai
    }

    function add()
    {
        $this->load->helper('string');
        $HWID = random_string('alnum', 8);
        $isi = array(

            'name'     => $this->input->post('name'),
            'email'    => $this->input->post('email'),
            'image' => 'default.jpg',
            'password'     => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'role_id'     => $this->input->post('role_id'),
            'is_active'     => $this->input->post('is_active'),
            'date_created'     => time(),
            'token'     => random_string('alnum', 16),
            'HWID'   => $HWID

        );

        $fuzzy_rule = [
            'HWID' =>$HWID,
            'min_rh'     => 0,
            'mid_rh'     => 0,
            'mid2_rh'     => 0,
            'max_rh'     => 0,
            'min_suhu_udara'     => 0,
            'mid_suhu_udara'     => 0,
            'mid2_suhu_udara'     => 0,
            'max_suhu_udara'     => 0,
            'min_suhu_daun'     => 0,
            'mid_suhu_daun'     => 0,
            'mid2_suhu_daun'     => 0,
            'max_suhu_daun'     => 0,
            'min_media_tanam'     => 0,
            'mid_media_tanam'     => 0,
            'mid2_media_tanam'     => 0,
            'max_media_tanam'     => 0,
            'min_ppm'     => 0,
            'mid_ppm'     => 0,
            'mid2_ppm'     => 0,
            'max_ppm'     => 0,
            'min_ph'     => 0,
            'mid_ph'     => 0,
            'mid2_ph'     => 0,
            'max_ph'     => 0,
            'min_oksigen'     => 0,
            'mid_oksigen'     => 0,
            'mid2_oksigen'     => 0,
            'max_oksigen'     => 0,
            'jeda_pembacaan'     => 0,
            'waktu_penguras'     => 0,
            'email' => $this->input->post('email')
        ];

        $data_sensor = [
            'HWID'     => $HWID,
            'rh'     => 0,
            'suhu_udara'     => 0,
            'suhu_daun'     => 0,
            'media_tanam'     => 0,
            'ppm'     => 0,
            'ph'     => 0,
            'oksigen'     => 0,
            'email' => $this->input->post('email')
        ];


        $this->db->insert('user', $isi);
        $this->db->insert('fuzzyrule', $fuzzy_rule);
        $this->db->insert('datasensor', $data_sensor);
        redirect('userdata');
    }


    function edit()
    {
        if (isset($_POST['submit'])) {
            $data = array(

                'name'     => $this->input->post('name'),
                'email'    => $this->input->post('email'),
                'role_id'     => $this->input->post('role_id'),
                'is_active'     => $this->input->post('is_active'),
                'token'     => $this->input->post('token'),
                'HWID'     => $this->input->post('HWID')

            );

            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                }
            }

            $id   = $this->input->post('id');
            $this->db->where('id', $id); //difilter berdasarkan id
            $this->db->update('user', $data); //eksekusi update
            redirect('userdata');
        } else {
            $id           = $this->uri->segment(3);
            $datas['data'] = $this->db->get_where('user', array('email' => $id))->row_array();
            $datas['data2'] = $this->db->select('*')->from('user')->where('HWID', $this->uri->segment(3))->limit(1)->order_by('id', 'DESC')->get()->result(); //Untuk mengambil data dari database webinar


            $datas['title'] = 'User Data';
            $datas['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

            $this->load->view('templates/header', $datas);
            $this->load->view('templates/sidebar', $datas);
            $this->load->view('templates/topbar', $datas);
            $this->template->load('template1', 'edit2', $datas);
        }
    }

    function hapus()
    {
        $id = $this->uri->segment(3);
        if (!empty($id)) {
            // proses delete data
            $this->db->where('HWID', $id);
            $this->db->delete('user'); 
        }
        redirect('userdata');
    }

    function perhitungan()
    {
        $datas['title'] = 'User Data';
        $datas['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //$datas['rule'] = $this->db->get_where('fuzzyrule', ['email' => $this->session->userdata('email')])->row_array();       
        //$datas['data'] = $this->db->get_where('datasensor', ['email' => $this->session->userdata('email')])->row_array();       
        $datas['rule'] = $this->db->select('*')->from('fuzzyrule')->where('HWID', $this->uri->segment(3))->limit(1)->order_by('id', 'DESC')->get()->result(); //Untuk mengambil data dari database webinar
        $datas['data'] = $this->db->select('*')->from('datasensor')->where('HWID', $this->uri->segment(3))->limit(1)->order_by('id', 'DESC')->get()->result(); //Untuk mengambil data dari database webinar



        $this->load->view('templates/header', $datas);
        $this->load->view('templates/sidebar', $datas);
        $this->load->view('templates/topbar', $datas);
        $this->template->load('template1', 'userdata/perhitungan', $datas);
        //$this->load->view('templates/footer'); // gak usah di pakai
    }

    function datasensor()
    {
        $datas['data'] = $this->db->select('*')->from('datasensor')->where('HWID', $this->uri->segment(3))->order_by('id', 'DESC')->get()->result(); //Untuk mengambil data dari database webinar
        //$datas['data'] = $this->db->select('*')->from('datasensor')->where('email', $this->session->userdata('email'))->limit(1)->order_by('id', 'DESC')->get()->result(); //Untuk mengambil data dari database webinar
        $datas['data2'] = $this->db->select('*')->from('datasensor')->where('HWID', $this->uri->segment(3))->limit(1)->order_by('id', 'DESC')->get()->result(); //Untuk mengambil data dari database webinar

        $datas['title'] = 'User Data';
        $datas['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $datas);
        $this->load->view('templates/sidebar', $datas);
        $this->load->view('templates/topbar', $datas);
        $this->template->load('template1', 'userdata/historydevice', $datas);
        //$this->load->view('templates/footer'); // gak usah di pakai       
    }

    function monitoring()
    {
        $datas['title'] = 'User Data';
        $datas['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //$datas['rule'] = $this->db->get_where('fuzzyrule', ['email' => $this->session->userdata('email')])->row_array();       
        //$datas['data'] = $this->db->get_where('datasensor', ['email' => $this->session->userdata('email')])->row_array();       
        $datas['rule'] = $this->db->select('*')->from('fuzzyrule')->where('HWID', $this->uri->segment(3))->limit(1)->order_by('id', 'DESC')->get()->result(); //Untuk mengambil data dari database webinar
        $datas['data'] = $this->db->select('*')->from('datasensor')->where('HWID', $this->uri->segment(3))->limit(1)->order_by('id', 'DESC')->get()->result(); //Untuk mengambil data dari database webinar



        $this->load->view('templates/header', $datas);
        $this->load->view('templates/sidebar', $datas);
        $this->load->view('templates/topbar', $datas);
        $this->template->load('template1', 'userdata/monitoring', $datas);
        //$this->load->view('templates/footer'); // gak usah di pakai
    }

    public function fuzzyrule()
    {
        $data['title'] = 'User Data';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();       
        $data['rule'] = $this->db->select('*')->from('fuzzyrule')->where('HWID', $this->uri->segment(3))->limit(1)->order_by('id', 'DESC')->get()->result(); //Untuk mengambil data dari database webinar
        
        
        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('userdata/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $min_rh = $this->input->post('min_rh');
            $mid_rh = $this->input->post('mid_rh');
            $mid2_rh = $this->input->post('mid2_rh');
            $max_rh = $this->input->post('max_rh');
            $min_suhu_udara = $this->input->post('min_suhu_udara');
            $mid_suhu_udara = $this->input->post('mid_suhu_udara');
            $mid2_suhu_udara = $this->input->post('mid2_suhu_udara');
            $max_suhu_udara = $this->input->post('max_suhu_udara');
            $min_suhu_daun = $this->input->post('min_suhu_daun');
            $mid_suhu_daun = $this->input->post('mid_suhu_daun');
            $mid2_suhu_daun = $this->input->post('mid2_suhu_daun');
            $max_suhu_daun = $this->input->post('max_suhu_daun');
            $min_media_tanam = $this->input->post('min_media_tanam');
            $mid_media_tanam = $this->input->post('mid_media_tanam');
            $mid2_media_tanam = $this->input->post('mid2_media_tanam');
            $max_media_tanam = $this->input->post('max_media_tanam');
            $min_ppm = $this->input->post('min_ppm');
            $mid_ppm = $this->input->post('mid_ppm');
            $mid2_ppm = $this->input->post('mid2_ppm');
            $max_ppm = $this->input->post('max_ppm');
            $min_ph = $this->input->post('min_ph');
            $mid_ph = $this->input->post('mid_ph');
            $mid2_ph = $this->input->post('mid2_ph');
            $max_ph = $this->input->post('max_ph');
            $min_oksigen = $this->input->post('min_oksigen');
            $mid_oksigen = $this->input->post('mid_oksigen');
            $mid2_oksigen = $this->input->post('mid2_oksigen');
            $max_oksigen = $this->input->post('max_oksigen');
            $jeda_pembacaan = $this->input->post('jeda_pembacaan');
            $waktu_penguras = $this->input->post('waktu_penguras');
            $email = $this->input->post('email');

            $this->db->set('min_rh', $min_rh);
            $this->db->set('mid_rh', $mid_rh);
            $this->db->set('mid2_rh', $mid2_rh);
            $this->db->set('max_rh', $max_rh);
            $this->db->set('min_suhu_udara', $min_suhu_udara);
            $this->db->set('mid_suhu_udara', $mid_suhu_udara);
          	$this->db->set('mid2_suhu_udara', $mid2_suhu_udara);
            $this->db->set('max_suhu_udara', $max_suhu_udara);
            $this->db->set('min_suhu_daun', $min_suhu_daun);
            $this->db->set('mid_suhu_daun', $mid_suhu_daun);
            $this->db->set('mid2_suhu_daun', $mid2_suhu_daun);
            $this->db->set('max_suhu_daun', $max_suhu_daun);
            $this->db->set('min_media_tanam', $min_media_tanam);
            $this->db->set('mid_media_tanam', $mid_media_tanam);
            $this->db->set('mid2_media_tanam', $mid2_media_tanam);
            $this->db->set('max_media_tanam', $max_media_tanam);
            $this->db->set('min_ppm', $min_ppm);
            $this->db->set('mid_ppm', $mid_ppm);
            $this->db->set('mid2_ppm', $mid2_ppm);
            $this->db->set('max_ppm', $max_ppm);
            $this->db->set('min_ph', $min_ph);
            $this->db->set('mid_ph', $mid_ph);
            $this->db->set('mid2_ph', $mid2_ph);
            $this->db->set('max_ph', $max_ph);
            $this->db->set('min_oksigen', $min_oksigen);
            $this->db->set('mid_oksigen', $mid_oksigen);
            $this->db->set('mid2_oksigen', $mid2_oksigen);
            $this->db->set('max_oksigen', $max_oksigen);
            $this->db->set('jeda_pembacaan', $jeda_pembacaan);
            $this->db->set('waktu_penguras', $waktu_penguras);
            $this->db->where('email', $email);
            $this->db->update('fuzzyrule');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
            redirect('userdata/');
        
        }
    }
    
    function grafikjason()
    {
        $data = $this->db->select('*')->from('datasensor')->where('HWID', $this->uri->segment(3))->limit(4500)->order_by('id', 'DESC')->get()->result();
        echo json_encode($data);
    }

    function rh()
    {
        $datas['title'] = 'User Data';
        $datas['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //$datas['rule'] = $this->db->get_where('fuzzyrule', ['email' => $this->session->userdata('email')])->row_array();       
        //$datas['data'] = $this->db->get_where('datasensor', ['email' => $this->session->userdata('email')])->row_array();       
        $datas['rule'] = $this->db->select('*')->from('fuzzyrule')->where('HWID', $this->uri->segment(3))->limit(1)->order_by('id', 'DESC')->get()->result(); //Untuk mengambil data dari database webinar
        $datas['data'] = $this->db->select('*')->from('datasensor')->where('HWID', $this->uri->segment(3))->limit(1)->order_by('id', 'DESC')->get()->result(); //Untuk mengambil data dari database webinar



        $this->load->view('templates/header', $datas);
        $this->load->view('templates/sidebar', $datas);
        $this->load->view('templates/topbar', $datas);
        $this->template->load('template1', 'userdata/rh', $datas);
        //$this->load->view('templates/footer'); // gak usah di pakai   
    }

    function suhu_udara()
    {
        $datas['title'] = 'User Data';
        $datas['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //$datas['rule'] = $this->db->get_where('fuzzyrule', ['email' => $this->session->userdata('email')])->row_array();       
        //$datas['data'] = $this->db->get_where('datasensor', ['email' => $this->session->userdata('email')])->row_array();       
        $datas['rule'] = $this->db->select('*')->from('fuzzyrule')->where('HWID', $this->uri->segment(3))->limit(1)->order_by('id', 'DESC')->get()->result(); //Untuk mengambil data dari database webinar
        $datas['data'] = $this->db->select('*')->from('datasensor')->where('HWID', $this->uri->segment(3))->limit(1)->order_by('id', 'DESC')->get()->result(); //Untuk mengambil data dari database webinar



        $this->load->view('templates/header', $datas);
        $this->load->view('templates/sidebar', $datas);
        $this->load->view('templates/topbar', $datas);
        $this->template->load('template1', 'userdata/suhu_udara', $datas);
        //$this->load->view('templates/footer'); // gak usah di pakai   
    }

    function suhu_daun()
    {
        $datas['title'] = 'User Data';
        $datas['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //$datas['rule'] = $this->db->get_where('fuzzyrule', ['email' => $this->session->userdata('email')])->row_array();       
        //$datas['data'] = $this->db->get_where('datasensor', ['email' => $this->session->userdata('email')])->row_array();       
        $datas['rule'] = $this->db->select('*')->from('fuzzyrule')->where('HWID', $this->uri->segment(3))->limit(1)->order_by('id', 'DESC')->get()->result(); //Untuk mengambil data dari database webinar
        $datas['data'] = $this->db->select('*')->from('datasensor')->where('HWID', $this->uri->segment(3))->limit(1)->order_by('id', 'DESC')->get()->result(); //Untuk mengambil data dari database webinar



        $this->load->view('templates/header', $datas);
        $this->load->view('templates/sidebar', $datas);
        $this->load->view('templates/topbar', $datas);
        $this->template->load('template1', 'userdata/suhu_daun', $datas);
        //$this->load->view('templates/footer'); // gak usah di pakai   
    }

    function media_tanam()
    {
        $datas['title'] = 'User Data';
        $datas['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //$datas['rule'] = $this->db->get_where('fuzzyrule', ['email' => $this->session->userdata('email')])->row_array();       
        //$datas['data'] = $this->db->get_where('datasensor', ['email' => $this->session->userdata('email')])->row_array();       
        $datas['rule'] = $this->db->select('*')->from('fuzzyrule')->where('HWID', $this->uri->segment(3))->limit(1)->order_by('id', 'DESC')->get()->result(); //Untuk mengambil data dari database webinar
        $datas['data'] = $this->db->select('*')->from('datasensor')->where('HWID', $this->uri->segment(3))->limit(1)->order_by('id', 'DESC')->get()->result(); //Untuk mengambil data dari database webinar



        $this->load->view('templates/header', $datas);
        $this->load->view('templates/sidebar', $datas);
        $this->load->view('templates/topbar', $datas);
        $this->template->load('template1', 'userdata/media_tanam', $datas);
        //$this->load->view('templates/footer'); // gak usah di pakai   
    }

    function ppm()
    {
        $datas['title'] = 'User Data';
        $datas['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //$datas['rule'] = $this->db->get_where('fuzzyrule', ['email' => $this->session->userdata('email')])->row_array();       
        //$datas['data'] = $this->db->get_where('datasensor', ['email' => $this->session->userdata('email')])->row_array();       
        $datas['rule'] = $this->db->select('*')->from('fuzzyrule')->where('HWID', $this->uri->segment(3))->limit(1)->order_by('id', 'DESC')->get()->result(); //Untuk mengambil data dari database webinar
        $datas['data'] = $this->db->select('*')->from('datasensor')->where('HWID', $this->uri->segment(3))->limit(1)->order_by('id', 'DESC')->get()->result(); //Untuk mengambil data dari database webinar



        $this->load->view('templates/header', $datas);
        $this->load->view('templates/sidebar', $datas);
        $this->load->view('templates/topbar', $datas);
        $this->template->load('template1', 'userdata/ppm', $datas);
        //$this->load->view('templates/footer'); // gak usah di pakai   
    }


    function ph()
    {
        $datas['title'] = 'User Data';
        $datas['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //$datas['rule'] = $this->db->get_where('fuzzyrule', ['email' => $this->session->userdata('email')])->row_array();       
        //$datas['data'] = $this->db->get_where('datasensor', ['email' => $this->session->userdata('email')])->row_array();       
        $datas['rule'] = $this->db->select('*')->from('fuzzyrule')->where('HWID', $this->uri->segment(3))->limit(1)->order_by('id', 'DESC')->get()->result(); //Untuk mengambil data dari database webinar
        $datas['data'] = $this->db->select('*')->from('datasensor')->where('HWID', $this->uri->segment(3))->limit(1)->order_by('id', 'DESC')->get()->result(); //Untuk mengambil data dari database webinar



        $this->load->view('templates/header', $datas);
        $this->load->view('templates/sidebar', $datas);
        $this->load->view('templates/topbar', $datas);
        $this->template->load('template1', 'userdata/ph', $datas);
        //$this->load->view('templates/footer'); // gak usah di pakai   
    }

    function oksigen()
    {
        $datas['title'] = 'User Data';
        $datas['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //$datas['rule'] = $this->db->get_where('fuzzyrule', ['email' => $this->session->userdata('email')])->row_array();       
        //$datas['data'] = $this->db->get_where('datasensor', ['email' => $this->session->userdata('email')])->row_array();       
        $datas['rule'] = $this->db->select('*')->from('fuzzyrule')->where('HWID', $this->uri->segment(3))->limit(1)->order_by('id', 'DESC')->get()->result(); //Untuk mengambil data dari database webinar
        $datas['data'] = $this->db->select('*')->from('datasensor')->where('HWID', $this->uri->segment(3))->limit(1)->order_by('id', 'DESC')->get()->result(); //Untuk mengambil data dari database webinar



        $this->load->view('templates/header', $datas);
        $this->load->view('templates/sidebar', $datas);
        $this->load->view('templates/topbar', $datas);
        $this->template->load('template1', 'userdata/oksigen', $datas);
        //$this->load->view('templates/footer'); // gak usah di pakai   
    }
}
