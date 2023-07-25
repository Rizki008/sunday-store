<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Analisis extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_analisis');
	}

	// List all your items
	public function index($offset = 0)
	{
		$data = array(
			'title' => 'Analisis K-Means',
			'grafik' => $this->m_analisis->grafik(),
			'laporan_penjualan' => $this->m_analisis->laporan_penjualan(),
			'isi' => 'backend/analisis/v_analisis'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}

	// Add a new item
	public function pimpinan()
	{
		$data = array(
			'title' => 'Analisis K-Means',
			'grafik' => $this->m_analisis->grafik(),
			'laporan_penjualan' => $this->m_analisis->laporan_penjualan(),
			'isi' => 'pimpinan/analisis/v_analisis'
		);
		$this->load->view('pimpinan/v_wrapper', $data, FALSE);
	}

	//Update one item
	public function update($id = NULL)
	{
	}

	//Delete one item
	public function delete($id = NULL)
	{
	}
}

/* End of file Analisis.php */
