<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Form Wawancara</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Presales/CTR_Presales/Penilaian/' . $id_permintaan) ?>">Home</a></li>
                        <li class="breadcrumb-item active">Wawancara</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->

        <!-- Main content -->
        <div class="container-fluid mt-4">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flashdata'); ?>"></div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Wawancara </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body" style="overflow: auto;">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center bg-primary">
                                <h3 class="h4"></h3>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" action="<?php echo site_url('Presales/CTR_Presales/SimpanWawancara/') ?>" enctype="multipart/form-data" method="POST">
                                    <?php $no = 1;
                                    foreach ($nama as $row) { ?>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="hidden" value="<?php echo $row->id_wawancara ?>">
                                                <input type="hidden" name="id_permintaan" value="<?php echo $id_permintaan ?>">
                                                <div class="form-group-material mt-2">
                                                </div>
                                                <div class="form-group-material mt-2">
                                                    Diwawancarai Oleh <input type="text" name="diwawancarai" class="form-control form-control-sm mt-2" readonly value="<?php echo $row->diwawancarai ?>">
                                                </div>
                                                <div class="form-group-material mt-2">
                                                    Jabatan
                                                    <input type="text" name="jabatan1" class="form-control form-control-sm mt-2" readonly value="<?php echo $row->jabatan1 ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group-material mt-2">
                                                    Yang Diwawancara
                                                    <input type="text" name="diwawancara" class="form-control form-control-sm mt-2" readonly value="<?php echo $row->diwawancara ?>">
                                                </div>
                                                <div class="form-group-material mt-2">
                                                    Jabatan
                                                    <input type="text" name="jabatan2" class="form-control form-control-sm mt-2" readonly value="<?php echo $row->jabatan2 ?>">
                                                </div>
                                                <div class="form-group-material mt-2">
                                                    Upload Foto Wawancara <b class="text-danger">*</b>
                                                    <p class="float-right text-danger" style="font-size: 10px;"><b>*<i>(Maks 500KB, Format .JPG/.JPEG/.PNG)</i></b></p>
                                                    <input type="file" id="file" name="foto_wawancara" accept="image/png, image/jpg, image/jpeg" required class="form-control p-1 mt-2">
                                                    <p id="message_file" class="float-right text-danger" style="font-size: 12px;"></p>
                                                    <input type="hidden" name="old" required class="form-control" value="<?php echo $row->foto_wawancara ?>">
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
                                        <p class="font-italic" style="font-size: 12px; text-align: right; font-weight: bold;"><b class="text-danger">*</b> : Data Harus Diisi</p>
                                    <?php } ?>

                                    <?php $no = 1;
                                    foreach ($join as $row) { ?>
                                        <table class="table table-bordered">
                                            <tr class="text-center">
                                                <th>No</th>
                                                <th>Pertanyaan</th>
                                                <th>Proses</th>
                                            </tr>
                                            <tr>
                                                <td style="width: 10px; vertical-align: middle;"><?php echo $no++ ?></td>
                                                <td><?php echo $row->pertanyaan ?></td>
                                                <td><?php echo $row->proses ?></td>
                                            </tr>
                                            <tr>
                                                <input type="hidden" name="id_jawaban_wawancara[]" value="<?php echo $row->id_jawaban_wawancara ?>">
                                                <td colspan="3">
                                                    <label for="">Jawaban:</label> <b class="text-danger">*</b>
                                                    <textarea class="form-control" cols="30" rows="5" placeholder="" required name="jawaban[]" maxlength="125"><?php echo $row->jawaban ?></textarea>
                                                </td>
                                            </tr>
                                        </table>
                                    <?php } ?>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 text-center">
                                            <!-- <a class="text-white btn btn-primary" data-dismiss="modal" aria-label="Close" href="#">Cancel</a> -->
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-header -->
</div>
<script type="text/javascript">
    // upload Gambar
    var uploadField = document.getElementById("file");
    var txt = '';
    var ekstensiOk = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    uploadField.onchange = function() {
        if (this.files[0].size > 500000) { // ini untuk ukuran 800KB, 500000 untuk 500 KB.
            // alert("Maaf. Gambar Terlalu Besar ! Maksimal Upload 500 KB");
            txt = '<i class="fas fa-exclamation-triangle"></i> Gambar Terlalu Besar ! Maksimal Upload 500 KB';
            this.value = "";
        } else if (!ekstensiOk.exec(this.value)) {
            txt = '<i class="fas fa-exclamation-triangle"></i> Gambar Harus Berupa .png/.jpg/.jpeg';
            this.value = "";
        };
        // Tampilkan
        document.getElementById("message_file").innerHTML = txt;
        if (this.files[0].size < 500000) {
            ya = '';
        } else if (ekstensiOk.exec(this.value)) {
            ya = '';
        };
        document.getElementById("message_file").innerHTML = ya;

    };
</script>