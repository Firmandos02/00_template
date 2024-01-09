<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_test extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Maio');
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('upload', 'database');
	}

	public function index()
	{
		$this->load->view('test/test');
	}

	public function test1()
	{
		$data = [
			// ---------- Content diganti -------------
			'titleapp'         => 'Dashboard Temporary',
			'titlepage'        => 'DASHBOARD',
			'content'          => 'test/test1',
			'extend_js'        => '',
			'extend_css'       => '',
			// ---- Data yang dikirim ke halaman ------
		];
		// -------------- HALAMAN ---------------------
		$this->load->view('layouts/wrapper', $data);
	}
	public function test2($id_head)
	{
		$id_transct					= $id_head;

		$data_raw					= $this->Mvisco->data_approval_area($id_transct);

		if (empty($data_raw)) {
			$this->session->set_flashdata('error', 'ID Transaksi ' . $id_transct	. ' Belum ada data input viscositas!');
			redirect('Cvisco/data_a/all_area');
		}

		// Inisialisasi array untuk menyimpan data yang memiliki id_area_paint ganjil dan genap
		$data_ganjil_spray 			= array();
		$data_genap_spray 			= array();

		// Loop melalui hasil query
		foreach ($data_raw as $row) {
			$id_area_paint 			= $row['id_area_paint'];
			// Memasukkan data ke dalam array berdasarkan id_area_paint (ganjil atau genap)
			if ($id_area_paint % 2 == 0) {
				$data_genap_spray[] = $row;
			} else {
				$data_ganjil_spray[] = $row;
			}
		}

		// Inisialisasi variabel untuk menyimpan data genap dan ganjil
		$d_head_genap = null;
		$d_head_ganjil = null;


		// Loop melalui hasil query
		foreach ($data_raw as $row) {
			$id_area_paint = $row['id_area_paint'];

			// Mengambil satu data dari kategori genap dan satu data dari kategori ganjil
			if ($id_area_paint % 2 == 0 && $d_head_genap === null) {
				$d_head_genap = $row;
			} elseif ($id_area_paint % 2 != 0 && $d_head_ganjil === null) {
				$d_head_ganjil = $row;
			}

			// Keluar dari loop jika sudah mengambil satu data dari kategori genap dan satu data dari kategori ganjil
			if ($d_head_genap !== null && $d_head_ganjil !== null) {
				break;
			}
		}
		// mendapatkan warna
		$cek_color						= $d_head_ganjil['id_area'];
		$lim_p							= $this->Mvisco->get_color_area($cek_color);

		echo "<pre>";
		echo print_r($d_head_ganjil);
		echo "</pre>";
		// $stat_gl_ganjil				= $d_head_ganjil['c_gl_stat'];
		// $stat_gl_genap				= $d_head_genap['c_gl_stat'];
		// $stat_fr_ganjil				= $d_head_ganjil['c_fr_stat'];
		// $stat_fr_genap				= $d_head_genap['c_fr_stat'];

		// if ($d_head_genap['id_area'] == 5 || $d_head_ganjil['id_area'] == 5) {

		// 	$data = [
		// 		// ---------- Content diganti -------------
		// 		'titleapp'         => 'Checksheet Pengukuran Viscositas ' . $d_head_ganjil['painting'],
		// 		'titlepage'        => 'Checksheet Pengukuran Viscositas ' . $d_head_ganjil['painting'] . ' | 2W',
		// 		'content'          => 'visco/table_cek_p1',
		// 		'extend_js'        => 'layouts/j_page/v_edit',
		// 		'extend_css'       => '',
		// 		// ---- Data yang dikirim ke halaman ------
		// 		'd_head_genap'             => $d_head_genap,
		// 		'd_head_ganjil'            => $d_head_ganjil,
		// 		'data_genap_spray'		   => $data_genap_spray,
		// 		'data_ganjil_spray'	   	   => $data_ganjil_spray,
		// 		'lim_p'					   => $lim_p
		// 	];

		// 	// -------------- HALAMAN ---------------------
		// 	$this->load->view('layouts/wrapper', $data);
		// } elseif ($d_head_genap['id_area'] == 6 || $d_head_ganjil['id_area'] == 6) {

		// 	$data = [
		// 		// ---------- Content diganti -------------
		// 		'titleapp'         => 'Checksheet Pengukuran Viscositas ' . $d_head_ganjil['painting'],
		// 		'titlepage'        => 'Checksheet Pengukuran Viscositas ' . $d_head_ganjil['painting'] . ' | 2W',
		// 		'content'          => 'visco/form',
		// 		'extend_js'        => 'layouts/j_page/v_edit',
		// 		'extend_css'       => '',
		// 		// ---- Data yang dikirim ke halaman ------
		// 		'd_head_genap'             => $d_head_genap,
		// 		'd_head_ganjil'            => $d_head_ganjil,
		// 		'data_genap_spray'		   => $data_genap_spray,
		// 		'data_ganjil_spray'	   	   => $data_ganjil_spray,
		// 		'lim_p'					   => $lim_p
		// 	];

		// 	// -------------- HALAMAN ---------------------
		// 	$this->load->view('layouts/wrapper', $data);
		// } else {
		// 	$this->session->set_flashdata('error', 'ID Transaksi ' . $id_transct	. ' Terdapat aktivitas tidak Normal. Harap hubungi atasan anda!');
		// 	redirect('Cvisco/data_a/all_area');
		// 	return;
		// }
	}
	public function test3()
	{
		$this->load->view('test/test3');
	}
	public function test4()
	{
		$this->load->view('test/test4');
	}

	public function test5()
	{
		$this->load->view('test/test5');
	}
}
