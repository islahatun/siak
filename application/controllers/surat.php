<?php
defined('BASEPATH') or exit('No direct script access allowed');

class surat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_masyarakat');
    }
    public function surat_ktp()
    {
        $data['tittle'] = "pembuatan Pengantar ktp";
        $data['judul'] = "Pengantar KTP";
        $data['pengguna'] = $this->model_masyarakat->sessionpengguna();
        $data['menu'] = $this->model_masyarakat->menu();
        $data['masyarakat'] = $this->model_masyarakat->getMasyarakatByNik();

        $this->form_validation->set_rules('nik', 'nik', 'trim|required');
        $this->form_validation->set_rules('tanggal', 'tanggal pengajuan', 'trim|required');
        $this->form_validation->set_rules('surat', 'surat', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templets/header', $data);
            $this->load->view('templets/sidebar', $data);
            $this->load->view('templets/topbar', $data);
            $this->load->view('surat/ktp', $data);
            $this->load->view('templets/footer');
        } else {
            $this->model_masyarakat->ktp();
            $this->model_masyarakat->pengajuan();
            $this->session->set_flashdata('message', '
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Berhasil diajukan</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('surat/surat_ktp');
        }
    }
    public function surat_pindah()
    {
        $data['tittle'] = "pembuatan Surat Pindah";
        $data['judul'] = "surat Pindah";
        $data['pengguna'] = $this->model_masyarakat->sessionpengguna();
        $data['menu'] = $this->model_masyarakat->menu();
        $data['masyarakat'] = $this->model_masyarakat->getMasyarakatByNik();

        $this->form_validation->set_rules('nik', 'nik', 'trim|required');
        $this->form_validation->set_rules('tanggal', 'tanggal pengajuan', 'trim|required');
        $this->form_validation->set_rules('surat', 'surat', 'trim|required');
        $this->form_validation->set_rules('alamat_pindah', 'alamat_pindah', 'trim|required');
        $this->form_validation->set_rules('rt/rw_pindah', 'rt/rw_pindah', 'trim|required');
        $this->form_validation->set_rules('desa_pindah', 'desa_pindah', 'trim|required');
        $this->form_validation->set_rules('kecamatan_pindah', 'kecamatan_pindah', 'trim|required');
        $this->form_validation->set_rules('kabupaten/kota_pindah', 'kabupaten_pindah ', 'trim|required');
        $this->form_validation->set_rules('provinsi_pindah', 'provinsi_pindah', 'trim|required');
        $this->form_validation->set_rules('alasan_pindah', 'alasan_pindah', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templets/header', $data);
            $this->load->view('templets/sidebar', $data);
            $this->load->view('templets/topbar', $data);
            $this->load->view('surat/pindah', $data);
            $this->load->view('templets/footer');
        } else {
            $this->model_masyarakat->pindah();
            $this->model_masyarakat->pengajuan();
            $this->session->set_flashdata('message', '
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Berhasil diajukan</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('surat/surat_pindah');
        }
    }
    public function surat_keterangan_usaha()
    {
        $data['tittle'] = "pembuatan Surat Keterangan Usaha";
        $data['judul'] = "Surat Keterangan Usaha";
        $data['pengguna'] = $this->model_masyarakat->sessionpengguna();
        $data['menu'] = $this->model_masyarakat->menu();
        $data['masyarakat'] = $this->model_masyarakat->getMasyarakatByNik();

        $this->form_validation->set_rules('nik', 'nik', 'trim|required');
        $this->form_validation->set_rules('surat', 'surat', 'trim|required');
        $this->form_validation->set_rules('jenis_usaha', 'jenis_usaha', 'trim|required');
        $this->form_validation->set_rules('tempat_usaha', 'tempat_usaha pengajuan', 'trim|required');
        $this->form_validation->set_rules('tanggal', 'tanggal pengajuan', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templets/header', $data);
            $this->load->view('templets/sidebar', $data);
            $this->load->view('templets/topbar', $data);
            $this->load->view('surat/keterangan_usaha', $data);
            $this->load->view('templets/footer');
        } else {
            $this->model_masyarakat->usaha();
            $this->model_masyarakat->pengajuan();
            $this->session->set_flashdata('message', '
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Berhasil diajukan</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('surat/surat_keterangan_usaha');
        }
    }
    public function surat_sktm()
    {
        $data['tittle'] = "pembuatan Surat Keterangan Tidak Mampu";
        $data['judul'] = "Surat Keterangan Tidak Mampu";
        $data['pengguna'] = $this->model_masyarakat->sessionpengguna();
        $data['menu'] = $this->model_masyarakat->menu();
        $data['masyarakat'] = $this->model_masyarakat->getMasyarakatByNik();

        $this->load->view('templets/header', $data);
        $this->load->view('templets/sidebar', $data);
        $this->load->view('templets/topbar', $data);
        $this->load->view('surat/sktm', $data);
        $this->load->view('templets/footer');
    }
    public function surat_domisili()
    {
        $data['tittle'] = "pembuatan domisili";
        $data['judul'] = "Surat domisili";
        $data['pengguna'] = $this->model_masyarakat->sessionpengguna();
        $data['menu'] = $this->model_masyarakat->menu();
        $data['masyarakat'] = $this->model_masyarakat->getMasyarakatByNik();

        $this->form_validation->set_rules('nik', 'nik', 'trim|required');
        $this->form_validation->set_rules('tanggal', 'tanggal pengajuan', 'trim|required');
        $this->form_validation->set_rules('surat', 'surat', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templets/header', $data);
            $this->load->view('templets/sidebar', $data);
            $this->load->view('templets/topbar', $data);
            $this->load->view('surat/domisili', $data);
            $this->load->view('templets/footer');
        } else {
            $this->model_masyarakat->domisili();
            $this->model_masyarakat->pengajuan();
            $this->session->set_flashdata('message', '
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Berhasil diajukan</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('surat/surat_domisili');
        }
    }
    public function surat_nikah()
    {
        $data['tittle'] = "pembuatan pengantar nikah";
        $data['judul'] = "Surat pengantar nikah";
        $data['pengguna'] = $this->model_masyarakat->sessionpengguna();
        $data['menu'] = $this->model_masyarakat->menu();
        $data['masyarakat'] = $this->model_masyarakat->getMasyarakatByNik();

        $this->form_validation->set_rules('nik', 'nik', 'trim|required');
        $this->form_validation->set_rules('tanggal', 'tanggal pengajuan', 'trim|required');
        $this->form_validation->set_rules('surat', 'surat', 'trim|required');
        $this->form_validation->set_rules('pasangan', 'pasangan', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templets/header', $data);
            $this->load->view('templets/sidebar', $data);
            $this->load->view('templets/topbar', $data);
            $this->load->view('surat/nikah', $data);
            $this->load->view('templets/footer');
        } else {
            $this->model_masyarakat->domisili();
            $this->model_masyarakat->pengajuan();
            $this->session->set_flashdata('message', '
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Berhasil diajukan</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('surat/surat_nikah');
        }
    }
    public function surat_rame()
    {
        $data['tittle'] = "pembuatan pengantar nikah";
        $data['judul'] = "Surat pengantar nikah";
        $data['pengguna'] = $this->model_masyarakat->sessionpengguna();
        $data['menu'] = $this->model_masyarakat->menu();
        $data['masyarakat'] = $this->model_masyarakat->getMasyarakatByNik();

        $this->form_validation->set_rules('nik', 'nik', 'trim|required');
        $this->form_validation->set_rules('tanggal', 'tanggal pengajuan', 'trim|required');
        $this->form_validation->set_rules('surat', 'surat', 'trim|required');
        $this->form_validation->set_rules('maksud', 'maksud', 'trim|required');
        $this->form_validation->set_rules('tanggal_pelaksanaan', 'tanggal_pelaksanaan ', 'trim|required');
        $this->form_validation->set_rules('tempat', 'tempat', 'trim|required');
        $this->form_validation->set_rules('waktu', 'waktu', 'trim|required');
        $this->form_validation->set_rules('hiburan', 'hiburan', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templets/header', $data);
            $this->load->view('templets/sidebar', $data);
            $this->load->view('templets/topbar', $data);
            $this->load->view('surat/rame', $data);
            $this->load->view('templets/footer');
        } else {
            $this->model_masyarakat->rame();
            $this->model_masyarakat->pengajuan();
            $this->session->set_flashdata('message', '
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Berhasil diajukan</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('surat/surat_rame');
        }
    }
}
