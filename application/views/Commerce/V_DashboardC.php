<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Commerce/CTR_Commerce') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->

        <!-- Main content -->

        <!-- Button trigger modal -->
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flashdata'); ?>"></div>
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <div class="col-sm-3">
                    <div class="small-box shadow-lg bg-secondary">
                        <div class="inner">
                            <h3><?php echo $proses ?></h3>
                            <p>Diproses</p>
                        </div>
                        <div class="icon">
                            <i class="far fa-clock"></i>
                        </div>
                        <a href="<?php echo base_url('Commerce/CTR_Commerce/Diproses') ?>" class="small-box-footer">Info Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="small-box shadow-lg bg-success">
                        <div class="inner">
                            <h3><?php echo $approve ?></h3>
                            <p>Disetujui</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-check"></i>
                        </div>
                        <a href="<?php echo base_url('Commerce/CTR_Commerce/Disetujui') ?>" class="small-box-footer">Info Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="small-box shadow-lg bg-warning">
                        <div class="inner">
                            <h3><?php echo $revisi ?></h3>
                            <p>Revisi</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-clipboard"></i>
                        </div>
                        <a href="<?php echo base_url('Commerce/CTR_Commerce/Direvisi') ?>" class="small-box-footer">Info Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="small-box shadow-lg bg-danger">
                        <div class="inner">
                            <h3><?php echo $declined ?></h3>
                            <p>Ditolak</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-times"></i>
                        </div>
                        <a href="<?php echo base_url('Commerce/CTR_Commerce/Ditolak') ?>" class="small-box-footer">
                            Info Selanjutnya <i class="fas fa-arrow-circle-right"></i> &nbsp;
                        </a>
                    </div>
                </div>
            </div>
            <?php echo $this->session->flashdata('massage'); ?>
            <?php echo $this->session->flashdata('pesan'); ?>
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Daftar Permintaan</h1>
                </div>
                <!-- /.card-header -->
                <div class="card-body" style="overflow: auto;">
                    <div class="float-right">
                        <p>Menunggu Assignment: <b><?php echo $assignment ?></b> & Segera Diproses:
                            <b><?php $r = $this->db->query("SELECT * FROM tbl_permintaan where status = 'Pending' ")->num_rows();
                                echo $r; ?></b>
                        </p>
                    </div>
                    <span>
                        <a href="<?php echo site_url('Commerce/CTR_Commerce/daftar') ?>" class="btn btn-primary mb-3 right btn-sm"><i class="fas fa-plus"></i> Tambah Data</a>
                    </span>
                    <table id="example2" class="table table1 table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th style="width: 10px; vertical-align: middle;">#</th>
                                <th style="vertical-align: middle;">Nama Perusahaan</th>
                                <th style="vertical-align: middle;">Pemilihan User</th>
                                <th style="vertical-align: middle;">PIC Sales</th>
                                <th style="vertical-align: middle;">Nama ARH</th>
                                <th style="width: 90px; vertical-align: middle;">Status</th>
                                <th style="width: 90px; vertical-align: middle;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($isi as $row) if ($row->status == "Menunggu Assignment" or $row->status == "Pending") { ?>
                                <tr>
                                    <td class="text-center" style="vertical-align: middle;"><?php echo $no++; ?></td>
                                    <td>
                                        Assessment <?php echo $row->lokasi ?>
                                    </td>
                                    <td style="vertical-align: middle;">
                                        <?php echo $row->pemilihan_user ?>
                                    </td>
                                    <td style="vertical-align: middle;"><?php echo $row->nps ?></td>
                                    <td style="vertical-align: middle;">
                                        <?php echo $row->nama_arh ?>
                                    </td>
                                    <td style="width: 200px; vertical-align: middle;">
                                        <?php switch ($row->status) {
                                            case 'Declined':
                                                echo 'Declined <i class="fas fa-times text-danger"></i>';
                                                break;
                                            case 'Pending':
                                                echo 'Segera Diproses <i class="fas fa-check"></i>';
                                                break;
                                            case 'On Progress':
                                                echo 'OnProgress <i class="fas fa-hourglass-half text-secondary"></i>';
                                                break;
                                            case 'Approved':
                                                echo 'Approved <i class="fas fa-check text-success"></i>';
                                                break;
                                            case 'Revisi':
                                                echo 'Revisi <i class="fas fa-times text-warning"></i>';
                                                break;
                                            case 'Menunggu Assignment':
                                                echo 'Menunggu Assignment <i class="fas fa-hourglass-half"></i>';
                                                break;
                                            case 'Menunggu Approval':
                                                echo 'Menunggu Approval <i class="fas fa-hourglass-half"></i>';
                                                break;
                                        } ?></td>
                                    <td class=" text-center" style="vertical-align: middle;">
                                        <?php if ($row->status == 'Menunggu Assignment') { ?>
                                            <a class="btn btn-info btn-sm text-center" data-toggle="modal" data-target="#permintaanDetailModal<?php echo $row->id_permintaan; ?>" title="Edit Data">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a class="btn btn-warning btn-sm text-center" data-toggle="modal" data-target="#permintaanModal<?php echo $row->id_permintaan; ?>" title="Edit Data">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        <?php } else { ?>
                                            -
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
    <!-- /.content-header -->
</div>

<?php foreach ($isi as $row) { ?>
    <div class="modal fade" id="permintaanModal<?php echo $row->id_permintaan; ?>" tabindex="-1" aria-labelledby="permintaanModal<?php echo $row->id_permintaan; ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Assessment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center text-center">
                                <h3>Pelaksanaan Security Assessment</h3>
                            </div>
                            <form class="form-horizontal" action="<?php echo site_url('Commerce/CTR_Commerce/EditPermintaan') ?>" method="POST">
                                <input type="hidden" value="<?php echo $row->pemilihan_user ?>" name="pemilihan_user">
                                <input type="hidden" name="id_permintaan" class="form-control form-control-sm" value="<?php echo $row->id_permintaan ?>">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group-material">
                                                <label for="NPA" class="label-material">Nama PIC Presales</label>
                                                <input type="text" name="npp" class="form-control form-control-sm" value="<?php echo $row->npp ?>" readonly>
                                            </div>
                                            <div class="form-group-material mt-2">
                                                <label for="NPS" class="label-material">Nama PIC Sales</label>
                                                <input type="text" name="nps" class="form-control form-control-sm" value="<?php echo $row->nps ?>" readonly>
                                            </div>
                                            <div class="form-group-material mt-2">
                                                <label for="NU" class="label-material">Nama User</label>
                                                <input type="text" name="nama_user" required class="form-control form-control-sm" value="<?php echo $row->nama_user ?>">
                                            </div>
                                            <div class="form-group-material mt-2">
                                                <label for="" class="label-material">Nama ARH </label>
                                                <select id="npk" name="nama_arh" class="form-control">
                                                    <option value="" disabled selected>Pilih ARH</option>
                                                    <?php $p = $this->db->query("SELECT * FROM tbl_user")->result();
                                                    foreach ($p as $rowi) if ($rowi->role == 'Admin') { ?>
                                                        <option value="<?php echo $rowi->npk ?>" <?php if ($row->nama_arh == $rowi->npk) echo 'selected'; ?>><?php echo $rowi->nama ?> (<?php echo $rowi->sub_lokasi_arh ?>)</option>
                                                    <?php } ?>
                                                </select>
                                                <!-- <input type="text" name="nama_arh" required class="form-control form-control-sm" value="<?php echo $row->nama_arh ?>"> -->
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group-material">
                                                <label for="lokasi" class="label-material">Lokasi</label>
                                                <input type="text" name="lokasi" required class="form-control form-control-sm" value="<?php echo $row->lokasi ?>">
                                            </div>
                                            <div class="form-group-material mt-2">
                                                <label for="sub-lokasi" class="label-material">Sub Lokasi</label>
                                                <input type="text" name="sub_lokasi" required class="form-control form-control-sm" value="<?php echo $row->sub_lokasi ?>">
                                            </div>
                                            <div class="form-group-material mt-2">
                                                <label for="luas-wilayah" class="label-material">Luas Wilayah</label>
                                                <input type="text" name="luas_wilayah" required class="form-control form-control-sm" value="<?php echo $row->luas_wilayah ?>">
                                            </div>
                                            <!-- <div class="form-group-material mt-2">
                                                <label for="luas-wilayah" class="label-material">Sub Lokasi ARH</label>
                                                <input type="text" name="sub_lokasi_arh" required class="form-control form-control-sm" id="sub_lokasi_arh" value="<?php echo $row->sub_lokasi_arh ?>">
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col">
                                            <div class="form-group-material">
                                                <label for="kegiatan-lakukan" class="label-material">Kegiatan Yang Akan di Lakukan</label>
                                                <textarea class="form-control" name="kegiatan_akan" cols="60" rows="5" readonly>Assessment</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a class="text-white btn btn-secondary" data-dismiss="modal" aria-label="Close" href="#"><i class="fas fa-window-close"></i> Batal</a>
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-check-square"></i> Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    function cek_arh() {
        var npk = $("#npk").val();
        $.ajax({
            url: '<?php echo site_url('Commerce/CTR_Commerce/tampil_arh/') ?>',
            data: "npk=" + npk,
            success: function(data) {
                var json = data,
                    obj = JSON.parse(json);
                $('#sub_lokasi_arh').val(obj.sub_lokasi_arh);
            }
        })
    }
</script> -->
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