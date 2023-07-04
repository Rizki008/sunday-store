<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_laporan');
	}

	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'Laporan',
			'isi' => 'pimpinan/laporan/v_laporan'
		);
		$this->load->view('pimpinan/v_wrapper', $data, FALSE);
	}
}

/* End of file Laporan.php */
