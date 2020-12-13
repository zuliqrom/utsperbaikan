<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class CController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('cmodel');
	}

	public function index()
	{
		$data['tabel'] = $this->cmodel->semuadata();


		$this->load->view('uts/v_index', $data);
	}

	public function tambah()
	{
		$this->load->view('uts/v_tambah');
	}

	public function proses_tambah()
	{
		//var_dump($this->input->post());
		$data = [
			'kolom_jurusan' => $this->input->post('txtjurusan'),
			'kolom_kelas' => $this->input->post('txtkelas'),
			'kolom_isi' => $this->input->post('txtisi')
		];

		$this->cmodel->simpandata($data);

		redirect('CController/index');


	}
	// public function index()
	// {
	// 	echo 'fungsi index';
	// }
}
