<!-- View Data SSA2 -->
<?php foreach ($isiS2Detail as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="ViewSsa2Modal<?php echo $row->id_ssa2 ?>" tabindex="-1" aria-labelledby="ViewSsa2ModalLabel<?php echo $row->id_ssa2 ?>" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form SSA2</h5>
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
                                        } ?></h6>
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Modified Date</label>
                                    <h6>
                                        <?php if ($row->modified_date == null) { ?>
                                            -
                                        <?php } else {
                                            echo date('d F Y H:i:s', strtotime($row->modified_date));
                                        } ?>
                                    </h6>
                                </div>
                            </div>
                            <?php $no = 1;
                            foreach ($isi_detail_S2 as $row_detail) {
                                if ($row_detail->id_ssa2 == $row->id_ssa2) { ?>
                                    <div class="card mt-3">
                                        <div class="card-header d-flex align-items-center bg-cyan">
                                            <h3 class="h4"></h3>
                                        </div>
                                        <div class="header text-center mt-3">
                                            <h3>POS <?php echo $no++ ?>
                                            </h3>
                                        </div>
                                        <?php echo $this->session->flashdata('pesan4'); ?>
                                        <form class="form-horizontal" action="<?php echo site_url('Presales/CTR_Presales/SimpanSSA2') ?>" method="POST">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <center>
                                                            <h4><b>POS</b></h4>
                                                        </center>
                                                        <hr>
                                                        <div class="form-group-material">
                                                            <!-- <input type="hidden" name="id_permintaan" value="<?php echo $id_permintaan ?>">
                                                    </label> -->
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-control-label">Nama POS :</label>
                                                            <input type="text" class="form-control" name="nama_pos" value="<?php echo $row_detail->nama_pos ?>" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-control-label">Total Keseluruhan Anggota :</label>
                                                            <input type="number" min="0" class="form-control" name="total_anggota" value="<?php echo $row_detail->total_anggota ?>" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-control-label">Jam Kerja :</label>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <select name="jam_kerja[]" class="form-control mb-2" disabled>
                                                                        <option disabled>Pilih Jam Kerja</option>
                                                                        <option <?php echo (explode("`", $row_detail->jam_kerja)[0] == "8 Jam" ? "selected" : ""); ?> value="8 Jam">8 Jam
                                                                        </option>
                                                                        <option <?php echo (explode("`", $row_detail->jam_kerja)[0] == "12 Jam" ? "selected" : ""); ?> value="12 Jam">12 Jam
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <select name="shift[]" class="form-control" disabled>
                                                                        <option selected disabled value="">Pilih Shift Kerja</option>
                                                                        <option <?php echo (explode("`", $row_detail->jam_kerja)[1] == "Shift" ? "selected" : ""); ?> value="Shift">Shift</option>
                                                                        <option <?php echo (explode("`", $row_detail->jam_kerja)[1] == "Non Shift" ? "selected" : ""); ?> value="Non Shift">Non Shift</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Foto POS :</label>
                                                            <?php if ($row_detail->foto_ssa2 == null) { ?>
                                                                <div class="text-center mt-2">
                                                                    <img src="<?php echo base_url('assets/dist/img/forApps/no-image.png') ?>" width="350px" class="img-center img-thumbnail rounded">
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="text-center mt-2">
                                                                    <a href="" data-toggle="modal" data-target="#gambarSsa2Modal<?php echo $row_detail->id_detail_ssa2 ?>">
                                                                        <img src="<?php echo base_url('assets/img/ssa2/' . $row_detail->foto_ssa2) ?>" width="350px" class="img-center img-thumbnail rounded">
                                                                    </a>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-control-label">Lokasi :</label>
                                                            <textarea cols="30" rows="5" class="form-control" name="lokasi_kerja" readonly><?php echo $row_detail->lokasi_kerja ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <center>
                                                            <h4><b>Analisa Resiko</b></h4>
                                                        </center>
                                                        <hr>
                                                        <div class="form-group">
                                                            <label class="form-control-label">Kerawanan :</label>
                                                            <textarea cols="30" rows="7" class="form-control" name="kerawanan" readonly> <?php echo $row_detail->kerawanan ?></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-control-label">Ancaman :</label>
                                                            <textarea cols="30" rows="7" class="form-control" name="ancaman" readonly> <?php echo $row_detail->ancaman ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mt-3">
                                                            <center>
                                                                <h4><b>Fungsi & Job Desk:</b></h4>
                                                                <hr>
                                                                <textarea cols="150" rows="5" class="form-control" name="fungsi_job_desk" readonly> <?php echo $row_detail->fungsi_job_desk ?></textarea>
                                                            </center>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                <?php } ?>
                            <?php } ?>
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
<!-- End View SSA2 -->

<!-- Gambar SSA2 -->
<?php foreach ($isi_detail_S2 as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="gambarSsa2Modal<?php echo $row->id_detail_ssa2 ?>" tabindex="-1" aria-hidden="true">
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
                    <img src="<?php echo base_url('assets/img/ssa2/' . $row->foto_ssa2) ?>" width="700px" class="img-center img-thumbnail rounded">
                    <a download="<?php echo base_url('assets/img/ssa2/' .  $row->foto_ssa2) ?>" href="<?php echo base_url('assets/img/ssa2/' .  $row->foto_ssa2) ?>" class="btn btn-primary btn-sm mt-3"><i class="fas fa-download"></i> Unduh Gambar</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Akhir Gambar SSA2 -->

<!-- Print PDF SSA2 -->
<?php $no = 1;
foreach ($isiS2 as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="printSsa2Modal<?php echo $row->id_ssa2 ?>" tabindex="-1" aria-labelledby="printSsa2ModalLabel<?php echo $row->id_ssa2 ?>" aria-hidden="true">
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
                        <form class="form-horizontal" action="<?php echo site_url('CTR_Laporan/PrintSsa2/' . $row->id_permintaan) ?>" method="POST">
                            <div class="card-body">
                                <input type="hidden" name="id_ssa2" value="<?php echo $row->id_ssa2 ?>" id="">
                                <div class="text-center mb-4">
                                    <h3>Print SSA2 ?</h3>
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