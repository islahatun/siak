<?php

class model_masyarakat extends CI_Model
{
    public function sessionpengguna()
    {
        return $this->db->get_where('login', ['nik' => $this->session->userdata('nik')])->row_array();
    }
    public function menu()
    {
        $level =  $this->session->userdata('level');
        $menu = "SELECT menu.* FROM menu JOIN akses_menu ON menu.id = akses_menu.menu_id WHERE akses_menu.level = '$level' ORDER BY  akses_menu.menu_id";
        return $this->db->query($menu)->result_array();
    }
    public function delete_masyarakat($nik)
    {
        $this->db->where('nik', $nik);
        $this->db->delete('masyarakat');
    }
    public function regis()
    {

        $data = [
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'sandi' => password_hash($this->input->post('sandi'), PASSWORD_DEFAULT),
            'level' => 'masyarakat',
            'aktif' => '1'
        ];
        $this->db->insert('login', $data);
    }
    public function admin()
    {
        return $this->db->get_where('login', ['level' => 'admin'])->row_array();
    }
    public function editadmin()
    {
        $level = 'admin';
        $data = [
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'sandi' => password_hash($this->input->post('sandi'), PASSWORD_DEFAULT),
            'level' => 'admin',
            'aktif' => '1'
        ];
        $this->db->where('level', $level);
        $this->db->update('login', $data);
    }
    public function getMasyarakatByNik()
    {
        $n = $this->db->get_where('login', ['nik' => $this->session->userdata('nik')])->row_array();
        $nik = $n['nik'];

        // $masyarakat = "SELECT * FROM masyarakat Where masyarakat.nik = '$nik'";
        return $this->db->get_where('masyarakat', ['nik' => $nik])->row_array();
    }
    public function getMasyarakat($nik)
    {


        // $masyarakat = "SELECT * FROM masyarakat Where masyarakat.nik = '$nik'";
        return $this->db->get_where('masyarakat', ['nik' => $nik])->row_array();
    }
    public function ktp()
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'surat' => $this->input->post('surat'),
            'tanggal_surat' => date('y/m/d')
        ];

        $this->db->insert('ktp', $data);
    }
    public function pindah()
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'alamat_pindah' => $this->input->post('alamat_pindah'),
            'rt/rw_pindah' => $this->input->post('rt/rw_pindah'),
            'desa_pindah' => $this->input->post('desa_pindah'),
            'kecamatan_pindah' => $this->input->post('kecamatan_pindah'),
            'kabupaten/kota_pindah' => $this->input->post('kabupaten/kota_pindah'),
            'provinsi_pindah' => $this->input->post('provinsi_pindah'),
            'alasan_pindah' => $this->input->post('alasan_pindah'),
            'surat' => $this->input->post('surat'),
            'tanggal_surat' => date('y/m/d')
        ];
        $this->db->insert('surat_pindah', $data);
    }
    public function ikut_pindah()
    {
        $data = [
            'nik_surat' => $this->input->post('nik_surat'),
            'nama_ikut' => $this->input->post('nama_ikut')
        ];

        $this->db->insert('ikut_pindah', $data);
    }
    public function get_ikut()
    {
        $n = $this->db->get_where('login', ['nik' => $this->session->userdata('nik')])->row_array();
        $nik = $n['nik'];
        return $this->db->get_where('ikut_pindah', ['nik_surat' => $nik])->result_array();
    }
    public function usaha()
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'surat' => $this->input->post('surat'),
            'jenis_usaha' => $this->input->post('jenis_usaha'),
            'tempat_usaha' => $this->input->post('tempat_usaha'),
            'tanggal_surat' => date('y/m/d')
        ];
        $this->db->insert('surat_usaha', $data);
    }
    public function domisili()
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'surat' => $this->input->post('surat'),
            'alamat_domisili' => $this->input->post('alamat_domisili'),
            'tanggal_surat' => date('y/m/d')
        ];
        $this->db->insert('surat_domisili', $data);
    }
    public function nikah()
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'surat' => $this->input->post('surat'),
            'pasangan' => $this->input->post('pasangan'),
            'alamat_pasangan' => $this->input->post('alamat_pasangan'),
            'tanggal_surat' => date('y/m/d')
        ];
        $this->db->insert('surat_nikah', $data);
    }
    public function sktm()
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'surat' => $this->input->post('surat'),
            'alasan' => $this->input->post('alasan'),
            'tanggal_surat' => date('y/m/d')
        ];
        $this->db->insert('surat_sktm', $data);
    }
    public function rame()
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'surat' => $this->input->post('surat'),
            'maksud' => $this->input->post('maksud'),
            'tanggal_pelaksanaan' => $this->input->post('tanggal_pelaksanaan'),
            'waktu' => $this->input->post('waktu'),
            'tempat' => $this->input->post('tempat'),
            'hiburan' => $this->input->post('hiburan'),
            'tanggal_surat' => date('y/m/d')
        ];
        $this->db->insert('surat_izin_rame', $data);
    }
    public function pengajuan()
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'surat' => $this->input->post('surat'),
            'tanggal' => $this->input->post('tanggal')
        ];
        $this->db->insert('acc_surat', $data);
    }
    public function editPofil()
    {
        $gambar = $_FILES['gambar']['name'];
        if ($gambar) {
            $config['upload_path']          = './assets/img/profil/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2048;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('upload_form', $error);
            } else {

                $new_logo = $this->upload->data('file_name');
                $n = $this->db->get_where('login', ['nik' => $this->session->userdata('nik')])->row_array();
                $nik = $n['nik'];
                $data = [
                    'nama' => $this->input->post('nama'),
                    'kk' => $this->input->post('kk'),
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
                    'gambar' => $new_logo
                ];
                $this->db->where('nik', $nik);
                $this->db->update('masyarakat', $data);
            }
        }
    }
    public function editpenduduk($nik)
    {
        $n = $this->db->get_where('login', ['nik' => $this->session->userdata('nik')])->row_array();
        $nik = $n['nik'];
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
        $this->db->where('nik', $nik);
        $this->db->update('masyarakat', $data);
    }
    public function surat()
    {
        $join = "SELECT *,masyarakat.nik FROM acc_surat JOIN masyarakat ON acc_surat.nik = masyarakat.nik ORDER BY id_acc DESC";
        return $this->db->query($join)->result_array();
    }
    public function surat_ktp()
    {
        $n = $this->db->get_where('login', ['nik' => $this->session->userdata('nik')])->row_array();
        $nik = $n['nik'];
        $join = "SELECT * FROM acc_surat where nik = $nik and surat='ktp' ORDER BY id_acc DESC";
        return $this->db->query($join)->row_array();
    }
    public function surat_domisili()
    {
        $n = $this->db->get_where('login', ['nik' => $this->session->userdata('nik')])->row_array();
        $nik = $n['nik'];
        $join = "SELECT * FROM acc_surat where nik = $nik and surat='domisili' ORDER BY id_acc DESC";
        return $this->db->query($join)->row_array();
    }
    public function surat_nikah1()
    {
        $n = $this->db->get_where('login', ['nik' => $this->session->userdata('nik')])->row_array();
        $nik = $n['nik'];
        $join = "SELECT * FROM acc_surat where nik = $nik and surat='nikah' ORDER BY id_acc asc";
        return $this->db->query($join)->row_array();
    }
    public function surat_sktm1()
    {
        $n = $this->db->get_where('login', ['nik' => $this->session->userdata('nik')])->row_array();
        $nik = $n['nik'];
        $join = "SELECT * FROM acc_surat where nik = $nik and surat='sktm' ORDER BY id_acc DESC";
        return $this->db->query($join)->row_array();
    }
    public function surat_rame()
    {
        $n = $this->db->get_where('login', ['nik' => $this->session->userdata('nik')])->row_array();
        $nik = $n['nik'];
        $join = "SELECT * FROM acc_surat where nik = $nik and surat='rame' ORDER BY id_acc DESC";
        return $this->db->query($join)->row_array();
    }
    public function surat_pindah()
    {
        $n = $this->db->get_where('login', ['nik' => $this->session->userdata('nik')])->row_array();
        $nik = $n['nik'];
        $join = "SELECT * FROM acc_surat where nik = $nik and surat='pindah' ORDER BY id_acc DESC";
        return $this->db->query($join)->row_array();
    }
    public function surat_usaha()
    {
        $n = $this->db->get_where('login', ['nik' => $this->session->userdata('nik')])->row_array();
        $nik = $n['nik'];
        $join = "SELECT * FROM acc_surat where nik = $nik and surat='usaha' ORDER BY id_acc DESC";
        return $this->db->query($join)->row_array();
    }
    public function laporan_surat()
    {
        $join = "SELECT *,masyarakat.nik FROM acc_surat JOIN masyarakat ON acc_surat.nik = masyarakat.nik ";
        return $this->db->query($join)->result_array();
    }
    public function getsuratktp($id)
    {
        $join = "SELECT *, acc_surat.id_acc,masyarakat.status FROM masyarakat JOIN acc_surat ON masyarakat.nik = acc_surat.nik WHERE acc_surat.id_acc = $id and acc_surat.tanggal";
        return $this->db->query($join)->row_array();
    }
    public function getsuratusaha($id)
    {
        $join = "SELECT *, acc_surat.id_acc,surat_usaha.jenis_usaha,surat_usaha.tanggal_surat, surat_usaha.tempat_usaha,masyarakat.status FROM masyarakat JOIN acc_surat ON masyarakat.nik = acc_surat.nik JOIN surat_usaha ON surat_usaha.nik = masyarakat.nik WHERE acc_surat.id_acc = $id and surat_usaha.tanggal_surat = acc_surat.tanggal";
        return $this->db->query($join)->row_array();
    }
    public function getsuratrame($id)
    {
        $join = "SELECT *, acc_surat.id_acc,surat_izin_rame.maksud, surat_izin_rame.hiburan,surat_izin_rame.waktu,surat_izin_rame.tanggal_surat, surat_izin_rame.tempat,masyarakat.status FROM masyarakat JOIN acc_surat ON masyarakat.nik = acc_surat.nik JOIN surat_izin_rame ON surat_izin_rame.nik = masyarakat.nik WHERE acc_surat.id_acc = $id and surat_izin_rame.tanggal_surat = acc_surat.tanggal ";
        return $this->db->query($join)->row_array();
    }
    public function suratpindah($id)
    {
        $join = "SELECT *, acc_surat.id_acc,surat_pindah.alamat_pindah, surat_pindah.`rt/rw_pindah`,surat_pindah.desa_pindah,surat_pindah.kecamatan_pindah,surat_pindah.`kabupaten/kota_pindah`,surat_pindah.provinsi_pindah,surat_pindah.alasan_pindah,masyarakat.status, surat_pindah.tanggal_surat FROM masyarakat JOIN acc_surat ON masyarakat.nik = acc_surat.nik JOIN surat_pindah ON surat_pindah.nik = masyarakat.nik JOIN ikut_pindah ON ikut_pindah.nik_surat = surat_pindah.nik WHERE acc_surat.id_acc = $id and surat_pindah.tanggal_surat = acc_surat.tanggal";
        return $this->db->query($join)->row_array();
    }
    public function surat_ikut_pindah($id)
    {
        $join = "SELECT * FROM ikut_pindah JOIN surat_pindah ON ikut_pindah.nik_surat = surat_pindah.nik join acc_surat on surat_pindah.nik = acc_surat.nik WHERE acc_surat.id_acc = $id";
        return $this->db->query($join)->result_array();
    }
    public function surat_nikah($id)
    {
        $join = "SELECT *, acc_surat.id_acc,surat_nikah.pasangan,masyarakat.status, surat_nikah.tanggal_surat FROM masyarakat JOIN acc_surat ON masyarakat.nik = acc_surat.nik JOIN surat_nikah ON surat_nikah.nik = masyarakat.nik WHERE acc_surat.id_acc = $id and surat_nikah.tanggal_surat = acc_surat.tanggal";
        return $this->db->query($join)->row_array();
    }
    public function surat_sktm($id)
    {
        $join = "SELECT *, acc_surat.id_acc,surat_sktm.alasan,surat_sktm.tanggal_surat,masyarakat.status FROM masyarakat JOIN acc_surat ON masyarakat.nik = acc_surat.nik JOIN surat_sktm ON surat_sktm.nik = masyarakat.nik WHERE acc_surat.id_acc = $id and surat_sktm.tanggal_surat = acc_surat.tanggal";
        return $this->db->query($join)->row_array();
    }
    public function artikel()
    {

        $foto = $_FILES['foto']['name'];
        if ($foto) {
            $config['upload_path']          = './assets/img/artikel/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2048;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('upload_form', $error);
            } else {
                $data = [
                    'judul' => $this->input->post('judul'),
                    'isi' => $this->input->post('isi'),
                    'foto' => $this->upload->data('file_name')
                ];
                // $new_logo = $this->upload->data('file_name');
                $this->db->insert('artikel', $data);
            }
        }
    }
    public function getlurah()
    {
        return $this->db->get('struktur-organisasi')->row_array();
    }
    public function get_artikel()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('artikel')->result_array();
        // $query = $this->db->get('karyawan');
        // return $query->result();
    }
    // public function get_artikelById($id)
    // {

    //     return $this->db->get_where('artikel')->result_array();
    //     // $query = $this->db->get('karyawan');
    //     // return $query->result();
    // }
    public function delete_artikel($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('artikel');
    }
    public function struktur()
    {
        return $this->db->get('struktur-organisasi')->row_array();
    }
    public function insert_struktur()
    {
        $data = [
            'lurah' => $this->input->post('lurah'),
            'sekretaris' => $this->input->post('sekretaris'),
            'bendahara' => $this->input->post('bendahara'),
            'kasi_pelayanan' => $this->input->post('kasi_pelayanan'),
            'kasi_pemerintahan' => $this->input->post('kasi_pemerintahan'),
            'kasi_pemberdayaan' => $this->input->post('kasi_pemberdayaan'),
            'kaur_perencanaan' => $this->input->post('kaur_perencanaan'),
            'kaur_keuangan' => $this->input->post('kaur_keuangan'),
            'kaur_umum' => $this->input->post('kaur_umum'),
            'kadus1' => $this->input->post('kadus1'),
            'kadus2' => $this->input->post('kadus2'),
            'visi' => $this->input->post('visi'),
            'misi' => $this->input->post('misi')
        ];
        return $this->db->update('struktur-organisasi', $data);
    }

    public function perempuan()
    {
        return $this->db->get_where('masyarakat', ['jk' => 'Perempuan'])->num_rows();
    }
    public function laki()
    {
        return $this->db->get_where('masyarakat', ['jk' => 'Laki-laki'])->num_rows();
    }
    public function kampung()
    {
        return $this->db->get('kampung')->result_array();
    }
    public function visiMisi()
    {
        return $this->db->get_where('artikel', ['judul' => 'Visi Misi Desa Banjar'])->row_array();
    }
}
