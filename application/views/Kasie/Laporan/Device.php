<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Survey Device Planning</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Presales/CTR_Admin') ?>">Home</a></li>
                        <li class="breadcrumb-item active"><a href="<?php echo site_url('Kasie/CTR_Kasie') ?>">Laporan</a></li>
                        <li class="breadcrumb-item active"><a href="<?php echo site_url('Kasie/CTR_Kasie/Detail') ?>">Daftar Assesment</a></li>
                        <li class="breadcrumb-item active">Form Device</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4">Form Survey Device Planning</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <label class="col form-control-label mb-4">
                                <h3>A. CCTV</h3>
                            </label>
                        </div>
                        <?php foreach ($isiD as $row) { ?>
                            <form class="form-horizontal" action="<?php echo site_url('Presales/CTR_Admin/SimpanDevice') ?>" method="POST" style="overflow: auto;">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td style="width: 250px">
                                                <div class="status text-center mb-3">
                                                    Apakah Perusahaan sudah ada CCTV
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 text-center">
                                                        Ada<br>
                                                        <input type="radio" value="Ada" <?php echo ($row->sudah_ada_cctv == 'Ada' ? ' checked' : ''); ?> disabled name="sudah_ada_cctv">
                                                    </div>
                                                    <div class="col-sm-6 text-center">
                                                        Tidak Ada<br>
                                                        <input type="radio" value="Tidak" <?php echo ($row->sudah_ada_cctv == 'Tidak' ? ' checked' : ''); ?> disabled name="sudah_ada_cctv">
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="width: 20px;">
                                                <div class="form-group">
                                                    Berapa Banyak
                                                    <input type="text" class="form-control form-control-sm" readonly value="<?php echo $row->berapa_cctv ?>" name="berapa_cctv">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    Merk CCTV
                                                    <input type="text" class="form-control form-control-sm" readonly value="<?php echo $row->merk_cctv ?>" name="merk_cctv">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    Type CCTV
                                                    <input type="text" class="form-control form-control-sm" readonly value="<?php echo $row->type_cctv ?>" name="type_cctv">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="status text-center mb-3">
                                                    Apabila CCTV sudah terpasang apakah perlu tambahan
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 text-center">
                                                        Perlu<br>
                                                        <input type="radio" value="Perlu" <?php echo ($row->tambahan_cctv == 'Perlu' ? ' checked' : ''); ?> disabled name="tambahan_cctv">
                                                    </div>
                                                    <div class="col-sm-6 text-center">
                                                        Tidak Perlu<br>
                                                        <input type="radio" value="Tidak Perlu" <?php echo ($row->tambahan_cctv == 'Tidak Perlu' ? ' checked' : ''); ?> disabled name="tambahan_cctv">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    Berapa Banyak
                                                    <input type="text" class="form-control form-control-sm" readonly value="<?php echo $row->berapa_tambahan_cctv ?>" name="berapa_tambahan_cctv">
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <div class="form-group">
                                                    Catatan Tambahan
                                                    <textarea readonly class="form-control" rows="4" name="catatan_1"><?php echo $row->catatan_1 ?></textarea>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="status text-center mb-3">
                                                    Apakah selama ini CCTV mengalami kendala
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 text-center">
                                                        Ada<br>
                                                        <input type="radio" value="Ada" <?php echo ($row->kendala_cctv == 'Ada' ? ' checked' : ''); ?> disabled name="kendala_cctv">
                                                    </div>
                                                    <div class="col-sm-6 text-center">
                                                        Tidak Ada<br>
                                                        <input type="radio" value="Tidak Ada" <?php echo ($row->kendala_cctv == 'Tidak Ada' ? ' checked' : ''); ?> disabled name="kendala_cctv">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    Seberapa Sering
                                                    <input type="text" class="form-control form-control-sm" readonly value="<?php echo $row->berapa_sering_kendala ?>" name="berapa_sering_kendala">
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <div class="form-group">
                                                    Catatan Tambahan
                                                    <textarea readonly class="form-control" rows="4" name="catatan_2"> <?php echo $row->catatan_2 ?></textarea>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align: middle;">
                                                <div class="status text-center mb-3">
                                                    Apakah CCTV di monitoring oleh petugas keamanan
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 text-center">
                                                        Ya<br>
                                                        <input type="radio" value="Ya" <?php echo ($row->monitoring_cctv == 'Ya' ? ' checked' : ''); ?> disabled name="monitoring_cctv">
                                                    </div>
                                                    <div class="col-sm-6 text-center">
                                                        Tidak<br>
                                                        <input type="radio" value="Tidak" <?php echo ($row->monitoring_cctv == 'Tidak' ? ' checked' : ''); ?> disabled name="monitoring_cctv">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    Jumlah Petugas
                                                    <input type="text" class="form-control form-control-sm" readonly value="<?php echo $row->jumlah_petugas ?>" name="jumlah_petugas">
                                                </div>
                                                <div class="form-group">
                                                    Jumlah Layar Monitoring
                                                    <input type="text" class="form-control form-control-sm" readonly value="<?php echo $row->jumlah_monitor ?>" name="jumlah_monitor">
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <div class="form-group">
                                                    Catatan
                                                    <textarea readonly class="form-control" rows="4" name="catatan_3"><?php echo $row->catatan_3 ?></textarea>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table><br>
                                <label class="col form-control-label mb-4 text-center">
                                    <h3>Fitur Khusus</h3>
                                </label>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td style="vertical-align: middle;">
                                                <div class="status text-center mb-3">
                                                    Apakah CCTV sudah berfungsi sebagai pengukur suhu tubuh
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 text-center">
                                                        Sudah<br>
                                                        <input type="radio" value="Sudah" <?php echo ($row->cctv_suhu_tubuh == 'Sudah' ? ' checked' : ''); ?> disabled name="cctv_suhu_tubuh">
                                                    </div>
                                                    <div class="col-sm-6 text-center">
                                                        Belum<br>
                                                        <input type="radio" value="Belum" <?php echo ($row->cctv_suhu_tubuh == 'Belum' ? ' checked' : ''); ?> disabled name="cctv_suhu_tubuh">
                                                    </div>
                                                </div>
                                            </td>
                                            <td rowspan="5">
                                                <div class="form-group text-center">
                                                    Catatan Tambahan
                                                    <textarea readonly class="form-control" rows="16" name="catatan_4"><?php echo $row->catatan_4 ?></textarea>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align: middle;">
                                                <div class="status text-center mb-3">
                                                    Apakah CCTV sudah berfungsi sebagai penghitung orang
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 text-center">
                                                        Sudah<br>
                                                        <input type="radio" value="Sudah" <?php echo ($row->cctv_hitung_orang == 'Sudah' ? ' checked' : ''); ?> disabled name="cctv_hitung_orang">
                                                    </div>
                                                    <div class="col-sm-6 text-center">
                                                        Belum<br>
                                                        <input type="radio" value="Belum" <?php echo ($row->cctv_hitung_orang == 'Belum' ? ' checked' : ''); ?> disabled name="cctv_hitung_orang">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align: middle;">
                                                <div class="status text-center mb-3">
                                                    Apakah CCTV sudah berfungsi sebagai HEAT MAP
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 text-center">
                                                        Sudah<br>
                                                        <input type="radio" value="Sudah" <?php echo ($row->cctv_heat_map == 'Sudah' ? ' checked' : ''); ?> disabled name="cctv_heat_map">
                                                    </div>
                                                    <div class="col-sm-6 text-center">
                                                        Belum<br>
                                                        <input type="radio" value="Belum" <?php echo ($row->cctv_heat_map == 'Belum' ? ' checked' : ''); ?> disabled name="cctv_heat_map">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align: middle;">
                                                <div class="status text-center mb-3">
                                                    Apakah CCTV sudah berfungsi sebagai face recognize
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 text-center">
                                                        Sudah<br>
                                                        <input type="radio" value="Sudah" <?php echo ($row->cctv_face_recognize == 'Sudah' ? ' checked' : ''); ?> disabled name="cctv_face_recognize">
                                                    </div>
                                                    <div class="col-sm-6 text-center">
                                                        Belum<br>
                                                        <input type="radio" value="Belum" <?php echo ($row->cctv_face_recognize == 'Belum' ? ' checked' : ''); ?> disabled name="cctv_face_recognize">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align: middle;">
                                                <div class="status text-center mb-3">
                                                    Apakah CCTV sudah berfungsi sebagai line crossing/alarm
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 text-center">
                                                        Sudah<br>
                                                        <input type="radio" value="Sudah" <?php echo ($row->cctv_line_crossing == 'Sudah' ? ' checked' : ''); ?> disabled name="cctv_line_crossing">
                                                    </div>
                                                    <div class="col-sm-6 text-center">
                                                        Belum<br>
                                                        <input type="radio" value="Belum" <?php echo ($row->cctv_line_crossing == 'Belum' ? ' checked' : ''); ?> disabled name="cctv_line_crossing">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <label class="col form-control-label mb-4">
                                <h3>B. Access Control</h3>
                            </label>
                        </div>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td style="width: 250px">
                                        <div class="status text-center mb-3">
                                            Apakah Perusahaan sudah memiliki access control
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 text-center">
                                                Ada<br>
                                                <input type="radio" value="Ada" <?php echo ($row->memiliki_access_control == 'Ada' ? ' checked' : ''); ?> disabled name="memiliki_access_control">
                                            </div>
                                            <div class="col-sm-6 text-center">
                                                Tidak Ada<br>
                                                <input type="radio" value="Tidak Ada" <?php echo ($row->memiliki_access_control == 'Tidak Ada' ? ' checked' : ''); ?> disabled name="memiliki_access_control">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            Berapa Banyak
                                            <input type="text" class="form-control form-control-sm" readonly value="<?php echo $row->berapa_access ?>" name="berapa_access">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            Merk Access Control
                                            <input type="text" class="form-control form-control-sm" readonly value="<?php echo $row->merk_access ?>" name="merk_access">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 250px">
                                        <div class="status text-center mb-3">
                                            Apakah access control yang sudah terpasang terintegrasi dengan sistem lain
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 text-center">
                                                Sudah<br>
                                                <input type="radio" value="Sudah" <?php echo ($row->access_terintegrasi == 'Sudah' ? ' checked' : ''); ?> disabled name="access_terintegrasi">
                                            </div>
                                            <div class="col-sm-6 text-center">
                                                Belum<br>
                                                <input type="radio" value="Belum" <?php echo ($row->access_terintegrasi == 'Belum' ? ' checked' : ''); ?> disabled name="access_terintegrasi">
                                            </div>
                                        </div>
                                    </td>
                                    <td colspan="2">
                                        <div class="form-group">
                                            Catatan
                                            <textarea readonly class="form-control" rows="4" name="catatan_5"><?php echo $row->catatan_5 ?></textarea>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table><br>
                        <label class="col form-control-label mb-3 text-center">
                            <h3>Fitur Khusus</h3>
                        </label>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td style="vertical-align: middle;">
                                        <div class="status text-center mb-4">
                                            Saat ini access control digunakan dengan
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 text-center">
                                                Access Card<br>
                                                <input type="radio" value="Access Card" <?php echo ($row->access_digunakan_dengan == 'Access Card' ? ' checked' : ''); ?> disabled name="access_digunakan_dengan">
                                            </div>
                                            <div class="col-sm-3 text-center">
                                                Finger<br>
                                                <input type="radio" value="Finger" <?php echo ($row->access_digunakan_dengan == 'Finger' ? ' checked' : ''); ?> disabled name="access_digunakan_dengan">
                                            </div>
                                            <div class="col-sm-3 text-center">
                                                Face Recognize<br>
                                                <input type="radio" value="Face Recognize" <?php echo ($row->access_digunakan_dengan == 'Face Recognize' ? ' checked' : ''); ?> disabled name="access_digunakan_dengan">
                                            </div>
                                            <div class="col-sm-3 text-center">
                                                Face Recognize + Thermal<br>
                                                <input type="radio" value="Face Recognize + Thermal" <?php echo ($row->access_digunakan_dengan == 'Face Recognize + Thermal' ? ' checked' : ''); ?> disabled name="access_digunakan_dengan">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <td>
                                    <div class="form-group text-center">
                                        <div class="text-center mb-3">
                                            Catatan
                                        </div>
                                        <textarea readonly class="form-control" rows="7" name="catatan_6"><?php echo $row->catatan_6 ?></textarea>
                                    </div>
                                </td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <label class="col form-control-label mb-4">
                                <h3>C. Teknis Pemasangan</h3>
                            </label>
                        </div>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="status text-center mb-3">
                                            Topologi jaringan sudah fibel optik
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 text-center">
                                                Sudah<br>
                                                <input type="radio" value="Sudah" <?php echo ($row->topologi_fibel_optik == 'Sudah' ? ' checked' : ''); ?> disabled name="topologi_fibel_optik">
                                            </div>
                                            <div class="col-sm-6 text-center">
                                                Belum<br>
                                                <input type="radio" value="Belum" <?php echo ($row->topologi_fibel_optik == 'Belum' ? ' checked' : ''); ?> disabled name="topologi_fibel_optik">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="status text-center mb-3">
                                            Apakah jaringan berdiri sendiri atau tidak
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 text-center">
                                                Ya<br>
                                                <input type="radio" value="Ya" <?php echo ($row->jaringan_berdiri_sendiri == 'Ya' ? ' checked' : ''); ?> disabled name="jaringan_berdiri_sendiri">
                                            </div>
                                            <div class="col-sm-6 text-center">
                                                Tidak<br>
                                                <input type="radio" value="Tidak" <?php echo ($row->jaringan_berdiri_sendiri == 'Tidak' ? ' checked' : ''); ?> disabled name="jaringan_berdiri_sendiri">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class="form-group">
                                            <div class="text-center mb-3">
                                                <h4>
                                                    Catatan & Summary Keseluruhan
                                                </h4>
                                            </div>
                                            <textarea readonly class="form-control" rows="6" name="catatan_7"><?php echo $row->catatan_7 ?></textarea>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                        <div class="col-sm-12 text-center">
                            <a class="text-white btn btn-primary" href="<?php echo site_url('Kasie/CTR_Kasie/Detail') ?>">Back</a>
                        </div>
                    </div>
                    </form>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <!-- /.content -->
</div>