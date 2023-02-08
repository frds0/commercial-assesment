<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Form Ceklis</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Presales/CTR_Presales') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Ceklis</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->

        <!-- Main content -->
        <div class="container-fluid mt-4">
            <!-- <?php echo $this->session->flashdata('pesan0'); ?> -->
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flashdata'); ?>"></div>
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Form Ceklis </h1>
                </div>
                <!-- /.card-header -->
                <div class="card" style="overflow: auto;">
                    <form class="form-horizontal" action="<?php echo site_url('Presales/CTR_Presales/SimpanCeklis/') ?>" enctype="multipart/form-data" method="POST">
                        <div class="container">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th rowspan="3" style="vertical-align: middle;">No</th>
                                        <th colspan="2" rowspan="3" style="vertical-align: middle;">Assesment Requirements</th>
                                        <th colspan="2">Kondisi</th>
                                        <th rowspan="3" style="vertical-align: middle;">Keterangan</th>
                                    </tr>
                                    <tr>
                                        <th>Ada</th>
                                        <th>Tidak</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $r1 = $this->db->query("SELECT * from ms_kategori_ceklis a LEFT JOIN ms_pertanyaan_ceklis b ON a.id_kategori = b.id_kategori LEFT JOIN ms_jawaban_ceklis c ON b.id_pertanyaan_ceklis = c.id_pertanyaan_ceklis LEFT JOIN tbl_cekliss d ON d.id_ceklis = c.id_ceklis WHERE d.id_permintaan = $id_permintaan")->result_array();
                                    $no = 1;
                                    foreach ($r1 as $r1) {
                                    ?>
                                        <tr>
                                            <input type="hidden" name="id_permintaan" value="<?php echo $r1['id_permintaan'] ?>">
                                            <?php
                                            $r2 = $this->db->query("SELECT * from ms_jawaban_ceklis a LEFT JOIN ms_pertanyaan_ceklis b ON a.id_pertanyaan_ceklis = b.id_pertanyaan_ceklis LEFT JOIN ms_kategori_ceklis c ON c.id_kategori = b.id_kategori WHERE a.id_jawaban_ceklis = '$r1[id_jawaban_ceklis]' and c.id_kategori = '$r1[id_kategori]'");
                                            $total_r2 = $r2->num_rows();
                                            $r3 = $r2->result_array();
                                            ?>
                                            <td rowspan="<?php echo $total_r2 ?>" style="vertical-align: middle;" class="text-center"><?php echo $no; ?></td>
                                            <td rowspan="<?php echo $total_r2 ?>" style="vertical-align: middle;" class="text-center w-25"><?php echo $r1['kategori_ceklis'] ?></td>
                                            <?php foreach ($r3 as $r3) { ?>
                                                <td style="vertical-align: middle;"><?php echo $r3['pertanyaan_ceklis'] ?></td>
                                                <td style="vertical-align: middle;" class="text-center">
                                                    <input type="radio" class="form-control-sm" name="kondisi[]<?php echo $r3['id_pertanyaan_ceklis'] ?>" value="Ada" required>
                                                </td>
                                                <td style="vertical-align: middle;" class="text-center">
                                                    <input type="radio" class="form-control-sm" name="kondisi[]<?php echo $r3['id_pertanyaan_ceklis'] ?>" value="Tidak">
                                                </td>
                                                <td>
                                                    <input type="hidden" name="id_jawaban_ceklis[]" value="<?php echo $r3['id_jawaban_ceklis'] ?>">
                                                    <input type="text" maxlength="125" name="keterangan[]" class="form-control">
                                                </td>
                                        </tr>
                                    <?php } ?>
                                <?php $no++;
                                    } ?>
                                </tbody>
                            </table>
                            <div class="line"></div>
                            <div class="form-group row">
                                <div class="col-sm-12 text-center">
                                    <!-- <a class="text-white btn btn-primary" data-dismiss="modal" aria-label="Close" href="#">Cancel</a> -->
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-header -->
</div>