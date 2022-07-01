<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsultan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		//$this->load->library('formatRupiah');
		$this->load->model('model_konsultan');
		$this->load->model('model_transaksi');
		if ($this->session->userdata('role_id') != '3') {
			redirect('auth/logout');
		}
	}

	function index()
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$id = $this->session->userdata('id_user');
		$query = $this->db->query("SELECT * FROM tb_konsultan WHERE id_user='$id'");
		$x = $query->row();
		$info = [
			'id'            => $x->id_konsultan
		];
		$this->load->view('template/head', $data);
		$this->load->view('pages/konsultan/index', $info);
		$this->load->view('template/footer');
	}

	function detail_login()
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('template/head', $data);
		$this->load->view('pages/konsultan/detail');
		$this->load->view('template/footer');
	}

	function data_diri()
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$id = $this->session->userdata('id_user');
		$query = $this->db->query("SELECT * FROM tb_konsultan WHERE id_user='$id'");
		$x = $query->row();
		$info = [
			'id' => $x->id_konsultan,
			'nama' => $x->nama,
			'email' => $x->email,
			'jk' => $x->jenis_kelamin,
			'no_hp' => $x->no_hp,
			'fakultas' => $x->fakultas,
			'alamat' => $x->alamat,
			'keahlian' => $x->keahlian,
			'nip' => $x->nip,
			'harga' => $x->harga

		];
		$this->load->view('template/head', $data);
		$this->load->view('pages/konsultan/data_diri', $info);
		$this->load->view('template/footer');
	}

	function daftar()
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('template/head', $data);
		$this->load->view('pages/konsultan/daftar');
		$this->load->view('template/footer');
	}

	public function prosesdaftar()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$id_konsultan = 'KS' . time();
		if ($this->form_validation->run() == false) {
			echo 'gagal';
		} else {
			$data = [
				'id_konsultan' => $id_konsultan,
				'id_user' => $this->input->post('id_user'),
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'no_hp' => $this->input->post('no_hp'),
				'fakultas' => $this->input->post('fakultas'),
				'alamat' => $this->input->post('alamat'),
				'keahlian' => $this->input->post('keahlian'),
				'nip' => $this->input->post('nip'),
				'harga' => $this->input->post('harga')
			];
			$this->db->insert('tb_konsultan', $data);
			redirect('konsultan/index');
		}
	}

	function edit_profil()
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$id = $this->session->userdata('id_user');
		$query = $this->db->query("SELECT * FROM tb_konsultan WHERE id_user='$id'");
		$x = $query->row();
		$info = [
			'id' => $x->id_konsultan,
			'nama' => $x->nama,
			'email' => $x->email,
			'jk' => $x->jenis_kelamin,
			'no_hp' => $x->no_hp,
			'fakultas' => $x->fakultas,
			'alamat' => $x->alamat,
			'keahlian' => $x->keahlian,
			'nip' => $x->nip,
			'harga' => $x->harga

		];
		$this->load->view('template/head', $data);
		$this->load->view('pages/konsultan/edit_data', $info);
		$this->load->view('template/footer');
	}

	function proses_edit()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		if ($this->form_validation->run() == false) {
			echo 'gagal';
		} else {
			$data = [
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'no_hp' => $this->input->post('no_hp'),
				'fakultas' => $this->input->post('fakultas'),
				'alamat' => $this->input->post('alamat'),
				'keahlian' => $this->input->post('keahlian'),
				'nip' => $this->input->post('nip'),
				'deskripsi' => $this->input->post('desk'),
				'harga' => $this->input->post('harga')
			];

			$upload_image = count($_FILES['file']['name']);
			if ($upload_image) {
				$config['allowed_types'] = 'jpg|png';
				$config['upload_max_filesize']      = '20000M';
				$config['post_max_size']      = '20000M';
				$config['upload_path']   = './assets/dist/sertifikasi_konsultan/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('file')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('sertifikasi', $new_image);
				} else {
					echo $this->upload->display_errors();
				}


				$email = $this->input->post('email');
				$this->db->where('email', $email);
				$this->db->update('tb_konsultan', $data);
				redirect('konsultan/data_diri');
			}
		}
	}

	function j_konsul()
	{

		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->model('model_konsultan');
		$info['user'] = $this->model_konsultan->data_transaksi()->result();
		$this->load->view('template/head', $data);
		$this->load->view('pages/konsultan/j_konsul', $info);
		$this->load->view('template/footer');
	}

	function edit_transaksi($kode_transaksi)
	{
		$sql = "SELECT * FROM tb_transaksi WHERE kode_transaksi = '$kode_transaksi'";
		$query = $this->db->query($sql);
		$parsing = $query->row_array();
		$data = array(

			'title'         			=>  'Edit Jadwal',
			'kode_transaksi'          	=> $parsing['kode_transaksi'],
			'nama_klient'   			=> $parsing['nama_klient'],
			'tema_pertemuan'            => $parsing['tema_pertemuan'],
			'tgl_konsul'   				=> $parsing['tgl_konsul'],
			'desk_konsultasi'           => $parsing['desk_konsultasi'],
			'harga'			            => $parsing['harga'],
			'frekuensi_pertemuan'     	=> $parsing['frekuensi_pertemuan'],
			'keterangan'          		=> $parsing['keterangan'],
			'approval'   				=> $parsing['approval']
		);

		$this->load->view('template/head');
		$this->load->view('pages/konsultan/e_konsul', $data);
		$this->load->view('template/footer');
	}

	function proses_edit_transaksi()
	{

		$data = [
			'kode_transaksi' 		=> $this->input->post('kd_transaksi', true),
			'nama_klient' 			=> $this->input->post('nama_klient'),
			'tema_pertemuan' 		=> $this->input->post('tema'),
			'tgl_konsul' 			=> $this->input->post('tgl_konsul'),
			'desk_konsultasi' 		=> $this->input->post('desk'),
			'harga' 				=> $this->input->post('harga'),
			'approval' 				=> $this->input->post('approval'),
			'keterangan' 			=> $this->input->post('ket'),
			'frekuensi_pertemuan'   => $this->input->post('frekuensi')
		];
		$kode_transaksi = $this->input->post('kd_transaksi', true);
		$this->db->where('kode_transaksi', $kode_transaksi);
		$this->db->update('tb_transaksi', $data);
		redirect('konsultan/j_konsul');
	}

	function detail_transaksi($id)
	{
		$sql = "SELECT * FROM tb_transaksi WHERE kode_transaksi = '$id'";
		$query = $this->db->query($sql);
		$parsing = $query->row_array();
		$data = array(

			'title'         			=>  'Edit Jadwal',
			'kode_transaksi'          	=> $parsing['kode_transaksi'],
			'nama_klient'   			=> $parsing['nama_klient'],
			'tema_pertemuan'            => $parsing['tema_pertemuan'],
			'tgl_konsul'   				=> $parsing['tgl_konsul'],
			'desk_konsultasi'           => $parsing['desk_konsultasi'],
			'frekuensi_pertemuan'     	=> $parsing['frekuensi_pertemuan'],
			'keterangan'          		=> $parsing['keterangan'],
			'approval'   				=> $parsing['approval']
		);

		$this->load->view('template/head');
		$this->load->view('pages/konsultan/d_konsul', $data);
		$this->load->view('template/footer');
	}

	function buatRupiah($angka)
	{
		$hasil = "Rp " . number_format($angka, 2, ',', '.');
		return $hasil;
	}
}
