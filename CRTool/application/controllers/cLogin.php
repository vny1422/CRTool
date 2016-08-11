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
		$data['title'] = 'CR Monitoring';
		$this->load->view('templates/headMain', $data);
		$this->load->helper('url_helper');
		$this->load->view('vLogin');
	}
    
    public function auth()
    {
        $data['username'] = "";
		if ($this->input->post())
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('user_model');
			if (($details = $this->user_model->sign_in($username, $password)) !== FALSE)
			{
                if ($details->SalesID !== NULL)
                {
				$this->session->set_userdata('id_user', $details->UserID);
                    redirect('home');
			}
            else{$data['username'] = $username;
				$this->session->set_flashdata('information', 'Wrong Username or Password !');
                }
            }
			else
			{
				$data['username'] = $username;
				$this->session->set_flashdata('information', 'Wrong Username or Password !');
			}
		}
        $data['title'] = 'CR Monitoring';
		$this->load->view('templates/headMain', $data);
		$this->load->helper('url_helper');
		$this->load->view('vLogin'); 
	}
        
}
