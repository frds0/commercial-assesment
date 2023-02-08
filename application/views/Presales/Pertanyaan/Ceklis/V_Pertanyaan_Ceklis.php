<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tabel Pertanyaan Ceklis</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Presales/CTR_Presales') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Presales/CTR_Presales/KategoriCeklis') ?>">Kategori Ceklis</a></li>
                        <li class="breadcrumb-item">Pertanyaan Ceklis</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <!-- Main content -->
        <section class="forms mt-4">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <?php
                        $no = 1;
                        foreach ($isiK as $row) { ?>
                            <h3 class="card-title">Tabel Upload Pertanyaan <b><?php echo $row->kategori_ceklis ?></b>
                            </h3>
                        <?php } ?>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" style="overflow: auto;">
                        <?php echo $this->session->flashdata('pesan1'); ?>
                        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flashdata'); ?>"></div>
                        <div>
                            <a href="#TambahPertanyaanModal" data-toggle="modal" data-target="#TambahPertanyaanModal" class="btn btn-primary mb-3 btn-sm "><i class="fas fa-plus"></i> Tambah Pertanyaan</a>
                        </div>
                        <table id="example2" class="table table1 table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 10px">No</th>
                                    <th>Assesment Requirements</th>
                                    <th>Status</th>
                                    <th style="width: 90px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($isi as $row)
                                    if ($row->status_pertanyaan_ceklis == 'Aktif') { ?>
                                    <tr>
                                        <td style="vertical-align: middle;" class="text-center"><?php echo $no++; ?></td>
                                        <td style="vertical-align: middle;">
                                            <?php echo $row->pertanyaan_ceklis ?>
                                        </td>
                                        <td style="vertical-align: middle;" class="text-center"><?php echo $row->status_pertanyaan_ceklis ?></td>
                                        <td class="text-center" style="vertical-align: middle;">
                                            <div class="row justify-content-center">
                                                <div class="col-sm-6">
                                                    <a href="#EditPertanyaanModal<?php echo $row->id_pertanyaan_ceklis ?>" data-toggle="modal" data-target="#EditPertanyaanModal<?php echo $row->id_pertanyaan_ceklis ?>" class="btn btn-warning btn-sm" title="Edit Data"><i class="fas fa-edit"></i></a>
                                                </div>
                                                <div class="col-sm-6" style="cursor: not-allowed !important;">
                                                    <a href="#AktifkanPertanyaanModal<?php echo $row->id_pertanyaan_ceklis ?>" data-toggle="modal" data-target="#AktifkanPertanyaanModal<?php echo $row->id_pertanyaan_ceklis ?>" class="btn btn-dark btn-sm disabled" title="Aktifkan"><i class="fa fa-power-off"></i></a>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center mt-2">
                                                <div class="col-sm-12">
                                                    <a href="#NonaktifkanPertanyaanModal<?php echo $row->id_pertanyaan_ceklis ?>" data-toggle="modal" data-target="#NonaktifkanPertanyaanModal<?php echo $row->id_pertanyaan_ceklis ?>" class="btn btn-danger btn-sm" title="Nonaktifkan"><i class="fa fa-ban"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } else { ?>
                                    <tr class="bg-secondary">
                                        <td style="vertical-align: middle;" class="text-center"><?php echo $no++; ?></td>
                                        <td style="vertical-align: middle;">
                                            <?php echo $row->pertanyaan_ceklis ?>
                                        </td>
                                        <td style="vertical-align: middle;" class="text-center"><?php echo $row->status_pertanyaan_ceklis ?></td>
                                        <td class="text-center" style="vertical-align: middle;">
                                            <div class="row justify-content-center">
                                                <div class="col-sm-6">
                                                    <a href="#EditPertanyaanModal<?php echo $row->id_pertanyaan_ceklis ?>" data-toggle="modal" data-target="#EditPertanyaanModal<?php echo $row->id_pertanyaan_ceklis ?>" class="btn btn-warning btn-sm" title="Edit Data"><i class="fas fa-edit"></i></a>
                                                </div>
                                                <div class="col-sm-6">
                                                    <a href="#AktifkanPertanyaanModal<?php echo $row->id_pertanyaan_ceklis ?>" data-toggle="modal" data-target="#AktifkanPertanyaanModal<?php echo $row->id_pertanyaan_ceklis ?>" class="btn btn-success btn-sm" title="Aktifkan"><i class="fa fa-power-off"></i></a>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center mt-2">
                                                <div class="col-sm-12" style="cursor: not-allowed !important;">
                                                    <a href="#NonaktifkanPertanyaanModal<?php echo $row->id_pertanyaan_ceklis ?>" data-toggle="modal" data-target="#NonaktifkanPertanyaanModal<?php echo $row->id_pertanyaan_ceklis ?>" class="btn btn-dark btn-sm disabled" title="Nonaktifkan"><i class="fa fa-ban"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>


                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-header -->
</div>
<!-- Tambah Data Pertanyaan -->
<div class=" modal fade" data-backdrop="static" id="TambahPertanyaanModal" tabindex="-1" aria-labelledby="TambahPertanyaanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Tambah Pertanyaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center bg-primary">
                            <h3 class="h4"></h3>
                        </div>
                        <form class="form-horizontal" action="<?php echo site_url('Presales/CTR_Presales/TambahPertanyaanCeklis') ?>" method="POST">
                            <div class="card-body">
                                <div class="header text-center mt-1">
                                    <h3>Tambah Data Pertanyaan</h3>
                                </div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group-material mt-2">
                                                <!-- <div class="form-group">
                                                        <label class="form-control-label">Pilih Kategori :</label>
                                                        <select name="id_kategori" class="form-control">
                                                            <option value="">tes</option>
                                                            <option value="">tes</option>
                                                            <option value="">tes</option>
                                                        </select>
                                                    </div> -->
                                                <input type="hidden" name="id_kategori" value="<?php echo $id_kategori ?>">
                                                <div class="form-group">
                                                    <label class="form-control-label">Pertanyaan :</label>
                                                    <textarea cols="30" rows="5" class="form-control" required name="pertanyaan_ceklis"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="modal-footer">
                                <a class="text-white btn btn-secondary btn-sm" data-dismiss="modal" aria-label="Close" href="#"><i class="fas fa-window-close"></i> Batal</a>
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-check-square"></i> Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Tambah Data -->
<!-- Edit Data Pertanyaan -->
<?php foreach ($isi as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="EditPertanyaanModal<?php echo $row->id_pertanyaan_ceklis ?>" tabindex="-1" aria-labelledby="EditPertanyaanModalLabel<?php echo $row->id_pertanyaan_ceklis ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Edit Pertanyaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center bg-warning">
                                <h3 class="h4"></h3>
                            </div>
                            <form class="form-horizontal" action="<?php echo site_url('Presales/CTR_Presales/EditPertanyaanCeklis') ?>" method="POST">
                                <div class="card-body">
                                    <div class="header text-center mt-3">
                                        <h3>Edit Pertanyaan</h3>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <input type="hidden" name="id_pertanyaan_ceklis" value="<?php echo $row->id_pertanyaan_ceklis ?>">
                                                <input type="hidden" name="id_kategori" value="<?php echo $row->id_kategori ?>">
                                                <div class="form-group-material mt-2">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Pertanyaan :</label>
                                                        <textarea cols="30" rows="5" class="form-control" required name="pertanyaan_ceklis"><?php echo $row->pertanyaan_ceklis ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a class="text-white btn btn-secondary btn-sm" data-dismiss="modal" aria-label="Close" href="#"><i class="fas fa-window-close"></i> Batal</a>
                                    <button type="submit" class="btn btn-warning btn-sm"><i class="fas fa-check-square"></i> Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Akhir Edit Data -->
<!-- Aktifkan Data Pertanyaan -->
<?php foreach ($isi as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="AktifkanPertanyaanModal<?php echo $row->id_pertanyaan_ceklis ?>" tabindex="-1" aria-labelledby="AktifkanPertanyaanModalLabel<?php echo $row->id_pertanyaan_ceklis ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Aktifkan Pertanyaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center bg-success">
                                <h3 class="h4"></h3>
                            </div>
                            <?php echo $this->session->flashdata('pesan4'); ?>
                            <form class="form-horizontal" action="<?php echo site_url('Presales/CTR_Presales/AktifkanPertanyaanCeklis/') . $row->id_pertanyaan_ceklis ?>" method="POST">
                                <div class="card-body">
                                    <input type="hidden" name="id_kategori" value="<?php echo $row->id_kategori ?>" id="">
                                    <input type="hidden" name="id_pertanyaan_ceklis" value="<?php echo $row->id_pertanyaan_ceklis ?>" id="">
                                    <div class="header text-center mt-3">
                                        <h5>Aktifkan Pertanyaan Ini?
                                        </h5>
                                        "<b><?php echo $row->pertanyaan_ceklis ?></b>"
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="modal-footer">
                                    <a class="text-white btn btn-secondary btn-sm" data-dismiss="modal" aria-label="Close" href="#"><i class="fas fa-window-close"></i> Batal</a>
                                    <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-check-square"></i> Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Akhir Aktifkan Data -->
<!-- Nonaktifkan Data Pertanyaan -->
<?php foreach ($isi as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="NonaktifkanPertanyaanModal<?php echo $row->id_pertanyaan_ceklis ?>" tabindex="-1" aria-labelledby="NonaktifkanPertanyaanModalLabel<?php echo $row->id_pertanyaan_ceklis ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nonaktifkan Pertanyaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center bg-danger">
                                <h3 class="h4"></h3>
                            </div>
                            <?php echo $this->session->flashdata('pesan4'); ?>
                            <form class="form-horizontal" action="<?php echo site_url('Presales/CTR_Presales/NonaktifkanPertanyaanCeklis/') . $row->id_pertanyaan_ceklis ?>" method="POST">
                                <div class="card-body">
                                    <input type="hidden" name="id_kategori" value="<?php echo $row->id_kategori ?>" id="">
                                    <input type="hidden" name="id_pertanyaan_ceklis" value="<?php echo $row->id_pertanyaan_ceklis ?>" id="">
                                    <div class="header text-center mt-3">
                                        <h5>Nonaktifkan Pertanyaan Ini?
                                        </h5>
                                        "<b><?php echo $row->pertanyaan_ceklis ?></b>"
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="modal-footer">
                                    <a class="text-white btn btn-secondary btn-sm" data-dismiss="modal" aria-label="Close" href="#"><i class="fas fa-window-close"></i> Batal</a>
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-check-square"></i> Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Akhir Nonaktifkan Data -->