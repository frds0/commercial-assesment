<style>
    .scroll {
        max-height: 250px;
        overflow-y: auto;
    }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-4">
                <?php foreach ($isi as $rowi) { ?>
                    <div class="col-sm-6">
                        <h1 class="m-0">Laporan <?php echo $rowi->lokasi ?> (<?php echo $rowi->pemilihan_user ?>)</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('Commerce/CTR_Commerce/Disetujui') ?>">Home</a></li>
                            <li class="breadcrumb-item active">Laporan</li>
                        </ol>
                    </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row mb-2">
                <div class="col-sm-3">
                    <h5 class="mb-2">Progress By</h5>
                    <h6><?php echo $rowi->npp ?></h6>
                </div>
                <div class="col-sm-3">
                    <h5 class="mb-2">Request By</h5>
                    <h6><?php echo $rowi->nps ?></h6>
                </div>
                <div class="col-sm-3">
                    <h5 class="mb-2">Perusahaan</h5>
                    <h6><?php echo $rowi->lokasi ?></h6>
                </div>
                <div class="col-sm-3 mb-4">
                    <h5 class="mb-2">Status</h5>
                    <?php if ($rowi->status == "Approved") { ?>
                        <h6><b>Approved</b> By <?php echo $rowi->approval_by ?></h6>
                    <?php } else if ($rowi->status == "Declined") { ?>
                        <h6><b>Declined</b> By <?php echo $rowi->approval_by ?></h6>
                    <?php } else if ($rowi->status == "Revisi") { ?>
                        <h6><b><?php echo $rowi->status ?></b> By <?php echo $rowi->approval_by ?></h6>
                    <?php } else { ?>
                        <h6><b><?php echo $rowi->status ?></b></h6>
                    <?php } ?>
                </div>
                <?php if ($rowi->status == "Revisi") { ?>
                    <div class="col-sm-3">
                        <h5 class="mb-2">Form Revisi</h5>
                        <h6><?php echo $rowi->form_revisi ?></h6>
                    </div>
                    <div class="col-sm-3">
                        <h5 class="mb-2">Deskripsi</h5>
                        <h6><?php echo $rowi->deskripsi ?></h6>
                    </div>
                <?php } ?>
                <div class="col-sm-3">
                    <form action="<?php echo site_url('Kasie/CTR_Kasie/UploadPpt') ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_permintaan" value="<?php echo $id_permintaan ?>">
                        <div class="form-group">
                            <h5 class="" for="customFileLangHTML" data-browse="Bestand kiezen">Upload File</h5>
                            <h6>
                                <input type="file" id="file_detail" name="file_ppt" required oninvalid="this.setCustomValidity('Pilih File Terlebih Dahulu')" oninput="setCustomValidity('')" accept=".pdf,.ppt,.pptx" disabled>
                            </h6>
                            <!-- <p id="message_penilaian" class="float-right text-danger" style="font-size: 12px;"></p> -->
                            <!-- <p class="float-left text-danger" style="font-size: 12px;"><b>*<i>(Maks 2Mb, Format .PDF/.PPT/.PPTX)</i></b></p> -->
                        </div>
                        <div>
                            <button type="submit" class="btn btn-info btn-sm disabled" disabled><i class="fas fa-upload"></i> Upload File</button>
                        </div>
                    </form>
                </div>
                <?php if ($rowi->file_ppt == null) {
                        echo '';
                    } else { ?>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <h5>Terupload</h5>
                            <a href="<?php echo base_url('assets/dist/file_penilaian/' .  $rowi->file_ppt) ?>" class="btn btn-warning btn-sm"><i class="fas fa-download"></i> <b><?php echo $rowi->file_ppt ?></b></a>
                        </div>
                    </div>
                    </form>
                <?php } ?>
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <div class="container-fluid mt-4">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="small-box shadow">
                                    <div class="inner bg-secondary" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                        <div class="icon">
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
                                                    <td class="text-center" colspan="3">No Data</td>
                                                </tr>
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
                                                <?php } else { ?>
                                                    <tr>
                                                        <td>Wawancara Hasil <?php echo $no++; ?></td>
                                                        <td style="width: 50px;" class="text-center">
                                                            <a href="#ViewWawancaraModal<?php echo $row->id_wawancara ?>" data-toggle="modal" data-target="#ViewWawancaraModal<?php echo $row->id_wawancara ?>" class="btn btn-info btn-sm">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                        </td>
                                                        <td style="width: 50px;" class="text-center" data-toggle="modal" data-target="#printWawancaraModal<?php echo $row->id_wawancara ?>">
                                                            <a class="btn bg-teal btn-sm text-center" title="Print Assesment" data-toggle="modal" data-target="#printWawancaraModal<?php echo $row->id_wawancara ?>" href="#printWawancaraModal<?php echo $row->id_wawancara ?>">
                                                                <i class="fas fa-print"></i>
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
                                        <div class="icon">
                                            <i class="nav-icon fas fa-angle-up"></i>
                                        </div>
                                        <h4 class="widget-user-username">Form SSA1</h4>
                                        <h4 class="widget-user-desc">&nbsp;</h4>
                                    </div>
                                    <div class="card-footer p-0 scroll">
                                        <!-- <?php if ($row->status == 'Declined' and $row->form_declined !== 'Form SSA 1' or $row->status == 'Approved') { ?>
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-success">
                                                Approved
                                            </div>
                                        </div>
                                    <?php } else if ($row->form_declined == 'Form SSA 1') { ?>
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-danger">
                                                Declined
                                            </div>
                                        </div>
                                    <?php } ?> -->
                                        <table class="table">
                                            <?php $no = 0;
                                            $length = count($isiS1);
                                            if ($no == $length) { ?>
                                                <tr>
                                                    <td class="text-center" colspan="3">No Data</td>
                                                </tr>
                                            <?php } ?>
                                            <?php
                                            $length = count($isiS1);
                                            $no = 1;
                                            foreach ($isiS1 as $row) {
                                                if ($no < $length) { ?>
                                                    <tr>
                                                        <td>SSA Hasil <?php echo $no++ ?></td>
                                                        <td style="width: 50px;" colspan="2" class="text-center">
                                                            <a href="#ViewSsa1Modal<?php echo $row->id_ssa1 ?>" data-toggle="modal" data-target="#ViewSsa1Modal<?php echo $row->id_ssa1 ?>" class="btn btn-info btn-sm">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php } else { ?>
                                                    <tr>
                                                        <td>SSA Hasil <?php echo $no++ ?></td>
                                                        <td style="width: 50px;" class="text-center">
                                                            <a href="#ViewSsa1Modal<?php echo $row->id_ssa1 ?>" data-toggle="modal" data-target="#ViewSsa1Modal<?php echo $row->id_ssa1 ?>" class="btn btn-info btn-sm">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                        </td>
                                                        <td style="width: 50px;" class="text-center" data-toggle="modal" data-target="#printSsa1Modal<?php echo $row->id_ssa1 ?>">
                                                            <a class="btn bg-teal btn-sm text-center" title="Print Assesment" data-toggle="modal" data-target="#printSsa1Modal<?php echo $row->id_ssa1 ?>" href="#printSsa1Modal<?php echo $row->id_ssa1 ?>">
                                                                <i class="fas fa-print"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                            <?php }
                                            }  ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-4">
                                <div class="small-box shadow">
                                    <div class="inner bg-secondary" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                        <div class="icon">
                                            <i class="nav-icon fas fa-check"></i>
                                        </div>
                                        <h4 class="widget-user-username">Form Ceklis</h4>
                                        <h4 class="widget-user-desc">&nbsp;</h4>
                                    </div>
                                    <div class="card-footer p-0 scroll">
                                        <!-- <?php if ($row->status == 'Declined' and $row->form_declined !== 'Form Ceklis' or $row->status == 'Approved') { ?>
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-success">
                                                Approved
                                            </div>
                                        </div>
                                    <?php } else if ($row->form_declined == 'Form Ceklis') { ?>
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-danger">
                                                Declined
                                            </div>
                                        </div>
                                    <?php } ?> -->
                                        <table class="table">
                                            <?php $no = 0;
                                            $length = count($isiC);
                                            if ($no == $length) { ?>
                                                <tr>
                                                    <td class="text-center" colspan="3">No Data</td>
                                                </tr>
                                            <?php } ?>

                                            <?php
                                            $no = 1;
                                            foreach ($isiC as $row) {
                                                if ($no < $length) { ?>
                                                    <tr>
                                                        <td>Ceklis Hasil <?php echo $no++ ?></td>
                                                        <td style="width: 50px;" colspan="2" class="text-center">
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
                                                        <td style="width: 50px;" class="text-center" data-toggle="modal" data-target="#printCeklisModal<?php echo $row->id_ceklis ?>">
                                                            <a class="btn bg-teal btn-sm text-center" title="Print Assesment" data-toggle="modal" data-target="#printCeklisModal<?php echo $row->id_ceklis ?>" href="#printCeklisModal<?php echo $row->id_ceklis ?>">
                                                                <i class="fas fa-print"></i>
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
                        <div class="row">
                            <div class="col-md-4">
                                <div class="small-box shadow">
                                    <div class="inner bg-secondary" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                        <div class="icon">
                                            <i class="nav-icon fas fa-angle-double-up"></i>
                                        </div>
                                        <h4 class="widget-user-username">Form SSA2</h4>
                                        <h4 class="widget-user-desc">&nbsp;</h4>
                                    </div>
                                    <div class="card-footer p-0 scroll">
                                        <!-- <?php if ($row->status == 'Declined' and $row->form_declined !== 'Form SSA 2' or $row->status == 'Approved') { ?>
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-success">
                                                Approved
                                            </div>
                                        </div>
                                    <?php } else if ($row->form_declined == 'Form SSA 2') { ?>
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-danger">
                                                Declined
                                            </div>
                                        </div>
                                    <?php } ?> -->
                                        <table class="table">
                                            <?php $no = 0;
                                            $length = count($isiS2);
                                            if ($no == $length) { ?>
                                                <tr>
                                                    <td class="text-center" colspan="3">No Data</td>
                                                </tr>
                                            <?php } ?>
                                            <?php
                                            $no = 1;
                                            foreach ($isiS2 as $row) {
                                                if ($no < $length) { ?>
                                                    <tr>
                                                        <td>SSA 2 Hasil <?php echo $no++ ?></td>
                                                        <td style="width: 50px;" colspan="2" class="text-center">
                                                            <a href="#ViewSsa2Modal<?php echo $row->id_ssa2 ?>" data-toggle="modal" data-target="#ViewSsa2Modal<?php echo $row->id_ssa2 ?>" class="btn btn-info btn-sm">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                        </td>
                                                    <?php } else { ?>
                                                    <tr>
                                                        <td>SSA 2 Hasil <?php echo $no++ ?></td>
                                                        <td style="width: 50px;" class="text-center">
                                                            <a href="#ViewSsa2Modal<?php echo $row->id_ssa2 ?>" data-toggle="modal" data-target="#ViewSsa2Modal<?php echo $row->id_ssa2 ?>" class="btn btn-info btn-sm">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                        </td>
                                                        <td style="width: 50px;" class="text-center" data-toggle="modal" data-target="#printSsa2Modal<?php echo $row->id_ssa2 ?>">
                                                            <a class="btn bg-teal btn-sm text-center" title="Print Assesment" data-toggle="modal" data-target="#printSsa2Modal<?php echo $row->id_ssa2 ?>" href="#printSsa2Modal<?php echo $row->id_ssa2 ?>">
                                                                <i class="fas fa-print"></i>
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
                                        <div class="icon">
                                            <i class="nav-icon fas fa-poll-h"></i>
                                        </div>
                                        <h4 class="widget-user-username">Form Survey Device</h4>
                                        <h4 class="widget-user-desc">&nbsp;</h4>
                                    </div>
                                    <div class="card-footer p-0 scroll">
                                        <!-- <?php if ($row->status == 'Declined' and $row->form_declined !== 'Form Survey Device' or $row->status == 'Approved') { ?>
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-success">
                                                Approved
                                            </div>
                                        </div>
                                    <?php } else if ($row->form_declined == 'Form Survey Device') { ?>
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-danger">
                                                Declined
                                            </div>
                                        </div>
                                    <?php } ?> -->
                                        <table class="table">
                                            <?php $no = 0;
                                            $length = count($isiD);
                                            if ($no == $length) { ?>
                                                <tr>
                                                    <td class="text-center" colspan="3">No Data</td>
                                                </tr>
                                            <?php } ?>
                                            <?php
                                            $no = 1;
                                            foreach ($isiD as $row) {
                                                if ($no < $length) { ?>
                                                    <td>Survey Device Hasil <?php echo $no++ ?></td>
                                                    <td colspan="2" style="width: 50px;" class="text-center">
                                                        <a href="#ViewDeviceModal<?php echo $row->id_device ?>" data-toggle="modal" data-target="#ViewDeviceModal<?php echo $row->id_device ?>" class="btn btn-info btn-sm">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </td>
                                                <?php } else {  ?>
                                                    <tr>
                                                        <td>Survey Device Hasil <?php echo $no++ ?></td>
                                                        <td style="width: 50px;" class="text-center">
                                                            <a href="#ViewDeviceModal<?php echo $row->id_device ?>" data-toggle="modal" data-target="#ViewDeviceModal<?php echo $row->id_device ?>" class="btn btn-info btn-sm">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                        </td>
                                                        <td style="width: 50px;" data-toggle="modal" data-target="#printDeviceModal<?php echo $row->id_device ?>">
                                                            <a href="#printDeviceModal<?php echo $row->id_device ?>" class="btn bg-teal btn-sm">
                                                                <i class="fas fa-print"></i>
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
                                        <div class="icon">
                                            <i class="nav-icon fas fa-camera"></i>
                                        </div>
                                        <h4 class="widget-user-username">Form CCTV</h4>
                                        <h4 class="widget-user-desc">&nbsp;</h4>
                                    </div>
                                    <div class="card-footer p-0 scroll">
                                        <!-- <?php if ($row->status == 'Declined' and $row->form_declined !== 'Form CCTV' or $row->status == 'Approved') { ?>
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-success">
                                                Approved
                                            </div>
                                        </div>
                                    <?php } else if ($row->form_declined == 'Form CCTV') { ?>
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-danger">
                                                Declined
                                            </div>
                                        </div>
                                    <?php } ?> -->
                                        <table class="table">
                                            <?php $no = 0;
                                            $length = count($isiCt);
                                            if ($no == $length) { ?>
                                                <tr>
                                                    <td class="text-center" colspan="3">No Data</td>
                                                </tr>
                                            <?php } ?>
                                            <?php
                                            $no = 1;
                                            foreach ($isiCt as $row) {
                                                if ($no < $length) { ?>
                                                    <tr>
                                                        <td>CCTV Hasil <?php echo $no++ ?></td>
                                                        <td colspan="2" style="width: 50px;" class="text-center">
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
                                                        <td style="width: 50px;" data-toggle="modal" data-target="#printCctvModal<?php echo $row->id_cctv ?>">
                                                            <a href="#printCctvModal<?php echo $row->id_cctv ?>" class="btn bg-teal btn-sm">
                                                                <i class="fas fa-print"></i>
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
            <!-- /.card-body -->
        </div>
    <?php } ?>
    </div>
    <!-- /.content -->
</div>