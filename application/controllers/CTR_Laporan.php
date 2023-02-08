<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTR_Laporan extends CI_Controller
{

    public function index()
    {
        $this->load->helper('url', 'form');
        $this->load->model('MODEL_Laporan', 'data');
        $this->load->library('mypdf');

        $data['judul'] = 'SIGAP PRIMA ASTREA';
        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $id = $this->uri->segment(3);
        // $id_wawancara = $this->uri->segment(4);
        $id_wawancara = $this->input->post('id_wawancara');
        $id_ssa1 = $this->input->post('id_ssa1');
        $id_ceklis = $this->input->post('id_ceklis');
        $id_ssa2 = $this->input->post('id_ssa2');
        $id_device = $this->input->post('id_device');
        $id_cctv = $this->input->post('id_cctv');

        $data['ya'] = $this->data->GetAllData();
        $data['isi'] = $this->data->GetData($id);
        //WawancaraComment
        $data['pertanyaan'] = $this->data->GetPertanyaan();
        $data['nama'] = $this->data->GetDataW($id);
        $data['isiW'] = $this->data->JoinJawaban($id, $id_wawancara)->result();
        $data['isiWDetail'] = $this->data->JoinJawabanDetail($id, $id_wawancara)->result();
        //SSA1Comment
        $data['isiS1'] = $this->data->GetDataS1($id, $id_ssa1);
        $data['isiS1Detail'] = $this->data->GetDataS1Detail($id);
        // CeklisComment
        $data['isiC'] = $this->data->GetDataC($id, $id_ceklis);
        $data['isiCDetail'] = $this->data->GetDataCDetail($id);
        $data['ceklisJoin'] = $this->data->GetPertanyaanJoin();
        //SSA2Comment
        $data['isi_detail_S2'] = $this->data->GetDetailS2($id);
        $data['isiS2'] = $this->data->GetDataS2($id, $id_ssa2);
        $data['isiS2Detail'] = $this->data->GetDataS2Detail($id);
        //DeviceComment
        $data['isiD'] = $this->data->GetDataD($id, $id_device);
        $data['isiDDetail'] = $this->data->GetDataDDetail($id);
        //CCTVComment
        $data['isi_detail_Ct'] = $this->data->GetDetailCt($id, $id_cctv);
        $data['isiCt'] = $this->data->GetDataCctv($id);
        $data['isiCtDetail'] = $this->data->GetDataCctvDetail($id);

        $this->mypdf->generate('Template/VIEW_Laporan', $data);
    }

    public function PrintExcel()
    {
        $this->load->model('MODEL_Laporan', 'data');

        $id = $this->uri->segment(3);
        $id_wawancara = $this->input->post('id_wawancara');
        $id_ssa2 = $this->input->post('id_ssa2');
        $id_cctv = $this->input->post('id_cctv');
        $id_ceklis = $this->input->post('id_ceklis');

        $isi = $this->data->GetData($id);
        // Wawancara
        // $data['pertanyaan'] = $this->data->GetPertanyaan();
        // $data['nama'] = $this->data->GetDataW($id);
        $data = $this->data->JoinJawabanExcel($id, $id_wawancara)->result();
        // SSA1
        $data2 = $this->data->GetDataS1Detail($id);
        // // CeklisComment
        // $data3 = $this->data->GetDataC($id, $id_ceklis);
        $data3 = $this->data->JoinJawabanCeklisExcel($id, $id_ceklis)->result();
        // $data['ceklisJoin'] = $this->data->GetPertanyaanJoin();
        // //SSA2Comment
        // $this->data->GetDetailS2Excel($id, $id_ssa2);
        $data4 = $this->data->GetDataS2Excel($id, $id_ssa2);
        // //DeviceComment
        $data5 = $this->data->GetDataDDetail($id);
        // //CCTVComment
        // $data['isi_detail_Ct'] = $this->data->GetDetailCt($id);
        $data6 = $this->data->GetDataCctvExcel($id, $id_cctv);

        // $data = $this->MODEL_Laporan->getData();

        include_once APPPATH . '/third_party/PHP_XLSXWriter-master/xlsxwriter.class.php';
        ini_set('display_errors', 0);
        ini_set('log_errors', 1);
        error_reporting(E_ALL & ~E_NOTICE);

        foreach ($isi as $key) {
            $filename = "Laporan Assesment " . $key->lokasi . ".xlsx";
        }
        $r = $filename;

        header('Content-disposition: attachment; filename="' . XLSXWriter::sanitize_filename($r) . '"');
        header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        header('Content-Transfer-Encoding: binary');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');

        $styles = array('font' => 'Arial', 'font-size' => 10, 'font-style' => 'bold', 'fill' => '#eee', 'halign' => 'center', 'border' => 'left,right,top,bottom', 'border-style' => 'thin');

        $styles2 = array('font' => 'Arial', 'font-size' => 10, 'border' => 'left,right,top,bottom', 'border-style' => 'thin');

        $writer = new XLSXWriter();
        $writer->setAuthor('IT Sigap');

        // Wawancara
        $header = array(
            'No' => 'integer',
            'Diwawancarai' => 'string',
            'Jabatan1' => 'string',
            'Diwawancara' => 'string',
            'Jabatan2' => 'string',
            'Foto wawancara' => 'string',
            'Pertanyaan' => 'string',
            'Proses' => 'string',
            'Jawaban' => 'string',
            'Created By' => 'string',
            'Created Date' => 'datetime',
            'Modified By' => 'string',
            'Modified Date' => 'datetime'
        );

        $writer->writeSheetHeader('Form Wawancara', $header, $styles);
        $no = 1;
        foreach ($data as $row) {
            $writer->writeSheetRow('Form Wawancara', [$no++, $row->diwawancarai, $row->jabatan1, $row->diwawancara, $row->jabatan2, $row->foto_wawancara, $row->pertanyaan, $row->proses, $row->jawaban, $row->created_nama, $row->created_date, $row->modified_nama, $row->modified_date], $styles2);
        }

        // SSA1
        $header2 = array(
            'No' => 'integer',
            'Nama Perusahaan' => 'string',
            'Jumlah MP' => 'integer',
            'Alamat Perusahaan' => 'string',
            'Kelurahan' => 'string',
            'Kecamatan' => 'string',
            'Kode Pos' => 'integer',
            'Nama Pic User' => 'string',
            'Jenis Usaha' => 'string',
            'Nama Arh' => 'string',
            'Nama Pic' => 'string',
            'No Telepone' => 'string',
            'Pola Jaga' => 'string',
            'Jenis Seragam' => 'string',
            'KTA' => 'string',
            'Pendidikan Anggota' => 'string',
            'Perlengkapan' => 'string',
            'Catatan1' => 'string',
            'Pagar' => 'string',
            'Gate' => 'string',
            'Luas Area' => 'string',
            'Penerangan' => 'string',
            'Catatan2' => 'string',
            'Guard Tour' => 'string',
            'Total1' => 'integer',
            'Handy Talky' => 'string',
            'total2' => 'integer',
            'Rompi' => 'string',
            'total3' => 'integer',
            'Lampu Lalin' => 'string',
            'total4' => 'integer',
            'Metal Detector' => 'string',
            'total5' => 'integer',
            'Rambu Stop' => 'string',
            'total6' => 'integer',
            'Mirror' => 'string',
            'total7' => 'integer',
            'ATK' => 'string',
            'Deskripsi Atk' => 'string',
            'Catatan3' => 'string',
            'Ump' => 'string',
            'BPJS' => 'string',
            'Catatan4' => 'string',
            'CCTV' => 'string',
            'total CCTV' => 'integer',
            'Access' => 'string',
            'Total Access' => 'integer',
            'Barrier' => 'string',
            'Total Barrier' => 'integer',
            'VMS' => 'string',
            'Total Vms' => 'integer',
            'Catatan5' => 'string',
            'Created By' => 'string',
            'Created Date' => 'datetime',
            'Modified By' => 'string',
            'Modified Date' => 'datetime'
        );

        $writer->writeSheetHeader('Form SSA1', $header2, $styles);
        $no = 1;
        foreach ($data2 as $row) {
            $writer->writeSheetRow('Form SSA1', [$no++, $row->nama_perusahaan, $row->jumlah_mp, $row->alamat_perusahaan, $row->kelurahan, $row->kecamatan, $row->kode_pos, $row->nama_pic_user, $row->jenis_usaha, $row->nama_arh, $row->nama_pic, $row->no_telp, $row->pola_jaga, $row->jenis_seragam, $row->kta, $row->pendidikan_anggota, $row->perlengkapan, $row->catatan_b, $row->pagar, $row->gate, $row->luas_area, $row->penerangan, $row->catatan_c, $row->guard_tour, $row->total_1, $row->handy_talky, $row->total_2, $row->rompi, $row->total_3, $row->lampu_lalin, $row->total_4, $row->metal_detector, $row->total_5, $row->rambu_stop, $row->total_6, $row->mirror, $row->total_7, $row->atk, $row->deskripsi_atk, $row->catatan_d, $row->ump, $row->bpjs, $row->catatan_e, $row->f_cctv, $row->total_1_a, $row->f_access, $row->total_1_b, $row->f_barrier, $row->total_1_c, $row->f_vms, $row->total_1_d, $row->catatan_f, $row->nama_created, $row->created_date, $row->nama_modified, $row->modified_date], $styles2);
        }

        // Ceklis
        $header3 = array(
            'No' => 'integer',
            'Pertanyaan Ceklis' => 'string',
            'Kategori Ceklis' => 'string',
            'Kondisi' => 'string',
            'Keterangan' => 'string',
            'Created By' => 'string',
            'Created Date' => 'datetime',
            'Modified By' => 'string',
            'Modified Date' => 'datetime'
        );

        $writer->writeSheetHeader('Form Ceklis', $header3, $styles);
        $no = 1;
        foreach ($data3 as $row) {
            $writer->writeSheetRow('Form Ceklis', [$no++, $row->pertanyaan_ceklis, $row->kategori_ceklis, $row->kondisi, $row->keterangan, $row->nama_created, $row->created_date, $row->nama_modified, $row->modified_date], $styles2);
        }

        // SSA2
        $header4 = array(
            'No' => 'integer',
            'Nama Pos' => 'string',
            'Total Anggota' => 'integer',
            'Jam Kerja' => 'string',
            'Foto Pos' => 'string',
            'Lokasi Kerja' => 'string',
            'Kerawanan' => 'string',
            'Ancaman' => 'string',
            'Fungsi Job Desk' => 'string',
            'Created By' => 'string',
            'Created Date' => 'datetime',
            'Modified By' => 'string',
            'Modified Date' => 'datetime'
        );

        $writer->writeSheetHeader('Form SSA2', $header4, $styles);
        $no = 1;
        foreach ($data4 as $row) {
            $writer->writeSheetRow('Form SSA2', [$no++, $row->nama_pos, $row->total_anggota, $row->jam_kerja, $row->foto_ssa2, $row->lokasi_kerja, $row->kerawanan, $row->ancaman, $row->fungsi_job_desk, $row->nama_created, $row->created_date, $row->nama_modified, $row->modified_date], $styles2);
        }

        // Survey Device
        $header5 = array(
            'No' => 'integer',
            'Apakah Perusahaan sudah ada CCTV' => 'string',
            'Berapa Banyak 1' => 'integer',
            'Merk CCTV' => 'string',
            'Type CCTV' => 'string',
            'Apakah CCTV Sudah Terpasang Apakah Perlu Tambahan' => 'string',
            'Berapa Banyak 2' => 'integer',
            'Catatan Tambahan' => 'string',
            'Apakah CCTV Mengalami Kendala' => 'string',
            'Seberapa Sering' => 'integer',
            'Catatan Tambahan 1' => 'string',
            'Apakah CCTV Dimonitoring Petugas' => 'string',
            'Jumlah Petugas' => 'integer',
            'Jumlah Layar Monitoring' => 'integer',
            'Catatan Tambahan 2' => 'string',
            'Apakah CCTV sudah berfungsi sebagai pengukur suhu tubuh' => 'string',
            'Apakah CCTV sudah berfungsi sebagai penghitung orang' => 'string',
            'Apakah CCTV sudah berfungsi sebagai heat map' => 'string',
            'Apakah CCTV sudah berfungsi sebagai face recognize' => 'string',
            'Apakah CCTV sudah berfungsi sebagai line crossing' => 'string',
            'Catatan Tambahan 3' => 'string',
            'Apakah Perusahaan sudah memiliki access control' => 'string',
            'Berapa Banyak 3' => 'integer',
            'Merk Access Control' => 'string',
            'Apakah access control sudah terintegrasi dengan sistem' => 'string',
            'Catatan 1' => 'string',
            'Saat ini access control digunakan dengan' => 'string',
            'Catatan 2' => 'string',
            'Topologi jaringan sudah fibel optik' => 'string',
            'Apakah jaringan berdiri sendiri atau tidak' => 'string',
            'Catatan dan Summary Keseluruhan' => 'string',
            'Created By' => 'string',
            'Created Date' => 'datetime',
            'Modified By' => 'string',
            'Modified Date' => 'datetime'
        );

        $writer->writeSheetHeader('Form Survey Device', $header5, $styles);
        $no = 1;
        foreach ($data5 as $row) {
            $writer->writeSheetRow('Form Survey Device', [$no++, $row->sudah_ada_cctv, $row->berapa_cctv, $row->merk_cctv, $row->type_cctv, $row->tambahan_cctv, $row->berapa_tambahan_cctv, $row->catatan_1, $row->kendala_cctv, $row->berapa_sering_kendala, $row->catatan_2, $row->monitoring_cctv, $row->jumlah_petugas, $row->jumlah_monitor, $row->catatan_3, $row->cctv_suhu_tubuh, $row->cctv_hitung_orang, $row->cctv_heat_map, $row->cctv_face_recognize, $row->cctv_line_crossing, $row->catatan_4, $row->memiliki_access_control, $row->berapa_access, $row->merk_access, $row->access_terintegrasi, $row->catatan_5, $row->access_digunakan_dengan, $row->catatan_6, $row->topologi_fibel_optik, $row->jaringan_berdiri_sendiri, $row->catatan_7, $row->nama_created, $row->created_date, $row->nama_modified, $row->modified_date], $styles2);
        }

        // CCTV
        $header6 = array(
            'No' => 'integer',
            'Lokasi CCTV' => 'string',
            'Kondisi CCTV' => 'string',
            'View Tampak Depan' => 'string',
            'View Tampak Belakang' => 'string',
            'Created By' => 'string',
            'Created Date' => 'datetime',
            'Modified By' => 'string',
            'Modified Date' => 'datetime'
        );

        $writer->writeSheetHeader('Form CCTV', $header6, $styles);
        $no = 1;
        foreach ($data6 as $row) {
            $writer->writeSheetRow('Form CCTV', [$no++, $row->lokasi_cctv, $row->kondisi_cctv, $row->view_depan, $row->view_belakang, $row->nama_created, $row->created_date, $row->nama_modified, $row->modified_date], $styles2);
        }

        $writer->writeToStdOut();
        redirect('Presales/CTR_Presales/approved');
    }

    public function PrintWawancara()
    {
        $this->load->helper('url', 'form');
        $this->load->model('MODEL_Laporan', 'data');
        $this->load->library('mypdf');

        $data['judul'] = 'SIGAP PRIMA ASTREA';
        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $id = $this->uri->segment(3);
        $id_wawancara = $this->input->post('id_wawancara');

        $data['isi'] = $this->data->GetData($id, $id_wawancara);
        $data['pertanyaan'] = $this->data->GetPertanyaan();
        $data['nama'] = $this->data->GetDataW($id);
        $data['isiW'] = $this->data->JoinJawaban($id, $id_wawancara)->result();
        $data['isiWDetail'] = $this->data->JoinJawabanDetail($id, $id_wawancara)->result();

        $this->mypdf->generate('Template/Laporan/Laporan_Wawancara', $data);
    }

    public function PrintSsa1()
    {
        $this->load->helper('url', 'form');
        $this->load->model('MODEL_Laporan', 'data');
        $this->load->library('mypdf');

        $data['judul'] = 'SIGAP PRIMA ASTREA';
        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $id = $this->uri->segment(3);
        $id_ssa1 = $this->input->post('id_ssa1');
        $data['isi'] = $this->data->GetData($id);
        //SSA1Comment
        $data['isiS1'] = $this->data->GetDataS1($id, $id_ssa1);
        $data['isiS1Detail'] = $this->data->GetDataS1Detail($id);

        $this->mypdf->generate('Template/Laporan/Laporan_SSA1', $data);
    }

    public function PrintCeklis()
    {
        $this->load->helper('url', 'form');
        $this->load->model('MODEL_Laporan', 'data');
        $this->load->library('mypdf');

        $data['judul'] = 'SIGAP PRIMA ASTREA';
        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $id = $this->uri->segment(3);
        $id_ceklis = $this->input->post('id_ceklis');
        $data['isi'] = $this->data->GetData($id);
        // CeklisComment
        $data['isiC'] = $this->data->GetDataC($id, $id_ceklis);
        $data['ceklisJoin'] = $this->data->GetPertanyaanJoin();
        $data['isiCDetail'] = $this->data->GetDataCDetail($id);

        $this->mypdf->generate('Template/Laporan/Laporan_Ceklis', $data);
    }

    public function PrintSsa2()
    {
        $this->load->helper('url', 'form');
        $this->load->model('MODEL_Laporan', 'data');
        $this->load->library('mypdf');

        $data['judul'] = 'SIGAP PRIMA ASTREA';
        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $id = $this->uri->segment(3);
        $id_ssa2 = $this->input->post('id_ssa2');
        $data['isi'] = $this->data->GetData($id);
        // //SSA2Comment
        $data['isi_detail_S2'] = $this->data->GetDetailS2($id);
        $data['isiS2'] = $this->data->GetDataS2($id, $id_ssa2);
        $data['isiS2Detail'] = $this->data->GetDataS2Detail($id);

        $this->mypdf->generate('Template/Laporan/Laporan_SSA2', $data);
    }

    public function PrintDevice()
    {
        $this->load->helper('url', 'form');
        $this->load->model('MODEL_Laporan', 'data');
        $this->load->library('mypdf');

        $data['judul'] = 'SIGAP PRIMA ASTREA';
        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $id = $this->uri->segment(3);
        $id_device = $this->input->post('id_device');
        $data['isi'] = $this->data->GetData($id);
        // //DeviceComment
        $data['isiD'] = $this->data->GetDataD($id, $id_device);
        $data['isiDDetail'] = $this->data->GetDataDDetail($id);

        $this->mypdf->generate('Template/Laporan/Laporan_Device', $data);
    }

    public function PrintCctv()
    {
        $this->load->helper('url', 'form');
        $this->load->model('MODEL_Laporan', 'data');
        $this->load->library('mypdf');

        $data['judul'] = 'SIGAP PRIMA ASTREA';
        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $id = $this->uri->segment(3);
        $id_cctv = $this->input->post('id_cctv');
        $data['isi'] = $this->data->GetData($id);
        // //CCTVComment
        $data['isi_detail_Ct'] = $this->data->GetDetailCt($id, $id_cctv);
        $data['isiCt'] = $this->data->GetDataCctv($id);
        $data['isiCtDetail'] = $this->data->GetDataCctvDetail($id);

        $this->mypdf->generate('Template/Laporan/Laporan_Cctv', $data);
    }
}
