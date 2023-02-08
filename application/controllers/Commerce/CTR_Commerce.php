<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTR_Commerce extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Commerce/M_Commerce', 'data');
        $this->load->helper(array('url', 'form'));
        $this->load->library('upload');

        date_default_timezone_set("Asia/Jakarta");

        if ($this->session->userdata('status_login') != 'Status Login')
            redirect(base_url());
        elseif ($this->session->userdata('role') != 'Commerce') {
            redirect(base_url('CTR_Login/forbidden'));
        }
    }

    public function index()
    {
        $data['judul'] = 'ASSESMENT SIGAP';
        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $data['isi'] = $this->data->GetAllData();
        $data['declined'] = $this->data->JumlahDeclined();
        $data['approve'] = $this->data->JumlahApprove();
        $data['revisi'] = $this->data->JumlahRevisi();
        $data['assignment'] = $this->data->JumlahAssignment();
        $data['proses'] = $this->data->JumlahProses();

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/SidebarCust', $data);
        $this->load->view('Commerce/V_DashboardC', $data);
        $this->load->view('Template/Footer');
    }

    public function Disetujui()
    {
        $data['judul'] = 'ASSESMENT SIGAP';
        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $data['isi'] = $this->data->disetujui();
        $data['isi1'] = $this->data->GetAllData();
        $data['declined'] = $this->data->JumlahDeclined();
        $data['approve'] = $this->data->JumlahApprove();
        $data['revisi'] = $this->data->JumlahRevisi();
        $data['assignment'] = $this->data->JumlahAssignment();
        $data['proses'] = $this->data->JumlahProses();

        $id_permintaan = $this->input->post('id_permintaan');
        $data['id_permintaan'] = $id_permintaan;

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/SidebarCust', $data);
        $this->load->view('Commerce/V_Disetujui', $data);
        $this->load->view('Template/Footer');
    }

    public function Direvisi()
    {
        $data['judul'] = 'ASSESMENT SIGAP';
        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $data['isi'] = $this->data->GetAllData();
        $data['declined'] = $this->data->JumlahDeclined();
        $data['approve'] = $this->data->JumlahApprove();
        $data['revisi'] = $this->data->JumlahRevisi();
        $data['assignment'] = $this->data->JumlahAssignment();
        $data['proses'] = $this->data->JumlahProses();

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/SidebarCust', $data);
        $this->load->view('Commerce/V_Direvisi', $data);
        $this->load->view('Template/Footer');
    }

    public function Ditolak()
    {
        $data['judul'] = 'ASSESMENT SIGAP';
        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $data['isi'] = $this->data->GetAllData();
        $data['declined'] = $this->data->JumlahDeclined();
        $data['approve'] = $this->data->JumlahApprove();
        $data['revisi'] = $this->data->JumlahRevisi();
        $data['assignment'] = $this->data->JumlahAssignment();
        $data['proses'] = $this->data->JumlahProses();

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/SidebarCust', $data);
        $this->load->view('Commerce/V_Ditolak', $data);
        $this->load->view('Template/Footer');
    }

    public function Diproses()
    {
        $data['judul'] = 'ASSESMENT SIGAP';
        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $data['isi'] = $this->data->GetAllData();
        $data['declined'] = $this->data->JumlahDeclined();
        $data['approve'] = $this->data->JumlahApprove();
        $data['revisi'] = $this->data->JumlahRevisi();
        $data['assignment'] = $this->data->JumlahAssignment();
        $data['proses'] = $this->data->JumlahProses();

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/SidebarCust', $data);
        $this->load->view('Commerce/V_Diproses', $data);
        $this->load->view('Template/Footer');
    }

    // Daftar Assesment
    public function daftar()
    {
        $data['judul'] = 'ASSESMENT SIGAP';
        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        // $id_permintaan = $this->input->post('id_permintaan');
        $data['isi'] = $this->data->GetAllData();
        $data['baris'] = $this->input->post('count');

        $data['declined'] = $this->data->JumlahDeclined();
        $data['approve'] = $this->data->JumlahApprove();
        $data['revisi'] = $this->data->JumlahRevisi();
        $data['proses'] = $this->data->JumlahProses();

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/SidebarCust');
        $this->load->view('Commerce/V_Daftar');
        $this->load->view('Template/Footer');
    }

    public function tampil()
    {
        $id_permintaan = $this->input->get('id_permintaan');
        $lok = $this->db->query("SELECT a.id_permintaan,a.lokasi, a.npp, a.nps, a.status, a.form_revisi,a.pemilihan_user,a.nama_user,a.sub_lokasi,a.luas_wilayah,a.kegiatan_akan, a.deskripsi, b4.sub_lokasi_arh, b4.npk as nama_arh FROM tbl_permintaan a LEFT JOIN tbl_user b4 ON a.nama_arh = b4.npk where a.id_permintaan = '$id_permintaan'")->result_array();

        foreach ($lok as $l) {
            $lokasi = array(
                'npp' => $l['npp'],
                'nama_user' => $l['nama_user'],
                'lokasi' => $l['lokasi'],
                'sub_lokasi' => $l['sub_lokasi'],
                'luas_wilayah' => $l['luas_wilayah'],
                'nama_arh' => $l['nama_arh'],
                'sub_lokasi_arh' => $l['sub_lokasi_arh']
            );
        };
        echo json_encode($lokasi);
    }

    public function tampilArh()
    {
        $npk = $this->input->get('npk');
        $lok = $this->db->query("SELECT * from tbl_user a LEFT JOIN tbl_permintaan b ON a.npk = b.nama_arh where a.npk = '$npk'")->result_array();

        foreach ($lok as $l) {
            $lokasi = array(
                'sub_lokasi_arh' => $l['sub_lokasi_arh']
            );
        };
        echo json_encode($lokasi);
    }

    public function TambahBaris()
    {
        $data['judul'] = 'PT. SIGAP PRIMA ASTREA';
        $data['baris'] = $this->input->post('count');
        $this->load->view('Commerce/V_TambahBaris', $data);
    }

    public function SimpanDaftar()
    {
        if ($this->input->post('pemilihan_user') == 'New Project') {
            $baris = $this->input->post('sub_lokasi_arh');

            foreach ($baris as $b => $v) {
                $data = array(
                    'npp' => $this->input->post('npp'),
                    'nps' => $this->session->userdata('nama'),
                    'pemilihan_user' => $this->input->post('pemilihan_user'),
                    'nama_user' => $this->input->post('nama_user'),
                    'lokasi' => $this->input->post('lokasi'),
                    'sub_lokasi' => $this->input->post('sub_lokasi'),
                    'luas_wilayah' => $this->input->post('luas_wilayah'),
                    'nama_arh' => $this->input->post('nama_arh')[$b],
                    // 'sub_lokasi_arh' => $this->input->post('sub_lokasi_arh')[$b],
                    'kegiatan_akan' => $this->input->post('kegiatan_akan'),
                    'status' => 'Menunggu Assignment',
                    'created_by' => $this->session->userdata('npk'),
                    'created_date' => date('Y-m-d H:i:s')
                );
                $this->db->insert('tbl_permintaan', $data);
            }
            // $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Pendaftaran Assesment Telah ditambahkan! </div>');
            $this->session->set_flashdata('flashdata', 'Insert');
            redirect('Commerce/CTR_Commerce');
        } else if ($this->input->post('pemilihan_user') == 'Evaluasi') {
            $id_permintaan = $this->input->post('id_permintaan');

            $data = array(
                'npp' => $this->input->post('npp'),
                'nps' => $this->session->userdata('nama'),
                'pemilihan_user' => $this->input->post('pemilihan_user'),
                'nama_user' => $this->input->post('nama_user'),
                'lokasi' => $this->input->post('lokasi'),
                'sub_lokasi' => $this->input->post('sub_lokasi'),
                'luas_wilayah' => $this->input->post('luas_wilayah'),
                'nama_arh' => $this->input->post('nama_arh2'),
                // 'sub_lokasi_arh' => $this->input->post('sub_lokasi_arh2'),
                'kegiatan_akan' => $this->input->post('kegiatan_akan'),
                'status' => 'Menunggu Assignment',
                'created_by' => $this->session->userdata('npk'),
                'created_date' => date('Y-m-d H:i:s')
            );
            $this->db->insert('tbl_permintaan', $data);

            $permintaan = $this->db->insert_id('id_permintaan');
            $qw = $this->db->query("SELECT * FROM tbl_wawancara WHERE id_permintaan = '$id_permintaan' and id_wawancara in(select max(id_wawancara) from tbl_wawancara group by id_permintaan)")->result_array();

            foreach ($qw as $w) {
                $data1 = array(
                    'id_permintaan' => $permintaan,
                    'diwawancarai' => $w['diwawancarai'],
                    'jabatan1' => $w['jabatan1'],
                    'diwawancara' => $w['diwawancara'],
                    'jabatan2' => $w['jabatan2'],
                    'foto_wawancara' => $w['foto_wawancara'],
                );
            }
            $this->db->insert('tbl_wawancara', $data1);

            $id_wawancara = $this->db->insert_id('id_wawancara');

            $q = $this->db->query("SELECT * FROM ms_jawaban_wawancara b JOIN tbl_wawancara a ON a.id_wawancara = b.id_wawancara WHERE id_permintaan = '$id_permintaan' AND a.id_wawancara in(SELECT MAX(id_wawancara) FROM tbl_wawancara group by id_permintaan)")->result_array();

            $data2 = array();
            foreach ($q as $a => $val) {
                array_push($data2, array(
                    'id_wawancara' => $id_wawancara,
                    'id_pertanyaan_wawancara' => $val['id_pertanyaan_wawancara'],
                    'jawaban' => $val['jawaban'],
                    'created_by' => $val['created_by'],
                    'created_date' => $val['created_date'],
                    'modified_by' => $val['modified_by'],
                    'modified_date' => $val['modified_date'],
                ));
            }
            // echo json_encode($data2);

            $this->db->insert_batch('ms_jawaban_wawancara', $data2);

            $qs1 = $this->db->query("SELECT * FROM tbl_ssa1 WHERE id_permintaan = '$id_permintaan' and id_ssa1 in(select max(id_ssa1) from tbl_ssa1 group by id_permintaan)")->result_array();

            foreach ($qs1 as $s1) {
                $data3 = array(
                    'id_permintaan' => $permintaan,
                    'nama_perusahaan' => $s1['nama_perusahaan'],
                    'jumlah_mp' => $s1['jumlah_mp'],
                    'alamat_perusahaan' => $s1['alamat_perusahaan'],
                    'kelurahan' => $s1['kelurahan'],
                    'kecamatan' => $s1['kecamatan'],
                    'kode_pos' => $s1['kode_pos'],
                    'nama_pic_user' => $s1['nama_pic_user'],
                    'jenis_usaha' => $s1['jenis_usaha'],
                    'nama_arh' => $s1['nama_arh'],
                    'nama_pic' => $s1['nama_pic'],
                    'no_telp' => $s1['no_telp'],
                    'pola_jaga' => $s1['pola_jaga'],
                    'jenis_seragam' => $s1['jenis_seragam'],
                    'kta' => $s1['kta'],
                    'pendidikan_anggota' => $s1['pendidikan_anggota'],
                    'perlengkapan' => $s1['perlengkapan'],
                    'catatan_b' => $s1['catatan_b'],
                    'pagar' => $s1['pagar'],
                    'gate' => $s1['gate'],
                    'luas_area' => $s1['luas_area'],
                    'penerangan' => $s1['penerangan'],
                    'catatan_c' => $s1['catatan_c'],
                    'guard_tour' => $s1['guard_tour'],
                    'total_1' => $s1['total_1'],
                    'handy_talky' => $s1['handy_talky'],
                    'total_2' => $s1['total_2'],
                    'rompi' => $s1['rompi'],
                    'total_3' => $s1['total_3'],
                    'lampu_lalin' => $s1['lampu_lalin'],
                    'total_4' => $s1['total_4'],
                    'metal_detector' => $s1['metal_detector'],
                    'total_5' => $s1['total_5'],
                    'rambu_stop' => $s1['rambu_stop'],
                    'total_6' => $s1['total_6'],
                    'mirror' => $s1['mirror'],
                    'total_7' => $s1['total_7'],
                    'atk' => $s1['atk'],
                    'deskripsi_atk' => $s1['deskripsi_atk'],
                    'catatan_d' => $s1['catatan_d'],
                    'ump' => $s1['ump'],
                    'bpjs' => $s1['bpjs'],
                    'catatan_e' => $s1['catatan_e'],
                    'f_cctv' => $s1['f_cctv'],
                    'total_1_a' => $s1['total_1_a'],
                    'f_access' => $s1['f_access'],
                    'total_1_b' => $s1['total_1_b'],
                    'f_barrier' => $s1['f_barrier'],
                    'total_1_c' => $s1['total_1_c'],
                    'f_vms' => $s1['f_vms'],
                    'total_1_d' => $s1['total_1_d'],
                    'catatan_f' => $s1['catatan_f'],
                    'created_by' => $s1['created_by'],
                    'created_date' => $s1['created_date'],
                    'modified_by' => $s1['modified_by'],
                    'modified_date' => $s1['modified_date'],
                );
            }
            $this->db->insert('tbl_ssa1', $data3);

            $qc = $this->db->query("SELECT * FROM tbl_cekliss WHERE id_permintaan = '$id_permintaan' and id_ceklis in(select max(id_ceklis) from tbl_cekliss group by id_permintaan)")->result_array();

            foreach ($qc as $c) {
                $data4 = array(
                    'id_permintaan' => $permintaan,
                    'created_by' => $c['created_by'],
                    'created_date' => $c['created_date'],
                    'modified_by' => $c['modified_by'],
                    'modified_date' => $c['modified_date'],
                );
            }
            $this->db->insert('tbl_cekliss', $data4);

            $ceklis = $this->db->insert_id('id_ceklis');
            $qcj = $this->db->query("SELECT * FROM ms_jawaban_ceklis b JOIN tbl_cekliss a ON a.id_ceklis = b.id_ceklis WHERE id_permintaan = '$id_permintaan' AND a.id_ceklis in(SELECT MAX(id_ceklis) FROM tbl_cekliss group by id_permintaan)")->result_array();

            $data5 = array();
            foreach ($qcj as $cj => $val) {
                array_push($data5, array(
                    'id_ceklis' => $ceklis,
                    'id_pertanyaan_ceklis' => $val['id_pertanyaan_ceklis'],
                    'kondisi' => $val['kondisi'],
                    'keterangan' => $val['keterangan'],
                ));
            }
            // echo json_encode($data5);

            $this->db->insert_batch('ms_jawaban_ceklis', $data5);

            $qs2 = $this->db->query("SELECT * FROM tbl_ssa2 WHERE id_permintaan = '$id_permintaan'")->result_array();

            foreach ($qs2 as $js2) {
                $data6 = array(
                    'id_permintaan' => $permintaan,
                    'created_by' => $js2['created_by'],
                    'created_date' => $js2['created_date'],
                    'modified_by' => $js2['modified_by'],
                    'modified_date' => $js2['modified_date'],
                );
            }
            $this->db->insert('tbl_ssa2', $data6);

            $ssa2 = $this->db->insert_id('id_ssa2');
            $qs2 = $this->db->query("SELECT * FROM detail_ssa2 b JOIN tbl_ssa2 a ON a.id_ssa2 = b.id_ssa2 WHERE id_permintaan = '$id_permintaan' AND a.id_ssa2 in(SELECT MAX(id_ssa2) FROM tbl_ssa2 group by id_permintaan)")->result_array();

            $data7 = array();
            foreach ($qs2 as $s2j => $val) {
                array_push($data7, array(
                    'id_ssa2' => $ssa2,
                    'nama_pos' => $val['nama_pos'],
                    'total_anggota' => $val['total_anggota'],
                    'jam_kerja' => $val['jam_kerja'],
                    'lokasi_kerja' => $val['lokasi_kerja'],
                    'kerawanan' => $val['kerawanan'],
                    'ancaman' => $val['ancaman'],
                    'fungsi_job_desk' => $val['fungsi_job_desk'],
                    'foto_ssa2' => $val['foto_ssa2'],
                ));
            }
            echo json_encode($data7);

            $this->db->insert_batch('detail_ssa2', $data7);

            // $permintaan = $this->db->insert_id('id_permintaan');
            $qd = $this->db->query("SELECT * FROM tbl_device WHERE id_permintaan = '$id_permintaan' and id_device in(select max(id_device) from tbl_device group by id_permintaan)")->result_array();

            foreach ($qd as $jd) {
                $data8 = array(
                    'id_permintaan' => $permintaan,
                    'sudah_ada_cctv' => $jd['sudah_ada_cctv'],
                    'berapa_cctv' => $jd['berapa_cctv'],
                    'merk_cctv' => $jd['merk_cctv'],
                    'type_cctv' => $jd['type_cctv'],
                    'tambahan_cctv' => $jd['tambahan_cctv'],
                    'berapa_tambahan_cctv' => $jd['berapa_tambahan_cctv'],
                    'catatan_1' => $jd['catatan_1'],
                    'kendala_cctv' => $jd['kendala_cctv'],
                    'berapa_sering_kendala' => $jd['berapa_sering_kendala'],
                    'catatan_2' => $jd['catatan_2'],
                    'monitoring_cctv' => $jd['monitoring_cctv'],
                    'jumlah_petugas' => $jd['jumlah_petugas'],
                    'jumlah_monitor' => $jd['jumlah_monitor'],
                    'catatan_3' => $jd['catatan_3'],
                    'cctv_suhu_tubuh' => $jd['cctv_suhu_tubuh'],
                    'cctv_hitung_orang' => $jd['cctv_hitung_orang'],
                    'cctv_heat_map' => $jd['cctv_heat_map'],
                    'cctv_face_recognize' => $jd['cctv_face_recognize'],
                    'cctv_line_crossing' => $jd['cctv_line_crossing'],
                    'catatan_4' => $jd['catatan_4'],
                    'memiliki_access_control' => $jd['memiliki_access_control'],
                    'berapa_access' => $jd['berapa_access'],
                    'merk_access' => $jd['merk_access'],
                    'access_terintegrasi' => $jd['access_terintegrasi'],
                    'catatan_5' => $jd['catatan_5'],
                    'access_digunakan_dengan' => $jd['access_digunakan_dengan'],
                    'catatan_6' => $jd['catatan_6'],
                    'topologi_fibel_optik' => $jd['topologi_fibel_optik'],
                    'jaringan_berdiri_sendiri' => $jd['jaringan_berdiri_sendiri'],
                    'catatan_7' => $jd['catatan_7'],
                    'created_by' => $jd['created_by'],
                    'created_date' => $jd['created_date'],
                    'modified_by' => $jd['modified_by'],
                    'modified_date' => $jd['modified_date'],
                );
            }
            $this->db->insert('tbl_device', $data8);

            $qct = $this->db->query("SELECT * FROM tbl_cctv WHERE id_permintaan = '$id_permintaan'")->result_array();

            foreach ($qct as $jct) {
                $data9 = array(
                    'id_permintaan' => $permintaan,
                    'created_by' => $jct['created_by'],
                    'created_date' => $jct['created_date'],
                    'modified_by' => $jct['modified_by'],
                    'modified_date' => $jct['modified_date'],
                );
            }
            $this->db->insert('tbl_cctv', $data9);

            $cctv = $this->db->insert_id('id_cctv');
            $qctv = $this->db->query("SELECT * FROM detail_cctv b JOIN tbl_cctv a ON a.id_cctv = b.id_cctv WHERE id_permintaan = '$id_permintaan' AND a.id_cctv in(SELECT MAX(id_cctv) FROM tbl_cctv group by id_permintaan)")->result_array();

            $data10 = array();
            foreach ($qctv as $s2j => $val) {
                array_push($data10, array(
                    'id_cctv' => $cctv,
                    'lokasi_cctv' => $val['lokasi_cctv'],
                    'kondisi_cctv' => $val['kondisi_cctv'],
                    'view_depan' => $val['view_depan'],
                    'view_belakang' => $val['view_belakang']
                ));
            }
            // echo json_encode($data10);
            $this->db->insert_batch('detail_cctv', $data10);

            // $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Evaluasi Assesment Telah ditambahkan! </div>');
            $this->session->set_flashdata('flashdata', 'Insert');
            redirect('Commerce/CTR_Commerce');
        }
    }

    public function EditPermintaan()
    {
        $id_permintaan = $this->input->post('id_permintaan');
        $data = array(
            'id_permintaan' => $this->input->post('id_permintaan'),
            'npp' => $this->input->post('npp'),
            'nps' => $this->session->userdata('nama'),
            'pemilihan_user' => $this->input->post('pemilihan_user'),
            'nama_user' => $this->input->post('nama_user'),
            'nama_arh' => $this->input->post('nama_arh'),
            'lokasi' => $this->input->post('lokasi'),
            'sub_lokasi' => $this->input->post('sub_lokasi'),
            'luas_wilayah' => $this->input->post('luas_wilayah'),
            'kegiatan_akan' => $this->input->post('kegiatan_akan'),
            'status' => 'Menunggu Assignment',
            'modified_by' => $this->session->userdata('npk'),
            'modified_date' => date('Y-m-d H:i:s')
        );
        $this->db->where('id_permintaan', $id_permintaan);
        $this->db->update('tbl_permintaan', $data);
        // $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        // Pendaftaran Assesment Telah Diupdate! </div>');
        $this->session->set_flashdata('flashdata', 'Update');
        redirect('Commerce/CTR_Commerce');
    }
    // Tutup Daftar

    // Lihat Assesment
    public function LihatAssesment($id_permintaan)
    {
        $data['judul'] = 'ASSESMENT SIGAP';
        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $id = $this->uri->segment(4);

        $data['isi'] = $this->data->GetData($id);
        //WawancaraComment
        $data['nama'] = $this->data->GetDataW($id);
        $data['isiWDetail'] = $this->data->JoinJawabanDetail($id)->result();
        $data['isiW'] = $this->data->JoinJawaban($id)->result();
        //SSA1Comment
        $data['isiS1'] = $this->data->GetDataS1($id);
        $data['isiS1Detail'] = $this->data->GetDataS1Detail($id);
        // CeklisComment
        $data['isiC'] = $this->data->GetDataC($id);
        $data['isiCDetail'] = $this->data->GetDataCDetail($id);
        //SSA2Comment
        $data['isiS2'] = $this->data->GetDataS2($id);
        $data['isi_detail_S2'] = $this->data->GetDetailS2($id);
        $data['isiS2Detail'] = $this->data->GetDataS2Detail($id);
        //DeviceComment
        $data['isiD'] = $this->data->GetDataD($id);
        $data['isiDDetail'] = $this->data->GetDataDDetail($id);
        //CCTVComment
        $data['isi_detail_Ct'] = $this->data->GetDetailCt($id);
        $data['isiCt'] = $this->data->GetDataCctv($id);
        $data['isiCtDetail'] = $this->data->GetDataCctvDetail($id);

        $data['id_permintaan'] = $id_permintaan;
        $data['All'] = $this->data->GetAllData();

        $data['declined'] = $this->data->JumlahDeclined();
        $data['approve'] = $this->data->JumlahApprove();
        $data['revisi'] = $this->data->JumlahRevisi();
        $data['assignment'] = $this->data->JumlahAssignment();
        $data['proses'] = $this->data->JumlahProses();

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/SidebarCust', $data);
        $this->load->view('Commerce/V_LihatAssesment', $data);
        $this->load->view('Commerce/Modal/V_Wawancara', $data);
        $this->load->view('Commerce/Modal/V_SSA1', $data);
        $this->load->view('Commerce/Modal/V_Ceklis', $data);
        $this->load->view('Commerce/Modal/V_SSA2', $data);
        $this->load->view('Commerce/Modal/V_Device', $data);
        $this->load->view('Commerce/Modal/V_CCTV', $data);
        $this->load->view('Template/Footer');
    }
    // End Lihat
}
