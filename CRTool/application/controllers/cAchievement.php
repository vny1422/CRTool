<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cAchievement extends CI_Controller {
  function __construct()
    {
                parent::__construct();
                $this->load->helper('url_helper');
               
     }

  public function index()
  {
    $data['title'] = 'Home | CR Monitoring';
    $data['username'] = 'amazingharry95';
    $data['fullName'] = '';#ini belum
    $data['email'] = '';#ini email
    $data['halamanUtama'] = 0;
    $this->load->view('templates/headAll', $data);
    $this->load->view('templates/vMenu');
    $this->load->view('halamanAchievement');
    //$this->load->view('templates/footer');
  }


}
