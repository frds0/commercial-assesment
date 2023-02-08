<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Upload CCTV</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Presales/CTR_Presales') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Upload CCTV</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Form Upload CCTV </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <?php echo $this->session->flashdata('pesan'); ?>
                <?php echo $this->session->flashdata('pesan1'); ?>
                <?php echo $this->session->flashdata('pesan6'); ?>
                <!-- <form class="form-horizontal" method="POST" action="<?php echo site_url('Presales/CTR_Presales/SimpanCCTV') ?>" enctype="multipart/form-data"> -->
                <?php echo form_open_multipart('Presales/CTR_Presales/SimpanCCTV') ?>
                <div class="row">
                    <div class="col">
                        <h3>CCTV 1</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group-material mt-2">
                            Lokasi CCTV <input type="text" name="lokasi_cctv" class="form-control form-control-sm">
                        </div>
                        <div class="form-group-material mt-4">
                            View Tampak Depan<br>
                            <input type="file" name="view_depan" size="20" class="mt-2 p-1 form-control" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group-material mt-2">
                            Kondisi CCTV
                            <input type="text" name="kondisi_cctv" class="form-control form-control-sm">
                        </div>
                        <div class="form-group-material mt-4">
                            View Tampak Belakang <br>
                            <input type="file" name="view_belakang" size="20" class="mt-2 p-1 form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-4">
                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary"><a class="text-white" href="pelaksanaan.html">Previous</a></button>
                        <button type="submit" class="btn btn-primary">Selesai</button>
                    </div>
                </div>
                <!-- </form> -->
                <?php echo form_close() ?>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <!-- /.content -->
</div>