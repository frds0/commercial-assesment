<!-- View Data SSA1 -->
<?php foreach ($isiS1Detail as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="ViewSsa1Modal<?php echo $row->id_ssa1 ?>" tabindex="-1" aria-labelledby="ViewSsa1ModalLabel<?php echo $row->id_ssa1 ?>" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form SSA1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body modal-xl">
                    <div class="col-lg-12">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="">Created By</label>
                                    <h6><?php echo $row->nama_created ?></h6>
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Created Date</label>
                                    <h6><?php echo $row->created_date ?></h6>
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Modified By</label>
                                    <h6>
                                        <?php if ($row->nama_modified == null) { ?>
                                            -
                                        <?php } else {
                                            echo $row->nama_modified;
                                        } ?>
                                    </h6>
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Modified Date</label>
                                    <h6><?php if ($row->modified_date == null) { ?>
                                            -
                                        <?php } else {
                                            echo date('d F Y H:i:s', strtotime($row->modified_date));
                                        } ?>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex align-items-center bg-cyan">
                                <h3 class="h4"></h3>
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
                                                <label class="form-control-label">Nama Perusahaan :</label>
                                                <input type="text" value="<?php echo $row->nama_perusahaan ?>" class="form-control" name="nama_perusahaan" readonly>
                                            </div>
                                            <div class="form-group mt-2">
                                                <label class="form-control-label">Jumlah MP :</label>
                                                <input type="number" min="0" value="<?php echo $row->jumlah_mp ?>" class="form-control" name="jumlah_mp" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Alamat Perusahaan :</label>
                                                <textarea cols="60" rows="5" class="form-control" name="alamat_perusahaan" readonly><?php echo $row->alamat_perusahaan ?></textarea>
                                            </div>
                                            <div class="form-group mt-2">
                                                <label class="form-control-label">Kelurahan :</label>
                                                <input type="text" class="form-control" name="kelurahan" value="<?php echo $row->kelurahan ?>" readonly>
                                            </div>
                                            <div class="form-group mt-2">
                                                <label class="form-control-label">Kecamatan :</label>
                                                <input type="text" class="form-control" name="kecamatan" value="<?php echo $row->kecamatan ?>" readonly>
                                            </div>
                                            <div class="form-group mt-2">
                                                <label class="form-control-label">Kode Pos :</label>
                                                <input type="text" class="form-control" name="kode_pos" value="<?php echo $row->kode_pos ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Nama PIC User :</label>
                                                <input type="text" class="form-control" name="nama_pic_user" value="<?php echo $row->nama_pic_user ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">No Telepon :</label>
                                                <input type="text" class="form-control" name="no_telp" value="<?php echo $row->no_telp ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Jenis Usaha :</label>
                                                <input type="text" class="form-control" name="jenis_usaha" value="<?php echo $row->jenis_usaha ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Nama ARH :</label>
                                                <input type="text" class="form-control" name="nama_arh" value="<?php echo $row->nama_arh ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Nama PIC Commercial:</label>
                                                <input type="text" class="form-control" name="nama_pic" value="<?php echo $row->nama_pic ?>" readonly>
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
                                                <input type="text" class="form-control" name="pola_jaga" value="<?php echo $row->pola_jaga ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Jenis Seragam :</label>
                                                <input type="text" class="form-control" name="jenis_seragam" value="<?php echo $row->jenis_seragam ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Kartu tanda anggota :</label>
                                                <input type="text" class="form-control" name="kta" value="<?php echo $row->kta ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Pendidikan Anggota :</label>
                                                <input type="text" class="form-control" name="pendidikan_anggota" value="<?php echo $row->pendidikan_anggota ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Perlengkapan :</label>
                                                <input type="text" class="form-control" name="perlengkapan" value="<?php echo $row->perlengkapan ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <center>
                                                    <label class="form-control-label">Catatan :</label>
                                                    <textarea cols="150" rows="5" class="form-control" name="catatan_b" readonly><?php echo $row->catatan_b ?></textarea>
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
                                                    <input type="radio" value="Besi" <?php echo ($row->pagar == 'Besi' ? 'checked' : ''); ?> name="pagar" disabled>
                                                    Besi
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tembok" <?php echo ($row->pagar == 'Tembok' ? 'checked' : ''); ?> name="pagar" disabled>
                                                    Tembok
                                                </div>
                                                <div>
                                                    <input type="radio" value="Kombinasi" <?php echo ($row->pagar == 'Kombinasi' ? 'checked' : ''); ?> name="pagar" disabled>
                                                    Kombinasi
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="form-control-label">Gate :</label>
                                            <div>
                                                <input type="radio" value="Manual" <?php echo ($row->gate == 'Manual' ? 'checked' : ''); ?> name="gate" disabled>
                                                Manual
                                            </div>
                                            <div>
                                                <input type="radio" value="Otomatis" <?php echo ($row->gate == 'Otomatis' ? 'checked' : ''); ?> name="gate" disabled>
                                                Otomatis
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <label class="form-control-label">Penerangan :</label>
                                            <div>
                                                <input type="radio" value="Ada" <?php echo ($row->penerangan == 'Ada' ? 'checked' : ''); ?> name="penerangan" disabled>
                                                Ada
                                            </div>
                                            <div>
                                                <input type="radio" value="Tidak" <?php echo ($row->penerangan == 'Tidak' ? 'checked' : ''); ?> name="penerangan" disabled>
                                                Tidak
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label">Luas Area :</label>
                                                <input type="text" class="form-control" name="luas_area" readonly value="<?php echo $row->luas_area ?>">
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
                                                    <input type="radio" value="Ada" <?php echo ($row->guard_tour == 'Ada' ? 'checked' : ''); ?> name="guard_tour" disabled>
                                                    Ada
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->guard_tour == 'Tidak' ? 'checked' : ''); ?> name="guard_tour" disabled>
                                                    Tidak
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="text" class="form-control" name="total_1" value="<?php echo $row->total_1 ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Handy Talky :</label>
                                                <div>
                                                    <input type="radio" value="Ada" <?php echo ($row->handy_talky == 'Ada' ? 'checked' : ''); ?> name="handy_talky" disabled>
                                                    Ada
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->handy_talky == 'Tidak' ? 'checked' : ''); ?> name="handy_talky" disabled>
                                                    Tidak
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="text" class="form-control" name="total_2" value="<?php echo $row->total_2 ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Rompi :</label>
                                                <div>
                                                    <input type="radio" value="Ada" <?php echo ($row->rompi == 'Ada' ? 'checked' : ''); ?> name="rompi" disabled>
                                                    Ada
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->rompi == 'Tidak' ? 'checked' : ''); ?> name="rompi" disabled>
                                                    Tidak
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="text" class="form-control" name="total_3" value="<?php echo $row->total_3 ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Lampu Lalin :</label>
                                                <div>
                                                    <input type="radio" value="Ada" <?php echo ($row->lampu_lalin == 'Ada' ? 'checked' : ''); ?> name="lampu_lalin" disabled>
                                                    Ada
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->lampu_lalin == 'Tidak' ? 'checked' : ''); ?> name="lampu_lalin" disabled>
                                                    Tidak
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="text" class="form-control" name="total_4" value="<?php echo $row->total_4 ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Metal Detector :</label>
                                                <div>
                                                    <input type="radio" value="Ada" <?php echo ($row->metal_detector == 'Ada' ? 'checked' : ''); ?> name="metal_detector" disabled>
                                                    Ada
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->metal_detector == 'Tidak' ? 'checked' : ''); ?> name="metal_detector" disabled>
                                                    Tidak
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="text" class="form-control" name="total_5" value="<?php echo $row->total_5 ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Rambu Stop :</label>
                                                <div>
                                                    <input type="radio" value="Ada" <?php echo ($row->rambu_stop == 'Ada' ? 'checked' : ''); ?> name="rambu_stop" disabled>
                                                    Ada
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->rambu_stop == 'Tidak' ? 'checked' : ''); ?> name="rambu_stop" disabled>
                                                    Tidak
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="text" class="form-control" name="total_6" value="<?php echo $row->total_6 ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Miror :</label>
                                                <div>
                                                    <input type="radio" value="Ada" <?php echo ($row->mirror == 'Ada' ? 'checked' : ''); ?> name="mirror" disabled>
                                                    Ada
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->mirror == 'Tidak' ? 'checked' : ''); ?> name="mirror" disabled>
                                                    Tidak
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="text" class="form-control" name="total_7" value="<?php echo $row->total_7 ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">ATK :</label>
                                                <div>
                                                    <input type="radio" value="Ada" <?php echo ($row->atk == 'Ada' ? 'checked' : ''); ?> name="atk" disabled>
                                                    Ada
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->atk == 'Tidak' ? 'checked' : ''); ?> name="atk" disabled>
                                                    Tidak
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Deskripsi :</label>
                                                <input type="text" class="form-control" name="deskripsi_atk" value="<?php echo $row->deskripsi_atk ?>" readonly>
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
                                                    <input type="radio" value="Standart" <?php echo ($row->ump == 'Standart' ? 'checked' : ''); ?> name="ump" disabled>
                                                    Standart
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak Standart" <?php echo ($row->ump == 'Tidak Standart' ? 'checked' : ''); ?> name="ump" disabled>
                                                    Tidak Strandart
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label">BPJS :</label>
                                                <div>
                                                    <input type="radio" value="Standart" <?php echo ($row->bpjs == 'Standart' ? 'checked' : ''); ?> name="bpjs" disabled>
                                                    Standart
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak Standart" <?php echo ($row->bpjs == 'Tidak Standart' ? 'checked' : ''); ?> name="bpjs" disabled>
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
                                                    <input type="radio" value="Ada" <?php echo ($row->f_cctv == 'Ada' ? 'checked' : ''); ?> name="f_cctv" disabled>
                                                    Ada
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->f_cctv == 'Tidak' ? 'checked' : ''); ?> name="f_cctv" disabled>
                                                    Tidak
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="text" class="form-control" name="total_1_a" value="<?php echo $row->total_1_a ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">B. Acces :</label>

                                                <div>
                                                    <input type="radio" value="Ada" <?php echo ($row->f_access == 'Ada' ? 'checked' : ''); ?> name="f_access" disabled>
                                                    Ada
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->f_access == 'Tidak' ? 'checked' : ''); ?> name="f_access" disabled>
                                                    Tidak
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="text" class="form-control" name="total_1_b" value="<?php echo $row->total_1_b ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label">C. Barrier :</label>
                                                <div>
                                                    <input type="radio" value="Ada" <?php echo ($row->f_barrier == 'Ada' ? 'checked' : ''); ?> name="f_barrier" disabled>
                                                    Ada
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->f_barrier == 'Tidak' ? 'checked' : ''); ?> name="f_barrier" disabled>
                                                    Tidak
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="text" class="form-control" name="total_1_c" value="<?php echo $row->total_1_c ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">D. VMS :</label>
                                                <div>
                                                    <input type="radio" value="Ada" <?php echo ($row->f_vms == 'Ada' ? 'checked' : ''); ?> name="f_vms" disabled>
                                                    Ada
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->f_vms == 'Tidak' ? 'checked' : ''); ?> name="f_vms" disabled>
                                                    Tidak
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="text" class="form-control" name="total_1_d" value="<?php echo $row->total_1_d ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <center>
                                                    <label class="form-control-label">Catatan :</label>
                                                    <textarea cols="150" rows="5" class="form-control" name="catatan_f" readonly><?php echo $row->catatan_f ?></textarea>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="modal-footer">
                                    <a class="text-white btn btn-danger" data-dismiss="modal" aria-label="Close" href="#"><i class="fas fa-window-close"></i> Tutup</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- End View Data SSA1 -->

<!-- Print PDF SSA1 -->
<?php $no = 1;
foreach ($isiS1 as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="printSsa1Modal<?php echo $row->id_ssa1 ?>" tabindex="-1" aria-labelledby="printSsa1ModalLabel<?php echo $row->id_ssa1 ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class=" modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Print PDF</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class=" card">
                        <div class="card-header d-flex align-items-center bg-teal">
                            <h3 class="h4"></h3>
                        </div>
                        <form class="form-horizontal" action="<?php echo site_url('CTR_Laporan/PrintSsa1/' . $row->id_permintaan) ?>" method="POST">
                            <div class="card-body">
                                <input type="hidden" name="id_ssa1" value="<?php echo $row->id_ssa1 ?>" id="">
                                <div class="text-center mb-4">
                                    <h3>Print SSA 1 ?</h3>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fas fa-window-close"></i> Batal</button>
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-check-square"></i> Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>