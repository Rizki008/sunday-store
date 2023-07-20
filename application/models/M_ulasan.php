<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_ulasan extends CI_Model
{


	public function ulasan($id_produk)
	{
<<<<<<< HEAD
		return $this->db->query("SELECT * FROM `ulasan` LEFT JOIN `produk` ON `produk`.`id_produk` = `ulasan`.`id_produk` LEFT JOIN `detail_pesanan` ON `detail_pesanan`.`id_produk` = `produk`.`id_produk` LEFT JOIN `pesanan` ON `pesanan`.`id_pesanan` = `detail_pesanan`.`id_pesanan` LEFT JOIN `pelanggan` ON `pelanggan`.`id_pelanggan` = `pesanan`.`id_pelanggan` WHERE `ulasan`.id_produk='" . $id_produk . "' GROUP BY ulasan.`status_ulasan`=0 DESC;")->result();
=======
		$this->db->select('*');
		$this->db->from('ulasan');
		$this->db->join('produk', 'produk.id_produk = ulasan.id_produk', 'left');
<<<<<<< HEAD
		$this->db->join('detail_pesanan', 'detail_pesanan.id_produk = produk.id_produk', 'left');
=======
		$this->db->join('detail_pesanan', 'detail_pesanan.id_detail = ulasan.id_detail', 'left');
>>>>>>> 2aa214089392a4613a47a793bcac59e10d17fc9b
		$this->db->join('pesanan', 'pesanan.id_pesanan = detail_pesanan.id_pesanan', 'left');
		$this->db->join('pelanggan', 'pelanggan.id_pelanggan = pesanan.id_pelanggan', 'left');
		$this->db->where('ulasan.id_produk', $id_produk);
		return $this->db->get()->result();
>>>>>>> 5840f3f495f81f9e33751da1d1402c0e16c12357
	}
}

/* End of file M_ulasan.php */
