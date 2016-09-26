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

		$marker = array();
		$marker['position'] = '-7.316806, 112.749251';
		$marker['infowindow_content'] = '1 - Agus Setiawan';
		$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
		$this->googlemaps->add_marker($marker);

		$marker = array();
		$marker['position'] = '-7.252541, 112.750421';
		$marker['infowindow_content'] = '2 - Budi Pangestu';
		$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=B|FF0000|000000';
		$this->googlemaps->add_marker($marker);

		$marker = array();
		$marker['position'] = '-7.316307, 112.748688';
		$marker['infowindow_content'		] = '3 - Nanang Taufan';
		$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=C|FFFF00|000000';
		$this->googlemaps->add_marker($marker);

		$data['map'] = $this->googlemaps->create_map();

		$this->load->view('templates/vMenu');
		$this->load->view('templates/headAll', $data);
		$this->load->view('halamanUtama', $data['map']);
		$this->load->view('templates/footer');
	}


}
