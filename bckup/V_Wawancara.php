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
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Presales/CTR_Presales') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Form Wawancara</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.content-header -->

    <!-- Main content -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h3 class="h4">Form Wawancara</h3>
            </div>
            <div class="card-body">
                <?php echo $this->session->flashdata('pesan0'); ?>
                <form class="form-horizontal" action="<?php echo site_url('Presales/CTR_Presales/SimpanWawancara') ?>" method="POST">
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group-material mt-2">
                                <input type="hidden" name="id_permintaan" value="<?php echo $id_permintaan ?>">
                                </label>
                            </div>
                            <div class="form-group-material mt-2">
                                Diwawancarai Oleh <input type="text" name="diwawancarai" class="form-control form-control-sm" required>
                                </label>
                            </div>
                            <div class="form-group-material mt-2">
                                Jabatan
                                <input type="text" name="jabatan1" class="form-control form-control-sm required">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group-material mt-2">
                                Yang Diwawancara
                                <input type="text" name="diwawancara" class="form-control form-control-sm required">
                            </div>
                            <div class="form-group-material mt-2">
                                Jabatan
                                <input type="text" name="jabatan2" class="form-control form-control-sm required">
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
                            <td colspan="3" class="text-center"><textarea class="form-control" id="w1" cols="30" rows="5" placeholder="Jawaban:" name="w1" required></textarea></td>
                        </tr>

                        <tr>
                            <td style="width: 10px; vertical-align: middle;">2.</td>
                            <td>Apakah lokasi site termasuk lokasi yang banyak ditemukan di titik rawan</td>
                            <td>Melakukan proses pengamatan dan interview ke security</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-center"><textarea class="form-control" id="w2" cols="30" rows="5" placeholder="Jawaban:" name="w2" required></textarea></td>
                        </tr>

                        <tr>
                            <td style="width: 10px; vertical-align: middle;">3.</td>
                            <td>Bagaimana kondisi gambaran masyarakat sekitar terhadap perusahaan tersebut</td>
                            <td>Melakukan proses pengamatan dan interview ke security</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-center"><textarea class="form-control" id="w3" cols="30" rows="5" placeholder="Jawaban:" name="w3" required></textarea></td>
                        </tr>

                        <tr>
                            <td style="width: 10px; vertical-align: middle;">4.</td>
                            <td>Bagaimana kondisi keadaan lalu lintas terutama pada saat jam operasional</td>
                            <td>Melakukan proses pengamatan dan interview ke security</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-center"><textarea class="form-control" id="w4" cols="30" rows="5" placeholder="Jawaban:" name="w4" required></textarea></td>
                        </tr>

                        <tr>
                            <td style="width: 10px; vertical-align: middle;">5.</td>
                            <td>Bagaimana kinerja security yang ada pada saat ini</td>
                            <td>Melakukan interview ke user</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-center"><textarea class="form-control" id="w5" cols="30" rows="5" placeholder="Jawaban:" name="w5" required></textarea></td>
                        </tr>

                        <tr>
                            <td style="width: 10px; vertical-align: middle;">6.</td>
                            <td>Apakah ada kasus yang merugikan terhadap perusahaan yang diakibatkan oleh security</td>
                            <td>Melakukan interview ke user</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-center"><textarea class="form-control" id="w6" cols="30" rows="5" placeholder="Jawaban:" name="w6" required></textarea></td>
                        </tr>

                        <tr>
                            <td style="width: 10px; vertical-align: middle;">7.</td>
                            <td>Bagaimana security mengatasi kegiatan yang bersifat anomall,seperti pencurian dll</td>
                            <td>Melakukan interview ke security dan user </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-center"><textarea class="form-control" id="w7" cols="30" rows="5" placeholder="Jawaban:" name="w7" required></textarea></td>
                        </tr>

                        <tr>
                            <td style="width: 10px; vertical-align: middle;">8.</td>
                            <td>Apakah anggota yang bertugas saat ini telah memenuhi requitment yang telah ditentukan oleh SIGAP</td>
                            <td>Melakukan interview ke security dan user</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-center"><textarea class="form-control" id="w8" cols="30" rows="5" placeholder="Jawaban:" name="w8" required></textarea></td>
                        </tr>

                        <tr>
                            <td style="width: 10px; vertical-align: middle;">9.</td>
                            <td>Apakah keseluruhan anggota saat ini sudah melakukan pendidikan</td>
                            <td>Melakukan interview ke security</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-center"><textarea class="form-control" id="w9" cols="30" rows="5" placeholder="Jawaban:" name="w9" required></textarea></td>
                        </tr>

                        <tr>
                            <td style="width: 10px; vertical-align: middle;">10.</td>
                            <td>Apakah saat ini sudah mempunyai KTA</td>
                            <td>Melakukan interview ke security</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-center"><textarea class="form-control" id="w10" cols="30" rows="5" placeholder="Jawaban:" name="w10" required></textarea></td>
                        </tr>

                        <tr>
                            <td style="width: 10px; vertical-align: middle;">11.</td>
                            <td class="justify">Apakah keluhan dan harapan anggota security</td>
                            <td>Melakukan interview ke security</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-center"><textarea class="form-control" id="w11" cols="30" rows="5" placeholder="Jawaban:" name="w11" required></textarea></td>
                        </tr>
                    </table>

                    <div class="line"></div>
                    <div class="form-group row">
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary"><a class="text-white" href="<?php echo site_url('Presales/CTR_Presales') ?>">Cancel</a></button>
                            <button type="submit" class="btn btn-primary">Next</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>