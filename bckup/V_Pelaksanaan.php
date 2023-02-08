<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Permintaan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Presales/CTR_Presales') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Form Permintaan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- Form Elements -->

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h3 class="h4">Form Assessment</h3>
            </div>
            <div class="card-body">
                <form class="form-horizontal">
                    <div class="row">
                        <label class="col text-center form-control-label mb-4">
                            <h3>Pelaksanaan Security Assessment</h3>
                        </label>
                    </div>
                    <?php foreach ($isi as $row) { ?>
                        <form action="<?php echo site_url('admin/CTR_Pelaksanaan/GetData') ?>" method="POST">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group-material">
                                        <div class="form-group">
                                            <label for="NPA" class="label-material">Nama PIC Presales</label>
                                            <input type="text" name="npp" class="form-control form-control-sm" value="<?php echo $row->nps ?>">
                                        </div>
                                    </div>
                                    <div class="form-group-material">
                                        <label for="NPS" class="label-material">Nama PIC Sales</label>
                                        <input type="text" name="nps" class="form-control form-control-sm" value="<?php echo $row->npp ?>">
                                    </div>
                                    <div class="form-group-material">
                                        <label for="NU" class="label-material">Nama User</label>
                                        <input type="text" name="nama_user" readonly class="form-control form-control-sm" value="<?php echo $row->nama_user ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group-material">
                                        <label for="lokasi" class="label-material">Lokasi</label>
                                        <input type="text" name="lokasi" readonly class="form-control form-control-sm" value="<?php echo $row->lokasi ?>">
                                    </div>
                                    <div class="form-group-material">
                                        <label for="sub-lokasi" class="label-material">Sub Lokasi</label>
                                        <input type="text" name="sub_lokasi" readonly class="form-control form-control-sm" value="<?php echo $row->sub_lokasi ?>">
                                    </div>
                                    <div class="form-group-material">
                                        <label for="luas-wilayah" class="label-material">Luas Wilayah</label>
                                        <input type="text" name="luas_wilayah" readonly class="form-control form-control-sm" value="<?php echo $row->luas_wilayah ?>">
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
                            <div class="form-group row">
                                <div class="col-sm-12 text-center mt-4">
                                    <button type="submit" class="btn btn-primary"><a class="text-white" href="<?php echo site_url('admin/CTR_Presales') ?>">Cancel</a></button>
                                    <button type="submit" class="btn btn-primary">Next</button>
                                </div>
                            </div>
                        </form>
                    <?php } ?>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>