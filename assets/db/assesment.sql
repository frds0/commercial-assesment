-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jul 2022 pada 10.54
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assesment`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_cctv`
--

CREATE TABLE `detail_cctv` (
  `id_detail_cctv` int(11) NOT NULL,
  `id_cctv` int(11) NOT NULL,
  `lokasi_cctv` varchar(25) NOT NULL,
  `kondisi_cctv` varchar(25) NOT NULL,
  `view_depan` varchar(500) NOT NULL,
  `view_belakang` varchar(500) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_ssa2`
--

CREATE TABLE `detail_ssa2` (
  `id_detail_ssa2` int(11) NOT NULL,
  `id_ssa2` int(11) NOT NULL,
  `nama_pos` varchar(50) NOT NULL,
  `total_anggota` int(11) NOT NULL,
  `jam_kerja` varchar(25) NOT NULL,
  `lokasi_kerja` varchar(225) NOT NULL,
  `kerawanan` varchar(225) NOT NULL,
  `ancaman` varchar(225) NOT NULL,
  `fungsi_job_desk` varchar(225) NOT NULL,
  `foto_ssa2` varchar(128) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_jawaban_ceklis`
--

CREATE TABLE `ms_jawaban_ceklis` (
  `id_jawaban_ceklis` int(11) NOT NULL,
  `id_ceklis` int(11) NOT NULL,
  `id_pertanyaan_ceklis` int(11) NOT NULL,
  `kondisi` varchar(11) NOT NULL,
  `keterangan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_jawaban_wawancara`
--

CREATE TABLE `ms_jawaban_wawancara` (
  `id_jawaban_wawancara` int(11) NOT NULL,
  `id_wawancara` int(11) NOT NULL,
  `id_pertanyaan_wawancara` int(11) NOT NULL,
  `jawaban` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_kategori_ceklis`
--

CREATE TABLE `ms_kategori_ceklis` (
  `id_kategori` int(11) NOT NULL,
  `kategori_ceklis` varchar(225) NOT NULL,
  `status_kategori_ceklis` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ms_kategori_ceklis`
--

INSERT INTO `ms_kategori_ceklis` (`id_kategori`, `kategori_ceklis`, `status_kategori_ceklis`) VALUES
(1, 'Pagar', 'Aktif'),
(3, 'Pintu Gerbang', 'Aktif'),
(4, 'Posko Security', 'Aktif'),
(5, 'Pos Security', 'Aktif'),
(6, 'Lampu Penerangan Gerbang Pagar dan Pintu Jaga', 'Aktif'),
(7, 'Rambu dan Tanda Petunjuk', 'Aktif'),
(8, 'Security Device dan Teknologi (Barier, Access Door, Alarm, CCTV Monitoring, dll)', 'Aktif'),
(9, 'Sumber Daya Listrik dan Cadangan', 'Aktif'),
(10, 'Sarana dan Perlengkapan Patroli', 'Aktif'),
(11, 'Pelaksanaan Patroli ', 'Aktif'),
(12, 'Pengawasan dan Pengendalian Pekerja/Karyawan', 'Aktif'),
(13, 'Pengawasan dan Pengendalian Tamu', 'Aktif'),
(14, 'Pengawasan dan Pengendalian Keluar Masuk Barang', 'Aktif'),
(15, 'Pengamanan Dokumen dan Informasi', 'Aktif'),
(16, 'Pengawasan Kunci', 'Aktif'),
(17, 'Kebijakan Management Pengamanan', 'Aktif'),
(18, 'Program Comdev dan CSR Perusahaan', 'Aktif'),
(19, 'Koordinasi Dengan Aparat Keamanan', 'Aktif'),
(20, 'Sop dan Intruksi Kerja', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_pertanyaan_ceklis`
--

CREATE TABLE `ms_pertanyaan_ceklis` (
  `id_pertanyaan_ceklis` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `pertanyaan_ceklis` varchar(500) NOT NULL,
  `status_pertanyaan_ceklis` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ms_pertanyaan_ceklis`
--

INSERT INTO `ms_pertanyaan_ceklis` (`id_pertanyaan_ceklis`, `id_kategori`, `pertanyaan_ceklis`, `status_pertanyaan_ceklis`) VALUES
(1, 1, 'Bahan Kontruksi pagar cukup kokoh (Besi, Tembok, Permanent atau Semi Permanent)', 'Aktif'),
(2, 3, 'Tinggi harus sama dan sulit dipanjat pandangan tidak boleh terhalang', 'Aktif'),
(3, 1, 'Tinggi Minimal 3 Meter', 'Aktif'),
(4, 1, 'Terdapat Kawat Berduri bagian atas dengan tinggi minimal 50cm			', 'Aktif'),
(5, 1, 'Pagar terhalang tanaman yang menempel', 'Aktif'),
(6, 3, 'Pandangan tidak boleh terhalang', 'Aktif'),
(7, 3, 'Pada saat gerbang tidak terbuka harus aman dari masuknya orang-orang yang tidak memiliki otorisasi', 'Aktif'),
(8, 3, 'Jika berengsel harus berdesign mencegah engsel terangkat', 'Aktif'),
(9, 3, 'Terdapat pemisah untuk kendaraan dan pejalan kaki', 'Aktif'),
(10, 4, 'Posisi posko terletak pada posisi taktis dan strategis dalam segi keamanan', 'Aktif'),
(11, 4, 'Adanya penetapan bentuk design, kelengkapan pos dan penempatan pos yang ditentukan atas hasil analisis risiko', 'Aktif'),
(12, 4, 'Terdapat ruang confidential (Monitoring CCTV, Ruang Investigasi dll', 'Aktif'),
(13, 5, 'Posisi Jaga terletak pada posisi taktis dan strategis dalam segi keamanan', 'Aktif'),
(14, 5, 'Adanya penetapan bentuk design, kelengkapan pos dan penempatan pos yang ditentukan atas hasil analisa resiko', 'Aktif'),
(15, 5, 'Konstruksi bangunan bagus, layak dan aman untuk dapat digunakan ruang pengawasan harus tertutup terhindar dari perubahan cuaca seperti panas dan hujan', 'Aktif'),
(17, 6, 'Seluruh perimeter lampu menyala, dikedua sisi pagar', 'Aktif'),
(18, 6, 'Penerangan cukup untuk memungkinkan deteksi gerakan manusia', 'Aktif'),
(19, 6, 'Adanya penerangan yang baik untuk rute penjaga di dalam pagar', 'Aktif'),
(20, 6, 'Penerangan dapat membantu fungsi monitoring CCTV', 'Aktif'),
(21, 6, 'Adanya sumber daya tambahan untuk penerangan', 'Aktif'),
(22, 7, 'Terdapat rambu-rambu dan petunjuk di setiap aktifitas keamanan pos', 'Aktif'),
(23, 7, 'Perusahaan memiliki jadwal dan daftar pemeriksaan dan pemeliharaan rambu dan tanda petunjuk', 'Aktif'),
(24, 7, 'Letak rambu-rambu memnuhi kebutuhan dan pemenmpatannya cukup taktis dan strategis', 'Aktif'),
(25, 8, 'Terdapat layout letak System Device dan Teknologi yang ada di instalasi System Device dan Teknologi aktif saat digunakan', 'Aktif'),
(26, 8, 'Terdapat manual book terkait pengoprasian system Device dan Teknologi', 'Aktif'),
(27, 8, 'Dilakukan training pelatihan untuk security yang mengoperasikan system Device dan Teknologi', 'Aktif'),
(28, 9, 'Terdapat mekanisme pengawasan orang yang masuk area tersebut', 'Aktif'),
(29, 9, 'Ada mekanisme pengawasan orang yang masuk area tersebut', 'Aktif'),
(30, 9, 'Sumber daya listrik cadangan dapat digunakan dalam keadaan darurat', 'Aktif'),
(31, 10, 'Perusahaan mempunyai sarana dan perlengkapan patroli yang digunakan setiap hari untuk menunjang fungsi tugas patroli security dilapangan', 'Aktif'),
(32, 10, 'Peralatan dan jenis kendaraan yang digunakan sesuai dengan fungsinya', 'Aktif'),
(33, 10, 'Gorong-gorong aman dan dapat menangkal penerobosan air dari luar', 'Aktif'),
(34, 11, 'Perusahaan mempunyai SOP mengenai pelaksanaan tugas patroli', 'Aktif'),
(35, 11, 'Mempunyai alat perlengkapan dan sarana penunjang (Kendaraan, Guard Tour Patrol, Ceklist Patrol dll)', 'Aktif'),
(36, 11, 'Setiap petugas kemanan memiliki jadwal patroli harian (rutin dan acak) yang ditandatangani oleh user', 'Aktif'),
(37, 11, 'Pelaporan patroli dibuat sesuai mekanisme yang ada setiap harinya', 'Aktif'),
(38, 12, 'Perusahaan mempunyai SOP Pengawasan prakerja / karyawan seperti pemeriksaan tanda pengenal, APD kesehatan, body checking dll', 'Aktif'),
(39, 12, 'Mempunyai aktivitas kedatangan dan kepulangan tamu yang terkomentasikan baik manual maupun system', 'Aktif'),
(40, 13, 'Perusahaan mempunyai SOP Pengawasan tamu seperti pemeriksaan tanda pengenal dan visitor, APD kesehatan, body checking dll', 'Aktif'),
(41, 13, 'Mempunyai aktivitas kedatangan dan kepulangan tamu yang terkomentasikan baik manual maupun system', 'Aktif'),
(42, 14, 'Perusahaan memiliki SOP pelaskanaan pengawasan keluar masuk barang', 'Aktif'),
(43, 14, 'Proses pelaksanaan pengawasan terdokumentasi sesuai mekanisme perusahaan', 'Aktif'),
(44, 14, 'Adanya proses laporan yang dilaporkan secara rutin baik harian, mingguan atau bulanan', 'Aktif'),
(45, 14, 'Bukti surat jalan barang yang di dokumentasikan dan di simpan', 'Aktif'),
(46, 15, 'Perusahaan memiliki SOP untuk pengamanan dokumen dan informasi', 'Aktif'),
(47, 15, 'Mempunyai pengendalian dokumen dan informasi (tahapan distribusi dan penerimaan dokumen', 'Aktif'),
(48, 16, 'Perusahaan memiliki SOP pengawasan dan distribusi kunci-kunci', 'Aktif'),
(49, 16, 'Kunci mempunyai spesifikasi dan dipisahkan sesuai dengan fungsinya', 'Aktif'),
(50, 16, 'Kunci mempunyai ruangan khusus atau penyimpanan khusus ditempat yang aman', 'Aktif'),
(51, 16, 'Proses pemakaian dan peminjaman kunci harus terdokumentasi', 'Aktif'),
(52, 17, 'Ada Management security policy minimal di level direksi', 'Aktif'),
(53, 17, 'Policy harus di tempel di tempat yang strategis, terlihat dan dapat dibaca oleh semua orang', 'Aktif'),
(54, 18, 'Ada keterlibatan security dalam pelaksanaan program Comdev dan CSR', 'Aktif'),
(55, 18, 'Adanya kusioner terkait program CSR untuk mengevaluasi program yang dijalankan', 'Aktif'),
(56, 18, 'Kegiatan program CSR di dokumentasikan', 'Aktif'),
(57, 19, 'Perusahaan mempunyai SOP terkait Koodrdinasi dengan aparat keamanan di wilayah perusahaan', 'Aktif'),
(58, 19, 'Daftar nama-nama aparat terkait dan institusi di simpan di posko security', 'Aktif'),
(59, 19, 'Ada laporan terkait pelaksanaan koordinasi termasuk update informasi kemanan wilayah', 'Aktif'),
(60, 20, 'Dokumen kontrol SOP, IK kerja dan form - form pendukung lengkap terdapat nomor dokumennya di filling baik hardcopy maupun softcopy', 'Aktif'),
(61, 20, 'SOP, IK kerja dan form - form pendukung disahkan dan ditandatangani oleh Management terkait', 'Aktif'),
(62, 20, 'SOP, IK kerja dan form - form pendukung ditempel pada pos - pos pennjagaan untuk memastikan fungsi tugas pengamanan berjalan', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_pertanyaan_wawancara`
--

CREATE TABLE `ms_pertanyaan_wawancara` (
  `id_pertanyaan_wawancara` int(11) NOT NULL,
  `pertanyaan` varchar(500) NOT NULL,
  `proses` varchar(500) NOT NULL,
  `is_active` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ms_pertanyaan_wawancara`
--

INSERT INTO `ms_pertanyaan_wawancara` (`id_pertanyaan_wawancara`, `pertanyaan`, `proses`, `is_active`) VALUES
(1, 'Bagaimana kondisi wilayah sekitar site, seperti tingkat kriminalitas dan tindakan kejahatan lainnya', 'Melakukan interview ke security dan user', 'Aktif'),
(2, 'Apakah lokasi site termasuk lokasi yang banyak ditemukan dititik rawan', 'Melakukan proses pengamatan dan interview ke security', 'Aktif'),
(3, 'Bagaimana kondisi gambaran masyarakat sekitar terhadap perusahaan tersebut', 'Melakukan proses pengamatan dan interview ke security', 'Aktif'),
(4, 'Bagaimana kondisi keadaan lalu lintas terutama pada saat jam operasional', 'Melakukan proses pengamatan dan interview ke security', 'Aktif'),
(5, 'Bagaimana kinerja security yang ada pada saat ini', 'Melakukan interview ke user', 'Aktif'),
(6, 'Apakah ada kasus yang merugikan terhadap perusahaan yang diakibatkan oleh security', 'Melakukan interview ke user', 'Aktif'),
(7, 'Bagaimana security mengatasi kegiatan yang bersifat anomall,seperti pencurian dll', 'Melakukan interview ke security dan user', 'Aktif'),
(8, 'Apakah anggota yang bertugas saat ini telah memenuhi requitment yang telah ditentukan oleh SIGAP', 'Melakukan interview ke security dan user', 'Aktif'),
(9, 'Apakah keseluruhan anggota saat ini sudah melakukan pendidikan', 'Melakukan interview ke security', 'Aktif'),
(10, 'Apakah saat ini sudah mempunyai KTA', 'Melakukan interview ke security', 'Aktif'),
(11, 'Apakah keluhan dan harapan anggota security', 'Melakukan interview ke security', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_cctv`
--

CREATE TABLE `tbl_cctv` (
  `id_cctv` int(11) NOT NULL,
  `id_permintaan` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_cekliss`
--

CREATE TABLE `tbl_cekliss` (
  `id_ceklis` int(11) NOT NULL,
  `id_permintaan` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_device`
--

CREATE TABLE `tbl_device` (
  `id_device` int(11) NOT NULL,
  `id_permintaan` int(11) NOT NULL,
  `sudah_ada_cctv` varchar(25) NOT NULL,
  `berapa_cctv` int(11) NOT NULL,
  `merk_cctv` varchar(25) NOT NULL,
  `type_cctv` varchar(25) NOT NULL,
  `tambahan_cctv` varchar(25) NOT NULL,
  `berapa_tambahan_cctv` int(11) NOT NULL,
  `catatan_1` varchar(25) NOT NULL,
  `kendala_cctv` varchar(25) NOT NULL,
  `berapa_sering_kendala` int(11) NOT NULL,
  `catatan_2` varchar(25) NOT NULL,
  `monitoring_cctv` varchar(25) NOT NULL,
  `jumlah_petugas` int(11) NOT NULL,
  `jumlah_monitor` int(11) NOT NULL,
  `catatan_3` varchar(25) NOT NULL,
  `cctv_suhu_tubuh` varchar(15) NOT NULL,
  `cctv_hitung_orang` varchar(15) NOT NULL,
  `cctv_heat_map` varchar(15) NOT NULL,
  `cctv_face_recognize` varchar(15) NOT NULL,
  `cctv_line_crossing` varchar(15) NOT NULL,
  `catatan_4` varchar(35) NOT NULL,
  `memiliki_access_control` varchar(15) NOT NULL,
  `berapa_access` int(11) NOT NULL,
  `merk_access` varchar(15) NOT NULL,
  `access_terintegrasi` varchar(15) NOT NULL,
  `catatan_5` varchar(35) NOT NULL,
  `access_digunakan_dengan` varchar(35) NOT NULL,
  `catatan_6` varchar(35) NOT NULL,
  `topologi_fibel_optik` varchar(15) NOT NULL,
  `jaringan_berdiri_sendiri` varchar(15) NOT NULL,
  `catatan_7` varchar(35) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_permintaan`
--

CREATE TABLE `tbl_permintaan` (
  `id_permintaan` int(11) NOT NULL,
  `npp` varchar(125) NOT NULL,
  `nps` varchar(125) NOT NULL,
  `pemilihan_user` varchar(55) NOT NULL,
  `nama_user` varchar(125) NOT NULL,
  `lokasi` varchar(125) NOT NULL,
  `sub_lokasi` varchar(125) NOT NULL,
  `luas_wilayah` varchar(125) NOT NULL,
  `nama_arh` int(11) DEFAULT NULL,
  `kegiatan_akan` varchar(125) NOT NULL,
  `status` varchar(50) NOT NULL,
  `approval_by` varchar(55) DEFAULT NULL,
  `form_revisi` varchar(225) DEFAULT NULL,
  `deskripsi` varchar(225) DEFAULT NULL,
  `file_ppt` varchar(128) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ssa1`
--

CREATE TABLE `tbl_ssa1` (
  `id_ssa1` int(11) NOT NULL,
  `id_permintaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(125) NOT NULL,
  `jumlah_mp` int(11) NOT NULL,
  `alamat_perusahaan` varchar(125) NOT NULL,
  `kelurahan` varchar(125) NOT NULL,
  `kecamatan` varchar(125) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `nama_pic_user` varchar(125) NOT NULL,
  `jenis_usaha` varchar(125) NOT NULL,
  `nama_arh` varchar(125) NOT NULL,
  `nama_pic` varchar(125) NOT NULL,
  `no_telp` varchar(125) NOT NULL,
  `pola_jaga` varchar(125) NOT NULL,
  `jenis_seragam` varchar(125) NOT NULL,
  `kta` varchar(125) NOT NULL,
  `pendidikan_anggota` varchar(125) NOT NULL,
  `perlengkapan` varchar(125) NOT NULL,
  `catatan_b` varchar(125) NOT NULL,
  `pagar` varchar(125) NOT NULL,
  `gate` varchar(125) NOT NULL,
  `luas_area` varchar(125) NOT NULL,
  `penerangan` varchar(125) NOT NULL,
  `catatan_c` varchar(125) NOT NULL,
  `guard_tour` varchar(125) NOT NULL,
  `total_1` int(11) NOT NULL,
  `handy_talky` varchar(125) NOT NULL,
  `total_2` int(11) NOT NULL,
  `rompi` varchar(125) NOT NULL,
  `total_3` int(11) NOT NULL,
  `lampu_lalin` varchar(125) NOT NULL,
  `total_4` int(11) NOT NULL,
  `metal_detector` varchar(125) NOT NULL,
  `total_5` int(11) NOT NULL,
  `rambu_stop` varchar(125) NOT NULL,
  `total_6` int(11) NOT NULL,
  `mirror` varchar(125) NOT NULL,
  `total_7` int(11) NOT NULL,
  `atk` varchar(125) NOT NULL,
  `deskripsi_atk` varchar(128) NOT NULL,
  `catatan_d` varchar(125) NOT NULL,
  `ump` varchar(125) NOT NULL,
  `bpjs` varchar(125) NOT NULL,
  `catatan_e` varchar(125) NOT NULL,
  `f_cctv` varchar(125) NOT NULL,
  `total_1_a` int(11) NOT NULL,
  `f_access` varchar(125) NOT NULL,
  `total_1_b` int(11) NOT NULL,
  `f_barrier` varchar(125) NOT NULL,
  `total_1_c` int(11) NOT NULL,
  `f_vms` varchar(125) NOT NULL,
  `total_1_d` int(11) NOT NULL,
  `catatan_f` varchar(125) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ssa2`
--

CREATE TABLE `tbl_ssa2` (
  `id_ssa2` int(11) NOT NULL,
  `id_permintaan` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `npk` int(11) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `role` varchar(25) NOT NULL,
  `lokasi` varchar(128) DEFAULT NULL,
  `sub_lokasi_arh` varchar(128) DEFAULT NULL,
  `is_active` varchar(15) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`npk`, `nama`, `password`, `role`, `lokasi`, `sub_lokasi_arh`, `is_active`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(11101, 'Kasie', '11101', 'Kasie', 'Head Office', 'Jakarta', 'Aktif', 230140, '2022-07-20 15:34:02', NULL, NULL),
(11102, 'Admin 1', '11102', 'Presales', 'Head Office', 'Jakarta', 'Aktif', 230140, '2022-07-20 15:34:29', NULL, NULL),
(11103, 'Admin 2', '11103', 'Commerce', 'Head Office', 'Jakarta', 'Aktif', 230140, '2022-07-20 15:35:11', NULL, NULL),
(100058, 'Kasina', 'S1g4p123', 'Admin', 'ARH', 'Pekanbaru', 'Aktif', 230140, '2022-07-20 15:36:24', NULL, NULL),
(100069, 'Julianto', 'S1g4p123', 'Admin', 'ARH', 'Karawang', 'Aktif', 230140, '2022-07-20 15:36:24', NULL, NULL),
(101337, 'Cecen Effendy', 'S1g4p123', 'Admin', 'ARH', 'Bogor', 'Aktif', 230140, '2022-07-20 15:36:24', NULL, NULL),
(101649, 'Muhammad Zulkarnain', 'S1g4p123', 'Admin', 'ARH', 'Padang', 'Aktif', 230140, '2022-07-20 15:36:24', NULL, NULL),
(102822, 'Abdul Charis AF', 'S1g4p123', 'Admin', 'ARH', 'Banjarmasin', 'Aktif', 230140, '2022-07-20 15:36:24', NULL, NULL),
(102915, 'Rony Katili', 'S1g4p123', 'Admin', 'ARH', 'Manado', 'Aktif', 230140, '2022-07-20 15:36:24', NULL, NULL),
(102990, 'Sarif Hidayat', 'S1g4p123', 'Admin', 'ARH', 'DKI 1', 'Aktif', 230140, '2022-07-20 15:36:24', NULL, NULL),
(103101, 'Joni Purnomo', 'S1g4p123', 'Admin', 'ARH', 'Pontianak', 'Aktif', 230140, '2022-07-20 15:36:24', NULL, NULL),
(103750, 'Fahrur Roji AS', 'S1g4p123', 'Admin', 'ARH', 'Tangerang', 'Aktif', 230140, '2022-07-20 15:36:24', NULL, NULL),
(110290, 'Hery Mulyawan', 'S1g4p123', 'Admin', 'ARH', 'Purwakarta', 'Aktif', 230140, '2022-07-20 15:36:24', NULL, NULL),
(114725, 'Yulianto', 'S1g4p123', 'Admin', 'ARH', 'Semarang', 'Aktif', 230140, '2022-07-20 15:36:24', NULL, NULL),
(118690, 'Heri', 'S1g4p123', 'Admin', 'ARH', 'DKI 2', 'Aktif', 230140, '2022-07-20 15:36:24', NULL, NULL),
(121755, 'Ardi Sigit', 'S1g4p123', 'Admin', 'ARH', 'Malang', 'Aktif', 230140, '2022-07-20 15:36:24', NULL, NULL),
(123036, 'Darwis Riswanto', 'S1g4p123', 'Admin', 'ARH', 'Batam', 'Aktif', 230140, '2022-07-20 15:36:24', NULL, NULL),
(123037, 'Muhammad Daini', 'S1g4p123', 'Admin', 'ARH', 'Mataram', 'Aktif', 230140, '2022-07-20 15:36:24', NULL, NULL),
(202240, 'Wawan Darmawan', 'S1g4p123', 'Admin', 'ARH', 'Bandung', 'Aktif', 230140, '2022-07-20 15:36:24', NULL, NULL),
(204128, 'Bambang Turyono', 'S1g4p123', 'Admin', 'ARH', 'Lampung', 'Aktif', 230140, '2022-07-20 15:36:24', NULL, NULL),
(204804, 'Miftakhul Ulum', 'S1g4p123', 'Admin', 'ARH', 'Balikpapan', 'Aktif', 230140, '2022-07-20 15:36:24', NULL, NULL),
(207171, 'Soni Salim', 'S1g4p123', 'Admin', 'ARH', 'Palembang', 'Aktif', 230140, '2022-07-20 15:36:24', NULL, NULL),
(208584, 'Andra Barus', 'S1g4p123', 'Admin', 'ARH', 'Medan', 'Aktif', 230140, '2022-07-20 15:36:24', NULL, NULL),
(208628, 'Rudi Syufriadi', 'S1g4p123', 'Admin', 'ARH', 'Jambi', 'Aktif', 230140, '2022-07-20 15:36:24', NULL, NULL),
(209433, 'Agung Wahyudi Sularsono', 'S1g4p123', 'Admin', 'ARH', 'Surabaya', 'Aktif', 230140, '2022-07-20 15:36:24', NULL, NULL),
(209936, 'Supriyanto', 'S1g4p123', 'Admin', 'ARH', 'Pangkal Pinang', 'Aktif', 230140, '2022-07-20 15:36:24', NULL, NULL),
(220132, 'Laode Rufai', 'S1g4p123', 'Admin', 'ARH', 'Makasar', 'Aktif', 230140, '2022-07-20 15:36:24', NULL, NULL),
(224763, 'I Made Suarka', 'S1g4p123', 'Admin', 'ARH', 'Denpasar', 'Aktif', 230140, '2022-07-20 15:36:24', NULL, NULL),
(230140, 'Putra', 'admin', 'Super Admin', 'Head Office', 'Jakarta', 'Aktif', 230140, '2022-07-20 15:36:24', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_wawancara`
--

CREATE TABLE `tbl_wawancara` (
  `id_wawancara` int(11) NOT NULL,
  `id_permintaan` int(11) NOT NULL,
  `diwawancarai` varchar(125) NOT NULL,
  `jabatan1` varchar(125) NOT NULL,
  `diwawancara` varchar(125) NOT NULL,
  `jabatan2` varchar(125) NOT NULL,
  `foto_wawancara` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_cctv`
--
ALTER TABLE `detail_cctv`
  ADD PRIMARY KEY (`id_detail_cctv`);

--
-- Indeks untuk tabel `detail_ssa2`
--
ALTER TABLE `detail_ssa2`
  ADD PRIMARY KEY (`id_detail_ssa2`);

--
-- Indeks untuk tabel `ms_jawaban_ceklis`
--
ALTER TABLE `ms_jawaban_ceklis`
  ADD PRIMARY KEY (`id_jawaban_ceklis`);

--
-- Indeks untuk tabel `ms_jawaban_wawancara`
--
ALTER TABLE `ms_jawaban_wawancara`
  ADD PRIMARY KEY (`id_jawaban_wawancara`);

--
-- Indeks untuk tabel `ms_kategori_ceklis`
--
ALTER TABLE `ms_kategori_ceklis`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `ms_pertanyaan_ceklis`
--
ALTER TABLE `ms_pertanyaan_ceklis`
  ADD PRIMARY KEY (`id_pertanyaan_ceklis`);

--
-- Indeks untuk tabel `ms_pertanyaan_wawancara`
--
ALTER TABLE `ms_pertanyaan_wawancara`
  ADD PRIMARY KEY (`id_pertanyaan_wawancara`);

--
-- Indeks untuk tabel `tbl_cctv`
--
ALTER TABLE `tbl_cctv`
  ADD PRIMARY KEY (`id_cctv`);

--
-- Indeks untuk tabel `tbl_cekliss`
--
ALTER TABLE `tbl_cekliss`
  ADD PRIMARY KEY (`id_ceklis`);

--
-- Indeks untuk tabel `tbl_device`
--
ALTER TABLE `tbl_device`
  ADD PRIMARY KEY (`id_device`);

--
-- Indeks untuk tabel `tbl_permintaan`
--
ALTER TABLE `tbl_permintaan`
  ADD PRIMARY KEY (`id_permintaan`);

--
-- Indeks untuk tabel `tbl_ssa1`
--
ALTER TABLE `tbl_ssa1`
  ADD PRIMARY KEY (`id_ssa1`);

--
-- Indeks untuk tabel `tbl_ssa2`
--
ALTER TABLE `tbl_ssa2`
  ADD PRIMARY KEY (`id_ssa2`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`npk`);

--
-- Indeks untuk tabel `tbl_wawancara`
--
ALTER TABLE `tbl_wawancara`
  ADD PRIMARY KEY (`id_wawancara`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_cctv`
--
ALTER TABLE `detail_cctv`
  MODIFY `id_detail_cctv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detail_ssa2`
--
ALTER TABLE `detail_ssa2`
  MODIFY `id_detail_ssa2` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ms_jawaban_ceklis`
--
ALTER TABLE `ms_jawaban_ceklis`
  MODIFY `id_jawaban_ceklis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ms_jawaban_wawancara`
--
ALTER TABLE `ms_jawaban_wawancara`
  MODIFY `id_jawaban_wawancara` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ms_kategori_ceklis`
--
ALTER TABLE `ms_kategori_ceklis`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `ms_pertanyaan_ceklis`
--
ALTER TABLE `ms_pertanyaan_ceklis`
  MODIFY `id_pertanyaan_ceklis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `ms_pertanyaan_wawancara`
--
ALTER TABLE `ms_pertanyaan_wawancara`
  MODIFY `id_pertanyaan_wawancara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_cctv`
--
ALTER TABLE `tbl_cctv`
  MODIFY `id_cctv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_cekliss`
--
ALTER TABLE `tbl_cekliss`
  MODIFY `id_ceklis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_device`
--
ALTER TABLE `tbl_device`
  MODIFY `id_device` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_permintaan`
--
ALTER TABLE `tbl_permintaan`
  MODIFY `id_permintaan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_ssa1`
--
ALTER TABLE `tbl_ssa1`
  MODIFY `id_ssa1` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_ssa2`
--
ALTER TABLE `tbl_ssa2`
  MODIFY `id_ssa2` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_wawancara`
--
ALTER TABLE `tbl_wawancara`
  MODIFY `id_wawancara` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
