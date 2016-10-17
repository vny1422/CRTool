<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cLogin extends CI_Controller {
	function __construct()
    {
                parent::__construct();
                $this->load->helper('url_helper');
               
     }

	public function index()
	{
        $data['username'] = '';
        $this->session->set_flashdata('information', '');
		$data['title'] = 'CR Monitoring';
		$this->load->view('templates/headMain', $data);
		$this->load->helper('url_helper');
		$this->load->view('newVLogin');
        $this->load->view('templates/footer');
	}
    
    public function auth()
    {
        $data['username'] = "";
		if ($this->input->post())
		{
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$this->load->model('User_model');
			$details = $this->User_model->Sign_in($username, $password);
            if($details !== FALSE)
            {
                $this->session->set_userdata('id_user', $details->id_user);
				$this->session->set_userdata('id_role', $details->id_role);
                redirect('cHalamanUtama'); 
            }
            else
            {
                $data['username'] = $username;
				$this->session->set_flashdata('information', 'Wrong username or     password !');
            }
          $data['title'] = 'CR Monitoring';
		  $this->load->view('templates/headMain', $data);
		  $this->load->helper('url_helper');
		  $this->load->view('newVLogin');
        }
        
}
}
