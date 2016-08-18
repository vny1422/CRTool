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
		$this->load->helper('url_helper');
		$data['title'] = 'CR Monitoring';
		$this->load->view('templates/headMain', $data);
		//$this->load->view('templates/headAll');
		//$this->load->view('templates/vMenu');
		$this->load->view('vLogin');
		$this->load->view('templates/footer');
	}


}
