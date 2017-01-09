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
                $this->load->library('session');

					if ($this->session->userdata('id_user') === NULL)
					{
							redirect('cLogin');
					}
     }

	public function index()
	{
		//JANGAN LUPA MASALAH OVERLAPPING MARKERS
		//ini cuma nyoba
		$head['title'] = 'Home | CR Monitoring';
		$head['halamanUtama'] = 1;
		$data['username'] = $this->session->userdata('id_user');
		$data['fullName'] = $this->session->userdata('name');
		$data['email'] = $this->session->userdata('email');
		$data['listonline'] = $this->CR_model->list_CR_online();
		$data['listoffline'] = $this->CR_model->list_CR_offline();
        $data['listwarning'] = $this->CR_model->list_warn();
		$data['listoutlet'] = array();
		foreach ($data['listonline'] as $row):
			array_push($data['listoutlet'], $this->Outlet_model->ambil_Outlet($row->CheckInPlace));
		endforeach;
		foreach ($data['listoffline'] as $row):
			array_push($data['listoutlet'], $this->Outlet_model->ambil_Outlet($row->CheckInPlace));
		endforeach;
        $data['countOnline'] = count($data['listonline']);
        $data['countOffline'] = count($data['listoffline']);
        $data['countWarning'] = count($data['listwarning']);
		$config = array();
		$config['center'] = 'Surabaya';
		$config['zoom'] = 'auto';
		$config['places'] = TRUE;
		$config['placesAutocompleteInputID'] = 'myPlaceTextBox';
		$config['placesAutocompleteBoundsMap'] = TRUE; // set results biased towards the maps viewport
		$config['placesAutocompleteOnChange'] = 'alert(\'You selected a place\');';
		$config['cluster'] = TRUE;
        $marker['position'] = ($data['listoutlet'][0]->Lat)-0.00009.', '.($data['listoutlet'][0]->Lng);;
        $marker['draggable'] = true;
        $marker['ondragend'] = 'bukaModal(event.latLng.lat(), event.latLng.lng());';
        $this->googlemaps->add_marker($marker);

		$this->googlemaps->initialize($config);

		$charval = 65;
		$i = 0;
		foreach ($data['listonline'] as $row):
			$marker = array();
			$marker['position'] = $data['listoutlet'][$i]->Lat.', '.$data['listoutlet'][$i]->Lng;
			$nama_orang = $row->Name;
			$nama_toko = $data['listoutlet'][$i]->Name;
            $checkin_time = $row->Day.'/'.$row->Month.'/'.substr($row->Year, -2).' '.$row->Hour.':'.$row->Minute.' WIB';
			//$checkin_time = $row->CheckInDate;
			$kodePerson = chr($charval);
			$marker['infowindow_content'] = '<a href="./cDetailActivity/detail/'.$row->ID.'" target="_blank"><h3>'.$nama_orang."</h3></a><p>Outlet: ".$nama_toko."</p><p>Check-In Time: ".$checkin_time."</p>";
			$marker['icon'] = "http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=".$kodePerson."|00FF00|000000";
			$marker['animation'] = 'BOUNCE';
			$this->googlemaps->add_marker($marker);
			$charval = $charval+1;
			$i=$i+1;
		endforeach;
		foreach ($data['listoffline'] as $row):
			$marker = array();
			$marker['position'] = $data['listoutlet'][$i]->Lat.', '.$data['listoutlet'][$i]->Lng;
			$nama_orang = $row->Name;
			$nama_toko = $data['listoutlet'][$i]->Name;
         $checkin_time = $row->Day.'/'.$row->Month.'/'.substr($row->Year, -2).' '.$row->Hour.':'.$row->Minute.' WIB';
			//$checkin_time = $row->CheckInDate;
			$kodePerson = chr($charval);
			$marker['infowindow_content'] = '<a href="./cDetailActivity/detail/'.$row->ID.'" target="_blank"><h3>'.$nama_orang."</h3></a><p>Nama toko: ".$nama_toko."</p><p>Check-In Time: ".$checkin_time."</p>";
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

	public function cekBermasalah(){
		$data['thres'] = $this->input->post('jumlah_minimum', TRUE);
		$thres = $data['thres'];
		$head['title'] = 'Home | CR Monitoring';
		$head['halamanUtama'] = 1;
		$data['username'] = $this->session->userdata('id_user');
		$data['fullName'] = $this->session->userdata('name');
		$data['email'] = $this->session->userdata('email');
		$data['listwarning'] = $this->CR_model->list_warn();
		$data['listonline'] = $this->CR_model->list_CR_online();
		$data['listoffline'] = $this->CR_model->list_CR_offline();
		$data['countOnline'] = count($data['listonline']);
		$data['countOffline'] = count($data['listoffline']);
        $data['countWarning'] = count($data['listwarning']);
		$data['listoutlet'] = array();
		foreach ($data['listonline'] as $row):
			array_push($data['listoutlet'], $this->Outlet_model->ambil_Outlet($row->CheckInPlace));
		endforeach;
		foreach ($data['listoffline'] as $row):
			array_push($data['listoutlet'], $this->Outlet_model->ambil_Outlet($row->CheckInPlace));
		endforeach;
		$data['listoutletwarning'] = array();
		foreach ($data['listwarning'] as $row):
			array_push($data['listoutletwarning'], $this->Outlet_model->ambil_Outlet($row->IDOutlet));
		endforeach;
		$config = array();
		$config['center'] = 'Surabaya';
		$config['zoom'] = 'auto';
		$config['places'] = TRUE;
		$config['cluster'] = TRUE;

		$this->googlemaps->initialize($config);
		$j = 0;
		foreach($data['listwarning'] as $row):
			if($row->TotalRecords < $thres)
			{
				$marker = array();
				$marker['position'] = $data['listoutletwarning'][$j]->Lat.', '.$data['listoutletwarning'][$j]->Lng;
				$nama_toko_bermasalah = $data['listoutletwarning'][$j]->Name;
				$marker['infowindow_content'] = '<h3>'.$nama_toko_bermasalah."</h3><p>Jl. Margorejo Indah No. 97-99 Margorejo Wonocolo Surabaya Jawa Timur, Sidosermo, Wonocolo, Kota SBY, Jawa Timur 60238";
				$marker['icon'] = base_url('images/caution.png');
				$this->googlemaps->add_marker($marker);
			}
			$j = $j+1;
		endforeach;
		$charval = 65;
		$i = 0;
		foreach ($data['listonline'] as $row):
			$marker = array();
			$marker['position'] = $data['listoutlet'][$i]->Lat.', '.$data['listoutlet'][$i]->Lng;
			$nama_orang = $row->Name;
			$nama_toko = $data['listoutlet'][$i]->Name;
			$checkin_time = $row->CheckInDate;
			$kodePerson = chr($charval);
			$marker['infowindow_content'] = '<a href="./cDetailActivity/detail/'.$row->ID.'" target="_blank"><h3>'.$nama_orang."</h3></a><p>Nama toko: ".$nama_toko."</p><p>Check-In Time: ".$checkin_time."</p>";
			$marker['icon'] = "http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=".$kodePerson."|00FF00|000000";
			$marker['animation'] = 'BOUNCE';
			$this->googlemaps->add_marker($marker);
			$charval = $charval+1;
			$i=$i+1;
		endforeach;
		foreach ($data['listoffline'] as $row):
			$marker = array();
			$marker['position'] = $data['listoutlet'][$i]->Lat.', '.$data['listoutlet'][$i]->Lng;
			$nama_orang = $row->Name;
			$nama_toko = $data['listoutlet'][$i]->Name;
			$checkin_time = $row->CheckInDate;
			$kodePerson = chr($charval);
			$marker['infowindow_content'] = '<a href="./cDetailActivity/detail/'.$row->ID.'" target="_blank"><h3>'.$nama_orang."</h3></a><p>Nama toko: ".$nama_toko."</p><p>Check-In Time: ".$checkin_time."</p>";
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

	}

	public function getOfflineCR(){
		//buat ambil data-data yg sedang offline --> array('name', 'last place check in', 'time')
	}
    
    public function addNewStore(){
        $nama = $this->input->post('nama_lokasi', TRUE);
        $alamat = $this->input->post('alamat_lokasi', TRUE);
        $lat = $this->input->post('latitude', TRUE);
        $long = $this->input->post('longitude', TRUE);
        echo "cobanama: ",$nama;
        print_r($this->input->post('nama_lokasi'));
        
        $data = array(
                'Name' => $nama,
                'Address' => $alamat,
                'Lat' => $lat,
                'Lng' => $long
        );

        if($this->Outlet_model->insertStore($data)){
            echo '<script>alert("SAVE NEW STORE!");</script>';
            redirect('cHalamanUtama');
        }else{
            echo '<script>alert("FAILE TO SAVE NEW STORE");location.reload(true);</script>';
        }
        
        //redirect('cHalamanUtama');
        
    }


}
