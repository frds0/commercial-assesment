<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Survey Security Assesment 2</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Presales/CTR_Admin') ?>">Home</a></li>
                        <li class="breadcrumb-item active"><a href="<?php echo site_url('Kasie/CTR_Kasie') ?>">Laporan</a></li>
                        <li class="breadcrumb-item active"><a href="<?php echo site_url('Kasie/CTR_Kasie/Detail') ?>">Daftar Assesment</a></li>
                        <li class="breadcrumb-item active">Form SSA 2</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h3 class="h4">Form Survey Security Assesment</h3>
                        </div>
                        <?php foreach ($isiS2 as $row) { ?>
                            <form class="form-horizontal" action="<?php echo site_url('Presales/CTR_Admin/SimpanSSA2') ?>" method="POST">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <center>
                                                <h5>POS</h5>
                                            </center>
                                            <hr>
                                            <div class="form-group">
                                                <label class="form-control-label">Nama POS :</label>
                                                <input type="text" class="form-control" value="<?php echo $row->nama_pos ?>" name="nama_pos" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total Keseluruhan Anggota :</label>
                                                <input type="text" class="form-control" value="<?php echo $row->total_anggota ?>" name="total_anggota" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Jam Kerja:</label>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="ml-3">
                                                            <input type="radio" value="8 Jam" <?php echo ($row->jam_kerja == '8 Jam' ? ' checked' : ''); ?> name="jam_kerja">
                                                            8 Jam
                                                        </div>
                                                        <div class="ml-3">
                                                            <input type="radio" value="12 Jam" <?php echo ($row->jam_kerja == '12 Jam' ? ' checked' : ''); ?> name="jam_kerja">
                                                            12 Jam
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="ml-3">
                                                            <input type="radio" value="Shift" <?php echo ($row->jam_kerja == 'Shift' ? ' checked' : ''); ?> name="shift">
                                                            Shift
                                                        </div>
                                                        <div class="ml-3">
                                                            <input type="radio" value="Non Shift" <?php echo ($row->jam_kerja == 'Non Shift' ? ' checked' : ''); ?> name="shift">
                                                            Non Shift
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Lokasi :</label>
                                                <textarea cols="30" rows="5" class="form-control" name="lokasi_kerja" readonly><?php echo $row->lokasi_kerja ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <center>
                                                <h5>Analisa Resiko</h5>
                                            </center>
                                            <hr>
                                            <div class="form-group">
                                                <label class="form-control-label">Kerawanan :</label>
                                                <textarea cols="30" rows="7" class="form-control" name="kerawanan" readonly><?php echo $row->kerawanan ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Ancaman :</label>
                                                <textarea cols="30" rows="7" class="form-control" name="ancaman" readonly><?php echo $row->ancaman ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mt-3">
                                                <center>
                                                    <h5>Fungsi & Job Desk:</h5>
                                                    <hr>
                                                    <textarea cols="150" rows="5" class="form-control" name="fungsi_job_desk" readonly><?php echo $row->fungsi_job_desk ?></textarea>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 text-center">
                                            <a class="text-white btn btn-primary" href="<?php echo site_url('Kasie/CTR_Kasie/Detail') ?>">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>