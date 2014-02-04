<?php
class db_admin extends CI_Model{
	function insert($data){
		$this->db->insert('admin', $data);
	}	
}
?>