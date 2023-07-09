<?php

defined('BASEPATH') or exit('No direct script access allowed');

class m_mastertransaksi extends CI_Model
{
	public function masuk()
	{
		$this->db->select('*');
		$this->db->select_sum('qty');
		$this->db->from('pesanan');
		$this->db->join('detail_pesanan', 'detail_pesanan.id_pesanan=pesanan.id_pesanan', 'left');
		$this->db->where('status_order=1');
		$this->db->group_by('detail_pesanan.id_pesanan');
		$this->db->order_by('pesanan.id_pesanan');
		return $this->db->get()->result();
	}
	public function proses()
	{
		$this->db->select('*');
		$this->db->select_sum('qty');
		$this->db->from('pesanan');
		$this->db->join('detail_pesanan', 'detail_pesanan.id_pesanan=pesanan.id_pesanan', 'left');
		$this->db->where('status_order=2');
		$this->db->group_by('detail_pesanan.id_pesanan');
		$this->db->order_by('pesanan.id_pesanan');
		return $this->db->get()->result();
	}
	public function kirim()
	{
		$this->db->select('*');
		$this->db->select_sum('qty');
		$this->db->from('pesanan');
		$this->db->join('detail_pesanan', 'detail_pesanan.id_pesanan=pesanan.id_pesanan', 'left');
		$this->db->where('status_order=3');
		$this->db->group_by('detail_pesanan.id_pesanan');
		$this->db->order_by('pesanan.id_pesanan');
		return $this->db->get()->result();
	}
	public function selesai()
	{
		$this->db->select('*');
		$this->db->select_sum('qty');
		$this->db->from('pesanan');
		$this->db->join('detail_pesanan', 'detail_pesanan.id_pesanan=pesanan.id_pesanan', 'left');
		$this->db->where('status_order=4');
		$this->db->group_by('detail_pesanan.id_pesanan');
		$this->db->order_by('pesanan.id_pesanan');
		return $this->db->get()->result();
	}

	//TRANSAKSI ADD PELANGGAN
	public function pesan($data)
	{
		$this->db->insert('pesanan', $data);
	}
	public function bayar($data)
	{
		$this->db->insert('pembayaran', $data);
	}
	public function rinci($data)
	{
		$this->db->insert('detail_pesanan', $data);
	}

	//PESANAN PELANGGAN VIEW
	public function pesanan()
	{
		$this->db->select('*');
		$this->db->from('pesanan');
		$this->db->join('pembayaran', 'pembayaran.id_pesanan = pesanan.id_pesanan', 'left');
		$this->db->join('detail_pesanan', 'detail_pesanan.id_pesanan = pesanan.id_pesanan', 'left');
		$this->db->join('produk', 'produk.id_produk = detail_pesanan.id_produk', 'left');
		$this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
		$this->db->group_by('detail_pesanan.id_pesanan');
		$this->db->order_by('pesanan.id_pesanan', 'desc');
		return $this->db->get()->result();
	}
	public function detailpesanan($id_pesanan)
	{
		$this->db->select('*');
		$this->db->from('pesanan');
		$this->db->join('pembayaran', 'pembayaran.id_pesanan = pesanan.id_pesanan', 'left');
		$this->db->join('detail_pesanan', 'detail_pesanan.id_pesanan = pesanan.id_pesanan', 'left');
		$this->db->join('produk', 'produk.id_produk = detail_pesanan.id_produk', 'left');
		$this->db->join('kategori', 'kategori.id_kategori = produk.kategori', 'left');
		$this->db->where('pesanan.id_pesanan', $id_pesanan);
		$this->db->order_by('detail_pesanan.id_detail', 'desc');
		return $this->db->get()->result();
	}

	public function detailpesananbayar($id_pesanan)
	{
		$this->db->select('*');
		$this->db->from('pesanan');
		$this->db->where('id_pesanan', $id_pesanan);
		return $this->db->get()->row();
	}

	//PEMBAYARAN
	public function uploadbayar($data)
	{
		$this->db->where('id_pesanan', $data['id_pesanan']);
		$this->db->update('pembayaran', $data);
	}
	public function statuspesan($data)
	{
		$this->db->where('id_pesanan', $data['id_pesanan']);
		$this->db->update('pesanan', $data);
	}

	public function insert_riview()
	{
		$data = array(
			'id_pelanggan' => $this->session->userdata('id_pelanggan'),
			'id_produk' => $this->input->post('id_produk'),
			// 'nama_pelanggan' => $this->session->userdata('nama_pelanggan'),
			'tanggal_ulasan' => date('Y-m-d H:i:s'),
			'ulasan' => $this->input->post('ulasan'),
			'status_ulasan' => 1,
		);
		$this->db->insert('ulasan', $data);
	}
}
