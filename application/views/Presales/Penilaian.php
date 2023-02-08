<style>
    .scroll {
        max-height: 230px;
        overflow-y: auto;
        /* overflow-x: scroll; */
    }

    .content-wrapper {
        background-color: #fcf9f0;
        background-image: url('./assets/dist/img/forApps/sigap-icon.png');
    }

    /* .card {
        background-color: #f0ffff;
    } */
</style>
<!-- Content Wrapper. Contains page content -->
<!-- <img src="<?php echo base_url() ?>assets/dist/img/forApps/sigap-icon.png" alt="SigapIcon" class="brand-image" style="opacity: .8"> -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <?php foreach ($isi as $row) { ?>
                    <div class="col-sm-6">
                        <h1 class="m-0">Assesment <?php echo $row->lokasi ?> (<?php echo $row->pemilihan_user ?>)</h1>
                    </div>
                    <?php if ($row->status == 'Revisi') { ?>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('Presales/CTR_Presales/revisi') ?>">Home</a></li>
                                <li class="breadcrumb-item active">Assesment</li>
                            </ol>
                        </div>
                    <?php } else { ?>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('Presales/CTR_Presales/progres') ?>">Home</a></li>
                                <li class="breadcrumb-item active">Assesment</li>
                            </ol>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <div class="container">
            <div class="row mt-4">
                <?php foreach ($isiDetail as $row) { ?>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <h5>Progress By</h5>
                            <h6><?php echo $row->npp ?></h6>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <h5>Request By</h5>
                            <h6><?php echo $row->nps ?></h6>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <h5>Perusahaan</h5>
                            <h6><?php echo $row->lokasi ?></h6>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <h5>Status</h5>
                            <?php if ($row->status == "Approved") { ?>
                                <h6><b>Approved</b> By <?php echo $row->nama_approval ?></h6>
                            <?php } else if ($row->status == "Revisi") { ?>
                                <h6><b>Revisi</b> By <?php echo $row->nama_approval ?></h6>
                            <?php } else { ?>
                                <h6><b><?php echo $row->status ?></b></h6>
                            <?php } ?>
                        </div>
                    </div>
                    <?php if ($row->status == "Revisi") { ?>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <h5>Form Revisi</h5>
                                <h6><?php echo $row->form_revisi ?></h6>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <h5>Deskripsi</h5>
                                <h6><?php echo $row->deskripsi ?></h6>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="col-sm-3">
                        <form action="<?php echo site_url('Presales/CTR_Presales/UploadPpt') ?>" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id_permintaan" value="<?php echo $id_permintaan ?>">
                            <input type="hidden" name="file_ppt" value="<?php echo $row->file_ppt ?>">
                            <div class="form-group">
                                <h5 class="" for="customFileLangHTML" data-browse="Bestand kiezen">Upload File</h5>
                                <h6>
                                    <input type="file" id="file_penilaian" name="file_ppt" required oninvalid="this.setCustomValidity('Pilih File Terlebih Dahulu')" oninput="setCustomValidity('')" accept=".pdf,.ppt,.pptx">
                                </h6>
                                <p id="message_penilaian" class="float-right text-danger" style="font-size: 12px;"></p>
                                <p class="float-left text-danger" style="font-size: 12px;"><b>*<i>(Maks 2Mb, Format .PDF/.PPT/.PPTX)</i></b></p>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-info btn-sm"><i class="fas fa-upload"></i> Upload File</button>
                            </div>
                        </form>
                    </div>
                    <?php if ($row->file_ppt == null) {
                        echo '';
                    } else { ?>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <h5>Terupload</h5>
                                <a href="<?php echo base_url('assets/dist/file_penilaian/' .  $row->file_ppt) ?>" target="_blank" class="btn btn-warning btn-sm"><i class="fas fa-download"></i> <b><?php echo $row->file_ppt ?></b></a>
                            </div>
                        </div>
                        </form>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        <!-- Main content -->
        <div class="container-fluid mt-4">
            <!-- <?php echo $this->session->flashdata('pesan0'); ?>
            <?php echo $this->session->flashdata('pesan1'); ?> -->
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flashdata'); ?>"></div>
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body" style="background-color: #fcf9f0;">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="small-box shadow">
                                <div class="inner bg-secondary" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                    <!-- <?php if (explode(', ', $row->form_revisi)[0] == 'Form Wawancara') { ?>
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-danger">
                                                <?php echo explode(', ', $row->form_revisi)[0] ?>
                                            </div>
                                        </div>
                                    <?php } ?> -->
                                    <div class="icon bg-light">
                                        <i class="nav-icon fas fa-user-friends"></i>
                                    </div>
                                    <h4 class="widget-user-username">Form Wawancara</h4>
                                    <h4 class="widget-user-desc"> &nbsp;</h4>
                                </div>
                                <div class="card-footer p-0 scroll">
                                    <table class="table">
                                        <?php $no = 0;
                                        $length = count($nama);
                                        if ($no == $length) { ?>
                                            <tr>
                                                <td>Tambah Assesment</td>
                                                <td style="width: 50px;" class="text-center" colspan="2">
                                                    <a href="#wawancaraModal<?php echo $id_wawancara ?>" data-toggle="modal" data-target="#wawancaraModal<?php echo $id_wawancara ?>" class="btn btn-primary btn-sm">
                                                        <i class="fas fa-plus"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        <?php foreach ($nama as $rowi) {
                                            if ($rowi->foto_wawancara == null) { ?>
                                                <tr>
                                                    <td>Lanjutkan Assesment</td>
                                                    <td colspan="2" class="text-center"><a href="<?php echo site_url('Presales/CTR_Presales/Wawancara/' . $id_permintaan) ?>" class="btn btn-info btn-sm"><i class="fas fa-play"></i></a></td>
                                                </tr>
                                            <?php } ?>
                                        <?php } ?>
                                        <?php
                                        $no = 1;
                                        $length = count($nama);
                                        foreach ($nama as $row) {
                                            if ($no < $length) { ?>
                                                <tr>
                                                    <td>Wawancara Hasil <?php echo $no++; ?></td>
                                                    <td style="width: 50px;" colspan="2" class="text-center">
                                                        <a href="#ViewWawancaraModal<?php echo $row->id_wawancara ?>" data-toggle="modal" data-target="#ViewWawancaraModal<?php echo $row->id_wawancara ?>" class="btn btn-info btn-sm">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php } elseif ($row->foto_wawancara == !null) { ?>
                                                <tr>
                                                    <td>Wawancara Hasil <?php echo $no++; ?></td>
                                                    <td style="width: 50px;" class="text-center">
                                                        <a href="#ViewWawancaraModal<?php echo $row->id_wawancara ?>" data-toggle="modal" data-target="#ViewWawancaraModal<?php echo $row->id_wawancara ?>" class="btn btn-info btn-sm">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </td>
                                                    <td style="width: 50px;">
                                                        <a href="#EditWawancaraModal<?php echo $row->id_wawancara ?>" data-toggle="modal" data-target="#EditWawancaraModal<?php echo $row->id_wawancara ?>" title="Edit" class="btn btn-warning btn-sm">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                        <?php }
                                        } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4">
                            <div class="small-box shadow">
                                <div class="inner bg-secondary" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                    <!-- <?php foreach ($isi as $row)
                                                if ($row->status == 'Revisi' && explode(', ', $row->form_revisi)[0] == 'Form SSA 1') { ?>
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-danger">
                                                Revisi
                                            </div>
                                        </div>
                                    <?php } elseif ($row->status == 'Revisi' && explode(', ', $row->form_revisi)[1] == 'Form SSA 1') { ?>
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-danger">
                                                Revisi
                                            </div>
                                        </div>
                                    <?php } elseif ($row->status == 'Revisi' && explode(', ', $row->form_revisi)[2] == 'Form SSA 1') { ?>
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-danger">
                                                Revisi
                                            </div>
                                        </div>
                                    <?php } elseif ($row->status == 'Revisi' && explode(', ', $row->form_revisi)[3] == 'Form SSA 1') { ?>
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-danger">
                                                Revisi
                                            </div>
                                        </div>
                                    <?php } elseif ($row->status == 'Revisi' && explode(', ', $row->form_revisi)[4] == 'Form SSA 1') { ?>
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-danger">
                                                Revisi
                                            </div>
                                        </div>
                                    <?php } elseif ($row->status == 'Revisi' && explode(', ', $row->form_revisi)[5] == 'Form SSA 1') { ?>
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-danger">
                                                Revisi
                                            </div>
                                        </div>
                                    <?php } ?> -->
                                    <div class="icon bg-light">
                                        <i class="nav-icon fas fa-angle-up"></i>
                                    </div>
                                    <h4 class="widget-user-username">Form SSA1</h4>
                                    <h4 class="widget-user-desc">&nbsp;</h4>
                                    <!-- <h3 class="widget-user-username">Assesment</h3>
                                    <h4 class="widget-user-desc">Form SSA1</h4> -->
                                </div>
                                <div class="card-footer p-0 scroll">
                                    <table class="table">
                                        <?php $no = 0;
                                        $length = count($isiS1);
                                        if ($no == $length) { ?>
                                            <tr>
                                                <td>Tambah Assesment</td>
                                                <td style="width: 50px;" class="text-center" colspan="2">
                                                    <a href="#ssa1Modal" data-toggle="modal" data-target="#ssa1Modal" class="btn btn-primary btn-sm">
                                                        <i class="fas fa-plus"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        <?php
                                        $no = 1;
                                        $length = count($isiS1);
                                        foreach ($isiS1 as $row) {
                                            if ($no < $length) { ?>
                                                <tr>
                                                    <td>SSA1 Hasil <?php echo $no++ ?></td>
                                                    <td style="width: 50px;" class="text-center" colspan="2">
                                                        <a href="#ViewSsa1Modal<?php echo $row->id_ssa1 ?>" data-toggle="modal" data-target="#ViewSsa1Modal<?php echo $row->id_ssa1 ?>" class="btn btn-info btn-sm">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </td>
                                                <tr>
                                                <?php } else { ?>
                                                <tr>
                                                    <td>SSA1 Hasil <?php echo $no++ ?></td>
                                                    <td style="width: 50px;" class="text-center">
                                                        <a href="#ViewSsa1Modal<?php echo $row->id_ssa1 ?>" data-toggle="modal" data-target="#ViewSsa1Modal<?php echo $row->id_ssa1 ?>" class="btn btn-info btn-sm">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </td>
                                                    <td style="width: 50px;">
                                                        <a href="#EditSsa1Modal<?php echo $row->id_ssa1 ?>" data-toggle="modal" data-target="#EditSsa1Modal<?php echo $row->id_ssa1 ?>" title="Edit" class="btn btn-warning btn-sm">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                        <?php }
                                        } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4">
                            <div class="small-box shadow">
                                <div class="inner bg-secondary" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                    <!-- <?php foreach ($isi as $row)
                                                if ($row->status == 'Revisi' && explode(', ', $row->form_revisi)[0] == 'Form Ceklis') { ?>
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-danger">
                                                Revisi
                                            </div>
                                        </div>
                                    <?php } elseif ($row->status == 'Revisi' && explode(', ', $row->form_revisi)[1] == 'Form Ceklis') { ?>
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-danger">
                                                Revisi
                                            </div>
                                        </div>
                                    <?php } elseif ($row->status == 'Revisi' && explode(', ', $row->form_revisi)[2] == 'Form Ceklis') { ?>
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-danger">
                                                Revisi
                                            </div>
                                        </div>
                                    <?php } elseif ($row->status == 'Revisi' && explode(', ', $row->form_revisi)[3] == 'Form Ceklis') { ?>
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-danger">
                                                Revisi
                                            </div>
                                        </div>
                                    <?php } elseif ($row->status == 'Revisi' && explode(', ', $row->form_revisi)[4] == 'Form Ceklis') { ?>
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-danger">
                                                Revisi
                                            </div>
                                        </div>
                                    <?php } elseif ($row->status == 'Revisi' && explode(', ', $row->form_revisi)[5] == 'Form Ceklis') { ?>
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-danger">
                                                Revisi
                                            </div>
                                        </div>
                                    <?php } ?> -->
                                    <div class="icon bg-light">
                                        <i class="nav-icon fas fa-check"></i>
                                    </div>
                                    <h4 class="widget-user-username">Form Ceklis</h4>
                                    <h4 class="widget-user-desc">&nbsp;</h4>
                                </div>
                                <div class="card-footer p-0 scroll">
                                    <table class="table">
                                        <?php $no = 0;
                                        $length = count($isiC);
                                        if ($no == $length) { ?>
                                            <tr>
                                                <td>Tambah Assesment</td>
                                                <td style="width: 50px;" class="text-center" colspan="2">
                                                    <a href="#ceklisModal" data-toggle="modal" data-target="#ceklisModal" class="btn btn-primary btn-sm">
                                                        <i class="fas fa-plus"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        <?php
                                        $no = 1;
                                        $length = count($isiC);
                                        foreach ($isiC as $row) {
                                            if ($no < $length) { ?>
                                                <tr>
                                                    <td>Ceklis Hasil <?php echo $no++ ?></td>
                                                    <td style="width: 50px;" class="text-center" colspan="2">
                                                        <a href="#ViewCeklisModal<?php echo $row->id_ceklis ?>" data-toggle="modal" data-target="#ViewCeklisModal<?php echo $row->id_ceklis ?>" class="btn btn-info btn-sm">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php } else { ?>
                                                <tr>
                                                    <td>Ceklis Hasil <?php echo $no++ ?></td>
                                                    <td style="width: 50px;" class="text-center">
                                                        <a href="#ViewCeklisModal<?php echo $row->id_ceklis ?>" data-toggle="modal" data-target="#ViewCeklisModal<?php echo $row->id_ceklis ?>" class="btn btn-info btn-sm">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </td>
                                                    <td style="width: 50px;">
                                                        <a href="#EditCeklisModal<?php echo $row->id_ceklis ?>" data-toggle="modal" data-target="#EditCeklisModal<?php echo $row->id_ceklis ?>" title="Edit" class="btn btn-warning btn-sm">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                        <?php }
                                        } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="small-box shadow">
                                <div class="inner bg-secondary" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                    <div class="icon bg-light">
                                        <i class="nav-icon fas fa-angle-double-up"></i>
                                    </div>
                                    <h4 class="widget-user-username">Form SSA2</h4>
                                    <h4 class="widget-user-desc">&nbsp;</h4>
                                </div>
                                <div class="card-footer p-0 scroll">
                                    <table class="table">
                                        <?php $no = 0;
                                        $length = count($isiS2);
                                        if ($no == $length) { ?>
                                            <tr>
                                                <td>Tambah Assesment</td>
                                                <td style="width: 50px;" class="text-center" colspan="2">
                                                    <a href="#ssa2Modal" data-toggle="modal" data-target="#ssa2Modal" class="btn btn-primary btn-sm">
                                                        <i class="fas fa-plus"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>

                                        <?php
                                        $no = 1;
                                        $length = count($isiS2);
                                        foreach ($isiS2 as $row) {
                                            if ($no < $length) { ?>
                                                <tr>
                                                    <td>SSA2 Hasil <?php echo $no++ ?></td>
                                                    <td style="width: 50px;" class="text-center" colspan="2">
                                                        <a href="#ViewSsa2Modal<?php echo $row->id_ssa2 ?>" data-toggle="modal" data-target="#ViewSsa2Modal<?php echo $row->id_ssa2 ?>" class="btn btn-info btn-sm">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php } else { ?>
                                                <tr>
                                                    <td>SSA2 Hasil <?php echo $no++ ?></td>
                                                    <td style="width: 50px;" class="text-center">
                                                        <a href="#ViewSsa2Modal<?php echo $row->id_ssa2 ?>" data-toggle="modal" data-target="#ViewSsa2Modal<?php echo $row->id_ssa2 ?>" class="btn btn-info btn-sm">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </td>
                                                    <td style="width: 50px;">
                                                        <a href="#EditSsa2Modal<?php echo $row->id_ssa2 ?>" data-toggle="modal" data-target="#EditSsa2Modal<?php echo $row->id_ssa2 ?>" title="Edit" class="btn btn-warning btn-sm">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                        <?php }
                                        } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4">
                            <div class="small-box shadow">
                                <div class="inner bg-secondary" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                    <div class="icon bg-light">
                                        <i class="nav-icon fas fa-poll-h"></i>
                                    </div>
                                    <h4 class="widget-user-username">Form Survey Device</h4>
                                    <h4 class="widget-user-desc">&nbsp;</h4>
                                </div>
                                <div class="card-footer p-0 scroll">
                                    <table class="table">
                                        <?php $no = 0;
                                        $length = count($isiD);
                                        if ($no == $length) { ?>
                                            <tr>
                                                <td>Tambah Assesment</td>
                                                <td style="width: 50px;" class="text-center" colspan="2">
                                                    <a href="#deviceModal" data-toggle="modal" data-target="#deviceModal" class="btn btn-primary btn-sm">
                                                        <i class="fas fa-plus"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>

                                        <?php
                                        $no = 1;
                                        $length = count($isiD);
                                        foreach ($isiD as $row) {
                                            if ($no < $length) { ?>
                                                <tr>
                                                    <td>Survey Device Hasi <?php echo $no++ ?></td>
                                                    <td style="width: 50px;" class="text-center" colspan="2">
                                                        <a href="#ViewDeviceModal<?php echo $row->id_device ?>" data-toggle="modal" data-target="#ViewDeviceModal<?php echo $row->id_device ?>" class="btn btn-info btn-sm">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php } else { ?>
                                                <tr>
                                                    <td>Survey Device Hasil <?php echo $no++ ?></td>
                                                    <td style="width: 50px;" class="text-center">
                                                        <a href="#ViewDeviceModal<?php echo $row->id_device ?>" data-toggle="modal" data-target="#ViewDeviceModal<?php echo $row->id_device ?>" class="btn btn-info btn-sm">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </td>
                                                    <td style="width: 50px;">
                                                        <a href="#EditDeviceModal<?php echo $row->id_device ?>" data-toggle="modal" data-target="#EditDeviceModal<?php echo $row->id_device ?>" title="Edit" class="btn btn-warning btn-sm">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                        <?php }
                                        } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4">
                            <div class="small-box shadow">
                                <div class="inner bg-secondary" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                    <div class="icon bg-light">
                                        <i class="nav-icon fas fa-camera"></i>
                                    </div>
                                    <h4 class="widget-user-username">Form CCTV</h4>
                                    <h4 class="widget-user-desc">&nbsp;</h4>
                                    <!-- <h3 class="widget-user-username">Assesment</h3>
                                    <h5 class="widget-user-desc">Form CCTV</h5> -->
                                </div>
                                <div class="card-footer p-0 scroll">
                                    <table class="table">
                                        <?php $no = 0;
                                        $length = count($isiCt);
                                        if ($no == $length) { ?>
                                            <tr>
                                                <td>Tambah Assesment</td>
                                                <td style="width: 50px;" class="text-center" colspan="2">
                                                    <a href="#cctvModal" data-toggle="modal" data-target="#cctvModal" class="btn btn-primary btn-sm">
                                                        <i class="fas fa-plus"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>

                                        <?php
                                        $no = 1;
                                        $length = count($isiCt);
                                        foreach ($isiCt as $row) {
                                            if ($no < $length) { ?>
                                                <tr>
                                                    <td>CCTV Hasil <?php echo $no++ ?></td>
                                                    <td style="width: 50px;" class="text-center" colspan="2">
                                                        <a href="#ViewCctvModal<?php echo $row->id_cctv ?>" data-toggle="modal" data-target="#ViewCctvModal<?php echo $row->id_cctv ?>" class="btn btn-info btn-sm">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php } else { ?>
                                                <tr>
                                                    <td>CCTV Hasil <?php echo $no++ ?></td>
                                                    <td style="width: 50px;" class="text-center">
                                                        <a href="#ViewCctvModal<?php echo $row->id_cctv ?>" data-toggle="modal" data-target="#ViewCctvModal<?php echo $row->id_cctv ?>" class="btn btn-info btn-sm">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </td>
                                                    <td style="width: 50px;">
                                                        <a href="#EditCctvModal<?php echo $row->id_cctv ?>" data-toggle="modal" data-target="#EditCctvModal<?php echo $row->id_cctv ?>" title="Edit" class="btn btn-warning btn-sm">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                        <?php }
                                        } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
    <!-- /.content-header -->
    <!-- /.content -->
</div>
<script type="text/javascript">
    // upload Gambar
    var uploadField = document.getElementById("file_penilaian");
    var txt = '';
    var ekstensiOks = /(\.pdf|\.ppt|\.pptx)$/i;
    uploadField.onchange = function() {
        if (this.files[0].size > 2000000) { // ini untuk ukuran 800KB, 1000000 untuk 1 MB.
            // alert("Maaf. Gambar Terlalu Besar ! Maksimal Upload 2 MB");
            txt = '<i class="fas fa-exclamation-triangle"></i> File Terlalu Besar ! Maksimal Upload 2 MB';
            this.value = "";
        } else if (!ekstensiOks.exec(this.value)) {
            // alert('Maaf. Gambar Harus Berupa .png/.jpg/.jpeg');
            txt = '<i class="fas fa-exclamation-triangle"></i> <i>Format Gambar Harus Berupa .PDF/.PPT/.PPTX</i>';
            this.value = "";
        };
        document.getElementById("message_penilaian").innerHTML = txt;
        if (this.files[0].size < 2000000) {
            ya = '';
        } else if (ekstensiOk.exec(this.value)) {
            // alert('Maaf. Gambar Harus Berupa .png/.jpg/.jpeg');
            ya = '';
        };
        document.getElementById("message_penilaian").innerHTML = ya;
    };
</script>