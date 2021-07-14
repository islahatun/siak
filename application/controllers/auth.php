<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_masyarakat');
    }


    public function index()
    {
        $data['tittle'] = "Sistem Administrasi Kependudukan";
        $this->load->view('home/home', $data);
    }
    public function login()
    {
        $data['title'] = "Login";

        $this->form_validation->set_rules('nik', 'NIK', 'trim|required');
        $this->form_validation->set_rules('sandi', 'Sandi', 'required|trim');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Auth/header', $data);
            $this->load->view('Auth/login', $data);
            $this->load->view('Auth/footer');
        } else {
            //validasi sukses
            $nik = $this->input->post('nik');
            $sandi = $this->input->post('sandi');
            $user = $this->db->get_where('login', ['nik' => $nik])->row_array();
            // jika user ada
            if ($user) {
                // jika user aktif
                if ($user['aktif'] == 1) {
                    // cek password yang sudah di hash
                    if (password_verify($sandi, $user['sandi'])) {
                        $data = [
                            'nik' => $user['nik'],
                            'nama' => $user['nama'],
                            'level' => $user['level']
                        ];
                        $this->session->set_userdata($data);
                        switch ($user['level']) {
                            case 'masyarakat';
                                redirect('masyarakat');
                                break;
                            default:
                                redirect('admin');
                                break;
                        }
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-dangerterdaftar alert-dismissible fade show" role="alert">
                    <strong>Kata sandi salah</strong> 
                    </div>');
                        redirect('auth/login');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-dangerterdaftar alert-dismissible fade show" role="alert">
                <strong>pengguna tidak aktif</strong> 
                </div>');
                    redirect('auth/login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>NIK tidak terdaftar</strong> 
            </div>');
                redirect('auth/login');
            }
        }
    }

    public function regis()
    {
        $data['title'] = "Registrasi";

        $this->form_validation->set_rules('nik', 'NIK', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('sandi', 'Password', 'required|trim|min_length[6]|matches[sandi2]', [
            'matches' => 'Password tidak sama',
            'min_length' => 'Minimal 6 Karakter'
        ]);
        $this->form_validation->set_rules('sandi2', 'Password', 'required|matches[sandi]');

        if ($this->form_validation->run() == false) {
            $this->load->view('Auth/header', $data);
            $this->load->view('Auth/regis');
            $this->load->view('Auth/footer');
        } else {
            $nik = $this->input->post('nik');
            $nama = $this->input->post('nama');

            $user =  $this->db->get_where('masyarakat', ['nik' => $nik])->row_array();
            if ($user) {
                if ($user['nama'] == $nama) {
                    $this->model_masyarakat->regis();
                    $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Registrasi Berhasil</strong> 
                    </div>');
                    redirect('auth/login');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Nama tidak terdaftar</strong> 
                    </div>');
                    redirect('auth/regis');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>NIK tidak terdaftar</strong> 
                </div>');
                redirect('auth/regis');
            }
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('nik');
        $this->session->unset_userdata('level_id');

        redirect('auth');
    }
}
