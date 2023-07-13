<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function getUserRoleById($role_id)
    {
        return $this->db->get_where('user_role', ['id' => $role_id])->row_array();
    }
    public function getUserRoleAll()
    {
        return $this->db->get('user_role')->result_array();
    }
    public function searchUserData()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('name', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('user')->result_array();
    }

    function update_data($rh,$suhu_udara,$suhu_daun,$hasil_vpd,$media_tanam,$ppm,$ph,$oksigen,$debit,$kontrol_suhu,$kontrol_kelembapan,$kontrol_nutrisiair,$kontrol_ph,$hasil_kondisi,$id){
        $hasil=$this->db->query("UPDATE data_pelatihan SET rh='$rh',suhu_udara='$suhu_udara',suhu_daun='$suhu_daun',hasil_vpd='$hasil_vpd',media_tanam='$media_tanam',ppm='$ppm',ph='$ph',oksigen='$oksigen',debit='$debit',kontrol_suhu='$kontrol_suhu',kontrol_kelembapan='$kontrol_kelembapan',kontrol_nutrisiair='$kontrol_nutrisiair',kontrol_ph='$kontrol_ph',hasil_kondisi='$hasil_kondisi' WHERE id='$id'");
        return $hasil;
    }

    function simpan_data($rh,$suhu_udara,$suhu_daun,$hasil_vpd,$media_tanam,$ppm,$ph,$oksigen,$debit,$kontrol_suhu,$kontrol_kelembapan,$kontrol_nutrisiair,$kontrol_ph,$hasil_kondisi){
        $hasil=$this->db->query("INSERT INTO data_pelatihan (rh,suhu_udara,suhu_daun,hasil_vpd,media_tanam,ppm,ph,oksigen,debit,kontrol_suhu,kontrol_kelembapan,kontrol_nutrisiair,kontrol_ph,hasil_kondisi)VALUES('$rh','$suhu_udara','$suhu_daun','$hasil_vpd','$media_tanam','$ppm','$ph','$oksigen','$debit','$kontrol_suhu','$kontrol_kelembapan','$kontrol_nutrisiair','$kontrol_ph','$hasil_kondisi')");
        return $hasil;
    }

    function data_list(){
        $hasil=$this->db->query("SELECT * FROM data_pelatihan ORDER BY id DESC");
        return $hasil->result();
    }

    function get_data_by_kode($id){
        $hsl=$this->db->query("SELECT * FROM data_pelatihan WHERE id='$id'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'rh' => $data->rh,
                    'suhu_udara' => $data->suhu_udara,
					'suhu_daun' => $data->suhu_daun,
					'hasil_vpd' => $data->hasil_vpd,
					'media_tanam' => $data->media_tanam,
					'ppm' => $data->ppm,
					'ph' => $data->ph,
					'oksigen' => $data->oksigen,
					'debit' => $data->debit,
					'kontrol_suhu' => $data->kontrol_suhu,
					'kontrol_kelembapan' => $data->kontrol_kelembapan,
					'kontrol_nutrisiair' => $data->kontrol_nutrisiair,
					'kontrol_ph' => $data->kontrol_ph,
					'hasil_kondisi' => $data->hasil_kondisi,
					'id' => $data->id,
                    );
            }
        }
        return $hasil;
    }

    function hapus_data($id){
        $hasil=$this->db->query("DELETE FROM data_pelatihan WHERE id='$id'");
        return $hasil;
    }
}
