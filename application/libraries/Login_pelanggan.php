<?php

defined('BASEPATH') or exit('No direct script access allowed');

class login_pelanggan
{

	protected $ci;


	public function __construct()
	{
		$this->ci = &get_instance();
		$this->ci->load->model('m_auth');
	}

	public function login_pelanggan($email_pelanggan, $password_pelanggan)
	{
		$cek = $this->ci->m_auth->login_pelanggan($email_pelanggan, $password_pelanggan);

		if ($cek) {
			$id_pelanggan = $cek->id_pelanggan;
			$email_pelanggan = $cek->email_pelanggan;
			$password_pelanggan = $cek->password_pelanggan;
			$nama_pelanggan = $cek->nama_pelanggan;
			$nohp_pelanggan = $cek->nohp_pelanggan;
			$alamat_pelanggan = $cek->alamat_pelanggan;
			$jenis_kelamin = $cek->jenis_kelamin;

			$this->ci->session->set_userdata('id_pelanggan', $id_pelanggan);
			$this->ci->session->set_userdata('email_pelanggan', $email_pelanggan);
			$this->ci->session->set_userdata('password_pelanggan', $password_pelanggan);
			$this->ci->session->set_userdata('nama_pelanggan', $nama_pelanggan);
			$this->ci->session->set_userdata('nohp_pelanggan', $nohp_pelanggan);
			$this->ci->session->set_userdata('alamat_pelanggan', $alamat_pelanggan);
			$this->ci->session->set_userdata('jenis_kelamin', $jenis_kelamin);

			redirect('home');
		} else {
			$this->ci->session->set_flashdata('error', 'Email Atau Password Salah');
			redirect('pelanggan');
		}
	}

	public function proteksi()
	{
		if ($this->ci->session->userdata('email_pelanggan' == '')) {
			$this->ci->session->set_flashdata('error', 'Silahkan Login Terlebih dahulu!!!');
			redirect('pelanggan');
		}
	}

	public function logout()
	{
		$this->ci->session->unset_userdata('id_pelanggan');
		$this->ci->session->unset_userdata('email_pelanggan');
		$this->ci->session->unset_userdata('password_pelanggan');
		$this->ci->session->unset_userdata('nama_pelanggan');
		$this->ci->session->unset_userdata('nohp_pelanggan');
		$this->ci->session->unset_userdata('alamat_pelanggan');
		$this->ci->session->unset_userdata('jenis_kelamin');
		$this->ci->session->set_flashdata('pesan', 'Berhasil Logout');

		redirect('pelanggan');
	}
}
