<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_master_produk');
		$this->load->model('m_mastertransaksi');
		$this->load->model('m_ulasan');
	}

	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'Home',
			'produk' => $this->m_master_produk->produk_list(),
			'kategori' => $this->m_master_produk->kategori(),
			'produk_all' => $this->m_master_produk->produk_list_all(),
			'cart' => $this->m_mastertransaksi->selectCart(),
			'diskon' => $this->m_master_produk->produk_diskon(),
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
			'ulasan' => $this->m_ulasan->ulasan($id_produk),
			'jml_ulasan' => $this->m_ulasan->jml_ulasan($id_produk),
			'cart' => $this->m_mastertransaksi->selectCart(),
			'isi' => 'frontend/detail/v_detail'
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}

	public function kategori($id_kategori)
	{
		$kategori = $this->m_master_produk->kategoridetail($id_kategori);
		$data = array(
			'title' => 'Data Kategori',
			'cart' => $this->m_mastertransaksi->selectCart(),
			'produk' => $this->m_master_produk->produk_kategori($id_kategori),
			'isi' => 'frontend/kategori/v_kategori'
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}

	public function list_product()
	{
		$data = array(
			'title' => 'List All Produk',
			'cart' => $this->m_mastertransaksi->selectCart(),
			'produk' => $this->m_master_produk->produk_list_all(),
			'isi' => 'frontend/produk/v_list'
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}
}

/* End of file Home.php */
