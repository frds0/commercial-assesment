<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Ceklis</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Presales/CTR_Admin') ?>">Home</a></li>
                        <li class="breadcrumb-item active"><a href="<?php echo site_url('Kasie/CTR_Kasie') ?>">Laporan</a></li>
                        <li class="breadcrumb-item active"><a href="<?php echo site_url('Kasie/CTR_Kasie/Detail') ?>">Daftar Assesment</a></li>
                        <li class="breadcrumb-item active">Form Ceklis</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h3 class="h4">Tabel Survey</h3>
            </div>
            <div class="card-body" style="overflow: auto;">
                <form class="form-horizontal" action="<?php echo site_url('Presales/CTR_Admin/SimpanCeklis') ?>" method="POST">
                    <?php foreach ($isiC as $row) { ?>
                        <table class="table table-bordered table-hover table-sm">
                            <thead class="text-center">
                                <tr>
                                    <th class="align-middle" rowspan="2">Aspek</th>
                                    <th class="align-middle" rowspan="2" readonly colspan="2">Assesment Requirements</th>
                                    <th colspan="2">Kondisi</th>
                                    <th class="align-middle" rowspan="2">Keterangan</th>
                                <tr>
                                    <td>Ada</td>
                                    <td>Tidak</td>
                                </tr>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Nomor 1 -->
                                <tr>
                                    <th scope="row" readonly class="text-center" style="vertical-align: middle;" rowspan="40">1</th>
                                    <td style="vertical-align: middle;" rowspan="4">Pagar</td>
                                    <td>Bahan Kontruksi pagar cukup kokoh (Besi, Tembok, Permanent atau Semi Permanent)</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_1)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_1"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo ($row->ceklis_1 == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_1"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_1" value="<?php echo explode("`", $row->ceklis_1)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Tinggi Minimal 3 Meter</td>
                                    <td class="align-middle text-center"><input id="ada2" type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_2)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_2"></td>
                                    <td class="align-middle text-center"><input id="tidak2" type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_2)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_2"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_2" value="<?php echo explode("`", $row->ceklis_2)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Terdapat Kawat Berduri bagian atas dengan tinggi minimal 50cm</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_3)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_3"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_3)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_3"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_3" value="<?php echo explode("`", $row->ceklis_3)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Pagar terhalang tanaman yang menempel</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_4)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_4"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_4)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_4"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_4" value="<?php echo explode("`", $row->ceklis_4)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;" rowspan="6">Pintu Gerbang</td>
                                </tr>
                                <tr>
                                    <td>Tinggi harus sama dan sulit dipanjat pandangan tidak boleh terhalang</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_5)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_5"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_5)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_5"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_5" value="<?php echo explode("`", $row->ceklis_5)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Pandangan tidak boleh terhalang</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_6)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_6"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_6)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_6"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_6" value="<?php echo explode("`", $row->ceklis_6)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Pada saat gerbang tidak terbuka harus aman dari masuknya orang-orang yang tidak memiliki otorisasi</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_7)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_7"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_7)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_7"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_7" value="<?php echo explode("`", $row->ceklis_7)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Jika berengsel harus berdesign mencegah engsel terangkat</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_8)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_8"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_8)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_8"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_8" value="<?php echo explode("`", $row->ceklis_8)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Terdapat pemisah untuk kendaraan dan pejalan kaki</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_9)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_9"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_9)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_9"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_9" value="<?php echo explode("`", $row->ceklis_9)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;" rowspan="4">Posko Security</td>
                                </tr>
                                <tr>
                                    <td>Posisi posko terletak pada posisi taktis dan strategis dalam segi keamanan</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_10)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_10"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_10)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_10"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_10" value="<?php echo explode("`", $row->ceklis_10)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Adanya penetapan bentuk design, kelengkapan pos dan penempatan pos yang ditentukan atas hasil analisis risiko</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_11)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_11"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_11)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_11"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_11" value="<?php echo explode("`", $row->ceklis_11)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Terdapat ruang confidential (Monitoring CCTV, Ruang Investigasi dll</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_12)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_12"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_12)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_12"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_12" value="<?php echo explode("`", $row->ceklis_12)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;" rowspan="4">Pos Security</td>
                                </tr>
                                <tr>
                                    <td>Posisi Jaga terletak pada posisi taktis dan strategis dalam segi keamanan</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_13)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_13"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_13)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_13"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_13" value="<?php echo explode("`", $row->ceklis_13)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Adanya penetapan bentuk design, kelengkapan pos dan penempatan pos yang ditentukan atas hasil analisa resiko</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_14)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_14"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_14)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_14"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_14" value="<?php echo explode("`", $row->ceklis_14)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Konstruksi bangunan bagus, layak dan aman untuk dapat digunakan ruang pengawasan harus tertutup terhindar dari perubahan cuaca seperti panas dan hujan</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_15)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_15"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_15)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_15"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_15" value="<?php echo explode("`", $row->ceklis_15)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;" rowspan="6">Lampu penerangan gerbang pagar dan pintu jaga</td>
                                </tr>
                                <tr>
                                    <td>Seluruh perimeter lampu menyala, dikedua sisi pagar</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_16)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_16"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_16)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_16"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_16" value="<?php echo explode("`", $row->ceklis_16)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Penerangan cukup untuk memungkinkan deteksi gerakan manusia</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_17)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_17"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_17)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_17"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_17" value="<?php echo explode("`", $row->ceklis_17)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Adanya penerangan yang baik untuk rute penjaga di dalam pagar</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_18)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_18"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_18)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_18"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_18" value="<?php echo explode("`", $row->ceklis_18)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Penerangan dapat membantu fungsi monitoring CCTV</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_19)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_19"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_19)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_19"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_19" value="<?php echo explode("`", $row->ceklis_19)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Adanya sumber daya tambahan untuk penerangan</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_20)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_20"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_20)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_20"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_20" value="<?php echo explode("`", $row->ceklis_20)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;" rowspan="4">Rambu dan Tanda Petunjuk</td>
                                </tr>
                                <tr>
                                    <td>Terdapat rambu-rambu dan petunjuk di setiap aktifitas keamanan pos</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_21)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_21"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_21)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_21"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_21" value="<?php echo explode("`", $row->ceklis_21)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Perusahaan memiliki jadwal dan daftar pemeriksaan dan pemeliharaan rambu dan tanda petunjuk</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_22)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_22"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_22)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_22"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_22" value="<?php echo explode("`", $row->ceklis_22)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Letak rambu-rambu memnuhi kebutuhan dan pemenmpatannya cukup taktis dan strategis</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_23)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_23"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_23)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_23"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_23" value="<?php echo explode("`", $row->ceklis_23)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;" rowspan="4">Security device dan teknologi (Barier, Acces door, Alarm, CCTV Monitoring dll)</td>
                                </tr>
                                <tr>
                                    <td>Terdapat layout letak System Device dan Teknologi yang ada di instalasi System Device dan Teknologi aktif saat digunakan</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_24)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_24"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_24)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_24"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_24" value="<?php echo explode("`", $row->ceklis_24)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Terdapat manual book terkait pengoprasian system Device dan Teknologi</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_25)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_25"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_25)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_25"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_25" value="<?php echo explode("`", $row->ceklis_25)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Dilakukan training pelatihan untuk security yang mengoperasikan system Device dan Teknologi</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_26)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_26"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_26)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_26"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_26" value="<?php echo explode("`", $row->ceklis_26)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;" rowspan="4">Sumber Daya Listrik dan Cadangan</td>
                                </tr>
                                <tr>
                                    <td>Terdapat mekanisme pengawasan orang yang masuk area tersebut</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_27)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_27"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_27)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_27"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_27" value="<?php echo explode("`", $row->ceklis_27)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Ada mekanisme pengawasan orang yang masuk area tersebut</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_28)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_28"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_28)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_28"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_28" value="<?php echo explode("`", $row->ceklis_28)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Sumber daya listrik cadangan dapat digunakan dalam keadaan darurat</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_29)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_29"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_29)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_29"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_29" value="<?php echo explode("`", $row->ceklis_29)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;" rowspan="4">Sarana dan Perlengkapan Patroli</td>
                                </tr>
                                <tr>
                                    <td>Perusahaan mempunyai sarana dan perlengkapan patroli yang digunakan setiap hari untuk menunjang fungsi tugas patroli security dilapangan</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_30)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_30"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_30)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_30"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_30" value="<?php echo explode("`", $row->ceklis_30)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Peralatan dan jenis kendaraan yang digunakan sesuai dengan fungsinya</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_31)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_31"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_31)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_31"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_31" value="<?php echo explode("`", $row->ceklis_31)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Gorong-gorong aman dan dapat menangkal penerobosan air dari luar</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_32)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_32"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_32)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_32"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_32" value="<?php echo explode("`", $row->ceklis_32)[1] ?>"></td>
                                </tr>
                                <!-- End 1 -->

                                <!-- Nomor 2 -->
                                <tr>
                                    <th scope="row" readonly class="text-center" style="vertical-align: middle;" rowspan="23">2</th>
                                    <td style="vertical-align: middle;" rowspan="4">Pelaksanaan Patroli</td>
                                    <td>Perusahaan mempunyai SOP mengenai pelaksanaan tugas patroli</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_33)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_33"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_33)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_33"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_33" value="<?php echo explode("`", $row->ceklis_33)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Mempunyai alat perlengkapan dan sarana penunjang (Kendaraan, Guard Tour Patrol, Ceklist Patrol dll)</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_34)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_34"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_34)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_34"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_34" value="<?php echo explode("`", $row->ceklis_34)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Setiap petugas kemanan memiliki jadwal patroli harian (rutin dan acak) yang ditandatangani oleh user</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_35)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_35"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_35)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_35"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_35" value="<?php echo explode("`", $row->ceklis_35)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Pelaporan patroli dibuat sesuai mekanisme yang ada setiap harinya</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_36)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_36"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_36)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_36"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_36" value="<?php echo explode("`", $row->ceklis_36)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;" rowspan="3">Pengawasan dan pengendalian pekerja / karyawan</td>
                                </tr>
                                <tr>
                                    <td>Perusahaan mempunyai SOP Pengawasan prakerja / karyawan seperti pemeriksaan tanda pengenal, APD kesehatan, body checking dll</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_37)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_37"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_37)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_37"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_37" value="<?php echo explode("`", $row->ceklis_37)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Mempunyai aktivitas kedatangan dan kepulangan tamu yang terkomentasikan baik manual maupun system</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_38)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_38"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_38)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_38"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_38" value="<?php echo explode("`", $row->ceklis_38)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;" rowspan="3">Pengawasan dan pengendalian tamu</td>
                                </tr>
                                <tr>
                                    <td>Perusahaan mempunyai SOP Pengawasan tamu seperti pemeriksaan tanda pengenal dan visitor, APD kesehatan, body checking dll</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_39)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_39"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_39)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_39"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_39" value="<?php echo explode("`", $row->ceklis_39)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Mempunyai aktivitas kedatangan dan kepulangan tamu yang terkomentasikan baik manual maupun system</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_40)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_40"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_40)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_40"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_40" value="<?php echo explode("`", $row->ceklis_40)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;" rowspan="5">pengawasan dan pengendalian keluar masuk barang</td>
                                </tr>
                                <tr>
                                    <td>Perusahaan memiliki SOP pelaskanaan pengawasan keluar masuk barang</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_41)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_41"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_41)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_41"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_41" value="<?php echo explode("`", $row->ceklis_41)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Proses pelaksanaan pengawasan terdokumentasi sesuai mekanisme perusahaan</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_42)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_42"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_42)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_42"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_42" value="<?php echo explode("`", $row->ceklis_42)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Adanya proses laporan yang dilaporkan secara rutin baik harian, mingguan atau bulanan</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_43)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_43"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_43)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_43"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_43" value="<?php echo explode("`", $row->ceklis_43)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Bukti surat jalan barang yang di dokumentasikan dan di simpan</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_44)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_44"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_44)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_44"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_44" value="<?php echo explode("`", $row->ceklis_44)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;" rowspan="3">Pengamanan dokumen dan informasi</td>
                                </tr>
                                <tr>
                                    <td>Perusahaan memiliki SOP untuk pengamanan dokumen dan informasi</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_45)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_45"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_45)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_45"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_45" value="<?php echo explode("`", $row->ceklis_45)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Mempunyai pengendalian dokumen dan informasi (tahapan distribusi dan penerimaan dokumen</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_46)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_46"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_46)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_46"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_46" value="<?php echo explode("`", $row->ceklis_46)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;" rowspan="5">Pengawasan Kunci</td>
                                </tr>
                                <tr>
                                    <td>Perusahaan memiliki SOP pengawasan dan distribusi kunci-kunci</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_47)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_47"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_47)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_47"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_47" value="<?php echo explode("`", $row->ceklis_47)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Kunci mempunyai spesifikasi dan dipisahkan sesuai dengan fungsinya</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_48)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_48"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_48)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_48"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_48" value="<?php echo explode("`", $row->ceklis_48)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Kunci mempunyai ruangan khusus atau penyimpanan khusus ditempat yang aman</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_49)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_49"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_49)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_49"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_49" value="<?php echo explode("`", $row->ceklis_49)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Proses pemakaian dan peminjaman kunci harus terdokumentasi</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_50)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_50"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_50)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_50"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_50" value="<?php echo explode("`", $row->ceklis_50)[1] ?>"></td>
                                </tr>
                                <!-- End 2 -->

                                <!-- Nomor 3 -->
                                <tr>
                                    <th scope="row" readonly class="text-center" style="vertical-align: middle;" rowspan="2">3</th>
                                    <td style="vertical-align: middle;" rowspan="2">Kebijakan Management Pengamanan</td>
                                    <td>Ada Management security policy minimal di level direksi</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_51)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_51"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_51)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_51"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_51" value="<?php echo explode("`", $row->ceklis_51)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Policy harus di tempel di tempat yang strategis, terlihat dan dapat dibaca oleh semua orang</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_52)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_52"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_52)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_52"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_52" value="<?php echo explode("`", $row->ceklis_52)[1] ?>"></td>
                                </tr>
                                <!-- End 3 -->

                                <!-- Nomor 4 -->
                                <tr>
                                    <th scope="row" readonly class="text-center" style="vertical-align: middle;" rowspan="6">4</th>
                                    <td style="vertical-align: middle;" rowspan="3">Program Comdev dan CSR Perusahaan</td>
                                    <td>Ada keterlibatan security dalam pelaksanaan program Comdev dan CSR</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_53)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_53"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_53)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_53"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_53" value="<?php echo explode("`", $row->ceklis_53)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Adanya kusioner terkait program CSR untuk mengevaluasi program yang dijalankan</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_54)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_54"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_54)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_54"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_54" value="<?php echo explode("`", $row->ceklis_54)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Kegiatan program CSR di dokumentasikan</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_55)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_55"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_55)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_55"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_55" value="<?php echo explode("`", $row->ceklis_55)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;" rowspan="3">Koordinasi dengan aparat keamanan</td>
                                    <td>Perusahaan mempunyai SOP terkait Koodrdinasi dengan aparat keamanan di wilayah perusahaan</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_56)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_56"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_56)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_56"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_56" value="<?php echo explode("`", $row->ceklis_56)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Daftar nama-nama aparat terkait dan institusi di simpan di posko security</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_57)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_57"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_57)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_57"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_57" value="<?php echo explode("`", $row->ceklis_57)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Ada laporan terkait pelaksanaan koordinasi termasuk update informasi kemanan wilayah</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_58)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_58"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_58)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_58"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_58" value="<?php echo explode("`", $row->ceklis_58)[1] ?>"></td>
                                </tr>
                                <!-- End 4 -->

                                <!-- Nomor 5 -->
                                <tr>
                                    <th scope="row" readonly class="text-center" style="vertical-align: middle;" rowspan="3">5</th>
                                    <td style="vertical-align: middle;" rowspan="3">SOP dan intruksi kerja</td>
                                    <td>Dokumen kontrol SOP, IK kerja dan form - form pendukung lengkap terdapat nomor dokumennya di filling baik hardcopy maupun softcopy</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_59)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_59"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_59)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_59"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_59" value="<?php echo explode("`", $row->ceklis_59)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>SOP, IK kerja dan form - form pendukung disahkan dan ditandatangani oleh Management terkait</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_60)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_60"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_60)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_60"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_60" value="<?php echo explode("`", $row->ceklis_60)[1] ?>"></td>
                                </tr>
                                <tr>
                                    <td>SOP, IK kerja dan form - form pendukung ditempel pada pos - pos pennjagaan untuk memastikan fungsi tugas pengamanan berjalan</td>
                                    <td class="align-middle text-center"><input type="radio" value="Ada" <?php echo (explode("`", $row->ceklis_61)[0] == 'Ada' ? 'checked' : ''); ?> disabled name="ceklis_61"></td>
                                    <td class="align-middle text-center"><input type="radio" value="Tidak" <?php echo (explode("`", $row->ceklis_61)[0] == 'Tidak' ? 'checked' : ''); ?> disabled name="ceklis_61"></td>
                                    <td><input type="text" readonly class="form-control" name="keterangan_61" value="<?php echo explode("`", $row->ceklis_61)[1] ?>"></td>
                                </tr>
                                <!-- End 5 -->
                            </tbody>
                        </table>
                        <div class="line"></div>
                        <div class="form-group row">
                            <div class="col-sm-12 text-center">
                                <a class="text-white btn btn-primary" href="<?php echo site_url('Kasie/CTR_Kasie/Detail') ?>">Back</a>
                            </div>
                        </div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>