<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cDetailActivity extends CI_Controller {
  function __construct()
  {
    parent::__construct();
    $this->load->helper('url_helper');
               
  }

  public function index()
  {
    $data['title'] = 'Detail Activity | CR Monitoring';
    $data['username'] = 'amazingharry95';
    $data['fullName'] = '';#ini belum
    $data['email'] = '';#ini email
    $data['halamanUtama'] = 0;
    $judul['halaman'] = 'CR DETAIL ACTIVITY';
    $this->load->view('templates/newHeadAll', $data);
    $this->load->view('templates/newVMenu');
    $this->load->view('newHalamanDetailActivity', $judul);
    $this->load->view('templates/footer');
  }


}
