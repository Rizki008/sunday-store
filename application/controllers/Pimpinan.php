<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pimpinan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_auth');
		$this->load->model('m_admin');
		$this->load->model('m_analisis');
	}

	public function index()
	{
		$data = array(
			'title' => 'Admin',
			'grafik' => $this->m_analisis->grafik(),
			'isi' => 'pimpinan/v_pimpinan'
		);
		$this->load->view('pimpinan/v_wrapper', $data, FALSE);
	}
}
