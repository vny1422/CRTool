<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cSalesOut extends CI_Controller {
  function __construct()
  {
    parent::__construct();
    $this->load->model('Outlet_model');
    $this->load->helper('url_helper');      
  }

  public function index()
  {
    $data['title'] = 'Sales Out | CR Monitoring';
    $data['username'] = 'amazingharry95';
    $data['fullName'] = '';#ini belum
    $data['email'] = '';#ini email
    $data['halamanUtama'] = 0;
   /* $data['outletCR'] = $this->Outlet_model->ambilOutletAssignCR(3); //3 ini budi
    $data['listOutlet'] = array();
    foreach ($data['outletCR'] as $row):
      array_push($data['listOutlet'], $this->Outlet_model->ambil_Outlet($row->ID));
    endforeach;*/
    $judul['halaman'] = "SALES OUT'S REPORT";
    
    $this->load->view('templates/headAll', $data);
    $this->load->view('templates/vMenu');
    $this->load->view('halamanSalesOut', $judul);
    $this->load->view('templates/newfooter');
  }


}
