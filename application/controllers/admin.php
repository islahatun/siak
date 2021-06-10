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
        //     $data['tittle'] = "Dashboard";
        //     $this->load->view('templets/header', $data);
        //     $this->load->view('templets/sidebar');
        //     $this->load->view('templets/topbar');
        //     $this->load->view('admin/dashboard', $data);
        //     $this->load->view('templets/footer');
        echo "selamat datang";
    }
    public function penduduk()
    {
        $data['masyarakat'] = $this->db->get('masyarakat')->result_array();
        $data['tittle'] = "Data Penduduk";
        $data['judul'] = "Data Penduduk";
        $this->load->view('templets/header', $data);
        $this->load->view('templets/sidebar');
        $this->load->view('templets/topbar');
        $this->load->view('admin/data_penduduk', $data);
        $this->load->view('templets/footer');
    }
    public function tambah_penduduk()
    {

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
    public function hapus_penduduk($id)
    {
        $this->model_masyarakat->delete_masyarakat($id);

        $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Data Berhasil dihapus</strong></div>');

        redirect('admin/penduduk');
    }
}
