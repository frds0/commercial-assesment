<!-- Add Data SSA1 -->
<div class="modal fade" data-backdrop="static" id="ssa1Modal" tabindex="-1" aria-labelledby="ssa1ModalLabel" aria-hidden="true">
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
                    <div class="card">
                        <div class="card-header d-flex align-items-center bg-primary">
                            <h3 class="h4"></h3>
                        </div>
                        <form class="form-horizontal" action="<?php echo site_url('Presales/CTR_Presales/SimpanSSA1') ?>" method="POST" name='forminput'>
                            <div class="card-body">
                                <center>
                                    <h5><b>A. Background Perusahaan</b></h5>
                                </center>
                                <hr>
                                <p class="font-italic" style="font-size: 12px; text-align: right; font-weight: bold;"><b class="text-danger">*</b> : Data Harus Diisi</p>
                                <input type="hidden" name="id_permintaan" value="<?php echo $id_permintaan ?>">
                                <div class="row">
                                    <div class="col-lg-6">
                                        </label>
                                        <!-- <div class="form-group-material mt-2"> -->
                                        <!-- </div> -->
                                        <!-- <label class="form-control-label">Pemilihan User :</label>
                                            <div>
                                                <input type="radio" value="Evaluasi" id="Evaluasi" name="pemilihan_user">
                                                <label for="Evaluasi" style="font-weight: normal;">Evaluasi</label>
                                            </div>
                                            <div>
                                                <input type="radio" value="New Project" name="pemilihan_user" id="New Project">
                                                <label for="New Project" style="font-weight: normal;"> New Project</label>
                                            </div> -->
                                        <div class="form-group">
                                            <label class="form-control-label">Nama Perusahaan : <b class="text-danger">*</b></label>
                                            <!-- <p style="float: right; font-size: 10px;" class="text-danger">*Diisi Sesuai Nama</p> -->
                                            <input type="text" class="form-control" required name="nama_perusahaan" autofocus="autofocus" id="inputName" oninvalid="this.setCustomValidity('Data Harus Diisi')" oninput="setCustomValidity('')" maxlength="125">
                                        </div>
                                        <div class="form-group mt-2">
                                            <label class="form-control-label">Jumlah MP :</label>
                                            <input type="number" min="0" class="form-control" name="jumlah_mp">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Alamat Perusahaan : <b class="text-danger">*</b></label>
                                            <textarea cols="60" rows="5" maxlength="125" class="form-control" required oninvalid="this.setCustomValidity('Data Harus Diisi')" oninput="setCustomValidity('')" name="alamat_perusahaan" onKeyUp="HitungText()"></textarea> <span id="hasil" style="float: right; font-size: 12px;" class="text-danger">0/125</span>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label class="form-control-label">Kelurahan : <b class="text-danger">*</b></label>
                                            <input type="text" maxlength="125" class="form-control" required name="kelurahan" oninvalid="this.setCustomValidity('Data Harus Diisi')" oninput="setCustomValidity('')">
                                        </div>
                                        <div class="form-group mt-2">
                                            <label class="form-control-label">Kecamatan : <b class="text-danger">*</b></label>
                                            <input type="text" maxlength="125" class="form-control" required name="kecamatan" oninvalid="this.setCustomValidity('Data Harus Diisi')" oninput="setCustomValidity('')">
                                        </div>
                                        <div class="form-group mt-2">
                                            <label class="form-control-label">Kode Pos : <b class="text-danger">*</b></label>
                                            <input type="number" min="0" maxlength="125" class="form-control" required name="kode_pos" oninvalid="this.setCustomValidity('Data Harus Diisi')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Nama PIC User : <b class="text-danger">*</b></label>
                                            <input type="text" maxlength="125" class="form-control" required name="nama_pic_user" oninvalid="this.setCustomValidity('Data Harus Diisi')" oninput="setCustomValidity('')">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">No Telepon : <b class="text-danger">*</b></label>
                                            <input type="number" min="0" maxlength="125" class="form-control" required name="no_telp" oninvalid="this.setCustomValidity('Data Harus Diisi')" oninput="setCustomValidity('')">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Jenis Usaha : <b class="text-danger">*</b></label>
                                            <input type="text" maxlength="125" class="form-control" required name="jenis_usaha" oninvalid="this.setCustomValidity('Data Harus Diisi')" oninput="setCustomValidity('')">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Nama ARH : <b class="text-danger">*</b></label>
                                            <input type="text" maxlength="125" class="form-control" required name="nama_arh" oninvalid="this.setCustomValidity('Data Harus Diisi')" oninput="setCustomValidity('')">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Nama PIC Commercial:</label>
                                            <input type="text" maxlength="125" class="form-control" name="nama_pic">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <center>
                                    <h5><b>B. Man Power</b></h5>
                                </center>
                                <hr>
                                <p class="font-italic" style="font-size: 12px; text-align: right; font-weight: bold;"><b class="text-danger">*</b> : Data Harus Diisi</p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Pola Jaga : <b class="text-danger">*</b></label>
                                            <input type="text" maxlength="125" class="form-control" required name="pola_jaga" oninvalid="this.setCustomValidity('Data Harus Diisi')" oninput="setCustomValidity('')">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Jenis Seragam : <b class="text-danger">*</b></label>
                                            <input type="text" maxlength="125" class="form-control" required name="jenis_seragam" oninvalid="this.setCustomValidity('Data Harus Diisi')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Kartu tanda anggota : </label>
                                            <input type="text" maxlength="125" class="form-control" name="kta">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Pendidikan Anggota : </label>
                                            <input type="text" maxlength="125" class="form-control" name="pendidikan_anggota">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Perlengkapan :</label>
                                            <input type="text" maxlength="125" class="form-control" name="perlengkapan">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <center>
                                                <label class="form-control-label">Catatan :</label>
                                                <textarea cols="150" rows="5" maxlength="125" class="form-control" name="catatan_b"></textarea>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <center>
                                    <h5><b>C. Parimeter</b></h5>
                                </center>
                                <hr>
                                <p class="font-italic" style="font-size: 12px; text-align: right; font-weight: bold;"><b class="text-danger">*</b> : Dipilih salah satu</p>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Pagar : <b class="text-danger">*</b></label>
                                            <div>
                                                <input type="radio" id="besi" value="Besi" required name="pagar">
                                                <label for="besi" style="font-weight: normal;">Besi</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="tembok" value="Tembok" name="pagar">
                                                <label for="tembok" style="font-weight: normal;">Tembok</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="kombinasi" value="Kombinasi" name="pagar">
                                                <label for="kombinasi" style="font-weight: normal;">Kombinasi</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="form-control-label">Gate : <b class="text-danger">*</b></label>
                                        <div>
                                            <input type="radio" id="manual" value="Manual" required name="gate">
                                            <label for="manual" style="font-weight: normal;">Manual</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="otomatis" value="Otomatis" name="gate">
                                            <label for="otomatis" style="font-weight: normal;">Otomatis</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <label class="form-control-label">Penerangan : <b class="text-danger">*</b></label>
                                        <div>
                                            <input type="radio" id="ada1" value="Ada" required name="penerangan">
                                            <label for="ada1" style=" font-weight: normal;">Ada</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="tidak1" value="Tidak" name="penerangan">
                                            <label for="tidak1" style=" font-weight: normal;">Tidak</label>
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
                                                <textarea cols="150" rows="5" maxlength="125" class="form-control" name="catatan_c"></textarea>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <center>
                                    <h5><b>D. Sarana Penunjang</b></h5>
                                </center>
                                <hr>
                                <p class="font-italic" style="font-size: 12px; text-align: right; font-weight: bold;"><b class="text-danger">*</b> : Dipilih salah satu</p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Guard Tour : <b class="text-danger">*</b></label>
                                            <div>
                                                <input type="radio" id="ada2" value="Ada" required name="guard_tour" class="guard_tours">
                                                <label for="ada2" style="font-weight: normal;">Ada</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="tidak2" value="Tidak" name="guard_tour" class="guard_tours">
                                                <label for="tidak2" style="font-weight: normal;">Tidak</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Total : <b class="text-danger" id="gt_total">*</b></label>
                                            <input type="number" min="0" id="total_gt" class="form-control" name="total_1">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Handy Talky : <b class="text-danger">*</b></label>
                                            <div>
                                                <input type="radio" id="ada3" value="Ada" required name="handy_talky" class="handy_talkys">
                                                <label for="ada3" style="font-weight: normal;">Ada</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="tidak3" value="Tidak" required name="handy_talky" class="handy_talkys">
                                                <label for="tidak3" style="font-weight: normal;">Tidak</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Total : <b class="text-danger" id="ht_total">*</b></label>
                                            <input type="number" min="0" id="total_ht" class="form-control" name="total_2">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Rompi : <b class="text-danger">*</b></label>
                                            <div>
                                                <input type="radio" id="ada4" value="Ada" required name="rompi" class="rompis">
                                                <label for="ada4" style="font-weight: normal;">Ada</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="tidak4" value="Tidak" required name="rompi" class="rompis">
                                                <label for="tidak4" style="font-weight: normal;">Tidak</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Total : <b class="text-danger" id="rompi_total">*</b></label>
                                            <input type="number" min="0" id="total_rompi" class="form-control" name="total_3">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Lampu Lalin : <b class="text-danger">*</b></label>
                                            <div>
                                                <input type="radio" id="ada5" value="Ada" required name="lampu_lalin" class="lampu_lalins">
                                                <label for="ada5" style="font-weight: normal;">Ada</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="tidak5" value="Tidak" required name="lampu_lalin" class="lampu_lalins">
                                                <label for="tidak5" style="font-weight: normal;">Tidak</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Total : <b class="text-danger" id="ll_total">*</b></label>
                                            <input type="number" min="0" id="total_ll" class="form-control" name="total_4">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Metal Detector : <b class="text-danger">*</b></label>
                                            <div>
                                                <input type="radio" value="Ada" id="ada6" required name="metal_detector" class="metal_detectors">
                                                <label for="ada6" style="font-weight: normal;">Ada</label>
                                            </div>
                                            <div>
                                                <input type="radio" value="Tidak" id="tidak6" required name="metal_detector" class="metal_detectors">
                                                <label for="tidak6" style="font-weight: normal;">Tidak</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Total : <b class="text-danger" id="md_total">*</b></label>
                                            <input type="number" min="0" id="total_md" class="form-control" name="total_5">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Rambu Stop : <b class="text-danger">*</b></label>
                                            <div>
                                                <input type="radio" id="ada7" value="Ada" required name="rambu_stop" class="rambu_stops">
                                                <label for="ada7" style="font-weight: normal;">Ada</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="tidak7" value="Tidak" required name="rambu_stop" class="rambu_stops">
                                                <label for="tidak7" style="font-weight: normal;">Tidak</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Total : <b class="text-danger" id="rs_total">*</b></label>
                                            <input type="number" min="0" id="total_rs" class="form-control" name="total_6">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Miror : <b class="text-danger">*</b></label>
                                            <div>
                                                <input type="radio" id="ada8" value="Ada" required name="mirror" class="mirrors">
                                                <label for="ada8" style="font-weight: normal;">Ada</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="tidak8" value="Tidak" required name="mirror" class="mirrors">
                                                <label for="tidak8" style="font-weight: normal;">Tidak</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Total : <b class="text-danger" id="mirror_total">*</b></label>
                                            <input type="number" min="0" id="total_mirror" class="form-control" name="total_7">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">ATK : <b class="text-danger">*</b></label>
                                            <div>
                                                <input type="radio" id="ada9" value="Ada" required name="atk" class="atks">
                                                <label for="ada9" style="font-weight: normal;">Ada</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="tidak9" value="Tidak" required name="atk" class="atks">
                                                <label for="tidak9" style="font-weight: normal;">Tidak</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Deskripsi : <b class="text-danger" id="atk_total">*</b></label>
                                            <input type="text" maxlength="125" id="total_atk" class="form-control" name="deskripsi_atk">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <center>
                                                    <label class="form-control-label">Catatan :</label>
                                                    <textarea cols="150" rows="5" maxlength="125" class="form-control" name="catatan_d"></textarea>
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
                                <p class="font-italic" style="font-size: 12px; text-align: right; font-weight: bold;"><b class="text-danger">*</b> : Dipilih salah satu</p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">UMP : <b class="text-danger">*</b></label>
                                            <div>
                                                <input type="radio" id="standart1" value="Standart" required name="ump">
                                                <label for="standart1" style="font-weight: normal;">Standart</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="tidakstan1" value="Tidak Standart" name="ump">
                                                <label for="tidakstan1" style="font-weight: normal;"> Tidak Strandart</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">BPJS : <b class="text-danger">*</b></label>
                                            <div>
                                                <input type="radio" id="standart2" value="Standart" required name="bpjs">
                                                <label for="standart2" style="font-weight: normal;">Standart</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="tidakstan2" value="Tidak Standart" name="bpjs">
                                                <label for="tidakstan2" style="font-weight: normal;">Tidak Strandart</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <center>
                                                    <label class="form-control-label">Catatan :</label>
                                                    <textarea cols="150" rows="5" maxlength="125" class="form-control" name="catatan_e"></textarea>
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
                                <p class="font-italic" style="font-size: 12px; text-align: right; font-weight: bold;"><b class="text-danger">*</b> : Dipilih salah satu</p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">A. CCTV : <b class="text-danger">*</b></label>
                                            <div>
                                                <input type="radio" id="ada10" value="Ada" required name="f_cctv" class="cctvs">
                                                <label for="ada10" style="font-weight: normal;">Ada</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="tidak10" value="Tidak" required name="f_cctv" class="cctvs">
                                                <label for="tidak10" style="font-weight: normal;">Tidak</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Total : <b class="text-danger" id="cctv_total">*</b></label>
                                            <input type="number" min="0" id="total_cctv" class="form-control" name="total_1_a">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">B. Acces : <b class="text-danger">*</b></label>

                                            <div>
                                                <input type="radio" id="ada11" value="Ada" required name="f_access" class="accesss">
                                                <label for="ada11" style="font-weight: normal;">Ada</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="tidak11" value="Tidak" required name="f_access" class="accesss">
                                                <label for="tidak11" style="font-weight: normal;">Tidak</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Total : <b class="text-danger" id="access_total">*</b></label>
                                            <input type="number" min="0" id="total_access" class="form-control" name="total_1_b">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">C. Barrier : <b class="text-danger">*</b></label>
                                            <div>
                                                <input type="radio" id="ada12" value="Ada" required name="f_barrier" class="barriers">
                                                <label for="ada12" style="font-weight: normal;">Ada</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="tidak12" value="Tidak" required name="f_barrier" class="barriers">
                                                <label for="tidak12" style="font-weight: normal;">Tidak</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Total : <b class="text-danger" id="barrier_total">*</b></label>
                                            <input type="number" min="0" id="total_barrier" class="form-control" name="total_1_c">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">D. VMS : <b class="text-danger">*</b></label>
                                            <div>
                                                <input type="radio" id="ada13" value="Ada" required name="f_vms" class="vmss">
                                                <label for="ada13" style="font-weight: normal;">Ada</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="tidak13" value="Tidak" required name="f_vms" class="vmss">
                                                <label for="tidak13" style="font-weight: normal;">Tidak</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Total : <b class="text-danger" id="vms_total">*</b></label>
                                            <input type="number" min="0" id="total_vms" class="form-control" name="total_1_d">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <center>
                                                <label class="form-control-label">Catatan :</label>
                                                <textarea cols="150" rows="5" maxlength="125" class="form-control" name="catatan_f"></textarea>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a class="text-white btn btn-danger" data-dismiss="modal" aria-label="Close" href="#"><i class="fas fa-window-close"></i> Batal</a>
                                <button type="submit" class="btn btn-primary"><i class="fas fa-check-square"></i> Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Add Data SSA1 -->
<script>
    $(document).ready(function() {
        $(".guard_tours").click(function() {
            if ($("input[name='guard_tour']:checked").val() == "Tidak") {
                document.getElementById("total_gt").readOnly = true;
                document.getElementById("gt_total").style.display = "none";
                $("#total_gt").val("");
            } else {
                document.getElementById("total_gt").readOnly = false;
                document.getElementById("total_gt").required = true;
                document.getElementById("gt_total").style.display = "inline";
            }
        })
        $(".handy_talkys").click(function() {
            if ($("input[name='handy_talky']:checked").val() == "Tidak") {
                document.getElementById("total_ht").readOnly = true;
                document.getElementById("ht_total").style.display = "none";
                $("#total_ht").val("");
            } else {
                document.getElementById("total_ht").readOnly = false;
                document.getElementById("total_ht").required = true;
                document.getElementById("ht_total").style.display = "inline";
            }
        })
        $(".rompis").click(function() {
            if ($("input[name='rompi']:checked").val() == "Tidak") {
                document.getElementById("total_rompi").readOnly = true;
                document.getElementById("rompi_total").style.display = "none";
                $("#total_rompi").val("");
            } else {
                document.getElementById("total_rompi").readOnly = false;
                document.getElementById("total_rompi").required = true;
                document.getElementById("rompi_total").style.display = "inline";
            }
        })
        $(".lampu_lalins").click(function() {
            if ($("input[name='lampu_lalin']:checked").val() == "Tidak") {
                document.getElementById("total_ll").readOnly = true;
                document.getElementById("ll_total").style.display = "none";
                $("#total_ll").val("");
            } else {
                document.getElementById("total_ll").readOnly = false;
                document.getElementById("total_ll").required = true;
                document.getElementById("ll_total").style.display = "inline";
            }
        })
        $(".metal_detectors").click(function() {
            if ($("input[name='metal_detector']:checked").val() == "Tidak") {
                document.getElementById("total_md").readOnly = true;
                document.getElementById("md_total").style.display = "none";
                $("#total_md").val("");
            } else {
                document.getElementById("total_md").readOnly = false;
                document.getElementById("total_md").required = true;
                document.getElementById("md_total").style.display = "inline";
            }
        })
        $(".rambu_stops").click(function() {
            if ($("input[name='rambu_stop']:checked").val() == "Tidak") {
                document.getElementById("total_rs").readOnly = true;
                document.getElementById("rs_total").style.display = "none";
                $("#total_rs").val("");
            } else {
                document.getElementById("total_rs").readOnly = false;
                document.getElementById("total_rs").required = true;
                document.getElementById("rs_total").style.display = "inline";
            }
        })
        $(".mirrors").click(function() {
            if ($("input[name='mirror']:checked").val() == "Tidak") {
                document.getElementById("total_mirror").readOnly = true;
                document.getElementById("mirror_total").style.display = "none";
                $("#total_mirror").val("");
            } else {
                document.getElementById("total_mirror").readOnly = false;
                document.getElementById("total_mirror").required = true;
                document.getElementById("mirror_total").style.display = "inline";
            }
        })
        $(".atks").click(function() {
            if ($("input[name='atk']:checked").val() == "Tidak") {
                document.getElementById("total_atk").readOnly = true;
                document.getElementById("atk_total").style.display = "none";
                $("#total_atk").val("");
            } else {
                document.getElementById("total_atk").readOnly = false;
                document.getElementById("total_atk").required = true;
                document.getElementById("atk_total").style.display = "inline";
            }
        })
        $(".cctvs").click(function() {
            if ($("input[name='f_cctv']:checked").val() == "Tidak") {
                document.getElementById("total_cctv").readOnly = true;
                document.getElementById("cctv_total").style.display = "none";
                $("#total_cctv").val("");
            } else {
                document.getElementById("total_cctv").readOnly = false;
                document.getElementById("total_cctv").required = true;
                document.getElementById("cctv_total").style.display = "inline";
            }
        })
        $(".accesss").click(function() {
            if ($("input[name='f_access']:checked").val() == "Tidak") {
                document.getElementById("total_access").readOnly = true;
                document.getElementById("access_total").style.display = "none";
                $("#total_access").val("");
            } else {
                document.getElementById("total_access").readOnly = false;
                document.getElementById("total_access").required = true;
                document.getElementById("access_total").style.display = "inline";
            }
        })
        $(".barriers").click(function() {
            if ($("input[name='f_barrier']:checked").val() == "Tidak") {
                document.getElementById("total_barrier").readOnly = true;
                document.getElementById("barrier_total").style.display = "none";
                $("#total_barrier").val("");
            } else {
                document.getElementById("total_barrier").readOnly = false;
                document.getElementById("total_barrier").required = true;
                document.getElementById("barrier_total").style.display = "inline";
            }
        })
        $(".vmss").click(function() {
            if ($("input[name='f_vms']:checked").val() == "Tidak") {
                document.getElementById("total_vms").readOnly = true;
                document.getElementById("vms_total").style.display = "none";
                $("#total_vms").val("");
            } else {
                document.getElementById("total_vms").readOnly = false;
                document.getElementById("total_vms").required = true;
                document.getElementById("vms_total").style.display = "inline";
            }
        })
    })
</script>

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
                                                <input type="number" class="form-control" name="kode_pos" value="<?php echo $row->kode_pos ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Nama PIC User :</label>
                                                <input type="text" class="form-control" name="nama_pic_user" value="<?php echo $row->nama_pic_user ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">No Telepon :</label>
                                                <input type="number" min="0" class="form-control" name="no_telp" value="<?php echo $row->no_telp ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Jenis Usaha :</label>
                                                <input type="text" class="form-control" name="jenis_usaha" value="<?php echo $row->jenis_usaha ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Nama ARH :</label>
                                                <input type="text" class="form-control" name="nama_arh" value="<?php echo $row->nama_arh ?>" readonly>
                                            </div>
                                            <div class="form-group text-left">
                                                <label class="form-control-label">Nama PIC Commercial:</label>
                                                <input type="text" class="form-control" name="nama_pic" value="<?php if ($row->nama_pic == null) {
                                                                                                                    echo '-';
                                                                                                                } else {
                                                                                                                    echo $row->nama_pic;
                                                                                                                } ?>" readonly>
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
                                                <input type="text" class="form-control" name="kta" value="<?php if ($row->kta == null) {
                                                                                                                echo '-';
                                                                                                            } else {
                                                                                                                echo $row->kta;
                                                                                                            } ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Pendidikan Anggota :</label>
                                                <input type="text" class="form-control" name="pendidikan_anggota" value="<?php if ($row->pendidikan_anggota == null) {
                                                                                                                                echo '-';
                                                                                                                            } else {
                                                                                                                                echo $row->pendidikan_anggota;
                                                                                                                            } ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Perlengkapan :</label>
                                                <input type="text" class="form-control" name="perlengkapan" value="<?php if ($row->perlengkapan == null) {
                                                                                                                        echo '-';
                                                                                                                    } else {
                                                                                                                        echo $row->perlengkapan;
                                                                                                                    } ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <center>
                                                    <label class="form-control-label">Catatan :</label>
                                                    <textarea cols="150" rows="5" class="form-control" name="catatan_b" readonly><?php if ($row->catatan_b == null) {
                                                                                                                                        echo '-';
                                                                                                                                    } else {
                                                                                                                                        echo $row->catatan_b;
                                                                                                                                    } ?></textarea>
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
                                                <input type="text" class="form-control" name="luas_area" readonly value="<?php if ($row->luas_area == null) {
                                                                                                                                echo '-';
                                                                                                                            } else {
                                                                                                                                echo $row->luas_area;
                                                                                                                            } ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <center>
                                                    <label class="form-control-label">Catatan :</label>
                                                    <textarea cols="150" rows="5" class="form-control" readonly name="catatan_c"><?php if ($row->catatan_c == null) {
                                                                                                                                        echo '-';
                                                                                                                                    } else {
                                                                                                                                        echo $row->catatan_c;
                                                                                                                                    } ?></textarea>
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
                                                        <textarea cols="150" rows="5" class="form-control" readonly name="catatan_d"><?php if ($row->catatan_d == null) {
                                                                                                                                            echo '-';
                                                                                                                                        } else {
                                                                                                                                            echo $row->catatan_d;
                                                                                                                                        } ?></textarea>
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
                                                        <textarea cols="150" rows="5" class="form-control" readonly name="catatan_e"><?php if ($row->catatan_e == null) {
                                                                                                                                            echo '-';
                                                                                                                                        } else {
                                                                                                                                            echo $row->catatan_e;
                                                                                                                                        } ?></textarea>
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
                                                    <textarea cols="150" rows="5" class="form-control" name="catatan_f" readonly><?php if ($row->catatan_f == null) {
                                                                                                                                        echo '-';
                                                                                                                                    } else {
                                                                                                                                        echo $row->catatan_f;
                                                                                                                                    } ?></textarea>
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
    </div>
<?php } ?>
<!-- End View Data SSA1 -->

<!-- Edit Data SSA1 -->
<?php foreach ($isiS1 as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="EditSsa1Modal<?php echo $row->id_ssa1 ?>" tabindex="-1" aria-labelledby="EditSsa1ModalLabel<?php echo $row->id_ssa1 ?>" aria-hidden="true">
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
                        <div class="card">
                            <div class="card-header d-flex align-items-center bg-warning">
                                <h3 class="h4"></h3>
                            </div>
                            <form class="form-horizontal" action="<?php echo site_url('Presales/CTR_Presales/UpdateSSA1') ?>" method="POST" name='forminput1'>
                                <div class="card-body">
                                    <center>
                                        <h5><b>A. Background Perusahaan</b></h5>
                                    </center>
                                    <hr>
                                    <p class="font-italic" style="font-size: 12px; text-align: right; font-weight: bold;"><b class="text-danger">*</b> : Data Harus Diisi</p>
                                    <?php echo $this->session->flashdata('pesan2'); ?>
                                    <input type="hidden" name="created_by" value="<?php echo $row->created_by ?>">
                                    <input type="hidden" name="created_date" value="<?php echo $row->created_date ?>">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="hidden" name="id_permintaan" value="<?php echo $id_permintaan ?>">
                                                </label>
                                                <div class="form-group">
                                                    <label class="form-control-label">Nama Perusahaan : <b class="text-danger">*</b></label>
                                                    <input type="text" value="<?php echo $row->nama_perusahaan ?>" class="form-control" name="nama_perusahaan">
                                                </div>
                                                <div class="form-group mt-2">
                                                    <label class="form-control-label">Jumlah MP :</label>
                                                    <input type="number" min="0" value="<?php echo $row->jumlah_mp ?>" class="form-control" name="jumlah_mp">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label">Alamat Perusahaan : <b class="text-danger">*</b></label>
                                                    <textarea cols="60" rows="5" class="form-control" name="alamat_perusahaan" onKeyUp="HitungText1()"><?php echo $row->alamat_perusahaan ?></textarea> <span id="hasil1" style="float: right; font-size: 12px;" class="text-danger">0/125</span>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <label class="form-control-label">Kelurahan : <b class="text-danger">*</b></label>
                                                    <input type="text" class="form-control" name="kelurahan" value="<?php echo $row->kelurahan ?>">
                                                </div>
                                                <div class="form-group mt-2">
                                                    <label class="form-control-label">Kecamatan : <b class="text-danger">*</b></label>
                                                    <input type="text" class="form-control" name="kecamatan" value="<?php echo $row->kecamatan ?>">
                                                </div>
                                                <div class="form-group mt-2">
                                                    <label class="form-control-label">Kode Pos : <b class="text-danger">*</b></label>
                                                    <input type="number" min="0" class="form-control" name="kode_pos" value="<?php echo $row->kode_pos ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Nama PIC User : <b class="text-danger">*</b></label>
                                                <input type="text" class="form-control" name="nama_pic_user" value="<?php echo $row->nama_pic_user ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">No Telepon : <b class="text-danger">*</b></label>
                                                <input type="number" min="0" class="form-control" name="no_telp" value="<?php echo $row->no_telp ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Jenis Usaha : <b class="text-danger">*</b></label>
                                                <input type="text" class="form-control" name="jenis_usaha" value="<?php echo $row->jenis_usaha ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Nama ARH : <b class="text-danger">*</b></label>
                                                <input type="text" class="form-control" name="nama_arh" value="<?php echo $row->nama_arh ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Nama PIC Commercial:</label>
                                                <input type="text" class="form-control" name="nama_pic" value="<?php echo $row->nama_pic ?>">
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
                                                <label class="form-control-label">Pola Jaga : <b class="text-danger">*</b></label>
                                                <input type="text" class="form-control" name="pola_jaga" value="<?php echo $row->pola_jaga ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Jenis Seragam : <b class="text-danger">*</b></label>
                                                <input type="text" class="form-control" name="jenis_seragam" value="<?php echo $row->jenis_seragam ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Kartu tanda anggota :</label>
                                                <input type="text" class="form-control" name="kta" value="<?php echo $row->kta ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Pendidikan Anggota :</label>
                                                <input type="text" class="form-control" name="pendidikan_anggota" value="<?php echo $row->pendidikan_anggota ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Perlengkapan :</label>
                                                <input type="text" class="form-control" name="perlengkapan" value="<?php echo $row->perlengkapan ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <center>
                                                    <label class="form-control-label">Catatan :</label>
                                                    <textarea cols="150" rows="5" class="form-control" name="catatan_b"><?php echo $row->catatan_b ?></textarea>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <center>
                                        <h5><b>C.Parimeter</b></h5>
                                    </center>
                                    <hr>
                                    <p class="font-italic" style="font-size: 12px; text-align: right; font-weight: bold;"><b class="text-danger">*</b> : Data Harus Diisi</p>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label">Pagar : <b class="text-danger">*</b></label>
                                                <div>
                                                    <input type="radio" value="Besi" <?php echo ($row->pagar == 'Besi' ? 'checked' : ''); ?> id="Besi" name="pagar">
                                                    <label for="Besi" style="font-weight: normal;">Besi</label>
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tembok" <?php echo ($row->pagar == 'Tembok' ? 'checked' : ''); ?> id="Tembok" name="pagar">
                                                    <label for="Tembok" style="font-weight: normal;">Tembok</label>
                                                </div>
                                                <div>
                                                    <input type="radio" value="Kombinasi" <?php echo ($row->pagar == 'Kombinasi' ? 'checked' : ''); ?> id="Kombinasi" name="pagar">
                                                    <label for="Kombinasi" style="font-weight: normal;"> Kombinasi</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="form-control-label">Gate : <b class="text-danger">*</b></label>
                                            <div>
                                                <input type="radio" value="Manual" <?php echo ($row->gate == 'Manual' ? 'checked' : ''); ?> id="Manual" name="gate">
                                                <label for="Manual" style="font-weight: normal;">Manual</label>
                                            </div>
                                            <div>
                                                <input type="radio" value="Otomatis" <?php echo ($row->gate == 'Otomatis' ? 'checked' : ''); ?> id="Otomatis" name="gate">
                                                <label for="Otomatis" style="font-weight: normal;">Otomatis</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <label class="form-control-label">Penerangan : <b class="text-danger">*</b></label>
                                            <div>
                                                <input type="radio" value="Ada" <?php echo ($row->penerangan == 'Ada' ? 'checked' : ''); ?> id="Ada1" name="penerangan">
                                                <label for="Ada1" style="font-weight: normal;">Ada</label>
                                            </div>
                                            <div>
                                                <input type="radio" value="Tidak" <?php echo ($row->penerangan == 'Tidak' ? 'checked' : ''); ?> id="Tidak1" name="penerangan">
                                                <label for="Tidak1" style="font-weight: normal;">Tidak</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label">Luas Area :</label>
                                                <input type="text" class="form-control" name="luas_area" value="<?php echo $row->luas_area ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <center>
                                                    <label class="form-control-label">Catatan :</label>
                                                    <textarea cols="150" rows="5" class="form-control" name="catatan_c"><?php echo $row->catatan_c ?></textarea>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <center>
                                        <h5><b>D.Sarana Penunjang</b></h5>
                                    </center>
                                    <hr>
                                    <p class="font-italic" style="font-size: 12px; text-align: right; font-weight: bold;"><b class="text-danger">*</b> : Data Harus Diisi | Kosongkan Jika Tidak</p>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Guard Tour : <b class="text-danger">*</b></label>
                                                <div>
                                                    <input type="radio" value="Ada" <?php echo ($row->guard_tour == 'Ada' ? 'checked' : ''); ?> id="Ada2" name="guard_tour">
                                                    <label for="Ada2" style="font-weight: normal;">Ada</label>
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->guard_tour == 'Tidak' ? 'checked' : ''); ?> id="Tidak2" name="guard_tour">
                                                    <label for="Tidak2" style="font-weight: normal;">Tidak</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="number" min="0" class="form-control" name="total_1" value="<?php echo $row->total_1 ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Handy Talky : <b class="text-danger">*</b></label>
                                                <div>
                                                    <input type="radio" value="Ada" <?php echo ($row->handy_talky == 'Ada' ? 'checked' : ''); ?> id="Ada3" name="handy_talky">
                                                    <label for="Ada3" style="font-weight: normal;">Ada</label>
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->handy_talky == 'Tidak' ? 'checked' : ''); ?> id="Tidak3" name="handy_talky">
                                                    <label for="Tidak3" style="font-weight: normal;">Tidak</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="number" min="0" class="form-control" name="total_2" value="<?php echo $row->total_2 ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Rompi : <b class="text-danger">*</b></label>
                                                <div>
                                                    <input type="radio" value="Ada" <?php echo ($row->rompi == 'Ada' ? 'checked' : ''); ?> id="Ada4" name="rompi">
                                                    <label for="Ada4" style="font-weight: normal;">Ada</label>
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->rompi == 'Tidak' ? 'checked' : ''); ?> id="Tidak4" name="rompi">
                                                    <label for="Tidak4" style="font-weight: normal;">Tidak</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="number" min="0" class="form-control" name="total_3" value="<?php echo $row->total_3 ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Lampu Lalin : <b class="text-danger">*</b></label>
                                                <div>
                                                    <input type="radio" value="Ada" <?php echo ($row->lampu_lalin == 'Ada' ? 'checked' : ''); ?> id="Ada5" name="lampu_lalin">
                                                    <label for="Ada5" style="font-weight: normal;">Ada</label>
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->lampu_lalin == 'Tidak' ? 'checked' : ''); ?> id="Tidak5" name="lampu_lalin">
                                                    <label for="Tidak5" style="font-weight: normal;">Tidak</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="number" min="0" class="form-control" name="total_4" value="<?php echo $row->total_4 ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Metal Detector : <b class="text-danger">*</b></label>
                                                <div>
                                                    <input type="radio" value="Ada" <?php echo ($row->metal_detector == 'Ada' ? 'checked' : ''); ?> id="Ada6" name="metal_detector">
                                                    <label for="Ada6" style="font-weight: normal;">Ada</label>
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->metal_detector == 'Tidak' ? 'checked' : ''); ?> id="Tidak6" name="metal_detector">
                                                    <label for="Tidak6" style="font-weight: normal;">Tidak</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="number" min="0" class="form-control" name="total_5" value="<?php echo $row->total_5 ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Rambu Stop : <b class="text-danger">*</b></label>
                                                <div>
                                                    <input type="radio" value="Ada" <?php echo ($row->rambu_stop == 'Ada' ? 'checked' : ''); ?> id="Ada7" name="rambu_stop">
                                                    <label for="Ada7" style="font-weight: normal;">Ada</label>
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->rambu_stop == 'Tidak' ? 'checked' : ''); ?> id="Tidak7" name="rambu_stop">
                                                    <label for="Tidak7" style="font-weight: normal;">Tidak</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="number" min="0" class="form-control" name="total_6" value="<?php echo $row->total_6 ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Miror : <b class="text-danger">*</b></label>
                                                <div>
                                                    <input type="radio" value="Ada" <?php echo ($row->mirror == 'Ada' ? 'checked' : ''); ?> id="Ada8" name="mirror">
                                                    <label for="Ada8" style="font-weight: normal;">Ada</label>
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->mirror == 'Tidak' ? 'checked' : ''); ?> id="Tidak8" name="mirror">
                                                    <label for="Tidak8" style="font-weight: normal;">Tidak</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="number" min="0" class="form-control" name="total_7" value="<?php echo $row->total_7 ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">ATK : <b class="text-danger">*</b></label>
                                                <div>
                                                    <input type="radio" value="Ada" <?php echo ($row->atk == 'Ada' ? 'checked' : ''); ?> name="atk" id="Ada9">
                                                    <label for="Ada9" style="font-weight: normal;">Ada</label>
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->atk == 'Tidak' ? 'checked' : ''); ?> id="Tidak9" name="atk">
                                                    <label for="Tidak9" style="font-weight: normal;">Tidak</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Deskripsi :</label>
                                                <input type="text" class="form-control" name="deskripsi_atk" value="<?php echo $row->deskripsi_atk ?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <center>
                                                        <label class="form-control-label">Catatan :</label>
                                                        <textarea cols="150" rows="5" class="form-control" name="catatan_d"><?php echo $row->catatan_d ?></textarea>
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
                                    <p class="font-italic" style="font-size: 12px; text-align: right; font-weight: bold;"><b class="text-danger">*</b> : Data Harus Diisi</p>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label">UMP : <b class="text-danger">*</b></label>
                                                <div>
                                                    <input type="radio" value="Standart" <?php echo ($row->ump == 'Standart' ? 'checked' : ''); ?> id="Standart1" name="ump">
                                                    <label for="Standart1" style="font-weight: normal;">Standart</label>
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak Standart" <?php echo ($row->ump == 'Tidak Standart' ? 'checked' : ''); ?> id="TidakStandart1" name="ump">
                                                    <label for="TidakStandart1" style="font-weight: normal;">Tidak Standart</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label">BPJS : <b class="text-danger">*</b></label>
                                                <div>
                                                    <input type="radio" value="Standart" <?php echo ($row->bpjs == 'Standart' ? 'checked' : ''); ?> id="Standart2" name="bpjs">
                                                    <label for="Standart2" style="font-weight: normal;">Standart</label>
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak Standart" <?php echo ($row->bpjs == 'Tidak Standart' ? 'checked' : ''); ?> id="TidakStandart2" name="bpjs">
                                                    <label for="TidakStandart2" style="font-weight: normal;">Tidak Standart</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <center>
                                                        <label class="form-control-label">Catatan :</label>
                                                        <textarea cols="150" rows="5" class="form-control" name="catatan_e"><?php echo $row->catatan_e ?></textarea>
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
                                    <p class="font-italic" style="font-size: 12px; text-align: right; font-weight: bold;"><b class="text-danger">*</b> : Data Harus Diisi</p>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label">A. CCTV : <b class="text-danger">*</b></label>
                                                <div>
                                                    <input type="radio" value="Ada" <?php echo ($row->f_cctv == 'Ada' ? 'checked' : ''); ?> id="Ada10" name="f_cctv">
                                                    <label for="Ada10">Ada</label>
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->f_cctv == 'Tidak' ? 'checked' : ''); ?> id="Tidak10" name="f_cctv">
                                                    <label for="Tidak10">Tidak</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="number" min="0" class="form-control" name="total_1_a" value="<?php echo $row->total_1_a ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">B. Acces : <b class="text-danger">*</b></label>

                                                <div>
                                                    <input type="radio" value="Ada" <?php echo ($row->f_access == 'Ada' ? 'checked' : ''); ?> id="Ada11" name="f_access">
                                                    <label for="Ada11">Ada</label>
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->f_access == 'Tidak' ? 'checked' : ''); ?> id="Tidak11" name="f_access">
                                                    <label for="Tidak11">Tidak</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="number" min="0" class="form-control" name="total_1_b" value="<?php echo $row->total_1_b ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label">C. Barrier : <b class="text-danger">*</b></label>
                                                <div>
                                                    <input type="radio" value="Ada" <?php echo ($row->f_barrier == 'Ada' ? 'checked' : ''); ?> id="Ada12" name="f_barrier">
                                                    <label for="Ada12">Ada</label>
                                                </div>
                                                <div>
                                                    <input type="radio" value="Tidak" <?php echo ($row->f_barrier == 'Tidak' ? 'checked' : ''); ?> id="Tidak12" name="f_barrier">
                                                    <label for="Tidak">Tidak</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="number" min="0" class="form-control" name="total_1_c" value="<?php echo $row->total_1_c ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">D. VMS : <b class="text-danger">*</b></label>
                                                <div>
                                                    <input type="radio" value="Ada" <?php echo ($row->f_vms == 'Ada' ? 'checked' : ''); ?> id="Ada13" name="f_vms">
                                                    <label for="Ada13">Ada</label>
                                                </div>
                                                <div>
                                                    <input type="radio" Value="Tidak" <?php echo ($row->f_vms == 'Tidak' ? 'checked' : ''); ?> id="Tidak13" name="f_vms">
                                                    <label for="Tidak13">Tidak</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Total :</label>
                                                <input type="number" min="0" class="form-control" name="total_1_d" value="<?php echo $row->total_1_d ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <center>
                                                    <label class="form-control-label">Catatan :</label>
                                                    <textarea cols="150" rows="5" class="form-control" name="catatan_f"><?php echo $row->catatan_f ?></textarea>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a class="text-white btn btn-danger" data-dismiss="modal" aria-label="Close" href="#"><i class="fas fa-window-close"></i> Batal</a>
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
<!-- End Data SSA1 -->

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
<script>
    // $("input[required], select[required]").attr("oninvalid", "this.setCustomValidity('Data Harus Diisi!')");
    // $("input[required], select[required]").attr("oninput", "setCustomValidity('')");
    $(document).ready(function() {
        $("#ssa1Modal").on('shown.bs.modal', function() {
            $(this).find('#inputName').focus();
        });
    });

    function HitungText() {
        var Teks = document.forminput.alamat_perusahaan.value.length;
        var total = document.getElementById('hasil');
        total.innerHTML = Teks + '/125';
    }

    function HitungText1() {
        var Teks = document.forminput1.alamat_perusahaan.value.length;
        var total = document.getElementById('hasil1');
        total.innerHTML = Teks + '/125';
    }
</script>