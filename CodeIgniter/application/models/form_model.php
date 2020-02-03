<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class form_model extends CI_Model {

	public function insert_data($data)
	{
		$this->db->insert("tbl_user", $data);
	}
}
