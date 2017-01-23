<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class about extends CI_Controller {

  public function __construct()
  {
    parent:: __construct();
    $this->active['current_page'] = $this->uri->segment(1);
  }
  
  public function index() 
  {      

 $data=array('headline' => 'About','title'=>"About | MiConsulting.in");
     $this->load->view('template/header' , $data);
     $this->load->view('about/index.php');
     $this->load->view('template/footer');
  }  
  
}