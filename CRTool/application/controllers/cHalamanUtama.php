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
		//JANGAN LUPA MASALAH OVERLAPPING MARKERS
		//ini cuma nyoba
		$data['title'] = 'Home | CR Monitoring';
		$data['username'] = 'amazingharry95';
		$data['fullName'] = '';#ini belum
		$data['email'] = '';#ini email
		$data['halamanUtama'] = 1;

		$config = array();
		$config['center'] = 'Surabaya';
		$config['zoom'] = 'auto';

		$this->googlemaps->initialize($config);

		$marker = array();
		$marker['position'] = '-7.316806, 112.749251';
		$nama_toko_bermasalah = "DAYTONA AXIOO";
		$marker['infowindow_content'] = '<h3>'.$nama_toko_bermasalah."</h3><p>Jl. Margorejo Indah No. 97-99 Margorejo Wonocolo Surabaya Jawa Timur, Sidosermo, Wonocolo, Kota SBY, Jawa Timur 60238";
		$marker['icon'] = base_url('images/caution.png');
		$this->googlemaps->add_marker($marker);

		$marker = array();
		$marker['position'] = '-7.252541, 112.750421';
		$nama_orang = "Budi Pangestu";
		$nama_toko = "Hi-tech Mall";
		$checkin_time = "19.00 WIB";
		$kodePerson = 'B';
		$marker['infowindow_content'] = "<a href=./cDetailActivity><h3>".$nama_orang."</h3></a><p>Nama toko: ".$nama_toko."</p><p>Check-In Time: ".$checkin_time."</p>";
		$marker['icon'] = "http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=".$kodePerson."|FF0000|000000";
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

	public function cekBermasalah($kriteria, $jumlahMin){
		//ini buat cek masalah, kalau masalah brti, add_maker yang danger!

		//contoh danger toko

		/*
			$marker = array();
			$marker['position'] = '-7.316806, 112.749251';
			$nama_toko_bermasalah = "DAYTONA AXIOO";
			$marker['infowindow_content'] = '<h3>'.$nama_toko_bermasalah."</h3><p>Jl. Margorejo Indah No. 97-99 Margorejo Wonocolo Surabaya Jawa Timur, Sidosermo, Wonocolo, Kota SBY, Jawa Timur 60238";
			$marker['icon'] = base_url('images/caution.png');
			$this->googlemaps->add_marker($marker);
		*/
	}


}
