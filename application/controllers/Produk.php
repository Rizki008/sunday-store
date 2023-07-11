<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_master_produk');
	}


	// PRODUK
	public function index()
	{
		$data = array(
			'title' => 'Data Produk',
			'produk' => $this->m_master_produk->produk(),
			'isi' => 'backend/produk/v_produk'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}
	public function add_produk()
	{
		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('kategori', 'Kategori Produk', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('harga', 'Harga Produk', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('berat', 'Berat Produk', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
		// $this->form_validation->set_rules('diskon', 'Diskon Produk', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('stok', 'Stok Produk', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Produk', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './assets/produk';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
			$config['max_size']     = '5000';
			$this->upload->initialize($config);
			$field_name = "foto";
			if (!$this->upload->do_upload($field_name)) {
			} else {
				$upload_data = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/produk' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				$data = array(
					'nama_produk' => $this->input->post('nama_produk'),
					'kategori' => $this->input->post('kategori'),
					'harga' => $this->input->post('harga'),
					'berat' => $this->input->post('berat'),
					'diskon' => $this->input->post('diskon'),
					'stok' => $this->input->post('stok'),
					'deskripsi' => $this->input->post('deskripsi'),
					'foto' => $upload_data['uploads']['file_name'],
				);
				$this->m_master_produk->add_produk($data);
				$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!!');
				redirect('produk');
			}
		}
	}
	public function update_produk($id_produk)
	{
		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('kategori', 'Kategori Produk', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('harga', 'Harga Produk', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('berat', 'Berat Produk', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
		// $this->form_validation->set_rules('diskon', 'Diskon Produk', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('stok', 'Stok Produk', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Produk', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './assets/produk';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
			$config['max_size']     = '5000';
			$this->upload->initialize($config);
			$field_name = "foto";
			if (!$this->upload->do_upload($field_name)) {
			} else {

				//HAPUS GAMBAR DI FOLDER
				$produk = $this->m_master_produk->detail_produk($id_produk);
				if ($produk->foto !== "") {
					unlink('./assets/produk/' . $produk->id_produk);
				}
				//END

				$upload_data = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/produk' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				$data = array(
					'id_produk' => $id_produk,
					'nama_produk' => $this->input->post('nama_produk'),
					'kategori' => $this->input->post('kategori'),
					'harga' => $this->input->post('harga'),
					'berat' => $this->input->post('berat'),
					'diskon' => $this->input->post('diskon'),
					'stok' => $this->input->post('stok'),
					'deskripsi' => $this->input->post('deskripsi'),
					'foto' => $upload_data['uploads']['file_name'],
				);
				$this->m_master_produk->update_produk($data);
				$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!!');
				redirect('produk');
			}
			//TANPA GANTI GAMBAR
			$data = array(
				'id_produk' => $id_produk,
				'nama_produk' => $this->input->post('nama_produk'),
				'kategori' => $this->input->post('kategori'),
				'harga' => $this->input->post('harga'),
				'berat' => $this->input->post('berat'),
				'stok' => $this->input->post('stok'),
				'diskon' => $this->input->post('diskon'),
				'deskripsi' => $this->input->post('deskripsi'),
			);
			$this->m_master_produk->update_produk($data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!!');
			redirect('produk');
		}
	}

	public function delete_produk($id_produk)
	{
		//HAPUS GAMBAR DI FOLDER
		$produk = $this->m_master_produk->detail_produk($id_produk);
		if ($produk->foto !== "") {
			unlink('./assets/produk/' . $produk->id_produk);
		}
		//END
		$data = array(
			'id_produk' => $id_produk
		);
		$this->m_master_produk->delete_produk($data);
		$this->session->set_flashdata('pesan', 'Produk berhasil di hapus');
		redirect('produk');
	}
}
