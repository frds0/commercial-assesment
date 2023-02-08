<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Menunggu Assesment</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Presales/CTR_Presales') ?>">Home</a></li>
                        <li class="breadcrumb-item">Menunggu Assesment</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <!-- Main content -->
        <section class="forms mt-4">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Assesment</h3>
                    </div>
                    <?php echo $this->session->flashdata('pesan'); ?>
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flashdata'); ?>"></div>
                    <!-- /.card-header -->
                    <div class="card-body" style="overflow: auto;">
                        <table id="example2" class="table table1 table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 10px">#</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Pemilihan User</th>
                                    <th>PIC Sales</th>
                                    <th>Nama ARH</th>
                                    <th style="width: 90px">Status</th>
                                    <th style="width: 100px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($isi as $row) if ($row->status == 'Pending') { ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++; ?></td>
                                        <td>
                                            Assessment <?php echo $row->lokasi ?>
                                        </td>
                                        <td><?php echo $row->pemilihan_user ?></td>
                                        <td><?php echo $row->nps ?></td>
                                        <td><?php echo $row->nama_arh ?></td>
                                        <td style="width: 150px;">
                                            <?php echo $row->status ?> <i class="far fa-clock text-warning"></i></td>
                                        <td class=" text-center">
                                            <a class="btn btn-info btn-sm text-center" data-toggle="modal" data-target="#permintaanDetailModal<?php echo $row->id_permintaan; ?>" title="Edit Data">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a class="btn btn-primary btn-sm text-center" data-toggle="modal" data-target="#permintaanModal<?php echo $row->id_permintaan; ?>">
                                                Start
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
        </section>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-header -->
<!-- Modal Permintaan-->
<?php foreach ($isi as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="permintaanModal<?php echo $row->id_permintaan; ?>" tabindex="-1" aria-labelledby="permintaanModal<?php echo $row->id_permintaan; ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title" id="exampleModalLabel">Form Pelaksanaan Assessment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" action="<?php echo site_url('Presales/CTR_Presales/SimpanPermintaan') ?>" method="POST">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group-material">
                                    <label for="NPA" class="label-material">Nama PIC Presales</label>
                                    <input type="text" name="npp" class="form-control form-control-sm" readonly value="<?php echo $this->session->userdata('nama') ?>" required>
                                </div>
                                <div class="form-group-material mt-2">
                                    <label for="NPS" class="label-material">Nama PIC Sales</label>
                                    <input type="text" name="nps" class="form-control form-control-sm" readonly value="<?php echo $row->nps ?>" required>
                                </div>
                                <div class="form-group-material mt-2">
                                    <label for="NU" class="label-material">Nama User</label>
                                    <input type="text" name="nama_user" readonly class="form-control form-control-sm" value="<?php echo $row->nama_user ?>">
                                </div>
                                <div class="form-group-material mt-2">
                                    <label for="NU" class="label-material">Nama ARH</label>
                                    <input type="text" name="nama_arh" readonly class="form-control form-control-sm" value="<?php echo $row->nama_arh ?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group-material">
                                    <label for="lokasi" class="label-material">Lokasi</label>
                                    <input type="text" name="lokasi" readonly class="form-control form-control-sm" value="<?php echo $row->lokasi ?>">
                                </div>
                                <div class="form-group-material mt-2">
                                    <label for="sub-lokasi" class="label-material">Sub Lokasi</label>
                                    <input type="text" name="sub_lokasi" readonly class="form-control form-control-sm" value="<?php echo $row->sub_lokasi ?>">
                                </div>
                                <div class="form-group-material mt-2">
                                    <label for="luas-wilayah" class="label-material">Luas Wilayah</label>
                                    <input type="text" name="luas_wilayah" readonly class="form-control form-control-sm" value="<?php echo $row->luas_wilayah ?>">
                                </div>
                                <div class="form-group-material mt-2">
                                    <label for="sub-lokasi" class="label-material">Sub Lokasi ARH</label>
                                    <input type="text" name="sub_lokasi_arh" readonly class="form-control form-control-sm" value="<?php echo $row->sub_lokasi_arh ?>">
                                </div>
                                <div class="form-group-material">
                                    <div class="form-group">
                                        <label for="id" class="label-material"></label>
                                        <input type="hidden" name="id_permintaan" class="form-control form-control-sm" value="<?php echo $row->id_permintaan ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group-material">
                                    <label for="kegiatan-lakukan" class="label-material">Kegiatan Yang Akan di Lakukan</label>
                                    <textarea class="form-control" name="kegiatan_akan" cols="60" rows="5" readonly>Assessment</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="line"></div>
                    </div>
                    <div class="modal-footer">
                        <a class="text-white btn btn-danger btn-sm" data-dismiss="modal" aria-label="Close" href="#"><i class="fas fa-window-close"></i> Batal</a>
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-check-square"></i> Mulai</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Modal Permintaan Detail-->
<?php foreach ($isi as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="permintaanDetailModal<?php echo $row->id_permintaan; ?>" tabindex="-1" aria-labelledby="permintaanDetailModal<?php echo $row->id_permintaan; ?>" aria-hidden="true">
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