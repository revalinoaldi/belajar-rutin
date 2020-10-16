<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	private $data;

	public function __construct()
	{
		parent::__construct();
		$this->data = array(
			[
				'id' => '001',
				'nama' => 'Arya',
				'kelas' => 'RPLA21'
			],
			[
				'id' => '002',
				'nama' => 'Devina',
				'kelas' => 'RPLA21'
			],
			[
				'id' => '003',
				'nama' => 'Dyah',
				'kelas' => 'RPLB21'
			]
		);
	}

	public function index()
	{
		$dataA = [
			'dataSiswa' => $this->data,
			'session_nama' => "Zidan"
		];
		// $dataA['dataSiswa'] = $this->data;
		// $dataA['session_nama'] = "Zidan";
		$this->load->view('dashboard', $dataA, FALSE);
	}
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */