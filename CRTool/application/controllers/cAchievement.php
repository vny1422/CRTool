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
    $data['fullName'] = 'HARIYANTO';#ini belum
    $data['email'] = 'amazingharry95@gmail.com';#ini email
    $data['halamanUtama'] = 0;
    $judulHalaman['halaman'] = "MY CR ACHIEVEMENT";
    $this->load->model('CR_model');
    $query = $this->CR_model->ambil_namaCR();
    //var_dump($query[0]->Name);
    //var_dump($query[0]->CheckInPlace);
    $this->load->view('templates/newHeadAll', $data);
    $this->load->view('templates/newVMenu');
    $this->load->view('newHalamanAchievement', $judulHalaman);
    $this->load->view('templates/footer');
  }


}
