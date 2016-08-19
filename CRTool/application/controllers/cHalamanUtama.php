<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cHalamanUtama extends CI_Controller {
	function __construct()
    {
                parent::__construct();
                $this->load->helper('url_helper');
                $this->load->library('googlemaps');
               
     }

	public function index()
	{
		//ini cuma nyoba
		$data['title'] = 'Home | CR Monitoring';
		$data['username'] = 'amazingharry95';
		$data['fullName'] = '';#ini belum
		$data['email'] = '';#ini email

		$config = array();
		$config['center'] = 'Surabaya';
		$config['zoom'] = 'auto';

		$this->googlemaps->initialize($config);
		$data['map'] = $this->googlemaps->create_map();

		$this->load->view('templates/vMenu');
		$this->load->view('templates/headAll', $data);
		$this->load->view('halamanUtama', $data['map']);
		$this->load->view('templates/footer');
	}


}
