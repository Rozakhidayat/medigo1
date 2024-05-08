<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{	
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','trim|required');
		
		if ( $this->form_validation->run()==false) {

			$this->load->view('template/auth_header');
			$this->load->view('auth/login');
			$this->load->view('template/auth_footer');
		} else {
			$this->_login();
		}
		
	}

	private function _login ()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		if($user) {
			//usernya aktif
			if ($user['is_active']==1){
				if(password_verify($password, $user['password'])){
					$data = [
						'email' => $user['email'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata($data);
					if($user['role_id']==1) {

						redirect(base_url('admin'));
					}else{

						redirect(base_url('Dashboard'));
					}


				}else {
					$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
			Password salah
		  </div>
		  ');
			redirect(base_url('auth'));

				}

			} else {
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
			Email Belum di aktivasi
		  </div>
		  ');
			redirect(base_url('auth'));
			}
		} else {
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
			Email Belum pernah terdaftar
		  </div>
		  ');
			redirect(base_url('auth'));
		}

	
	}


	public function registrasion()
	{
		$this->form_validation->set_rules('nama','Nama','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password1','Password1','required|trim|min_length[5]|matches[password2]');
		$this->form_validation->set_rules('password2','Password2','required|trim|matches[password1]');

		if ( $this->form_validation->run()==false){
			$this->load->view('template/register_header');
			$this->load->view('auth/registrasi');
			$this->load->view('template/register_footer');
			
		} else {
			$data = array (
				
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'foto' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'),
				PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 1,
				'date_created' => time()
			);
			$this->load->model('M_auth');
			$this->M_auth->create($data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			Selamat Akun Anda Berhasil Ditambahkan! Silahkan Untuk Login
		  </div>
		  ');
			redirect(base_url('auth'));
			
		}
		
		
		
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			Anda Berhasil Logout
		  </div>
		  ');
			redirect(base_url('auth'));
	}
	


	
}