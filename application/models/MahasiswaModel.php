<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MahasiswaModel extends CI_Model {

	private $tblA1 = "mahasiswa"; //Property
	// private $tblJurusan = "jurusan";

	public function show($where='')
	{
		$this->db->select('*');
		$this->db->from($this->tblA1);
		if (@$where) {
			$this->db->where($where);
		}
		return $this->db->get();
		// $query = "SELECT * FROM mahasiswa WHERE ? = ?";
	}
	
}

/* End of file MahasiswaModel.php */
/* Location: ./application/models/MahasiswaModel.php */