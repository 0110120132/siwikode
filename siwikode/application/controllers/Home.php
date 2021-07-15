<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_jeniskuliner');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['jenis_kuliner'] = $this->M_jeniskuliner->SemuaData();
		$data['judul'] = 'Home';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('templates/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_data()
	{

		$data['judul'] = 'Tambah Data';

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		array('required' => 'You must provide ');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/navbar');
			$this->load->view('home/tambah_data');
			$this->load->view('templates/footer');
		} else {
			$this->M_jeniskuliner->tambahDataKuliner();
			$this->session->set_flashdata('flash', ' ditambahkan');
			redirect('home');
		}
	}

	public function hapus($id)
	{
		$this->M_jeniskuliner->hapusDataKuliner($id);
		$this->session->set_flashdata('flash', ' dihapus');
		redirect('home');
	}

	public function ubah($id)
	{

		$data['judul'] = 'Halaman Ubah Data';
		$data['kuliner'] = $this->M_jeniskuliner->getKulinerById($id);

		$this->form_validation->set_rules('nama', 'Nama', 'required');


		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/navbar');
			$this->load->view('home/ubah', $data);
			$this->load->view('templates/footer');
		} else {
			$this->M_jeniskuliner->ubahDataKuliner();
			$this->session->set_flashdata('flash', ' diubah');
			redirect('home');
		}
	}
}
