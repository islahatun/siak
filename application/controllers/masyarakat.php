<?php
defined('BASEPATH') or exit('No direct script access allowed');

class masyarakat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_masyarakat');
    }

    public function index()
    {
        $data['tittle'] = "Dashboard";
        $data['pengguna'] = $this->model_masyarakat->sessionpengguna();
        $data['menu'] = $this->model_masyarakat->menu();
        $data['artikel'] = $this->model_masyarakat->get_artikel();
        $data['perempuan'] = $this->model_masyarakat->perempuan();
        $data['laki'] = $this->model_masyarakat->laki();
        // $data['count']  = $this->model_masyarakat->semua();

        $this->load->view('templets/header', $data);
        $this->load->view('templets/sidebar');
        $this->load->view('templets/topbar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templets/footer');
    }
    public function profil()
    {
        $data['tittle'] = "Profil";
        $data['pengguna'] = $this->model_masyarakat->sessionpengguna();
        $data['menu'] = $this->model_masyarakat->menu();
        $data['masyarakat'] = $this->model_masyarakat->getMasyarakatByNik();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('nik', 'NO. NIK', 'required|trim');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('rt/rw', 'Rt / Rw', 'required|trim');
        $this->form_validation->set_rules('desa', 'Desa', 'required|trim');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim');
        $this->form_validation->set_rules('agama', 'Agama', 'required|trim');
        $this->form_validation->set_rules('status', 'Status Perkawinan', 'required|trim');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');
        $this->form_validation->set_rules('gol', 'Golongan Darah', 'required|trim');
        $this->form_validation->set_rules('kabupaten', 'kabupaten', 'required|trim');
        $this->form_validation->set_rules('pendidikan_terakhir', 'Pendidikan Terakhir', 'required|trim');
        $this->form_validation->set_rules('kewarganegaraan', 'Kewarganegaraan', 'required|trim');
        $this->form_validation->set_rules('kk', 'NO.KK', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templets/header', $data);
            $this->load->view('templets/sidebar', $data);
            $this->load->view('templets/topbar', $data);
            $this->load->view('masyarakat/profil', $data);
            $this->load->view('templets/footer');
        } else {
            $this->model_masyarakat->editPofil();

            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Data Berhasil diubah</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span </button> </div>');

            redirect('masyarakat/profil');
        }
    }
}
