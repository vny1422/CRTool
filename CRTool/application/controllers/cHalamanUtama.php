<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cHalamanUtama extends CI_Controller {
	function __construct()
    {
                parent::__construct();
                $this->load->helper('url_helper');
               
     }

	public function index()
	{
		//ini cuma nyoba
		$this->load->helper('url_helper');
		$data['title'] = 'Home | CR Monitoring';
		$data['username'] = 'amazingharry95';
		$data['fullName'] = '';#ini belum
		$data['email'] = '';#ini email
		$this->load->view('templates/vMenu');
		$this->load->view('templates/headAll', $data);
		$this->load->view('templates/footer');
	}


}
