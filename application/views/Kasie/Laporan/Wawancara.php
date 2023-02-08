<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Wawancara</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Presales/CTR_Admin') ?>">Home</a></li>
                        <li class="breadcrumb-item active"><a href="<?php echo site_url('Kasie/CTR_Kasie') ?>">Laporan</a></li>
                        <li class="breadcrumb-item active"><a href="<?php echo site_url('Kasie/CTR_Kasie/Detail') ?>">Daftar Assesment</a></li>
                        <li class="breadcrumb-item active">Form Wawancara</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php foreach ($gabung as $row) { ?>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h3 class="h4">Form Wawancara <?php echo $row->lokasi ?> </h3>
                </div>

                <div class="card-body">

                    <form class="form-horizontal" action="" method="POST">
                        <div class="row">
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group-material mt-2">
                                    Diwawancarai Oleh <input type="text" name="diwawancarai" readonly class="form-control  form-control-sm" value="<?php echo $row->diwawancarai ?>">
                                    </label>
                                </div>
                                <div class="form-group-material mt-2">
                                    Jabatan
                                    <input type="text" name="jabatan1" readonly class="form-control  form-control-sm" value="<?php echo $row->jabatan1 ?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group-material mt-2">
                                    Yang Diwawancara
                                    <input type="text" name="diwawancara" readonly class="form-control  form-control-sm" value="<?php echo $row->diwawancara ?>">
                                </div>
                                <div class="form-group-material mt-2">
                                    Jabatan
                                    <input type="text" name="jabatan2" readonly class="form-control  form-control-sm" value="<?php echo $row->jabatan2 ?>">
                                </div>
                            </div>
                        </div>
                        <div class="line">
                            <hr>
                        </div>
                        <div class="row text-center mb-4">
                            <div class="col-sm-12">
                                <h1>Wawancara</h1>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <tr class="text-center">
                                <th>No</th>
                                <th>Pertanyaan</th>
                                <th>Proses</th>
                            </tr>
                            <tr>
                                <td style="width: 10px; vertical-align: middle;">1.</td>
                                <td>Bagaimana kondisi wilayah sekitar site, seperti tingkat kriminalitas dan
                                    tindakan kejahatan lainnya</td>
                                <td> Melakukan interview ke security dan user</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-center"><textarea readonly class="form-control " id="w1" cols="30" rows="5" placeholder="Jawaban:" name="w1"><?php echo $row->w1 ?></textarea></td>
                            </tr>

                            <tr>
                                <td style="width: 10px; vertical-align: middle;">2.</td>
                                <td>Apakah lokasi site termasuk lokasi yang banyak ditemukan di titik rawan</td>
                                <td>Melakukan proses pengamatan dan interview ke security</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-center"><textarea readonly class="form-control " id="w2" cols="30" rows="5" placeholder="Jawaban:" name="w2"><?php echo $row->w2 ?></textarea></td>
                            </tr>

                            <tr>
                                <td style="width: 10px; vertical-align: middle;">3.</td>
                                <td>Bagaimana kondisi gambaran masyarakat sekitar terhadap perusahaan tersebut</td>
                                <td>Melakukan proses pengamatan dan interview ke security</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-center"><textarea readonly class="form-control " id="w3" cols="30" rows="5" placeholder="Jawaban:" name="w3"><?php echo $row->w3 ?></textarea></td>
                            </tr>

                            <tr>
                                <td style="width: 10px; vertical-align: middle;">4.</td>
                                <td>Bagaimana kondisi keadaan lalu lintas terutama pada saat jam operasional</td>
                                <td>Melakukan proses pengamatan dan interview ke security</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-center"><textarea readonly class="form-control " id="w4" cols="30" rows="5" placeholder="Jawaban:" name="w4"><?php echo $row->w4 ?></textarea></td>
                            </tr>

                            <tr>
                                <td style="width: 10px; vertical-align: middle;">5.</td>
                                <td>Bagaimana kinerja security yang ada pada saat ini</td>
                                <td>Melakukan interview ke user</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-center"><textarea readonly class="form-control " id="w5" cols="30" rows="5" placeholder="Jawaban:" name="w5"><?php echo $row->w5 ?></textarea></td>
                            </tr>

                            <tr>
                                <td style="width: 10px; vertical-align: middle;">6.</td>
                                <td>Apakah ada kasus yang merugikan terhadap perusahaan yang diakibatkan oleh security</td>
                                <td>Melakukan interview ke user</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-center"><textarea readonly class="form-control " id="w6" cols="30" rows="5" placeholder="Jawaban:" name="w6"><?php echo $row->w6 ?></textarea></td>
                            </tr>

                            <tr>
                                <td style="width: 10px; vertical-align: middle;">7.</td>
                                <td>Bagaimana security mengatasi kegiatan yang bersifat anomall,seperti pencurian dll</td>
                                <td>Melakukan interview ke security dan user </td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-center"><textarea readonly class="form-control " id="w7" cols="30" rows="5" placeholder="Jawaban:" name="w7"><?php echo $row->w7 ?></textarea></td>
                            </tr>

                            <tr>
                                <td style="width: 10px; vertical-align: middle;">8.</td>
                                <td>Apakah anggota yang bertugas saat ini telah memenuhi requitment yang telah ditentukan oleh SIGAP</td>
                                <td>Melakukan interview ke security dan user</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-center"><textarea readonly class="form-control " id="w8" cols="30" rows="5" placeholder="Jawaban:" name="w8"><?php echo $row->w8 ?></textarea></td>
                            </tr>

                            <tr>
                                <td style="width: 10px; vertical-align: middle;">9.</td>
                                <td>Apakah keseluruhan anggota saat ini sudah melakukan pendidikan</td>
                                <td>Melakukan interview ke security</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-center"><textarea readonly class="form-control " id="w9" cols="30" rows="5" placeholder="Jawaban:" name="w9"><?php echo $row->w9 ?></textarea></td>
                            </tr>

                            <tr>
                                <td style="width: 10px; vertical-align: middle;">10.</td>
                                <td>Apakah saat ini sudah mempunyai KTA</td>
                                <td>Melakukan interview ke security</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-center"><textarea readonly class="form-control " id="w10" cols="30" rows="5" placeholder="Jawaban:" name="w10"><?php echo $row->w10 ?></textarea></td>
                            </tr>

                            <tr>
                                <td style="width: 10px; vertical-align: middle;">11.</td>
                                <td class="justify">Apakah keluhan dan harapan anggota security</td>
                                <td>Melakukan interview ke security</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-center"><textarea readonly class="form-control " id="w11" cols="30" rows="5" placeholder="Jawaban:" name="w11" readonly><?php echo $row->w11 ?></textarea></td>
                            </tr>
                        </table>
                        <div class="line"></div>
                        <div class="form-group row">
                            <div class="col-sm-12 text-center">
                                <a class="text-white btn btn-primary" href="<?php echo site_url('Kasie/CTR_Kasie/Detail') ?>">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- /.content -->
</div>