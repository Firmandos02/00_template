<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mauth');
        // Periksa jika terdapat kesalahan koneksi
        if (!$this->db->conn_id) {
            // Jika tidak terhubung ke database, alihkan ke halaman 404
            redirect('Error/e404');
        }
    }

    public function index()
    {
		$role 				= $this->session->userdata('role');
		if ($role == null || $role == '') {
			$this->load->view('auth/login');
		} elseif ($role == 1 || $role == 2) {
			$this->session->set_flashdata('success', 'Anda Sudah login!');
			redirect('Chome/teknisi');
		} elseif ($role == 3 || $role == 4) {
			$this->session->set_flashdata('success', 'Anda Sudah login!');
			redirect('Chome/fr_spv');
		} else {
			$this->load->view('auth/login');
		}
       
    }

    public function login()
    {
        // Load library User Agent
        $this->load->library('user_agent');
        // identifikasi 
        $user = $this->input->post('username');
        $pass = $this->input->post('password');

        // cari npk
        $users = $this->db->get_where('users', ['username' => $user])->row_array();

        if ($users) {
            if ($users['active'] == 1) {
                if (md5($pass) == $users['password']) {

                    $id             = $users['id']; // Gantilah sesuai dengan implementasi Anda
                    $device         = $this->getDeviceType(); // Buat fungsi getDeviceType() untuk mendapatkan jenis perangkat
                    $browser        = $this->getBrowser(); // Buat fungsi getBrowser() untuk mendapatkan jenis browser
                    $login_time     = date('Y-m-d H:i:s');

                    // Simpan data ke dalam database atau log
                    $up_user = array(
                        'last_device'          => $device,
                        'last_browser'         => $browser,
                        'last_login'           => $login_time

                    );

                    $this->db->where('id', $id);
                    $this->db->update('users', $up_user);

                    $data = [
                        'id'            => $users['id'],
                        'username'      => $users['username'],
                        'password'      => $users['password'],
                        'dispname'      => $users['dispname'],
                        'role'          => $users['role'],
                        // 'plant'         => $users['plant'],
                    ];

                    //  Set session
                    $this->session->set_userdata($data);
                    //  KIRIM ALERT
                    $this->session->set_flashdata('success', 'Anda berhasil login!');

                    // validasi role 
                    if ($users['role'] == 1) {
                        redirect('Chome/teknisi');
                    } elseif ($users['role'] == 2) {
                        redirect('Auth/dash_temp');
                    } elseif ($users['role'] == 3) {
						redirect('Chome/fr_spv');
					} elseif ($users['role'] == 4) {
						redirect('Chome/fr_spv');
					} elseif ($users['role'] == 5) {
						redirect('Chome/fr_spv');
					} elseif ($users['role'] == 9) {
                        redirect('Auth/dash_temp');
                    } else {
						redirect('Error');
                    }
                }
                // password salah 
                else {
                    $this->session->set_flashdata('error', 'Password Wrong!');
                    redirect('Auth');
                }
            }
            // akun tidak aktif
            else {
                $this->session->set_flashdata('error', 'Your account is inactive!');
                redirect('Auth');
            }
        }
        // npk salah
        else {
            $this->session->set_flashdata('error', 'NPK is not listed!');
            redirect('Auth');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Auth');
    }

    public function getDeviceType()
    {
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        if (strpos($user_agent, 'Mobile') !== false) {
            return 'Mobile Device';
        } else {
            return 'Desktop Device';
        }
    }

    public function getBrowser()
    {
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        if (strpos($user_agent, 'Chrome') !== false) {
            return 'Google Chrome';
        } elseif (strpos($user_agent, 'Firefox') !== false) {
            return 'Mozilla Firefox';
        } elseif (strpos($user_agent, 'Safari') !== false) {
            return 'Apple Safari';
        } else {
            return 'Other';
        }
    }

    public function dash_temp()
    {
        $data = [
            // --- Content diganti ----
            'titleapp'         => 'Dashboard Temporary',
            'titlepage'        => 'DASHBOARD',
            'content'          => 'main_content',
            'extend_js'        => '',
            'extend_css'       => '',
        ];
        $this->load->view('layouts/wrapper', $data);
    }

    public function r3gist()
    {
        // cek administrator atau tidak
        if ($this->session->userdata('role') == 9) {

            // ambil data role
            $role  =  $this->Mauth->getRole();
        
            // ============
            $data = [
                // ---------- Content diganti -------------
                'titleapp'         => 'Register ',
                'titlepage'        => 'Register | 2W',
                'content'          => 'auth/register',
                'extend_js'        => 'layouts/j_page/a_reg',
                'extend_css'       => '',
                // ---- Data yang dikirim ke halaman ------
                'role'             => $role,

            ];

            // -------------- HALAMAN ---------------------
            $this->load->view('layouts/wrapper', $data);


        } else {
            $this->session->set_flashdata('error', 'Dont have acccess!');
            redirect('login');
        }
    }

    public function valid_r3gist()
    {
        // validasi administrator
        if ($this->session->userdata('role') == 9) {

            $this->form_validation->set_rules('username', 'username', 'required|trim|is_unique[users.username]', ['is_unique' => 'NPK Sudah ada!']);
            $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[2]|matches[password2]', ['matches' => 'Password dont match!', 'min_length' => 'Password too short']);
            $this->form_validation->set_rules('password2', 'Password', 'required|matches[password]');

            if ($this->form_validation->run() == false) {
                $this->session->set_flashdata('error', 'NPK is already available!');
                redirect('auth/r3gist');
            } else {
                $inputkedb = [
                    'username'       => htmlspecialchars($this->input->post('username', 'true')),
                    'password'       => md5($this->input->post('password')),
                    'role'           => htmlspecialchars($this->input->post('role', 'true')),
                    'active'         => 1,
                    'dispname'       => htmlspecialchars($this->input->post('dispname', 'true')),
                    'created_by'     => htmlspecialchars($this->input->post('created_by', 'true')),

                ];
                // simpan ke database
                $this->db->insert('users', $inputkedb);
                $this->session->set_flashdata('success', 'Add successfully.');

                // dialihkan ke halaman
                redirect('Auth/user');
            }
        } else {
            $this->session->set_flashdata('error', 'Dont have acccess!');
            redirect('login');
        }
    }

    public function user()
    {
        // validasi administrator
        if ($this->session->userdata('role') == 9) {

            $data_user = $this->Mauth->getUser();

            $data = [
                // ---------- Content diganti -------------
                'titleapp'         => 'List User',
                'titlepage'        => 'List User | Administrator',
                'content'          => 'auth/list_user',
                'extend_js'        => 'layouts/ext/datatable',
                'extend_css'       => '',
                // ---- Data yang dikirim ke halaman ------
                'user'             =>   $data_user,
            ];
            // -------------- HALAMAN ---------------------
            $this->load->view('layouts/wrapper', $data);
        } else {
            $this->session->set_flashdata('error', 'Dont have acccess!');
            redirect('login');
        }
    }
}
