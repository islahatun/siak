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

        $this->load->view('templets/header', $data);
        $this->load->view('templets/sidebar', $data);
        $this->load->view('templets/topbar', $data);
        $this->load->view('surat/ktp', $data);
        $this->load->view('templets/footer');
    }
    public function surat_pindah()
    {
        $data['tittle'] = "pembuatan Surat Pindah";
        $data['judul'] = "surat Pindah";
        $data['pengguna'] = $this->model_masyarakat->sessionpengguna();
        $data['menu'] = $this->model_masyarakat->menu();

        $this->load->view('templets/header', $data);
        $this->load->view('templets/sidebar', $data);
        $this->load->view('templets/topbar', $data);
        $this->load->view('surat/pindah', $data);
        $this->load->view('templets/footer');
    }
    public function surat_keterangan_usaha()
    {
        $data['tittle'] = "pembuatan Surat Keterangan Usaha";
        $data['judul'] = "Surat Keterangan Usaha";
        $data['pengguna'] = $this->model_masyarakat->sessionpengguna();
        $data['menu'] = $this->model_masyarakat->menu();

        $this->load->view('templets/header', $data);
        $this->load->view('templets/sidebar', $data);
        $this->load->view('templets/topbar', $data);
        $this->load->view('surat/keterangan_usaha', $data);
        $this->load->view('templets/footer');
    }
    public function surat_sktm()
    {
        $data['tittle'] = "pembuatan Surat Keterangan Tidak Mampu";
        $data['judul'] = "Surat Keterangan Tidak Mampu";
        $data['pengguna'] = $this->model_masyarakat->sessionpengguna();
        $data['menu'] = $this->model_masyarakat->menu();

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

        $this->load->view('templets/header', $data);
        $this->load->view('templets/sidebar', $data);
        $this->load->view('templets/topbar', $data);
        $this->load->view('surat/domisili', $data);
        $this->load->view('templets/footer');
    }
    public function surat_nikah()
    {
        $data['tittle'] = "pembuatan pengantar nikah";
        $data['judul'] = "Surat pengantar nikah";
        $data['pengguna'] = $this->model_masyarakat->sessionpengguna();
        $data['menu'] = $this->model_masyarakat->menu();

        $this->load->view('templets/header', $data);
        $this->load->view('templets/sidebar', $data);
        $this->load->view('templets/topbar', $data);
        $this->load->view('surat/nikah', $data);
        $this->load->view('templets/footer');
    }
    public function surat_rame()
    {
        $data['tittle'] = "pembuatan pengantar nikah";
        $data['judul'] = "Surat pengantar nikah";
        $data['pengguna'] = $this->model_masyarakat->sessionpengguna();
        $data['menu'] = $this->model_masyarakat->menu();

        $this->load->view('templets/header', $data);
        $this->load->view('templets/sidebar', $data);
        $this->load->view('templets/topbar', $data);
        $this->load->view('surat/rame', $data);
        $this->load->view('templets/footer');
    }
}
