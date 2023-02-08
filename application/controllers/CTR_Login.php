<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTR_Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        // Form Validation untuk memvalidasi email dan password yang sesuai
        $this->form_validation->set_rules('npk', 'NPK', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) { //jika salah jalankan yang ini
            $data['judul'] = 'PT SIGAP PRIMA ASTREA';
            // $this->load->view('template/header');
            $this->load->view('Template/V_Login', $data);
        } else {
            // kalau validdasinya berhasil
            $this->_login(); //melakukan validasi login private
        }
    }

    public function forbidden()
    {
        $this->load->view('template/forbidden');
    }


    private function _login()
    {
        $npk = $this->input->post('npk');
        $password = $this->input->post('password');

        //query ke database
        $user = $this->db->get_where('tbl_user', ['npk' => $npk])->row_array();
        //get_where merupakan fungsi dr ci yangdibaca Select * From user Where (,) 

        //jika usernya ada maka akan masuk
        if ($user) {
            //jika usernya aktif
            if ($user['is_active'] == 'Aktif') {
                //cek password
                if ($password == $user['password']) {
                    $data = [
                        'npk' => $user['npk'],
                        'nama' => $user['nama'],
                        'password' => $user['password'],
                        'role' => $user['role'],
                        'status_login' => 'Status Login'
                    ];
                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('flashdata', 'Login');
                    //untuk melakukan login ke presales/commerce
                    if ($user['role'] == 'Presales') {
                        // $this->session->set_flashdata('massage', '<div class="alert alert-success text-center" role="alert">Anda Berhasil Login!</div>');
                        redirect('Presales/CTR_Presales');
                    } else if ($user['role'] == 'Super Admin') {
                        redirect('Presales/CTR_Presales');
                    } else if ($user['role'] == 'Admin') {
                        redirect('Presales/CTR_Presales');
                    } else if ($user['role'] == 'Kasie') {
                        redirect('Kasie/CTR_Kasie');
                    } else if ($user['role'] == 'Commerce') {
                        redirect('Commerce/CTR_Commerce');
                    } else {
                        $this->session->set_flashdata('massage', '<div class="alert alert-danger text-center" role="alert">Role Tidak Terdaftar!</div>');
                        redirect('');
                    }
                } else {
                    $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Password Anda Salah</div>');
                    redirect('');
                }
            } else {
                $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">NPK Anda Tidak Aktif</div>');
                redirect('');
            }
        } else {
            $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">NPK Belum Terdaftar</div>');
            redirect('');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('flashdata', 'Logout');
        redirect(base_url());
    }
}
