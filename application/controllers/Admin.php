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

	public function user()
	{
		$data = array(
			'title' => 'Data user',
			'user' => $this->m_admin->user(),
			'isi' => 'backend/admin/v_user'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}
}
