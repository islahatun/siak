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
}
