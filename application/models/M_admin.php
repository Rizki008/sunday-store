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

	public function data_setting()
	{
		$this->db->select('*');
		$this->db->from('setting');
		$this->db->where('id', 1);
		return $this->db->get()->row();
	}

	public function edit($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->update('setting', $data);
	}

	public function add($data)
	{
		$this->db->insert('admin', $data);
	}
	public function update($data)
	{
		$this->db->where('id_user', $data['id_user']);
		$this->db->update('admin', $data);
	}
	public function delete($data)
	{
		$this->db->where('id_user', $data['id_user']);
		$this->db->delete('admin', $data);
	}
}
