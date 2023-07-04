<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pencarian extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pencarian');
		$this->load->model('m_master_produk');
	}

	public function index()
	{
		$keyword = $this->input->get('keyword');
		//$data = $this->m_pencarian->ambil_data($keyword);
		$data = array(
			'title' => 'Hasil Pencarian',
			'keyword'    => $keyword,
			'pencarian' => $this->m_pencarian->ambil_data($keyword),
			'isi'        => 'frontend/produk/v_pencarian'
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}
}
