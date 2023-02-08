<!-- Tambah Ceklis -->
<div class="modal fade" data-backdrop="static" id="ceklisModal" tabindex="-1" aria-labelledby="ceklisModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Ceklis</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body modal-xl">
                <div class="col-lg-12">
                    <div class="card" style="overflow: auto;">
                        <div class="card-header d-flex align-items-center bg-primary">
                            <h3 class="h4"></h3>
                        </div>
                        <form action="<?php echo site_url('Presales/CTR_Presales/PilihPertanyaanCeklis') ?>" enctype="multipart/form-data" method="POST">
                            <div class="card-body" style="overflow: auto;">
                                <input type="hidden" name="id_permintaan" value="<?php echo $id_permintaan ?>">
                                <p class="float-right">Total Pertanyaan Assesment Requirements: <b><?php echo $pertanyaan_ceklis ?> Pertanyaan Aktif</b></p>
                                <table class="table table-bordered" style="overflow: auto;">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th colspan="2">Assesment Requirements</th>
                                            <th>
                                                <input type="checkbox" id="checkAll" class="form-control form-control-sm box1" onchange="CheckAll('box1', this)">

                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $r1 = $this->db->query("SELECT * from ms_kategori_ceklis WHERE status_kategori_ceklis = 'Aktif' order by id_kategori ASC")->result_array();
                                        $no = 1;
                                        foreach ($r1 as $r1) {
                                        ?>
                                            <tr>
                                                <?php
                                                $r2 = $this->db->query("SELECT * from ms_kategori_ceklis b INNER JOIN ms_pertanyaan_ceklis a ON b.id_kategori = a.id_kategori WHERE b.id_kategori = '$r1[id_kategori]' AND a.status_pertanyaan_ceklis = 'Aktif'");
                                                $total_r2 = $r2->num_rows();
                                                $r3 = $r2->result_array();
                                                $rowspan = TRUE;
                                                ?>
                                                <td rowspan="<?php echo $total_r2 ?>" style="vertical-align: middle;" class="text-center"><?php echo $no; ?></td>
                                                <td rowspan="<?php echo $total_r2 ?>" style="vertical-align: middle;" class="text-center w-25"><?php echo $r1['kategori_ceklis'] ?></td>
                                                <?php $i = 1;
                                                foreach ($r3 as $r3)
                                                    if ($r3['status_pertanyaan_ceklis'] == 'Aktif') { ?>
                                                    <td style="vertical-align: middle;"><?php echo $r3['pertanyaan_ceklis'] ?></td>
                                                    <td style="vertical-align: middle;" class="text-center">
                                                        <input type="checkbox" class="form-control form-control-sm box1" name="id_pertanyaan_ceklis[]" value="<?php echo $r3['id_pertanyaan_ceklis'] ?>">&nbsp;&nbsp;&nbsp;
                                                    </td>
                                            </tr>
                                        <?php } ?>
                                    <?php $no++;
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <a class="text-white btn btn-danger" data-dismiss="modal" aria-label="Close" href="#"><i class="fas fa-window-close"></i> Batal</a>
                                <button type="submit" class="btn btn-primary" id="save"><i class="fas fa-check-square"></i> Next</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Tambah -->

<!-- View Data Ceklis -->
<?php foreach ($isiCDetail as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="ViewCeklisModal<?php echo $row->id_ceklis ?>" tabindex="-1" aria-labelledby="ViewCeklisModalLabel<?php echo $row->id_ceklis ?>" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Ceklis</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body modal-xl">
                    <div class="col-lg-12">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="">Created By</label>
                                    <h6><?php echo $row->nama_created ?></h6>
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Created Date</label>
                                    <h6><?php echo $row->created_date ?></h6>
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Modified By</label>
                                    <h6>
                                        <?php if ($row->nama_modified == null) { ?>
                                            -
                                        <?php } else {
                                            echo $row->nama_modified;
                                        } ?>
                                    </h6>
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Modified Date</label>
                                    <h6>
                                        <?php if ($row->modified_date == null) { ?>
                                            -
                                        <?php } else {
                                            echo date('d F Y H:i:s', strtotime($row->modified_date));
                                        } ?></h6>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="overflow: auto;">
                            <div class="card-header d-flex align-items-center bg-cyan">
                                <h3 class="h4"></h3>
                            </div>
                            <form class="form-horizontal" action="<?php echo site_url('Presales/CTR_Presales/SimpanCeklis/') ?>" enctype="multipart/form-data" method="POST">
                                <div class="card-body">
                                    <?php echo $this->session->flashdata('pesan3'); ?>
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
                                            $r1 = $this->db->query("SELECT * from ms_kategori_ceklis a LEFT JOIN ms_pertanyaan_ceklis b ON a.id_kategori = b.id_kategori LEFT JOIN ms_jawaban_ceklis c ON b.id_pertanyaan_ceklis = c.id_pertanyaan_ceklis LEFT JOIN tbl_cekliss d ON d.id_ceklis = c.id_ceklis WHERE d.id_permintaan = $row->id_permintaan AND c.id_ceklis = $row->id_ceklis")->result_array();
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
                                                            <input type="radio" class="form-control-sm" name="kondisi[]<?php echo $r3['id_pertanyaan_ceklis'] ?>" value="Ada" <?php echo $r3['kondisi'] == 'Ada' ? 'checked' : ''; ?> disabled>
                                                        </td>
                                                        <td style="vertical-align: middle;" class="text-center">
                                                            <input type="radio" class="form-control-sm" name="kondisi[]<?php echo $r3['id_pertanyaan_ceklis'] ?>" value="Tidak" <?php echo $r3['kondisi'] == 'Tidak' ? 'checked' : ''; ?> disabled>
                                                        </td>
                                                        <td class="text-center" style="vertical-align: middle;">
                                                            <input type="hidden" name="id_jawaban_ceklis[]" value="<?php echo $r3['id_jawaban_ceklis'] ?>">
                                                            <p><?php if ($r3['keterangan'] == null) { ?>
                                                                    -
                                                                <?php } else {
                                                                    echo $r3['keterangan'];
                                                                } ?></p>
                                                        </td>
                                                </tr>
                                            <?php } ?>
                                        <?php $no++;
                                            } ?>
                                        </tbody>
                                    </table>
                                    <div class="line"></div>
                                </div>
                                <div class="modal-footer">
                                    <a class="text-white btn btn-danger" data-dismiss="modal" aria-label="Close" href="#"><i class="fas fa-window-close"></i> Tutup</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- End View Ceklis -->

<!-- Edit Ceklis -->
<?php foreach ($isiC as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="EditCeklisModal<?php echo $row->id_ceklis ?>" tabindex="-1" aria-labelledby="EditCeklisModalLabel<?php echo $row->id_ceklis ?>" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Ceklis</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body modal-xl">
                    <div class="col-lg-12">
                        <div class="card" style="overflow: auto;">
                            <div class="card-header d-flex align-items-center bg-cyan">
                                <h3 class="h4"></h3>
                            </div>
                            <form class="form-horizontal" action="<?php echo site_url('Presales/CTR_Presales/UpdateCeklis/') ?>" enctype="multipart/form-data" method="POST">
                                <div class="card-body">
                                    <input type="hidden" name="created_by" value="<?php echo $row->created_by ?>">
                                    <input type="hidden" name="created_date" value="<?php echo $row->created_date ?>">
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
                                            $r1 = $this->db->query("SELECT * from ms_kategori_ceklis a LEFT JOIN ms_pertanyaan_ceklis b ON a.id_kategori = b.id_kategori LEFT JOIN ms_jawaban_ceklis c ON b.id_pertanyaan_ceklis = c.id_pertanyaan_ceklis LEFT JOIN tbl_cekliss d ON d.id_ceklis = c.id_ceklis WHERE d.id_permintaan = $id_permintaan AND c.id_ceklis = $row->id_ceklis")->result_array();
                                            $no = 1;
                                            foreach ($r1 as $r1) {
                                            ?>
                                                <tr>
                                                    <input type="hidden" name="id_permintaan" value="<?php echo $r1['id_permintaan'] ?>">
                                                    <input type="hidden" name="id_pertanyaan_ceklis[]" value="<?php echo $r1['id_pertanyaan_ceklis'] ?>">
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
                                                            <input type="radio" class="form-control-sm" name="kondisi[]<?php echo $r3['id_pertanyaan_ceklis'] ?>" value="Ada" <?php echo $r3['kondisi'] == 'Ada' ? 'checked' : ''; ?>>
                                                        </td>
                                                        <td style="vertical-align: middle;" class="text-center">
                                                            <input type="radio" class="form-control-sm" name="kondisi[]<?php echo $r3['id_pertanyaan_ceklis'] ?>" value="Tidak" <?php echo $r3['kondisi'] == 'Tidak' ? 'checked' : ''; ?>>
                                                        </td>
                                                        <td>
                                                            <input type="hidden" name="id_jawaban_ceklis[]" value="<?php echo $r3['id_jawaban_ceklis'] ?>">
                                                            <input type="text" name="keterangan[]" class="form-control" value="<?php echo $r3['keterangan'] ?>">
                                                        </td>
                                                </tr>
                                            <?php } ?>
                                        <?php $no++;
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <a class="text-white btn btn-danger" data-dismiss="modal" aria-label="Close" href="#"><i class="fas fa-window-close"></i> Batal</a>
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-check-square"></i> Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- End Edit Ceklis -->

<!-- Print PDF Ceklis -->
<?php $no = 1;
foreach ($isiC as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="printCeklisModal<?php echo $row->id_ceklis ?>" tabindex="-1" aria-labelledby="printCeklisModalLabel<?php echo $row->id_ceklis ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class=" modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Print PDF</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class=" card">
                        <div class="card-header d-flex align-items-center bg-teal">
                            <h3 class="h4"></h3>
                        </div>
                        <form class="form-horizontal" action="<?php echo site_url('CTR_Laporan/PrintCeklis/' . $row->id_permintaan) ?>" method="POST">
                            <div class="card-body">
                                <input type="hidden" name="id_ceklis" value="<?php echo $row->id_ceklis ?>" id="">
                                <div class="text-center mb-4">
                                    <h3>Print Ceklis ?</h3>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fas fa-window-close"></i> Batal</button>
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-check-square"></i> Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>