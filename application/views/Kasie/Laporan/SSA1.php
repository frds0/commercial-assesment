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
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Presales/CTR_Admin') ?>">Home</a></li>
                        <li class="breadcrumb-item active"><a href="<?php echo site_url('Kasie/CTR_Kasie') ?>">Laporan</a></li>
                        <li class="breadcrumb-item active"><a href="<?php echo site_url('Kasie/CTR_Kasie/Detail') ?>">Daftar Assesment</a></li>
                        <li class="breadcrumb-item active">Form SSA 1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php foreach ($gabung as $row) { ?>
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
                                <form class="form-horizontal" action="<?php echo site_url('Presales/CTR_Admin/SimpanSSA1') ?>" method="POST">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Pemilihan User :</label>
                                                <div>
                                                    <input type="radio" value="Evaluasi" <?php echo ($row->pemilihan_user == 'Evaluasi' ? 'checked' : ''); ?> disabled name="pemilihan_user">
                                                    Evaluasi
                                                </div>
                                                <div>
                                                    <input type="radio" value="New Project" <?php echo ($row->pemilihan_user == 'New Project' ? 'checked' : ''); ?> disabled name="pemilihan_user">
                                                    New Project
                                                </div>
                                                <div class="form-group mt-2">
                                                    <label class="form-control-label">Nama Perusahaan :</label>
                                                    <input type="text" class="form-control" readonly name="nama_perusahaan" value="<?php echo $row->nama_perusahaan ?>">
                                                </div>
                                                <div class="form-group mt-2">
                                                    <label class="form-control-label">Jumlah MP :</label>
                                                    <input type="text" class="form-control" readonly name="jumlah_mp" value="<?php echo $row->jumlah_mp ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label">Alamat Perusahaan :</label>
                                                    <textarea cols="60" rows="5" class="form-control" readonly name="alamat_perusahaan"><?php echo $row->alamat_perusahaan ?></textarea>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <label class="form-control-label">Kelurahan :</label>
                                                    <input type="text" class="form-control" readonly name="kelurahan" value="<?php echo $row->kelurahan ?>">
                                                </div>
                                                <div class="form-group mt-2">
                                                    <label class="form-control-label">Kecamatan :</label>
                                                    <input type="text" class="form-control" readonly name="kecamatan" value="<?php echo $row->kecamatan ?>">
                                                </div>
                                                <div class="form-group mt-2">
                                                    <label class="form-control-label">Kode Pos :</label>
                                                    <input type="text" class="form-control" readonly name="kode_pos" value="<?php echo $row->kode_pos ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Nama PIC User :</label>
                                                <input type="text" class="form-control" readonly name="nama_pic_user" value="<?php echo $row->nama_pic_user ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">No Telepon :</label>
                                                <input type="text" class="form-control" readonly name="no_telp" value="<?php echo $row->no_telp ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Jenis Usaha :</label>
                                                <input type="text" class="form-control" readonly name="jenis_usaha" value="<?php echo $row->jenis_usaha ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Nama ARH :</label>
                                                <input type="text" class="form-control" readonly name="nama_arh" value="<?php echo $row->nama_arh ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Nama PIC :</label>
                                                <input type="text" class="form-control" readonly name="nama_pic" value="<?php echo $row->nama_pic ?>">
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
                                                <input type="text" class="form-control" readonly name="pola_jaga" value="<?php echo $row->pola_jaga ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Jenis Seragam :</label>
                                                <input type="text" class="form-control" readonly name="jenis_seragam" value="<?php echo $row->jenis_seragam ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Kartu tanda anggota :</label>
                                                <input type="text" class="form-control" readonly name="kta" value="<?php echo $row->kta ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Pendidikan Anggota :</label>
                                                <input type="text" class="form-control" readonly name="pendidikan anggota" value="<?php echo $row->pendidikan_anggota ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Perlengkapan :</label>
                                                <input type="text" class="form-control" readonly name="perlengkapan" value="<?php echo $row->perlengkapan ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <center>
                                                    <label class="form-control-label">Catatan :</label>
                                                    <textarea cols="150" rows="5" class="form-control" readonly name="catatan_b"> <?php echo $row->catatan_b ?></textarea>
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
                                                    <input type="radio" value="Besi" <?php echo ($row->pagar == 'Besi' ? 'checked' : ''); ?> disabled name="pagar">
                                                    Besi
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tembok" <?php echo ($row->pagar == 'Tembok' ? 'checked' : ''); ?> disabled name="pagar">
                                                    Tembok
                                                </div>
                                                <div>
                                                    <input type="radio" value="Kombinasi" <?php echo ($row->pagar == 'Kombinasi' ? 'checked' : ''); ?> disabled name="pagar">
                                                    Kombinasi
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="form-control-label">Gate :</label>
                                            <div>
                                                <input type="radio" value="Manual" <?php echo ($row->gate == 'Manual' ? 'checked' : ''); ?> disabled name="gate">
                                                Manual
                                            </div>
                                            <div>
                                                <input type="radio" value="Otomatis" <?php echo ($row->gate == 'Otomatis' ? 'checked' : ''); ?> disabled name="gate">
                                                Otomatis
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <label class="form-control-label">Penerangan :</label>
                                            <div>
                                                <input type="radio" value="Ada" <?php echo ($row->penerangan == 'Ada' ? 'checked' : ''); ?> disabled name="penerangan">
                                                Ada
                                            </div>
                                            <div>
                                                <input type="radio" value="Tidak" <?php echo ($row->penerangan == 'Tidak' ? 'checked' : ''); ?> disabled name="penerangan">
                                                Tidak
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label">Luas Area :</label>
                                                <input type="text" class="form-control" value="<?php echo $row->luas_area ?>" readonly name="luas_area">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <center>
                                                    <label class="form-control-label">Catatan :</label>
                                                    <textarea cols="150" rows="5" class="form-control" readonly name="catatan_c"><?php echo $row->catatan_c ?></textarea>
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
                                                    <input type="radio" value="Ada" <?php echo ($row->guard_tour == 'Ada' ? 'checked' : ''); ?> disabled name="guard_tour">
                                                    Ada
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->guard_tour == 'Tidak' ? 'checked' : ''); ?> disabled name="guard_tour">
                                                    Tidak
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="text" class="form-control" value="<?php echo $row->total_1 ?>" readonly name="total_1">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Handy Talky :</label>
                                                <div>
                                                    <input type="radio" value="Ada" <?php echo ($row->handy_talky == 'Ada' ? 'checked' : ''); ?> disabled name="handy_talky">
                                                    Ada
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->handy_talky == 'Tidak' ? 'checked' : ''); ?> disabled name="handy_talky">
                                                    Tidak
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="text" class="form-control" value="<?php echo $row->total_2 ?>" readonly name="total_2">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Rompi :</label>
                                                <div>
                                                    <input type="radio" value="Ada" <?php echo ($row->rompi == 'Ada' ? 'checked' : ''); ?> disabled name="rompi">
                                                    Ada
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->rompi == 'Tidak' ? 'checked' : ''); ?> disabled name="rompi">
                                                    Tidak
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="text" class="form-control" value="<?php echo $row->total_3 ?>" readonly name="total_3">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Lampu Lalin :</label>
                                                <div>
                                                    <input type="radio" value="Ada" <?php echo ($row->lampu_lalin == 'Ada' ? 'checked' : ''); ?> disabled name="lampu_lalin">
                                                    Ada
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->lampu_lalin == 'Tidak' ? 'checked' : ''); ?> disabled name="lampu_lalin">
                                                    Tidak
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="text" class="form-control" value="<?php echo $row->total_4 ?>" readonly name="total_4">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Metal Detector :</label>
                                                <div>
                                                    <input type="radio" value="Ada" <?php echo ($row->metal_detector == 'Ada' ? 'checked' : ''); ?> disabled name="metal_detector">
                                                    Ada
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->metal_detector == 'Tidak' ? 'checked' : ''); ?> disabled name="metal_detector">
                                                    Tidak
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="text" class="form-control" value="<?php echo $row->total_5 ?>" readonly name="total_5">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Rambu Stop :</label>
                                                <div>
                                                    <input type="radio" value="Ada" <?php echo ($row->rambu_stop == 'Ada' ? 'checked' : ''); ?> disabled name="rambu_stop">
                                                    Ada
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->rambu_stop == 'Tidak' ? 'checked' : ''); ?> disabled name="rambu_stop">
                                                    Tidak
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="text" class="form-control" value="<?php echo $row->total_6 ?>" readonly name="total_6">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Miror :</label>
                                                <div>
                                                    <input type="radio" value="Ada" <?php echo ($row->mirror == 'Ada' ? 'checked' : ''); ?> disabled name="mirror">
                                                    Ada
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->mirror == 'Tidak' ? 'checked' : ''); ?> disabled name="mirror">
                                                    Tidak
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="text" class="form-control" value="<?php echo $row->total_7 ?>" readonly name="total_7">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">ATK :</label>
                                                <div>
                                                    <input type="radio" value="Ada" <?php echo ($row->atk == 'Ada' ? 'checked' : ''); ?> disabled name="atk">
                                                    Ada
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->atk == 'tidak' ? 'checked' : ''); ?> disabled name="atk">
                                                    Tidak
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="text" class="form-control" value="<?php echo $row->total_8 ?>" readonly name="total_8">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <center>
                                                        <label class="form-control-label">Catatan :</label>
                                                        <textarea cols="150" rows="5" class="form-control" readonly name="catatan_d"><?php echo $row->catatan_d ?></textarea>
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
                                                    <input type="radio" value="Standart" <?php echo ($row->ump == 'Standart' ? 'checked' : ''); ?> disabled name="ump">
                                                    Standart
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak Standart" <?php echo ($row->ump == 'Tidak Standart' ? 'checked' : ''); ?> disabled name="ump">
                                                    Tidak Strandart
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label">BPJS :</label>
                                                <div>
                                                    <input type="radio" value="Standart" <?php echo ($row->bpjs == 'Standart' ? 'checked' : ''); ?> disabled name="bpjs">
                                                    Standart
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak Standart" <?php echo ($row->bpjs == 'Tidak Standart' ? 'checked' : ''); ?> disabled name="bpjs">
                                                    Tidak Strandart
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <center>
                                                        <label class="form-control-label">Catatan :</label>
                                                        <textarea cols="150" rows="5" class="form-control" readonly name="catatan_e"><?php echo $row->catatan_e ?></textarea>
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
                                                    <input type="radio" value="Ada" <?php echo ($row->f_cctv == 'Ada' ? 'checked' : ''); ?> disabled name="f_cctv">
                                                    Ada
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->f_cctv == 'Tidak' ? 'checked' : ''); ?> disabled name="f_cctv">
                                                    Tidak
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="text" class="form-control" value="<?php echo $row->total_1_a ?>" readonly name="total_1_a">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">B. Acces :</label>

                                                <div>
                                                    <input type="radio" value="Ada" <?php echo ($row->f_access == 'Ada' ? 'checked' : ''); ?> disabled name="f_access">
                                                    Ada
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->f_access == 'Tidak' ? 'checked' : ''); ?> disabled name="f_access">
                                                    Tidak
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="text" class="form-control" value="<?php echo $row->total_1_b ?>" readonly name="total_1_b">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label">C. Barrier :</label>
                                                <div>
                                                    <input type="radio" value="Ada" <?php echo ($row->f_barrier == 'Ada' ? 'checked' : ''); ?> disabled name="f_barrier">
                                                    Ada
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->f_barrier == 'Tidak' ? 'checked' : ''); ?> disabled name="f_barrier">
                                                    Tidak
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="text" class="form-control" value="<?php echo $row->total_1_c ?>" readonly name="total_1_c">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">D. VMS :</label>
                                                <div>
                                                    <input type="radio" value="Ada" <?php echo ($row->f_vms == 'Ada' ? 'checked' : ''); ?> disabled name="f_vms">
                                                    Ada
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->f_vms == 'Tidak' ? 'checked' : ''); ?> disabled name="f_vms">
                                                    Tidak
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="text" class="form-control" value="<?php echo $row->total_1_d ?>" readonly name="total_1_d">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <center>
                                                    <label class="form-control-label">Catatan :</label>
                                                    <textarea cols="150" rows="5" class="form-control" readonly name="catatan_f"><?php echo $row->catatan_f ?></textarea>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <div class="col-sm-12 text-center">
                                            <a class="text-white btn btn-primary" href="<?php echo site_url('Kasie/CTR_Kasie/Detail') ?>">Back</a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php } ?>
        </section>
</div>
</div>
<!-- /.content -->
</div>