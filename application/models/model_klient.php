<?php

class model_klient extends CI_Model
{
    // public function getAllUsers()
    // {
    //     return $this->db->get('tb_konsultan')->result_array();
    // }

    function getid_klient($id)
    {
        $this->db->where('id_konsultan', $id);
        return $this->db->get('tb_klient')->row();
    }

    // function insert_transaksi($data)
    // {
    //     $this->db->insert('tb_transaksi', $data);
    //     return true;
    // }

    function data_transaksi()
    {
        $id = $this->session->userdata('id_user');
        // $app =
        // '1. Menunggu';
        // '2. Diterima';
        // '3. Jadwal Ulang';
        // '4. Batal';

        $this->db->select('*');
        $this->db->from('tb_transaksi');
        $this->db->join('tb_klient', 'tb_klient.id_klient = tb_transaksi.id_klient');
        $this->db->where('id_user', $id);
        $this->db->group_start();
        $this->db->or_where('approval', '1. Menunggu');
        $this->db->or_where('approval', '2. Diterima');
        $this->db->or_where('approval', '3. Jadwal Ulang');
        $this->db->or_where('approval', '4. Batal');
        $this->db->group_end();
        $query = $this->db->get();
        return $query;
    }

    function transaksi_diterima()
    {
        $id = $this->session->userdata('id_user');
        $app = '2. Diterima';
        $this->db->select('*');
        $this->db->from('tb_transaksi');
        $this->db->join('tb_klient', 'tb_klient.id_klient = tb_transaksi.id_klient');
        $this->db->where('id_user', $id);
        $this->db->where('approval', $app);
        $query = $this->db->get();
        return $query;
    }

    function transaksi_riwayat()
    {
        $id = $this->session->userdata('id_user');
        $app = '5. Selesai';
        $this->db->select('*');
        $this->db->from('tb_transaksi');
        $this->db->join('tb_klient', 'tb_klient.id_klient = tb_transaksi.id_klient');
        $this->db->where('id_user', $id);
        $this->db->where('approval', $app);
        $query = $this->db->get();
        return $query;
    }

    function id_klient_cek()
    {
        $this->db->select('*');
        $this->db->from('tb_klient');
        $this->db->join('tb_user', 'tb_user.id_user = tb_klient.id_user');
        $query = $this->db->get();
        return $query->result();
    }
}
