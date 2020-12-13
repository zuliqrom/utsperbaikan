<?php

class cmodel extends CI_Model
{
	private $tabel ='c_tabel';

	public function semuadata()
	{
		// select*from mahasiswa
		// mysqli_fetch_object()
		return $this->db->get($this->tabel)->result();
	}

	public function simpandata($data)
	{
		// insert into mahasiswa value ();
		$this->db->insert($this->tabel, $data);
	}
}