<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Master_produk extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_master_produk');
	}


	// KATEGORI PRODUK
	public function kategori()
	{
		$data = array(
			'title' => 'Data Kategori',
			'kategori' => $this->m_master_produk->kategori(),
			'isi' => 'backend/kategori/v_kategori'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}
	public function add()
	{
		$data = array(
			'nama_kategori' => $this->input->post('nama_kategori'),
		);
		$this->m_master_produk->add_kategori($data);
		$this->session->set_flashdata('pesan', 'Tambah kategori berhasil');
		redirect('master_produk/kategori');
	}
	public function update($id_kategori)
	{
		$data = array(
			'id_kategori' => $id_kategori,
			'nama_kategori' => $this->input->post('nama_kategori'),
		);
		$this->m_master_produk->update_kategori($data);
		$this->session->set_flashdata('pesan', 'Update Kategori berhasil');
		redirect('master_produk/kategori');
	}
	public function delete($id_kategori)
	{
		$data = array(
			'id_kategori' => $id_kategori,
		);
		$this->m_master_produk->delete_kategori($data);
		$this->session->set_flashdata('pesan', 'Kategori Berhasil dihapus');
		redirect('master_produk/kategori');
	}


	// PRODUK
	public function produk()
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
		$this->form_validation->set_rules('berat', 'Harga Produk', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
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
					'stok' => $this->input->post('stok'),
					'deskripsi' => $this->input->post('deskripsi'),
					'foto' => $upload_data['uploads']['file_name'],
				);
				$this->m_master_produk->add_produk($data);
				$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!!');
				redirect('master_produk/produk');
			}
		}
	}
	public function update_produk($id_produk)
	{
		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('kategori', 'Kategori Produk', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('harga', 'Harga Produk', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('berat', 'Harga Produk', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
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
					'stok' => $this->input->post('stok'),
					'deskripsi' => $this->input->post('deskripsi'),
					'foto' => $upload_data['uploads']['file_name'],
				);
				$this->m_master_produk->update_produk($data);
				$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!!');
				redirect('master_produk/produk');
			}
			//TANPA GANTI GAMBAR
			$data = array(
				'id_produk' => $id_produk,
				'nama_produk' => $this->input->post('nama_produk'),
				'kategori' => $this->input->post('kategori'),
				'harga' => $this->input->post('harga'),
				'berat' => $this->input->post('berat'),
				'stok' => $this->input->post('stok'),
				'deskripsi' => $this->input->post('deskripsi'),
			);
			$this->m_master_produk->update_produk($data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!!');
			redirect('master_produk/produk');
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
		redirect('master_produk/produk');
	}

	public function gambarproduk()
	{
		$data = array(
			'title' => 'Data Gambar Produk',
			'gambar' => $this->m_master_produk->gambar(),
			'isi' => 'backend/gambar/v_gambar'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}
	public function add_gambar($id_produk)
	{
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './assets/foto';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
			$config['max_size']     = '2000';
			$this->upload->initialize($config);
			$field_name = "gambar";
			if (!$this->upload->do_upload($field_name)) {
				$data = array(
					'title' => 'Tambah Gambar Produk',
					'error_upload' => $this->upload->display_errors(),
					'produk' => $this->m_master_produk->detail_produk($id_produk),
					'gambar' => $this->m_master_produk->detail_gambar($id_produk),
					'isi' => 'backend/gambar/v_add'
				);
				$this->load->view('backend/v_wrapper', $data, FALSE);
			} else {
				$upload_data = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/foto' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				$data = array(
					'id_produk' => $id_produk,
					'keterangan' => $this->input->post('keterangan'),
					'gambar' => $upload_data['uploads']['file_name'],
				);
				$this->m_master_produk->add_gambar($data);
				$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!!');
				redirect('master_produk/add_gambar/' . $id_produk);
			}
		}
		$data = array(
			'title' => 'Tambah Gambar Produk',
			'produk' => $this->m_master_produk->detail_produk($id_produk),
			'gambar' => $this->m_master_produk->detail_gambar($id_produk),
			'isi' => 'backend/gambar/v_add'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}
	public function delete_gambar($id_produk, $id_gambar)
	{
		//HAPUS GAMBAR DI FOLDER
		$produk = $this->m_master_produk->detail($id_gambar);
		if ($produk->foto !== "") {
			unlink('./assets/foto/' . $produk->id_gambar);
		}
		//END
		$data = array(
			'id_gambar' => $id_gambar
		);
		$this->m_master_produk->delete_gambar($data);
		$this->session->set_flashdata('pesan', 'Produk berhasil di hapus');
		redirect('master_produk/add_gambar/' . $id_produk);
	}
}
