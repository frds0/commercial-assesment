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
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Presales/CTR_Presales') ?>">Home</a></li>
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
                        <?php echo $this->session->flashdata('pesan4'); ?>
                        <form class="form-horizontal" action="<?php echo site_url('Presales/CTR_Presales/SimpanSSA2') ?>" method="POST">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <center>
                                            <h5>POS</h5>
                                        </center>
                                        <hr>
                                        <div class="form-group">
                                            <label class="form-control-label">Nama POS :</label>
                                            <input type="text" class="form-control" name="nama_pos">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Total Keseluruhan Anggota :</label>
                                            <input type="text" class="form-control" name="total_anggota">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Jam Kerja:</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="ml-3">
                                                        <input type="radio" value="8 Jam" name="jam_kerja">
                                                        8 Jam
                                                    </div>
                                                    <div class="ml-3">
                                                        <input type="radio" value="12 Jam" name="jam_kerja">
                                                        12 Jam
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="ml-3">
                                                        <input type="radio" value="Shift" name="shift">
                                                        Shift
                                                    </div>
                                                    <div class="ml-3">
                                                        <input type="radio" value="Non Shift" name="shift">
                                                        Non Shift
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Lokasi :</label>
                                            <textarea cols="30" rows="5" class="form-control" name="lokasi_kerja"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <center>
                                            <h5>Analisa Resiko</h5>
                                        </center>
                                        <hr>
                                        <div class="form-group">
                                            <label class="form-control-label">Kerawanan :</label>
                                            <textarea cols="30" rows="7" class="form-control" name="kerawanan"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Ancaman :</label>
                                            <textarea cols="30" rows="7" class="form-control" name="ancaman"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mt-3">
                                            <center>
                                                <h5>Fungsi & Job Desk:</h5>
                                                <hr>
                                                <textarea cols="150" rows="5" class="form-control" name="fungsi_job_desk"></textarea>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="form-group row">
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary"><a class="text-white" href="pelaksanaan.html">Previous</a></button>
                                        <button type="submit" class="btn btn-primary">Next</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>