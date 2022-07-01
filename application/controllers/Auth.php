<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    function edit_foto_profil()
    {
        $upload_image = $_FILES['foto']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'jpg|png';
            $config['max_size']      = '3072';
            $config['upload_path']   = './assets/dist/image_user/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('foto_profile', $new_image);
            } else {
                echo $this->upload->dispay_errors();
            }
            $email = $this->input->post('email');
            $this->db->where('email', $email);
            $this->db->update('tb_user');
            redirect('login');
        }
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('pages/logres/login');
        } else {
            //validasi sukses
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

        //jika usernya ada
        if ($user) {
            //jika user aktif
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],
                        'id_user' => $user['id_user'],
                        'nama' => $user['nama'],
                        'foto_profile' => $user['foto_profile'],
                        'date' => $user['date_created']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 3) {
                        redirect('halaman_konsultan');
                    }
                    if ($user['role_id'] == 1) {
                        redirect('halaman_adm');
                    }
                    if ($user['role_id'] == 2) {
                        redirect('halaman_klient');
                    } else {
                        redirect('daftar');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Wrong password</div>');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> This email has not activated</div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="callout callout-danger">
            <h4>Email is no registered</h4>
            </div>');
            redirect('login');
        }
    }

    public function regis()
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_user.email]', [
            'is_unique' => 'This email already registered'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('pages/logres/regis');
        } else {
            //validasi sukses
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'foto_profile' => 'avatar5.png',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 0,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('tb_user', $data);
            $this->session->set_flashdata('message', '<div class="callout callout-success">
            <h4>Your account has been created</h4>
            </div>');
            redirect('login');
        }
    }


    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('message', '<div class="callout callout-success">
        <h4>Your have been logged out!</h4>
        </div>');
        redirect('login');
    }

    public function daftar()
    {
        if ($this->session->userdata('role_id') != '0') {
            redirect('auth/logout');
        }
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('pages/logres/daftar', $data);
    }

    public function edit_role_klient()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $role = 2;
        $email = $this->input->post('email');
        $this->db->where('email', $email);
        $this->db->set('role_id', $role);
        $this->db->update('tb_user');
    }

    public function edit_role_konsultan()
    {
        $role = 3;
        $email = $this->input->post('email');
        $this->db->where('email', $email);
        $this->db->set('role_id', $role);
        $this->db->update('tb_user');
    }

    public function daftar_proses_klient()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('nik', 'NIK', 'required|min_length[16]|trim|is_unique[tb_klient.nik]', ['is_unique' => 'NIK sudah digunakan']);
        $id_klient = 'KL' . time();
        if ($this->form_validation->run() == false) {
            echo 'gagal';
        } else {
            $this->edit_role_klient();
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
            redirect('login');
        }
    }

    public function daftar_proses_konsultan()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $id_konsultan = 'KS' . time();
        if ($this->form_validation->run() == false) {
            echo 'gagal';
        } else {
            $this->edit_role_konsultan();
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
            redirect('login');
        }
    }
}
