<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0">Dashboard</h3>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <!-- <li class="breadcrumb-item"><a href="<?php echo site_url('Kasie/CTR_Kasie') ?>">Home</a></li> -->
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->

        <!-- Main content -->
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flashdata'); ?>"></div>
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-lg-3">
                    <div class="small-box bg-secondary">
                        <div class="inner">
                            <h3><?php echo $approval ?></h3>
                            <p>Menunggu Approval</p>
                        </div>
                        <div class="icon">
                            <i class="far fa-clock"></i>
                        </div>
                        <a href="<?php echo base_url('Kasie/CTR_Kasie/Approval') ?>" class="small-box-footer">Info Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="small-box shadow-lg bg-success">
                        <div class="inner">
                            <h3><?php echo $approve ?></h3>
                            <p>Disetujui</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-clipboard"></i>
                        </div>
                        <a href="<?php echo base_url('Kasie/CTR_Kasie/Approved') ?>" class="small-box-footer">Info Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="small-box shadow-lg bg-warning">
                        <div class="inner">
                            <h3><?php echo $revisi ?></h3>
                            <p>Revisi</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-clipboard"></i>
                        </div>
                        <a href="<?php echo base_url('Kasie/CTR_Kasie/Revisian') ?>" class="small-box-footer">Info Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="small-box shadow-lg bg-danger">
                        <div class="inner">
                            <h3><?php echo $declined ?></h3>
                            <p>Ditolak</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-times"></i>
                        </div>
                        <a href="<?php echo base_url('Kasie/CTR_Kasie/Ditolak') ?>" class="small-box-footer">
                            Info Selanjutnya <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php echo $this->session->flashdata('massage'); ?>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Menunggu Persetujuan Permintaan</h4>
                    <div class="float-right">
                        <h6>Total:
                            <b>
                                <?php $query = $this->db->query('SELECT * FROM tbl_permintaan where status = "Menunggu Assignment"');
                                $ma = $query->num_rows();
                                echo $ma ?> Permintaan
                            </b>
                        </h6>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="container mt-3">
                </div>
                <div class="card-body" style="overflow: auto;">
                    <?php echo $this->session->flashdata('pesan0'); ?>
                    <table id="example2" class="table table1 table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th style="width: 10px;vertical-align: middle;">#</th>
                                <th style="vertical-align: middle;">Nama Perusahaan</th>
                                <th style="vertical-align: middle;">Pemilihan User</th>
                                <th style="vertical-align: middle;">Nama User</th>
                                <th style="vertical-align: middle;">Nama ARH</th>
                                <th style="vertical-align: middle;">Status</th>
                                <th style="width: 90px;vertical-align: middle;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($isi as $row)
                                if ($row->status == "Menunggu Assignment") { ?>
                                <tr>
                                    <td style="vertical-align: middle;"><?php echo $no++; ?></td>
                                    <td style="vertical-align: middle;">
                                        Assessment <?php echo $row->lokasi ?>
                                    </td>
                                    <td style="vertical-align: middle;">
                                        <?php echo $row->pemilihan_user ?>
                                    </td>
                                    <td style="vertical-align: middle;">
                                        <?php echo $row->nps ?>
                                    </td>
                                    <td style="vertical-align: middle;">
                                        <?php echo $row->nama_arh ?>
                                    </td>
                                    <td style="vertical-align: middle;">
                                        <?php echo $row->status ?>
                                    </td>
                                    <td style="vertical-align: middle;" class="text-center">
                                        <div class="row mb-2">
                                            <div class="col-sm-12">
                                                <a class="btn btn-info btn-sm text-center" href="#detailModal<?php echo $row->id_permintaan ?>" data-toggle="modal" title="Detail Permintaan" data-target="#detailModal<?php echo $row->id_permintaan ?>" id="cek">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <input type="hidden" name="id_permintaan" value="<?php echo $row->id_permintaan ?>">
                                            <div class="col-sm-6">
                                                <a class="btn btn-success btn-sm text-center" href="#approveModal<?php echo $row->id_permintaan ?>" data-toggle="modal" title="Approve Permintaan" data-target="#approveModal<?php echo $row->id_permintaan ?>" id="cek">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </div>
                                            <div class="col-sm-6">
                                                <a class="btn btn-danger btn-sm text-center" href="#declinedModal<?php echo $row->id_permintaan ?>" data-toggle="modal" title="Declined Permintaan" data-target="#declinedModal<?php echo $row->id_permintaan ?>" id="wrong">
                                                    <i class="fas fa-times-circle"></i>
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

<!-- Modal Approved -->
<?php foreach ($isi as $row) { ?>
    <div class="modal fade" id="approveModal<?php echo $row->id_permintaan ?>" tabindex="-1" aria-labelledby="approveModalLabel<?php echo $row->id_permintaan ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-success">Approved</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo site_url('Kasie/CTR_Kasie/ApproveAssign/' . $id_permintaan) ?>" method="POST">
                    <div class="modal-body">
                        Approved <strong><?php echo $row->lokasi ?></strong> ?
                        <input type="hidden" name="id_permintaan" value="<?php echo $row->id_permintaan ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fas fa-window-close"></i> Batal</button>
                        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-check-square"></i> Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>

<!-- Modal Declined -->
<?php foreach ($isi as $row) { ?>
    <div class="modal fade" id="declinedModal<?php echo $row->id_permintaan ?>" tabindex="-1" role="dialog" aria-labelledby="declinedModalLabel<?php echo $row->id_permintaan ?>" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger">Declined</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo site_url('Kasie/CTR_Kasie/declined') ?>" method="POST">
                    <input type="hidden" name="id_permintaan" value="<?php echo $row->id_permintaan ?>">
                    <div class="modal-body">
                        <div class="mb-3">
                            Declined <strong><?php echo $row->lokasi ?></strong> ?
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <textarea name="deskripsi" id="" required class="form-control" rows="4"></textarea>
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
<?php } ?>

<!-- Modal Detail -->
<?php foreach ($isi as $row) { ?>
    <div class="modal fade" id="detailModal<?php echo $row->id_permintaan ?>" tabindex=" -1" role="dialog" aria-labelledby="detailModalLabel">
        <div class="modal-dialog modal-lg" role="document">
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
                            <p>
                                <?php if ($row->npp == null) { ?>
                                    -
                                <?php } else {
                                    echo $row->npp;
                                } ?>
                            </p>
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
                            <h6 class="font-weight-bold">Status</h6>
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
                            <p><?php echo $row->status ?></p>
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
                        <div class="col-sm-12">
                            <h6 class="font-weight-bold">Kegiatan yang akan dilakukan</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <p><?php echo $row->kegiatan_akan ?></p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fas fa-window-close"></i> Tutup</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>