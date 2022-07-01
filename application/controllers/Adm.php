<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adm extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '1') {
            redirect('auth/logout');
        }
        $this->load->model('model_adm');
    }

    function index()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/head', $data);
        $this->load->view('pages/adm/index');
        $this->load->view('template/footer');
        // echo "TRX-" . date('Y') . time();
    }

    function data_konsultan()
    {
        $this->load->model('model_adm');
        $data['user'] = $this->model_adm->get_all_konsultan()->result();
        $this->load->view('template/head');
        $this->load->view('pages/adm/data_konsultan', $data);
        $this->load->view('template/footer');
    }

    function detail_konsultan($id)
    {
        $sql = "SELECT * FROM tb_konsultan WHERE id_konsultan = '$id'";
        $query = $this->db->query($sql);
        $parsing = $query->row_array();
        $data = array(

            'title'                     =>  'Detail Konsultan',
            'id_konsultan'              => $parsing['id_konsultan'],
            'nama_konsultan'            => $parsing['nama'],
            'email_konsultan'           => $parsing['email'],
            'no_hp'                     => $parsing['no_hp'],
            'fakultas'                  => $parsing['fakultas'],
            'alamat'                    => $parsing['alamat'],
            'keahlian'                  => $parsing['keahlian'],
            'nip'                       => $parsing['nip'],
            'deskripsi'                 => $parsing['deskripsi']
        );
        $this->load->view('template/head');
        $this->load->view('pages/adm/detail_konsultan', $data);
        $this->load->view('template/footer');
    }

    function edit_konsultan($id)
    {
        $sql = "SELECT * FROM tb_konsultan WHERE id_konsultan = '$id'";
        $query = $this->db->query($sql);
        $parsing = $query->row_array();
        $data = array(

            'title'                     =>  'Detail Konsultan',
            'id_konsultan'              => $parsing['id_konsultan'],
            'nama_konsultan'            => $parsing['nama'],
            'email_konsultan'           => $parsing['email'],
            'no_hp'                     => $parsing['no_hp'],
            'fakultas'                  => $parsing['fakultas'],
            'alamat'                    => $parsing['alamat'],
            'keahlian'                  => $parsing['keahlian'],
            'nip'                       => $parsing['nip'],
            'deskripsi'                 => $parsing['deskripsi']
        );
        $this->load->view('template/head');
        $this->load->view('pages/adm/edit_konsultan', $data);
        $this->load->view('template/footer');
    }

    function proses_edit()
    {
        $data = [
            'nama'              => $this->input->post('nama_konsultan'),
            'email'             => $this->input->post('email_konsultan'),
            'no_hp'             => $this->input->post('no_hp'),
            'fakultas'          => $this->input->post('fakultas'),
            'alamat'            => $this->input->post('alamat'),
            'keahlian'          => $this->input->post('keahlian'),
            'nip'               => $this->input->post('nip'),
            'deskripsi'         => $this->input->post('deskripsi')
        ];
        $id_konsultan = $this->input->post('id_konsultan', true);
        $this->db->where('id_konsultan', $id_konsultan);
        $this->db->update('tb_konsultan', $data);
        redirect('adm/data_konsultan');
    }

    function hapus_konsultan($id)
    {
        $this->model_adm->hapus_konsultan($id);
        redirect('adm/data_konsultan');
    }

    function data_konsultasi($id)
    {
        $data['user'] = $this->model_adm->data_konsultasi($id);
        $this->load->view('template/head');
        $this->load->view('pages/adm/data_konsultasi', $data);
        $this->load->view('template/footer');
    }

    function data_klient()
    {
        $this->load->model('model_adm');
        $data['user'] = $this->model_adm->get_all_klient()->result();
        $this->load->view('template/head');
        $this->load->view('pages/adm/data_klient', $data);
        $this->load->view('template/footer');
    }

    function edit_klient($id)
    {
        $sql = "SELECT * FROM tb_klient WHERE id_klient = '$id'";
        $query = $this->db->query($sql);
        $parsing = $query->row_array();
        $data = array(

            'title'                     =>  'Edit Klient',
            'id_klient'                 => $parsing['id_klient'],
            'nama_klient'               => $parsing['nama'],
            'email_klient'              => $parsing['email'],
            'no_hp'                     => $parsing['no_hp'],
            'jenis_kelamin'             => $parsing['jenis_kelamin'],
            'alamat'                    => $parsing['alamat'],
            'nik'                       => $parsing['nik'],

        );
        $this->load->view('template/head');
        $this->load->view('pages/adm/edit_klient', $data);
        $this->load->view('template/footer');
    }

    function proses_edit_klient()
    {
        $data = [
            'nama'              => $this->input->post('nama_klient'),
            'email'             => $this->input->post('email_klient'),
            'jenis_kelamin'     => $this->input->post('jenis_kelamin'),
            'no_hp'             => $this->input->post('no_hp'),
            'alamat'            => $this->input->post('alamat'),
            'nik'               => $this->input->post('nik')

        ];
        $id_klient = $this->input->post('id_klient', true);
        $this->db->where('id_klient', $id_klient);
        $this->db->update('tb_klient', $data);
        redirect('adm/data_klient');
    }

    function hapus_klient($id)
    {
        $this->model_adm->hapus_klient($id);
        redirect('adm/data_klient');
    }

    function riwayat_klient($id)
    {
        $this->load->model('model_adm');
        $data['user'] = $this->model_adm->riwayat_transaksi($id);
        $this->load->view('template/head');
        $this->load->view('pages/adm/riwayat_klient', $data);
        $this->load->view('template/footer');
    }

    function jadwal_klient($id)
    {
        $this->load->model('model_adm');
        $data['user'] = $this->model_adm->jadwal_klient($id);
        $this->load->view('template/head');
        $this->load->view('pages/adm/jadwal_klient', $data);
        $this->load->view('template/footer');
    }
}
