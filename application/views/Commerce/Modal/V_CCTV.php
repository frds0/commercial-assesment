<!-- View Data CCTV -->
<?php foreach ($isiCtDetail as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="ViewCctvModal<?php echo $row->id_cctv ?>" tabindex="-1" aria-labelledby="ViewCctvModal<?php echo $row->id_cctv ?>" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form CCTV</h5>
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
                                        } ?></h6>
                                </div>
                            </div>
                            <?php $no = 1;
                            foreach ($isi_detail_Ct as $row_detail) {
                                if ($row_detail->id_cctv == $row->id_cctv) { ?>
                                    <div class="card mt-3">
                                        <div class="card-header d-flex align-items-center bg-cyan">
                                            <h3 class="h4"></h3>
                                        </div>
                                        <div class="card-body">
                                            <?php echo $this->session->flashdata('pesan'); ?>
                                            <?php echo $this->session->flashdata('pesan1'); ?>
                                            <?php echo $this->session->flashdata('pesan6'); ?>
                                            <form class="form-horizontal" method="POST" action="<?php echo site_url('Presales/CTR_Presales/SimpanCCTV') ?>" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="form-group-material mt-2">
                                                    </div>
                                                    <div class="col">
                                                        <h3>CCTV <?php echo $no++ ?></h3>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group-material mt-2">
                                                            Lokasi CCTV <input type="text" name="lokasi_cctv" value="<?php echo $row_detail->lokasi_cctv ?>" readonly class="form-control form-control-sm">
                                                        </div>
                                                        <div class="form-group-material mt-4">
                                                            View Tampak Depan<br><br>
                                                            <!-- <input type="file" name="view_depan" size="20" class="mt-2 p-1 form-control" />-->
                                                            <div class="text-center">
                                                                <a href="" data-toggle="modal" data-target="#CCTVDepanModal<?php echo $row_detail->id_detail_cctv ?>">
                                                                    <img src="<?php echo base_url('assets/img/cctv/depan/' . $row_detail->view_depan) ?>" width="350px" style="height: 350px;" class="img-thumbnail rounded">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group-material mt-2">
                                                            Kondisi CCTV
                                                            <input type="text" name="kondisi_cctv" class="form-control form-control-sm" value="<?php echo $row_detail->kondisi_cctv ?>" readonly>
                                                        </div>
                                                        <div class="form-group-material mt-4">
                                                            View Tampak Belakang <br><br>
                                                            <!-- <input type="file" name="view_belakang" size="20" class="mt-2 p-1 form-control"> -->
                                                            <div class="text-center">
                                                                <a href="" data-toggle="modal" data-target="#CCTVBelakangModal<?php echo $row_detail->id_detail_cctv ?>">
                                                                    <img src="<?php echo base_url('assets/img/cctv/belakang/' . $row_detail->view_belakang) ?>" width="350px" style="height: 350px;" class="img-thumbnail rounded">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
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
<!-- End View CCTV -->

<!-- Gambar Depan CCTV -->
<?php foreach ($isi_detail_Ct as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="CCTVDepanModal<?php echo $row->id_detail_cctv ?>" tabindex="-1" aria-hidden="true">
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
                    <img src="<?php echo base_url('assets/img/cctv/depan/' . $row->view_depan) ?>" width="700px" class="img-center img-thumbnail rounded">
                    <a href="" download="<?php echo base_url('assets/img/cctv/depan/' .  $row->view_depan) ?>" class="btn btn-primary btn-sm mt-3"><i class="fas fa-download"></i> Unduh Gambar</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Akhir Gambar CCTV -->
<!-- Gambar Belakang CCTV -->
<?php foreach ($isi_detail_Ct as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="CCTVBelakangModal<?php echo $row->id_detail_cctv ?>" tabindex="-1" aria-hidden="true">
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
                    <img src="<?php echo base_url('assets/img/cctv/belakang/' . $row->view_belakang) ?>" width="700px" class="img-center img-thumbnail rounded">
                    <a href="" download="<?php echo base_url('assets/img/cctv/belakang/' .  $row->view_belakang) ?>" class="btn btn-primary btn-sm mt-3"><i class="fas fa-download"></i> Unduh Gambar</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Akhir Gambar CCTV -->

<!-- Print PDF CCTV -->
<?php $no = 1;
foreach ($isiCt as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="printCctvModal<?php echo $row->id_cctv ?>" tabindex="-1" aria-labelledby="printCctvModalLabel<?php echo $row->id_cctv ?>" aria-hidden="true">
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
                        <form class="form-horizontal" action="<?php echo site_url('CTR_Laporan/PrintCctv/' . $row->id_permintaan) ?>" method="POST">
                            <div class="card-body">
                                <input type="hidden" name="id_cctv" value="<?php echo $row->id_cctv ?>" id="">
                                <div class="text-center mb-4">
                                    <h3>Print CCTV ?</h3>
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