<!-- Tambah Data Device -->
<div class="modal fade" data-backdrop="static" id="deviceModal" tabindex="-1" aria-labelledby="deviceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Device</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body modal-xl">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center bg-primary">
                                <h3 class="h4"></h3>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" action="<?php echo site_url('Presales/CTR_Presales/SimpanDevice') ?>" method="POST" style="overflow: auto;">
                                    <div class="mb-3">
                                        <h3>A. CCTV</h3>
                                    </div>
                                    <p class="font-italic" style="font-size: 12px; text-align: right; font-weight: bold;"><b class="text-danger">*</b> : Data Harus Diisi</p>
                                    <table class="table table-responsive">
                                        <tbody>
                                            <div class="form-group-material mt-2">
                                                <input type="hidden" name="id_permintaan" value="<?php echo $id_permintaan ?>">
                                                </label>
                                            </div>
                                            <tr>
                                                <td>
                                                    <div class="status text-center mb-3 font-weight-bold">
                                                        Apakah Perusahaan sudah ada CCTV <b class="text-danger">*</b>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-center">
                                                            Ada<br>
                                                            <input type="radio" value="Ada" class="read1" name="sudah_ada_cctv" required>
                                                        </div>
                                                        <div class="col-sm-6 text-center">
                                                            Tidak Ada<br>
                                                            <input type="radio" value="Tidak" class="read1" name="sudah_ada_cctv" required>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group text-center">
                                                        <p class="mb-3 font-weight-bold">Berapa Banyak <b class="text-danger" id="banyak_cctv">*</b></p>
                                                        <input type="number" id="berapa_cctv" min="0" class="form-control form-control-sm" name="berapa_cctv">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group text-center font-weight-bold">
                                                        <p class="mb-3">Merk CCTV <b class="text-danger" id="cctv_merk">*</b></p>
                                                        <input type="text" id="merk_cctv" class="form-control form-control-sm" name="merk_cctv">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group text-center font-weight-bold">
                                                        <p class="mb-3">Type CCTV <b class="text-danger" id="cctv_type">*</b></p>
                                                        <input type="text" id="type_cctv" class="form-control form-control-sm" name="type_cctv">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="status text-center mb-3 font-weight-bold">
                                                        Apabila CCTV sudah terpasang apakah perlu tambahan <b class="text-danger">*</b>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-center">
                                                            Perlu<br>
                                                            <input type="radio" class="read2" value="Perlu" name="tambahan_cctv" required>
                                                        </div>
                                                        <div class="col-sm-6 text-center">
                                                            Tidak Perlu<br>
                                                            <input type="radio" class="read2" value="Tidak Perlu" name="tambahan_cctv">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group text-center font-weight-bold">
                                                        <p class="mb-3">Berapa Banyak <b class="text-danger" id="banyak_cctv1">*</b></p>
                                                        <input type="number" id="berapa_tambahan_cctv" min="0" class="form-control form-control-sm" name="berapa_tambahan_cctv">
                                                    </div>
                                                </td>
                                                <td colspan="2">
                                                    <div class="form-group text-center font-weight-bold">
                                                        <p class="mb-3">Catatan Tambahan</p>
                                                        <textarea class="form-control" id="catatan_1" rows="4" name="catatan_1"></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="status text-center mb-3 font-weight-bold">
                                                        Apakah selama ini CCTV mengalami kendala <b class="text-danger">*</b>
                                                    </div>
                                                    <div class=" row">
                                                        <div class="col-sm-6 text-center">
                                                            Ada<br>
                                                            <input type="radio" value="Ada" name="kendala_cctv" class="read3" required>
                                                        </div>
                                                        <div class="col-sm-6 text-center">
                                                            Tidak Ada<br>
                                                            <input type="radio" value="Tidak Ada" name="kendala_cctv" class="read3">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group text-center font-weight-bold">
                                                        <p class="mb-3">Seberapa Sering <b class="text-danger" id="seberapa_sering">*</b></p>
                                                        <input type="number" min="0" class="form-control form-control-sm" name="berapa_sering_kendala" id="berapa_sering_kendala">
                                                    </div>
                                                </td>
                                                <td colspan="2">
                                                    <div class="form-group text-center font-weight-bold">
                                                        <p class="mb-3">Catatan Tambahan</p>
                                                        <textarea class="form-control" rows="4" name="catatan_2" id="catatan_2"></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="status text-center mb-3 font-weight-bold">
                                                        Apakah CCTV di monitoring oleh petugas keamanan&nbsp;<b class="text-danger">*</b>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-center">
                                                            Ya<br>
                                                            <input type="radio" value="Ya" name="monitoring_cctv" class="read4" required>
                                                        </div>
                                                        <div class="col-sm-6 text-center">
                                                            Tidak<br>
                                                            <input type="radio" value="Tidak" name="monitoring_cctv" class="read4">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group text-center font-weight-bold">
                                                        <p>Jumlah Petugas <b class="text-danger" id="banyak_petugas">*</b></p>
                                                        <input type="number" min="0" class="form-control form-control-sm" name="jumlah_petugas" id="jumlah_petugas">
                                                    </div>
                                                    <div class="form-group text-center font-weight-bold">
                                                        <p class="mb-3">Jumlah Layar Monitoring&nbsp;<b class="text-danger" id="banyak_monitoring">*</b></p>
                                                        <input type="number" min="0" class="form-control form-control-sm" name="jumlah_monitor" id="jumlah_monitor">
                                                    </div>
                                                </td>
                                                <td colspan="2">
                                                    <div class="form-group text-center font-weight-bold">
                                                        <p class="mb-3">Catatan</p>
                                                        <textarea class="form-control" rows="4" name="catatan_3" id="catatan_3"></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table><br>
                                    <label class="col form-control-label mb-4 text-center">
                                        <h3>Fitur Khusus</h3>
                                    </label>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td style="vertical-align: middle;">
                                                    <div class="status text-center mb-3 font-weight-bold">
                                                        Apakah CCTV sudah berfungsi sebagai pengukur suhu tubuh <b class="text-danger">*</b>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-center">
                                                            Sudah<br>
                                                            <input type="radio" value="Sudah" name="cctv_suhu_tubuh" required>
                                                        </div>
                                                        <div class="col-sm-6 text-center">
                                                            Belum<br>
                                                            <input type="radio" value="Belum" name="cctv_suhu_tubuh">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td rowspan="5">
                                                    <div class="form-group text-center font-weight-bold">
                                                        <p class="mb-3">Catatan Tambahan</p>
                                                        <textarea class="form-control" rows="16" name="catatan_4"></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle;">
                                                    <div class="status text-center mb-3 font-weight-bold">
                                                        Apakah CCTV sudah berfungsi sebagai penghitung orang <b class="text-danger">*</b>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-center">
                                                            Sudah<br>
                                                            <input type="radio" value="Sudah" name="cctv_hitung_orang" required>
                                                        </div>
                                                        <div class="col-sm-6 text-center">
                                                            Belum<br>
                                                            <input type="radio" value="Belum" name="cctv_hitung_orang">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle;">
                                                    <div class="status text-center mb-3 font-weight-bold">
                                                        Apakah CCTV sudah berfungsi sebagai HEAT MAP <b class="text-danger">*</b>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-center">
                                                            Sudah<br>
                                                            <input type="radio" value="Sudah" name="cctv_heat_map" required>
                                                        </div>
                                                        <div class="col-sm-6 text-center">
                                                            Belum<br>
                                                            <input type="radio" value="Belum" name="cctv_heat_map">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle;">
                                                    <div class="status text-center mb-3 font-weight-bold">
                                                        Apakah CCTV sudah berfungsi sebagai face recognize <b class="text-danger">*</b>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-center">
                                                            Sudah<br>
                                                            <input type="radio" value="Sudah" name="cctv_face_recognize" required>
                                                        </div>
                                                        <div class="col-sm-6 text-center">
                                                            Belum<br>
                                                            <input type="radio" value="Belum" name="cctv_face_recognize">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle;">
                                                    <div class="status text-center mb-3 font-weight-bold">
                                                        Apakah CCTV sudah berfungsi sebagai line crossing/alarm <b class="text-danger">*</b>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-center">
                                                            Sudah<br>
                                                            <input type="radio" value="Sudah" name="cctv_line_crossing" required>
                                                        </div>
                                                        <div class="col-sm-6 text-center">
                                                            Belum<br>
                                                            <input type="radio" value="Belum" name="cctv_line_crossing">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <h3>B. Access Control</h3>
                                </div>
                                <p class="font-italic" style="font-size: 12px; text-align: right; font-weight: bold;"><b class="text-danger">*</b> : Data Harus Diisi</p>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="status text-center mb-3 font-weight-bold">
                                                    Apakah Perusahaan sudah memiliki access control <b class="text-danger">*</b>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 text-center">
                                                        Ada<br>
                                                        <input type="radio" value="Ada" name="memiliki_access_control" class="read5" required>
                                                    </div>
                                                    <div class="col-sm-6 text-center">
                                                        Tidak Ada<br>
                                                        <input type="radio" value="Tidak Ada" name="memiliki_access_control" class="read5">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group text-center font-weight-bold">
                                                    <p class="mb-3">Berapa Banyak <b class="text-danger" id="banyak_access">*</b></p>
                                                    <input type="number" min="0" class="form-control form-control-sm" name="berapa_access" id="berapa_access">
                                                </div>
                                            </td>
                                            <td>
                                                <div class=" form-group text-center font-weight-bold">
                                                    <p class="mb-3">Merk Access Control <b class="text-danger" id="banyak_merk_access">*</b></p>
                                                    <input type="text" class="form-control form-control-sm" name="merk_access" id="merk_access">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 250px">
                                                <div class="status text-center mb-3 font-weight-bold">
                                                    Apakah access control yang sudah terpasang terintegrasi dengan sistem lain <b class="text-danger">*</b>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 text-center">
                                                        Sudah<br>
                                                        <input type="radio" value="Sudah" name="access_terintegrasi" required>
                                                    </div>
                                                    <div class="col-sm-6 text-center">
                                                        Belum<br>
                                                        <input type="radio" value="Belum" name="access_terintegrasi">
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <div class="form-group text-center font-weight-bold">
                                                    <p class="mb-3">Catatan</p>
                                                    <textarea class="form-control" rows="4" name="catatan_5"></textarea>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table><br>
                                <label class="col form-control-label mb-3 text-center">
                                    <h3>Fitur Khusus</h3>
                                </label>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td style="vertical-align: middle;">
                                                <div class="status text-center mb-4 font-weight-bold">
                                                    Saat ini access control digunakan dengan <b class="text-danger">*</b>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3 text-center">
                                                        Access Card<br>
                                                        <input type="radio" value="Access Card" name="access_digunakan_dengan" required>
                                                    </div>
                                                    <div class="col-sm-3 text-center">
                                                        Finger<br>
                                                        <input type="radio" value="Finger" name="access_digunakan_dengan">
                                                    </div>
                                                    <div class="col-sm-3 text-center">
                                                        Face Recognize<br>
                                                        <input type="radio" value="Face Recognize" name="access_digunakan_dengan">
                                                    </div>
                                                    <div class="col-sm-3 text-center">
                                                        Face Recognize + Thermal<br>
                                                        <input type="radio" value="Face Recognize + Thermal" name="access_digunakan_dengan">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <td>
                                            <div class="form-group text-center font-weight-bold">
                                                <div class="text-center mb-3">
                                                    Catatan
                                                </div>
                                                <textarea class="form-control" rows="7" name="catatan_6"></textarea>
                                            </div>
                                        </td>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <label class="col form-control-label mb-4">
                                        <h3>C. Teknis Pemasangan</h3>
                                    </label>
                                </div>
                                <p class="font-italic" style="font-size: 12px; text-align: right; font-weight: bold;"><b class="text-danger">*</b> : Data Harus Diisi</p>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="status text-center mb-3 font-weight-bold">
                                                    Topologi jaringan sudah fibel optik <b class="text-danger">*</b>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 text-center">
                                                        Sudah<br>
                                                        <input type="radio" value="Sudah" name="topologi_fibel_optik" required>
                                                    </div>
                                                    <div class="col-sm-6 text-center">
                                                        Belum<br>
                                                        <input type="radio" value="Belum" name="topologi_fibel_optik">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="status text-center mb-3 font-weight-bold">
                                                    Apakah jaringan berdiri sendiri atau tidak <b class="text-danger">*</b>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 text-center">
                                                        Ya<br>
                                                        <input type="radio" value="Ya" name="jaringan_berdiri_sendiri" required>
                                                    </div>
                                                    <div class="col-sm-6 text-center">
                                                        Tidak<br>
                                                        <input type="radio" value="Tidak" name="jaringan_berdiri_sendiri">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="form-group">
                                                    <div class="text-center mb-3 font-weight-bold">
                                                        <h4>
                                                            Catatan & Summary Keseluruhan
                                                        </h4>
                                                    </div>
                                                    <textarea class="form-control" rows="6" name="catatan_7"></textarea>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="line"></div>
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
</div>
<!-- End Data Device -->
<!-- View Data Device -->
<?php foreach ($isiDDetail as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="ViewDeviceModal<?php echo $row->id_device ?>" tabindex="-1" aria-labelledby="ViewDeviceModalLabel<?php echo $row->id_device ?>" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Device</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body modal-xl">
                    <div class="row">
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
                                        <h6><?php if ($row->nama_modified == null) { ?>
                                                -
                                            <?php } else {
                                                echo $row->nama_modified;
                                            } ?></h6>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="">Modified Date</label>
                                        <h6>
                                            <?php if ($row->modified_date == null) { ?>
                                                -
                                            <?php } else {
                                                echo date('d F Y H:i:s', strtotime($row->modified_date));
                                            } ?></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header d-flex align-items-center bg-cyan">
                                    <h3 class="h4"></h3>
                                </div>
                                <div class="card-body">
                                    <form class="form-horizontal" action="<?php echo site_url('Presales/CTR_Presales/SimpanDevice') ?>" method="POST" style="overflow: auto;">
                                        <div class="mb-3">
                                            <h3>A. CCTV</h3>
                                        </div>
                                        <table class="table table-responsive">
                                            <tbody>
                                                <div class="form-group-material mt-2">
                                                    <input type="hidden" name="id_permintaan" value="<?php echo $id_permintaan ?>">
                                                    </label>
                                                </div>
                                                <tr>
                                                    <td>
                                                        <div class="status text-center mb-3 font-weight-bold">
                                                            Apakah Perusahaan sudah ada CCTV
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6 text-center">
                                                                Ada<br>
                                                                <input type="radio" value="Ada" disabled <?php echo ($row->sudah_ada_cctv == 'Ada' ? 'checked' : ''); ?> name="sudah_ada_cctv">
                                                            </div>
                                                            <div class="col-sm-6 text-center">
                                                                Tidak Ada<br>
                                                                <input type="radio" value="Tidak" disabled <?php echo ($row->sudah_ada_cctv == 'Tidak' ? 'checked' : ''); ?> name="sudah_ada_cctv">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group text-center">
                                                            <p class="mb-3 font-weight-bold">Berapa Banyak</p>
                                                            <input type="number" min="0" class="form-control form-control-sm" readonly value="<?php echo $row->berapa_cctv ?>" name="berapa_cctv">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group text-center font-weight-bold">
                                                            <p class="mb-3">Merk CCTV</p>
                                                            <input type="text" class="form-control form-control-sm" readonly value="<?php if ($row->merk_cctv == null) {
                                                                                                                                        echo '-';
                                                                                                                                    } else {
                                                                                                                                        echo $row->merk_cctv;
                                                                                                                                    } ?>" name="merk_cctv">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group text-center font-weight-bold">
                                                            <p class="mb-3">Type CCTV</p>
                                                            <input type="text" class="form-control form-control-sm" readonly value="<?php if ($row->type_cctv == null) {
                                                                                                                                        echo '-';
                                                                                                                                    } else {
                                                                                                                                        echo $row->type_cctv;
                                                                                                                                    } ?>" name="type_cctv">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="status text-center mb-3 font-weight-bold">
                                                            Apabila CCTV sudah terpasang apakah perlu tambahan
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6 text-center">
                                                                Perlu<br>
                                                                <input type="radio" value="Perlu" disabled <?php echo ($row->tambahan_cctv == 'Perlu' ? 'checked' : ''); ?> name="tambahan_cctv">
                                                            </div>
                                                            <div class="col-sm-6 text-center">
                                                                Tidak Perlu<br>
                                                                <input type="radio" value="Tidak Perlu" disabled <?php echo ($row->tambahan_cctv == 'Tidak Perlu' ? 'checked' : ''); ?> name="tambahan_cctv">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group text-center font-weight-bold">
                                                            <p class="mb-3">Berapa Banyak</p>
                                                            <input type="number" min="0" class="form-control form-control-sm" readonly value="<?php echo $row->berapa_tambahan_cctv ?>" name="berapa_tambahan_cctv">
                                                        </div>
                                                    </td>
                                                    <td colspan="2">
                                                        <div class="form-group text-center font-weight-bold">
                                                            <p class="mb-3">Catatan Tambahan</p>
                                                            <textarea class="form-control" rows="4" readonly name="catatan_1"><?php if ($row->catatan_1 == null) {
                                                                                                                                    echo '-';
                                                                                                                                } else {
                                                                                                                                    echo $row->catatan_1;
                                                                                                                                } ?></textarea>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="status text-center mb-3 font-weight-bold"">
                                                        Apakah selama ini CCTV mengalami kendala
                                                    </div>
                                                    <div class=" row">
                                                            <div class="col-sm-6 text-center">
                                                                Ada<br>
                                                                <input type="radio" value="Ada" disabled <?php echo ($row->kendala_cctv == 'Ada' ? 'checked' : ''); ?> name="kendala_cctv">
                                                            </div>
                                                            <div class="col-sm-6 text-center">
                                                                Tidak Ada<br>
                                                                <input type="radio" value="Tidak Ada" disabled <?php echo ($row->kendala_cctv == 'Tidak Ada' ? 'checked' : ''); ?> name="kendala_cctv">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group text-center font-weight-bold">
                                                            <p class="mb-3">Seberapa Sering</p>
                                                            <input type="number" min="0" class="form-control form-control-sm" readonly value="<?php echo $row->berapa_sering_kendala ?>" name="berapa_sering_kendala">
                                                        </div>
                                                    </td>
                                                    <td colspan="2">
                                                        <div class="form-group text-center font-weight-bold">
                                                            <p class="mb-3">Catatan Tambahan</p>
                                                            <textarea class="form-control" rows="4" readonly name="catatan_2"><?php if ($row->catatan_2 == null) {
                                                                                                                                    echo '-';
                                                                                                                                } else {
                                                                                                                                    echo $row->catatan_2;
                                                                                                                                } ?></textarea>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="status text-center mb-3 font-weight-bold">
                                                            Apakah CCTV di monitoring oleh petugas keamanan
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6 text-center">
                                                                Ya<br>
                                                                <input type="radio" value="Ya" disabled <?php echo ($row->monitoring_cctv == 'Ya' ? 'checked' : ''); ?> name="monitoring_cctv">
                                                            </div>
                                                            <div class="col-sm-6 text-center">
                                                                Tidak<br>
                                                                <input type="radio" value="Tidak" disabled <?php echo ($row->monitoring_cctv == 'Tidak' ? 'checked' : ''); ?> name="monitoring_cctv">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group text-center font-weight-bold">
                                                            <p>Jumlah Petugas</p>
                                                            <input type="number" min="0" class="form-control form-control-sm" readonly name="jumlah_petugas" value="<?php echo $row->jumlah_petugas ?>">
                                                        </div>
                                                        <div class="form-group text-center font-weight-bold">
                                                            <p class="mb-3">Jumlah Layar Monitoring</p>
                                                            <input type="number" min="0" class="form-control form-control-sm" readonly name="jumlah_monitor" value="<?php echo $row->jumlah_monitor ?>">
                                                        </div>
                                                    </td>
                                                    <td colspan="2">
                                                        <div class="form-group text-center font-weight-bold">
                                                            <p class="mb-3">Catatan</p>
                                                            <textarea class="form-control" rows="4" readonly name="catatan_3"><?php if ($row->catatan_3 == null) {
                                                                                                                                    echo '-';
                                                                                                                                } else {
                                                                                                                                    echo $row->catatan_3;
                                                                                                                                } ?></textarea>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table><br>
                                        <label class="col form-control-label mb-4 text-center">
                                            <h3>Fitur Khusus</h3>
                                        </label>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td style="vertical-align: middle;">
                                                        <div class="status text-center mb-3 font-weight-bold">
                                                            Apakah CCTV sudah berfungsi sebagai pengukur suhu tubuh
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6 text-center">
                                                                Sudah<br>
                                                                <input type="radio" value="Sudah" disabled <?php echo ($row->cctv_suhu_tubuh == 'Sudah' ? 'checked' : ''); ?> name="cctv_suhu_tubuh">
                                                            </div>
                                                            <div class="col-sm-6 text-center">
                                                                Belum<br>
                                                                <input type="radio" value="Belum" disabled <?php echo ($row->cctv_suhu_tubuh == 'Belum' ? 'checked' : ''); ?> name="cctv_suhu_tubuh">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td rowspan="5">
                                                        <div class="form-group text-center font-weight-bold">
                                                            <p class="mb-3">Catatan Tambahan</p>
                                                            <textarea class="form-control" rows="16" readonly name="catatan_4"><?php if ($row->catatan_4 == null) {
                                                                                                                                    echo '-';
                                                                                                                                } else {
                                                                                                                                    echo $row->catatan_4;
                                                                                                                                } ?></textarea>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align: middle;">
                                                        <div class="status text-center mb-3 font-weight-bold">
                                                            Apakah CCTV sudah berfungsi sebagai penghitung orang
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6 text-center">
                                                                Sudah<br>
                                                                <input type="radio" value="Sudah" disabled <?php echo ($row->cctv_hitung_orang == 'Sudah' ? 'checked' : ''); ?> name="cctv_hitung_orang">
                                                            </div>
                                                            <div class="col-sm-6 text-center">
                                                                Belum<br>
                                                                <input type="radio" value="Belum" disabled <?php echo ($row->cctv_hitung_orang == 'Belum' ? 'checked' : ''); ?> name="cctv_hitung_orang">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align: middle;">
                                                        <div class="status text-center mb-3 font-weight-bold">
                                                            Apakah CCTV sudah berfungsi sebagai HEAT MAP
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6 text-center">
                                                                Sudah<br>
                                                                <input type="radio" value="Sudah" disabled <?php echo ($row->cctv_heat_map == 'Sudah' ? 'checked' : ''); ?> name="cctv_heat_map">
                                                            </div>
                                                            <div class="col-sm-6 text-center">
                                                                Belum<br>
                                                                <input type="radio" value="Belum" disabled <?php echo ($row->cctv_heat_map == 'Belum' ? 'checked' : ''); ?> name="cctv_heat_map">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align: middle;">
                                                        <div class="status text-center mb-3 font-weight-bold">
                                                            Apakah CCTV sudah berfungsi sebagai face recognize
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6 text-center">
                                                                Sudah<br>
                                                                <input type="radio" value="Sudah" disabled <?php echo ($row->cctv_face_recognize == 'Sudah' ? 'checked' : ''); ?> name="cctv_face_recognize">
                                                            </div>
                                                            <div class="col-sm-6 text-center">
                                                                Belum<br>
                                                                <input type="radio" value="Belum" disabled <?php echo ($row->cctv_face_recognize == 'Belum' ? 'checked' : ''); ?> name="cctv_face_recognize">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align: middle;">
                                                        <div class="status text-center mb-3 font-weight-bold">
                                                            Apakah CCTV sudah berfungsi sebagai line crossing/alarm
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6 text-center">
                                                                Sudah<br>
                                                                <input type="radio" value="Sudah" disabled <?php echo ($row->cctv_line_crossing == 'Sudah' ? 'checked' : ''); ?> name="cctv_line_crossing">
                                                            </div>
                                                            <div class="col-sm-6 text-center">
                                                                Belum<br>
                                                                <input type="radio" value="Belum" disabled <?php echo ($row->cctv_line_crossing == 'Belum' ? 'checked' : ''); ?> name="cctv_line_crossing">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <h3>B. Access Control</h3>
                                    </div>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="status text-center mb-3 font-weight-bold">
                                                        Apakah Perusahaan sudah memiliki access control
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-center">
                                                            Ada<br>
                                                            <input type="radio" value="Ada" disabled <?php echo ($row->memiliki_access_control == 'Ada' ? 'checked' : ''); ?> name="memiliki_access_control">
                                                        </div>
                                                        <div class="col-sm-6 text-center">
                                                            Tidak Ada<br>
                                                            <input type="radio" value="Tidak Ada" disabled <?php echo ($row->memiliki_access_control == 'Tidak Ada' ? 'checked' : ''); ?> name="memiliki_access_control">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group text-center font-weight-bold">
                                                        <p class="mb-3">Berapa Banyak</p>
                                                        <input type="number" min="0" class="form-control form-control-sm" readonly value="<?php echo $row->berapa_access ?>" name="berapa_access">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group text-center font-weight-bold">
                                                        <p class="mb-3">Merk Access Control</p>
                                                        <input type="text" class="form-control form-control-sm" readonly value="<?php if ($row->merk_access == null) {
                                                                                                                                    echo '-';
                                                                                                                                } else {
                                                                                                                                    echo $row->merk_access;
                                                                                                                                } ?>" name="merk_access">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 250px">
                                                    <div class="status text-center mb-3 font-weight-bold">
                                                        Apakah access control yang sudah terpasang terintegrasi dengan sistem lain
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-center">
                                                            Sudah<br>
                                                            <input type="radio" value="Sudah" disabled <?php echo ($row->access_terintegrasi == 'Sudah' ? 'checked' : ''); ?> name="access_terintegrasi">
                                                        </div>
                                                        <div class="col-sm-6 text-center">
                                                            Belum<br>
                                                            <input type="radio" value="Belum" disabled <?php echo ($row->access_terintegrasi == 'Belum' ? 'checked' : ''); ?> name="access_terintegrasi">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td colspan="2">
                                                    <div class="form-group text-center font-weight-bold">
                                                        <p class="mb-3">Catatan</p>
                                                        <textarea class="form-control" readonly rows="4" name="catatan_5"><?php if ($row->catatan_5 == null) {
                                                                                                                                echo '-';
                                                                                                                            } else {
                                                                                                                                echo $row->catatan_5;
                                                                                                                            } ?></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table><br>
                                    <label class="col form-control-label mb-3 text-center">
                                        <h3>Fitur Khusus</h3>
                                    </label>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td style="vertical-align: middle;">
                                                    <div class="status text-center mb-4 font-weight-bold">
                                                        Saat ini access control digunakan dengan
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-3 text-center">
                                                            Access Card<br>
                                                            <input type="radio" value="Access Card" disabled <?php echo ($row->access_digunakan_dengan == 'Access Card' ? 'checked' : ''); ?> name="access_digunakan_dengan">
                                                        </div>
                                                        <div class="col-sm-3 text-center">
                                                            Finger<br>
                                                            <input type="radio" value="Finger" disabled <?php echo ($row->access_digunakan_dengan == 'Finger' ? 'checked' : ''); ?> name="access_digunakan_dengan">
                                                        </div>
                                                        <div class="col-sm-3 text-center">
                                                            Face Recognize<br>
                                                            <input type="radio" value="Face Recognize" disabled <?php echo ($row->access_digunakan_dengan == 'Face Recognize' ? 'checked' : ''); ?> name="access_digunakan_dengan">
                                                        </div>
                                                        <div class="col-sm-3 text-center">
                                                            Face Recognize + Thermal<br>
                                                            <input type="radio" value="Face Recognize + Thermal" disabled <?php echo ($row->access_digunakan_dengan == 'Face Recognize + Thermal' ? 'checked' : ''); ?> name="access_digunakan_dengan">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <td>
                                                <div class="form-group text-center font-weight-bold">
                                                    <div class="text-center mb-3">
                                                        Catatan
                                                    </div>
                                                    <textarea class="form-control" rows="7" readonly name="catatan_6"><?php if ($row->catatan_6 == null) {
                                                                                                                            echo '-';
                                                                                                                        } else {
                                                                                                                            echo $row->catatan_6;
                                                                                                                        } ?></textarea>
                                                </div>
                                            </td>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <label class="col form-control-label mb-4">
                                            <h3>C. Teknis Pemasangan</h3>
                                        </label>
                                    </div>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="status text-center mb-3 font-weight-bold">
                                                        Topologi jaringan sudah fibel optik
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-center">
                                                            Sudah<br>
                                                            <input type="radio" value="Sudah" disabled <?php echo ($row->topologi_fibel_optik == 'Sudah' ? 'checked' : ''); ?> name="topologi_fibel_optik">
                                                        </div>
                                                        <div class="col-sm-6 text-center">
                                                            Belum<br>
                                                            <input type="radio" value="Belum" disabled <?php echo ($row->topologi_fibel_optik == 'Belum' ? 'checked' : ''); ?> name="topologi_fibel_optik">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="status text-center mb-3 font-weight-bold">
                                                        Apakah jaringan berdiri sendiri atau tidak
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-center">
                                                            Ya<br>
                                                            <input type="radio" value="Ya" disabled <?php echo ($row->jaringan_berdiri_sendiri == 'Ya' ? 'checked' : ''); ?> name="jaringan_berdiri_sendiri">
                                                        </div>
                                                        <div class="col-sm-6 text-center">
                                                            Tidak<br>
                                                            <input type="radio" value="Tidak" disabled <?php echo ($row->jaringan_berdiri_sendiri == 'Tidak' ? 'checked' : ''); ?> name="jaringan_berdiri_sendiri">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div class="form-group">
                                                        <div class="text-center mb-3 font-weight-bold">
                                                            <h4>
                                                                Catatan & Summary Keseluruhan
                                                            </h4>
                                                        </div>
                                                        <textarea class="form-control" rows="6" readonly name="catatan_7"><?php if ($row->catatan_7 == null) {
                                                                                                                                echo '-';
                                                                                                                            } else {
                                                                                                                                echo $row->catatan_7;
                                                                                                                            } ?></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="line"></div>
                                <div class="modal-footer">
                                    <a class="text-white btn btn-danger" data-dismiss="modal" aria-label="Close" href="#"><i class="fas fa-window-close"></i> Tutup</a>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- View Data Device -->

<!-- Edit Data Device -->
<?php foreach ($isiD as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="EditDeviceModal<?php echo $row->id_device ?>" tabindex="-1" aria-labelledby="EditDeviceModalLabel<?php echo $row->id_device ?>" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Device</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body modal-xl">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header d-flex align-items-center bg-warning">
                                    <h3 class="h4"></h3>
                                </div>
                                <div class="card-body">
                                    <form class="form-horizontal" action="<?php echo site_url('Presales/CTR_Presales/UpdateDevice') ?>" method="POST" style="overflow: auto;">
                                        <div class="mb-3">
                                            <h3>A. CCTV</h3>
                                        </div>
                                        <p class="font-italic" style="font-size: 12px; text-align: right; font-weight: bold;"><b class="text-danger">*</b> : Data Harus Diisi | Kosongkan Jika Tidak</p>
                                        <table class="table table-responsive">
                                            <tbody>
                                                <div class="form-group-material mt-2">
                                                    <input type="hidden" name="id_permintaan" value="<?php echo $id_permintaan ?>">
                                                    </label>
                                                    <input type="hidden" name="created_by" value="<?php echo $row->created_by ?>">
                                                    </label>
                                                    <input type="hidden" name="created_date" value="<?php echo $row->created_date ?>">
                                                </div>
                                                <tr>
                                                    <td>
                                                        <div class="status text-center mb-3 font-weight-bold">
                                                            Apakah Perusahaan sudah ada CCTV <b class="text-danger">*</b>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6 text-center">
                                                                Ada<br>
                                                                <input type="radio" value="Ada" <?php echo ($row->sudah_ada_cctv == 'Ada' ? 'checked' : ''); ?> name="sudah_ada_cctv" class="read1">
                                                            </div>
                                                            <div class="col-sm-6 text-center">
                                                                Tidak Ada<br>
                                                                <input type="radio" value="Tidak" <?php echo ($row->sudah_ada_cctv == 'Tidak' ? 'checked' : ''); ?> name="sudah_ada_cctv" class="read1">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group text-center">
                                                            <p class="mb-3 font-weight-bold">Berapa Banyak</p>
                                                            <input type="number" min="0" class="form-control form-control-sm" value="<?php echo $row->berapa_cctv ?>" name="berapa_cctv" id="berapa_cctv">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group text-center font-weight-bold">
                                                            <p class="mb-3">Merk CCTV</p>
                                                            <input type="text" class="form-control form-control-sm" value="<?php echo $row->merk_cctv ?>" name="merk_cctv">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group text-center font-weight-bold">
                                                            <p class="mb-3">Type CCTV</p>
                                                            <input type="text" class="form-control form-control-sm" value="<?php echo $row->type_cctv ?>" name="type_cctv">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="status text-center mb-3 font-weight-bold">
                                                            Apabila CCTV sudah terpasang apakah perlu tambahan <b class="text-danger">*</b>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6 text-center">
                                                                Perlu<br>
                                                                <input type="radio" value="Perlu" <?php echo ($row->tambahan_cctv == 'Perlu' ? 'checked' : ''); ?> name="tambahan_cctv">
                                                            </div>
                                                            <div class="col-sm-6 text-center">
                                                                Tidak Perlu<br>
                                                                <input type="radio" value="Tidak Perlu" <?php echo ($row->tambahan_cctv == 'Tidak Perlu' ? 'checked' : ''); ?> name="tambahan_cctv">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group text-center font-weight-bold">
                                                            <p class="mb-3">Berapa Banyak</p>
                                                            <input type="number" min="0" class="form-control form-control-sm" value="<?php echo $row->berapa_tambahan_cctv ?>" name="berapa_tambahan_cctv">
                                                        </div>
                                                    </td>
                                                    <td colspan="2">
                                                        <div class="form-group text-center font-weight-bold">
                                                            <p class="mb-3">Catatan Tambahan</p>
                                                            <textarea class="form-control" rows="4" name="catatan_1"><?php echo $row->catatan_1 ?></textarea>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="status text-center mb-3 font-weight-bold">
                                                            Apakah selama ini CCTV mengalami kendala <b class="text-danger">*</b>
                                                        </div>
                                                        <div class=" row">
                                                            <div class="col-sm-6 text-center">
                                                                Ada<br>
                                                                <input type="radio" value="Ada" <?php echo ($row->kendala_cctv == 'Ada' ? 'checked' : ''); ?> name="kendala_cctv">
                                                            </div>
                                                            <div class="col-sm-6 text-center">
                                                                Tidak Ada<br>
                                                                <input type="radio" value="Tidak Ada" <?php echo ($row->kendala_cctv == 'Tidak Ada' ? 'checked' : ''); ?> name="kendala_cctv">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group text-center font-weight-bold">
                                                            <p class="mb-3">Seberapa Sering</p>
                                                            <input type="number" min="0" class="form-control form-control-sm" value="<?php echo $row->berapa_sering_kendala ?>" name="berapa_sering_kendala">
                                                        </div>
                                                    </td>
                                                    <td colspan="2">
                                                        <div class="form-group text-center font-weight-bold">
                                                            <p class="mb-3">Catatan Tambahan</p>
                                                            <textarea class="form-control" rows="4" name="catatan_2"><?php echo $row->catatan_2 ?></textarea>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="status text-center mb-3 font-weight-bold">
                                                            Apakah CCTV di monitoring oleh petugas keamanan&nbsp;<b class="text-danger">*</b>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6 text-center">
                                                                Ya<br>
                                                                <input type="radio" value="Ya" <?php echo ($row->monitoring_cctv == 'Ya' ? 'checked' : ''); ?> name="monitoring_cctv">
                                                            </div>
                                                            <div class="col-sm-6 text-center">
                                                                Tidak<br>
                                                                <input type="radio" value="Tidak" <?php echo ($row->monitoring_cctv == 'Tidak' ? 'checked' : ''); ?> name="monitoring_cctv">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group text-center font-weight-bold">
                                                            <p>Jumlah Petugas</p>
                                                            <input type="number" min="0" class="form-control form-control-sm" name="jumlah_petugas" value="<?php echo $row->jumlah_petugas ?>">
                                                        </div>
                                                        <div class="form-group text-center font-weight-bold">
                                                            <p class="mb-3">Jumlah Layar Monitoring</p>
                                                            <input type="number" min="0" class="form-control form-control-sm" name="jumlah_monitor" value="<?php echo $row->jumlah_monitor ?>">
                                                        </div>
                                                    </td>
                                                    <td colspan="2">
                                                        <div class="form-group text-center font-weight-bold">
                                                            <p class="mb-3">Catatan</p>
                                                            <textarea class="form-control" rows="4" name="catatan_3"><?php echo $row->catatan_3 ?></textarea>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table><br>
                                        <label class="col form-control-label mb-4 text-center">
                                            <h3>Fitur Khusus</h3>
                                        </label>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td style="vertical-align: middle;">
                                                        <div class="status text-center mb-3 font-weight-bold">
                                                            Apakah CCTV sudah berfungsi sebagai pengukur suhu tubuh <b class="text-danger">*</b>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6 text-center">
                                                                Sudah<br>
                                                                <input type="radio" value="Sudah" <?php echo ($row->cctv_suhu_tubuh == 'Sudah' ? 'checked' : ''); ?> name="cctv_suhu_tubuh">
                                                            </div>
                                                            <div class="col-sm-6 text-center">
                                                                Belum<br>
                                                                <input type="radio" value="Belum" <?php echo ($row->cctv_suhu_tubuh == 'Belum' ? 'checked' : ''); ?> name="cctv_suhu_tubuh">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td rowspan="5">
                                                        <div class="form-group text-center font-weight-bold">
                                                            <p class="mb-3">Catatan Tambahan</p>
                                                            <textarea class="form-control" rows="16" name="catatan_4"><?php echo $row->catatan_4 ?></textarea>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align: middle;">
                                                        <div class="status text-center mb-3 font-weight-bold">
                                                            Apakah CCTV sudah berfungsi sebagai penghitung orang <b class="text-danger">*</b>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6 text-center">
                                                                Sudah<br>
                                                                <input type="radio" value="Sudah" <?php echo ($row->cctv_hitung_orang == 'Sudah' ? 'checked' : ''); ?> name="cctv_hitung_orang">
                                                            </div>
                                                            <div class="col-sm-6 text-center">
                                                                Belum<br>
                                                                <input type="radio" value="Belum" <?php echo ($row->cctv_hitung_orang == 'Belum' ? 'checked' : ''); ?> name="cctv_hitung_orang">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align: middle;">
                                                        <div class="status text-center mb-3 font-weight-bold">
                                                            Apakah CCTV sudah berfungsi sebagai HEAT MAP <b class="text-danger">*</b>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6 text-center">
                                                                Sudah<br>
                                                                <input type="radio" value="Sudah" <?php echo ($row->cctv_heat_map == 'Sudah' ? 'checked' : ''); ?> name="cctv_heat_map">
                                                            </div>
                                                            <div class="col-sm-6 text-center">
                                                                Belum<br>
                                                                <input type="radio" value="Belum" <?php echo ($row->cctv_heat_map == 'Belum' ? 'checked' : ''); ?> name="cctv_heat_map">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align: middle;">
                                                        <div class="status text-center mb-3 font-weight-bold">
                                                            Apakah CCTV sudah berfungsi sebagai face recognize <b class="text-danger">*</b>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6 text-center">
                                                                Sudah<br>
                                                                <input type="radio" value="Sudah" <?php echo ($row->cctv_face_recognize == 'Sudah' ? 'checked' : ''); ?> name="cctv_face_recognize">
                                                            </div>
                                                            <div class="col-sm-6 text-center">
                                                                Belum<br>
                                                                <input type="radio" value="Belum" <?php echo ($row->cctv_face_recognize == 'Belum' ? 'checked' : ''); ?> name="cctv_face_recognize">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align: middle;">
                                                        <div class="status text-center mb-3 font-weight-bold">
                                                            Apakah CCTV sudah berfungsi sebagai line crossing/alarm <b class="text-danger">*</b>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6 text-center">
                                                                Sudah<br>
                                                                <input type="radio" value="Sudah" <?php echo ($row->cctv_line_crossing == 'Sudah' ? 'checked' : ''); ?> name="cctv_line_crossing">
                                                            </div>
                                                            <div class="col-sm-6 text-center">
                                                                Belum<br>
                                                                <input type="radio" value="Belum" <?php echo ($row->cctv_line_crossing == 'Belum' ? 'checked' : ''); ?> name="cctv_line_crossing">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <h3>B. Access Control</h3>
                                    </div>
                                    <p class="font-italic" style="font-size: 12px; text-align: right; font-weight: bold;"><b class="text-danger">*</b> : Data Harus Diisi</p>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="status text-center mb-3 font-weight-bold">
                                                        Apakah Perusahaan sudah memiliki access control <b class="text-danger">*</b>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-center">
                                                            Ada<br>
                                                            <input type="radio" value="Ada" <?php echo ($row->memiliki_access_control == 'Ada' ? 'checked' : ''); ?> name="memiliki_access_control">
                                                        </div>
                                                        <div class="col-sm-6 text-center">
                                                            Tidak Ada<br>
                                                            <input type="radio" value="Tidak Ada" <?php echo ($row->memiliki_access_control == 'Tidak Ada' ? 'checked' : ''); ?> name="memiliki_access_control">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group text-center font-weight-bold">
                                                        <p class="mb-3">Berapa Banyak</p>
                                                        <input type="number" min="0" class="form-control form-control-sm" value="<?php echo $row->berapa_access ?>" name="berapa_access">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group text-center font-weight-bold">
                                                        <p class="mb-3">Merk Access Control</p>
                                                        <input type="text" class="form-control form-control-sm" value="<?php echo $row->merk_access ?>" name="merk_access">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 250px">
                                                    <div class="status text-center mb-3 font-weight-bold">
                                                        Apakah access control yang sudah terpasang terintegrasi dengan sistem lain <b class="text-danger">*</b>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-center">
                                                            Sudah<br>
                                                            <input type="radio" value="Sudah" <?php echo ($row->access_terintegrasi == 'Sudah' ? 'checked' : ''); ?> name="access_terintegrasi">
                                                        </div>
                                                        <div class="col-sm-6 text-center">
                                                            Belum<br>
                                                            <input type="radio" value="Belum" <?php echo ($row->access_terintegrasi == 'Belum' ? 'checked' : ''); ?> name="access_terintegrasi">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td colspan="2">
                                                    <div class="form-group text-center font-weight-bold">
                                                        <p class="mb-3">Catatan</p>
                                                        <textarea class="form-control" rows="4" name="catatan_5"><?php echo $row->catatan_5 ?></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table><br>
                                    <label class="col form-control-label mb-3 text-center">
                                        <h3>Fitur Khusus</h3>
                                    </label>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td style="vertical-align: middle;">
                                                    <div class="status text-center mb-4 font-weight-bold">
                                                        Saat ini access control digunakan dengan <b class="text-danger">*</b>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-3 text-center">
                                                            Access Card<br>
                                                            <input type="radio" value="Access Card" <?php echo ($row->access_digunakan_dengan == 'Access Card' ? 'checked' : ''); ?> name="access_digunakan_dengan">
                                                        </div>
                                                        <div class="col-sm-3 text-center">
                                                            Finger<br>
                                                            <input type="radio" value="Finger" <?php echo ($row->access_digunakan_dengan == 'Finger' ? 'checked' : ''); ?> name="access_digunakan_dengan">
                                                        </div>
                                                        <div class="col-sm-3 text-center">
                                                            Face Recognize<br>
                                                            <input type="radio" value="Face Recognize" <?php echo ($row->access_digunakan_dengan == 'Face Recognize' ? 'checked' : ''); ?> name="access_digunakan_dengan">
                                                        </div>
                                                        <div class="col-sm-3 text-center">
                                                            Face Recognize + Thermal<br>
                                                            <input type="radio" value="Face Recognize + Thermal" <?php echo ($row->access_digunakan_dengan == 'Face Recognize + Thermal' ? 'checked' : ''); ?> name="access_digunakan_dengan">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <td>
                                                <div class="form-group text-center font-weight-bold">
                                                    <div class="text-center mb-3">
                                                        Catatan
                                                    </div>
                                                    <textarea class="form-control" rows="7" name="catatan_6"><?php echo $row->catatan_6 ?></textarea>
                                                </div>
                                            </td>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <label class="col form-control-label mb-4">
                                            <h3>C. Teknis Pemasangan</h3>
                                        </label>
                                    </div>
                                    <p class="font-italic" style="font-size: 12px; text-align: right; font-weight: bold;"><b class="text-danger">*</b> : Data Harus Diisi</p>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="status text-center mb-3 font-weight-bold">
                                                        Topologi jaringan sudah fibel optik <b class="text-danger">*</b>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-center">
                                                            Sudah<br>
                                                            <input type="radio" value="Sudah" <?php echo ($row->topologi_fibel_optik == 'Sudah' ? 'checked' : ''); ?> name="topologi_fibel_optik">
                                                        </div>
                                                        <div class="col-sm-6 text-center">
                                                            Belum<br>
                                                            <input type="radio" value="Belum" <?php echo ($row->topologi_fibel_optik == 'Belum' ? 'checked' : ''); ?> name="topologi_fibel_optik">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="status text-center mb-3 font-weight-bold">
                                                        Apakah jaringan berdiri sendiri atau tidak <b class="text-danger">*</b>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-center">
                                                            Ya<br>
                                                            <input type="radio" value="Ya" <?php echo ($row->jaringan_berdiri_sendiri == 'Ya' ? 'checked' : ''); ?> name="jaringan_berdiri_sendiri">
                                                        </div>
                                                        <div class="col-sm-6 text-center">
                                                            Tidak<br>
                                                            <input type="radio" value="Tidak" <?php echo ($row->jaringan_berdiri_sendiri == 'Tidak' ? 'checked' : ''); ?> name="jaringan_berdiri_sendiri">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div class="form-group">
                                                        <div class="text-center mb-3 font-weight-bold">
                                                            <h4>
                                                                Catatan & Summary Keseluruhan
                                                            </h4>
                                                        </div>
                                                        <textarea class="form-control" rows="6" name="catatan_7"><?php echo $row->catatan_7 ?></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="line"></div>
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
    </div>
<?php } ?>
<!-- Edit Data Device -->

<!-- Print PDF Device -->
<?php $no = 1;
foreach ($isiD as $row) { ?>
    <div class="modal fade" data-backdrop="static" id="printDeviceModal<?php echo $row->id_device ?>" tabindex="-1" aria-labelledby="printDeviceModalLabel<?php echo $row->id_device ?>" aria-hidden="true">
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
                        <form class="form-horizontal" action="<?php echo site_url('CTR_Laporan/PrintDevice/' . $row->id_permintaan) ?>" method="POST">
                            <div class="card-body">
                                <input type="hidden" name="id_device" value="<?php echo $row->id_device ?>" id="">
                                <div class="text-center mb-4">
                                    <h3>Print Survey Device ?</h3>
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
    $(document).ready(function() {
        $(".read1").click(function() {
            if ($("input[name='sudah_ada_cctv']:checked").val() == "Tidak") {
                document.getElementById("berapa_cctv").readOnly = true;
                document.getElementById("merk_cctv").readOnly = true;
                document.getElementById("type_cctv").readOnly = true;
                document.getElementById("banyak_cctv").style.display = "none";
                document.getElementById("cctv_merk").style.display = "none";
                document.getElementById("cctv_type").style.display = "none";
                $("#berapa_cctv").val("");
                $("#merk_cctv").val("");
                $("#type_cctv").val("");
            } else {
                document.getElementById("berapa_cctv").readOnly = false;
                document.getElementById("merk_cctv").readOnly = false;
                document.getElementById("type_cctv").readOnly = false;
                document.getElementById("berapa_cctv").required = true;
                document.getElementById("merk_cctv").required = true;
                document.getElementById("type_cctv").required = true;
                document.getElementById("banyak_cctv").style.display = "inline";
                document.getElementById("cctv_merk").style.display = "inline";
                document.getElementById("cctv_type").style.display = "inline";
            }
        })
        $(".read2").click(function() {
            if ($("input[name='tambahan_cctv']:checked").val() == "Tidak Perlu") {
                document.getElementById("berapa_tambahan_cctv").readOnly = true;
                document.getElementById("catatan_1").readOnly = true;
                document.getElementById("banyak_cctv1").style.display = "none";
                $("#berapa_tambahan_cctv").val("");
                $("#catatan_1").val("");
            } else {
                document.getElementById("berapa_tambahan_cctv").readOnly = false;
                document.getElementById("catatan_1").readOnly = false;
                document.getElementById("berapa_tambahan_cctv").required = true;
                document.getElementById("banyak_cctv1").style.display = "inline";
            }
        })
        $(".read3").click(function() {
            if ($("input[name='kendala_cctv']:checked").val() == "Tidak Ada") {
                document.getElementById("berapa_sering_kendala").readOnly = true;
                document.getElementById("catatan_2").readOnly = true;
                document.getElementById("seberapa_sering").style.display = "none";
                $("#berapa_sering_kendala").val("");
                $("#catatan_2").val("");
            } else {
                document.getElementById("berapa_sering_kendala").readOnly = false;
                document.getElementById("catatan_2").readOnly = false;
                document.getElementById("berapa_sering_kendala").required = true;
                document.getElementById("seberapa_sering").style.display = "inline";
            }
        })
        $(".read4").click(function() {
            if ($("input[name='monitoring_cctv']:checked").val() == "Tidak") {
                document.getElementById("jumlah_petugas").readOnly = true;
                document.getElementById("jumlah_monitor").readOnly = true;
                document.getElementById("catatan_3").readOnly = true;
                document.getElementById("banyak_petugas").style.display = "none";
                document.getElementById("banyak_monitoring").style.display = "none";
                $("#jumlah_petugas").val("");
                $("#jumlah_monitor").val("");
                $("#catatan_3").val("");
            } else {
                document.getElementById("jumlah_petugas").readOnly = false;
                document.getElementById("jumlah_monitor").readOnly = false;
                document.getElementById("catatan_3").readOnly = false;
                document.getElementById("jumlah_petugas").required = true;
                document.getElementById("jumlah_monitor").required = true;
                document.getElementById("banyak_petugas").style.display = "inline";
                document.getElementById("banyak_monitoring").style.display = "inline";
            }
        })
        $(".read5").click(function() {
            if ($("input[name='memiliki_access_control']:checked").val() == "Tidak Ada") {
                document.getElementById("berapa_access").readOnly = true;
                document.getElementById("merk_access").readOnly = true;
                document.getElementById("banyak_access").style.display = "none";
                document.getElementById("banyak_merk_access").style.display = "none";
                $("#berapa_access").val("");
                $("#merk_access").val("");
            } else {
                document.getElementById("berapa_access").readOnly = false;
                document.getElementById("merk_access").readOnly = false;
                document.getElementById("berapa_access").required = true;
                document.getElementById("merk_access").required = true;
                document.getElementById("banyak_access").style.display = "inline";
                document.getElementById("banyak_merk_access").style.display = "inline";
            }
        })
    })
</script>