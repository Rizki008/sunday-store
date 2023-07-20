<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_auth');
		$this->load->model('m_master_produk');
	}

	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'Login Pelanggan',
			'isi' => 'frontend/pelanggan/v_auth'
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}
	public function register()
	{
		$this->form_validation->set_rules('nama_pelanggan', 'Nama', 'required|is_unique[pelanggan.nama_pelanggan]', array(
			'required' => '%s Mohon untuk diisi!!!',
			'is_unique' => '%s Sudah Terdaftar!!!'
		));
		$this->form_validation->set_rules('email_pelanggan', 'Email', 'required|is_unique[pelanggan.email_pelanggan]', array(
			'required' => '%s Mohon untuk diisi!!!',
			'is_unique' => '%s email_pelanggan Sudah Terdaptar'
		));
		$this->form_validation->set_rules('password_pelanggan', 'password', 'required|min_length[8]', array(
			'required' => '%s Mohon untuk diisi!!!',
			'min_length' => '%s password_pelanggan Minimal 8',
			// 'regex_match' => '%s password_pelanggan Harus Gabungan Huruf Besar, Angka Dan Hurup Kecil'
		));
		$this->form_validation->set_rules('ulangi_password_pelanggan', 'Ulangi password', 'required|matches[password_pelanggan]', array(
			'required' => '%s Mohon Untuk Diisi !!!',
			'matches' => '%s Tidak Sama !!!'
		));
		$this->form_validation->set_rules('nohp_pelanggan', 'No Telephone', 'required|min_length[12]|max_length[13]', array(
			'required' => '%s Mohon untuk diisi!!!',
			'min_length' => '%s Minimal 11',
			'max_length' => '%s Maksimal 13',
			// 'regex_match' => '%s password_pelanggan Harus Gabungan Huruf Besar, Angka Dan Hurup Kecil'
		));
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', array('required' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('alamat_pelanggan', 'Alamat', 'required', array('required' => '%s Mohon untuk diisi!!!'));

		if ($this->form_validation->run() ==  FALSE) {
			$data = array(
				'title' => 'Register Pelanggan',
				'isi'  => 'frontend/pelanggan/v_registrasi'
			);
			$this->load->view('frontend/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'nama_pelanggan' => $this->input->post('nama_pelanggan'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'email_pelanggan' => $this->input->post('email_pelanggan'),
				'password_pelanggan' => $this->input->post('password_pelanggan'),
				'nohp_pelanggan' => $this->input->post('nohp_pelanggan'),
				'alamat_pelanggan' => $this->input->post('alamat_pelanggan'),
			);
			$this->m_auth->register($data);
			$this->session->set_flashdata('pesan', 'Register Berhasi, Silahkan Untuk Login');
			redirect('pelanggan');
		}
	}

	// Add a new item
	public function login()
	{
		$this->form_validation->set_rules('email_pelanggan', 'Email', 'required');
		$this->form_validation->set_rules('password_pelanggan', 'Password', 'required');

		if ($this->form_validation->run() == TRUE) {
			$email_pelanggan = $this->input->post('email_pelanggan');
			$password_pelanggan = $this->input->post('password_pelanggan');
			$this->login_pelanggan->login_pelanggan($email_pelanggan, $password_pelanggan);
		}
		// $data = array(
		// 	'title' => 'Login Pelanggan',
		// 	'isi' => 'frontend/pelanggan/v_auth'
		// );
		// $this->load->view('frontend/v_wrapper', $data, FALSE);
	}

	//Update one item
	public function logout()
	{
		$this->login_pelanggan->logout();
	}
}

/* End of file Pelanggan.php */
