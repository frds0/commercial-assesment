<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MODEL_Laporan extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function GetAllData()
    {
        $this->db->select('*')->from('tbl_permintaan');
        $this->db->order_by('id_permintaan', 'asc');
        $rs = $this->db->get();
        return $rs->result();
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

    function JoinJawaban($id, $id_wawancara)
    {
        $query = $this->db->query("SELECT * FROM ms_jawaban_wawancara WHERE id_wawancara = '$id_wawancara' ");
        $pending = $query->num_rows();
        $this->db->select('*');
        $this->db->from('ms_jawaban_wawancara');
        $this->db->join('ms_pertanyaan_wawancara', 'ms_jawaban_wawancara.id_pertanyaan_wawancara = ms_pertanyaan_wawancara.id_pertanyaan_wawancara', 'LEFT');
        $this->db->join('tbl_wawancara', 'ms_jawaban_wawancara.id_wawancara = tbl_wawancara.id_wawancara', 'LEFT');
        $this->db->where('tbl_wawancara.id_permintaan', $id);
        $this->db->where('ms_jawaban_wawancara.id_wawancara', $id_wawancara);
        // $this->db->order_by('tbl_wawancara.id_permintaan', 'DESC');
        // $this->db->order_by('ms_jawaban_wawancara.id_wawancara', 'ASC');
        $this->db->limit($pending);
        // $this->db->order_by('tbl_wawancara.id_wawancara', 'DESC');
        // $this->db->limit('', 'tbl_wawancara.id_permintaan');
        $query = $this->db->get();
        return $query;
    }

    function JoinJawabanDetail($id, $id_wawancara)
    {
        $query = $this->db->query("SELECT * FROM ms_jawaban_wawancara WHERE id_wawancara = '$id_wawancara' ");
        $pending = $query->num_rows();
        // $id_wawancara = $this->input->post('id_wawancara');
        $this->db->select('a.id_jawaban_wawancara, a.id_wawancara, b.pertanyaan, b.proses, a.jawaban, a.created_by,DATE_FORMAT(a.created_date, "%d %M %Y %H:%i:%s") AS created_date, DATE_FORMAT(a.modified_date, "%d %M %Y %H:%i:%s") AS modified_date,a.modified_by, d1.nama as created_nama, d2.nama as modified_nama');
        $this->db->from('ms_jawaban_wawancara a');
        $this->db->join('ms_pertanyaan_wawancara b', 'a.id_pertanyaan_wawancara = b.id_pertanyaan_wawancara');
        $this->db->join('tbl_wawancara c', 'a.id_wawancara = c.id_wawancara');
        $this->db->join('tbl_user d1', 'a.created_by = d1.npk', 'left');
        $this->db->join('tbl_user d2', 'a.modified_by = d2.npk', 'left');
        $this->db->where('c.id_permintaan', $id);
        $this->db->where('a.id_wawancara', $id_wawancara);
        // $this->db->order_by('a.id_wawancara', 'ASC');
        $this->db->limit($pending);
        $query = $this->db->get();
        return $query;
    }

    function JoinJawabanExcel($id, $id_wawancara)
    {
        $query = $this->db->query("SELECT * FROM ms_jawaban_wawancara WHERE id_wawancara = '$id_wawancara' ");
        $wawancara = $query->num_rows();

        $this->db->select('a.id_jawaban_wawancara, a.id_wawancara, b.pertanyaan, b.proses, a.jawaban, a.created_by,a.created_date,a.modified_by,a.modified_date, c.diwawancarai, c.jabatan1, c.diwawancara, c.jabatan2, c.foto_wawancara, d1.nama as created_nama, d2.nama as modified_nama');
        $this->db->from('ms_jawaban_wawancara a');
        $this->db->join('ms_pertanyaan_wawancara b', 'a.id_pertanyaan_wawancara = b.id_pertanyaan_wawancara', 'LEFT');
        $this->db->join('tbl_wawancara c', 'a.id_wawancara = c.id_wawancara', 'LEFT');
        $this->db->join('tbl_user d1', 'a.created_by = d1.npk', 'left');
        $this->db->join('tbl_user d2', 'a.modified_by = d2.npk', 'left');
        $this->db->where('c.id_permintaan', $id);
        $this->db->order_by('a.id_wawancara', 'DESC');
        $this->db->limit($wawancara);
        $query = $this->db->get();
        return $query;
    }

    function JoinJawabanCeklisExcel($id, $id_ceklis)
    {
        $query = $this->db->query("SELECT * FROM ms_jawaban_ceklis WHERE id_ceklis = '$id_ceklis'");
        $ceklis = $query->num_rows();
        // $cek = $query->result();

        $this->db->select('b.pertanyaan_ceklis, c.kategori_ceklis, a.kondisi,a.keterangan,a.id_jawaban_ceklis, a.id_ceklis, a.id_pertanyaan_ceklis, d.id_permintaan, ,b1.nama as nama_created, b2.nama as nama_modified, d.created_date, d.modified_date');
        $this->db->from('ms_jawaban_ceklis a');
        $this->db->join('ms_pertanyaan_ceklis b', 'a.id_pertanyaan_ceklis = b.id_pertanyaan_ceklis', 'LEFT');
        $this->db->join('ms_kategori_ceklis c', 'b.id_kategori = c.id_kategori', 'LEFT');
        $this->db->join('tbl_cekliss d', 'a.id_ceklis = d.id_ceklis', 'LEFT');
        $this->db->join('tbl_user b1', 'd.created_by = b1.npk', 'LEFT');
        $this->db->join('tbl_user b2', 'd.modified_by = b2.npk', 'LEFT');
        $this->db->where('d.id_permintaan', $id);
        $this->db->where('d.id_ceklis', $id_ceklis);
        $this->db->order_by('a.id_ceklis', 'DESC');
        $this->db->limit($ceklis);
        $query = $this->db->get();
        return $query;

        // SELECT * from ms_jawaban_ceklis a LEFT JOIN ms_pertanyaan_ceklis b ON a.id_pertanyaan_ceklis = b.id_pertanyaan_ceklis LEFT JOIN ms_kategori_ceklis c ON c.id_kategori = b.id_kategori LEFT JOIN tbl_cekliss d ON a.id_ceklis = d.id_ceklis WHERE d.id_permintaan = 24 ORDER BY `a`.`id_jawaban_ceklis` ASC;
    }

    function GetData($id)
    {
        $this->db->select('*')->from('tbl_permintaan')->where('id_permintaan', $id);
        $rs = $this->db->get();
        return $rs->result();
    }

    function GetDataW($id)
    {
        $this->db->select('*')->from('tbl_wawancara')->where('id_permintaan', $id)->order_by('id_wawancara', 'DESC')->limit(1);
        $rs = $this->db->get();
        return $rs->result();
    }

    function GetDataS1($id)
    {
        $this->db->select('*')->from('tbl_ssa1')->where('id_permintaan', $id)->order_by('id_ssa1', 'DESC')->limit(1);
        $rs = $this->db->get();
        return $rs->result();
    }

    function GetDataS1Detail($id)
    {
        $this->db->select('a.id_ssa1, a.nama_perusahaan, a.jumlah_mp, a.alamat_perusahaan, a.kelurahan, a.kecamatan, a.kode_pos, a.nama_pic_user, a.jenis_usaha, a.nama_arh, a.nama_pic, a.no_telp, a.pola_jaga, a.jenis_seragam, a.kta, a.pendidikan_anggota, a.perlengkapan, a.catatan_b, a.pagar, a.gate, a.luas_area, a.penerangan, a.catatan_c, a.guard_tour, a.total_1, a.handy_talky,a.total_2, a.rompi, a.total_3,a.lampu_lalin,a.total_4,a.metal_detector,a.total_5,a.rambu_stop,a.total_6,a.mirror,a.total_7,a.atk,a.deskripsi_atk,a.catatan_d,a.ump,a.bpjs,a.catatan_e,a.f_cctv,a.f_access,a.f_barrier,a.total_1_a,a.total_1_b,a.total_1_c,a.f_vms,a.total_1_d,a.catatan_f,b1.nama as nama_created, b2.nama as nama_modified, a.created_date, a.modified_date')->from('tbl_ssa1 a')->join('tbl_user b1', 'a.created_by = b1.npk', 'LEFT')->join('tbl_user b2', 'a.modified_by = b2.npk', 'LEFT')->where('id_permintaan', $id)->order_by('id_ssa1', 'DESC')->limit(1);
        $rs = $this->db->get();
        return $rs->result();
    }

    function GetDataC($id)
    {
        $this->db->select('*')->from('tbl_cekliss')->where('id_permintaan', $id)->order_by('id_ceklis', 'DESC')->limit(1);
        $rs = $this->db->get();
        return $rs->result();
    }

    function GetDataCDetail($id)
    {
        $this->db->select('a.id_ceklis, a.id_permintaan, b1.nama as nama_created, b2.nama as nama_modified, a.created_date, a.modified_date')->from('tbl_cekliss a')->join('tbl_user b1', 'a.created_by = b1.npk', 'LEFT')->join('tbl_user b2', 'a.modified_by = b2.npk', 'LEFT')->where('id_permintaan', $id)->order_by('id_ceklis', 'DESC')->limit(1);
        $rs = $this->db->get();
        return $rs->result();
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
        $this->db->select('*')->from('tbl_ssa2')->where('id_permintaan', $id)->order_by('id_ssa2', 'DESC')->limit(1);
        $rs = $this->db->get();
        return $rs->result();
    }

    function GetDataS2Detail($id)
    {
        $this->db->select('a.id_ssa2, a.id_permintaan, b1.nama as nama_created, b2.nama as nama_modified, DATE_FORMAT(a.created_date, "%d %M %Y %H:%i:%s") AS created_date,DATE_FORMAT(a.modified_date, "%d %M %Y %H:%i:%s") AS modified_date')->from('tbl_ssa2 a')->join('tbl_user b1', 'a.created_by = b1.npk', 'LEFT')->join('tbl_user b2', 'a.modified_by = b2.npk', 'LEFT')->where('id_permintaan', $id)->order_by('id_ssa2', 'DESC')->limit(1);
        $rs = $this->db->get();
        return $rs->result();
    }

    function GetDataS2Excel($id, $id_ssa2)
    {
        $query = $this->db->query("SELECT * FROM detail_ssa2 WHERE id_ssa2 = '$id_ssa2' ");
        $ssa2 = $query->num_rows();

        $this->db->select('a.id_ssa2, a.id_permintaan, b1.nama as nama_created,b.id_detail_ssa2,b.nama_pos,b.total_anggota,b.jam_kerja,b.lokasi_kerja,b.kerawanan,b.ancaman,b.fungsi_job_desk,b.foto_ssa2, b2.nama as nama_modified, a.created_date,a.modified_date')->from('tbl_ssa2 a')->join('detail_ssa2 b', 'a.id_ssa2 = b.id_ssa2')->join('tbl_user b1', 'a.created_by = b1.npk', 'LEFT')->join('tbl_user b2', 'a.modified_by = b2.npk', 'LEFT')->where('id_permintaan', $id)->order_by('a.id_ssa2', 'DESC')->limit($ssa2);
        $rs = $this->db->get();
        return $rs->result();
    }

    function GetDataD($id)
    {
        $this->db->select('*')->from('tbl_device')->where('id_permintaan', $id)->order_by('id_device', 'DESC')->limit(1);
        $rs = $this->db->get();
        return $rs->result();
    }

    function GetDataDDetail($id)
    {
        $this->db->SELECT('a.id_device, a.id_permintaan, a.sudah_ada_cctv, a.berapa_cctv, a.merk_cctv, a.type_cctv, a.tambahan_cctv, a.berapa_tambahan_cctv, a.catatan_1, a.kendala_cctv, a.berapa_sering_kendala, a.catatan_2, a.monitoring_cctv, a.jumlah_petugas, a.jumlah_monitor, a.catatan_3, a.cctv_suhu_tubuh, a.cctv_hitung_orang, a.cctv_heat_map, a.cctv_face_recognize, a.cctv_line_crossing, a.catatan_4, a.memiliki_access_control, a.berapa_access, a.merk_access, a.access_terintegrasi, a.catatan_5, a.access_digunakan_dengan, a.catatan_6, a.topologi_fibel_optik, a.jaringan_berdiri_sendiri, a.catatan_7, b1.nama as nama_created, b2.nama as nama_modified, a.created_date, a.modified_date')->from('tbl_device a')->join('tbl_user b1', 'a.created_by = b1.npk', 'LEFT')->join('tbl_user b2', 'a.modified_by = b2.npk', 'LEFT')->where('id_permintaan', $id)->order_by('id_device', 'DESC')->limit(1);
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
        $this->db->select('*')->from('tbl_cctv a')->where('id_permintaan', $id)->order_by('id_cctv', 'DESC')->limit(1);
        $rs = $this->db->get();
        return $rs->result();
    }

    function GetDataCctvDetail($id)
    {
        $this->db->select('a.id_cctv, a.id_permintaan,b1.nama as nama_created, b2.nama as nama_modified, DATE_FORMAT(a.created_date, "%d %M %Y %H:%i:%s") as created_date, DATE_FORMAT(a.modified_date, "%d %M %Y %H:%i:%s") AS modified_date')->from('tbl_cctv a')->join('tbl_user b1', 'a.created_by = b1.npk', 'LEFT')->join('tbl_user b2', 'a.modified_by = b2.npk', 'LEFT')->where('id_permintaan', $id)->order_by('id_cctv', 'DESC')->limit(1);
        $rs = $this->db->get();
        return $rs->result();
    }

    function GetDataCctvExcel($id, $id_cctv)
    {
        $query = $this->db->query("SELECT * FROM detail_cctv WHERE id_cctv = '$id_cctv' ");
        $cctv = $query->num_rows();

        $this->db->select('a.id_cctv, a.id_permintaan,b1.nama as nama_created, b2.nama as nama_modified, a.created_date, a.modified_date,b.id_detail_cctv,b.lokasi_cctv,b.kondisi_cctv,b.view_depan,b.view_belakang')->from('tbl_cctv a')->join('detail_cctv b', 'a.id_cctv = b.id_cctv')->join('tbl_user b1', 'a.created_by = b1.npk', 'LEFT')->join('tbl_user b2', 'a.modified_by = b2.npk', 'LEFT')->where('id_permintaan', $id)->order_by('a.id_cctv', 'DESC')->limit($cctv);
        $rs = $this->db->get();
        return $rs->result();
    }
}
