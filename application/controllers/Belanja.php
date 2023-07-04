<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Belanja extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_mastertransaksi');
		$this->load->model('m_master_produk');
	}

	public function index()
	{
		if (empty($this->cart->contents())) {
			redirect('home');
		}
		$data = array(
			'title' => 'Produk',
			// 'isi' => 'frontend/cart/v_cart'
		);
		$this->load->view('frontend/cart/v_cart', $data, FALSE);
	}

	public function add()
	{
		$this->login_pelanggan->proteksi_halaman();
		$redirect_page = $this->input->post('redirect_page');
		$data = array(
			'id' => $this->input->post('id'),
			'qty' => $this->input->post('qty'),
			'price' => $this->input->post('price'),
			'name' => $this->input->post('name'),
			'picture' => $this->input->post('picture'),
			'netto' => $this->input->post('netto'),
			'stock' => $this->input->post('stock'),
		);
		$this->cart->insert($data);
		redirect($redirect_page, 'refresh');
	}

	public function delete($rowid)
	{
		$this->cart->remove($rowid);
		redirect('belanja');
	}
	public function deletecart($rowid)
	{
		$redirect_page = $this->input->post('redirect_page');
		$this->cart->remove($rowid);
		redirect($redirect_page, 'refresh');
	}

	public function update()
	{
		$i = 1;
		foreach ($this->cart->contents() as $items) {
			$data = array(
				'rowid' => $items['rowid'],
				'qty' => $this->input->post($i . '[qty]'),
			);
			$this->cart->update($data);
			$i++;
		}
		$this->session->set_flashdata('pesan', 'Pesanan Berhasil Diupdate');
		redirect('belanja');
	}

	public function clear()
	{
		$this->cart->destroy();
		redirect('belanja');
	}

	public function cekout()
	{
		$this->login_pelanggan->proteksi_halaman();

		$this->form_validation->set_rules('provinsi', 'Provinsi', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
		$this->form_validation->set_rules('kota', 'Kota', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
		$this->form_validation->set_rules('expedisi', 'Expedisi', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
		$this->form_validation->set_rules('paket', 'Paket', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('frontend/cart/v_cart');
		} else {
			//tabel transaksi
			$data = array(
				'id_pesanan' => $this->input->post('id_pesanan'),
				'id_pelanggan' => $this->session->userdata('id_pelanggan'),
				'tanggal_pesanan' => DATE('Y-m-d'),
				'nohp_penerima' => $this->input->post('nohp_penerima'),
				'provinsi' => $this->input->post('provinsi'),
				'kota' => $this->input->post('kota'),
				'kode_post' => $this->input->post('kode_post'),
				'alamat_penerima' => $this->input->post('alamat_penerima'),
				'expedisi' => $this->input->post('expedisi'),
				'paket' => $this->input->post('paket'),
				'estimasi' => $this->input->post('estimasi'),
				'ongkir' => $this->input->post('ongkir'),
				'berat' => $this->input->post('berat'),
				'total_harga' => $this->input->post('total_harga'),
				'total_bayar' => $this->input->post('total_bayar'),
				'status_order' => 1,
				'metode_bayar' => $this->input->post('metode_bayar'),
			);
			$this->m_mastertransaksi->pesan($data);

			// SIMPAN KE TABEL PEMBAYARAN
			$bayar = array(
				'id_pesanan' => $this->input->post('id_pesanan'),
				'bukti_bayar' => 0,
				'atas_nama' => 0,
				'status_pembayaran' => 0,
			);
			$this->m_mastertransaksi->bayar($bayar);

			// SIMPAN KE TABEL DETAIL PESANAN
			$i = 1;
			foreach ($this->cart->contents() as $item) {
				$rinci = array(
					'id_pesanan' => $this->input->post('id_pesanan'),
					'id_produk' => $item['id'],
					'qty' => $this->input->post('qty' . $i++),
				);
				$this->m_mastertransaksi->rinci($rinci);
			}

			// SIMPAN KE TABEL ULASAN
			// $j = 1;
			// foreach ($this->cart->contents() as $value) {
			// 	$penilaian = array(
			// 		'id_detail' => $this->input->post('id_detail' . $j++),
			// 		'ulasan' => '0',
			// 		'id_produk' => $value['id'],
			// 		'tanggal_ulasan' => '0',
			// 		// 'rating' => '0',
			// 		'status_ulasan' => '0'
			// 	);
			// 	$this->m_pemesanan->penilaian($penilaian);
			// }

			$this->cart->destroy();
			redirect('pesanan');
		}
	}
}
