<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0">Assesment Disetujui</h3>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Kasie/CTR_Kasie') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Laporan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->

        <!-- Main content -->
        <div class="container-fluid mt-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Assesment</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body" style="overflow: auto;">
                    <table id="example3" class="table table1 table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th style="width: 10px">#</th>
                                <th>Nama Perusahaan</th>
                                <th>Pemilihan User</th>
                                <th>PIC Sales</th>
                                <th style="width: 100px">Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($isi as $row) { ?>
                                <tr>
                                    <td style="vertical-align: middle;" class="text-center"><?php echo $no++; ?></td>
                                    <td style="vertical-align: middle;">
                                        Assessment <?php echo $row->lokasi ?>
                                    </td>
                                    <td style="vertical-align: middle;">
                                        <?php echo $row->pemilihan_user ?> (<?php echo date('d F Y', strtotime($row->created_date)) ?>)
                                    </td>
                                    <td style="vertical-align: middle;">
                                        <?php echo $row->nps ?>
                                    </td>
                                    <td style="vertical-align: middle;" id="approval">
                                        <?php switch ($row->status) {
                                            case 'Revisi':
                                                echo '<div class="p-2">Revisi <i class="fas fa-times text-danger"></i></div>';
                                                break;

                                            case 'Pending':
                                                echo '<div class="p-2">Pending <i class="far fa-clock text-warning"></i></div>';
                                                break;

                                            case 'Menunggu Approval':
                                                echo '<div class="p-2 ">Menunggu Approval <i class="fas fa-hourglass-half text-secondary"></i></div>';
                                                break;

                                            case 'Approved':
                                                echo '<div class="p-2">Approved <i class="fas fa-check text-success"></i></div>';
                                                break;
                                        } ?>
                                    </td>
                                    <td class="text-center" style="vertical-align: middle;">
                                        <div class="row mb-2">
                                            <div class="col-sm-12">
                                                <a class="btn btn-info btn-sm text-center" data-toggle="modal" title="Detail Assesment" data-target="#permintaanModal<?php echo $row->id_permintaan; ?>" href="#">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a class="btn bg-teal btn-sm text-center" title="Print PDF" data-toggle="modal" data-target="#printModal<?php echo $row->id_wawancara ?>" href="#printModal<?php echo $row->id_wawancara ?>">
                                                    <i class="fas fa-print"></i>
                                                </a>
                                            </div>
                                            <div class="col-sm-6">
                                                <a class="btn bg-warning btn-sm text-center" title="Print Excel" data-toggle="modal" data-target="#printExcelModal<?php echo $row->id_wawancara ?>" href="#printExcelModal<?php echo $row->id_wawancara ?>">
                                                    <i class="fas fa-file-excel"></i>
                                                </a>
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
        <!-- /.content -->
    </div>
    <!-- /.content-header -->
</div>


<!-- Print PDF -->
<?php foreach ($isi as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="printModal<?php echo $row->id_wawancara ?>" tabindex="-1" aria-labelledby="printModal<?php echo $row->id_wawancara ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Print PDF</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center bg-teal">
                                <h3 class="h4"></h3>
                            </div>
                            <?php echo $this->session->flashdata('pesan4'); ?>
                            <form class="form-horizontal" action="<?php echo site_url('CTR_Laporan/index/' . $row->id_permintaan) ?>" method="POST">
                                <div class="card-body">
                                    <input type="hidden" name="id_permintaan" value="<?php echo $row->id_permintaan ?>" id="">
                                    <input type="hidden" name="id_wawancara" value="<?php echo $row->id_wawancara ?>" id="">
                                    <input type="hidden" name="id_ssa1" value="<?php echo $row->id_ssa1 ?>" id="">
                                    <input type="hidden" name="id_ceklis" value="<?php echo $row->id_ceklis ?>" id="">
                                    <input type="hidden" name="id_ssa2" value="<?php echo $row->id_ssa2 ?>" id="">
                                    <input type="hidden" name="id_device" value="<?php echo $row->id_device ?>" id="">
                                    <input type="hidden" name="id_cctv" value="<?php echo $row->id_cctv ?>" id="">
                                    <div class="header text-center mt-3">
                                        <h5>Print <b>PDF</b> Laporan Assesment <?php echo $row->lokasi ?> ?</h5>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a class="text-white btn btn-secondary btn-sm" data-dismiss="modal" aria-label="Close" href="#"><i class="fas fa-window-close"></i> Batal</a>
                                    <button type="submit" class="btn bg-teal btn-sm"><i class="fas fa-check-square"></i> Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<!-- Print Excel -->
<?php foreach ($isi as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="printExcelModal<?php echo $row->id_wawancara ?>" tabindex="-1" aria-labelledby="printExcelModal<?php echo $row->id_wawancara ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Print Excel</h5>
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
                            <?php echo $this->session->flashdata('pesan4'); ?>
                            <form class="form-horizontal" action="<?php echo site_url('CTR_Laporan/PrintExcel/' . $row->id_permintaan) ?>" method="POST">
                                <div class="card-body">
                                    <input type="hidden" name="id_permintaan" value="<?php echo $row->id_permintaan ?>" id="">
                                    <input type="hidden" name="id_wawancara" value="<?php echo $row->id_wawancara ?>" id="">
                                    <input type="hidden" name="id_ssa1" value="<?php echo $row->id_ssa1 ?>" id="">
                                    <input type="hidden" name="id_ceklis" value="<?php echo $row->id_ceklis ?>" id="">
                                    <input type="hidden" name="id_ssa2" value="<?php echo $row->id_ssa2 ?>" id="">
                                    <input type="hidden" name="id_device" value="<?php echo $row->id_device ?>" id="">
                                    <input type="hidden" name="id_cctv" value="<?php echo $row->id_cctv ?>" id="">
                                    <div class="header text-center mt-3">
                                        <h5>Print <b>Excel</b> Laporan Assesment <?php echo $row->lokasi ?> ?</h5>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a class="text-white btn btn-secondary btn-sm" data-dismiss="modal" aria-label="Close" href="#"><i class="fas fa-window-close"></i> Batal</a>
                                    <button type="submit" class="btn bg-warning btn-sm"><i class="fas fa-check-square"></i> Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<!-- Modal revisi -->
<?php foreach ($isi as $row) { ?>
    <div class="modal fade" id="revisiModal<?php echo $row->id_permintaan ?>" tabindex="-1" aria-labelledby="revisiModalLabel<?php echo $row->id_permintaan ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger">Revisi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo site_url('Kasie/CTR_Kasie/revisi/' . $id_permintaan) ?>" method="POST">
                    <div class="modal-body">
                        <span>
                            Revisi Assesment <strong><?php echo $row->lokasi ?></strong> ?
                        </span>
                        <input type="hidden" name="id_permintaan" value="<?php echo $row->id_permintaan ?>">
                        <div class="form-group mt-3">
                            <label for="">Form Assesment</label>
                            <div class="select2-danger">
                                <select class="select2" name="form_revisi[]" multiple=" multiple" data-placeholder="Pilih Form" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                    <option value="Form Wawancara">Form Wawancara</option>
                                    <option value="Form SSA 1">Form SSA 1</option>
                                    <option value="Form Ceklis">Form Ceklis</option>
                                    <option value="Form SSA 2">Form SSA 2</option>
                                    <option value="Form Survey Device">Form Survey Device</option>
                                    <option value="Form CCTV">Form CCTV</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <textarea name="deskripsi" id="" required class="form-control" rows="4"></textarea>
                        </div>
                        <div class="mb-4 mt-2 text-center">
                            <a class="text-white btn btn-secondary" data-dismiss="modal" aria-label="Close" href="#"><i class="fas fa-window-close"></i> Batal</a>
                            <button type="submit" class="btn btn-danger"><i class="fas fa-window-close"></i> Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>

<!-- Modal Permintaan-->
<?php foreach ($isi1 as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="permintaanModal<?php echo $row->id_permintaan; ?>" tabindex="-1" aria-labelledby="permintaanModal<?php echo $row->id_permintaan; ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title" id="detailModalLabel">Detail Data Permintaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <h6 class="font-weight-bold">Nama PIC Presales</h6>
                        </div>
                        <div class="col-sm-4">
                            <h6 class="font-weight-bold">Nama PIC Sales</h6>
                        </div>
                        <div class="col-sm-4">
                            <h6 class="font-weight-bold">Nama User</h6>
                        </div>
                        <div class="col-sm-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <p><?php echo $row->npp ?></p>
                        </div>
                        <div class="col-sm-4">
                            <p><?php echo $row->nps ?></p>
                        </div>
                        <div class="col-sm-4">
                            <p><?php echo $row->nama_user ?></p>
                        </div>
                        <div class="col-sm-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <h6 class="font-weight-bold">Lokasi</h6>
                        </div>
                        <div class="col-sm-4">
                            <h6 class="font-weight-bold">Sub Lokasi</h6>
                        </div>
                        <div class="col-sm-4">
                            <h6 class="font-weight-bold">Luas Wilayah</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <p><?php echo $row->lokasi ?></p>
                        </div>
                        <div class="col-sm-4">
                            <p><?php echo $row->sub_lokasi ?></p>
                        </div>
                        <div class="col-sm-4">
                            <p><?php echo $row->luas_wilayah ?></p>
                        </div>
                        <div class="col-sm-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <h6 class="font-weight-bold">Pemlihan User</h6>
                        </div>
                        <div class="col-sm-4">
                            <h6 class="font-weight-bold">Created By</h6>
                        </div>
                        <div class="col-sm-4">
                            <h6 class="font-weight-bold">Created Date</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <p><?php echo $row->pemilihan_user ?></p>
                        </div>
                        <div class="col-sm-4">
                            <p><?php echo $row->nama_created ?></p>
                        </div>
                        <div class="col-sm-4">
                            <p><?php if ($row->created_date == null) { ?>
                                    -
                                <?php } else {
                                    echo date('d F Y H:i:s', strtotime($row->created_date));
                                } ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <h6 class="font-weight-bold">Kegiatan yang Dilakukan</h6>
                        </div>
                        <div class="col-sm-4">
                            <h6 class="font-weight-bold">Modified By</h6>
                        </div>
                        <div class="col-sm-4">
                            <h6 class="font-weight-bold">Modified Date</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <p><?php echo $row->kegiatan_akan ?></p>
                        </div>
                        <div class="col-sm-4">
                            <p><?php if ($row->nama_modified == null) { ?>
                                    -
                                <?php } else {
                                    echo $row->nama_modified;
                                } ?></p>
                        </div>
                        <div class="col-sm-4">
                            <p><?php if ($row->modified_date == null) { ?>
                                    -
                                <?php } else {
                                    echo date('d F Y H:i:s', strtotime($row->modified_date));
                                } ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <h6 class="font-weight-bold">Status</h6>
                        </div>
                        <div class="col-sm-4">
                            <h6 class="font-weight-bold">Approval By</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <p><?php if ($row->status == null) { ?>
                                    -
                                <?php } else {
                                    echo $row->status;
                                } ?></p>
                        </div>
                        <div class="col-sm-4">
                            <p><?php if ($row->nama_approval == null) { ?>
                                    -
                                <?php } else {
                                    echo $row->nama_approval;
                                } ?></p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fas fa-window-close"></i> Tutup</button>
                    <a class="btn btn-info btn-sm text-center" href="<?php echo site_url('Kasie/CTR_Kasie/Detail/' . $row->id_permintaan)  ?>"><i class="fas fa-check-square"></i> Next</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>