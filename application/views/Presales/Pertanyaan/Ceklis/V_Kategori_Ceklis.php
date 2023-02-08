<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tabel Kategori Ceklis</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Presales/CTR_Presales') ?>">Home</a></li>
                        <li class="breadcrumb-item">Kategori Ceklis</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <!-- Main content -->
        <section class="forms mt-4">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabel Upload Kategori Ceklis</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" style="overflow: auto;">
                        <?php echo $this->session->flashdata('pesan1'); ?>
                        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flashdata'); ?>"></div>
                        <div class="float-right">
                            <p>Total Kategori Ceklis: <b><?php $t = $this->db->query('SELECT * FROM ms_kategori_ceklis')->num_rows();
                                                            echo $t ?></b> & Pertanyaan Ceklis: <b><?php echo $total_ceklis ?> Pertanyaan</b></p>
                        </div>
                        <div>
                            <a href="#TambahKategoriModal" data-toggle="modal" data-target="#TambahKategoriModal" class="btn btn-primary mb-3 btn-sm "><i class="fas fa-plus"></i> Tambah Kategori</a>
                        </div>
                        <table id="example2" class="table table1 table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 10px">No</th>
                                    <th>Kategori</th>
                                    <th>Status</th>
                                    <th style="width: 90px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($kategori_ceklis as $row) {
                                    if ($row->status_kategori_ceklis == 'Aktif') { ?>
                                        <tr>
                                            <td style="vertical-align: middle;" class="text-center"><?php echo $no++; ?></td>
                                            <td style="vertical-align: middle;">
                                                <?php echo $row->kategori_ceklis ?>
                                            </td>
                                            <td style="vertical-align: middle;" class="text-center">
                                                <?php echo $row->status_kategori_ceklis ?>
                                            </td>
                                            <!-- <td><?php echo $row->proses ?></td> -->
                                            <td class="text-center" style="vertical-align: middle;">
                                                <div class="row justify-content-center">
                                                    <div class="col-sm-6">
                                                        <a href="#EditKategoriModal<?php echo $row->id_kategori ?>" data-toggle="modal" data-target="#EditKategoriModal<?php echo $row->id_kategori ?>" class="btn btn-warning btn-sm" title="Edit Data"><i class="fas fa-edit"></i></a>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <a href="<?php echo site_url('Presales/CTR_Presales/PertanyaanCeklis/') . $row->id_kategori ?>" class="btn btn-info btn-sm" title="Lihat Pertanyaan"><i class="fas fa-eye"></i></a>
                                                    </div>
                                                    <div class="col-sm-6 mt-1" style="cursor: not-allowed !important;">
                                                        <a href="#AktifkanKategoriModal<?php echo $row->id_kategori ?>" data-toggle="modal" data-target="#AktifkanKategoriModal<?php echo $row->id_kategori ?>" class="btn btn-sm bg-dark disabled" title="Aktifkan"><i class="fa fa-power-off"></i></a>
                                                    </div>
                                                    <div class="col-sm-6 mt-1">
                                                        <a href="#NonaktifkanKategoriModal<?php echo $row->id_kategori ?>" data-toggle="modal" data-target="#NonaktifkanKategoriModal<?php echo $row->id_kategori ?>" class="btn btn-danger btn-sm" title="Nonaktifkan"><i class="fa fa-ban"></i></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } else { ?>
                                        <tr class="bg-secondary">
                                            <td style="vertical-align: middle;" class="text-center"><?php echo $no++; ?></td>
                                            <td style="vertical-align: middle;">
                                                <?php echo $row->kategori_ceklis ?>
                                            </td>
                                            <td style="vertical-align: middle;" class="text-center">
                                                <?php echo $row->status_kategori_ceklis ?>
                                            </td>
                                            <!-- <td><?php echo $row->proses ?></td> -->
                                            <td class="text-center" style="vertical-align: middle;">
                                                <div class="row justify-content-center">
                                                    <div class="col-sm-6">
                                                        <a href="#EditKategoriModal<?php echo $row->id_kategori ?>" data-toggle="modal" data-target="#EditKategoriModal<?php echo $row->id_kategori ?>" class="btn btn-warning btn-sm" title="Edit Data"><i class="fas fa-edit"></i></a>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <a href="<?php echo site_url('Presales/CTR_Presales/PertanyaanCeklis/') . $row->id_kategori ?>" class="btn btn-info btn-sm" title="Lihat Pertanyaan"><i class="fas fa-eye"></i></a>
                                                    </div>
                                                    <div class="col-sm-6 mt-1">
                                                        <a href="#AktifkanKategoriModal<?php echo $row->id_kategori ?>" data-toggle="modal" data-target="#AktifkanKategoriModal<?php echo $row->id_kategori ?>" class="btn btn-success btn-sm" title="Aktifkan"><i class="fa fa-power-off"></i></a>
                                                    </div>
                                                    <div class="col-sm-6 mt-1" style="cursor: not-allowed !important;">
                                                        <a href="#NonaktifkanKategoriModal<?php echo $row->id_kategori ?>" data-toggle="modal" data-target="#NonaktifkanKategoriModal<?php echo $row->id_kategori ?>" class="btn btn-sm disabled bg-dark" title="Nonaktifkan"><i class="fa fa-ban"></i></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
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
<!-- Tambah Data kategori -->
<div class="modal fade" data-backdrop="static" id="TambahKategoriModal" tabindex="-1" aria-labelledby="TambahKategoriModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Tambah Kategori</h5>
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
                        <form class="form-horizontal" action="<?php echo site_url('Presales/CTR_Presales/TambahKategoriCeklis') ?>" method="POST">
                            <div class="card-body">
                                <div class="header text-center mt-3">
                                    <h3>Tambah Data Kategori
                                    </h3>
                                </div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group-material mt-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Kategori :</label>
                                                    <textarea cols="30" rows="5" class="form-control" required name="kategori_ceklis"></textarea>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group-material mt-2">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Proses :</label>
                                                        <textarea cols="30" rows="5" class="form-control" required name="proses"></textarea>
                                                    </div>
                                                </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
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
<!-- Edit Data kategori -->
<?php foreach ($kategori_ceklis as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="EditKategoriModal<?php echo $row->id_kategori ?>" tabindex="-1" aria-labelledby="EditKategoriModalLabel<?php echo $row->id_kategori ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Edit kategori</h5>
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
                            <form class="form-horizontal" action="<?php echo site_url('Presales/CTR_Presales/EditKategoriCeklis') ?>" method="POST">
                                <div class="card-body">
                                    <div class="header text-center mt-3">
                                        <h3>Edit Data kategori
                                        </h3>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <input type="hidden" name="id_kategori" value="<?php echo $row->id_kategori ?>">
                                                <div class="form-group-material mt-2">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Kategori :</label>
                                                        <textarea cols="30" rows="5" class="form-control" required name="kategori_ceklis"><?php echo $row->kategori_ceklis ?></textarea>
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
<!-- Aktifkan Data kategori -->
<?php foreach ($kategori_ceklis as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="AktifkanKategoriModal<?php echo $row->id_kategori ?>" tabindex="-1" aria-labelledby="AktifkanKategoriModalLabel<?php echo $row->id_kategori ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Aktifkan Kategori</h5>
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
                            <form class="form-horizontal" action="<?php echo site_url('Presales/CTR_Presales/AktifkanKategoriCeklis/') . $row->id_kategori ?>" method="POST">
                                <div class="card-body">
                                    <input type="hidden" name="id_kategori" value="<?php echo $row->id_kategori ?>" id="">
                                    <div class="header text-center mt-3">
                                        <h5>Aktifkan Kategori Ini?
                                        </h5>
                                        <b>"<?php echo $row->kategori_ceklis ?>"</b>
                                    </div>
                                </div>
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
<!-- Nonaktifkan Data kategori -->
<?php foreach ($kategori_ceklis as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="NonaktifkanKategoriModal<?php echo $row->id_kategori ?>" tabindex="-1" aria-labelledby="NonaktifkanKategoriModalLabel<?php echo $row->id_kategori ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nonaktifkan Kategori</h5>
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
                            <form class="form-horizontal" action="<?php echo site_url('Presales/CTR_Presales/NonaktifkanKategoriCeklis/') . $row->id_kategori ?>" method="POST">
                                <div class="card-body">
                                    <input type="hidden" name="id_kategori" value="<?php echo $row->id_kategori ?>" id="">
                                    <div class="header text-center mt-3">
                                        <h5>Nonaktifkan Kategori Ini?
                                        </h5>
                                        <b>"<?php echo $row->kategori_ceklis ?>"</b>
                                    </div>
                                </div>
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