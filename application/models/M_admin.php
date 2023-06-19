<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{

	public function user()
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->group_by('id_user');
		return $this->db->get()->result();
	}
}
