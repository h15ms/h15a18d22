<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class service  extends CI_Controller {


  public function __construct()
  {
    parent:: __construct();
    $this->active['current_page'] = $this->uri->segment(1); // for every controller active page
    $this->active['current_sub_page'] = $this->uri->segment(2); //for nested_nav in view/services/service_nav.php
  }
    
  public function index() 
  {      
    $this->load->view('template/header' , $this->active);
		$this->load->view('services/index');
		$this->load->view('template/footer');
  } 
    
  public function visaservices() 
  {     
      
    $this->load->view('template/header' , $this->active);
		$this->load->view('services/visaservices');
		$this->load->view('template/footer');
  }  
    
  public function businessservices() 
  {      
    $this->load->view('template/header' , $this->active);
		$this->load->view('services/businessservices');
		$this->load->view('template/footer');
  }    
    
  public function passportservices() 
  {      
    $this->load->view('template/header' , $this->active);
		$this->load->view('services/passportservices');
		$this->load->view('template/footer');
  }     
    
  public function travelingservices() 
  {      
    $this->load->view('template/header' , $this->active);
		$this->load->view('services/travelingservices');
    $this->load->view('template/footer');
  }      
    
  public function ticketingservices() 
  {   
    $this->load->view('template/header' , $this->active);
		$this->load->view('services/ticketingservices');
		$this->load->view('template/footer');
  }       
    
  public function medicalservices() 
  {      
    $this->load->view('template/header' , $this->active);
		$this->load->view('services/medicalservices');
		$this->load->view('template/footer');
  }       
    
  public function touristvisa()       
  {      
    $this->load->view('template/header' , $this->active);
		$this->load->view('services/tourismservices');
		$this->load->view('template/footer');
  }        
    
  public function accommodationservices() 
  {      
    $this->load->view('template/header' , $this->active);
		$this->load->view('services/accommodationservices');
		$this->load->view('template/footer');
  }         
    
  public function entertainmentservices() 
  {     
    $this->load->view('template/header' , $this->active);
    $this->load->view('services/entertainmentservices');
    $this->load->view('template/footer');
    
  }  
  
}