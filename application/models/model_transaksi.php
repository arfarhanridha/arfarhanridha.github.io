<?php

class model_transaksi extends CI_Model
{

    function get_transaksi()
    {
        $this->db->select('*');
        $this->db->from('tb_transaksi');
        $this->db->order_by('kode_transaksi', 'DESC');
        return $this->db->get();
    }

    function getid_transaksi($id)
    {
        $this->db->where('kode_transaksi', $id);
        return $this->db->get('tb_transaksi')->row();
    }
}
