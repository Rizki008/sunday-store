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
			'masuk' => $this->m_mastertransaksi->masuk(),
			'proses' => $this->m_mastertransaksi->proses(),
			'kirim' => $this->m_mastertransaksi->kirim(),
			'selesai' => $this->m_mastertransaksi->selesai(),
			'isi' => 'backend/transaksi/v_transaksi'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}

	public function detail($id_pesanan)
	{
		$data = array(
			'title' => 'Detail Pesanan',
			'detail' => $this->m_mastertransaksi->detailpesanan($id_pesanan),
			'isi' => 'backend/transaksi/v_detail'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}

	public function konfirmasi($id_pesanan)
	{
		$data = array(
			'id_pesanan' => $id_pesanan,
			'status_order' => 3
		);
		$this->m_mastertransaksi->statuspesan($data);
		$this->session->set_flashdata('pesan', 'Berhasil Dikonfirmasi');
		redirect('transaksi');
	}
}
