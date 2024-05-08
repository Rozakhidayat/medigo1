<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function tampil_data() 
	{
		$data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

		$this->load->model('M_pasien');
		$data['daftar']=$this->M_pasien->read();
		$this->load->view('template/header');
		$this->load->view('template/sidebar',$data);
		$this->load->view('pasien', $data);
		$this->load->view('template/footer');
		
	}


	

	public function tambah_pasien()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'umur' => $this->input->post('umur'),
			'jk' => $this->input->post('gender'),
			'kategori' => $this->input->post('kategori'),
			'no_bpjs' => $this->input->post('no_bpjs'),
			'no_hp' => $this->input->post('no_hp'),
			'riwayat_penyakit' => $this->input->post('riwayat')
		);

		$this->load->model('M_pasien');
		$this->M_pasien->create($data);
		redirect(base_url('User/tampil_data'));
	}


}