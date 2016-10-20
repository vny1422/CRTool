<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cSalesOut extends CI_Controller {
  function __construct()
  {
    parent::__construct();
    $this->load->helper('url_helper');
               
  }

  public function index()
  {
    $data['title'] = 'Sales Out | CR Monitoring';
    $data['username'] = 'amazingharry95';
    $data['fullName'] = '';#ini belum
    $data['email'] = '';#ini email
    $data['halamanUtama'] = 0;
    $judul['halaman'] = "SALES OUT'S REPORT";
    $this->load->view('templates/newHeadAll', $data);
    $this->load->view('templates/newVMenu');
    $this->load->view('newHalamanSalesOut', $judul);
    $this->load->view('templates/footer');
  }


}
