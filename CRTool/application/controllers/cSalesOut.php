<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cSalesOut extends CI_Controller {
  function __construct()
  {
    parent::__construct();
    $this->load->model('CR_model');
    if ($this->session->userdata('id_user') === NULL)
    {
        redirect('cLogin');
    }
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
    $data['listonline'] = $this->CR_model->list_CR_online();
    $data['listoffline'] = $this->CR_model->list_CR_offline();
    $data['listoutlet'] = array();
		foreach ($data['listonline'] as $row):
			array_push($data['listoutlet'], $this->Outlet_model->ambil_Outlet($row->CheckInPlace));
		endforeach;
		foreach ($data['listoffline'] as $row):
			array_push($data['listoutlet'], $this->Outlet_model->ambil_Outlet($row->CheckInPlace));
		endforeach;
    $data['countOnline'] = count($data['listonline']);
    $data['countOffline'] = count($data['listoffline']);
    $data['listcr'] = $this->CR_model->list_CR();
   /* $data['outletCR'] = $this->Outlet_model->ambilOutletAssignCR(3); //3 ini budi
    $data['listOutlet'] = array();
    foreach ($data['outletCR'] as $row):
      array_push($data['listOutlet'], $this->Outlet_model->ambil_Outlet($row->ID));
    endforeach;*/
    $judul['halaman'] = "SALES OUT'S REPORT";

    $this->load->view('templates/headSalesOut', $data);
    $this->load->view('templates/vMenu', $data);
    $this->load->view('halamanSalesOut', $judul);
    $this->load->view('templates/footerSalesOut');
  }

  public function barangTerjualOutlet($idOutlet){
    $data['title'] = 'Sales Out | CR Monitoring';
    $data['username'] = 'amazingharry95';
    $data['fullName'] = 'HARIYANTO';#ini belum
    $data['email'] = 'amazingharry95@gmail.com';#ini email
    $data['halamanUtama'] = 0;
    $data['listonline'] = $this->CR_model->list_CR_online();
    $data['listoffline'] = $this->CR_model->list_CR_offline();
    $data['listoutlet'] = array();
		foreach ($data['listonline'] as $row):
			array_push($data['listoutlet'], $this->Outlet_model->ambil_Outlet($row->CheckInPlace));
		endforeach;
		foreach ($data['listoffline'] as $row):
			array_push($data['listoutlet'], $this->Outlet_model->ambil_Outlet($row->CheckInPlace));
		endforeach;
    $data['countOnline'] = count($data['listonline']);
    $data['countOffline'] = count($data['listoffline']);
   /* $data['outletCR'] = $this->Outlet_model->ambilOutletAssignCR(3); //3 ini budi
    $data['listOutlet'] = array();
    foreach ($data['outletCR'] as $row):
      array_push($data['listOutlet'], $this->Outlet_model->ambil_Outlet($row->ID));
    endforeach;*/
    $judul['namaCR'] = $idOutlet;
    $judul['halaman'] = "SALES OUT'S REPORT";

    $this->load->view('templates/headSalesOut', $data);
    $this->load->view('templates/vMenu', $data);
    $this->load->view('halamanOutletBarang', $judul);
    $this->load->view('templates/footerSalesOut');
  }

  public function getSalesOut()
  {
    $idcr = $this->input->post('idcr',TRUE);
    $data['salesout'] = $this->Outlet_model->sales_Out($idcr);
    $data['listoutlet'] = array();
foreach ($data['salesout'] as $row):
    array_push($data['listoutlet'],$this->Outlet_model->ambil_outlet($row->OutletID));
endforeach;
    $complete_data = array();
    $i = 0;
    foreach ($data['salesout'] as $row):
      array_push($complete_data, (object) array("nama" => $data['listoutlet'][$i]->Name, "address" => $data['listoutlet'][$i]->Address, "jumlah" => $row->TotalRecords));
      $i = $i+1;
    endforeach;

    echo json_encode($complete_data);
  }


}
