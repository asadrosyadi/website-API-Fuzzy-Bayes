<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">

            <?= form_open_multipart('device/fuzzyrule'); ?>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row" hidden> 
                <label for="name" class="col-sm-2 col-form-label">Nama Pengguna :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>" readonly>
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="HWID" class="col-sm-2 col-form-label">HWID</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="HWID" name="HWID" value="<?= $user['HWID']; ?>" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Token</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="token" name="token" value="<?= $user['token']; ?>" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Min RH (a)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="min_rh" name="min_rh" value="<?= $rule['min_rh']; ?>">
                    <?= form_error('min_rh', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Mid RH (b)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="mid_rh" name="mid_rh" value="<?= $rule['mid_rh']; ?>">
                    <?= form_error('mid_rh', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Mid2 RH (c)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="mid2_rh" name="mid2_rh" value="<?= $rule['mid2_rh']; ?>">
                    <?= form_error('mid2_rh', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Max RH (d)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="max_rh" name="max_rh" value="<?= $rule['max_rh']; ?>">
                    <?= form_error('max_rh', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Min Suhu Udara (a)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="min_suhu_udara" name="min_suhu_udara" value="<?= $rule['min_suhu_udara']; ?>">
                    <?= form_error('min_suhu_udara', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Mid Suhu Udara (b)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="mid_suhu_udara" name="mid_suhu_udara" value="<?= $rule['mid_suhu_udara']; ?>">
                    <?= form_error('mid_suhu_udara', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Mid2 Suhu Udara (c)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="mid2_suhu_udara" name="mid2_suhu_udara" value="<?= $rule['mid2_suhu_udara']; ?>">
                    <?= form_error('mid2_suhu_udara', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Max Suhu Udara (d)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="max_suhu_udara" name="max_suhu_udara" value="<?= $rule['max_suhu_udara']; ?>">
                    <?= form_error('max_suhu_udara', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Min Suhu Daun (a)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="min_suhu_daun" name="min_suhu_daun" value="<?= $rule['min_suhu_daun']; ?>">
                    <?= form_error('min_suhu_daun', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Mid Suhu Daun (b)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="mid_suhu_daun" name="mid_suhu_daun" value="<?= $rule['mid_suhu_daun']; ?>">
                    <?= form_error('mid_suhu_daun', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Mid2 Suhu Daun (c)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="mid2_suhu_daun" name="mid2_suhu_daun" value="<?= $rule['mid2_suhu_daun']; ?>">
                    <?= form_error('mid2_suhu_daun', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Max Suhu Daun (d)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="max_suhu_daun" name="max_suhu_daun" value="<?= $rule['max_suhu_daun']; ?>">
                    <?= form_error('max_suhu_daun', '<small class=                                                                                                                                                                                                                "text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Min Media Tanam (a)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="min_media_tanam" name="min_media_tanam" value="<?= $rule['min_media_tanam']; ?>">
                    <?= form_error('min_media_tanam', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Mid Media Tanam (b)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="mid_media_tanam" name="mid_media_tanam" value="<?= $rule['mid_media_tanam']; ?>">
                    <?= form_error('mid_media_tanam', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Mid2 Media Tanam (c)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="mid2_media_tanam" name="mid2_media_tanam" value="<?= $rule['mid2_media_tanam']; ?>">
                    <?= form_error('mid2_media_tanam', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Max Media Tanam (d)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="max_media_tanam" name="max_media_tanam" value="<?= $rule['max_media_tanam']; ?>">
                    <?= form_error('max_media_tanam', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Min PPM (a)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="min_ppm" name="min_ppm" value="<?= $rule['min_ppm']; ?>">
                    <?= form_error('min_ppm', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Mid PPM (b)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="mid_ppm" name="mid_ppm" value="<?= $rule['mid_ppm']; ?>">
                    <?= form_error('mid_ppm', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Mid2 PPM (c)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="mid2_ppm" name="mid2_ppm" value="<?= $rule['mid2_ppm']; ?>">
                    <?= form_error('mid2_ppm', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Max PPM (d)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="max_ppm" name="max_ppm" value="<?= $rule['max_ppm']; ?>">
                    <?= form_error('max_ppm', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Min pH (a)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="min_ph" name="min_ph" value="<?= $rule['min_ph']; ?>">
                    <?= form_error('min_ph', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Mid pH (b)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="mid_ph" name="mid_ph" value="<?= $rule['mid_ph']; ?>">
                    <?= form_error('mid_ph', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Mid2 pH (c)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="mid2_ph" name="mid2_ph" value="<?= $rule['mid2_ph']; ?>">
                    <?= form_error('mid2_ph', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Max pH (d)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="max_ph" name="max_ph" value="<?= $rule['max_ph']; ?>">
                    <?= form_error('max_ph', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Min Oksigen (a)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="min_oksigen" name="min_oksigen" value="<?= $rule['min_oksigen']; ?>">
                    <?= form_error('min_oksigen', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Mid Oksigen (b)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="mid_oksigen" name="mid_oksigen" value="<?= $rule['mid_oksigen']; ?>">
                    <?= form_error('mid_oksigen', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Mid2 Oksigen (c)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="mid2_oksigen" name="mid2_oksigen" value="<?= $rule['mid2_oksigen']; ?>">
                    <?= form_error('mid2_oksigen', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Max Oksigen (d)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="max_oksigen" name="max_oksigen" value="<?= $rule['max_oksigen']; ?>">
                    <?= form_error('max_oksigen', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Waktu Jeada Pembacaan Sensor</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="jeda_pembacaan" name="jeda_pembacaan" value="<?= $rule['jeda_pembacaan']; ?>">
                    <?= form_error('jeda_pembacaan', '<small class="text-danger pl-3">', '</small>'); ?>
                    <h6>dalam hitungan menit. </h6>

                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Waktu Pompa Penguras</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="waktu_penguras" name="waktu_penguras" value="<?= $rule['waktu_penguras']; ?>">
                    <?= form_error('waktu_penguras', '<small class="text-danger pl-3">', '</small>'); ?>
                    <h6>dalam hitungan menit. </h6>
                </div>
            </div>


            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>


            </form>


        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->