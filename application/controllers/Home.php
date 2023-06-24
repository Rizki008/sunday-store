<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_master_produk');
	}

	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'Home',
			'produk' => $this->m_master_produk->produk_list(),
			'isi' => 'frontend/v_home'
		);
		// echo $this->db->last_query();
		// die();
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}

	public function detail($id_produk)
	{
		$data = array(
			'title' => 'Detail Produk',
			'produk' => $this->m_master_produk->detailprod($id_produk),
			'gambar' => $this->m_master_produk->gambarprod($id_produk),
			'produklain' => $this->m_master_produk->produk_lain($id_produk),
			// 'ulasan' => $this->m_ulasan->ulasan($id_produk),
			'isi' => 'frontend/detail/v_detail'
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}

	public function kategori($id_kategori)
	{
		$kategori = $this->m_master_produk->kategoridetail($id_kategori);
		$data = array(
			'title' => 'Data Kategori',
			'produk' => $this->m_master_produk->produk_kategori($id_kategori),
			'isi' => 'frontend/kategori/v_kategori'
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}
}

/* End of file Home.php */
