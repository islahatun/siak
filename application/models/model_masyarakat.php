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
    public function delete_masyarakat($id)
    {
        $this->db->where('id', $id);
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
    public function getMasyarakatByNik()
    {
        $n = $this->db->get_where('login', ['nik' => $this->session->userdata('nik')])->row_array();
        $nik = $n['nik'];

        // $masyarakat = "SELECT * FROM masyarakat Where masyarakat.nik = '$nik'";
        return $this->db->get_where('masyarakat', ['nik' => $nik])->row_array();
    }
    public function ktp()
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'surat' => $this->input->post('surat')
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
            'surat' => $this->input->post('surat')
        ];
        $this->db->insert('surat_pindah', $data);
    }
    public function usaha()
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'surat' => $this->input->post('surat'),
            'jenis_usaha' => $this->input->post('jenis_usaha'),
            'tempat_usaha' => $this->input->post('tempat_usaha')
        ];
        $this->db->insert('surat_usaha', $data);
    }
    public function domisili()
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'surat' => $this->input->post('surat')
        ];
        $this->db->insert('surat_domisili', $data);
    }
    public function rame()
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'surat' => $this->input->post('surat'),
            'maksud' => $this->input->post('maksud'),
            'tanggal_pengajuan' => $this->input->post('tanggal_pengajuan'),
            'waktu' => $this->input->post('waktu'),
            'tempat' => $this->input->post('tempat')
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
}
