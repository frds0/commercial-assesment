<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0">Assesment Direvisi</h3>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Kasie/CTR_Kasie') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Laporan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <div class="container-fluid mt-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Assesment</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body" style="overflow: auto;">
                    <table id="example2" class="table table1 table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th style="width: 10px">#</th>
                                <th style="vertical-align: middle;">Nama Perusahaan</th>
                                <th style="vertical-align: middle;">Pemilihan User</th>
                                <th style="vertical-align: middle;">PIC Sales</th>
                                <th style="vertical-align: middle;">Status</th>
                                <th style="vertical-align: middle;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($isi as $row)
                                if ($row->status == "Revisi") { ?>
                                <tr>
                                    <td style="vertical-align: middle;" class="text-center"><?php echo $no++; ?></td>
                                    <td style="vertical-align: middle;">
                                        Assessment <?php echo $row->lokasi ?>
                                    </td>
                                    <td style="vertical-align: middle;">
                                        <?php echo $row->pemilihan_user ?>
                                    </td>
                                    <td style="vertical-align: middle;">
                                        <?php echo $row->nps ?>
                                    </td>
                                    <td style="vertical-align: middle;" class="text-center" id="approval">
                                        <?php switch ($row->status) {
                                            case 'revisid':
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

                                            case 'Revisi':
                                                echo '<div class="p-2">Revisi <i class="fas fa-hourglass-half text-warning"></i></div>';
                                                break;
                                        } ?>
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-info btn-sm text-center" data-toggle="modal" title="Detail Assesment" data-target="#permintaanModal<?php echo $row->id_permintaan; ?>" href="#">
                                            <i class="fas fa-eye"></i>
                                        </a>
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
<?php foreach ($isi as $row) { ?>
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
                        <?php if ($row->form_revisi == null) { ?>
                        <?php } else { ?>
                            <div class="col-sm-4">
                                <h6 class="font-weight-bold">Alasan Direvisi</h6>
                            </div>
                        <?php } ?>
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
                        <?php if ($row->form_revisi == null) { ?>
                        <?php } else { ?>
                            <div class="col-sm-4">
                                <p><?php if ($row->deskripsi == null) { ?>
                                        -
                                    <?php } else { ?>
                                        <?php echo $row->form_revisi ?> (<?php echo $row->deskripsi ?>)
                                    <?php } ?></p>
                            </div>
                        <?php } ?>
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