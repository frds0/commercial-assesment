<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Survey Security Assesment 1</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Presales/CTR_Presales') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Form SSA 1</li>
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
                        <div class="card-body">
                            <center>
                                <h5><b>A. Background Perusahaan</b></h5>
                            </center>
                            <hr>
                            <?php echo $this->session->flashdata('pesan2'); ?>
                            <form class="form-horizontal" action="<?php echo site_url('Presales/CTR_Presales/SimpanSSA1') ?>" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Pemilihan User :</label>
                                            <div>
                                                <input type="radio" value="Evaluasi" name="pemilihan_user">
                                                Evaluasi
                                            </div>
                                            <div>
                                                <input type="radio" value="New Project" name="pemilihan_user">
                                                New Project
                                            </div>
                                            <div class="form-group mt-2">
                                                <label class="form-control-label">Nama Perusahaan :</label>
                                                <input type="text" class="form-control" name="nama_perusahaan">
                                            </div>
                                            <div class="form-group mt-2">
                                                <label class="form-control-label">Jumlah MP :</label>
                                                <input type="text" class="form-control" name="jumlah_mp">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Alamat Perusahaan :</label>
                                                <textarea cols="60" rows="5" class="form-control" name="alamat_perusahaan"></textarea>
                                            </div>
                                            <div class="form-group mt-2">
                                                <label class="form-control-label">Kelurahan :</label>
                                                <input type="text" class="form-control" name="kelurahan">
                                            </div>
                                            <div class="form-group mt-2">
                                                <label class="form-control-label">Kecamatan :</label>
                                                <input type="text" class="form-control" name="kecamatan">
                                            </div>
                                            <div class="form-group mt-2">
                                                <label class="form-control-label">Kode Pos :</label>
                                                <input type="text" class="form-control" name="kode_pos">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Nama PIC User :</label>
                                            <input type="text" class="form-control" name="nama_pic_user">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">No Telepon :</label>
                                            <input type="text" class="form-control" name="no_telp">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Jenis Usaha :</label>
                                            <input type="text" class="form-control" name="jenis_usaha">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Nama ARH :</label>
                                            <input type="text" class="form-control" name="nama_arh">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Nama PIC :</label>
                                            <input type="text" class="form-control" name="nama_pic">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <center>
                                    <h5><b>B. Man Power</b></h5>
                                </center>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Pola Jaga :</label>
                                            <input type="text" class="form-control" name="pola_jaga">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Jenis Seragam :</label>
                                            <input type="text" class="form-control" name="jenis_seragam">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Kartu tanda anggota :</label>
                                            <input type="text" class="form-control" name="kta">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Pendidikan Anggota :</label>
                                            <input type="text" class="form-control" name="pendidikan anggota">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Perlengkapan :</label>
                                            <input type="text" class="form-control" name="perlengkapan">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <center>
                                                <label class="form-control-label">Catatan :</label>
                                                <textarea cols="150" rows="5" class="form-control" name="catatan_b"></textarea>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <center>
                                    <h5><b>C.Parimeter</b></h5>
                                </center>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Pagar :</label>
                                            <div>
                                                <input type="radio" value="Besi" name="pagar">
                                                Besi
                                            </div>
                                            <div>
                                                <input type="radio" value="Tembok" name="pagar">
                                                Tembok
                                            </div>
                                            <div>
                                                <input type="radio" value="Kombinasi" name="pagar">
                                                Kombinasi
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="form-control-label">Gate :</label>
                                        <div>
                                            <input type="radio" value="Manual" name="gate">
                                            Manual
                                        </div>
                                        <div>
                                            <input type="radio" value="Otomatis" name="gate">
                                            Otomatis
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <label class="form-control-label">Penerangan :</label>
                                        <div>
                                            <input type="radio" value="Ada" name="penerangan">
                                            Ada
                                        </div>
                                        <div>
                                            <input type="radio" value="Tidak" name="penerangan">
                                            Tidak
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Luas Area :</label>
                                            <input type="text" class="form-control" name="luas_area">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <center>
                                                <label class="form-control-label">Catatan :</label>
                                                <textarea cols="150" rows="5" class="form-control" name="catatan_c"></textarea>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <center>
                                    <h5><b>D.Sarana Penunjang</b></h5>
                                </center>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Guard Tour :</label>
                                            <div>
                                                <input type="radio" value="Ada" name="guard_tour">
                                                Ada
                                            </div>
                                            <div>
                                                <input type="radio" value="Tidak" name="guard_tour">
                                                Tidak
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Total :</label>
                                            <input type="text" class="form-control" name="total_1">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Handy Talky :</label>
                                            <div>
                                                <input type="radio" value="Ada" name="handy_talky">
                                                Ada
                                            </div>
                                            <div>
                                                <input type="radio" value="Tidak" name="handy_talky">
                                                Tidak
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Total :</label>
                                            <input type="text" class="form-control" name="total_2">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Rompi :</label>
                                            <div>
                                                <input type="radio" value="Ada" name="rompi">
                                                Ada
                                            </div>
                                            <div>
                                                <input type="radio" value="Tidak" name="rompi">
                                                Tidak
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Total :</label>
                                            <input type="text" class="form-control" name="total_3">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Lampu Lalin :</label>
                                            <div>
                                                <input type="radio" value="Ada" name="lampu_lalin">
                                                Ada
                                            </div>
                                            <div>
                                                <input type="radio" value="Tidak" name="lampu_lalin">
                                                Tidak
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Total :</label>
                                            <input type="text" class="form-control" name="total_4">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Metal Detector :</label>
                                            <div>
                                                <input type="radio" value="Ada" name="metal_detector">
                                                Ada
                                            </div>
                                            <div>
                                                <input type="radio" value="Tidak" name="metal_detector">
                                                Tidak
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Total :</label>
                                            <input type="text" class="form-control" name="total_5">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Rambu Stop :</label>
                                            <div>
                                                <input type="radio" value="Ada" name="rambu_stop">
                                                Ada
                                            </div>
                                            <div>
                                                <input type="radio" value="Tidak" name="rambu_stop">
                                                Tidak
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Total :</label>
                                            <input type="text" class="form-control" name="total_6">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Miror :</label>
                                            <div>
                                                <input type="radio" value="Ada" name="mirror">
                                                Ada
                                            </div>
                                            <div>
                                                <input type="radio" value="Tidak" name="mirror">
                                                Tidak
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Total :</label>
                                            <input type="text" class="form-control" name="total_7">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">ATK :</label>
                                            <div>
                                                <input type="radio" value="Ada" name="atk">
                                                Ada
                                            </div>
                                            <div>
                                                <input type="radio" value="Tidak" name="atk">
                                                Tidak
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Total :</label>
                                            <input type="text" class="form-control" name="total_8">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <center>
                                                    <label class="form-control-label">Catatan :</label>
                                                    <textarea cols="150" rows="5" class="form-control" name="catatan_d"></textarea>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <center>
                                    <h5><b>E. Regulasi dan kebijakan</b></h5>
                                </center>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">UMP :</label>
                                            <div>
                                                <input type="radio" value="Standart" name="ump">
                                                Standart
                                            </div>
                                            <div>
                                                <input type="radio" value="Tidak Standart" name="ump">
                                                Tidak Strandart
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">BPJS :</label>
                                            <div>
                                                <input type="radio" value="Standart" name="bpjs">
                                                Standart
                                            </div>
                                            <div>
                                                <input type="radio" value="Tidak Standart" name="bpjs">
                                                Tidak Strandart
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <center>
                                                    <label class="form-control-label">Catatan :</label>
                                                    <textarea cols="150" rows="5" class="form-control" name="catatan_e"></textarea>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <center>
                                    <h5><b>F. Device</b></h5>
                                </center>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">A. CCTV :</label>
                                            <div>
                                                <input type="radio" value="Ada" name="f_cctv">
                                                Ada
                                            </div>
                                            <div>
                                                <input type="radio" value="Tidak" name="f_cctv">
                                                Tidak
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Total :</label>
                                            <input type="text" class="form-control" name="total_1_a">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">B. Acces :</label>

                                            <div>
                                                <input type="radio" value="Ada" name="f_access">
                                                Ada
                                            </div>
                                            <div>
                                                <input type="radio" value="Tidak" name="f_access">
                                                Tidak
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Total :</label>
                                            <input type="text" class="form-control" name="total_1_b">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">C. Barrier :</label>
                                            <div>
                                                <input type="radio" value="Ada" name="f_barrier">
                                                Ada
                                            </div>
                                            <div>
                                                <input type="radio" value="Tidak" name="f_barrier">
                                                Tidak
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Total :</label>
                                            <input type="text" class="form-control" name="total_1_c">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">D. VMS :</label>
                                            <div>
                                                <input type="radio" value="Ada" name="f_vms">
                                                Ada
                                            </div>
                                            <div>
                                                <input type="radio" value="Tidak" name="f_vms">
                                                Tidak
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Total :</label>
                                            <input type="text" class="form-control" name="total_1_d">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <center>
                                                <label class="form-control-label">Catatan :</label>
                                                <textarea cols="150" rows="5" class="form-control" name="catatan_f"></textarea>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary"><a class="text-white" href="pelaksanaan.html">Previous</a></button>
                                        <button type="submit" class="btn btn-primary">Next</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
</div>
</div>
</section>
<!-- /.content -->
</div>