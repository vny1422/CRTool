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
}
