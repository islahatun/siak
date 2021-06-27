<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
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
        $this->load->view('templets/sidebar');
        $this->load->view('templets/topbar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templets/footer');
    }
    public function penduduk()
    {
        $data['tittle'] = "Data Penduduk";
        $data['judul'] = "Data Penduduk";
        $data['pengguna'] = $this->model_masyarakat->sessionpengguna();
        $data['menu'] = $this->model_masyarakat->menu();
        $data['masyarakat'] = $this->db->get('masyarakat')->result_array();

        $this->load->view('templets/header', $data);
        $this->load->view('templets/sidebar');
        $this->load->view('templets/topbar');
        $this->load->view('admin/data_penduduk', $data);
        $this->load->view('templets/footer');
    }
    public function tambah_penduduk()
    {
        $data['pengguna'] = $this->model_masyarakat->sessionpengguna();
        $data['menu'] = $this->model_masyarakat->menu();
        $data['tittle'] = "Tambah Data Penduduk";
        $data['judul'] = "Tambah Penduduk";

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
            $this->load->view('templets/sidebar');
            $this->load->view('templets/topbar');
            $this->load->view('admin/tambah_penduduk', $data);
            $this->load->view('templets/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'kk' => $this->input->post('kk'),
                'nik' => $this->input->post('nik'),
                'jk' => $this->input->post('jk'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'alamat' => $this->input->post('alamat'),
                'rt/rw' => $this->input->post('rt/rw'),
                'desa' => $this->input->post('desa'),
                'kecamatan' => $this->input->post('kecamatan'),
                'kabupaten' => $this->input->post('kabupaten'),
                'agama' => $this->input->post('agama'),
                'status' => $this->input->post('status'),
                'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                'kewarganegaraan' => $this->input->post('kewarganegaraan'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'gol' => $this->input->post('gol')
            ];
            $this->db->insert('masyarakat', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Data Berhasil di masukkan</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span </button> </div>');

            redirect('admin/penduduk');
        }
    }
    public function edit_penduduk($nik)
    {
        $data['pengguna'] = $this->model_masyarakat->sessionpengguna();
        $data['menu'] = $this->model_masyarakat->menu();
        $data['masyarakat'] = $this->model_masyarakat->getMasyarakat($nik);
        $data['tittle'] = "Tambah Data Penduduk";
        $data['judul'] = "Tambah Penduduk";

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
            $this->load->view('templets/sidebar');
            $this->load->view('templets/topbar');
            $this->load->view('admin/edit_penduduk', $data);
            $this->load->view('templets/footer');
        } else {

            $this->model_masyarakat->editpenduduk($nik);

            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Berhasi di upload</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span </button> </div>');

            redirect('admin/penduduk');
        }
    }
    public function hapus_penduduk($nik)
    {
        $this->model_masyarakat->delete_masyarakat($nik);

        $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Data Berhasil dihapus</strong></div>');

        redirect('admin/penduduk');
    }
    public function surat()
    {
        $data['pengguna'] = $this->model_masyarakat->sessionpengguna();
        $data['menu'] = $this->model_masyarakat->menu();
        $data['tittle'] = "Acc Surat";
        $data['surat'] = $this->model_masyarakat->surat();
        $this->load->view('templets/header', $data);
        $this->load->view('templets/sidebar');
        $this->load->view('templets/topbar');
        $this->load->view('admin/surat', $data);
        $this->load->view('templets/footer');
    }
    public function print($id)
    {

        $data['surat'] = $this->model_masyarakat->getsuratktp($id);
        $data['usaha'] = $this->model_masyarakat->getsuratusaha($id);
        $data['rame'] = $this->model_masyarakat->getsuratrame($id);
        $surat = $this->model_masyarakat->getsuratktp($id);

        switch ($surat['surat']) {
            case 'ktp':
                $this->load->view('surat/accKTP', $data);
                break;
            case 'usaha':
                $this->load->view('surat/accUsaha', $data);
                break;
            case 'domisili':
                $this->load->view('surat/accDomisili', $data);
                break;
            case 'nikah':
                $this->load->view('surat/accNikah', $data);
                break;
            case 'sktm':
                $this->load->view('surat/accSktm', $data);
                break;
            case 'rame':
                $this->load->view('surat/accRame', $data);
                break;
            default:
                $this->load->view('surat/accPindah', $data);
                break;
        }
    }
    public function artikel()
    {
        $data['tittle'] = "Artikel";
        $data['pengguna'] = $this->model_masyarakat->sessionpengguna();
        $data['menu'] = $this->model_masyarakat->menu();

        $this->form_validation->set_rules('judul', 'judul', 'required|trim');
        $this->form_validation->set_rules('isi', 'isi', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templets/header', $data);
            $this->load->view('templets/sidebar', $data);
            $this->load->view('templets/topbar', $data);
            $this->load->view('admin/artikel', $data);
            $this->load->view('templets/footer');
        } else {
            $this->model_masyarakat->artikel();

            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Berhasi di upload</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span </button> </div>');

            redirect('admin/artikel');
        }
    }
}
