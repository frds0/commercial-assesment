<!-- Tambah Data CCTV -->
<div class="modal fade" data-backdrop="static" id="cctvModal" tabindex="-1" aria-labelledby="cctvModal" aria-hidden="true">
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
                    <div class="card">
                        <div class="card-header d-flex align-items-center bg-primary">
                            <h3 class="h4"></h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="#" id="form" method="POST">
                                        <div class="form-group">
                                            <label class="form-control-label">Jumlah CCTV :</label>
                                            <select name="jumlah_cctv" id="jumlah_cctv" class="form-control">
                                                <option selected disabled>Pilih Jumlah CCTV</option>
                                                <?php for ($x = 1; $x <= 10; $x++) {
                                                    echo "<option value=$x>$x</option>";
                                                }
                                                ?>
                                            </select>
                                            <button type="submit" id="Submit" class="btn btn-primary mt-3 mb-3 float-right"><i class="fas fa-plus-square"></i> Tambah</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div id="tampil">

                            </div>
                            <?php if ($this->input->post('jumlah_cctv')) { ?>
                                <?php $no = 1;
                                echo form_open_multipart('Presales/CTR_Presales/SimpanCCTV') ?>
                                <?php $jumlah_cctv = $this->input->post('jumlah_cctv');
                                for ($a = 1; $a <= $jumlah_cctv; $a++) { ?>
                                    <div class="card">
                                        <div class="container-fluid mt-3 mb-4">
                                            <div class="row">
                                                <div class="form-group-material">
                                                    <input type="hidden" name="id_permintaan" value="<?php echo $id_permintaan ?>">
                                                    </label>
                                                    <!-- <input type="hidden" name="id_cctv" value="<?php echo $id_cctv ?>"> -->
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <p class="float-right mt-2" style="font-size: 12px;"><b class="text-danger">*</b><b><i>: Data Harus Diisi</i></b></p>
                                                    <h3>CCTV <?php echo $no++; ?></h3>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group-material mt-2">
                                                        <label for="">Lokasi CCTV <b class="text-danger">*</b></label>
                                                        <input type="text" name="lokasi_cctv[]" class="form-control form-control-sm" required>
                                                    </div>
                                                    <div class="form-group-material mt-4">
                                                        <p class="float-right mt-2 text-danger" style="font-size: 12px;"><b>*<i>(Maks 500KB, Format .JPG/.JPEG/.PNG)</i></b></p>
                                                        <label for="">View Tampak Depan</label>
                                                        <input type="file" id="file_depan" name="view_depan[]" accept="image/png, image/jpg, image/jpeg" multiple="" size="20" class="mt-2 p-1 form-control file_cctv_depan" required />
                                                        <p id="message_file2" class="float-right text-danger" style="font-size: 12px;"></p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group-material mt-2">
                                                        <label for="">Kondisi CCTV <b class="text-danger">*</b></label>
                                                        <input type="text" name="kondisi_cctv[]" class="form-control form-control-sm" required>
                                                    </div>
                                                    <div class="form-group-material mt-4">
                                                        <p class="float-right mt-2 text-danger" style="font-size: 12px;"><b>*<i>(Maks 500KB, Format .JPG/.JPEG/.PNG)</i></b></p>
                                                        <label for="">View Tampak Belakang </label>
                                                        <input type="file" id="file_belakang" name="view_belakang[]" accept="image/png, image/jpg, image/jpeg" multiple="" size="20" class="mt-2 p-1 form-control file_cctv_depan" required>
                                                        <p id="message_file1" class="float-right text-danger" style="font-size: 12px;"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="modal-footer">
                                    <a class="text-white btn btn-danger" data-dismiss="modal" aria-label="Close" href="#"><i class="fas fa-window-close"></i> Batal</a>
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-check-square"></i> Simpan</button>
                                </div>
                                <?php echo form_close() ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                                                        <!-- <input type="hidden" name="id_permintaan" value="<?php echo $id_permintaan ?>">
                                                </label> -->
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

<!-- Edit Data CCTV -->
<?php foreach ($isiCt as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="EditCctvModal<?php echo $row->id_cctv ?>" tabindex="-1" aria-labelledby="EditCctvModal<?php echo $row->id_cctv ?>" aria-hidden="true">
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
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form action="" method="POST">
                                            <div class="form-group">
                                                <label class="form-control-label">Tambah CCTV :</label>
                                                <select name="jumlah_cctv" id="jumlah_cctv" class="custom-select">
                                                    <option selected disabled>Pilih Jumlah CCTV</option>
                                                    <?php for ($x = 1; $x <= 10; $x++) {
                                                        echo "<option value=$x>$x</option>";
                                                    }
                                                    ?>
                                                </select>
                                                <button type="submit" class="btn btn-primary mt-3 mb-3 float-right"><i class="fas fa-plus-square"></i> Tambah</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form class="form-horizontal" method="POST" action="<?php echo site_url('Presales/CTR_Presales/UpdateCCTV') ?>" enctype="multipart/form-data">
                            <?php $no = 1;
                            foreach ($isi_detail_Ct as $row_detail) {
                                if ($row_detail->id_cctv == $row->id_cctv) { ?>
                                    <div class="card">
                                        <div class="card-header d-flex align-items-center bg-warning">
                                            <h3 class="h4"></h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="form-group-material mt-2">
                                                        <input type="hidden" name="id_permintaan" value="<?php echo $id_permintaan ?>">
                                                        <input type="hidden" name="created_by" value="<?php echo $row->created_by ?>">
                                                        <input type="hidden" name="created_date" value="<?php echo $row->created_date ?>">
                                                        <input type="hidden" name="id_cctv[]" value="<?php echo $row->id_cctv ?>">
                                                        <input type="hidden" name="id_detail_cctv[]" value="<?php echo $row_detail->id_detail_cctv ?>">
                                                    </div>
                                                    <div class="col">
                                                        <p class="float-right mt-2 text-danger" style="font-size: 12px;"><b>*<i>(Maks 500KB, Format .JPG/.JPEG/.PNG)</i></b></p>
                                                        <h3>CCTV <?php echo $no++ ?></h3>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group-material mt-2">
                                                            Lokasi CCTV <input type="text" name="lokasi_cctv[]" value="<?php echo $row_detail->lokasi_cctv ?>" class="form-control form-control-sm" required>
                                                        </div>
                                                        <div class="form-group-material mt-4">
                                                            View Tampak Depan<br>
                                                            <input type="file" id="file_depan" name="view_depan[]" size="20" accept="image/png, image/jpg, image/jpeg" class="mb-4 p-1 form-control file_cctv_depan" />
                                                            <p id="message_file2" class="float-right text-danger" style="font-size: 12px;"></p>
                                                            <div class="text-center">
                                                                <img src="<?php echo base_url('assets/img/cctv/depan/' . $row_detail->view_depan) ?>" width="350px" style="height: 350px;" class="img-thumbnail rounded">
                                                                <input type="hidden" name="old1[]" class="form-control" value="<?php echo $row_detail->view_depan; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group-material mt-2">
                                                            Kondisi CCTV
                                                            <input type="text" name="kondisi_cctv[]" class="form-control form-control-sm" value="<?php echo $row_detail->kondisi_cctv ?>" required>
                                                        </div>
                                                        <div class="form-group-material mt-4">
                                                            View Tampak Belakang <br>
                                                            <input type="file" id="file_belakang" name="view_belakang[]" accept="image/png, image/jpg, image/jpeg" size="20" class="mb-4 p-1 form-control file_cctv_belakang">
                                                            <p id="message_file1" class="float-right text-danger" style="font-size: 12px;"></p>
                                                            <div class="text-center">
                                                                <img src="<?php echo base_url('assets/img/cctv/belakang/' . $row_detail->view_belakang) ?>" width="350px" style="height: 350px;" class="img-thumbnail rounded">
                                                                <input type="hidden" name="old2[]" class="form-control" value="<?php echo $row_detail->view_belakang; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                            <?php if ($this->input->post('jumlah_cctv')) { ?>
                                <?php
                                echo form_open_multipart('Presales/CTR_Presales/SimpanCCTV') ?>
                                <?php $jumlah_cctv = $this->input->post('jumlah_cctv');
                                for ($a = 1; $a <= $jumlah_cctv; $a++) { ?>
                                    <div class="card">
                                        <div class="container-fluid mt-3 mb-4">
                                            <div class="row">
                                                <div class="form-group-material">
                                                    <input type="hidden" name="id_permintaan" value="<?php echo $id_permintaan ?>">
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <p class="float-right mt-2 text-danger" style="font-size: 12px;"><b>*<i>(Maks 500KB, Format .JPG/.JPEG/.PNG)</i></b></p>
                                                    <h3>CCTV <?php echo $no++; ?></h3>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group-material mt-2">
                                                        Lokasi CCTV <input type="text" name="lokasi_cctv[]" class="form-control form-control-sm" required>
                                                    </div>
                                                    <div class="form-group-material mt-4">
                                                        View Tampak Depan<br>
                                                        <input type="file" id="file_depan" name="view_depan[]" accept="image/png, image/jpg, image/jpeg" multiple="" size="20" class="mt-2 p-1 form-control file_cctv_depan" required />
                                                        <p id="message_file2" class="float-right text-danger" style="font-size: 12px;"></p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group-material mt-2">
                                                        Kondisi CCTV
                                                        <input type="text" name="kondisi_cctv[]" class="form-control form-control-sm" required>
                                                    </div>
                                                    <div class="form-group-material mt-4">
                                                        View Tampak Belakang <br>
                                                        <input type="file" id="file_belakang" name="view_belakang[]" accept="image/png, image/jpg, image/jpeg" multiple="" size="20" class="mt-2 p-1 form-control file_cctv_belakang" required>
                                                        <p id="message_file1" class="float-right text-danger" style="font-size: 12px;"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php } ?>
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
<?php } ?>
<!-- End Edit Data CCTV -->
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
                    <a href="<?php echo site_url('Presales/CTR_Presales/DownloadFotoCCTV1/' .  $row->id_detail_cctv) ?>" class="btn btn-primary btn-sm mt-3"><i class="fas fa-download"></i> Unduh Gambar</a>
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
                    <a href="<?php echo site_url('Presales/CTR_Presales/DownloadFotoCCTV2/' .  $row->id_detail_cctv) ?>" class="btn btn-primary btn-sm mt-3"><i class="fas fa-download"></i> Unduh Gambar</a>
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
<script type="text/javascript">
    // upload Gambar
    // var uploadField = document.getElementById("file_depan");
    var txt = '';
    var ekstensiOk = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    // uploadField.onchange = function() {
    $(".file_cctv_depan").on('change', function() {
        if (this.files[0].size > 512000) { // ini untuk ukuran 800KB, 500000 untuk 500KB.
            // alert("Maaf. Gambar Terlalu Besar ! Maksimal Upload 500KB");
            txt = '<i class="fas fa-exclamation-triangle"></i> Gambar Terlalu Besar ! Maksimal Upload 500KB';
            this.value = "";
            alert('Gambar Terlalu Besar ! Maksimal Upload 500KB');
        } else if (!ekstensiOk.exec(this.value)) {
            // alert('Maaf. Gambar Harus Berupa .png/.jpg/.jpeg');
            txt = '<i class="fas fa-exclamation-triangle"></i> <i>Format Gambar Harus Berupa .JPG/.JPEG/.PNG</i>';
            this.value = "";
            alert('Format Gambar Harus Berupa .JPG/.JPEG/.PNG');
        } else {
            txt = '';
        };
        // document.getElementById("message_file2").innerHTML = txt;
    });
</script>
<script type="text/javascript">
    // upload Gambar
    // var uploadField = document.getElementById("file_belakang");
    var txt = '';
    var ekstensiOk = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    // uploadField.onchange = function() {
    $(".file_cctv_belakang").on('change', function() {
        if (this.files[0].size > 512000) { // ini untuk ukuran 800KB, 500000 untuk 500KB.
            // alert("Maaf. Gambar Terlalu Besar ! Maksimal Upload 500KB");
            txt = '<i class="fas fa-exclamation-triangle"></i> Gambar Terlalu Besar ! Maksimal Upload 500KB';
            this.value = "";
            alert('Gambar Terlalu Besar ! Maksimal Upload 500KB');
        } else if (!ekstensiOk.exec(this.value)) {
            // alert('Maaf. Gambar Harus Berupa .png/.jpg/.jpeg');
            txt = '<i class="fas fa-exclamation-triangle"></i> <i>Format Gambar Harus Berupa .JPG/.JPEG/.PNG</i>';
            this.value = "";
            alert('Format Gambar Harus Berupa .JPG/.JPEG/.PNG');
        } else {
            txt = '';
        };
        // document.getElementById("message_file1").innerHTML = txt;
    });
</script>