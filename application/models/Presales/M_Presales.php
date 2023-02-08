<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Presales extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function GetAllData()
    {
        $query = $this->db->query("SELECT a.id_permintaan,a.lokasi, a.npp, a.nps, a.status, a.form_revisi,a.pemilihan_user,a.nama_user,a.sub_lokasi,a.luas_wilayah,a.kegiatan_akan, a.deskripsi,a.file_ppt,a.created_date, a.created_by, a.modified_by, a.modified_date, b4.sub_lokasi_arh, b1.nama as nama_created, b2.nama as nama_modified,b3.nama as nama_approval,b4.nama as nama_arh FROM tbl_permintaan a LEFT JOIN tbl_user b1 ON a.created_by = b1.npk LEFT JOIN tbl_user b2 ON a.modified_by = b2.npk LEFT JOIN tbl_user b3 ON a.approval_by = b3.npk LEFT JOIN tbl_user b4 ON a.nama_arh = b4.npk");
        return $query->result();
    }

    // Master Data pertanyaan Wawancara
    function GetPertanyaan()
    {
        $this->db->select('*')->from('ms_pertanyaan_wawancara');
        $rs = $this->db->get();
        return $rs->result();
    }

    // Cekliss
    function GetKategoriCeklis()
    {
        $this->db->select('*')->from('ms_kategori_ceklis');
        $rs = $this->db->get();
        return $rs->result();
    }

    function GetPertanyaanJoin()
    {
        $this->db->select('*')->from('ms_pertanyaan_ceklis a')->join('ms_kategori_ceklis b', 'a.id_kategori = b.id_kategori', 'left')->order_by('kategori_ceklis', 'asc');
        $this->db->get();
    }
    // End

    // Master Data pertanyaan Ceklis
    function GetPertanyaanCeklisID($id)
    {
        $this->db->select('*')->from('ms_pertanyaan_ceklis a')->join('ms_kategori_ceklis b', 'a.id_kategori = b.id_kategori')->where('b.id_kategori', $id);
        $rs = $this->db->get();
        return $rs->result();
    }

    function GetKategoriCeklisID($id)
    {
        $this->db->select('*')->from('ms_kategori_ceklis')->where('id_kategori', $id);
        $rs = $this->db->get();
        return $rs->result();
    }

    function JoinJawaban($id)
    {
        // $id_wawancara = $this->input->post('id_wawancara');
        $this->db->select('*');
        $this->db->from('ms_jawaban_wawancara');
        $this->db->join('ms_pertanyaan_wawancara', 'ms_jawaban_wawancara.id_pertanyaan_wawancara = ms_pertanyaan_wawancara.id_pertanyaan_wawancara');
        $this->db->join('tbl_wawancara', 'ms_jawaban_wawancara.id_wawancara = tbl_wawancara.id_wawancara');
        $this->db->where('tbl_wawancara.id_permintaan', $id);
        $query = $this->db->get();
        return $query;
    }

    function JoinJawabanDetail($id)
    {
        // $id_wawancara = $this->input->post('id_wawancara');
        $this->db->select('a.id_jawaban_wawancara, a.id_wawancara, b.pertanyaan, b.proses, a.jawaban, a.created_by,DATE_FORMAT(a.created_date, "%d %M %Y %H:%i:%s") AS created_date, DATE_FORMAT(a.modified_date, "%d %M %Y %H:%i:%s") AS modified_date,a.modified_by, d1.nama as created_nama, d2.nama as modified_nama');
        $this->db->from('ms_jawaban_wawancara a');
        $this->db->join('ms_pertanyaan_wawancara b', 'a.id_pertanyaan_wawancara = b.id_pertanyaan_wawancara');
        $this->db->join('tbl_wawancara c', 'a.id_wawancara = c.id_wawancara');
        $this->db->join('tbl_user d1', 'a.created_by = d1.npk', 'left');
        $this->db->join('tbl_user d2', 'a.modified_by = d2.npk', 'left');
        $this->db->where('c.id_permintaan', $id);
        $query = $this->db->get();
        return $query;
    }

    function JoinJawabanCeklis($id)
    {
        $this->db->select('*');
        $this->db->from('ms_jawaban_ceklis');
        $this->db->join('ms_pertanyaan_ceklis', 'ms_jawaban_ceklis.id_pertanyaan_ceklis = ms_pertanyaan_ceklis.id_pertanyaan_ceklis');
        $this->db->join('tbl_cekliss', 'ms_jawaban_ceklis.id_ceklis = tbl_cekliss.id_ceklis');
        $this->db->where('tbl_cekliss.id_permintaan', $id);
        $query = $this->db->get();
        return $query;
    }

    function GetData($id)
    {
        $this->db->select('*')->from('tbl_permintaan')->where('id_permintaan', $id);
        $rs = $this->db->get();
        return $rs->result();
    }

    function GetDataDetail($id)
    {
        $this->db->select('a.lokasi, a.npp, a.nps, a.status, a.form_revisi,a.pemilihan_user, a.deskripsi,a.file_ppt,a.created_date, a.created_by, a.modified_by, a.modified_date, b1.nama as nama_approval, b2.nama as nama_modified,')->from('tbl_permintaan a')->join('tbl_user b1', 'a.approval_by = b1.npk', 'LEFT')->join('tbl_user b2', 'a.modified_by = b2.npk', 'LEFT')->where('id_permintaan', $id);
        $rs = $this->db->get();
        return $rs->result();
    }

    function GetDataW($id)
    {
        $this->db->select('*')->from('tbl_wawancara')->where('id_permintaan', $id);
        $rs = $this->db->get();
        return $rs->result();
    }

    function GetDataS1($id)
    {
        $this->db->select('*')->from('tbl_ssa1')->where('id_permintaan', $id);
        $rs = $this->db->get();
        return $rs->result();
    }

    function GetDataS1Detail($id)
    {
        $this->db->select('a.id_ssa1, a.nama_perusahaan, a.jumlah_mp, a.alamat_perusahaan, a.kelurahan, a.kecamatan, a.kode_pos, a.nama_pic_user, a.jenis_usaha, a.nama_arh, a.nama_pic, a.no_telp, a.pola_jaga, a.jenis_seragam, a.kta, a.pendidikan_anggota, a.perlengkapan, a.catatan_b, a.pagar, a.gate, a.luas_area, a.penerangan, a.catatan_c, a.guard_tour, a.total_1, a.handy_talky,a.total_2, a.rompi, a.total_3,a.lampu_lalin,a.total_4,a.metal_detector,a.total_5,a.rambu_stop,a.total_6,a.mirror,a.total_7,a.atk,a.deskripsi_atk,a.catatan_d,a.ump,a.bpjs,a.catatan_e,a.f_cctv,a.f_access,a.f_barrier,a.total_1_a,a.total_1_b,a.total_1_c,a.f_vms,a.total_1_d,a.catatan_f,b1.nama as nama_created, b2.nama as nama_modified, DATE_FORMAT(a.created_date, "%d %M %Y %H:%i:%s") AS created_date, DATE_FORMAT(a.modified_date, "%d %M %Y %H:%i:%s") AS modified_date')->from('tbl_ssa1 a')->join('tbl_user b1', 'a.created_by = b1.npk', 'LEFT')->join('tbl_user b2', 'a.modified_by = b2.npk', 'LEFT')->where('id_permintaan', $id);
        $rs = $this->db->get();
        return $rs->result();
    }

    function GetDataC($id)
    {
        $this->db->select('*')->from('tbl_cekliss')->where('id_permintaan', $id);
        $rs = $this->db->get();
        return $rs->result();
    }

    function GetDataCDetail($id)
    {
        $this->db->select('a.id_ceklis, a.id_permintaan, b1.nama as nama_created, b2.nama as nama_modified, DATE_FORMAT(a.created_date, "%d %M %Y %H:%i:%s") AS created_date, DATE_FORMAT(a.modified_date, "%d %M %Y %H:%i:%s") AS modified_date')->from('tbl_cekliss a')->join('tbl_user b1', 'a.created_by = b1.npk', 'LEFT')->join('tbl_user b2', 'a.modified_by = b2.npk', 'LEFT')->where('id_permintaan', $id);
        $rs = $this->db->get();
        return $rs->result();
    }

    function GetTotalCeklis()
    {
        $query = $this->db->query('SELECT * FROM ms_pertanyaan_ceklis WHERE status_pertanyaan_ceklis= "Aktif"');
        $totCeklis = $query->num_rows();
        return $totCeklis;
    }


    function GetDetailS2($id)
    {
        $this->db->select('*');
        $this->db->from('detail_ssa2');
        $rs = $this->db->get();
        return $rs->result();
    }

    function GetDataS2($id)
    {
        $this->db->select('*')->from('tbl_ssa2')->where('id_permintaan', $id);
        $rs = $this->db->get();
        return $rs->result();
    }

    function GetDataS2Detail($id)
    {
        $this->db->select('a.id_ssa2, a.id_permintaan, b1.nama as nama_created, b2.nama as nama_modified, DATE_FORMAT(a.created_date, "%d %M %Y %H:%i:%s") AS created_date,DATE_FORMAT(a.modified_date, "%d %M %Y %H:%i:%s") AS modified_date')->from('tbl_ssa2 a')->join('tbl_user b1', 'a.created_by = b1.npk', 'LEFT')->join('tbl_user b2', 'a.modified_by = b2.npk', 'LEFT')->where('id_permintaan', $id);
        $rs = $this->db->get();
        return $rs->result();
    }

    function GetDataD($id)
    {
        $this->db->select('*')->from('tbl_device')->where('id_permintaan', $id);
        $rs = $this->db->get();
        return $rs->result();
    }

    function GetDataDDetail($id)
    {
        $this->db->SELECT('a.id_device, a.id_permintaan, a.sudah_ada_cctv, a.berapa_cctv, a.merk_cctv, a.type_cctv, a.tambahan_cctv, a.berapa_tambahan_cctv, a.catatan_1, a.kendala_cctv, a.berapa_sering_kendala, a.catatan_2, a.monitoring_cctv, a.jumlah_petugas, a.jumlah_monitor, a.catatan_3, a.cctv_suhu_tubuh, a.cctv_hitung_orang, a.cctv_heat_map, a.cctv_face_recognize, a.cctv_line_crossing, a.catatan_4, a.memiliki_access_control, a.berapa_access, a.merk_access, a.access_terintegrasi, a.catatan_5, a.access_digunakan_dengan, a.catatan_6, a.topologi_fibel_optik, a.jaringan_berdiri_sendiri, a.catatan_7, b1.nama as nama_created, b2.nama as nama_modified, DATE_FORMAT(a.created_date, "%d %M %Y %H:%i:%s") as created_date, DATE_FORMAT(a.modified_date, "%d %M %Y %H:%i:%s") AS modified_date')->from('tbl_device a')->join('tbl_user b1', 'a.created_by = b1.npk', 'LEFT')->join('tbl_user b2', 'a.modified_by = b2.npk', 'LEFT')->where('id_permintaan', $id);
        $rs = $this->db->get();
        return $rs->result();
    }

    function GetDetailCt($id)
    {
        $this->db->select('*');
        $this->db->from('detail_cctv');
        $rs = $this->db->get();
        return $rs->result();
    }

    function GetDataCctv($id)
    {
        $this->db->select('*')->from('tbl_cctv a')->where('id_permintaan', $id);
        $rs = $this->db->get();
        return $rs->result();
    }

    function GetDataCctvDetail($id)
    {
        $this->db->select('a.id_cctv, a.id_permintaan,b1.nama as nama_created, b2.nama as nama_modified, DATE_FORMAT(a.created_date, "%d %M %Y %H:%i:%s") as created_date, DATE_FORMAT(a.modified_date, "%d %M %Y %H:%i:%s") AS modified_date')->from('tbl_cctv a')->join('tbl_user b1', 'a.created_by = b1.npk', 'LEFT')->join('tbl_user b2', 'a.modified_by = b2.npk', 'LEFT')->where('id_permintaan', $id);
        $rs = $this->db->get();
        return $rs->result();
    }

    // function progres()
    // {
    //     $query = $this->db->query("SELECT a.id_permintaan,a.lokasi, a.npp, a.nps, a.status, a.form_revisi,a.pemilihan_user,a.nama_user,a.sub_lokasi,a.luas_wilayah,a.kegiatan_akan, a.deskripsi,a.file_ppt,a.created_date, a.created_by, a.modified_by, a.modified_date, b1.nama as nama_created, b2.nama as nama_modified FROM tbl_permintaan a LEFT JOIN tbl_user b1 ON a.created_by = b1.npk LEFT JOIN tbl_user b2 ON a.modified_by = b2.npk WHERE status = 'On Progress'");
    //     return $query->result();
    // }

    // function menunggu_approval()
    // {
    //     $query = $this->db->query("SELECT a.id_permintaan,a.lokasi, a.npp, a.nps, a.status, a.form_revisi,a.pemilihan_user,a.nama_user,a.sub_lokasi,a.luas_wilayah,a.kegiatan_akan, a.deskripsi,a.file_ppt,a.created_date, a.created_by, a.modified_by, a.modified_date, b1.nama as nama_created, b2.nama as nama_modified FROM tbl_permintaan a LEFT JOIN tbl_user b1 ON a.created_by = b1.npk LEFT JOIN tbl_user b2 ON a.modified_by = b2.npk WHERE status = 'Menunggu Approval' ");
    //     return $query->result();
    // }

    // function revisi()
    // {
    //     $query = $this->db->query("SELECT * FROM tbl_permintaan WHERE status = 'Revisi' ");
    //     return $query->result();
    // }

    function disetujui()
    {
        $query1 = $this->db->query("SELECT a.id_permintaan, a.lokasi, a.nps, a.status,a.pemilihan_user,a.created_date, a.created_by,a.modified_by, a.modified_date, b.id_wawancara, c.id_ssa1, d.id_ceklis, e.id_ssa2, f.id_device, g.id_cctv FROM tbl_permintaan a LEFT JOIN tbl_wawancara b ON a.id_permintaan = b.id_permintaan LEFT JOIN tbl_ssa1 c ON a.id_permintaan = c.id_permintaan LEFT JOIN tbl_cekliss d ON a.id_permintaan = d.id_permintaan LEFT JOIN tbl_ssa2 e ON a.id_permintaan = e.id_permintaan LEFT JOIN tbl_device f ON a.id_permintaan = f.id_permintaan LEFT JOIN tbl_cctv g ON a.id_permintaan = g.id_permintaan WHERE a.status = 'Approved' AND (b.id_wawancara IN (SELECT MAX(id_wawancara) FROM tbl_wawancara GROUP BY id_permintaan)) AND (c.id_ssa1 IN (SELECT MAX(id_ssa1) FROM tbl_ssa1 GROUP BY id_permintaan)) AND (d.id_ceklis IN (SELECT MAX(id_ceklis) FROM tbl_cekliss GROUP BY id_permintaan)) AND (e.id_ssa2 IN (SELECT MAX(id_ssa2) FROM tbl_ssa2 GROUP BY id_permintaan)) AND (f.id_device IN (SELECT MAX(id_device) FROM tbl_device GROUP BY id_permintaan)) AND (g.id_cctv IN (SELECT MAX(id_cctv) FROM tbl_cctv GROUP BY id_permintaan))");
        return $query1->result();
    }

    function JumlahProgres()
    {
        $query = $this->db->query('SELECT * FROM tbl_permintaan WHERE status= "On Progress"');
        $progres = $query->num_rows();
        return $progres;
    }

    // function JumlahProgresMenunggu()
    // {
    //     $query = $this->db->query('SELECT * FROM tbl_permintaan WHERE status= "On Progress" OR status="Menunggu Approval"');
    //     $progres = $query->num_rows();
    //     return $progres;
    // }

    function JumlahMenungguApproval()
    {
        $query = $this->db->query('SELECT * FROM tbl_permintaan WHERE status= "Menunggu Approval" ');
        $pending = $query->num_rows();
        return $pending;
    }

    function JumlahMenunggu()
    {
        $query = $this->db->query('SELECT * FROM tbl_permintaan WHERE status= "Pending" ');
        $pending = $query->num_rows();
        return $pending;
    }

    function JumlahRevisi()
    {
        $query = $this->db->query('SELECT * FROM tbl_permintaan WHERE status= "Revisi"');
        $revisi = $query->num_rows();
        return $revisi;
    }

    function JumlahDisetujui()
    {
        $query = $this->db->query('SELECT * FROM tbl_permintaan WHERE status= "Approved"');
        $approved = $query->num_rows();
        return $approved;
    }

    function JumlahSeluruh()
    {
        $query = $this->db->query('SELECT * FROM tbl_permintaan WHERE status != "Menunggu Assignment" AND status != "Declined"');
        $seluruh = $query->num_rows();
        return $seluruh;
    }

    function TotalCeklis()
    {
        $query = $this->db->query('SELECT * FROM ms_pertanyaan_ceklis');
        $ckls = $query->num_rows();
        return $ckls;
    }

    function TotalWawancara()
    {
        $query = $this->db->query('SELECT * FROM ms_pertanyaan_wawancara');
        $wwn = $query->num_rows();
        return $wwn;
    }
}
