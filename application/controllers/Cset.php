<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cset extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mset');

        if ($this->session->userdata('role') != 9) {
            $this->session->set_flashdata('error', 'Login Required!');
            redirect('Auth/login');
        }
        // Periksa jika terdapat kesalahan koneksi
        if (!$this->db->conn_id) {
            // Jika tidak terhubung ke database, alihkan ke halaman 404
            redirect('Error/e404');
        }
    }

    public function index()
    {
    }

   
    
}
