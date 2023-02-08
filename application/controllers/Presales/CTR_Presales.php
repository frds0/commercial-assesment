<?php
ob_start();
defined('BASEPATH') or exit('No direct script access allowed');

class CTR_Presales extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Presales/M_Presales', 'data');
        $this->load->helper(array('url', 'form'));
        $this->load->library('upload');

        date_default_timezone_set("Asia/Jakarta");

        if ($this->session->userdata('status_login') != 'Status Login')
            redirect(base_url());
        else if ($this->session->userdata('role') != 'Presales' && $this->session->userdata('role') != 'Super Admin' && $this->session->userdata('role') != 'Admin') {
            redirect(base_url('CTR_Login/forbidden'));
        }
    }

    public function index()
    {
        $data['judul'] = 'PT SIGAP PRIMA ASTREA';

        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $data['isi'] = $this->data->GetAllData();

        $data['tunggu'] = $this->data->JumlahMenunggu();
        $data['progres'] = $this->data->JumlahProgres();
        $data['tungguA'] = $this->data->JumlahMenungguApproval();
        $data['setujui'] = $this->data->JumlahDisetujui();
        $data['revisi'] = $this->data->JumlahRevisi();
        $data['seluruh'] = $this->data->JumlahSeluruh();

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/Sidebar', $data);
        $this->load->view('Presales/Dashboard', $data);
        $this->load->view('Template/Footer');
    }

    public function Penilaian($id_permintaan)
    {
        $data['judul'] = 'PT SIGAP PRIMA ASTREA';
        $data['jml'] = $this->input->post('nama_pos');

        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $data['pertanyaan'] = $this->data->GetPertanyaan();
        $id = $this->uri->segment(4);

        $data['isi'] = $this->data->GetData($id);
        $data['isiDetail'] = $this->data->GetDataDetail($id);
        //WawancaraComment
        $data['nama'] = $this->data->GetDataW($id);
        $data['isiW'] = $this->data->JoinJawaban($id)->result();
        $data['isiWDetail'] = $this->data->JoinJawabanDetail($id)->result();
        //SSA1Comment
        $data['isiS1'] = $this->data->GetDataS1($id);
        $data['isiS1Detail'] = $this->data->GetDataS1Detail($id);
        // CeklisComment
        $data['pertanyaan_ceklis'] = $this->data->GetTotalCeklis($id);
        $data['isiC'] = $this->data->GetDataC($id);
        $data['isiCDetail'] = $this->data->GetDataCDetail($id);
        $data['ceklisJoin'] = $this->data->GetPertanyaanJoin();
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

        //Approval
        $data['tunggu'] = $this->data->JumlahMenunggu();
        $data['progres'] = $this->data->JumlahProgres();
        $data['setujui'] = $this->data->JumlahDisetujui();
        $data['revisi'] = $this->data->JumlahRevisi();

        $data['id_permintaan'] = $id_permintaan;

        $data['id_wawancara'] = $this->input->post('id_wawancara');
        $data['id_ssa2'] = $this->input->post('id_ssa2');

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/Sidebar', $data);
        $this->load->view('Presales/Penilaian', $data);
        $this->load->view('Presales/Modal/V_Wawancara', $data);
        $this->load->view('Presales/Modal/V_SSA1', $data);
        $this->load->view('Presales/Modal/V_Ceklis', $data);
        $this->load->view('Presales/Modal/V_SSA2', $data);
        $this->load->view('Presales/Modal/V_Device', $data);
        $this->load->view('Presales/Modal/V_CCTV', $data);
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
            //     $this->session->set_flashdata('pesan0', '<div class="alert alert-danger" role="alert">
            // Gagal Simpan! </div>');
            $this->session->set_flashdata('flashdata', 'Insert');
            redirect('Presales/CTR_Presales/Penilaian/' . $id_permintaan);
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
            redirect('Presales/CTR_Presales/Penilaian/' . $id_permintaan);
        }
    }

    public function LihatAssesment($id_permintaan)
    {
        $data['judul'] = 'PT SIGAP PRIMA ASTREA';
        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $id = $this->uri->segment(4);

        $data['isi'] = $this->data->GetData($id);
        $data['isiDetail'] = $this->data->GetDataDetail($id);
        //WawancaraComment
        $data['nama'] = $this->data->GetDataW($id);
        $data['isiW'] = $this->data->JoinJawaban($id)->result();
        $data['isiWDetail'] = $this->data->JoinJawabanDetail($id)->result();
        //SSA1Comment
        $data['isiS1'] = $this->data->GetDataS1($id);
        $data['isiS1Detail'] = $this->data->GetDataS1Detail($id);
        // CeklisComment
        $data['isiC'] = $this->data->GetDataC($id);
        $data['isiCDetail'] = $this->data->GetDataCDetail($id);
        //SSA2Comment
        $data['isiS2'] = $this->data->GetDataS2($id);
        $data['isiS2Detail'] = $this->data->GetDataS2Detail($id);
        $data['isi_detail_S2'] = $this->data->GetDetailS2($id);
        //DeviceComment
        $data['isiD'] = $this->data->GetDataD($id);
        $data['isiDDetail'] = $this->data->GetDataDDetail($id);
        //CCTVComment
        $data['isi_detail_Ct'] = $this->data->GetDetailCt($id);
        $data['isiCt'] = $this->data->GetDataCctv($id);
        $data['isiCtDetail'] = $this->data->GetDataCctvDetail($id);

        $data['id_permintaan'] = $id_permintaan;

        //Approval
        $data['tunggu'] = $this->data->JumlahMenunggu();
        $data['progres'] = $this->data->JumlahProgres();
        $data['setujui'] = $this->data->JumlahDisetujui();
        $data['revisi'] = $this->data->JumlahRevisi();

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/Sidebar', $data);
        $this->load->view('Presales/V_Lihat', $data);
        $this->load->view('Presales/Modal/V_Wawancara', $data);
        $this->load->view('Presales/Modal/V_SSA1', $data);
        $this->load->view('Presales/Modal/V_Ceklis', $data);
        $this->load->view('Presales/Modal/V_SSA2', $data);
        $this->load->view('Presales/Modal/V_Device', $data);
        $this->load->view('Presales/Modal/V_CCTV', $data);
        $this->load->view('Template/Footer');
    }

    // Permintaan
    public function permintaan()
    {
        $data['judul'] = 'PT SIGAP PRIMA ASTREA';

        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();
        $data['isi'] = $this->data->GetAllData();

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/Sidebar');
        $this->load->view('Presales/V_Pelaksanaan', $data);
        $this->load->view('Template/Footer');
    }

    function SimpanPermintaan()
    {
        $npp = $this->input->post('npp');
        $nps = $this->input->post('nps');
        $nama_user = $this->input->post('nama_user');
        $lokasi = $this->input->post('lokasi');
        $sub_lokasi = $this->input->post('sub_lokasi');
        $luas_wilayah = $this->input->post('luas_wilayah');
        $kegiatan_akan = $this->input->post('kegiatan_akan');
        $status = 'On Progress';
        $id_permintaan = $this->input->post('id_permintaan');
        $data = array(
            'npp' => $npp,
            'nps' => $nps,
            'nama_user' => $nama_user,
            'lokasi' => $lokasi,
            'sub_lokasi' => $sub_lokasi,
            'luas_wilayah' => $luas_wilayah,
            'kegiatan_akan' => $kegiatan_akan,
            'status' => $status,
        );

        $this->db->where('id_permintaan', $id_permintaan);
        $this->db->update('tbl_permintaan', $data);
        $this->session->set_flashdata('flashdata', 'Mulai');
        redirect('Presales/CTR_Presales/Penilaian/' . $id_permintaan);
    }
    // End Permintaan

    // Download
    public function DownloadFotoSSA2($id)
    {
        $data = $this->db->get_where('detail_ssa2', ['id_detail_ssa2' => $id])->row();
        force_download('assets/img/ssa2/' . $data->foto_ssa2, NULL);
    }

    public function DownloadFotoCCTV1($id)
    {
        $data = $this->db->get_where('detail_cctv', ['id_detail_cctv' => $id])->row();
        force_download('assets/img/cctv/depan/' . $data->view_depan, NULL);
    }

    public function DownloadFotoCCTV2($id)
    {
        $data = $this->db->get_where('detail_cctv', ['id_detail_cctv' => $id])->row();
        force_download('assets/img/cctv/belakang/' . $data->view_belakang, NULL);
    }

    // Wawancara
    public function PilihPertanyaanWawancara()
    {
        $id_permintaan = $this->input->post('id_permintaan');
        $diwawancarai = $this->input->post('diwawancarai');
        $jabatan1 = $this->input->post('jabatan1');
        $diwawancara = $this->input->post('diwawancara');
        $jabatan2 = $this->input->post('jabatan2');

        $data1 = array(
            'id_permintaan' => $id_permintaan,
            'diwawancarai' => $diwawancarai,
            'jabatan1' => $jabatan1,
            'diwawancara' => $diwawancara,
            'jabatan2' => $jabatan2
        );
        $this->db->insert('tbl_wawancara', $data1);

        $id_wawancara = $this->db->insert_id('id_wawancara'); //insert last id
        $id_pertanyaan_wawancara = $this->input->post('id_pertanyaan_wawancara');

        foreach ($id_pertanyaan_wawancara as $key => $val) {
            $result = array(
                'id_pertanyaan_wawancara' => $id_pertanyaan_wawancara[$key],
                'id_wawancara' => $id_wawancara
            );
            $this->db->insert('ms_jawaban_wawancara', $result);
        }
        $this->session->set_flashdata('flashdata', 'Pilih Pertanyaan');
        redirect('Presales/CTR_Presales/Wawancara/' . $id_permintaan);
    }

    public function Wawancara($id_permintaan)
    {
        $data['judul'] = 'PT SIGAP PRIMA ASTREA';

        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();
        $id = $this->uri->segment(4);
        //Ambil Data wawancara
        $data['nama'] = $this->data->GetDataW($id);
        // $id_wawancara = $this->db->insert_id('id_wawancara');
        $data['join'] = $this->data->JoinJawaban($id)->result();

        $data['id_permintaan'] = $id_permintaan;
        //Approval
        $data['tunggu'] = $this->data->JumlahMenunggu();
        $data['progres'] = $this->data->JumlahProgres();
        $data['setujui'] = $this->data->JumlahDisetujui();
        $data['revisi'] = $this->data->JumlahRevisi();

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/Sidebar');
        $this->load->view('Presales/Pertanyaan/Wawancara/V_Proses_Wawancara', $data);
        $this->load->view('Template/Footer');
    }

    public function SimpanWawancara()
    {
        $id_permintaan = $this->input->post('id_permintaan');
        $config['upload_path']          = './assets/img/wawancara/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 512;

        // $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('foto_wawancara')) {
            $this->session->set_flashdata('pesan0', '<div class="alert alert-danger" role="alert">
        Form Wawancara Gagal Disimpan! </div>');
            redirect('Presales/CTR_Presales/Wawancara/' . $id_permintaan);
        } else {
            $foto_wawancara = $this->upload->data();
            $foto_wawancara = $foto_wawancara['file_name'];

            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/img/wawancara/' . $foto_wawancara;
            $config['create_thumb'] = false;
            $config['maintain_ratio'] = false;
            $config['quality'] = '100%';
            $config['width'] = 384;
            $config['height'] = 216;
            $config['new_image'] = './assets/img/wawancara/' . $foto_wawancara;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            $id_permintaan = $this->input->post('id_permintaan');
            $id_jawaban_wawancara = $this->input->post('id_jawaban_wawancara');
            $jawaban = $this->input->post('jawaban');

            $this->db->set('foto_wawancara', $foto_wawancara);
            $this->db->where('id_permintaan', $id_permintaan);
            $this->db->update('tbl_wawancara');

            $result = array();
            foreach ($id_jawaban_wawancara as $key => $val) {
                $result[] = array(
                    'id_jawaban_wawancara' => $id_jawaban_wawancara[$key],
                    'jawaban' => $jawaban[$key],
                    'created_by' => $this->session->userdata('npk'),
                    'created_date' => date('Y-m-d H:i:s'),
                    'modified_by' => null,
                    'modified_date' => null
                );
            }
            $this->db->update_batch('ms_jawaban_wawancara', $result, 'id_jawaban_wawancara');
            $this->session->set_flashdata('flashdata', 'Insert');
            redirect('Presales/CTR_Presales/Penilaian/' . $id_permintaan);
        }
    }

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

                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/img/wawancara/' . $foto_wawancara;
                $config['create_thumb'] = false;
                $config['maintain_ratio'] = false;
                $config['quality'] = '100%';
                $config['width'] = 500;
                $config['height'] = 350;
                $config['new_image'] = './assets/img/wawancara/' . $foto_wawancara;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
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
        redirect('Presales/CTR_Presales/Penilaian/' . $id_permintaan);
    }
    // End Wawancara

    // SSA1 
    public function SimpanSSA1()
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
            'created_by' => $this->session->userdata('npk'),
            'created_date' => date('Y-m-d H:i:s')
        );
        $this->db->insert('tbl_ssa1', $data);
        // $this->session->set_flashdata('pesan0', '<div class="alert alert-success" role="alert">
        // Form SSA1 Berhasil Disimpan! </div>');
        $this->session->set_flashdata('flashdata', 'Insert');
        redirect('Presales/CTR_Presales/Penilaian/' . $id_permintaan);
    }

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
        // Form SSA1 Berhasil Disimpan! </div>');
        $this->session->set_flashdata('flashdata', 'Update');
        redirect('Presales/CTR_Presales/Penilaian/' . $id_permintaan);
    }
    // End SSA1

    // Ceklis
    public function PilihPertanyaanCeklis()
    {
        $id_permintaan = $this->input->post('id_permintaan');

        $data1 = array(
            'id_permintaan' => $id_permintaan,
            'created_by' => $this->session->userdata('npk'),
            'created_date' => date('Y-m-d H:i:s')
        );
        $this->db->insert('tbl_cekliss', $data1);

        $id_ceklis = $this->db->insert_id('id_ceklis'); //insert last id
        $id_pertanyaan_ceklis = $this->input->post('id_pertanyaan_ceklis');

        foreach ($id_pertanyaan_ceklis as $key => $val) {
            $result = array(
                'id_pertanyaan_ceklis' => $id_pertanyaan_ceklis[$key],
                'id_ceklis' => $id_ceklis
            );
            $this->db->insert('ms_jawaban_ceklis', $result);
        }
        // $this->session->set_flashdata('pesan0', '<div class="alert alert-success" role="alert">
        // Silahkan Untuk Memulai Mengisi Form Ceklis! </div>');
        $this->session->set_flashdata('flashdata', 'Pilih Pertanyaan');
        redirect('Presales/CTR_Presales/Ceklis/' . $id_permintaan);
    }

    public function Ceklis($id_permintaan)
    {
        $data['judul'] = 'PT SIGAP PRIMA ASTREA';

        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();
        $id = $this->uri->segment(4);
        //Ambil Data wawancara
        $data['nama'] = $this->data->GetDataC($id);
        // $id_wawancara = $this->db->insert_id('id_wawancara');
        $data['join'] = $this->data->JoinJawabanCeklis($id)->result();

        $data['id_permintaan'] = $id_permintaan;
        //Approval
        $data['tunggu'] = $this->data->JumlahMenunggu();
        $data['progres'] = $this->data->JumlahProgres();
        $data['setujui'] = $this->data->JumlahDisetujui();
        $data['revisi'] = $this->data->JumlahRevisi();

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/Sidebar');
        $this->load->view('Presales/Pertanyaan/Ceklis/V_Proses_Ceklis', $data);
        $this->load->view('Template/Footer');
    }

    public function SimpanCeklis()
    {
        $id_permintaan = $this->input->post('id_permintaan');
        $id_jawaban_ceklis = $this->input->post('id_jawaban_ceklis');
        $kondisi = $this->input->post('kondisi');
        $keterangan = $this->input->post('keterangan');

        $result = array();
        foreach ($id_jawaban_ceklis as $key => $val) {
            $result[] = array(
                'id_jawaban_ceklis' => $id_jawaban_ceklis[$key],
                'kondisi' => $kondisi[$key],
                'keterangan' => $keterangan[$key]
            );
        }
        $this->db->update_batch('ms_jawaban_ceklis', $result, 'id_jawaban_ceklis');
        // $this->session->set_flashdata('pesan0', '<div class="alert alert-success" role="alert">
        // Form Ceklis Berhasil Disimpan! </div>');
        $this->session->set_flashdata('flashdata', 'Insert');
        redirect('Presales/CTR_Presales/Penilaian/' . $id_permintaan);
    }

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
        // Form Ceklis Berhasil Disimpan! </div>');
        $this->session->set_flashdata('flashdata', 'Update');
        redirect('Presales/CTR_Presales/Penilaian/' . $id_permintaan);
    }

    // End Ceklis

    // SSA2
    public function SimpanSSA2()
    {
        $id_permintaan = $this->input->post('id_permintaan');
        $data1 = array(
            'id_permintaan' => $id_permintaan,
            'created_by' => $this->session->userdata('npk'),
            'created_date' => date('Y-m-d H:i:s')
        );
        $this->db->insert('tbl_ssa2', $data1);

        $id_ssa2 = $this->db->insert_id('id_ssa2'); //insert last id
        $data = [];
        $count = count($_FILES['foto_ssa2']['name']);
        for ($i = 0; $i < $count; $i++) {
            if (!empty($_FILES['foto_ssa2']['name'][$i])) {

                $_FILES['file']['name'] = $_FILES['foto_ssa2']['name'][$i];
                $_FILES['file']['type'] = $_FILES['foto_ssa2']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['foto_ssa2']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['foto_ssa2']['error'][$i];
                $_FILES['file']['size'] = $_FILES['foto_ssa2']['size'][$i];

                $config['upload_path'] = './assets/img/ssa2/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = '512';
                $config['file_name'] = $_FILES['foto_ssa2']['nama_pos'][$i];

                // $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('file')) {
                    $foto_ssa2 = $this->upload->data();
                    $filename = $foto_ssa2['file_name'];

                    $configi['image_library'] = 'gd2';
                    $configi['source_image'] = './assets/img/ssa2/' . $filename;
                    $configi['create_thumb'] = false;
                    $configi['maintain_ratio'] = false;
                    $configi['quality'] = '100%';
                    $configi['width'] = 384;
                    $configi['height'] = 216;
                    $configi['new_image'] = './assets/img/ssa2/' . $filename;
                    $this->load->library('image_lib');
                    $this->image_lib->initialize($configi);
                    $this->image_lib->resize();

                    $data1[] = $filename;
                } else if ($_FILES['file']['size'] > '512') {
                    $this->db->where('id_ssa2', $id_ssa2);
                    $this->db->delete('tbl_ssa2');
                    $this->session->set_flashdata('pesan0', '<div class="alert alert-danger" role="alert"> Gagal Simpan! File Terlalu Besar, Pastikan ukuran file anda kurang dari 500kb!</div>');
                    redirect('Presales/CTR_Presales/Penilaian/' . $id_permintaan);
                } else {
                    $this->db->where('id_ssa2', $id_ssa2);
                    $this->db->delete('tbl_ssa2');
                    $this->session->set_flashdata('pesan0', '<div class="alert alert-danger" role="alert"> Gagal Simpan! </div>');
                    redirect('Presales/CTR_Presales/Penilaian/' . $id_permintaan);
                }
            }
        }

        $nama_pos = $this->input->post('nama_pos');
        foreach ($nama_pos as $key => $val) {
            $data[] = array(
                'nama_pos' => $this->input->post('nama_pos')[$key],
                'total_anggota' => $this->input->post('total_anggota')[$key],
                'jam_kerja' => $this->input->post('jam_kerja')[$key] . '`' . $this->input->post('shift')[$key],
                'lokasi_kerja' => $this->input->post('lokasi_kerja')[$key],
                'kerawanan' => $this->input->post('kerawanan')[$key],
                'ancaman' => $this->input->post('ancaman')[$key],
                'fungsi_job_desk' => $this->input->post('fungsi_job_desk')[$key],
                'foto_ssa2' => $data1[$key],
                'id_ssa2' => $id_ssa2,
            );
        }
        $this->db->insert_batch('detail_ssa2', $data);
        // $this->session->set_flashdata('pesan0', '<div class="alert alert-success" role="alert">
        // Form SSA2 Berhasil Disimpan! </div>');
        $this->session->set_flashdata('flashdata', 'Insert');
        $id_permintaan = $this->input->post('id_permintaan');
        redirect('Presales/CTR_Presales/Penilaian/' . $id_permintaan);
    }

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

                    $configi['image_library'] = 'gd2';
                    $configi['source_image'] = './assets/img/ssa2/' . $filename;
                    $configi['create_thumb'] = false;
                    $configi['maintain_ratio'] = false;
                    $configi['quality'] = '100%';
                    $configi['width'] = 384;
                    $configi['height'] = 216;
                    $configi['new_image'] = './assets/img/ssa2/' . $filename;
                    $this->load->library('image_lib');
                    $this->image_lib->initialize($configi);
                    $this->image_lib->resize();

                    $foto_s2[] = $filename;
                } else if ($_FILES['file']['size'] > '512') {
                    $this->db->where('id_ssa2', $id_ssa2);
                    $this->db->delete('tbl_ssa2');
                    $this->session->set_flashdata('pesan0', '<div class="alert alert-danger" role="alert"> Gagal Tambah! File Terlalu Besar, Pastikan ukuran file anda kurang dari 500kb!</div>');
                    redirect('Presales/CTR_Presales/Penilaian/' . $id_permintaan);
                } else {
                    $this->session->set_flashdata('pesan0', '<div class="alert alert-danger" role="alert"> Gagal Tambah! </div>');
                    redirect('Presales/CTR_Presales/Penilaian/' . $id_permintaan);
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
        redirect('Presales/CTR_Presales/Penilaian/' . $id_permintaan);
    }

    // End SSA2

    // Survey Device
    public function SimpanDevice()
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
            'created_by' => $this->session->userdata('npk'),
            'created_date' => date('Y-m-d H:i:s')
        );
        $this->db->insert('tbl_device', $data);
        // $this->session->set_flashdata('pesan0', '<div class="alert alert-success" role="alert">
        // Form Survey Device Berhasil Disimpan! </div>');
        $this->session->set_flashdata('flashdata', 'Insert');
        redirect('Presales/CTR_Presales/Penilaian/' . $id_permintaan);
    }

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
        redirect('Presales/CTR_Presales/Penilaian/' . $id_permintaan);
    }

    // End Survey Device

    // CCTV
    function SimpanCCTV()
    {
        $id_permintaan = $this->input->post('id_permintaan');
        $data1 = array(
            'id_permintaan' => $id_permintaan,
            'created_by' =>  $this->session->userdata('npk'),
            'created_date' => date('Y-m-d H:i:s')
        );
        $this->db->insert('tbl_cctv', $data1);

        $id_cctv = $this->db->insert_id('id_cctv');

        $data = [];
        $count = count($_FILES['view_depan']['name']);
        for ($i = 0; $i < $count; $i++) {
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
                    redirect('Presales/CTR_Presales/Penilaian/' . $id_permintaan);
                } else {
                    $this->session->set_flashdata('pesan0', '<div class="alert alert-danger" role="alert"> Gagal Tambah! </div>');
                    redirect('Presales/CTR_Presales/Penilaian/' . $id_permintaan);
                }
            }
        }

        $data = [];
        $count = count($_FILES['view_belakang']['name']);
        for ($i = 0; $i < $count; $i++) {
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

                    $config2['image_library'] = 'gd2';
                    $config2['source_image'] = './assets/img/cctv/belakang/' . $filename;
                    $config2['create_thumb'] = false;
                    $config2['maintain_ratio'] = false;
                    $config2['quality'] = '100%';
                    $config2['width'] = 384;
                    $config2['height'] = 216;
                    $config2['new_image'] = './assets/img/cctv/belakang/' . $filename;
                    $this->load->library('image_lib');
                    $this->image_lib->initialize($config2);
                    $this->image_lib->resize();

                    $data2[] = $filename;
                } else if ($_FILES['file']['size'] > '512') {
                    $this->db->where('id_cctv', $id_cctv);
                    $this->db->delete('tbl_cctv');
                    $this->session->set_flashdata('pesan0', '<div class="alert alert-danger" role="alert"> Gagal Tambah! File Terlalu Besar, Pastikan ukuran file anda kurang dari 500kb!</div>');
                    redirect('Presales/CTR_Presales/Penilaian/' . $id_permintaan);
                } else {
                    $this->session->set_flashdata('pesan0', '<div class="alert alert-danger" role="alert"> Gagal Tambah! </div>');
                    redirect('Presales/CTR_Presales/Penilaian/' . $id_permintaan);
                }
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

        // $this->session->set_flashdata('pesan0', '<div class="alert alert-success" role="alert"> Form CCTV Berhasil Disimpan! </div>');
        $this->session->set_flashdata('flashdata', 'Insert');
        redirect('Presales/CTR_Presales/Penilaian/' . $id_permintaan);
    }

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
                    redirect('Presales/CTR_Presales/Penilaian/' . $id_permintaan);
                } else {
                    $this->session->set_flashdata('pesan0', '<div class="alert alert-danger" role="alert"> Gagal Tambah! </div>');
                    redirect('Presales/CTR_Presales/Penilaian/' . $id_permintaan);
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

                    $config2['image_library'] = 'gd2';
                    $config2['source_image'] = './assets/img/cctv/belakang/' . $filename;
                    $config2['create_thumb'] = false;
                    $config2['maintain_ratio'] = false;
                    $config2['quality'] = '100%';
                    $config2['width'] = 384;
                    $config2['height'] = 216;
                    $config2['new_image'] = './assets/img/cctv/belakang/' . $filename;
                    $this->load->library('image_lib');
                    $this->image_lib->initialize($config2);
                    $this->image_lib->resize();

                    $data2[] = $filename;
                } else if ($_FILES['file']['size'] > '512') {
                    $this->db->where('id_cctv', $id_cctv);
                    $this->db->delete('tbl_cctv');
                    $this->session->set_flashdata('pesan0', '<div class="alert alert-danger" role="alert"> Gagal Tambah! File Terlalu Besar, Pastikan ukuran file anda kurang dari 500kb!</div>');
                    redirect('Presales/CTR_Presales/Penilaian/' . $id_permintaan);
                } else {
                    $this->session->set_flashdata('pesan0', '<div class="alert alert-danger" role="alert"> Gagal Tambah!</div>');
                    redirect('Presales/CTR_Presales/Penilaian/' . $id_permintaan);
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
        redirect('Presales/CTR_Presales/Penilaian/' . $id_permintaan);
    }

    public function pending()
    {
        $data['judul'] = 'PT SIGAP PRIMA ASTREA';

        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $data['isi'] = $this->data->GetAllData();
        $data['tunggu'] = $this->data->JumlahMenunggu();
        $data['progres'] = $this->data->JumlahProgres();
        $data['setujui'] = $this->data->JumlahDisetujui();
        $data['revisi'] = $this->data->JumlahRevisi();

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/Sidebar', $data);
        $this->load->view('Presales/Status/V_Pending', $data);
        $this->load->view('Template/Footer');
    }

    public function progres()
    {
        $data['judul'] = 'PT SIGAP PRIMA ASTREA';

        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $data['isi'] = $this->data->GetAllData();
        // $data['isiw'] = $this->data->menunggu_approval();

        $data['progres'] = $this->data->JumlahProgres();
        $data['tungguA'] = $this->data->JumlahMenungguApproval();
        $data['tunggu'] = $this->data->JumlahMenunggu();
        $data['setujui'] = $this->data->JumlahDisetujui();
        $data['revisi'] = $this->data->JumlahRevisi();

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/Sidebar', $data);
        $this->load->view('Presales/Status/V_Progres', $data);
        $this->load->view('Template/Footer');
    }

    function SelesaiAssesment()
    {
        $id_permintaan = $this->input->post('id_permintaan');
        $this->db->set('status', 'Menunggu Approval');
        $this->db->where('id_permintaan', $id_permintaan);
        $this->db->update('tbl_permintaan');
        // $this->session->set_flashdata('pesan0', '<div class="alert alert-success" role="alert">
        // Assesment Telah Selesai! </div>');
        $this->session->set_flashdata('flashdata', 'Done');
        redirect('Presales/CTR_Presales/progres');
    }

    function SelesaiAssesmentRevisi()
    {
        $id_permintaan = $this->input->post('id_permintaan');
        $this->db->set('status', 'Menunggu Approval');
        $this->db->where('id_permintaan', $id_permintaan);
        $this->db->update('tbl_permintaan');
        // $this->session->set_flashdata('pesan0', '<div class="alert alert-success" role="alert">
        // Assesment Telah Selesai! </div>');
        $this->session->set_flashdata('flashdata', 'Done');
        redirect('Presales/CTR_Presales/revisi');
    }

    public function revisi()
    {
        $data['judul'] = 'PT SIGAP PRIMA ASTREA';

        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        // $data['isi'] = $this->data->revisi();
        $data['isi'] = $this->data->GetAllData();
        $data['progres'] = $this->data->JumlahProgres();
        $data['tunggu'] = $this->data->JumlahMenunggu();
        $data['setujui'] = $this->data->JumlahDisetujui();
        $data['revisi'] = $this->data->JumlahRevisi();

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/Sidebar', $data);
        $this->load->view('Presales/Status/V_Revisi', $data);
        $this->load->view('Template/Footer');
    }

    public function approved()
    {
        $data['judul'] = 'PT SIGAP PRIMA ASTREA';

        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();
        // $id = $this->input->post('id_permintaan');
        $data['isi'] = $this->data->disetujui();
        $data['isi1'] = $this->data->GetAllData();

        $data['progres'] = $this->data->JumlahProgres();
        $data['tunggu'] = $this->data->JumlahMenunggu();
        $data['setujui'] = $this->data->JumlahDisetujui();
        $data['revisi'] = $this->data->JumlahRevisi();

        $id_permintaan = $this->input->post('id_permintaan');
        $data['id_permintaan'] = $id_permintaan;

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/Sidebar', $data);
        $this->load->view('Presales/Status/V_Approved', $data);
        $this->load->view('Template/Footer');
    }

    // Pertanyaan Wawancara
    public function pertanyaan()
    {
        $data['judul'] = 'PT SIGAP PRIMA ASTREA';

        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $data['pertanyaan'] = $this->data->GetPertanyaan();
        $data['isi'] = $this->data->disetujui();
        $data['total_wawancara'] = $this->data->TotalWawancara();

        $data['tunggu'] = $this->data->JumlahMenunggu();
        $data['progres'] = $this->data->JumlahProgres();
        $data['setujui'] = $this->data->JumlahDisetujui();
        $data['revisi'] = $this->data->JumlahRevisi();
        $data['seluruh'] = $this->data->JumlahSeluruh();

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/Sidebar', $data);
        $this->load->view('Presales/Pertanyaan/Wawancara/V_Pertanyaan', $data);
        $this->load->view('Template/Footer');
    }

    public function TambahPertanyaan()
    {
        $pertanyaan = $this->input->post('pertanyaan');
        $proses = $this->input->post('proses');

        $data = array(
            'pertanyaan' => $pertanyaan,
            'proses' => $proses,
            'status_pertanyaan_ceklis' => 'Aktif',
            'created_by' => $this->session->userdata('npk'),
            'created_date' => date('Y-m-d H:i:s')
        );

        $this->db->insert('ms_pertanyaan_wawancara', $data);
        // $this->session->set_flashdata('pesan1', '<div class="alert alert-success" role="alert">Pertanyaan Berhasil Ditambahkan! </div>');
        $this->session->set_flashdata('flashdata', 'Insert');
        redirect('Presales/CTR_Presales/pertanyaan/');
    }

    public function EditPertanyaan()
    {
        $id_pertanyaan_wawancara = $this->input->post('id_pertanyaan_wawancara');
        $pertanyaan = $this->input->post('pertanyaan');
        $proses = $this->input->post('proses');

        $data = array(
            'pertanyaan' => $pertanyaan,
            'proses' => $proses,
            'modified_by' => $this->session->userdata('npk'),
            'modified_date' => date('Y-m-d H:i:s')
        );

        $this->db->where('id_pertanyaan_wawancara', $id_pertanyaan_wawancara);
        $this->db->update('ms_pertanyaan_wawancara', $data);
        // $this->session->set_flashdata('pesan1', '<div class="alert alert-success" role="alert">Pertanyaan Berhasil Diupdate! </div>');
        $this->session->set_flashdata('flashdata', 'Update');
        redirect('Presales/CTR_Presales/pertanyaan/');
    }

    public function AktifkanPertanyaan()
    {
        $id_pertanyaan_wawancara = $this->input->post('id_pertanyaan_wawancara');

        $this->db->set('is_active', 'Aktif');
        $this->db->where('id_pertanyaan_wawancara', $id_pertanyaan_wawancara);
        $this->db->update('ms_pertanyaan_wawancara');
        // $this->session->set_flashdata('pesan1', '<div class="alert alert-success" role="alert">Pertanyaan Diaktifkan! </div>');
        $this->session->set_flashdata('flashdata', 'Aktif');
        redirect('Presales/CTR_Presales/pertanyaan/');
    }

    public function NonaktifkanPertanyaan()
    {
        $id_pertanyaan_wawancara = $this->input->post('id_pertanyaan_wawancara');

        $this->db->set('is_active', 'Nonaktif');
        $this->db->where('id_pertanyaan_wawancara', $id_pertanyaan_wawancara);
        $this->db->update('ms_pertanyaan_wawancara');
        // $this->session->set_flashdata('pesan1', '<div class="alert alert-danger" role="alert">Pertanyaan Dinonaktifkan! </div>');
        $this->session->set_flashdata('flashdata', 'Nonaktif');
        redirect('Presales/CTR_Presales/pertanyaan/');
    }

    // Pertanyaan Ceklis
    public function KategoriCeklis()
    {
        $data['judul'] = 'PT SIGAP PRIMA ASTREA';

        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $data['kategori_ceklis'] = $this->data->GetKategoriCeklis();
        $data['isi'] = $this->data->disetujui();
        $data['total_ceklis'] = $this->data->TotalCeklis();

        $data['tunggu'] = $this->data->JumlahMenunggu();
        $data['progres'] = $this->data->JumlahProgres();
        $data['setujui'] = $this->data->JumlahDisetujui();
        $data['revisi'] = $this->data->JumlahRevisi();

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/Sidebar', $data);
        $this->load->view('Presales/Pertanyaan/Ceklis/V_Kategori_Ceklis', $data);
        $this->load->view('Template/Footer');
    }

    public function TambahKategoriCeklis()
    {
        $kategori_ceklis = $this->input->post('kategori_ceklis');

        $data = array(
            'kategori_ceklis' => $kategori_ceklis,
            'status_kategori_ceklis' => 'Aktif',
            'created_by' => $this->session->userdata('npk'),
            'created_date' => date('Y-m-d H:i:s')
        );

        $this->db->insert('ms_kategori_ceklis', $data);
        // $this->session->set_flashdata('pesan1', '<div class="alert alert-success" role="alert">Kategori Berhasil Ditambahkan! </div>');
        $this->session->set_flashdata('flashdata', 'Insert');
        redirect('Presales/CTR_Presales/KategoriCeklis/');
    }

    public function EditKategoriCeklis()
    {
        $id_kategori = $this->input->post('id_kategori');
        $kategori = $this->input->post('kategori_ceklis');

        $data = array(
            'kategori_ceklis' => $kategori,
            'modified_by' => $this->session->userdata('npk'),
            'modified_date' => date('Y-m-d H:i:s')
        );

        $this->db->where('id_kategori', $id_kategori);
        $this->db->update('ms_kategori_ceklis', $data);
        // $this->session->set_flashdata('pesan1', '<div class="alert alert-success" role="alert">Kategori Berhasil Diupdate! </div>');
        $this->session->set_flashdata('flashdata', 'Update');
        redirect('Presales/CTR_Presales/KategoriCeklis/');
    }

    public function AktifkanKategoriCeklis()
    {
        $id_kategori = $this->input->post('id_kategori');

        $data1 = array('status_kategori_ceklis' => 'Aktif');
        $data2 = array('status_pertanyaan_ceklis' => 'Aktif');
        // $this->db->set('status_kategori_ceklis', 'Aktif');
        $where = $this->db->where('id_kategori', $id_kategori);
        $this->db->update('ms_kategori_ceklis', $data1, $where);
        $this->db->update('ms_pertanyaan_ceklis', $data2, $where);
        // $this->session->set_flashdata('pesan1', '<div class="alert alert-success" role="alert">Kategori DiAktifkan! </div>');
        $this->session->set_flashdata('flashdata', 'Aktif');
        redirect('Presales/CTR_Presales/KategoriCeklis/');
    }

    public function NonaktifkanKategoriCeklis()
    {
        $id_kategori = $this->input->post('id_kategori');

        $data1 = array('status_kategori_ceklis' => 'Nonaktif');
        $data2 = array('status_pertanyaan_ceklis' => 'Nonaktif');
        // $this->db->set('status_kategori_ceklis', 'Aktif');
        $where = array('id_kategori' => $id_kategori);
        $this->db->update('ms_kategori_ceklis', $data1, $where);
        $this->db->update('ms_pertanyaan_ceklis', $data2, $where);
        // $this->session->set_flashdata('pesan1', '<div class="alert alert-danger" role="alert">Kategori Dinonaktifkan! </div>');
        $this->session->set_flashdata('flashdata', 'Nonaktif');
        redirect('Presales/CTR_Presales/KategoriCeklis/');
    }

    public function PertanyaanCeklis()
    {
        $data['judul'] = 'PT SIGAP PRIMA ASTREA';

        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $id = $this->uri->segment(4);

        $data['id_kategori'] = $this->uri->segment(4);

        $data['isi'] = $this->data->GetPertanyaanCeklisID($id);
        $data['isiK'] = $this->data->GetKategoriCeklisID($id);

        $data['tunggu'] = $this->data->JumlahMenunggu();
        $data['progres'] = $this->data->JumlahProgres();
        $data['setujui'] = $this->data->JumlahDisetujui();
        $data['revisi'] = $this->data->JumlahRevisi();

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/Sidebar', $data);
        $this->load->view('Presales/Pertanyaan/Ceklis/V_Pertanyaan_Ceklis', $data);
        $this->load->view('Template/Footer');
    }

    public function TambahPertanyaanCeklis()
    {
        $pertanyaan_ceklis = $this->input->post('pertanyaan_ceklis');
        $id_kategori = $this->input->post('id_kategori');

        $data = array(
            'pertanyaan_ceklis' => $pertanyaan_ceklis,
            'id_kategori' => $id_kategori,
            'status_pertanyaan_ceklis' => 'Aktif',
            'created_by' => $this->session->userdata('npk'),
            'created_date' => date('Y-m-d H:i:s')
        );

        $this->db->insert('ms_pertanyaan_ceklis', $data);
        // $this->session->set_flashdata('pesan1', '<div class="alert alert-success" role="alert">Pertanyaan Berhasil Ditambahkan! </div>');
        $this->session->set_flashdata('flashdata', 'Insert');
        redirect('Presales/CTR_Presales/PertanyaanCeklis/' . $id_kategori);
    }

    public function EditPertanyaanCeklis()
    {
        $id_pertanyaan_ceklis = $this->input->post('id_pertanyaan_ceklis');
        $pertanyaan_ceklis = $this->input->post('pertanyaan_ceklis');
        $id_kategori = $this->input->post('id_kategori');

        $data = array(
            'pertanyaan_ceklis' => $pertanyaan_ceklis,
            'modified_by' => $this->session->userdata('npk'),
            'modified_date' => date('Y-m-d H:i:s')
        );

        $this->db->where('id_pertanyaan_ceklis', $id_pertanyaan_ceklis);
        $this->db->update('ms_pertanyaan_ceklis', $data);
        // $this->session->set_flashdata('pesan1', '<div class="alert alert-success" role="alert">Pertanyaan Berhasil Diupdate! </div>');
        $this->session->set_flashdata('flashdata', 'Update');
        redirect('Presales/CTR_Presales/PertanyaanCeklis/' . $id_kategori);
    }

    public function AktifkanPertanyaanCeklis()
    {
        $id_pertanyaan_ceklis = $this->input->post('id_pertanyaan_ceklis');
        $id_kategori = $this->input->post('id_kategori');

        $this->db->set('status_pertanyaan_ceklis', 'Aktif');
        $this->db->where('id_pertanyaan_ceklis', $id_pertanyaan_ceklis);
        $this->db->update('ms_pertanyaan_ceklis');
        // $this->session->set_flashdata('pesan1', '<div class="alert alert-success" role="alert">Pertanyaan Diaktifkan! </div>');
        $this->session->set_flashdata('flashdata', 'Aktif');
        redirect('Presales/CTR_Presales/PertanyaanCeklis/' . $id_kategori);
    }

    public function NonaktifkanPertanyaanCeklis()
    {
        $id_pertanyaan_ceklis = $this->input->post('id_pertanyaan_ceklis');
        $id_kategori = $this->input->post('id_kategori');

        $this->db->set('status_pertanyaan_ceklis', 'Nonaktif');
        $this->db->where('id_pertanyaan_ceklis', $id_pertanyaan_ceklis);
        $this->db->update('ms_pertanyaan_ceklis');
        // $this->session->set_flashdata('pesan1', '<div class="alert alert-danger" role="alert">Pertanyaan Dinonaktifkan! </div>');
        $this->session->set_flashdata('flashdata', 'Nonaktif');
        redirect('Presales/CTR_Presales/PertanyaanCeklis/' . $id_kategori);
    }

    public function Pengguna()
    {
        $data['judul'] = 'PT SIGAP PRIMA ASTREA';

        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $data['pengguna'] = $this->db->get('tbl_user')->result_array();

        $data['tunggu'] = $this->data->JumlahMenunggu();
        $data['progres'] = $this->data->JumlahProgres();
        $data['setujui'] = $this->data->JumlahDisetujui();
        $data['revisi'] = $this->data->JumlahRevisi();

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/Sidebar', $data);
        $this->load->view('Presales/Pengguna', $data);
        $this->load->view('Template/Footer');
    }

    public function TambahPengguna()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('npk', 'Npk', 'required|trim|is_unique[tbl_user.npk]');

        if ($this->form_validation->run() == true) {
            $npk = $this->input->post('npk', true);
            $nama = $this->input->post('nama');
            $role = $this->input->post('role');
            $lokasi = $this->input->post('lokasi');
            $sub_lokasi = $this->input->post('sub_lokasi');
            $password = $this->input->post('password');

            $data = [
                'npk' => $npk,
                'nama' => $nama,
                'role' => $role,
                'lokasi' => $lokasi,
                'sub_lokasi_arh' => $sub_lokasi,
                'password' => $password,
                'is_active' => 'Aktif',
                'created_by' => $this->session->userdata('npk'),
                'created_date' => date('Y-m-d H:i:s')
            ];

            $this->db->insert('tbl_user', $data);
            $this->session->set_flashdata('flashdata', 'Insert');
            redirect('Presales/CTR_Presales/Pengguna');
        } else {
            $this->session->set_flashdata('flashdata', 'Terdaftar');
            redirect('Presales/CTR_Presales/Pengguna');
        }
    }

    public function EditPengguna()
    {
        $npk = $this->input->post('npk');
        $nama = $this->input->post('nama');
        $role = $this->input->post('role');
        $lokasi = $this->input->post('lokasi');
        $sub_lokasi = $this->input->post('sub_lokasi');
        $password = $this->input->post('password');

        $data = array(
            'npk' => $npk,
            'nama' => $nama,
            'role' => $role,
            'lokasi' => $lokasi,
            'sub_lokasi_arh' => $sub_lokasi,
            'password' => $password,
            'modified_by' => $this->session->userdata('npk'),
            'modified_date' => date('Y-m-d H:i:s')
        );

        $this->db->where('npk', $npk);
        $this->db->update('tbl_user', $data);
        // $this->session->set_flashdata('pesan1', '<div class="alert alert-success" role="alert">Pengguna Berhasil Diupdate! </div>');
        $this->session->set_flashdata('flashdata', 'Update');
        redirect('Presales/CTR_Presales/Pengguna');
    }

    public function AktifkanPengguna()
    {
        $npk = $this->input->post('npk');

        $this->db->set('is_active', 'Aktif');
        $this->db->where('npk', $npk);
        $this->db->update('tbl_user');
        // $this->session->set_flashdata('pesan1', '<div class="alert alert-success" role="alert">Pengguna Diaktifkan! </div>');
        $this->session->set_flashdata('flashdata', 'Aktif');
        redirect('Presales/CTR_Presales/Pengguna/');
    }

    public function NonaktifkanPengguna()
    {
        $npk = $this->input->post('npk');

        $this->db->set('is_active', 'Nonaktif');
        $this->db->where('npk', $npk);
        $this->db->update('tbl_user');
        // $this->session->set_flashdata('pesan1', '<div class="alert alert-danger" role="alert">Pengguna Dinonaktifkan! </div>');
        $this->session->set_flashdata('flashdata', 'Nonaktif');
        redirect('Presales/CTR_Presales/Pengguna/');
    }

    public function Assigment_Kasie()
    {
        $data['judul'] = 'ASSESMENT SIGAP';
        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $data['isi'] = $this->data->GetAllData();
        $data['tunggu'] = $this->data->JumlahMenunggu();
        $data['progres'] = $this->data->JumlahProgres();
        $data['tungguA'] = $this->data->JumlahMenungguApproval();
        $data['setujui'] = $this->data->JumlahDisetujui();
        $data['revisi'] = $this->data->JumlahRevisi();
        $data['seluruh'] = $this->data->JumlahSeluruh();

        $id_permintaan = $this->input->post('id_permintaan');
        $data['id_permintaan'] = $id_permintaan;

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/Sidebar', $data);
        $this->load->view('Presales/Status/V_Assignment', $data);
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
        redirect('Presales/CTR_Presales/Assigment_Kasie');
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
        redirect('Presales/CTR_Presales/Assigment_Kasie');
    }

    public function Approval_Kasie()
    {
        $data['judul'] = 'ASSESMENT SIGAP';
        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $data['isi'] = $this->data->GetAllData();
        $data['tunggu'] = $this->data->JumlahMenunggu();
        $data['progres'] = $this->data->JumlahProgres();
        $data['tungguA'] = $this->data->JumlahMenungguApproval();
        $data['setujui'] = $this->data->JumlahDisetujui();
        $data['revisi'] = $this->data->JumlahRevisi();
        $data['seluruh'] = $this->data->JumlahSeluruh();

        $id_permintaan = $this->input->post('id_permintaan');
        $data['id_permintaan'] = $id_permintaan;

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/Sidebar', $data);
        $this->load->view('Presales/Status/V_Approval', $data);
        $this->load->view('Template/Footer');
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
        redirect('Presales/CTR_Presales/Approval_Kasie');
    }

    function revisii()
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
        redirect('Presales/CTR_Presales/Approval_Kasie');
    }

    public function Ditolak()
    {
        $data['judul'] = 'ASSESMENT SIGAP';
        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $data['isi'] = $this->data->GetAllData();
        $data['tunggu'] = $this->data->JumlahMenunggu();
        $data['progres'] = $this->data->JumlahProgres();
        $data['tungguA'] = $this->data->JumlahMenungguApproval();
        $data['setujui'] = $this->data->JumlahDisetujui();
        $data['revisi'] = $this->data->JumlahRevisi();
        $data['seluruh'] = $this->data->JumlahSeluruh();

        $id_permintaan = $this->input->post('id_permintaan');
        $data['id_permintaan'] = $id_permintaan;

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/Sidebar', $data);
        $this->load->view('Presales/Status/V_Ditolak', $data);
        $this->load->view('Template/Footer');
    }

    public function Daftar_Commercial()
    {
        $data['judul'] = 'ASSESMENT SIGAP';
        $data['user'] = $this->db->get_where('tbl_user', ['npk' =>
        $this->session->userdata('npk')])->row_array();

        $data['isi'] = $this->data->GetAllData();
        $data['tunggu'] = $this->data->JumlahMenunggu();
        $data['progres'] = $this->data->JumlahProgres();
        $data['tungguA'] = $this->data->JumlahMenungguApproval();
        $data['setujui'] = $this->data->JumlahDisetujui();
        $data['revisi'] = $this->data->JumlahRevisi();
        $data['seluruh'] = $this->data->JumlahSeluruh();

        $id_permintaan = $this->input->post('id_permintaan');
        $data['id_permintaan'] = $id_permintaan;

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/Sidebar', $data);
        $this->load->view('Presales/Status/V_Daftar', $data);
        $this->load->view('Template/Footer');
    }

    public function tampil()
    {
        $id_permintaan = $this->input->get('id_permintaan');
        $lok = $this->db->query("SELECT * from tbl_permintaan where id_permintaan = '$id_permintaan'")->result_array();

        foreach ($lok as $l) {
            $lokasi = array(
                'npp' => $l['npp'],
                'nama_user' => $l['nama_user'],
                'lokasi' => $l['lokasi'],
                'sub_lokasi' => $l['sub_lokasi'],
                'luas_wilayah' => $l['luas_wilayah']
            );
        };
        echo json_encode($lokasi);
    }

    public function tampilArh()
    {
        $npk = $this->input->get('npk');
        $lok = $this->db->query("SELECT * from tbl_user where npk = '$npk'")->result_array();

        foreach ($lok as $l) {
            $lokasi = array(
                'sub_lokasi_arh' => $l['sub_lokasi_arh'],
            );
        };
        echo json_encode($lokasi);
    }

    public function TambahBaris()
    {
        $data['judul'] = 'PT. SIGAP PRIMA ASTREA';
        $data['baris'] = $this->input->post('count');
        $this->load->view('Presales/V_TambahBaris', $data);
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
            redirect('Presales/CTR_Presales/Daftar_Commercial');
        } else {
            $id_permintaan = $this->input->post('id_permintaan');

            $data = array(
                'npp' => $this->input->post('npp'),
                'nps' => $this->session->userdata('nama'),
                'pemilihan_user' => $this->input->post('pemilihan_user'),
                'nama_user' => $this->input->post('nama_user'),
                'lokasi' => $this->input->post('lokasi'),
                'sub_lokasi' => $this->input->post('sub_lokasi'),
                'luas_wilayah' => $this->input->post('luas_wilayah'),
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
            redirect('Presales/CTR_Presales/Daftar_Commercial');
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
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Pendaftaran Assesment Telah Diupdate! </div>');
        redirect('Presales/CTR_Presales/Daftar_Commercial');
    }
    // Tutup Daftar
}
