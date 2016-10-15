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
    $this->load->model('CR_model');
    $query = $this->CR_model->ambil_namaCR();
    var_dump($query[0]->Name);
    var_dump($query[0]->CheckInPlace);
    //$this->load->view('templates/headAll', $data);
    //$this->load->view('templates/vMenu');
    //$this->load->view('halamanAchievement');
    //$this->load->view('templates/footer');
  }


}
