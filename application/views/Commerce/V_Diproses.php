<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Assesment Diproses</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Commerce/CTR_Commerce') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Diproses</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Assesment Diproses</h3>
                    </div>
                    <?php echo $this->session->flashdata('pesan'); ?>
                    <!-- /.card-header -->
                    <div class="card-body" style="overflow: auto;">
                        <table id="example2" class="table table1 table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th style="vertical-align: middle; width: 10px">#</th>
                                    <th style="vertical-align: middle;">Nama&nbsp;Perusahaan</th>
                                    <th style="vertical-align: middle;">Pemilihan&nbsp;User</th>
                                    <th style="vertical-align: middle;">PIC&nbsp;Sales</th>
                                    <th style="vertical-align: middle; width: 90px">Status</th>
                                    <th style="vertical-align: middle; width: 90px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($isi as $row) if ($row->status == "On Progress" or $row->status == "Menunggu Approval") { ?>
                                    <tr>
                                        <td style="vertical-align: middle;" class="text-center"><?php echo $no++; ?></td>
                                        <td style="vertical-align: middle;">Assessment <?php echo $row->lokasi ?></td>
                                        <td style="vertical-align: middle;"><?php echo $row->pemilihan_user ?></td>
                                        <td style="vertical-align: middle;"><?php echo $row->nps ?></td>
                                        <td style="width: 150px;" class="text-center">
                                            <?php switch ($row->status) {
                                                case 'Declined':
                                                    echo '<div class="p-2 ">Declined <i class="fas fa-times text-danger"></i></div>';
                                                    break;
                                                case 'Pending':
                                                    echo '<div class="p-2">Pending <i class="far fa-clock text-warning"></i></div>';
                                                    break;
                                                case 'On Progress':
                                                    echo '<div class="p-2">On&nbsp;Progress <i class="fas fa-hourglass-half text-secondary"></i></div>';
                                                    break;
                                                case 'Approved':
                                                    echo '<div class="p-2">Approved <i class="fas fa-check text-success"></i></div>';
                                                    break;
                                                case 'Revisi':
                                                    echo '<div class="p-2">Revisi <i class="fas fa-times text-warning"></i></div>';
                                                    break;
                                                case 'Menunggu Assignment':
                                                    echo '<div class="p-2">Menunggu Assignment <i class="fas fa-hourglass-half"></i></div>';
                                                    break;
                                                case 'Menunggu Approval':
                                                    echo '<div class="p-2">Menunggu&nbsp;Apporval<i class="fas fa-hourglass-half"></i></div>';
                                                    break;
                                            } ?></td>
                                        <td style="vertical-align: middle;" class="text-center">
                                            <a href="" data-toggle="modal" title="Detail Assesment" data-target="#permintaanModal<?php echo $row->id_permintaan; ?>" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div><!-- /.container-fluid -->
        </div>
    </div>
    <!-- /.content -->
</div>
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
                        <div class="col-sm-3">
                            <h6 class="font-weight-bold">Nama PIC Presales</h6>
                        </div>
                        <div class="col-sm-3">
                            <h6 class="font-weight-bold">Nama PIC Sales</h6>
                        </div>
                        <div class="col-sm-3">
                            <h6 class="font-weight-bold">Nama User</h6>
                        </div>
                        <div class="col-sm-3">
                            <h6 class="font-weight-bold">Nama ARH</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <p>
                                <?php if ($row->npp == null) { ?>
                                    -
                                <?php } else {
                                    echo $row->npp;
                                } ?>
                            </p>
                        </div>
                        <div class="col-sm-3">
                            <p><?php echo $row->nps ?></p>
                        </div>
                        <div class="col-sm-3">
                            <p><?php echo $row->nama_user ?></p>
                        </div>
                        <div class="col-sm-3">
                            <p><?php echo $row->nama_arh ?></p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-3">
                            <h6 class="font-weight-bold">Lokasi</h6>
                        </div>
                        <div class="col-sm-3">
                            <h6 class="font-weight-bold">Sub Lokasi</h6>
                        </div>
                        <div class="col-sm-3">
                            <h6 class="font-weight-bold">Luas Wilayah</h6>
                        </div>
                        <div class="col-sm-3">
                            <h6 class="font-weight-bold">Sub Lokasi ARH</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <p><?php echo $row->lokasi ?></p>
                        </div>
                        <div class="col-sm-3">
                            <p><?php echo $row->sub_lokasi ?></p>
                        </div>
                        <div class="col-sm-3">
                            <p><?php echo $row->luas_wilayah ?></p>
                        </div>
                        <div class="col-sm-3">
                            <p><?php echo $row->sub_lokasi_arh ?></p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-3">
                            <h6 class="font-weight-bold">Pemlihan User</h6>
                        </div>
                        <div class="col-sm-3">
                            <h6 class="font-weight-bold">Kegiatan</h6>
                        </div>
                        <div class="col-sm-3">
                            <h6 class="font-weight-bold">Status</h6>
                        </div>
                        <div class="col-sm-3">
                            <h6 class="font-weight-bold">Approval By</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <p><?php echo $row->pemilihan_user ?></p>
                        </div>
                        <div class="col-sm-3">
                            <p><?php echo $row->kegiatan_akan ?></p>
                        </div>
                        <div class="col-sm-3">
                            <p><?php if ($row->status == null) { ?>
                                    -
                                <?php } else {
                                    echo $row->status;
                                } ?></p>
                        </div>
                        <div class="col-sm-3">
                            <p><?php if ($row->nama_approval == null) { ?>
                                    -
                                <?php } else {
                                    echo $row->nama_approval;
                                } ?></p>
                        </div>
                    </div>
                    <div class="row mt-2">
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
                            <p><?php echo $row->nama_created ?></p>
                        </div>
                        <div class="col-sm-3">
                            <p><?php if ($row->created_date == null) { ?>
                                    -
                                <?php } else {
                                    echo date('d F Y H:i:s', strtotime($row->created_date));
                                } ?>
                            </p>
                        </div>
                        <div class="col-sm-3">
                            <p><?php if ($row->nama_modified == null) { ?>
                                    -
                                <?php } else {
                                    echo $row->nama_modified;
                                } ?></p>
                        </div>
                        <div class="col-sm-3">
                            <p><?php if ($row->modified_date == null) { ?>
                                    -
                                <?php } else {
                                    echo date('d F Y H:i:s', strtotime($row->modified_date));
                                } ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <?php if ($row->form_revisi == null) { ?>
                        <?php } else { ?>
                            <div class="col-sm-3">
                                <h6 class="font-weight-bold">Alasan Direvisi</h6>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="row">
                        <?php if ($row->form_revisi == null) { ?>
                        <?php } else { ?>
                            <div class="col-sm-3">
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
                </div>
            </div>
        </div>
    </div>
<?php } ?>