<?php
class m_mahasiswa extends CI_Model
{
    private $table = 'mahasiswa';
    public function semuadata()
    {
        // di web dasar semsester 4
        // get == select * from mahasiswa
        // result == mysql_fetch_object()
        return $this->db->get($this->table)->result();
    }
    public function simpandata($data)
    {
    	//insert into mahasiswa values();
    	$this->db->insert($this->table, $data);
    }
}
