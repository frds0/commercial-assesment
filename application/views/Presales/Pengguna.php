<style>
    .small-box {
        transition: transform 1s;
    }

    .small-box:hover {
        transform: translateY(-5px);
    }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kelola Pengguna</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Presales/CTR_Presales') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Pengguna</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <!-- Main content -->
        <div class="container-fluid mt-4">
            <?php echo $this->session->flashdata('pesan1'); ?>
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flashdata'); ?>"></div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Kelola Pengguna</h3>
                </div>
                <div class="card-body">
                    <div>
                        <a href="#TambahPenggunaModal" data-toggle="modal" data-target="#TambahPenggunaModal" class="btn btn-primary mb-3 btn-sm" title="Tambah Data"><i class="fas fa-plus"></i> Tambah Data</a>
                    </div>
                    <table id="example2" class="table table1 table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th style="width: 10px">No</th>
                                <th>NPK</th>
                                <th>Nama User</th>
                                <th style="width: 10px">Role</th>
                                <th style="width: 10px">Lokasi</th>
                                <th style="width: 10px">Sub Lokasi</th>
                                <th>Status</th>
                                <th style="width: 10px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($pengguna as $row) { ?>
                                <tr>
                                    <td style="vertical-align: middle;" class="text-center"><?php echo $no++; ?></td>
                                    <td style="vertical-align: middle;">
                                        <?php echo $row['npk'] ?>
                                    </td>
                                    <td style="vertical-align: middle;">
                                        <?php echo $row['nama'] ?>
                                    </td>
                                    <td style="width: 150px; vertical-align: middle">
                                        <?php echo $row['role'] ?>
                                    </td>
                                    <td style="width: 150px; vertical-align: middle">
                                        <?php echo $row['lokasi'] ?>
                                    </td>
                                    <td style="width: 150px; vertical-align: middle">
                                        <?php echo $row['sub_lokasi_arh'] ?>
                                    </td>
                                    <td style="width: 150px; vertical-align: middle" class="text-center">
                                        <?php if ($row['is_active'] == 'Aktif') { ?>
                                            <a href="" class="btn btn-success btn-sm disabled"><?php echo $row['is_active'] ?></a>
                                        <?php } else { ?>
                                            <a href="" class="btn btn-danger btn-sm disabled"><?php echo $row['is_active'] ?></a>
                                        <?php } ?>
                                    </td>
                                    <td class="text-center" style="vertical-align: middle;">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <a class="btn btn-info btn-sm text-center" title="Detail Pengguna" href="" data-toggle="modal" data-target="#DetailPenggunaModal<?php echo $row['npk']  ?>">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row text-center mt-2">
                                            <div class="col-sm-6">
                                                <a href="#EditPenggunaModal<?php echo $row['npk'] ?>" data-toggle="modal" data-target="#EditPenggunaModal<?php echo $row['npk'] ?>" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Edit Data"><i class="fas fa-edit"></i></a>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php if ($row['is_active'] == 'Aktif' and $row['role'] != 'Super Admin') { ?>
                                                    <a href="#NonaktifkanPenggunaModal<?php echo $row['npk'] ?>" data-toggle="modal" data-target="#NonaktifkanPenggunaModal<?php echo $row['npk'] ?>" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Nonaktifkan"><i class="fa fa-power-off"></i></a>
                                                <?php } else if ($row['is_active'] == 'Nonaktif' and $row['role'] != 'Super Admin') { ?>
                                                    <a href="#AktifkanPenggunaModal<?php echo $row['npk'] ?>" data-toggle="modal" data-target="#AktifkanPenggunaModal<?php echo $row['npk'] ?>" class="btn btn-success btn-sm" data-toggle="tooltip" title="Aktifkan"><i class="fa fa-power-off"></i></a>
                                                <?php } else if ($row['role'] == 'Super Admin') {
                                                    echo '-';
                                                } ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>
</div>
<!-- /.content-header -->
<!-- Detail Pengguna -->
<?php foreach ($pengguna as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="DetailPenggunaModal<?php echo $row['npk'] ?>" tabindex="-1" aria-labelledby="DetailPenggunaModalLabel<?php echo $row['npk'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title">Detail Data Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="font-weight-bold">NPK</h6>
                            </div>
                            <div class="col-sm-3">
                                <h6 class="font-weight-bold">Nama</h6>
                            </div>
                            <div class="col-sm-3">
                                <h6 class="font-weight-bold">Role</h6>
                            </div>
                            <div class="col-sm-3">
                                <h6 class="font-weight-bold">Status</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <p><?php echo $row['npk'] ?></p>
                            </div>
                            <div class="col-sm-3">
                                <p><?php echo $row['nama'] ?></p>
                            </div>
                            <div class="col-sm-3">
                                <p><?php echo $row['role'] ?></p>
                            </div>
                            <div class="col-sm-3">
                                <p><?php echo $row['is_active'] ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="font-weight-bold">Created By</h6>
                            </div>
                            <div class="col-sm-3">
                                <h6 class="font-weight-bold">Created Date</h6>
                            </div>
                            <div class="col-sm-3">
                                <h6 class="font-weight-bold">Modified By</h6>
                            </div>
                            <div class="col-sm-3">
                                <h6 class="font-weight-bold">Modified Date</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <p><?php echo $row['created_by'] ?></p>
                            </div>
                            <div class="col-sm-3">
                                <p><?php if ($row['created_by'] == null) { ?>
                                        -
                                    <?php } else {
                                        echo date('d F Y H:i:s', strtotime($row['created_by']));
                                    } ?></p>
                            </div>
                            <div class="col-sm-3">
                                <p><?php if ($row['modified_by'] == null) { ?>
                                        -
                                    <?php } else {
                                        echo $row['modified_by'];
                                    } ?></p>
                            </div>
                            <div class="col-sm-3">
                                <p><?php if ($row['modified_date'] == null) { ?>
                                        -
                                    <?php } else {
                                        echo date('d F Y H:i:s', strtotime($row['modified_date']));
                                    } ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a class="text-white btn btn-danger btn-sm" data-dismiss="modal" aria-label="Close" href="#"><i class="fas fa-window-close"></i> Tutup</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Aktifkan Pengguna -->
<?php foreach ($pengguna as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="AktifkanPenggunaModal<?php echo $row['npk'] ?>" tabindex="-1" aria-labelledby="AktifkanPenggunaModalLabel<?php echo $row['npk'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Aktifkan Pengguna</h5>
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
                            <div class="card-body">
                                <?php echo $this->session->flashdata('pesan4'); ?>
                                <form class="form-horizontal" action="<?php echo site_url('Presales/CTR_Presales/AktifkanPengguna') ?>" method="POST">
                                    <div class="card-body">
                                        <input type="hidden" name="npk" value="<?php echo $row['npk'] ?>" id="">
                                        <div class="header text-center mt-3">
                                            <h5>Aktifkan <b>"<?php echo $row['nama'] ?>"</b>? </h5>
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="col-sm-12 text-center mb-3">
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
    </div>
<?php } ?>
<!-- Akhir Aktif Data -->
<!-- Nonaktifkan Pengguna -->
<?php foreach ($pengguna as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="NonaktifkanPenggunaModal<?php echo $row['npk'] ?>" tabindex="-1" aria-labelledby="NonaktifkanPenggunaModalLabel<?php echo $row['npk'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nonaktifkan Pengguna</h5>
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
                            <div class="card-body">
                                <?php echo $this->session->flashdata('pesan4'); ?>
                                <form class="form-horizontal" action="<?php echo site_url('Presales/CTR_Presales/NonaktifkanPengguna') ?>" method="POST">
                                    <div class="card-body">
                                        <input type="hidden" name="npk" value="<?php echo $row['npk'] ?>" id="">
                                        <div class="header text-center mt-3">
                                            <h5>Nonaktifkan <b>"<?php echo $row['nama'] ?>"</b>? </h5>
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="col-sm-12 text-center mb-3">
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
    </div>
<?php } ?>
<!-- Akhir Nonaktif Data -->
<!-- Tambah Data Pengguna -->
<div class="modal fade" data-backdrop="static" id="TambahPenggunaModal" tabindex="-1" aria-labelledby="TambahPenggunaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Pengguna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-horizontal" action="<?php echo site_url('Presales/CTR_Presales/TambahPengguna') ?>" method="POST">
                <div class="modal-body">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center bg-primary">
                                <h3 class="h4"></h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">NPK</label>
                                    <input type="text" name="npk" class="form-control form-control-sm" autofocus="autofocus" id="inputName" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama User</label>
                                    <input type="text" name="nama" class="form-control form-control-sm" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Role</label>
                                    <select name="role" class="custom-select rounded-2" required>
                                        <option value="" disabled selected>Pilih Role</option>
                                        <option value="Kasie">Kasie</option>
                                        <option value="Presales">Presales</option>
                                        <option value="Commerce">Commercial</option>
                                        <option value="Admin">Admin ARH</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Lokasi</label>
                                    <select name="lokasi" id="" class="custom-select" required>
                                        <option value="" disabled selected>Pilih Lokasi</option>
                                        <option value="Head Office">Head Office</option>
                                        <option value="ARH">ARH</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Sub Lokasi</label>
                                    <input type="text" name="sub_lokasi" class="form-control form-control-sm" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <!-- <input type="password" name="password" class="form-control form-control-sm"> -->
                                    <div class="input-group mb-3">
                                        <input type="password" name="password" class="form-control" id="myInput" aria-label="text input with checkbox" required>
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox" onclick="myFunction1()" aria-label="Checkbox for following text input">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a class="text-white btn btn-secondary btn-sm" data-dismiss="modal" aria-label="Close" href="#"><i class="fas fa-window-close"></i> Batal</a>
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-check-square"></i> Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Akhir Tambah Data Pengguna -->

<!-- Edit Data Pengguna -->
<?php foreach ($pengguna as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="EditPenggunaModal<?php echo $row['npk'] ?>" tabindex="-1" aria-labelledby="EditPenggunaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" action="<?php echo site_url('Presales/CTR_Presales/EditPengguna') ?>" method="POST">
                    <div class="modal-body">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header d-flex align-items-center bg-primary">
                                    <h3 class="h4"></h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="">NPK</label>
                                        <input type="text" name="npk" class="form-control form-control-sm" readonly value="<?php echo $row['npk'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nama User</label>
                                        <input type="text" name="nama" class="form-control form-control-sm" value="<?php echo $row['nama'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Role</label>
                                        <select name="role" class="custom-select">
                                            <?php if ($row['role'] == 'Kasie') { ?>
                                                <option value="Kasie" selected>Kasie</option>
                                                <option value="Presales">Presales</option>
                                                <option value="Commerce">Commercial</option>
                                                <option value="Admin">Admin ARH</option>
                                            <?php } elseif ($row['role'] == 'Presales') { ?>
                                                <option value="Kasie">Kasie</option>
                                                <option value="Presales" selected>Presales</option>
                                                <option value="Commerce">Commercial</option>
                                                <option value="Admin">Admin ARH</option>
                                            <?php } elseif ($row['role'] == 'Commerce') { ?>
                                                <option value="Kasie">Kasie</option>
                                                <option value="Presales">Presales</option>
                                                <option value="Commerce" selected>Commercial</option>
                                                <option value="Admin">Admin ARH</option>
                                            <?php } elseif ($row['role'] == 'Super Admin') { ?>
                                                <!-- <option value="Kasie">Kasie</option>
                                                <option value="Presales">Presales</option>
                                                <option value="Commerce">Commercial</option>
                                                <option value="Admin">Admin ARH</option> -->
                                                <option value="Super Admin" selected>Super Admin</option>
                                            <?php } elseif ($row['role'] == 'Admin') { ?>
                                                <option value="Kasie">Kasie</option>
                                                <option value="Presales">Presales</option>
                                                <option value="Commerce">Commercial</option>
                                                <option value="Admin" selected>Admin ARH</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Lokasi</label>
                                        <select name="lokasi" id="" class="custom-select">
                                            <?php if ($row['lokasi'] == 'Head Office') { ?>
                                                <option value="Head Office" selected>Head Office</option>
                                                <option value="ARH">ARH</option>
                                            <?php } else { ?>
                                                <option value="Head Office">Head Office</option>
                                                <option value="ARH" selected>ARH</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Sub Lokasi</label>
                                        <input type="text" name="sub_lokasi" class="form-control form-control-sm" value="<?php echo $row['sub_lokasi_arh'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <div class="input-group mb-3">
                                            <input type="password" name="password" class="form-control" value="<?php echo $row['password'] ?>" id="myInput<?php echo $row['npk'] ?>" aria-label="text input with checkbox">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <input type="checkbox" onclick="myFunction()" aria-label="Checkbox for following text input" value="<?php echo $row['password'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a class="text-white btn btn-secondary btn-sm" data-dismiss="modal" aria-label="Close" href="#"><i class="fas fa-window-close"></i> Batal</a>
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-check-square"></i> Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Akhir Edit Data Pengguna -->
<script type="text/javascript">
    function myFunction() {
        <?php foreach ($pengguna as $row) { ?>
            var x = document.getElementById("myInput<?php echo $row['npk'] ?>");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        <?php } ?>
    }

    function myFunction1() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    $(document).ready(function() {
        $("#TambahPenggunaModal").on('shown.bs.modal', function() {
            $(this).find('#inputName').focus();
        });
    });
</script>