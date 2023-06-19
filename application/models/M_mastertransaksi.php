<?php

defined('BASEPATH') or exit('No direct script access allowed');

class m_mastertransaksi extends CI_Model
{
	public function masuk()
	{
		$this->db->select('*');
		$this->db->from('pesanan');
		$this->db->join('detail_pesanan', 'detail_pesanan.id_pesanan=pesanan.id_pesanan', 'left');
		$this->db->where('status_order=1');
		$this->db->order_by('pesanan.id_pesanan');
		return $this->db->get()->result();
	}
	public function proses()
	{
		$this->db->select('*');
		$this->db->from('pesanan');
		$this->db->join('detail_pesanan', 'detail_pesanan.id_pesanan=pesanan.id_pesanan', 'left');
		$this->db->where('status_order=2');
		$this->db->order_by('pesanan.id_pesanan');
		return $this->db->get()->result();
	}
	public function kirim()
	{
		$this->db->select('*');
		$this->db->from('pesanan');
		$this->db->join('detail_pesanan', 'detail_pesanan.id_pesanan=pesanan.id_pesanan', 'left');
		$this->db->where('status_order=3');
		$this->db->order_by('pesanan.id_pesanan');
		return $this->db->get()->result();
	}
	public function selesai()
	{
		$this->db->select('*');
		$this->db->from('pesanan');
		$this->db->join('detail_pesanan', 'detail_pesanan.id_pesanan=pesanan.id_pesanan', 'left');
		$this->db->where('status_order=4');
		$this->db->order_by('pesanan.id_pesanan');
		return $this->db->get()->result();
	}
}
