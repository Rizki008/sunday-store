<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_auth');
		$this->load->model('m_admin');
	}

	public function index()
	{
		$data = array(
			'title' => 'Admin',
			'isi' => 'backend/v_admin'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}

	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required', array('required' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s Mohon untuk diisi!!!'));

		if ($this->form_validation->run() == TRUE) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->login_user->login($username, $password);
		}
		$data = array(
			'title' => 'Login'
		);
		$this->load->view('backend/admin/v_login', $data, FALSE);
	}

	public function logout()
	{
		$this->login_user->logout();
	}

	public function user()
	{
		$data = array(
			'title' => 'Data user',
			'user' => $this->m_admin->user(),
			'isi' => 'backend/admin/v_user'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}

	// setting lokasi toko
	public function setting()
	{
		$this->form_validation->set_rules('nama_toko', 'Nama Pembeli', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
		$this->form_validation->set_rules('kota', 'Kota Pembeli', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
		$this->form_validation->set_rules('alamat', 'Alamat Pembeli', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
		$this->form_validation->set_rules('no_telpon', 'Nomer Pembeli', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Setting Lokasi Toko',
				'setting' => $this->m_admin->data_setting(),
				'isi' => 'backend/setting/v_setting'
			);
			$this->load->view('backend/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'id' => 1,
				'lokasi' => $this->input->post('kota'),
				'nama_toko' => $this->input->post('nama_toko'),
				'alamat' => $this->input->post('alamat'),
				'no_telpon' => $this->input->post('no_telpon'),
			);
			$this->m_admin->edit($data);
			$this->session->set_flashdata('pesan', 'Setting Berhasil Diedit!!!');
			redirect('admin/setting');
		}
	}
}
