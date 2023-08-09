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
		// if (empty($this->cart->contents())) {
		// 	redirect('home');
		// }
		$data = array(
			'title' => 'Keranjang Belanja',
			// 'keranjang' => $this->m_mastertransaksi->keranjang(),
			'cart' => $this->m_mastertransaksi->selectCart(),
			'isi' => 'frontend/cart/v_cart'
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}


	// ADD KE KERANJANG 
	public function add()
	{
		$this->login_pelanggan->proteksi_halaman();
		$cek = $this->input->post('id_produk');
		$produk_cek = $this->m_mastertransaksi->cek_keranjang($cek);
		if ($produk_cek) {
			$data = array(
				'qty_cart' => $produk_cek->qty_cart + 1
			);
			$this->m_mastertransaksi->update_keranjang($produk_cek->id_keranjang, $data);
		} else {
			$data = array(
				'id_produk' => $this->input->post('id_produk'),
				'id_pelanggan' => $this->session->userdata('id_pelanggan'),
				'qty_cart' => $this->input->post('qty'),
			);
			$this->m_mastertransaksi->simpan_keranjang($data);
		}
		redirect('home');
	}

	public function update_cart()
	{
		$this->login_pelanggan->proteksi_halaman();
		$cart = $this->m_mastertransaksi->selectCart();
		$i = 1;
		foreach ($cart['cart'] as $key => $value) {
			$data = array(
				'qty_cart' => $this->input->post('qty' . $i++)
			);
			$this->db->where('id_keranjang', $value->id_keranjang);
			$this->db->update('keranjang', $data);
		}
		redirect('belanja');
	}

	public function deleteCart($id_keranjang)
	{
		$this->login_pelanggan->proteksi_halaman();
		$this->m_mastertransaksi->hapus($id_keranjang);
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
			$data = array(
				'title' => 'Cekout',
				'cart' => $this->m_mastertransaksi->selectCart(),
				'isi' => 'frontend/cart/v_cekout'
			);
			$this->load->view('frontend/cart/v_cekout', $data, FALSE);
		} else {
			$cart = $this->m_mastertransaksi->selectCart();
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
			$j = 1;
			foreach ($cart['cart'] as $key => $item) {
				$rinci = array(
					'id_pesanan' => $this->input->post('id_pesanan'),
					'id_detail' => $this->input->post('id_detail' . $j++),
					'id_produk' => $item->id_produk,
					'qty' => $item->qty_cart,
				);
				$this->m_mastertransaksi->rinci($rinci);
			}

			// SIMPAN KE TABEL ULASAN
			$j = 1;
			foreach ($cart['cart'] as $key => $value) {
				$penilaian = array(
					'id_detail' => $this->input->post('id_detail' . $j++),
					'ulasan' => '0',
					'id_produk' => $value->id_produk,
					'tanggal_ulasan' => '0',
					// 'rating' => '0',
					'status_ulasan' => '0'
				);
				$this->m_mastertransaksi->penilaian($penilaian);
			}

			foreach ($cart['cart'] as $key => $valuesa) {
				$this->db->where('id_keranjang', $valuesa->id_keranjang);
				$this->db->delete('keranjang');
			}

			// $this->cart->destroy();
			redirect('pesanan');
		}
	}
}
