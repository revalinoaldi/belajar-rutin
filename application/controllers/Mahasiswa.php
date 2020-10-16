<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('MahasiswaModel','mhs');
	}

	public function index()
	{
		// Result Array == Array
		// Result == Object
		// Data ada 1 == Row ==
		$data = [
			'dataMahasiswa' => $this->mhs->show()->result_array()
		];
		$this->load->view('viewMahasiswa', $data, FALSE);
	}

}

/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */