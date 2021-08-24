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
        $data['artikel'] = $this->model_masyarakat->get_artikel();
        $data['perempuan'] = $this->model_masyarakat->perempuan();
        $data['laki'] = $this->model_masyarakat->laki();
        $data['struktur'] = $this->model_masyarakat->struktur();
        $data['masyarakat'] = $this->model_masyarakat->getMasyarakatByNik();
        $data['visi_misi'] = $this->model_masyarakat->visiMisi();
        // $data['count']  = $this->model_masyarakat->semua();

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
        $data['cari'] = $this->model_masyarakat->cari();
        $data['pengguna'] = $this->model_masyarakat->sessionpengguna();
        $data['masyarakat'] = $this->model_masyarakat->getMasyarakatByNik();
        $data['menu'] = $this->model_masyarakat->menu();
        $data['masyarakat'] = $this->db->get('masyarakat')->result_array();

        $this->load->view('templets/header', $data);
        $this->load->view('templets/sidebar');
        $this->load->view('templets/topbar');
        $this->load->view('admin/data_penduduk', $data);
        $this->load->view('templets/footer');
    }
    public function cari()
    {
        $data['tittle'] = "Data Penduduk";
        $data['judul'] = "Data Penduduk";
        $data['masyarakat'] = $this->model_masyarakat->cari();
        $data['pengguna'] = $this->model_masyarakat->sessionpengguna();
        // $data['masyarakat'] = $this->model_masyarakat->getMasyarakatByNik();
        $data['menu'] = $this->model_masyarakat->menu();

        $this->load->view('templets/header', $data);
        $this->load->view('templets/sidebar');
        $this->load->view('templets/topbar');
        $this->load->view('admin/data_penduduk', $data);
        $this->load->view('templets/footer');
    }
    public function tambah_penduduk()
    {
        $data['pengguna'] = $this->model_masyarakat->sessionpengguna();
        $data['masyarakat'] = $this->model_masyarakat->getMasyarakatByNik();
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
                'gol' => $this->input->post('gol'),
                'gambar' => 'default.jpg'
            ];
            $this->db->insert('masyarakat', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Data Berhasil di masukkan</strong></div>');

            redirect('admin/penduduk');
        }
    }
    public function edit_penduduk($nik)
    {
        $data['pengguna'] = $this->model_masyarakat->sessionpengguna();
        $data['masyarakat'] = $this->model_masyarakat->getMasyarakatByNik();
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

            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Berhasi di upload</strong></div>');

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
        $data['masyarakat'] = $this->model_masyarakat->getMasyarakatByNik();
        $data['menu'] = $this->model_masyarakat->menu();
        $data['tittle'] = "Acc Surat";
        $data['surat'] = $this->model_masyarakat->surat();
        $this->load->view('templets/header', $data);
        $this->load->view('templets/sidebar');
        $this->load->view('templets/topbar');
        $this->load->view('admin/surat', $data);
        $this->load->view('templets/footer');
    }
    public function laporan()
    {
        $data['surat'] = $this->model_masyarakat->laporan_surat();

        $this->load->view('admin/laporan', $data);
    }
    public function print($id)
    {

        $data['surat'] = $this->model_masyarakat->getsuratktp($id);
        $data['usaha'] = $this->model_masyarakat->getsuratusaha($id);
        $data['rame'] = $this->model_masyarakat->getsuratrame($id);
        $surat = $this->model_masyarakat->getsuratktp($id);
        $data['pindah'] = $this->model_masyarakat->suratpindah($id);
        $data['ikut'] = $this->model_masyarakat->surat_ikut_pindah($id);
        $data['nikah'] = $this->model_masyarakat->surat_nikah($id);
        $data['sktm'] = $this->model_masyarakat->surat_sktm($id);
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
        $data['masyarakat'] = $this->model_masyarakat->getMasyarakatByNik();
        $data['menu'] = $this->model_masyarakat->menu();
        $data['artikel'] = $this->model_masyarakat->get_artikel();

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

            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Berhasi di upload</strong> </div>');

            redirect('admin/artikel');
        }
    }
    // public function edit_artikel($id)
    // {
    //     $data['tittle'] = "Artikel";
    //     $data['pengguna'] = $this->model_masyarakat->sessionpengguna();
    //     $data['masyarakat'] = $this->model_masyarakat->getMasyarakatByNik();
    //     $data['menu'] = $this->model_masyarakat->menu();
    //     $data['artikel'] = $this->model_masyarakat->get_artikel();

    //     $this->form_validation->set_rules('judul', 'judul', 'required|trim');
    //     $this->form_validation->set_rules('isi', 'isi', 'required|trim');

    //     if ($this->form_validation->run() == false) {
    //         $this->load->view('templets/header', $data);
    //         $this->load->view('templets/sidebar', $data);
    //         $this->load->view('templets/topbar', $data);
    //         $this->load->view('admin/artikel', $data);
    //         $this->load->view('templets/footer');
    //     } else {
    //         $this->model_masyarakat->artikel();

    //         $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Berhasi di upload</strong> </div>');

    //         redirect('admin/artikel');
    //     }
    // }

    public function hapus_artikel($id)
    {
        $this->model_masyarakat->delete_artikel($id);

        $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Artikel Berhasil dihapus</strong></div>');

        redirect('admin/artikel');
    }
    public function desa()
    {
        $data['tittle'] = "Tentang Desa";
        $data['judul'] = "Struktur Organisasi";
        $data['masyarakat'] = $this->model_masyarakat->getMasyarakatByNik();
        $data['pengguna'] = $this->model_masyarakat->sessionpengguna();
        $data['menu'] = $this->model_masyarakat->menu();
        $data['struktur'] = $this->model_masyarakat->struktur();

        $this->form_validation->set_rules('lurah', 'lurah', 'required|trim');
        $this->form_validation->set_rules('sekretaris', 'sekretaris', 'required|trim');
        $this->form_validation->set_rules('bendahara', 'bendahara', 'required|trim');
        $this->form_validation->set_rules('kasi_pelayanan', 'Kasi Pelayanan', 'required|trim');
        $this->form_validation->set_rules('kasi_pemerintahan', 'Kasi Pemerintahan', 'required|trim');
        $this->form_validation->set_rules('kasi_pemberdayaan', 'kasi_pemberdayaan', 'required|trim');
        $this->form_validation->set_rules('kaur_perencanaan', 'Kaur Perencanaan', 'required|trim');
        $this->form_validation->set_rules('kaur_keuangan', 'kaur_keuangan', 'required|trim');
        $this->form_validation->set_rules('kaur_umum', 'kaur_umum', 'required|trim');
        $this->form_validation->set_rules('kadus1', 'kadus1', 'required|trim');
        $this->form_validation->set_rules('kadus2', 'kadus2 Perkawinan', 'required|trim');
        $this->form_validation->set_rules('visi', 'visi Perkawinan', 'required|trim');
        $this->form_validation->set_rules('misi', 'misi Perkawinan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templets/header', $data);
            $this->load->view('templets/sidebar', $data);
            $this->load->view('templets/topbar', $data);
            $this->load->view('admin/struktur', $data);
            $this->load->view('templets/footer');
        } else {
            $this->model_masyarakat->insert_struktur();

            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Berhasi di Simpan</strong></div>');

            redirect('admin/desa');
        }
    }
    public function admin()
    {
        $data['pengguna'] = $this->model_masyarakat->sessionpengguna();
        $data['masyarakat'] = $this->model_masyarakat->getMasyarakatByNik();
        $data['masyarakat'] = $this->model_masyarakat->getMasyarakatByNik();
        $data['menu'] = $this->model_masyarakat->menu();
        $data['admin'] = $this->model_masyarakat->admin();
        $data['tittle'] = "Edit Admin";
        $data['judul'] = "Edit Admin";

        $this->form_validation->set_rules('nik', 'NIK', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('sandi', 'Password', 'required|trim|min_length[6]|matches[sandi2]', [
            'matches' => 'Password tidak sama',
            'min_length' => 'Minimal 6 Karakter'
        ]);
        $this->form_validation->set_rules('sandi2', 'Password', 'required|matches[sandi]');
        if ($this->form_validation->run() == false) {
            $this->load->view('templets/header', $data);
            $this->load->view('templets/sidebar');
            $this->load->view('templets/topbar');
            $this->load->view('admin/admin', $data);
            $this->load->view('templets/footer');
        } else {

            $this->model_masyarakat->editadmin();

            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Berhasi di upload</strong></div>');

            redirect('auth/login');
        }
    }
}
