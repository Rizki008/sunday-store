<?php

defined('BASEPATH') or exit('No direct script access allowed');

class m_master_produk extends CI_Model
{

	public function kategori()
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->group_by('id_kategori');
		return $this->db->get()->result();
	}
	public function add_kategori($data)
	{
		$this->db->insert('kategori', $data);
	}
	public function update_kategori($data)
	{
		$this->db->where('id_kategori', $data['id_kategori']);
		$this->db->update('kategori', $data);
	}
	public function delete_kategori($data)
	{
		$this->db->where('id_kategori', $data['id_kategori']);
		$this->db->delete('kategori', $data);
	}
	public function kategoridetail($id_kategori)
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->where('id_kategori', $id_kategori);
		$this->db->group_by('id_kategori');
		return $this->db->get()->result();
	}

	public function produk_kategori($id_kategori)
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori', 'kategori.id_kategori = produk.kategori', 'left');
		$this->db->where('produk.kategori', $id_kategori);
		return $this->db->get()->result();
	}

	// PRODUK
	public function produk()
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori', 'kategori.id_kategori = produk.kategori', 'left');
		$this->db->group_by('id_produk');
		return $this->db->get()->result();
	}
	public function produk_list()
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori', 'kategori.id_kategori = produk.kategori', 'left');
		$this->db->limit('4');
		$this->db->group_by('id_produk');
		return $this->db->get()->result();
	}
	public function produk_list_all()
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori', 'kategori.id_kategori = produk.kategori', 'left');
		$this->db->group_by('id_produk');
		return $this->db->get()->result();
	}
	public function produk_diskon()
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->where('diskon>=10');
		$this->db->limit(2);
		return $this->db->get()->result();
	}
	public function detail_produk($id_produk)
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori', 'kategori.id_kategori=produk.kategori', 'left');
		$this->db->where('id_produk', $id_produk);
		$this->db->group_by('id_produk');
		return $this->db->get()->row();
	}
	public function add_produk($data)
	{
		$this->db->insert('produk', $data);
	}
	public function update_produk($data)
	{
		$this->db->where('id_produk', $data['id_produk']);
		$this->db->update('produk', $data);
	}
	public function delete_produk($data)
	{
		$this->db->where('id_produk', $data['id_produk']);
		$this->db->delete('produk', $data);
	}

	//GAMBAR PRODUK
	public function gambar()
	{
		$this->db->select('produk.*,COUNT(gambar.id_gambar) as jumlah_gambar,gambar');
		$this->db->from('produk');
		$this->db->join('gambar', 'gambar.produk=produk.id_produk', 'left');
		$this->db->group_by('produk.id_produk');
		$this->db->order_by('produk.id_produk', 'desc');
		return $this->db->get()->result();
	}
	public function detail($id_gambar)
	{
		$this->db->select('*');
		$this->db->from('gambar');
		$this->db->where('id_gambar', $id_gambar);
		return $this->db->get()->row();
	}
	public function detail_gambar($id_produk)
	{
		$this->db->select('*');
		$this->db->from('gambar');
		$this->db->where('produk', $id_produk);
		return $this->db->get()->result();
	}
	public function add_gambar($data)
	{
		$this->db->insert('gambar', $data);
	}
	public function delete_gambar($data)
	{
		$this->db->where('id_gambar', $data['id_gambar']);
		$this->db->delete('gambar', $data);
	}

	//VIEW UNTUK FRONTEND
	public function gambarprod($id_produk)
	{
		$this->db->select('*');
		$this->db->from('gambar');
		$this->db->where('produk', $id_produk);
		return $this->db->get()->result();
	}
	public function detailprod($id_produk)
	{
		return $this->db->query("SELECT * FROM `produk` LEFT JOIN kategori ON kategori.id_kategori=produk.kategori LEFT JOIN gambar ON gambar.produk=produk.id_produk WHERE id_produk='" . $id_produk . "'")->row();
	}
	public function produk_lain($id_produk)
	{
		return $this->db->where(array('id_produk !=' => $id_produk))->limit(4)->get('produk')->result();
	}
}
