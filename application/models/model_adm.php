<?php

class model_adm extends CI_Model
{

    function get_all_konsultan()
    {
        $this->db->select('*');
        $this->db->from('tb_konsultan');
        $this->db->order_by('id_konsultan', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    function hapus_konsultan($id)
    {
        $this->db->delete('tb_konsultan', ['id_konsultan' => $id]);
    }

    function get_all_klient()
    {
        $this->db->select('*');
        $this->db->from('tb_klient');
        $this->db->order_by('id_klient', 'DESC');
        $query = $this->db->get();
        return $query;
    }
    function hapus_klient($id)
    {
        $this->db->delete('tb_klient', ['id_klient' => $id]);
    }

    function riwayat_transaksi($id)
    {
        $app = '5. Selesai';
        $this->db->select('*');
        $this->db->from('tb_transaksi');
        $this->db->where('id_klient', $id);
        $this->db->where('approval', $app);
        $query = $this->db->get();
        return $query->result();
    }

    function jadwal_klient($id)
    {
        $this->db->select('*');
        $this->db->from('tb_transaksi');
        $this->db->where('id_klient', $id);
        $this->db->group_start();
        $this->db->or_where('approval', '1. Menunggu');
        $this->db->or_where('approval', '2. Diterima');
        $this->db->or_where('approval', '3. Jadwal Ulang');
        $this->db->or_where('approval', '4. Batal');
        $this->db->group_end();
        $query = $this->db->get();
        return $query->result();
    }

    function data_konsultasi($id)
    {
        $this->db->select('*');
        $this->db->from('tb_transaksi');
        $this->db->where('id_konsultan', $id);
        $this->db->order_by('approval', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    function laporan_konsultan()
    {
        $this->db->select('*');
        $this->db->from('tb_transaksi');
        $this->db->where('');
    }
}
