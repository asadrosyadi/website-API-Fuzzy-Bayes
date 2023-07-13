<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
 
<!-- Content Row -->
<center><h2 class="h4 mb-4 text-gray-800">Jumlah Kejadian dari Kelas yang Muncul (Debit)</h2></center>
 <div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    Jumlah Data Training</div>
                    <div class="h4 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$total_keseluruhan_vpd= $data = $this->db->select('*')->from('data_pelatihan')->get()->num_rows(); ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-globe fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                    Lambat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$sangat_Sedang_vpd1= $this->db->select('*')->from('data_pelatihan')->where('debit', 'Lambat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($sangat_Sedang_vpd1/$total_keseluruhan_vpd), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sedang
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$Sedang_vpd1 = $this->db->select('*')->from('data_pelatihan')->where('debit', 'Sedang')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($Sedang_vpd1/$total_keseluruhan_vpd), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Cepat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$Cepat_vpd1= $this->db->select('*')->from('data_pelatihan')->where('debit', 'Cepat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($Cepat_vpd1/$total_keseluruhan_vpd), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<hr />

<center><h2 class="h4 mb-4 text-gray-800">Jumlah Kejadian dari Kategori yang Muncul (Debit)</h2></center>

<h3 class="h4 mb-4 text-gray-800">RH = Sangat Lembap</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Lambat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('rh', 'Sangat Lembap')->where('debit', 'Lambat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$sangat_Sedang_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sedang</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('rh', 'Sangat Lembap')->where('debit', 'Sedang')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Sedang_vpd1), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Cepat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('rh', 'Sangat Lembap')->where('debit', 'Cepat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Cepat_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>


</div>

<h3 class="h4 mb-4 text-gray-800">RH = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Lambat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('rh', 'Ideal')->where('debit', 'Lambat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$sangat_Sedang_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sedang</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('rh', 'Ideal')->where('debit', 'Sedang')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Sedang_vpd1), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Cepat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('rh', 'Ideal')->where('debit', 'Cepat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Cepat_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>


</div>

<h3 class="h4 mb-4 text-gray-800">RH = Kering</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Lambat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('rh', 'Kering')->where('debit', 'Lambat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$sangat_Sedang_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sedang</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('rh', 'Kering')->where('debit', 'Sedang')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Sedang_vpd1), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Cepat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('rh', 'Kering')->where('debit', 'Cepat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Cepat_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Suhu Udara = Dingin</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Lambat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Dingin')->where('debit', 'Lambat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$sangat_Sedang_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sedang</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Dingin')->where('debit', 'Sedang')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Sedang_vpd1), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Cepat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Dingin')->where('debit', 'Cepat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Cepat_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Suhu Udara = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Lambat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Ideal')->where('debit', 'Lambat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$sangat_Sedang_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sedang</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Ideal')->where('debit', 'Sedang')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Sedang_vpd1), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Cepat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Ideal')->where('debit', 'Cepat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Cepat_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Suhu Udara = Panas</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Lambat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Panas')->where('debit', 'Lambat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$sangat_Sedang_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sedang</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Panas')->where('debit', 'Sedang')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Sedang_vpd1), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Cepat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Panas')->where('debit', 'Cepat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Cepat_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Suhu Daun = Dingin</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Lambat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Dingin')->where('debit', 'Lambat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$sangat_Sedang_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sedang</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Dingin')->where('debit', 'Sedang')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Sedang_vpd1), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Cepat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Dingin')->where('debit', 'Cepat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Cepat_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Suhu Daun = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Lambat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Ideal')->where('debit', 'Lambat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$sangat_Sedang_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sedang</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Ideal')->where('debit', 'Sedang')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Sedang_vpd1), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Cepat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Ideal')->where('debit', 'Cepat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Cepat_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Suhu Daun = Panas</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Lambat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Panas')->where('debit', 'Lambat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$sangat_Sedang_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sedang</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Panas')->where('debit', 'Sedang')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Sedang_vpd1), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Cepat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Panas')->where('debit', 'Cepat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Cepat_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Media Tanam = Kering</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Lambat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'Kering')->where('debit', 'Lambat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$sangat_Sedang_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sedang</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'Kering')->where('debit', 'Sedang')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Sedang_vpd1), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Cepat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'Kering')->where('debit', 'Cepat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Cepat_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Media Tanam = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Lambat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'Ideal')->where('debit', 'Lambat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$sangat_Sedang_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sedang</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'Ideal')->where('debit', 'Sedang')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Sedang_vpd1), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Cepat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'Ideal')->where('debit', 'Cepat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Cepat_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Media Tanam = Lembap</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Lambat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'lembap')->where('debit', 'Lambat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$sangat_Sedang_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sedang</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'lembap')->where('debit', 'Sedang')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Sedang_vpd1), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Cepat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'lembap')->where('debit', 'Cepat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Cepat_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">PPM = Kurang</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Lambat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Kurang')->where('debit', 'Lambat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$sangat_Sedang_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sedang</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Kurang')->where('debit', 'Sedang')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Sedang_vpd1), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Cepat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Kurang')->where('debit', 'Cepat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Cepat_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">PPM = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Lambat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Ideal')->where('debit', 'Lambat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$sangat_Sedang_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sedang</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Ideal')->where('debit', 'Sedang')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Sedang_vpd1), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Cepat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Ideal')->where('debit', 'Cepat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Cepat_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">PPM = Berlebih</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Lambat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Berlebih')->where('debit', 'Lambat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$sangat_Sedang_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sedang</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Berlebih')->where('debit', 'Sedang')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Sedang_vpd1), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Cepat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Berlebih')->where('debit', 'Cepat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Cepat_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">pH = Asam</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Lambat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ph', 'Asam')->where('debit', 'Lambat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$sangat_Sedang_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sedang</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('ph', 'Asam')->where('debit', 'Sedang')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Sedang_vpd1), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Cepat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ph', 'Asam')->where('debit', 'Cepat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Cepat_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">pH = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Lambat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ph', 'Ideal')->where('debit', 'Lambat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$sangat_Sedang_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sedang</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('ph', 'Ideal')->where('debit', 'Sedang')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Sedang_vpd1), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Cepat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ph', 'Ideal')->where('debit', 'Cepat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Cepat_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">pH = Basa</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Lambat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ph', 'Basa')->where('debit', 'Lambat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$sangat_Sedang_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sedang</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('ph', 'Basa')->where('debit', 'Sedang')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Sedang_vpd1), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Cepat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ph', 'Basa')->where('debit', 'Cepat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Cepat_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Oksigen = Kurang</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Lambat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('oksigen', 'Kurang')->where('debit', 'Lambat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$sangat_Sedang_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sedang</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('oksigen', 'Kurang')->where('debit', 'Sedang')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Sedang_vpd1), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Cepat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('oksigen', 'Kurang')->where('debit', 'Cepat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Cepat_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Oksigen = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Lambat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('oksigen', 'Ideal')->where('debit', 'Lambat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$sangat_Sedang_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sedang</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('oksigen', 'Ideal')->where('debit', 'Sedang')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Sedang_vpd1), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Cepat</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('oksigen', 'Ideal')->where('debit', 'Cepat')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$Cepat_vpd1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<hr />


<!-- Content Row -->
<center><h2 class="h4 mb-4 text-gray-800">Jumlah Kejadian dari Kelas yang Muncul (Kontrol Suhu)</h2></center>
 <div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    Jumlah Data Training</div>
                    <div class="h4 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$total_keseluruhan_vpd= $data = $this->db->select('*')->from('data_pelatihan')->get()->num_rows(); ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-globe fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                    LED Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$nomor1= $this->db->select('*')->from('data_pelatihan')->where('kontrol_suhu', 'LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($nomor1/$total_keseluruhan_vpd), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pemanas & LED Menyala
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$nomor2 = $this->db->select('*')->from('data_pelatihan')->where('kontrol_suhu', 'Pemanas & LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($nomor2/$total_keseluruhan_vpd), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Pendingin Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$nomor3= $this->db->select('*')->from('data_pelatihan')->where('kontrol_suhu', 'Pendingin Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($nomor3/$total_keseluruhan_vpd), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<hr />

<center><h2 class="h4 mb-4 text-gray-800">Jumlah Kejadian dari Kategori yang Muncul (Kontrol Suhu)</h2></center>

<h3 class="h4 mb-4 text-gray-800">RH = Sangat Lembap</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">LED Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('rh', 'Sangat Lembap')->where('kontrol_suhu', 'LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pemanas & LED Menyala</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('rh', 'Sangat Lembap')->where('kontrol_suhu', 'Pemanas & LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pendingin Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('rh', 'Sangat Lembap')->where('kontrol_suhu', 'Pendingin Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>


</div>

<h3 class="h4 mb-4 text-gray-800">RH = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">LED Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('rh', 'Ideal')->where('kontrol_suhu', 'LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pemanas & LED Menyala</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('rh', 'Ideal')->where('kontrol_suhu', 'Pemanas & LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pendingin Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('rh', 'Ideal')->where('kontrol_suhu', 'Pendingin Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>


</div>

<h3 class="h4 mb-4 text-gray-800">RH = Kering</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">LED Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('rh', 'Kering')->where('kontrol_suhu', 'LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pemanas & LED Menyala</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('rh', 'Kering')->where('kontrol_suhu', 'Pemanas & LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pendingin Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('rh', 'Kering')->where('kontrol_suhu', 'Pendingin Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Suhu Udara = Dingin</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">LED Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Dingin')->where('kontrol_suhu', 'LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pemanas & LED Menyala</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Dingin')->where('kontrol_suhu', 'Pemanas & LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pendingin Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Dingin')->where('kontrol_suhu', 'Pendingin Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Suhu Udara = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">LED Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Ideal')->where('kontrol_suhu', 'LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pemanas & LED Menyala</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Ideal')->where('kontrol_suhu', 'Pemanas & LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pendingin Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Ideal')->where('kontrol_suhu', 'Pendingin Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Suhu Udara = Panas</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">LED Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Panas')->where('kontrol_suhu', 'LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pemanas & LED Menyala</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Panas')->where('kontrol_suhu', 'Pemanas & LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pendingin Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Panas')->where('kontrol_suhu', 'Pendingin Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Suhu Daun = Dingin</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">LED Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Dingin')->where('kontrol_suhu', 'LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pemanas & LED Menyala</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Dingin')->where('kontrol_suhu', 'Pemanas & LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pendingin Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Dingin')->where('kontrol_suhu', 'Pendingin Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Suhu Daun = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">LED Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Ideal')->where('kontrol_suhu', 'LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pemanas & LED Menyala</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Ideal')->where('kontrol_suhu', 'Pemanas & LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pendingin Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Ideal')->where('kontrol_suhu', 'Pendingin Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Suhu Daun = Panas</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">LED Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Panas')->where('kontrol_suhu', 'LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pemanas & LED Menyala</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Panas')->where('kontrol_suhu', 'Pemanas & LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pendingin Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Panas')->where('kontrol_suhu', 'Pendingin Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Media Tanam = Kering</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">LED Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'Kering')->where('kontrol_suhu', 'LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pemanas & LED Menyala</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'Kering')->where('kontrol_suhu', 'Pemanas & LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pendingin Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'Kering')->where('kontrol_suhu', 'Pendingin Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Media Tanam = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">LED Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'Ideal')->where('kontrol_suhu', 'LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pemanas & LED Menyala</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'Ideal')->where('kontrol_suhu', 'Pemanas & LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pendingin Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'Ideal')->where('kontrol_suhu', 'Pendingin Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Media Tanam = Lembap</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">LED Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'lembap')->where('kontrol_suhu', 'LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pemanas & LED Menyala</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'lembap')->where('kontrol_suhu', 'Pemanas & LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pendingin Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'lembap')->where('kontrol_suhu', 'Pendingin Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">PPM = Kurang</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">LED Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Kurang')->where('kontrol_suhu', 'LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pemanas & LED Menyala</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Kurang')->where('kontrol_suhu', 'Pemanas & LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pendingin Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Kurang')->where('kontrol_suhu', 'Pendingin Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">PPM = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">LED Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Ideal')->where('kontrol_suhu', 'LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pemanas & LED Menyala</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Ideal')->where('kontrol_suhu', 'Pemanas & LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pendingin Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Ideal')->where('kontrol_suhu', 'Pendingin Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">PPM = Berlebih</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">LED Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Berlebih')->where('kontrol_suhu', 'LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pemanas & LED Menyala</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Berlebih')->where('kontrol_suhu', 'Pemanas & LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pendingin Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Berlebih')->where('kontrol_suhu', 'Pendingin Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">pH = Asam</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">LED Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ph', 'Asam')->where('kontrol_suhu', 'LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pemanas & LED Menyala</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('ph', 'Asam')->where('kontrol_suhu', 'Pemanas & LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pendingin Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ph', 'Asam')->where('kontrol_suhu', 'Pendingin Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">pH = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">LED Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ph', 'Ideal')->where('kontrol_suhu', 'LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pemanas & LED Menyala</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('ph', 'Ideal')->where('kontrol_suhu', 'Pemanas & LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pendingin Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ph', 'Ideal')->where('kontrol_suhu', 'Pendingin Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">pH = Basa</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">LED Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ph', 'Basa')->where('kontrol_suhu', 'LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pemanas & LED Menyala</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('ph', 'Basa')->where('kontrol_suhu', 'Pemanas & LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pendingin Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ph', 'Basa')->where('kontrol_suhu', 'Pendingin Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Oksigen = Kurang</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">LED Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('oksigen', 'Kurang')->where('kontrol_suhu', 'LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pemanas & LED Menyala</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('oksigen', 'Kurang')->where('kontrol_suhu', 'Pemanas & LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pendingin Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('oksigen', 'Kurang')->where('kontrol_suhu', 'Pendingin Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Oksigen = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">LED Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('oksigen', 'Ideal')->where('kontrol_suhu', 'LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pemanas & LED Menyala</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('oksigen', 'Ideal')->where('kontrol_suhu', 'Pemanas & LED Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pendingin Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('oksigen', 'Ideal')->where('kontrol_suhu', 'Pendingin Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<hr />

<!-- Content Row -->
<center><h2 class="h4 mb-4 text-gray-800">Jumlah Kejadian dari Kelas yang Muncul (Kontrol Kelembapan)</h2></center>
 <div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    Jumlah Data Training</div>
                    <div class="h4 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$total_keseluruhan_vpd= $data = $this->db->select('*')->from('data_pelatihan')->get()->num_rows(); ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-globe fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                    Humidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$nomor1= $this->db->select('*')->from('data_pelatihan')->where('kontrol_kelembapan', 'Humidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($nomor1/$total_keseluruhan_vpd), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$nomor2 = $this->db->select('*')->from('data_pelatihan')->where('kontrol_kelembapan', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($nomor2/$total_keseluruhan_vpd), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Dehumidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$nomor3= $this->db->select('*')->from('data_pelatihan')->where('kontrol_kelembapan', 'Dehumidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($nomor3/$total_keseluruhan_vpd), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<hr />

<center><h2 class="h4 mb-4 text-gray-800">Jumlah Kejadian dari Kategori yang Muncul (Kontrol Kelembapan)</h2></center>

<h3 class="h4 mb-4 text-gray-800">RH = Sangat Lembap</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Humidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('rh', 'Sangat Lembap')->where('kontrol_kelembapan', 'Humidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('rh', 'Sangat Lembap')->where('kontrol_kelembapan', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Dehumidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('rh', 'Sangat Lembap')->where('kontrol_kelembapan', 'Dehumidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>


</div>

<h3 class="h4 mb-4 text-gray-800">RH = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Humidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('rh', 'Ideal')->where('kontrol_kelembapan', 'Humidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('rh', 'Ideal')->where('kontrol_kelembapan', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Dehumidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('rh', 'Ideal')->where('kontrol_kelembapan', 'Dehumidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>


</div>

<h3 class="h4 mb-4 text-gray-800">RH = Kering</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Humidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('rh', 'Kering')->where('kontrol_kelembapan', 'Humidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('rh', 'Kering')->where('kontrol_kelembapan', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Dehumidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('rh', 'Kering')->where('kontrol_kelembapan', 'Dehumidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Suhu Udara = Dingin</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Humidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Dingin')->where('kontrol_kelembapan', 'Humidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Dingin')->where('kontrol_kelembapan', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Dehumidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Dingin')->where('kontrol_kelembapan', 'Dehumidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Suhu Udara = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Humidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Ideal')->where('kontrol_kelembapan', 'Humidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Ideal')->where('kontrol_kelembapan', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Dehumidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Ideal')->where('kontrol_kelembapan', 'Dehumidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Suhu Udara = Panas</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Humidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Panas')->where('kontrol_kelembapan', 'Humidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Panas')->where('kontrol_kelembapan', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Dehumidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Panas')->where('kontrol_kelembapan', 'Dehumidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Suhu Daun = Dingin</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Humidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Dingin')->where('kontrol_kelembapan', 'Humidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Dingin')->where('kontrol_kelembapan', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Dehumidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Dingin')->where('kontrol_kelembapan', 'Dehumidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Suhu Daun = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Humidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Ideal')->where('kontrol_kelembapan', 'Humidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Ideal')->where('kontrol_kelembapan', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Dehumidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Ideal')->where('kontrol_kelembapan', 'Dehumidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Suhu Daun = Panas</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Humidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Panas')->where('kontrol_kelembapan', 'Humidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Panas')->where('kontrol_kelembapan', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Dehumidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Panas')->where('kontrol_kelembapan', 'Dehumidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Media Tanam = Kering</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Humidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'Kering')->where('kontrol_kelembapan', 'Humidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'Kering')->where('kontrol_kelembapan', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Dehumidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'Kering')->where('kontrol_kelembapan', 'Dehumidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Media Tanam = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Humidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'Ideal')->where('kontrol_kelembapan', 'Humidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'Ideal')->where('kontrol_kelembapan', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Dehumidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'Ideal')->where('kontrol_kelembapan', 'Dehumidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Media Tanam = Lembap</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Humidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'lembap')->where('kontrol_kelembapan', 'Humidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'lembap')->where('kontrol_kelembapan', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Dehumidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'lembap')->where('kontrol_kelembapan', 'Dehumidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">PPM = Kurang</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Humidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Kurang')->where('kontrol_kelembapan', 'Humidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Kurang')->where('kontrol_kelembapan', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Dehumidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Kurang')->where('kontrol_kelembapan', 'Dehumidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">PPM = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Humidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Ideal')->where('kontrol_kelembapan', 'Humidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Ideal')->where('kontrol_kelembapan', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Dehumidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Ideal')->where('kontrol_kelembapan', 'Dehumidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">PPM = Berlebih</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Humidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Berlebih')->where('kontrol_kelembapan', 'Humidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Berlebih')->where('kontrol_kelembapan', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Dehumidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Berlebih')->where('kontrol_kelembapan', 'Dehumidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">pH = Asam</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Humidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ph', 'Asam')->where('kontrol_kelembapan', 'Humidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('ph', 'Asam')->where('kontrol_kelembapan', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Dehumidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ph', 'Asam')->where('kontrol_kelembapan', 'Dehumidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">pH = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Humidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ph', 'Ideal')->where('kontrol_kelembapan', 'Humidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('ph', 'Ideal')->where('kontrol_kelembapan', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Dehumidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ph', 'Ideal')->where('kontrol_kelembapan', 'Dehumidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">pH = Basa</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Humidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ph', 'Basa')->where('kontrol_kelembapan', 'Humidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('ph', 'Basa')->where('kontrol_kelembapan', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Dehumidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ph', 'Basa')->where('kontrol_kelembapan', 'Dehumidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Oksigen = Kurang</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Humidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('oksigen', 'Kurang')->where('kontrol_kelembapan', 'Humidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('oksigen', 'Kurang')->where('kontrol_kelembapan', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Dehumidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('oksigen', 'Kurang')->where('kontrol_kelembapan', 'Dehumidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Oksigen = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Humidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('oksigen', 'Ideal')->where('kontrol_kelembapan', 'Humidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('oksigen', 'Ideal')->where('kontrol_kelembapan', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Dehumidifer Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('oksigen', 'Ideal')->where('kontrol_kelembapan', 'Dehumidifer Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<hr />

<!-- Content Row -->
<center><h2 class="h4 mb-4 text-gray-800">Jumlah Kejadian dari Kelas yang Muncul (Kontrol Nutrisi & Air)</h2></center>
 <div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    Jumlah Data Training</div>
                    <div class="h4 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$total_keseluruhan_vpd= $data = $this->db->select('*')->from('data_pelatihan')->get()->num_rows(); ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-globe fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                    Pompa Nutrisi AB Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$nomor1= $this->db->select('*')->from('data_pelatihan')->where('kontrol_nutrisiair', 'Pompa Nutrisi AB Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($nomor1/$total_keseluruhan_vpd), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$nomor2 = $this->db->select('*')->from('data_pelatihan')->where('kontrol_nutrisiair', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($nomor2/$total_keseluruhan_vpd), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Pompa Penguras Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$nomor3= $this->db->select('*')->from('data_pelatihan')->where('kontrol_nutrisiair', 'Pompa Penguras Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($nomor3/$total_keseluruhan_vpd), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<hr />

<center><h2 class="h4 mb-4 text-gray-800">Jumlah Kejadian dari Kategori yang Muncul (Kontrol Nutrisi & Air)</h2></center>

<h3 class="h4 mb-4 text-gray-800">RH = Sangat Lembap</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa Nutrisi AB Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('rh', 'Sangat Lembap')->where('kontrol_nutrisiair', 'Pompa Nutrisi AB Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('rh', 'Sangat Lembap')->where('kontrol_nutrisiair', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa Penguras Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('rh', 'Sangat Lembap')->where('kontrol_nutrisiair', 'Pompa Penguras Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>


</div>

<h3 class="h4 mb-4 text-gray-800">RH = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa Nutrisi AB Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('rh', 'Ideal')->where('kontrol_nutrisiair', 'Pompa Nutrisi AB Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('rh', 'Ideal')->where('kontrol_nutrisiair', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa Penguras Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('rh', 'Ideal')->where('kontrol_nutrisiair', 'Pompa Penguras Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>


</div>

<h3 class="h4 mb-4 text-gray-800">RH = Kering</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa Nutrisi AB Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('rh', 'Kering')->where('kontrol_nutrisiair', 'Pompa Nutrisi AB Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('rh', 'Kering')->where('kontrol_nutrisiair', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa Penguras Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('rh', 'Kering')->where('kontrol_nutrisiair', 'Pompa Penguras Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Suhu Udara = Dingin</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa Nutrisi AB Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Dingin')->where('kontrol_nutrisiair', 'Pompa Nutrisi AB Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Dingin')->where('kontrol_nutrisiair', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa Penguras Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Dingin')->where('kontrol_nutrisiair', 'Pompa Penguras Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Suhu Udara = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa Nutrisi AB Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Ideal')->where('kontrol_nutrisiair', 'Pompa Nutrisi AB Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Ideal')->where('kontrol_nutrisiair', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa Penguras Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Ideal')->where('kontrol_nutrisiair', 'Pompa Penguras Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Suhu Udara = Panas</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa Nutrisi AB Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Panas')->where('kontrol_nutrisiair', 'Pompa Nutrisi AB Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Panas')->where('kontrol_nutrisiair', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa Penguras Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Panas')->where('kontrol_nutrisiair', 'Pompa Penguras Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Suhu Daun = Dingin</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa Nutrisi AB Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Dingin')->where('kontrol_nutrisiair', 'Pompa Nutrisi AB Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Dingin')->where('kontrol_nutrisiair', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa Penguras Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Dingin')->where('kontrol_nutrisiair', 'Pompa Penguras Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Suhu Daun = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa Nutrisi AB Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Ideal')->where('kontrol_nutrisiair', 'Pompa Nutrisi AB Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Ideal')->where('kontrol_nutrisiair', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa Penguras Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Ideal')->where('kontrol_nutrisiair', 'Pompa Penguras Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Suhu Daun = Panas</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa Nutrisi AB Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Panas')->where('kontrol_nutrisiair', 'Pompa Nutrisi AB Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Panas')->where('kontrol_nutrisiair', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa Penguras Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Panas')->where('kontrol_nutrisiair', 'Pompa Penguras Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Media Tanam = Kering</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa Nutrisi AB Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'Kering')->where('kontrol_nutrisiair', 'Pompa Nutrisi AB Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'Kering')->where('kontrol_nutrisiair', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa Penguras Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'Kering')->where('kontrol_nutrisiair', 'Pompa Penguras Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Media Tanam = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa Nutrisi AB Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'Ideal')->where('kontrol_nutrisiair', 'Pompa Nutrisi AB Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'Ideal')->where('kontrol_nutrisiair', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa Penguras Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'Ideal')->where('kontrol_nutrisiair', 'Pompa Penguras Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Media Tanam = Lembap</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa Nutrisi AB Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'lembap')->where('kontrol_nutrisiair', 'Pompa Nutrisi AB Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'lembap')->where('kontrol_nutrisiair', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa Penguras Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'lembap')->where('kontrol_nutrisiair', 'Pompa Penguras Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">PPM = Kurang</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa Nutrisi AB Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Kurang')->where('kontrol_nutrisiair', 'Pompa Nutrisi AB Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Kurang')->where('kontrol_nutrisiair', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa Penguras Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Kurang')->where('kontrol_nutrisiair', 'Pompa Penguras Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">PPM = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa Nutrisi AB Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Ideal')->where('kontrol_nutrisiair', 'Pompa Nutrisi AB Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Ideal')->where('kontrol_nutrisiair', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa Penguras Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Ideal')->where('kontrol_nutrisiair', 'Pompa Penguras Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">PPM = Berlebih</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa Nutrisi AB Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Berlebih')->where('kontrol_nutrisiair', 'Pompa Nutrisi AB Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Berlebih')->where('kontrol_nutrisiair', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa Penguras Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Berlebih')->where('kontrol_nutrisiair', 'Pompa Penguras Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">pH = Asam</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa Nutrisi AB Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ph', 'Asam')->where('kontrol_nutrisiair', 'Pompa Nutrisi AB Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('ph', 'Asam')->where('kontrol_nutrisiair', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa Penguras Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ph', 'Asam')->where('kontrol_nutrisiair', 'Pompa Penguras Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">pH = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa Nutrisi AB Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ph', 'Ideal')->where('kontrol_nutrisiair', 'Pompa Nutrisi AB Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('ph', 'Ideal')->where('kontrol_nutrisiair', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa Penguras Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ph', 'Ideal')->where('kontrol_nutrisiair', 'Pompa Penguras Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">pH = Basa</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa Nutrisi AB Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ph', 'Basa')->where('kontrol_nutrisiair', 'Pompa Nutrisi AB Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('ph', 'Basa')->where('kontrol_nutrisiair', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa Penguras Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ph', 'Basa')->where('kontrol_nutrisiair', 'Pompa Penguras Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Oksigen = Kurang</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa Nutrisi AB Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('oksigen', 'Kurang')->where('kontrol_nutrisiair', 'Pompa Nutrisi AB Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('oksigen', 'Kurang')->where('kontrol_nutrisiair', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa Penguras Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('oksigen', 'Kurang')->where('kontrol_nutrisiair', 'Pompa Penguras Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Oksigen = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa Nutrisi AB Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('oksigen', 'Ideal')->where('kontrol_nutrisiair', 'Pompa Nutrisi AB Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('oksigen', 'Ideal')->where('kontrol_nutrisiair', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa Penguras Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('oksigen', 'Ideal')->where('kontrol_nutrisiair', 'Pompa Penguras Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<hr />

<!-- Content Row -->
<center><h2 class="h4 mb-4 text-gray-800">Jumlah Kejadian dari Kelas yang Muncul (pH)</h2></center>
 <div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    Jumlah Data Training</div>
                    <div class="h4 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$total_keseluruhan_vpd= $data = $this->db->select('*')->from('data_pelatihan')->get()->num_rows(); ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-globe fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                    Pompa pH Turun Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$nomor1= $this->db->select('*')->from('data_pelatihan')->where('kontrol_ph', 'Pompa pH Turun Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($nomor1/$total_keseluruhan_vpd), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$nomor2 = $this->db->select('*')->from('data_pelatihan')->where('kontrol_ph', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($nomor2/$total_keseluruhan_vpd), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Pompa pH Naik Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$nomor3= $this->db->select('*')->from('data_pelatihan')->where('kontrol_ph', 'Pompa pH Naik Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($nomor3/$total_keseluruhan_vpd), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<hr />

<center><h2 class="h4 mb-4 text-gray-800">Jumlah Kejadian dari Kategori yang Muncul (pH)</h2></center>

<h3 class="h4 mb-4 text-gray-800">RH = Sangat Lembap</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa pH Turun Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('rh', 'Sangat Lembap')->where('kontrol_ph', 'Pompa pH Turun Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('rh', 'Sangat Lembap')->where('kontrol_ph', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa pH Naik Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('rh', 'Sangat Lembap')->where('kontrol_ph', 'Pompa pH Naik Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>


</div>

<h3 class="h4 mb-4 text-gray-800">RH = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa pH Turun Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('rh', 'Ideal')->where('kontrol_ph', 'Pompa pH Turun Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('rh', 'Ideal')->where('kontrol_ph', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa pH Naik Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('rh', 'Ideal')->where('kontrol_ph', 'Pompa pH Naik Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>


</div>

<h3 class="h4 mb-4 text-gray-800">RH = Kering</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa pH Turun Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('rh', 'Kering')->where('kontrol_ph', 'Pompa pH Turun Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('rh', 'Kering')->where('kontrol_ph', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa pH Naik Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('rh', 'Kering')->where('kontrol_ph', 'Pompa pH Naik Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Suhu Udara = Dingin</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa pH Turun Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Dingin')->where('kontrol_ph', 'Pompa pH Turun Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Dingin')->where('kontrol_ph', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa pH Naik Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Dingin')->where('kontrol_ph', 'Pompa pH Naik Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Suhu Udara = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa pH Turun Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Ideal')->where('kontrol_ph', 'Pompa pH Turun Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Ideal')->where('kontrol_ph', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa pH Naik Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Ideal')->where('kontrol_ph', 'Pompa pH Naik Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Suhu Udara = Panas</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa pH Turun Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Panas')->where('kontrol_ph', 'Pompa pH Turun Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Panas')->where('kontrol_ph', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa pH Naik Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', 'Panas')->where('kontrol_ph', 'Pompa pH Naik Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Suhu Daun = Dingin</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa pH Turun Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Dingin')->where('kontrol_ph', 'Pompa pH Turun Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Dingin')->where('kontrol_ph', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa pH Naik Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Dingin')->where('kontrol_ph', 'Pompa pH Naik Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Suhu Daun = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa pH Turun Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Ideal')->where('kontrol_ph', 'Pompa pH Turun Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Ideal')->where('kontrol_ph', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa pH Naik Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Ideal')->where('kontrol_ph', 'Pompa pH Naik Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Suhu Daun = Panas</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa pH Turun Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Panas')->where('kontrol_ph', 'Pompa pH Turun Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Panas')->where('kontrol_ph', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa pH Naik Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', 'Panas')->where('kontrol_ph', 'Pompa pH Naik Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Media Tanam = Kering</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa pH Turun Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'Kering')->where('kontrol_ph', 'Pompa pH Turun Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'Kering')->where('kontrol_ph', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa pH Naik Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'Kering')->where('kontrol_ph', 'Pompa pH Naik Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Media Tanam = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa pH Turun Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'Ideal')->where('kontrol_ph', 'Pompa pH Turun Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'Ideal')->where('kontrol_ph', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa pH Naik Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'Ideal')->where('kontrol_ph', 'Pompa pH Naik Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Media Tanam = Lembap</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa pH Turun Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'lembap')->where('kontrol_ph', 'Pompa pH Turun Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'lembap')->where('kontrol_ph', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa pH Naik Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('media_tanam', 'lembap')->where('kontrol_ph', 'Pompa pH Naik Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">PPM = Kurang</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa pH Turun Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Kurang')->where('kontrol_ph', 'Pompa pH Turun Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Kurang')->where('kontrol_ph', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa pH Naik Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Kurang')->where('kontrol_ph', 'Pompa pH Naik Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">PPM = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa pH Turun Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Ideal')->where('kontrol_ph', 'Pompa pH Turun Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Ideal')->where('kontrol_ph', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa pH Naik Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Ideal')->where('kontrol_ph', 'Pompa pH Naik Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">PPM = Berlebih</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa pH Turun Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Berlebih')->where('kontrol_ph', 'Pompa pH Turun Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Berlebih')->where('kontrol_ph', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa pH Naik Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ppm', 'Berlebih')->where('kontrol_ph', 'Pompa pH Naik Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">pH = Asam</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa pH Turun Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ph', 'Asam')->where('kontrol_ph', 'Pompa pH Turun Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('ph', 'Asam')->where('kontrol_ph', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa pH Naik Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ph', 'Asam')->where('kontrol_ph', 'Pompa pH Naik Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">pH = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa pH Turun Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ph', 'Ideal')->where('kontrol_ph', 'Pompa pH Turun Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('ph', 'Ideal')->where('kontrol_ph', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa pH Naik Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ph', 'Ideal')->where('kontrol_ph', 'Pompa pH Naik Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">pH = Basa</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa pH Turun Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ph', 'Basa')->where('kontrol_ph', 'Pompa pH Turun Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('ph', 'Basa')->where('kontrol_ph', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa pH Naik Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('ph', 'Basa')->where('kontrol_ph', 'Pompa pH Naik Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Oksigen = Kurang</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa pH Turun Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('oksigen', 'Kurang')->where('kontrol_ph', 'Pompa pH Turun Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('oksigen', 'Kurang')->where('kontrol_ph', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa pH Naik Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('oksigen', 'Kurang')->where('kontrol_ph', 'Pompa pH Naik Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<h3 class="h4 mb-4 text-gray-800">Oksigen = Ideal</h3>

<div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pompa pH Turun Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('oksigen', 'Ideal')->where('kontrol_ph', 'Pompa pH Turun Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor1), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-full fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">-</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini = $this->db->select('*')->from('data_pelatihan')->where('oksigen', 'Ideal')->where('kontrol_ph', '-')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor2), 3, '.', ''); ?> </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-three-quarters fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pompa pH Naik Menyala</div>
                    <div class="h7 mb-0 font-weight-bold text-gray-800">Jumlah: <?=$ini= $this->db->select('*')->from('data_pelatihan')->where('oksigen', 'Ideal')->where('kontrol_ph', 'Pompa pH Naik Menyala')->get()->num_rows(); ?> Probabilitas: <?=number_format((float)($ini/$nomor3), 3, '.', ''); ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-battery-quarter fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<hr />

</div>
<!-- /.container-fluid -->



</div>
<!-- End of Main Content -->