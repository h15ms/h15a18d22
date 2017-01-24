<?php
class Sitemap extends CI_Controller {


  private $_view;

    
  public function __construct() 
  {
    parent:: __construct();

  }
    
  public function index() 
  {      
   
   $this->load->view('template/header');
   $this->load->view('sitemap/index');
   $this->load->view('template/footer');

  }  
  
}
