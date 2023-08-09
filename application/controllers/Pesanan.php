<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_mastertransaksi');
		$this->load->model('m_master_produk');
		$this->load->model('m_analisis');
	}

	public function index()
	{
		$data = array(
			'title' => 'Pesanan',
			'pesanan' => $this->m_mastertransaksi->pesanan(),
			'cart' => $this->m_mastertransaksi->selectCart(),
			'isi' => 'frontend/cart/v_pesanan'
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}

	public function detail($id_pesanan)
	{
		$data = array(
			'title' => 'Detail Pesanan',
			'detail' => $this->m_mastertransaksi->detailpesanan($id_pesanan),
			'cart' => $this->m_mastertransaksi->selectCart(),
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
					'cart' => $this->m_mastertransaksi->selectCart(),
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
			'cart' => $this->m_mastertransaksi->selectCart(),
			'isi' => 'frontend/cart/v_bayar'
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}

	public function selesai($id_pesanan)
	{
		//analisis produk
		$var_recency = array();
		$var_frequency = array();
		$var_monetary = array();
		$date_in = date('Y-m-d');
		$variabel = $this->m_analisis->variabel($date_in);
		foreach ($variabel['all'] as $key => $value) {
			$var_recency[] = $value->recency;
			$var_frequency[] = $value->frequency;
			$var_monetary[] = $value->monetary;
			// echo '<br>Recency: ' . $value->recency;
			// echo '<br>Frequency: ' . $value->frequency;
			// echo '<br>Monetary: ' . $value->monetary;
		}




		//menentukan rumus euclidean Distance
		$e_recency = array();
		$e_frequecy = array();
		$e_monetary = array();
		foreach ($variabel['limit'] as $key => $value) {
			$e_recency[] = $value->recency;
			$e_frequecy[] = $value->frequency;
			$e_monetary[] = $value->monetary;
		}

		$centroid1 = sqrt((pow(($e_recency[1] - $e_recency[0]), 2)) + (pow($e_frequecy[1] - $e_frequecy[0], 2)) + (pow($e_monetary[1] - $e_monetary[0], 2)));
		$centroid2 = sqrt((pow(($e_recency[0] - $e_recency[1]), 2)) + (pow($e_frequecy[0] - $e_frequecy[1], 2)) + (pow($e_monetary[0] - $e_monetary[1], 2)));

		// echo '<br>' . $e_recency[0];
		// echo '<br>' . $e_recency[1];
		// echo '<br>' . $e_frequecy[0];
		// echo '<br>' . $e_frequecy[1];
		// echo '<br>' . $e_monetary[0];
		// echo '<br>' . $e_monetary[1];
		// echo '<br>Centroid 1:' . $centroid1;
		// echo '<br>Centroid 2:' . $centroid2;
		// echo '<br>' . pow($value->monetary - $e_monetary[0], 2);

		echo '<br>-----------------------------<br>';
		foreach ($variabel['all'] as $key => $value) {
			$centroid_next1 = sqrt((pow(($value->recency - $e_recency[0]), 2)) + (pow($value->frequency - $e_frequecy[0], 2)) + (pow($value->monetary - $e_monetary[0], 2)));
			$centroid_next2 = sqrt((pow(($value->recency - $e_recency[1]), 2)) + (pow($value->frequency - $e_frequecy[1], 2)) + (pow($value->monetary - $e_monetary[1], 2)));

			// echo '<br>' . $centroid_next1;
			// echo '<br>' . $centroid_next2;
			if ($value->frequency == NULL) {
				$status = 3; // tidak laku
			} else {
				if ($centroid1 >= $centroid_next1) {
					$status = 1; // kurang laku
				}
				if ($centroid2 >= $centroid_next2) {
					$status = 2; // laku
				}
			}

			// echo '<br>' . $value->id_produk . '| ' . $status;

			$status_produk = array(
				'status' => $status
			);
			$this->db->where('id_produk', $value->id_produk);
			$this->db->update('produk', $status_produk);
		}

		$data = array(
			'id_pesanan' => $id_pesanan,
			'status_order' => 4
		);
		$this->m_mastertransaksi->statuspesan($data);
		$this->session->set_flashdata('pesan', 'Berhasil Dikonfirmasi');
		redirect('pesanan');
	}

	// public function review()
	// {
	// 	$data['insert'] = $this->m_mastertransaksi->insert_riview();
	// 	$this->session->set_flashdata('pesan', 'Berhasil Memberi Ulasan');
	// 	redirect('pesanan');
	// }

	public function review()
	{
		$data = array(
			'id_ulasan' => $this->input->post('id_ulasan'),
			// 'nama_pelanggan' => $this->session->userdata('nama_pelanggan'),
			'tanggal_ulasan' => date('Y-m-d H:i:s'),
			'ulasan' => $this->input->post('ulasan'),
			'status_ulasan' => 1,
		);
		$this->db->where('id_ulasan', $data['id_ulasan']);
		$this->db->update('ulasan', $data);
		// redirect('pesanan/detail/' . $id_pesanan);
		redirect('pesanan');
	}
}
