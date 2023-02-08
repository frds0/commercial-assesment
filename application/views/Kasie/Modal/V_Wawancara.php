<!-- View Data Wawancara -->
<?php $no = 1;
foreach ($nama as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="ViewWawancaraModal<?php echo $row->id_wawancara ?>" tabindex="-1" aria-labelledby="ViewWawancaraModalLabel<?php echo $row->id_wawancara ?>" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Wawancara</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body modal-xl">
                    <div class=" card">
                        <div class="card-header d-flex align-items-center bg-info">
                            <h3 class="h4"></h3>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="#" method="POST">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group-material mt-2">
                                            <input type="hidden" name="id_wawancara" class="form-control form-control-sm" value="<?php echo $row->id_wawancara ?>">
                                        </div>
                                        <div class="form-group-material mt-2">
                                            <label>
                                                Diwawancarai Oleh
                                            </label> <input type="text" name="diwawancarai" class="form-control form-control-sm" readonly value="<?php echo $row->diwawancarai ?>">
                                        </div>
                                        <div class="form-group-material mt-2">
                                            <label>
                                                Jabatan
                                            </label>
                                            <input type="text" name="jabatan1" class="form-control form-control-sm" readonly value="<?php echo $row->jabatan1 ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group-material mt-2">
                                            <label>
                                                Yang Diwawancara
                                            </label>
                                            <input type="text" name="diwawancara" class="form-control form-control-sm" readonly value="<?php echo $row->diwawancara ?>">
                                        </div>
                                        <div class="form-group-material mt-2">
                                            <label>
                                                Jabatan
                                            </label>
                                            <input type="text" name="jabatan2" class="form-control form-control-sm" readonly value="<?php echo $row->jabatan2 ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center float-end mt-3">
                                    <div class="col-sm-12">
                                        <div class="text-center">
                                            <label for="">Foto Wawancara</label>
                                        </div>
                                        <?php if ($row->foto_wawancara == null) { ?>
                                            <div class="text-center mt-2">
                                                <img src="<?php echo base_url('assets/dist/img/forApps/no-image.png') ?>" width="350px" class="img-center img-thumbnail rounded">
                                            </div>
                                        <?php } else { ?>
                                            <div class="text-center mt-2">
                                                <a href="" data-toggle="modal" data-target="#gambarWawancaraModal<?php echo $row->id_wawancara ?>">
                                                    <img src="<?php echo base_url('assets/img/wawancara/' . $row->foto_wawancara) ?>" width="350px" class="img-center img-thumbnail rounded">
                                                </a>
                                            </div>
                                        <?php } ?>
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
                                    <?php $no = 1;
                                    foreach ($isiWDetail as $row_isi) {
                                        if ($row_isi->id_wawancara == $row->id_wawancara) { ?>
                                            <tr>
                                                <input type="hidden" name="id_wawancara" class="form-control form-control-sm" value="<?php echo $row_isi->id_wawancara ?>">
                                                <td style="width: 10px; vertical-align: middle;"><?php echo $no++; ?></td>
                                                <td><?php echo $row_isi->pertanyaan ?></td>
                                                <td><?php echo $row_isi->proses ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-center"><textarea class="form-control" cols="30" rows="5" placeholder="Jawaban:" name="jawaban[]" readonly><?php echo $row_isi->jawaban ?></textarea></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <div class="form-label">
                                                                <label>Created By</label><br>
                                                                <span><?php echo $row_isi->created_nama ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-label">
                                                                <label>Created Date </label><br>
                                                                <span><?php echo date('d F Y H:i:s', strtotime($row_isi->created_date)) ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-label">
                                                                <label>Modified By</label><br>
                                                                <span><?php if ($row_isi->modified_nama == null) { ?>
                                                                        -
                                                                    <?php } else {
                                                                            echo $row_isi->modified_nama;
                                                                        } ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-label">
                                                                <label>Modified Date </label><br>
                                                                <span>
                                                                    <?php if ($row_isi->modified_date == null) { ?>
                                                                        -
                                                                    <?php } else {
                                                                        echo date('d F Y H:i:s', strtotime($row_isi->modified_date));
                                                                    } ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                        <?php } ?>
                                    <?php } ?>
                                </table>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <a class="text-white btn btn-danger" data-dismiss="modal" aria-label="Close" href="#"><i class="fas fa-window-close"></i> Tutup</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- End Data View -->

<!-- Edit Data Wawancara -->
<?php $no = 1;
foreach ($isiW as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="EditWawancaraModal<?php echo $row->id_wawancara ?>" tabindex="-1" aria-labelledby="EditWawancaraModalLabel<?php echo $row->id_wawancara ?>" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Wawancara</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body modal-xl">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center bg-warning">
                                <h3 class="h4"></h3>
                            </div>
                            <form class="form-horizontal" action="<?php echo site_url('Kasie/CTR_Kasie/UpdateWawancara') ?>" enctype="multipart/form-data" method="POST">
                                <div class="card-body">
                                    <div class="row">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group-material mt-2">
                                                <input type="hidden" name="id_permintaan" value="<?php echo $id_permintaan ?>">
                                            </div>
                                            <div class="form-group-material mt-2">
                                                <label for="">Diwawancarai Oleh</label>
                                                <input type="text" name="diwawancarai" class="form-control form-control-sm" readonly required value="<?php echo $row->diwawancarai ?>">
                                            </div>
                                            <div class="form-group-material mt-2">
                                                <label for="">Jabatan</label>
                                                <input type="text" name="jabatan1" readonly class="form-control form-control-sm" required value="<?php echo $row->jabatan1 ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group-material mt-2">
                                                <label for="">Yang Diwawancara</label>
                                                <input type="text" name="diwawancara" class="form-control form-control-sm" required value="<?php echo $row->diwawancara ?>">
                                            </div>
                                            <div class="form-group-material mt-2">
                                                <label for="">Jabatan</label>
                                                <input type="text" name="jabatan2" class="form-control form-control-sm" required value="<?php echo $row->jabatan2 ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center float-end mt-3">
                                        <div class="col-sm-12">
                                            <div class="text-center">
                                                <label for="">Foto Wawancara</label>
                                            </div>
                                            <?php if ($row->foto_wawancara == null) { ?>
                                                <div class="text-center mt-2">
                                                    <p class="float-right text-danger" style="font-size: 10px;"><b>*<i>(Maks 500KB, Format .JPG/.JPEG/.PNG)</i></b></p>
                                                    <img src="<?php echo base_url('assets/dist/img/forApps/no-image.png') ?>" width="350px" class="img-center img-thumbnail rounded">
                                                    <input type="file" class="p-1" id="file_wawancara" name="foto_wawancara" accept="image/png, image/jpg, image/jpeg" value="<?php echo $row->foto_wawancara ?>">
                                                    <input type="hidden" name="old_foto" value="<?php echo $row->foto_wawancara ?>">
                                                </div>
                                            <?php } else { ?>
                                                <div class="text-center mt-2">
                                                    <p class="float-right text-danger" style="font-size: 10px;"><b>*<i>(Maks 500KB, Format .JPG/.JPEG/.PNG)</i></b></p>
                                                    <img src="<?php echo base_url('assets/img/wawancara/' . $row->foto_wawancara) ?>" width="350px" class="img-center img-thumbnail rounded">
                                                    <input type="file" accept="image/png, image/jpg, image/jpeg" class="p-1" id="file_wawancara" name="foto_wawancara" value="<?php echo $row->foto_wawancara ?>">
                                                    <input type="hidden" name="old_foto" value="<?php echo $row->foto_wawancara ?>">
                                                    <p id="message_file" class="float-right text-danger" style="font-size: 12px;"></p>
                                                </div>
                                            <?php } ?>
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
                                    <p class="font-italic" style="font-size: 12px; text-align: right; font-weight: bold;"><b class="text-danger">*</b> : Data Harus Diisi</p>
                                    <table class="table table-bordered">
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Pertanyaan</th>
                                            <th>Proses</th>
                                        </tr>
                                        <?php $no = 1;
                                        foreach ($isiW as $row_isi) {
                                            if ($row_isi->id_wawancara == $row->id_wawancara) { ?>
                                                <tr>
                                                    <td style="width: 10px; vertical-align: middle;"><?php echo $no++; ?></td>
                                                    <td><?php echo $row_isi->pertanyaan ?></td>
                                                    <td><?php echo $row_isi->proses ?></td>
                                                </tr>
                                                <tr>
                                                    <input type="hidden" name="id_pertanyaan_wawancara[]" value="<?php echo $row_isi->id_pertanyaan_wawancara ?>">
                                                    <input type="hidden" name="created_by[]" value="<?php echo $row_isi->created_by ?>">
                                                    <input type="hidden" name="created_date[]" value="<?php echo $row_isi->created_date ?>">
                                                    <input type="hidden" name="modified_by[]" value="<?php echo $row_isi->modified_by ?>">
                                                    <input type="hidden" name="modified_date[]" value="<?php echo $row_isi->modified_date ?>">
                                                    <input type="hidden" name="old[]" value="<?php echo $row_isi->jawaban ?>">
                                                    <td colspan="3">
                                                        <label for="">Jawaban: <b class="text-danger">*</b></label>
                                                        <textarea class="form-control" cols="30" rows="5" placeholder="Jawaban:" name="jawaban[]" required><?php echo $row_isi->jawaban ?></textarea>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        <?php } ?>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <div class="col-sm-12 text-center">
                                        <a class="text-white btn btn-danger" data-dismiss="modal" aria-label="Close" href="#"><i class="fas fa-window-close"></i> Batal</a>
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-check-square"></i> Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- End Data Edit -->

<!-- Gambar Wawancara -->
<?php foreach ($isiW as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="gambarWawancaraModal<?php echo $row->id_wawancara ?>" tabindex="-1" aria-labelledby="gambarWawancaraModalLabel<?php echo $row->id_wawancara ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">Form Delete Pertanyaan</h5> -->
                    <div class="text-center">
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="<?php echo base_url('assets/img/wawancara/' . $row->foto_wawancara) ?>" width="700px" class="img-center img-thumbnail rounded">
                    <a download="<?php echo base_url('assets/img/wawancara/' .  $row->foto_wawancara) ?>" href="<?php echo base_url('assets/img/wawancara/' .  $row->foto_wawancara) ?>" class="btn btn-primary btn-sm mt-3"><i class="fas fa-download"></i> Unduh Gambar</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Akhir Gambar Wawancara -->

<!-- Print PDF Wawancara -->
<?php $no = 1;
foreach ($nama as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="printWawancaraModal<?php echo $row->id_wawancara ?>" tabindex="-1" aria-labelledby="printWawancaraModalLabel<?php echo $row->id_wawancara ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class=" modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Print PDF</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body modal-xl">
                    <div class=" card">
                        <div class="card-header d-flex align-items-center bg-teal">
                            <h3 class="h4"></h3>
                        </div>
                        <form class="form-horizontal" action="<?php echo site_url('CTR_Laporan/PrintWawancara/' . $row->id_permintaan) ?>" method="POST">
                            <div class="card-body">
                                <input type="hidden" name="id_wawancara" value="<?php echo $row->id_wawancara ?>" id="">
                                <div class="text-center mb-4">
                                    <h3>Print Wawancara ?</h3>
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