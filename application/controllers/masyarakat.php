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

        $this->load->view('templets/header', $data);
        $this->load->view('templets/sidebar', $data);
        $this->load->view('templets/topbar', $data);
        $this->load->view('masyarakat/dashboard', $data);
        $this->load->view('templets/footer');
    }
}
