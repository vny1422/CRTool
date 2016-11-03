<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cDetailActivity extends CI_Controller {
  function __construct()
  {
    parent::__construct();
    $this->load->model('CR_model');
    $this->load->model('Outlet_model');
    $this->load->helper('url_helper');

  }

  public function index()
  {

  }

  public function detail($id)
  {
    $data['list'] = $this->CR_model->get_history($id);
    $data['listoutlet'] = array();
    foreach ($data['list'] as $row):
      array_push($data['listoutlet'],$this->Outlet_model->ambil_Outlet($row->IDOutlet));
    endforeach;
    $data['title'] = 'Detail Activity | CR Monitoring';
    $data['username'] = 'amazingharry95';
    $data['fullName'] = '';#ini belum
    $data['email'] = '';#ini email
    $data['halamanUtama'] = 0;
    $data['halaman'] = $this->CR_model->get_name($id);
    $this->load->view('templates/headAll', $data);
    $this->load->view('templates/vMenu');
    $this->load->view('halamanDetailActivity', $data);
    $this->load->view('templates/newFooter');
  }


}
