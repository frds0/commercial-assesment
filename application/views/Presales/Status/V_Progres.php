<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Progress Assesment</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Presales/CTR_Presales') ?>">Home</a></li>
                        <li class="breadcrumb-item">Progress Assesment</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <!-- Main content -->
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flashdata'); ?>"></div>
            <div class="row mt-4">
                <div class="col-12 col-sm-12">
                    <div class="card card-dark card-tabs">
                        <div class="card-header p-0 pt-1">
                            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">
                                        <b>Diproses
                                            <span class="badge badge-secondary right">
                                                <?php echo $progres ?>
                                            </span>
                                        </b>
                                    </a>
                                </li>
                                <?php if ($user['role'] == 'Presales') { ?>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">
                                            <b>Menunggu Approval
                                                <span class="badge badge-light right">
                                                    <?php echo $tungguA ?>
                                                </span>
                                            </b>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-one-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                    <section class="forms mt-2">
                                        <?php echo $this->session->flashdata('pesan0'); ?>
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Daftar Assesment</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body" style="overflow: auto;">
                                                <table class="table table1 table-bordered">
                                                    <thead>
                                                        <tr class="text-center">
                                                            <th style="width: 10px">#</th>
                                                            <th style="vertical-align: middle;">Nama&nbsp;Perusahaan</th>
                                                            <th>Pemilihan&nbsp;User</th>
                                                            <th>PIC&nbsp;Sales</th>
                                                            <th>PIC&nbsp;Presales</th>
                                                            <!-- <th>Site</th> -->
                                                            <!-- <th>Created&nbsp;Date</th> -->
                                                            <th style="width: 90px; vertical-align: middle;">Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $no = 1;
                                                        $count = count($isi);
                                                        foreach ($isi as $row) if ($row->status == 'On Progress') { ?>
                                                            <tr>
                                                                <td class="text-center" style="vertical-align: middle;"><?php echo $no++; ?></td>
                                                                <td style="vertical-align: middle;">
                                                                    Assessment <?php echo $row->lokasi ?>
                                                                </td>
                                                                <td style="vertical-align: middle;">
                                                                    <?php echo $row->pemilihan_user ?> (<?php echo date('d F Y', strtotime($row->created_date)) ?>)
                                                                </td>
                                                                <td style="vertical-align: middle;"><?php echo $row->nps ?></td>
                                                                <td style="vertical-align: middle;"><?php echo $row->npp ?></td>
                                                                <!-- <td style="vertical-align: middle;">
                                                                        <?php echo $row->sub_lokasi ?>
                                                                    </td> -->
                                                                <!-- <td style="vertical-align: middle;">
                                                                        <?php echo date('d F Y', strtotime($row->created_date)) ?>
                                                                    </td> -->
                                                                <td style="width: 150px; vertical-align: middle;" class="">
                                                                    <?php echo $row->status ?> <i class="fas fa-hourglass-start text-secondary"></i></td>
                                                                <td class=" text-center" style="vertical-align: middle;">
                                                                    <div class="row">
                                                                        <div class="col-sm-12"></div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <a class="btn btn-primary btn-sm text-center" title="Lanjutkan Assesment" href="<?php echo site_url('Presales/CTR_Presales/Penilaian/' . $row->id_permintaan) ?>">
                                                                                <i class="fas fa-play"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col-sm-6">
                                                                            <a class="btn btn-info btn-sm text-center" title="Detail Assesment" href="" data-toggle="modal" data-target="#permintaanModal<?php echo $row->id_permintaan; ?>">
                                                                                <i class="fas fa-file-alt"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <a href="#selesaiModal<?php echo $row->id_permintaan ?>" data-toggle="modal" data-target="#selesaiModal<?php echo $row->id_permintaan ?>" class="btn btn-success btn-sm" data-placement="top" data-toggle="tooltip" data-original-title="Kirim" title="Kirim"><i class="fas fa-check"></i></a>
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
                                    </section>
                                </div>
                                <?php if ($user['role'] == 'Presales') { ?>
                                    <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                                        <section class="forms mt-2">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">Menunggu Approval Assesment</h3>
                                                </div>
                                                <?php echo $this->session->flashdata('pesan'); ?>
                                                <!-- /.card-header -->
                                                <div class="card-body" style="overflow: auto;">
                                                    <table class="table table1 table-bordered">
                                                        <thead>
                                                            <tr class="text-center">
                                                                <th style="width: 10px">#</th>
                                                                <th style="vertical-align: middle;">Nama&nbsp;Perusahaan</th>
                                                                <th>Pemilihan&nbsp;User</th>
                                                                <th>PIC&nbsp;Sales</th>
                                                                <th>PIC&nbsp;Presales</th>
                                                                <th style="width: 90px">Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $no = 1;
                                                            foreach ($isi as $row) if ($row->status == 'Menunggu Approval') { ?>
                                                                <tr>
                                                                    <td class="text-center" style="vertical-align: middle;"><?php echo $no++; ?></td>
                                                                    <td style="vertical-align: middle;">
                                                                        Assessment <?php echo $row->lokasi ?>
                                                                    </td>
                                                                    <td style="vertical-align: middle;">
                                                                        <?php if ($row->pemilihan_user == 'New Project') { ?>
                                                                            <?php echo $row->pemilihan_user ?>
                                                                        <?php } else { ?>
                                                                            <?php echo $row->pemilihan_user ?> (<?php echo date('d F Y', strtotime($row->created_date)) ?>)
                                                                        <?php } ?>
                                                                    </td>
                                                                    <td style="vertical-align: middle;"><?php echo $row->nps ?></td>
                                                                    <td style="vertical-align: middle;"><?php echo $row->npp ?></td>
                                                                    <td style="width: 200px; vertical-align: middle;" class="">
                                                                        <?php echo $row->status ?> <i class="fas fa-hourglass-half text-secondary"></i>
                                                                    </td>
                                                                    <td style="vertical-align: middle;" class=" text-center">
                                                                        <a class="btn btn-info btn-sm text-center" data-toggle="modal" title="Detail Assesment" data-target="#permintaanModals<?php echo $row->id_permintaan; ?>" href="#permintaanModals<?php echo $row->id_permintaan; ?>">
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
                                        </section>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
    </div>
    <!-- /.content-header -->
</div>
<!-- Detail Assesment -->
<?php foreach ($isi as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="permintaanModal<?php echo $row->id_permintaan; ?>" tabindex="-1" aria-labelledby="permintaanModal<?php echo $row->id_permintaan; ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Assessment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
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
<!-- Modal Selesai Assesment -->
<?php foreach ($isi as $row) { ?>
    <div class="modal fade" id="selesaiModal<?php echo $row->id_permintaan ?>" tabindex="-1" aria-labelledby="selesaiModalLabel<?php echo $row->id_permintaan ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Approve</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo site_url('Presales/CTR_Presales/SelesaiAssesment/' . $row->id_permintaan) ?>" method="POST">
                    <div class="modal-body">
                        Yakin Assesment <strong><?php echo $row->lokasi ?></strong> telah selesai ?
                        <input type="hidden" name="id_permintaan" value="<?php echo $row->id_permintaan ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fas fa-window-close"></i> Batal</button>
                        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-check-square"></i> Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Modal Permintaan Menunggu Approval-->
<?php foreach ($isi as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="permintaanModals<?php echo $row->id_permintaan; ?>" tabindex="-1" aria-labelledby="permintaanModals<?php echo $row->id_permintaan; ?>" aria-hidden="true">
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
                    <a class="btn btn-info btn-sm text-center" href="<?php echo site_url('Presales/CTR_Presales/LihatAssesment/' . $row->id_permintaan)  ?>"><i class="fas fa-check-square"></i> Next</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>