<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Klient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_klient');
        $this->load->library('form_validation');
        if ($this->session->userdata('role_id') != '2') {
            redirect('auth/logout');
        }
    }

    function index()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->session->userdata('id_user');
        $query = $this->db->query("SELECT * FROM tb_klient WHERE id_user='$id'");
        $x = $query->row();
        $data2 = [
            'id'            => $x->id_klient
        ];
        $this->load->view('template/head', $data);
        $this->load->view('pages/klient/index', $data2);
        $this->load->view('template/footer');
    }

    function daftar()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/head', $data);
        $this->load->view('pages/klient/daftar');
        $this->load->view('template/footer');
    }

    function daftar_proses()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim|is_unique[tb_klient.nik]', ['is_unique' => 'NIK sudah digunakan']);
        $id_klient = 'KL' . time();
        if ($this->form_validation->run() == false) {
            echo 'gagal';
        } else {
            $data = [
                'id_klient' => $id_klient,
                'id_user' => $this->input->post('id_user'),
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'no_hp' => $this->input->post('no_hp'),
                'alamat' => $this->input->post('alamat'),
                'nik' => $this->input->post('nik')
            ];
            $this->db->insert('tb_klient', $data);
            redirect('klient/index');
        }
    }

    function edit_data()
    {
        $id = $this->session->userdata('id_user');
        $query = $this->db->query("SELECT * FROM tb_klient WHERE id_user='$id'");
        $x = $query->row();
        $data = [
            'id'            => $x->id_klient,
            'nama'          => $x->nama,
            'email'         => $x->email,
            'jenis_kelamin' => $x->jenis_kelamin,
            'no_hp'         => $x->no_hp,
            'alamat'        => $x->alamat,
            'nik'           => $x->nik
        ];
        $this->load->view('template/head');
        $this->load->view('pages/klient/edit_data', $data);
        $this->load->view('template/footer');
    }

    function edit_proses()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        if ($this->form_validation->run() == false) {
            echo 'gagal';
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'no_hp' => $this->input->post('no_hp'),
                'alamat' => $this->input->post('alamat'),
                'nik' => $this->input->post('nik')
            ];
            $email = $this->input->post('email');
            $this->db->where('email', $email);
            $this->db->update('tb_klient', $data);
            redirect('klient/data_diri');
        }
    }

    function data_diri()
    {
        $id = $this->session->userdata('id_user');
        $query = $this->db->query("SELECT * FROM tb_klient WHERE id_user='$id'");
        $x = $query->row();
        $data = [
            'id'            => $x->id_klient,
            'nama'          => $x->nama,
            'email'         => $x->email,
            'jenis_kelamin' => $x->jenis_kelamin,
            'no_hp'         => $x->no_hp,
            'alamat'        => $x->alamat,
            'nik'           => $x->nik
        ];
        $this->load->view('template/head');
        $this->load->view('pages/klient/data_diri', $data);
        $this->load->view('template/footer');
    }

    function detail_login_klient()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/head', $data);
        $this->load->view('pages/klient/detail');
        $this->load->view('template/footer');
    }

    function data_konsultan()
    {
        $this->load->model('model_konsultan');
        $data['user'] = $this->model_konsultan->getprofil_konsultan();
        $this->load->view('template/head');
        $this->load->view('pages/klient/data_konsultan', $data);
        $this->load->view('template/footer');
    }

    function detail_data_konsultan($id)
    {
        $this->load->model('model_konsultan');
        $x = $this->model_konsultan->getid_konsultan($id);
        $id = $this->session->userdata('id_user');
        $query = $this->db->query("SELECT * FROM tb_klient WHERE id_user='$id'");
        $y = $query->row();
        $data = [
            'id_konsultan' => $x->id_konsultan,
            'id_klient' => $y->id_klient,
            'nama' => $x->nama,
            'email' => $x->email,
            'jenis_kelamin' => $x->jenis_kelamin,
            'no_hp' => $x->no_hp,
            'fakultas' => $x->fakultas,
            'keahlian' => $x->keahlian,
            'nip' => $x->nip,
            'deskripsi' => $x->deskripsi,
            'harga' => $x->harga,
            'sertifikasi' => $x->sertifikasi
        ];
        $this->load->view('template/head');
        $this->load->view('pages/klient/detail_data_konsultan', $data);
        $this->load->view('template/footer');
    }

    function j_klient()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('model_konsultan');
        $info['user'] = $this->model_klient->data_transaksi()->result();
        $this->load->view('template/head', $data);
        $this->load->view('pages/klient/j_klient', $info);
        $this->load->view('template/footer');
    }

    function cari_jadwal_klient()
    {
    }

    function jadwal()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $info['user'] = $this->model_klient->transaksi_diterima()->result();
        $this->load->view('template/head', $data);
        $this->load->view('pages/klient/j_klient_ok', $info);
        $this->load->view('template/footer');
    }

    function cetakInvoice($id)
    {
        $sql = "SELECT * FROM tb_transaksi WHERE kode_transaksi = '$id'";
        $query = $this->db->query($sql);
        $parsing = $query->row_array();
        $data = array(

            'title'                         =>  'Edit Jadwal',
            'kode_transaksi'                => $parsing['kode_transaksi'],
            'nama_klient'                   => $parsing['nama_klient'],
            'id_klient'                     => $parsing['id_klient'],
            'id_konsultan'                  => $parsing['id_konsultan'],
            'tema_pertemuan'                => $parsing['tema_pertemuan'],
            'tgl_konsul'                    => $parsing['tgl_konsul'],
            'desk_konsultasi'               => $parsing['desk_konsultasi'],
            'frekuensi_pertemuan'           => $parsing['frekuensi_pertemuan'],
            'keterangan'                    => $parsing['keterangan'],
            'approval'                      => $parsing['approval'],
            'nohp_konsultan'                => $parsing['nohp_konsultan']
        );
        $this->load->view('pages/klient/invoice_print', $data);
    }

    function riwayat()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $info['user'] = $this->model_klient->transaksi_riwayat()->result();
        $this->load->view('template/head', $data);
        $this->load->view('pages/klient/riwayat', $info);
        $this->load->view('template/footer');
    }

    function e_konsul($kode_transaksi)
    {
        $sql = "SELECT * FROM tb_transaksi WHERE kode_transaksi = '$kode_transaksi'";
        $query = $this->db->query($sql);
        $parsing = $query->row_array();
        $data = array(

            'title'                     =>  'Edit Jadwal',
            'kode_transaksi'              => $parsing['kode_transaksi'],
            'nama_klient'               => $parsing['nama_klient'],
            'tema_pertemuan'            => $parsing['tema_pertemuan'],
            'tgl_konsul'                   => $parsing['tgl_konsul'],
            'desk_konsultasi'           => $parsing['desk_konsultasi'],
            'harga'                        => $parsing['harga'],
            'frekuensi_pertemuan'         => $parsing['frekuensi_pertemuan'],
            'keterangan'                  => $parsing['keterangan'],
            'approval'                   => $parsing['approval']
        );

        $this->load->view('template/head');
        $this->load->view('pages/klient/e_konsul', $data);
        $this->load->view('template/footer');
    }

    function proses_e_konsul()
    {

        $data = [
            'kode_transaksi'         => $this->input->post('kd_transaksi', true),
            'nama_klient'            => $this->input->post('nama_klient'),
            'tema_pertemuan'         => $this->input->post('tema'),
            'tgl_konsul'             => $this->input->post('tgl_konsul'),
            'desk_konsultasi'        => $this->input->post('desk'),
            'frekuensi_pertemuan'    => $this->input->post('frekuensi')
        ];
        $kode_transaksi = $this->input->post('kd_transaksi', true);
        $this->db->where('kode_transaksi', $kode_transaksi);
        $this->db->update('tb_transaksi', $data);
        redirect('klient/j_klient');
    }

    function d_konsul($id)
    {
        $sql = "SELECT * FROM tb_transaksi WHERE kode_transaksi = '$id'";
        $query = $this->db->query($sql);
        $parsing = $query->row_array();
        $data = array(

            'title'                     =>  'Edit Jadwal',
            'kode_transaksi'              => $parsing['kode_transaksi'],
            'nama_klient'               => $parsing['nama_klient'],
            'tema_pertemuan'            => $parsing['tema_pertemuan'],
            'tgl_konsul'                   => $parsing['tgl_konsul'],
            'desk_konsultasi'           => $parsing['desk_konsultasi'],
            'frekuensi_pertemuan'         => $parsing['frekuensi_pertemuan'],
        );

        $this->load->view('template/head');
        $this->load->view('pages/klient/d_konsul', $data);
        $this->load->view('template/footer');
    }
}
