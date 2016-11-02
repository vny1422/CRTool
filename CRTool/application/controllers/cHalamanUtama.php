<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cHalamanUtama extends CI_Controller {
	function __construct()
    {
                parent::__construct();
								$this->load->model('CR_model');
								$this->load->model('Outlet_model');
                $this->load->helper('url_helper');
                $this->load->library('googlemaps');

     }

	public function index()
	{
		//JANGAN LUPA MASALAH OVERLAPPING MARKERS
		//ini cuma nyoba
		$head['title'] = 'Home | CR Monitoring';
		$head['halamanUtama'] = 1;
		$data['username'] = 'amazingharry95'; #dari model
		$data['fullName'] = 'HARIYANTO';#dari model
		$data['email'] = 'amazingharry95@gmail.com';#dari model
		$data['list'] = $this->CR_model->list_CR();
		$data['listoutlet'] = array();
		foreach ($data['list'] as $row):
			array_push($data['listoutlet'], $this->Outlet_model->ambil_Outlet($row->CheckInPlace));
		endforeach;
		$config = array();
		$config['center'] = 'Surabaya';
		$config['zoom'] = 'auto';
		$config['places'] = TRUE;
		$config['placesAutocompleteInputID'] = 'myPlaceTextBox';
		$config['placesAutocompleteBoundsMap'] = TRUE; // set results biased towards the maps viewport
		$config['placesAutocompleteOnChange'] = 'alert(\'You selected a place\');';
		$config['cluster'] = FALSE;

		$this->googlemaps->initialize($config);

		$marker = array();
		$marker['position'] = '-7.316806, 112.749251';
		$nama_toko_bermasalah = "DAYTONA AXIOO";
		$marker['infowindow_content'] = '<h3>'.$nama_toko_bermasalah."</h3><p>Jl. Margorejo Indah No. 97-99 Margorejo Wonocolo Surabaya Jawa Timur, Sidosermo, Wonocolo, Kota SBY, Jawa Timur 60238";
		$marker['icon'] = base_url('images/caution.png');
		$this->googlemaps->add_marker($marker);

		$charval = 65;
		$i = 0;
		foreach ($data['list'] as $row):
			$marker = array();
			$marker['position'] = $data['listoutlet'][$i]->Lat.', '.$data['listoutlet'][$i]->Lng;
			$nama_orang = $row->Name;
			$nama_toko = $data['listoutlet'][$i]->Name;
			$checkin_time = $row->CheckInDate;
			$kodePerson = chr($charval);
			$marker['infowindow_content'] = '<a href="./cDetailActivity" target="_blank"><h3>'.$nama_orang."</h3></a><p>Nama toko: ".$nama_toko."</p><p>Check-In Time: ".$checkin_time."</p>";
			$marker['icon'] = "http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=".$kodePerson."|FF0000|000000";
			$marker['animation'] = 'BOUNCE';
			$this->googlemaps->add_marker($marker);
			$charval = $charval+1;
			$i=$i+1;
		endforeach;
		//
		$head['map'] = $this->googlemaps->create_map();
		$data['halaman'] = "CR's POSITION";

        //baru

		$this->load->view('templates/headAll', $head);
        $this->load->view('templates/vMenu', $data);
		$this->load->view('halamanUtama', $data);
		$this->load->view('templates/newFooter');

        //lama
        /*
        $this->load->view('templates/newHeadAll', $head);
        $this->load->view('templates/newVMenu', $data);
        $this->load->view('newHalamanUtama', $data);
        $this->load->view('templates/footer');*/
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

	public function getOfflineCR(){
		//buat ambil data-data yg sedang offline --> array('name', 'last place check in', 'time')
	}


}
