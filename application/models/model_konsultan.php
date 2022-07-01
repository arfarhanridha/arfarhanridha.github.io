<?php

class model_konsultan extends CI_Model
{
    public function tambah()
    {
        $data = [
            'id_konsultan' => "KS-" . rand(),
            'id_user' => $this->input->post('id_user'),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'jenis_kelamin' => $this->select->post('jenis_kelamin'),
            'no_hp' => $this->input->post('no_hp'),
            'fakultas' => $this->select->post('fakultas'),
            'alamat' => $this->input->post('alamat'),
            'keahlian' => $this->input->post('keahlian'),
            'foto_profile' => '',
            'nip' => $this->input->post('nip'),
            'harga' => $this->input->post('harga')
        ];
        $this->db->insert('tb_konsultan', $data);
    }

    // public function getAllUsers()
    // {
    //     return $this->db->get('tb_konsultan')->result_array();
    // }

    function getprofil_konsultan()
    {
        $this->db->select('*');
        $this->db->from('tb_konsultan');
        $this->db->join('tb_user', 'tb_user.id_user = tb_konsultan.id_user');
        $query = $this->db->get();
        return $query->result_array();
    }

    function getid_konsultan($id)
    {
        $this->db->where('id_konsultan', $id);
        return $this->db->get('tb_konsultan')->row();
    }
    function data_transaksi()
    {
        $id = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('tb_transaksi');
        $this->db->join('tb_konsultan', 'tb_konsultan.id_konsultan = tb_transaksi.id_konsultan');
        $this->db->where('id_user', $id);
        $query = $this->db->get();
        return $query;
    }

    function upload_sertifikasi($data = array())
    {
        return $this->db->insert_batch('tb_konsultan', $data);
    }
}
