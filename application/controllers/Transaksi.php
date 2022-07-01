<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }


    function insert_transaksi()
    {
        $this->form_validation->set_rules('nama_klient', 'Nama Klient', 'required|trim');
        $kode_transaksi = 'TRX-' . time();
        $tanggal_konsul = $_POST['tgl_konsul'];
        if ($this->form_validation->run() == false) {
            echo "gagal";
        } else {
            $data =  [
                'kode_transaksi'        =>   $kode_transaksi,
                'nama_klient'           =>   $this->input->post('nama_klient'),
                'id_klient'             =>   $this->input->post('id_klient'),
                'id_konsultan'          =>   $this->input->post('id_konsultan'),
                'tema_pertemuan'        =>   $this->input->post('tema'),
                'tgl_konsul'            =>   $tanggal_konsul,
                'desk_konsultasi'       =>   $this->input->post('desk'),
                'harga'                 =>   $this->input->post('harga'),
                'approval'              =>   '1. Menunggu',
                'nohp_konsultan'        =>   $this->input->post('nohp_konsultan'),
                'keterangan'            =>   '',
                'frekuensi_pertemuan'   =>   $this->input->post('frekuensi'),
                'status'                =>   ''
            ];
            $this->db->insert('tb_transaksi', $data);
            redirect('halaman_klient');
        }
    }

    function edit_transaksi()
    {
        # code...
    }

    function detail_transaksi()
    {
        # code...
    }
}
