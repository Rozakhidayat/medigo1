<?php
class Profile extends CI_Controller {

    public function index() 
    
    {
        
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('template/header');
        $this->load->view('template/sidebar',$data);
        $this->load->view('profile');
        $this->load->view('template/footer');
    }



}
?>