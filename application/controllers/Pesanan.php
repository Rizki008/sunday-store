<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_mastertransaksi');
		$this->load->model('m_master_produk');
	}

	public function index()
	{
		$data = array(
			'title' => 'Pesanan',
			'pesanan' => $this->m_mastertransaksi->pesanan(),
			'isi' => 'frontend/cart/v_pesanan'
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}

	public function detail($id_pesanan)
	{
		$data = array(
			'title' => 'Detail Pesanan',
			'detail' => $this->m_mastertransaksi->detailpesanan($id_pesanan),
			'isi' => 'frontend/cart/v_detail'
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}

	public function bayar($id_pesanan)
	{
		$this->form_validation->set_rules('atas_nama', 'Atas Nama', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './assets/transaksi';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
			$config['max_size']     = '2000';
			$this->upload->initialize($config);
			$field_name = "bukti_bayar";
			if (!$this->upload->do_upload($field_name)) {
				$data = array(
					'title' => 'Pembayaran',
					'detail' => $this->m_mastertransaksi->detailpesananbayar($id_pesanan),
					'error_upload' => $this->upload->display_errors(),
					'isi' => 'frontend/cart/v_bayar'
				);
				$this->load->view('frontend/v_wrapper', $data, FALSE);
			} else {
				$upload_data = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/transaksi' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				$data = array(
					'id_pesanan' => $id_pesanan,
					'atas_nama' => $this->input->post('atas_nama'),
					'status_pembayaran' => '1',
					'bukti_bayar' => $upload_data['uploads']['file_name'],
				);
				$this->m_mastertransaksi->uploadbayar($data);

				$statuspesan = array(
					'id_pesanan' => $id_pesanan,
					'status_order' => 2,
				);
				$this->m_mastertransaksi->statuspesan($statuspesan);
				$this->session->set_flashdata('pesan', 'Data Berhasil DiUpload !!!');
				redirect('pesanan');
			}
		}

		$data = array(
			'title' => 'Pembayaran',
			'detail' => $this->m_mastertransaksi->detailpesananbayar($id_pesanan),
			'isi' => 'frontend/cart/v_bayar'
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}

	public function selesai($id_pesanan)
	{
		$data = array(
			'id_pesanan' => $id_pesanan,
			'status_order' => 4
		);
		$this->m_mastertransaksi->statuspesan($data);
		$this->session->set_flashdata('pesan', 'Berhasil Dikonfirmasi');
		redirect('pesanan');
	}

	public function review()
	{
		$data['insert'] = $this->m_mastertransaksi->insert_riview();
		$this->session->set_flashdata('pesan', 'Berhasil Memberi Ulasan');
		redirect('pesanan');
	}
}
