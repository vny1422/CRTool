<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cAchievement extends CI_Controller {
  function __construct()
    {
                parent::__construct();
                $this->load->helper('url_helper');
                $this->load->model('CR_model');
                $this->load->model('Outlet_model');
                if ($this->session->userdata('id_user') === NULL)
                {
                    redirect('cLogin');
                }

     }

  public function index()
  {
    $head['title'] = 'Achievement | CR Monitoring';
    $data['username'] = 'amazingharry95';
    $data['fullName'] = 'HARIYANTO';#ini belum
    $data['email'] = 'amazingharry95@gmail.com';#ini email
    $head['halamanUtama'] = 0;
    $judulHalaman['halaman'] = "MY CR ACHIEVEMENT";
    $this->load->model('CR_model');
    $this->load->model('Outlet_model');
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
    $data['listcr'] = $this->CR_model->list_CR();

    //$query = $this->CR_model->ambil_namaCR();
    //var_dump($query[0]->Name);
    //var_dump($query[0]->CheckInPlace);
    $judul['halaman'] = "ACHIEVEMENT REPORT";

    $this->load->view('templates/headSalesOut', $head);
    $this->load->view('templates/vMenu', $data);
    $this->load->view('halamanAchievement', $judulHalaman);
    $this->load->view('templates/footerSalesOut');

    /*$this->load->view('templates/newHeadAll', $data);
    $this->load->view('templates/newVMenu');
    $this->load->view('newHalamanAchievement', $judulHalaman);
    $this->load->view('templates/footer');*/
  }

  public function getAchievement()
  {
    $idcr = $this->input->post('idcr',TRUE);
    $data['achievement'] = $this->Outlet_model->achievement($idcr);
    $data['listapprove'] = array();
foreach ($data['achievement'] as $row):
    array_push($data['listapprove'],$this->Outlet_model->count_approve($row->Month,$row->Year));
endforeach;

$data['listreturn'] = array();
foreach ($data['achievement'] as $row):
    array_push($data['listreturn'],$this->Outlet_model->count_return($row->Month,$row->Year));
endforeach;

$data['listtarget'] = array();
foreach ($data['achievement'] as $row):
    array_push($data['listtarget'],$this->CR_model->ambil_target($idcr,$row->Month,$row->Year));
endforeach;
    $complete_data = array();
    $i = 0;
    foreach ($data['achievement'] as $row):
      array_push($complete_data, (object) array("month" => $row->MonthName.' '.$row->Year, "approve" => $data['listapprove'][$i]->TotalRecords, "return" => $data['listreturn'][$i]->TotalRecords, "income" => $row->TotalAmount, "target" => $data['listtarget'][$i]->TargetAmount));
      $i = $i+1;
    endforeach;

echo json_encode($complete_data);
}


}
