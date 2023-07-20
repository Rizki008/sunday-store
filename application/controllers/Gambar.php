<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Gambar extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_master_produk');
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
					'produk' => $id_produk,
					'keterangan' => $this->input->post('keterangan'),
					'gambar' => $upload_data['uploads']['file_name'],
				);
				$this->m_master_produk->add_gambar($data);
				$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!!');
				redirect('gambar/add_gambar/' . $id_produk);
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
		redirect('gambar/add_gambar/' . $id_produk);
	}
}
