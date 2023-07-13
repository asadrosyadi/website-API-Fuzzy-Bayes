<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"> &nbsp; &nbsp; &nbsp; <?= $title; ?></h2>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                </nav>
            </div>
        </div>
    </div>
</div>
</br>
<center> <h4 class="page-title text-truncate text-dark font-weight-medium mb-1"> &nbsp; &nbsp; &nbsp; History Device</h4></center>


<div class="container-fluid">
<?php
foreach ($data2 as $u) { //untuk menampilkan variabel data yang diangkut dari controller
    ?>
<?php echo anchor('userdata/rh/'. $u->HWID, '<button type="button" class="btn btn-success text-center">Grafik RH</button>'); ?>  &nbsp;
<?php echo anchor('userdata/suhu_udara/'. $u->HWID, '<button type="button" class="btn btn-info text-center">Grafik Suhu Udara</button>'); ?> &nbsp;
<?php echo anchor('userdata/suhu_daun/'. $u->HWID, '<button type="button" class="btn btn-secondary text-center">Grafik Suhu Daun</button>'); ?>&nbsp;
<?php echo anchor('userdata/media_tanam/'. $u->HWID, '<button type="button" class="btn btn-warning text-center">Grafik Media Tanam</button>'); ?> &nbsp;
<?php echo anchor('userdata/ppm/'. $u->HWID, '<button type="button" class="btn btn-primary text-center">Grafik PPM</button>'); ?> &nbsp;
<?php echo anchor('userdata/ph/'. $u->HWID, '<button type="button" class="btn btn-danger text-center">Grafik pH</button>'); ?>&nbsp;
<?php echo anchor('userdata/oksigen/'. $u->HWID, '<button type="button" class="btn btn-success text-center">Grafik Oksigen</button>'); ?>&nbsp;
<?php } ?>
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="table table-hover">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Time</th>
                                    <th>RH</th>
                                    <th>Suhu Udara</th>
                                    <th>Suhu Daun</th>
                                    <th>Media Tanam</th>
                                    <th>PPM</th>
                                    <th>pH</th>
                                    <th>Oksigen</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data as $u) { //untuk menampilkan variabel data yang diangkut dari controller
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $u->time ?></td>
                                        <td><?php echo $u->rh ?></td>
                                        <td><?php echo $u->suhu_udara ?></td>
                                        <td><?php echo $u->suhu_daun ?></td>
                                        <td><?php echo $u->media_tanam ?></td>
                                        <td><?php echo $u->ppm ?></td>
                                        <td><?php echo $u->ph ?></td>
                                        <td><?php echo $u->oksigen ?></td>
                                        <td>  </td>

                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <center><?php echo anchor('userdata/', '<button type="button" class="btn btn-secondary text-center">Kembali</button>'); ?>  &nbsp;</center>

</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'excel', 'pdf', 'csv'
            ]
        });
    });
</script>