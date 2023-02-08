<?php
ob_start();
defined('BASEPATH') or exit('No direct script access allowed');

class CTR_Kasie extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kasie/M_Kasie', 'data');
        $this->load->helper(array('url', 'form'));
        $this->load->library('upload');

        date_default_timezone_set("Asia/Jakarta");

        if ($this->session->userdata('status_login') != 'Status Login')
            redirect(base_url());
        elseif ($this->session->userdata('role') != 'Kasie') {
            redirect(base_url('CTR_Login/forbidden'));
        }
    }

    // Home mengambil data semua tbl permmintaan
    public function index()
    {
        $data['judul'] = 'ASSESMENT SIGAP';
        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $data['isi'] = $this->data->GetAllData();
        $data['diproses'] = $this->data->JumlahDiproses();
        $data['approval'] = $this->data->JumlahApproval();
        $data['approve'] = $this->data->JumlahApprove();
        $data['revisi'] = $this->data->JumlahRevisi();
        $data['declined'] = $this->data->JumlahDeclined();

        $id_permintaan = $this->input->post('id_permintaan');
        $data['id_permintaan'] = $id_permintaan;

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/SidebarK', $data);
        $this->load->view('Kasie/V_DashboardK', $data);
        $this->load->view('Template/Footer');
    }

    // Tampilan Detail sesuai id
    public function Detail($id_permintaan)
    {
        $data['judul'] = 'ASSESMENT SIGAP';
        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $id = $this->uri->segment(4);
        $data['isi'] = $this->data->GetData($id);
        //WawancaraComment
        $data['nama'] = $this->data->GetDataW($id);
        $data['isiW'] = $this->data->JoinJawaban($id)->result();
        $data['isiWDetail'] = $this->data->JoinJawabanDetail($id)->result();
        //SSA1Comment
        $data['isiS1'] = $this->data->GetDataS1($id);
        $data['isiS1Detail'] = $this->data->GetDataS1Detail($id);
        // CeklisComment
        $data['ceklisJoin'] = $this->data->GetPertanyaanJoin();
        $data['isiC'] = $this->data->GetDataC($id);
        $data['isiCDetail'] = $this->data->GetDataCDetail($id);
        //SSA2Comment
        $data['isi_detail_S2'] = $this->data->GetDetailS2($id);
        $data['isiS2'] = $this->data->GetDataS2($id);
        $data['isiS2Detail'] = $this->data->GetDataS2Detail($id);
        //DeviceComment
        $data['isiD'] = $this->data->GetDataD($id);
        $data['isiDDetail'] = $this->data->GetDataDDetail($id);
        //CCTVComment
        $data['isi_detail_Ct'] = $this->data->GetDetailCt($id);
        $data['isiCt'] = $this->data->GetDataCctv($id);
        $data['isiCtDetail'] = $this->data->GetDataCctvDetail($id);
        // $id = $this->input->post('id_permintaan');
        $data['All'] = $this->data->GetAllData();
        $data['id_permintaan'] = $id_permintaan;
        $data['id_wawancara'] = $this->input->post('id_wawancara');
        $data['id_ssa2'] = $this->input->post('id_ssa2');

        $data['diproses'] = $this->data->JumlahDiproses();
        $data['approval'] = $this->data->JumlahApproval();
        $data['approve'] = $this->data->JumlahApprove();
        $data['revisi'] = $this->data->JumlahRevisi();
        $data['declined'] = $this->data->JumlahDeclined();

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/SidebarK', $data);
        $this->load->view('Kasie/V_DtlLaporan', $data);
        $this->load->view('Kasie/Modal/V_Wawancara', $data);
        $this->load->view('Kasie/Modal/V_SSA1', $data);
        $this->load->view('Kasie/Modal/V_Ceklis', $data);
        $this->load->view('Kasie/Modal/V_SSA2', $data);
        $this->load->view('Kasie/Modal/V_Device', $data);
        $this->load->view('Kasie/Modal/V_CCTV', $data);
        $this->load->view('Template/Footer');
    }

    // Upload File PPT
    public function UploadPpt()
    {
        $id_permintaan = $this->input->post('id_permintaan');
        $config['upload_path']          = './assets/dist/file_penilaian/';
        $config['allowed_types']        = 'pdf|ppt|pptx';
        $config['max_size']              = 2048; //2mb

        // $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('file_ppt')) {
            $this->session->set_flashdata('pesan0', '<div class="alert alert-danger" role="alert">
        Gagal Simpan! </div>');
            redirect('Kasie/CTR_Kasie/Detail/' . $id_permintaan);
        } else {
            $file_ppt = $this->upload->data();
            $file_ppt = $file_ppt['file_name'];

            $id_permintaan = $this->input->post('id_permintaan');
            $filee = $this->input->post('file_ppt');

            $this->db->set('file_ppt', $file_ppt);
            $this->db->where('id_permintaan', $id_permintaan);
            $this->db->update('tbl_permintaan');
            unlink('./assets/dist/file_penilaian/' . $filee);
            //     $this->session->set_flashdata('pesan0', '<div class="alert alert-success" role="alert">
            // Berhasil Diupload! </div>');
            $this->session->set_flashdata('flashdata', 'Insert');
            redirect('Kasie/CTR_Kasie/Detail/' . $id_permintaan);
        }
    }

    public function Approval()
    {
        $data['judul'] = 'ASSESMENT SIGAP';
        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $data['isi'] = $this->data->GetAllData();
        $data['diproses'] = $this->data->JumlahDiproses();
        $data['approval'] = $this->data->JumlahApproval();
        $data['approve'] = $this->data->JumlahApprove();
        $data['revisi'] = $this->data->JumlahRevisi();
        $data['declined'] = $this->data->JumlahDeclined();

        $id_permintaan = $this->input->post('id_permintaan');
        $data['id_permintaan'] = $id_permintaan;

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/SidebarK', $data);
        $this->load->view('Kasie/V_Approval', $data);
        $this->load->view('Template/Footer');
    }

    public function Diproses()
    {
        $data['judul'] = 'ASSESMENT SIGAP';
        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $data['isi'] = $this->data->GetAllData();
        $data['diproses'] = $this->data->JumlahDiproses();
        $data['approval'] = $this->data->JumlahApproval();
        $data['approve'] = $this->data->JumlahApprove();
        $data['revisi'] = $this->data->JumlahRevisi();
        $data['declined'] = $this->data->JumlahDeclined();

        $id_permintaan = $this->input->post('id_permintaan');
        $data['id_permintaan'] = $id_permintaan;

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/SidebarK', $data);
        $this->load->view('Kasie/V_Diproses', $data);
        $this->load->view('Template/Footer');
    }

    public function Approved()
    {
        $data['judul'] = 'ASSESMENT SIGAP';
        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $data['isi'] = $this->data->Approve();
        $data['isi1'] = $this->data->GetAllData();
        $data['diproses'] = $this->data->JumlahDiproses();
        $data['approval'] = $this->data->JumlahApproval();
        $data['approve'] = $this->data->JumlahApprove();
        $data['revisi'] = $this->data->JumlahRevisi();
        $data['declined'] = $this->data->JumlahDeclined();

        $id_permintaan = $this->input->post('id_permintaan');
        $data['id_permintaan'] = $id_permintaan;

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/SidebarK', $data);
        $this->load->view('Kasie/V_Approve', $data);
        $this->load->view('Template/Footer');
    }

    public function Revisian()
    {
        $data['judul'] = 'ASSESMENT SIGAP';
        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $data['isi'] = $this->data->GetAllData();
        $data['diproses'] = $this->data->JumlahDiproses();
        $data['approval'] = $this->data->JumlahApproval();
        $data['approve'] = $this->data->JumlahApprove();
        $data['revisi'] = $this->data->JumlahRevisi();
        $data['declined'] = $this->data->JumlahDeclined();

        $id_permintaan = $this->input->post('id_permintaan');
        $data['id_permintaan'] = $id_permintaan;

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/SidebarK', $data);
        $this->load->view('Kasie/V_Revisi', $data);
        $this->load->view('Template/Footer');
    }

    public function Ditolak()
    {
        $data['judul'] = 'ASSESMENT SIGAP';
        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $data['isi'] = $this->data->GetAllData();
        $data['diproses'] = $this->data->JumlahDiproses();
        $data['approval'] = $this->data->JumlahApproval();
        $data['approve'] = $this->data->JumlahApprove();
        $data['revisi'] = $this->data->JumlahRevisi();
        $data['declined'] = $this->data->JumlahDeclined();

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/SidebarK', $data);
        $this->load->view('Kasie/V_Ditolak', $data);
        $this->load->view('Template/Footer');
    }

    function ApproveAssign()
    {
        $id_permintaan = $this->input->post('id_permintaan');
        $this->db->set('status', 'Pending');
        $this->db->where('id_permintaan', $id_permintaan);
        $this->db->update('tbl_permintaan');
        // $this->session->set_flashdata('pesan0', '<div class="alert alert-success" role="alert">
        // Permintaan Approved! </div>');
        $this->session->set_flashdata('flashdata', 'Approve');
        redirect('Kasie/CTR_Kasie/');
    }

    function declined()
    {
        $id_permintaan = $this->input->post('id_permintaan');
        $this->db->set('status', 'Declined');
        $this->db->set('deskripsi', $this->input->post('deskripsi'));
        $this->db->set('approval_by', $this->session->userdata('npk'));
        $this->db->where('id_permintaan', $id_permintaan);
        $this->db->update('tbl_permintaan');
        // $this->session->set_flashdata('pesan0', '<div class="alert alert-danger" role="alert">
        // Permintaan Declined! </div>');
        $this->session->set_flashdata('flashdata', 'Declined');
        redirect('Kasie/CTR_Kasie');
    }

    function approve()
    {
        $id_permintaan = $this->input->post('id_permintaan');
        $this->db->set('status', 'Approved');
        $this->db->set('approval_by', $this->session->userdata('npk'));
        $this->db->where('id_permintaan', $id_permintaan);
        $this->db->update('tbl_permintaan');
        // $this->session->set_flashdata('pesan0', '<div class="alert alert-success" role="alert">
        // Assesment Approved! </div>');
        $this->session->set_flashdata('flashdata', 'Approve');
        redirect('Kasie/CTR_Kasie/Approval');
    }

    function revisi()
    {
        $id_permintaan = $this->input->post('id_permintaan');
        $deskripsi = $this->input->post('deskripsi');
        $form_revisi = $this->input->post('form_revisi');

        $data = array(
            'deskripsi' => $deskripsi,
            'form_revisi' => implode(', ', $form_revisi)
        );

        $this->db->set('status', 'Revisi');
        $this->db->set('approval_by', $this->session->userdata('npk'));
        $this->db->where('id_permintaan', $id_permintaan);
        $this->db->update('tbl_permintaan', $data);
        // $this->session->set_flashdata('pesan0', '<div class="alert alert-danger" role="alert">
        // Assesment Revisi! </div>');
        $this->session->set_flashdata('flashdata', 'Revisi');
        redirect('Kasie/CTR_Kasie/Approval');
    }

    // Wawancara
    public function UpdateWawancara()
    {
        $id_permintaan = $this->input->post('id_permintaan');
        $diwawancarai = $this->input->post('diwawancarai');
        $jabatan1 = $this->input->post('jabatan1');
        $diwawancara = $this->input->post('diwawancara');
        $jabatan2 = $this->input->post('jabatan2');
        $old_foto = $this->input->post('old_foto');
        $foto_wawancara = $_FILES['foto_wawancara'];

        if ($foto_wawancara = NULL) {
            $foto_wawancara = $old_foto;
        } else {
            $config['upload_path']          = './assets/img/wawancara/';
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['max_size']             = 512;

            $this->upload->initialize($config);
            if ($this->upload->do_upload('foto_wawancara')) {
                $foto_wawancara = $this->upload->data('file_name');
            } else {
                $foto_wawancara = $old_foto;
            }
        }
        $data = array(
            'id_permintaan' => $id_permintaan,
            'diwawancarai' => $diwawancarai,
            'jabatan1' => $jabatan1,
            'diwawancara' => $diwawancara,
            'jabatan2' => $jabatan2,
            'foto_wawancara' => $foto_wawancara,
            // 'foto_wawancara' => $old_foto
        );
        $this->db->where('id_permintaan', $id_permintaan);
        $this->db->insert('tbl_wawancara', $data);

        $id_wawancara = $this->db->insert_id('id_wawancara'); //insert last id
        $id_pertanyaan_wawancara = $this->input->post('id_pertanyaan_wawancara');
        $created_by = $this->input->post('created_by');
        $created_date = $this->input->post('created_date');
        $modified_by = $this->input->post('modified_by');
        $modified_date = $this->input->post('modified_date');
        $jawaban = $this->input->post('jawaban');
        $old = $this->input->post('old');

        foreach ($id_pertanyaan_wawancara as $key => $val) {
            if ($jawaban[$key] == $old[$key]) {
                $result = array(
                    'id_pertanyaan_wawancara' => $id_pertanyaan_wawancara[$key],
                    'jawaban' => $jawaban[$key],
                    'id_wawancara' => $id_wawancara,
                    'created_by' => $created_by[$key],
                    'created_date' => $created_date[$key],
                    'modified_by' => $modified_by[$key],
                    'modified_date' => $modified_date[$key]
                );
                $this->db->insert('ms_jawaban_wawancara', $result);
            } else {
                $result = array(
                    'id_pertanyaan_wawancara' => $id_pertanyaan_wawancara[$key],
                    'jawaban' => $jawaban[$key],
                    'id_wawancara' => $id_wawancara,
                    'created_by' => $created_by[$key],
                    'created_date' => $created_date[$key],
                    'modified_by' => $this->session->userdata('npk'),
                    'modified_date' => date('Y-m-d H:i:s')
                );
                $this->db->insert('ms_jawaban_wawancara', $result);
            }
        }

        // $this->session->set_flashdata('pesan0', '<div class="alert alert-success" role="alert">
        // Form Wawancara Berhasil Diupdate! </div>');
        $this->session->set_flashdata('flashdata', 'Update');
        redirect('Kasie/CTR_Kasie/Detail/' . $id_permintaan);
    }
    // End Wawancara

    // SSA1
    public function UpdateSSA1()
    {
        $id_permintaan = $this->input->post('id_permintaan');
        $data = array(
            'id_permintaan' => $this->input->post('id_permintaan'),
            // 'pemilihan_user' => $this->input->post('pemilihan_user'),
            'nama_perusahaan' => $this->input->post('nama_perusahaan'),
            'jumlah_mp' => $this->input->post('jumlah_mp'),
            'alamat_perusahaan' => $this->input->post('alamat_perusahaan'),
            'kelurahan' => $this->input->post('kelurahan'),
            'kecamatan' => $this->input->post('kecamatan'),
            'kode_pos' => $this->input->post('kode_pos'),
            'nama_pic_user' => $this->input->post('nama_pic_user'),
            'jenis_usaha' => $this->input->post('jenis_usaha'),
            'nama_arh' => $this->input->post('nama_arh'),
            'nama_pic' => $this->input->post('nama_pic'),
            'no_telp' => $this->input->post('no_telp'),
            'pola_jaga' => $this->input->post('pola_jaga'),
            'jenis_seragam' => $this->input->post('jenis_seragam'),
            'kta' => $this->input->post('kta'),
            'pendidikan_anggota' => $this->input->post('pendidikan_anggota'),
            'perlengkapan' => $this->input->post('perlengkapan'),
            'catatan_b' => $this->input->post('catatan_b'),
            'pagar' => $this->input->post('pagar'),
            'gate' => $this->input->post('gate'),
            'luas_area' => $this->input->post('luas_area'),
            'penerangan' => $this->input->post('penerangan'),
            'catatan_c' => $this->input->post('catatan_c'),
            'guard_tour' => $this->input->post('guard_tour'),
            'total_1' => $this->input->post('total_1'),
            'handy_talky' => $this->input->post('handy_talky'),
            'total_2' => $this->input->post('total_2'),
            'rompi' => $this->input->post('rompi'),
            'total_3' => $this->input->post('total_3'),
            'lampu_lalin' => $this->input->post('lampu_lalin'),
            'total_4' => $this->input->post('total_4'),
            'metal_detector' => $this->input->post('metal_detector'),
            'total_5' => $this->input->post('total_5'),
            'rambu_stop' => $this->input->post('rambu_stop'),
            'total_6' => $this->input->post('total_6'),
            'mirror' => $this->input->post('mirror'),
            'total_7' => $this->input->post('total_7'),
            'atk' => $this->input->post('atk'),
            'deskripsi_atk' => $this->input->post('deskripsi_atk'),
            'catatan_d' => $this->input->post('catatan_d'),
            'ump' => $this->input->post('ump'),
            'bpjs' => $this->input->post('bpjs'),
            'catatan_e' => $this->input->post('catatan_e'),
            'f_cctv' => $this->input->post('f_cctv'),
            'total_1_a' => $this->input->post('total_1_a'),
            'f_access' => $this->input->post('f_access'),
            'total_1_b' => $this->input->post('total_1_b'),
            'f_barrier' => $this->input->post('f_barrier'),
            'total_1_c' => $this->input->post('total_1_c'),
            'f_vms' => $this->input->post('f_vms'),
            'total_1_d' => $this->input->post('total_1_d'),
            'catatan_f' => $this->input->post('catatan_f'),
            'created_by' => $this->input->post('created_by'),
            'created_date' => $this->input->post('created_date'),
            'modified_by' => $this->session->userdata('npk'),
            'modified_date' => date('Y-m-d H:i:s')
        );

        $this->db->where('id_permintaan', $id_permintaan);
        $this->db->insert('tbl_ssa1', $data);
        // $this->session->set_flashdata('pesan0', '<div class="alert alert-success" role="alert">
        // Form SSA1 Berhasil Diupdate! </div>');
        $this->session->set_flashdata('flashdata', 'Update');
        redirect('Kasie/CTR_Kasie/Detail/' . $id_permintaan);
    }
    // End SSA1

    // Ceklis
    public function UpdateCeklis()
    {
        $id_permintaan = $this->input->post('id_permintaan');
        $created_by = $this->input->post('created_by');
        $created_date = $this->input->post('created_date');
        $id_jawaban_ceklis = $this->input->post('id_jawaban_ceklis');

        $data = array(
            'id_permintaan' => $id_permintaan,
            'created_by' => $created_by,
            'created_date' => $created_date,
            'modified_by' => $this->session->userdata('npk'),
            'modified_date' => date('Y-m-d H:i:s')
        );

        $this->db->insert('tbl_cekliss', $data);

        $id_ceklis = $this->db->insert_id('id_ceklis');
        $kondisi = $this->input->post('kondisi');
        $keterangan = $this->input->post('keterangan');
        $id_pertanyaan_ceklis = $this->input->post('id_pertanyaan_ceklis');

        $result = array();
        foreach ($id_jawaban_ceklis as $key => $val) {
            $result[] = array(
                'id_ceklis' => $id_ceklis,
                'kondisi' => $kondisi[$key],
                'keterangan' => $keterangan[$key],
                'id_pertanyaan_ceklis' => $id_pertanyaan_ceklis[$key]
            );
        }
        $this->db->insert_batch('ms_jawaban_ceklis', $result, 'id_jawaban_ceklis');
        // $this->session->set_flashdata('pesan0', '<div class="alert alert-success" role="alert">
        // Form Ceklis Berhasil Diupdate! </div>');
        $this->session->set_flashdata('flashdata', 'Update');
        redirect('Kasie/CTR_Kasie/Detail/' . $id_permintaan);
    }
    // End Ceklis

    // SSA2
    public function UpdateSSA2()
    {
        $id_permintaan = $this->input->post('id_permintaan');
        $created_by = $this->input->post('created_by');
        $created_date = $this->input->post('created_date');

        $data1 = array(
            'id_permintaan' => $id_permintaan,
            'created_by' => $created_by,
            'created_date' => $created_date,
            'modified_by' => $this->session->userdata('npk'),
            'modified_date' => date('Y-m-d H:i:s')
        );
        $this->db->where('id_permintaan', $id_permintaan);
        $this->db->insert('tbl_ssa2', $data1);

        $id_ssa2 = $this->db->insert_id('id_ssa2'); //insert last id

        $data = [];
        $count = count($_FILES['foto_ssa2']['name']);
        for ($i = 0; $i < $count; $i++) {
            $old_foto = $this->input->post('old_foto')[$i];
            // $foto_s2 = $_FILES['foto_ssa2']['name'];
            if (!empty($_FILES['foto_ssa2']['name'][$i])) {
                $_FILES['file']['name'] = $_FILES['foto_ssa2']['name'][$i];
                $_FILES['file']['type'] = $_FILES['foto_ssa2']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['foto_ssa2']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['foto_ssa2']['error'][$i];
                $_FILES['file']['size'] = $_FILES['foto_ssa2']['size'][$i];

                $config['upload_path'] = './assets/img/ssa2/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = '512';
                $config['file_name'] = $_FILES['foto_ssa2']['name'][$i];

                // $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('file')) {
                    $foto_ssa2 = $this->upload->data();
                    $filename = $foto_ssa2['file_name'];
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './assets/img/ssa2/' . $filename;
                    $config['create_thumb'] = false;
                    $config['maintain_ratio'] = false;
                    $config['quality'] = '100%';
                    $config['width'] = 750;
                    $config['height'] = 500;
                    $config['new_image'] = './assets/img/ssa2/' . $filename;
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();

                    $foto_s2[] = $filename;
                } else if ($_FILES['file']['size'] > '512') {
                    $this->db->where('id_ssa2', $id_ssa2);
                    $this->db->delete('tbl_ssa2');
                    $this->session->set_flashdata('pesan0', '<div class="alert alert-danger" role="alert"> Gagal Tambah! File Terlalu Besar, Pastikan ukuran file anda kurang dari 500kb!</div>');
                    redirect('Kasie/CTR_Kasie/Detail/' . $id_permintaan);
                } else {
                    $this->session->set_flashdata('pesan0', '<div class="alert alert-danger" role="alert"> Gagal Tambah! </div>');
                    redirect('Kasie/CTR_Kasie/Detail/' . $id_permintaan);
                }
            } else {
                $foto_s2[] = $old_foto;
            }
        }

        $nama_pos = $this->input->post('nama_pos');
        $data = array();
        for ($key = 0; $key < count($nama_pos); $key++) {
            $data = array(
                'nama_pos' => $this->input->post('nama_pos')[$key],
                'total_anggota' => $this->input->post('total_anggota')[$key],
                'jam_kerja' => $this->input->post('jam_kerja')[$key] . '`' . $this->input->post('shift')[$key],
                'lokasi_kerja' => $this->input->post('lokasi_kerja')[$key],
                'kerawanan' => $this->input->post('kerawanan')[$key],
                'ancaman' => $this->input->post('ancaman')[$key],
                'fungsi_job_desk' => $this->input->post('fungsi_job_desk')[$key],
                'foto_ssa2' => $foto_s2[$key],
                'id_ssa2' => $id_ssa2,
            );
            $this->db->insert('detail_ssa2', $data);
        }
        // $this->session->set_flashdata('pesan0', '<div class="alert alert-success" role="alert">
        // Form SSA2 berhasil diupdate! </div>');
        $this->session->set_flashdata('flashdata', 'Update');
        $id_permintaan = $this->input->post('id_permintaan');
        redirect('Kasie/CTR_Kasie/Detail/' . $id_permintaan);
    }
    // End SSA2

    // Survey Device
    public function UpdateDevice()
    {
        $id_permintaan = $this->input->post('id_permintaan');
        $data = array(
            'id_permintaan' => $this->input->post('id_permintaan'),
            'sudah_ada_cctv' => $this->input->post('sudah_ada_cctv'),
            'berapa_cctv' => $this->input->post('berapa_cctv'),
            'merk_cctv' => $this->input->post('merk_cctv'),
            'type_cctv' => $this->input->post('type_cctv'),
            'tambahan_cctv' => $this->input->post('tambahan_cctv'),
            'berapa_tambahan_cctv' => $this->input->post('berapa_tambahan_cctv'),
            'catatan_1' => $this->input->post('catatan_1'),
            'kendala_cctv' => $this->input->post('kendala_cctv'),
            'berapa_sering_kendala' => $this->input->post('berapa_sering_kendala'),
            'catatan_2' => $this->input->post('catatan_2'),
            'monitoring_cctv' => $this->input->post('monitoring_cctv'),
            'jumlah_petugas' => $this->input->post('jumlah_petugas'),
            'jumlah_monitor' => $this->input->post('jumlah_monitor'),
            'catatan_3' => $this->input->post('catatan_3'),
            'cctv_suhu_tubuh' => $this->input->post('cctv_suhu_tubuh'),
            'cctv_hitung_orang' => $this->input->post('cctv_hitung_orang'),
            'cctv_heat_map' => $this->input->post('cctv_heat_map'),
            'cctv_face_recognize' => $this->input->post('cctv_face_recognize'),
            'cctv_line_crossing' => $this->input->post('cctv_line_crossing'),
            'catatan_4' => $this->input->post('catatan_4'),
            'memiliki_access_control' => $this->input->post('memiliki_access_control'),
            'berapa_access' => $this->input->post('berapa_access'),
            'merk_access' => $this->input->post('merk_access'),
            'access_terintegrasi' => $this->input->post('access_terintegrasi'),
            'catatan_5' => $this->input->post('catatan_5'),
            'access_digunakan_dengan' => $this->input->post('access_digunakan_dengan'),
            'catatan_6' => $this->input->post('catatan_6'),
            'topologi_fibel_optik' => $this->input->post('topologi_fibel_optik'),
            'jaringan_berdiri_sendiri' => $this->input->post('jaringan_berdiri_sendiri'),
            'catatan_7' => $this->input->post('catatan_7'),
            'created_by' => $this->input->post('created_by'),
            'created_date' => $this->input->post('created_date'),
            'modified_by' => $this->session->userdata('npk'),
            'modified_date' => date('Y-m-d H:i:s')
        );

        $this->db->where('id_permintaan', $id_permintaan);
        $this->db->insert('tbl_device', $data);
        // $this->session->set_flashdata('pesan0', '<div class="alert alert-success" role="alert">
        // Form Survey Device berhasil diupdate! </div>');
        $this->session->set_flashdata('flashdata', 'Update');
        redirect('Kasie/CTR_Kasie/Detail/' . $id_permintaan);
    }
    // End Device

    // CCTV
    function UpdateCCTV()
    {
        $id_permintaan = $this->input->post('id_permintaan');
        $created_by = $this->input->post('created_by');
        $created_date = $this->input->post('created_date');
        $data1 = array(
            'id_permintaan' => $id_permintaan,
            'created_by' => $created_by,
            'created_date' => $created_date,
            'modified_by' =>  $this->session->userdata('npk'),
            'modified_date' => date('Y-m-d H:i:s')
        );
        $this->db->where('id_permintaan', $id_permintaan);
        $this->db->insert('tbl_cctv', $data1);

        $id_cctv = $this->db->insert_id('id_cctv');
        $data = [];
        $count = count($_FILES['view_depan']['name']);
        for ($i = 0; $i < $count; $i++) {
            $old1 = $this->input->post('old1', TRUE)[$i];
            if (!empty($_FILES['view_depan']['name'][$i])) {

                $_FILES['file']['name'] = $_FILES['view_depan']['name'][$i];
                $_FILES['file']['type'] = $_FILES['view_depan']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['view_depan']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['view_depan']['error'][$i];
                $_FILES['file']['size'] = $_FILES['view_depan']['size'][$i];

                $config['upload_path'] = './assets/img/cctv/depan/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = '512';
                $config['file_name'] = $_FILES['view_depan']['name'][$i];

                // $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('file')) {
                    $view_depan = $this->upload->data();
                    $filename = $view_depan['file_name'];

                    $config1['image_library'] = 'gd2';
                    $config1['source_image'] = './assets/img/cctv/depan/' . $filename;
                    $config1['create_thumb'] = false;
                    $config1['maintain_ratio'] = false;
                    $config1['quality'] = '100%';
                    $config1['width'] = 384;
                    $config1['height'] = 216;
                    $config1['new_image'] = './assets/img/cctv/depan/' . $filename;
                    $this->load->library('image_lib');
                    $this->image_lib->initialize($config1);
                    $this->image_lib->resize();

                    $data1[] = $filename;
                } else if ($_FILES['file']['size'] > '512') {
                    $this->db->where('id_cctv', $id_cctv);
                    $this->db->delete('tbl_cctv');
                    $this->session->set_flashdata('pesan0', '<div class="alert alert-danger" role="alert"> Gagal Tambah! File Terlalu Besar, Pastikan ukuran file anda kurang dari 500kb!</div>');
                    redirect('Kasie/CTR_Kasie/Detail/' . $id_permintaan);
                } else {
                    $this->session->set_flashdata('pesan0', '<div class="alert alert-danger" role="alert"> Gagal Tambah! </div>');
                    redirect('Kasie/CTR_Kasie/Detail/' . $id_permintaan);
                }
            } else {
                $data1[] = $old1;
            }
        }

        $data = [];
        $count = count($_FILES['view_belakang']['name']);
        for ($i = 0; $i < $count; $i++) {
            $old2 = $this->input->post('old2', TRUE)[$i];
            if (!empty($_FILES['view_belakang']['name'][$i])) {

                $_FILES['file']['name'] = $_FILES['view_belakang']['name'][$i];
                $_FILES['file']['type'] = $_FILES['view_belakang']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['view_belakang']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['view_belakang']['error'][$i];
                $_FILES['file']['size'] = $_FILES['view_belakang']['size'][$i];

                $config['upload_path'] = './assets/img/cctv/belakang/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = '512';
                $config['file_name'] = $_FILES['view_belakang']['name'][$i];

                // $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('file')) {
                    $view_belakang = $this->upload->data();
                    $filename = $view_belakang['file_name'];

                    $config1['image_library'] = 'gd2';
                    $config1['source_image'] = './assets/img/cctv/belakang/' . $filename;
                    $config1['create_thumb'] = false;
                    $config1['maintain_ratio'] = false;
                    $config1['quality'] = '100%';
                    $config1['width'] = 384;
                    $config1['height'] = 216;
                    $config1['new_image'] = './assets/img/cctv/belakang/' . $filename;
                    $this->load->library('image_lib');
                    $this->image_lib->initialize($config1);
                    $this->image_lib->resize();

                    $data2[] = $filename;
                } else if ($_FILES['file']['size'] > '512') {
                    $this->db->where('id_cctv', $id_cctv);
                    $this->db->delete('tbl_cctv');
                    $this->session->set_flashdata('pesan0', '<div class="alert alert-danger" role="alert"> Gagal Tambah! File Terlalu Besar, Pastikan ukuran file anda kurang dari 500kb!</div>');
                    redirect('Kasie/CTR_Kasie/Detail/' . $id_permintaan);
                } else {
                    $this->session->set_flashdata('pesan0', '<div class="alert alert-danger" role="alert"> Gagal Tambah!</div>');
                    redirect('Kasie/CTR_Kasie/Detail/' . $id_permintaan);
                }
            } else {
                $data2[] = $old2;
            }
        }

        $lokasi_cctv = $this->input->post('lokasi_cctv', TRUE);
        $kondisi_cctv = $this->input->post('kondisi_cctv', TRUE);
        $data = array();
        for ($i = 0; $i < count($lokasi_cctv); $i++) {
            $data = array(
                'id_cctv' => $id_cctv,
                'lokasi_cctv' => $lokasi_cctv[$i],
                'kondisi_cctv' => $kondisi_cctv[$i],
                'view_depan' => $data1[$i],
                'view_belakang' => $data2[$i]
            );
            $this->db->insert('detail_cctv', $data);
        }
        // $this->session->set_flashdata('pesan0', '<div class="alert alert-success" role="alert"> Form CCTV berhasil diupdate! </div>');
        $this->session->set_flashdata('flashdata', 'Update');
        redirect('Kasie/CTR_Kasie/Detail/' . $id_permintaan);
    }
    // End CCTV
}
