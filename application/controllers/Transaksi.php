<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_mastertransaksi');
	}

	public function index()
	{
		$data = array(
			'title' => 'Data Transaksi',
			'isi' => 'backend/transaksi/v_transaksi'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}
}
