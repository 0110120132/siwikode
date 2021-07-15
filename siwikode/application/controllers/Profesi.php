<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profesi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_profesi');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['jenis_kuliner'] = $this->M_profesi->SemuaData();
		$data['judul'] = 'Halaman Home';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('profesi/index');
		$this->load->view('templates/footer');

		
	}
}