<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_ulasan extends CI_Model
{


	public function ulasan($id_produk)
	{
		$this->db->select('*');
		$this->db->from('ulasan');
		$this->db->join('produk', 'produk.id_produk = ulasan.id_produk', 'left');
		$this->db->join('detail_pesanan', 'detail_pesanan.id_produk = produk.id_produk', 'left');
		$this->db->join('pesanan', 'pesanan.id_pesanan = detail_pesanan.id_pesanan', 'left');
		$this->db->join('pelanggan', 'pelanggan.id_pelanggan = pesanan.id_pelanggan', 'left');
		$this->db->where('ulasan.id_produk', $id_produk);
		return $this->db->get()->result();
	}
}

/* End of file M_ulasan.php */
