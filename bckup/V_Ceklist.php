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
								<li class="breadcrumb-item"><a href="<?php echo site_url('Presales/CTR_Presales') ?>">Home</a></li>
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
						<?php echo $this->session->flashdata('pesan3'); ?>
						<form class="form-horizontal" action="<?php echo site_url('Presales/CTR_Presales/SimpanCeklis') ?>" method="POST">
							<table class="table table-bordered table-hover table-sm">
								<thead class="text-center">
									<tr>
										<th class="align-middle" rowspan="2">Aspek</th>
										<th class="align-middle" rowspan="2" colspan="2">Assesment Requirements</th>
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
										<th scope="row" class="text-center" style="vertical-align: middle;" rowspan="40">1</th>
										<td style="vertical-align: middle;" rowspan="4">Pagar</td>
										<td>Bahan Kontruksi pagar cukup kokoh (Besi, Tembok, Permanent atau Semi Permanent)</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_1"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_1"></td>
										<td><input type="text" class="form-control" name="keterangan_1"></td>
									</tr>
									<tr>
										<td>Tinggi Minimal 3 Meter</td>
										<td class="align-middle text-center"><input id="ada2" type="radio" value="Ada" name="ceklis_2"></td>
										<td class="align-middle text-center"><input id="tidak2" type="radio" value="Tidak" name="ceklis_2"></td>
										<td><input type="text" class="form-control" name="keterangan_2"></td>
									</tr>
									<tr>
										<td>Terdapat Kawat Berduri bagian atas dengan tinggi minimal 50cm</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_3"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_3"></td>
										<td><input type="text" class="form-control" name="keterangan_3"></td>
									</tr>
									<tr>
										<td>Pagar terhalang tanaman yang menempel</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_4"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_4"></td>
										<td><input type="text" class="form-control" name="keterangan_4"></td>
									</tr>
									<tr>
										<td style="vertical-align: middle;" rowspan="6">Pintu Gerbang</td>
									</tr>
									<tr>
										<td>Tinggi harus sama dan sulit dipanjat pandangan tidak boleh terhalang</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_5"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_5"></td>
										<td><input type="text" class="form-control" name="keterangan_5"></td>
									</tr>
									<tr>
										<td>Pandangan tidak boleh terhalang</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_6"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_6"></td>
										<td><input type="text" class="form-control" name="keterangan_6"></td>
									</tr>
									<tr>
										<td>Pada saat gerbang tidak terbuka harus aman dari masuknya orang-orang yang tidak memiliki otorisasi</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_7"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_7"></td>
										<td><input type="text" class="form-control" name="keterangan_7"></td>
									</tr>
									<tr>
										<td>Jika berengsel harus berdesign mencegah engsel terangkat</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_8"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_8"></td>
										<td><input type="text" class="form-control" name="keterangan_8"></td>
									</tr>
									<tr>
										<td>Terdapat pemisah untuk kendaraan dan pejalan kaki</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_9"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_9"></td>
										<td><input type="text" class="form-control" name="keterangan_9"></td>
									</tr>
									<tr>
										<td style="vertical-align: middle;" rowspan="4">Posko Security</td>
									</tr>
									<tr>
										<td>Posisi posko terletak pada posisi taktis dan strategis dalam segi keamanan</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_10"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_10"></td>
										<td><input type="text" class="form-control" name="keterangan_10"></td>
									</tr>
									<tr>
										<td>Adanya penetapan bentuk design, kelengkapan pos dan penempatan pos yang ditentukan atas hasil analisis risiko</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_11"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_11"></td>
										<td><input type="text" class="form-control" name="keterangan_11"></td>
									</tr>
									<tr>
										<td>Terdapat ruang confidential (Monitoring CCTV, Ruang Investigasi dll</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_12"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_12"></td>
										<td><input type="text" class="form-control" name="keterangan_12"></td>
									</tr>
									<tr>
										<td style="vertical-align: middle;" rowspan="4">Pos Security</td>
									</tr>
									<tr>
										<td>Posisi Jaga terletak pada posisi taktis dan strategis dalam segi keamanan</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_13"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_13"></td>
										<td><input type="text" class="form-control" name="keterangan_13"></td>
									</tr>
									<tr>
										<td>Adanya penetapan bentuk design, kelengkapan pos dan penempatan pos yang ditentukan atas hasil analisa resiko</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_14"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_14"></td>
										<td><input type="text" class="form-control" name="keterangan_14"></td>
									</tr>
									<tr>
										<td>Konstruksi bangunan bagus, layak dan aman untuk dapat digunakan ruang pengawasan harus tertutup terhindar dari perubahan cuaca seperti panas dan hujan</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_15"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_15"></td>
										<td><input type="text" class="form-control" name="keterangan_15"></td>
									</tr>
									<tr>
										<td style="vertical-align: middle;" rowspan="6">Lampu penerangan gerbang pagar dan pintu jaga</td>
									</tr>
									<tr>
										<td>Seluruh perimeter lampu menyala, dikedua sisi pagar</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_16"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_16"></td>
										<td><input type="text" class="form-control" name="keterangan_16"></td>
									</tr>
									<tr>
										<td>Penerangan cukup untuk memungkinkan deteksi gerakan manusia</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_17"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_17"></td>
										<td><input type="text" class="form-control" name="keterangan_17"></td>
									</tr>
									<tr>
										<td>Adanya penerangan yang baik untuk rute penjaga di dalam pagar</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_18"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_18"></td>
										<td><input type="text" class="form-control" name="keterangan_18"></td>
									</tr>
									<tr>
										<td>Penerangan dapat membantu fungsi monitoring CCTV</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_19"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_19"></td>
										<td><input type="text" class="form-control" name="keterangan_19"></td>
									</tr>
									<tr>
										<td>Adanya sumber daya tambahan untuk penerangan</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_20"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_20"></td>
										<td><input type="text" class="form-control" name="keterangan_20"></td>
									</tr>
									<tr>
										<td style="vertical-align: middle;" rowspan="4">Rambu dan Tanda Petunjuk</td>
									</tr>
									<tr>
										<td>Terdapat rambu-rambu dan petunjuk di setiap aktifitas keamanan pos</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_21"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_21"></td>
										<td><input type="text" class="form-control" name="keterangan_21"></td>
									</tr>
									<tr>
										<td>Perusahaan memiliki jadwal dan daftar pemeriksaan dan pemeliharaan rambu dan tanda petunjuk</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_22"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_22"></td>
										<td><input type="text" class="form-control" name="keterangan_22"></td>
									</tr>
									<tr>
										<td>Letak rambu-rambu memnuhi kebutuhan dan pemenmpatannya cukup taktis dan strategis</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_23"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_23"></td>
										<td><input type="text" class="form-control" name="keterangan_23"></td>
									</tr>
									<tr>
										<td style="vertical-align: middle;" rowspan="4">Security device dan teknologi (Barier, Acces door, Alarm, CCTV Monitoring dll)</td>
									</tr>
									<tr>
										<td>Terdapat layout letak System Device dan Teknologi yang ada di instalasi System Device dan Teknologi aktif saat digunakan</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_24"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_24"></td>
										<td><input type="text" class="form-control" name="keterangan_24"></td>
									</tr>
									<tr>
										<td>Terdapat manual book terkait pengoprasian system Device dan Teknologi</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_25"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_25"></td>
										<td><input type="text" class="form-control" name="keterangan_25"></td>
									</tr>
									<tr>
										<td>Dilakukan training pelatihan untuk security yang mengoperasikan system Device dan Teknologi</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_26"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_26"></td>
										<td><input type="text" class="form-control" name="keterangan_26"></td>
									</tr>
									<tr>
										<td style="vertical-align: middle;" rowspan="4">Sumber Daya Listrik dan Cadangan</td>
									</tr>
									<tr>
										<td>Terdapat mekanisme pengawasan orang yang masuk area tersebut</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_27"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_27"></td>
										<td><input type="text" class="form-control" name="keterangan_27"></td>
									</tr>
									<tr>
										<td>Ada mekanisme pengawasan orang yang masuk area tersebut</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_28"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_28"></td>
										<td><input type="text" class="form-control" name="keterangan_28"></td>
									</tr>
									<tr>
										<td>Sumber daya listrik cadangan dapat digunakan dalam keadaan darurat</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_29"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_29"></td>
										<td><input type="text" class="form-control" name="keterangan_29"></td>
									</tr>
									<tr>
										<td style="vertical-align: middle;" rowspan="4">Sarana dan Perlengkapan Patroli</td>
									</tr>
									<tr>
										<td>Perusahaan mempunyai sarana dan perlengkapan patroli yang digunakan setiap hari untuk menunjang fungsi tugas patroli security dilapangan</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_30"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_30"></td>
										<td><input type="text" class="form-control" name="keterangan_30"></td>
									</tr>
									<tr>
										<td>Peralatan dan jenis kendaraan yang digunakan sesuai dengan fungsinya</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_31"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_31"></td>
										<td><input type="text" class="form-control" name="keterangan_31"></td>
									</tr>
									<tr>
										<td>Gorong-gorong aman dan dapat menangkal penerobosan air dari luar</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_32"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_32"></td>
										<td><input type="text" class="form-control" name="keterangan_32"></td>
									</tr>
									<!-- End 1 -->

									<!-- Nomor 2 -->
									<tr>
										<th scope="row" class="text-center" style="vertical-align: middle;" rowspan="23">2</th>
										<td style="vertical-align: middle;" rowspan="4">Pelaksanaan Patroli</td>
										<td>Perusahaan mempunyai SOP mengenai pelaksanaan tugas patroli</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_33"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_33"></td>
										<td><input type="text" class="form-control" name="keterangan_33"></td>
									</tr>
									<tr>
										<td>Mempunyai alat perlengkapan dan sarana penunjang (Kendaraan, Guard Tour Patrol, Ceklist Patrol dll)</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_34"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_34"></td>
										<td><input type="text" class="form-control" name="keterangan_34"></td>
									</tr>
									<tr>
										<td>Setiap petugas kemanan memiliki jadwal patroli harian (rutin dan acak) yang ditandatangani oleh user</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_35"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_35"></td>
										<td><input type="text" class="form-control" name="keterangan_35"></td>
									</tr>
									<tr>
										<td>Pelaporan patroli dibuat sesuai mekanisme yang ada setiap harinya</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_36"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_36"></td>
										<td><input type="text" class="form-control" name="keterangan_36"></td>
									</tr>
									<tr>
										<td style="vertical-align: middle;" rowspan="3">Pengawasan dan pengendalian pekerja / karyawan</td>
									</tr>
									<tr>
										<td>Perusahaan mempunyai SOP Pengawasan prakerja / karyawan seperti pemeriksaan tanda pengenal, APD kesehatan, body checking dll</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_37"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_37"></td>
										<td><input type="text" class="form-control" name="keterangan_37"></td>
									</tr>
									<tr>
										<td>Mempunyai aktivitas kedatangan dan kepulangan tamu yang terkomentasikan baik manual maupun system</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_38"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_38"></td>
										<td><input type="text" class="form-control" name="keterangan_38"></td>
									</tr>
									<tr>
										<td style="vertical-align: middle;" rowspan="3">Pengawasan dan pengendalian tamu</td>
									</tr>
									<tr>
										<td>Perusahaan mempunyai SOP Pengawasan tamu seperti pemeriksaan tanda pengenal dan visitor, APD kesehatan, body checking dll</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_39"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_39"></td>
										<td><input type="text" class="form-control" name="keterangan_39"></td>
									</tr>
									<tr>
										<td>Mempunyai aktivitas kedatangan dan kepulangan tamu yang terkomentasikan baik manual maupun system</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_40"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_40"></td>
										<td><input type="text" class="form-control" name="keterangan_40"></td>
									</tr>
									<tr>
										<td style="vertical-align: middle;" rowspan="5">pengawasan dan pengendalian keluar masuk barang</td>
									</tr>
									<tr>
										<td>Perusahaan memiliki SOP pelaskanaan pengawasan keluar masuk barang</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_41"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_41"></td>
										<td><input type="text" class="form-control" name="keterangan_41"></td>
									</tr>
									<tr>
										<td>Proses pelaksanaan pengawasan terdokumentasi sesuai mekanisme perusahaan</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_42"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_42"></td>
										<td><input type="text" class="form-control" name="keterangan_42"></td>
									</tr>
									<tr>
										<td>Adanya proses laporan yang dilaporkan secara rutin baik harian, mingguan atau bulanan</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_43"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_43"></td>
										<td><input type="text" class="form-control" name="keterangan_43"></td>
									</tr>
									<tr>
										<td>Bukti surat jalan barang yang di dokumentasikan dan di simpan</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_44"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_44"></td>
										<td><input type="text" class="form-control" name="keterangan_44"></td>
									</tr>
									<tr>
										<td style="vertical-align: middle;" rowspan="3">Pengamanan dokumen dan informasi</td>
									</tr>
									<tr>
										<td>Perusahaan memiliki SOP untuk pengamanan dokumen dan informasi</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_45"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_45"></td>
										<td><input type="text" class="form-control" name="keterangan_45"></td>
									</tr>
									<tr>
										<td>Mempunyai pengendalian dokumen dan informasi (tahapan distribusi dan penerimaan dokumen</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_46"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_46"></td>
										<td><input type="text" class="form-control" name="keterangan_46"></td>
									</tr>
									<tr>
										<td style="vertical-align: middle;" rowspan="5">Pengawasan Kunci</td>
									</tr>
									<tr>
										<td>Perusahaan memiliki SOP pengawasan dan distribusi kunci-kunci</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_47"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_47"></td>
										<td><input type="text" class="form-control" name="keterangan_47"></td>
									</tr>
									<tr>
										<td>Kunci mempunyai spesifikasi dan dipisahkan sesuai dengan fungsinya</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_48"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_48"></td>
										<td><input type="text" class="form-control" name="keterangan_48"></td>
									</tr>
									<tr>
										<td>Kunci mempunyai ruangan khusus atau penyimpanan khusus ditempat yang aman</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_49"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_49"></td>
										<td><input type="text" class="form-control" name="keterangan_49"></td>
									</tr>
									<tr>
										<td>Proses pemakaian dan peminjaman kunci harus terdokumentasi</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_50"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_50"></td>
										<td><input type="text" class="form-control" name="keterangan_50"></td>
									</tr>
									<!-- End 2 -->

									<!-- Nomor 3 -->
									<tr>
										<th scope="row" class="text-center" style="vertical-align: middle;" rowspan="2">3</th>
										<td style="vertical-align: middle;" rowspan="2">Kebijakan Management Pengamanan</td>
										<td>Ada Management security policy minimal di level direksi</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_51"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_51"></td>
										<td><input type="text" class="form-control" name="keterangan_51"></td>
									</tr>
									<tr>
										<td>Policy harus di tempel di tempat yang strategis, terlihat dan dapat dibaca oleh semua orang</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_52"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_52"></td>
										<td><input type="text" class="form-control" name="keterangan_52"></td>
									</tr>
									<!-- End 3 -->

									<!-- Nomor 4 -->
									<tr>
										<th scope="row" class="text-center" style="vertical-align: middle;" rowspan="6">4</th>
										<td style="vertical-align: middle;" rowspan="3">Program Comdev dan CSR Perusahaan</td>
										<td>Ada keterlibatan security dalam pelaksanaan program Comdev dan CSR</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_53"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_53"></td>
										<td><input type="text" class="form-control" name="keterangan_53"></td>
									</tr>
									<tr>
										<td>Adanya kusioner terkait program CSR untuk mengevaluasi program yang dijalankan</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_54"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_54"></td>
										<td><input type="text" class="form-control" name="keterangan_54"></td>
									</tr>
									<tr>
										<td>Kegiatan program CSR di dokumentasikan</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_55"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_55"></td>
										<td><input type="text" class="form-control" name="keterangan_55"></td>
									</tr>
									<tr>
										<td style="vertical-align: middle;" rowspan="3">Koordinasi dengan aparat keamanan</td>
										<td>Perusahaan mempunyai SOP terkait Koodrdinasi dengan aparat keamanan di wilayah perusahaan</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_56"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_56"></td>
										<td><input type="text" class="form-control" name="keterangan_56"></td>
									</tr>
									<tr>
										<td>Daftar nama-nama aparat terkait dan institusi di simpan di posko security</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_57"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_57"></td>
										<td><input type="text" class="form-control" name="keterangan_57"></td>
									</tr>
									<tr>
										<td>Ada laporan terkait pelaksanaan koordinasi termasuk update informasi kemanan wilayah</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_58"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_58"></td>
										<td><input type="text" class="form-control" name="keterangan_58"></td>
									</tr>
									<!-- End 4 -->

									<!-- Nomor 5 -->
									<tr>
										<th scope="row" class="text-center" style="vertical-align: middle;" rowspan="3">5</th>
										<td style="vertical-align: middle;" rowspan="3">SOP dan intruksi kerja</td>
										<td>Dokumen kontrol SOP, IK kerja dan form - form pendukung lengkap terdapat nomor dokumennya di filling baik hardcopy maupun softcopy</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_59"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_59"></td>
										<td><input type="text" class="form-control" name="keterangan_59"></td>
									</tr>
									<tr>
										<td>SOP, IK kerja dan form - form pendukung disahkan dan ditandatangani oleh Management terkait</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_60"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_60"></td>
										<td><input type="text" class="form-control" name="keterangan_60"></td>
									</tr>
									<tr>
										<td>SOP, IK kerja dan form - form pendukung ditempel pada pos - pos pennjagaan untuk memastikan fungsi tugas pengamanan berjalan</td>
										<td class="align-middle text-center"><input type="radio" value="Ada" name="ceklis_61"></td>
										<td class="align-middle text-center"><input type="radio" value="Tidak" name="ceklis_61"></td>
										<td><input type="text" class="form-control" name="keterangan_61"></td>
									</tr>
									<!-- End 5 -->
								</tbody>
							</table>
							<div class="line"></div>
							<div class="form-group row">
								<div class="col-sm-12 text-center">
									<button type="submit" class="btn btn-primary"><a class="text-white" href="pelaksanaan.html">Previous</a></button>
									<button type="submit" class="btn btn-primary">Next</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- /.content -->
		</div>