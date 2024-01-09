<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Error extends CI_Controller
{
	public function e404()
	{
		$this->load->view('error/404');
	}
	public function index()
	{
		$this->load->view('error/main_error');
	}
}
