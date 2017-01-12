<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class about extends CI_Controller {
  

  
  public function index() 
  {      
//    $this->_view->title = "About | MiConsulting.in";
//    $this->_view->description = "";
//    $this->_view->headline = "About";
//    $this->_view->canonical = URL."about/";
//    $this->_view->display('about/index.php');
     $this->load->view('template/header');
     $this->load->view('about/index.php');
     $this->load->view('template/footer');
  }  
  
}