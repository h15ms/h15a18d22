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
      $data=array('headline' => 'Service','title'=>"Service for Indian Visa | MiConsulting.in");
    $this->load->view('template/header' , $data);
		$this->load->view('services/index');
		$this->load->view('template/footer');
  } 
    
  public function visaservices() 
  {     
      $data=array('headline' => 'Visa Services','title'=>"Visa Services Service for India | MiConsulting.in");
    $this->load->view('template/header' , $data);
		$this->load->view('services/visaservices');
		$this->load->view('template/footer');
  }  
    
  public function businessservices() 
  {  
     $data=array('headline' => 'Business Service','title'=>"Business Service for India | MiConsulting.in");
    $this->load->view('template/header' , $data);
		$this->load->view('services/businessservices');
		$this->load->view('template/footer');
  }    
    
  public function passportservices() 
  {      
       $data=array('headline' => 'Passport Service','title'=>"Passport Service for India | MiConsulting.in");
    $this->load->view('template/header' , $data);
		$this->load->view('services/passportservices');
		$this->load->view('template/footer');
  }     
    
  public function travelingservices() 
  {  
       $data=array('headline' => 'Traveling Service','title'=>"Traveling Service for India | MiConsulting.in");
    $this->load->view('template/header' , $data);
		$this->load->view('services/travelingservices');
    $this->load->view('template/footer');
  }      
    
  public function ticketingservices() 
  {   
       $data=array('headline' => 'Ticketing Service','title'=>"Ticketing Service for India | MiConsulting.in");
    $this->load->view('template/header' , $data);
		$this->load->view('services/ticketingservices');
		$this->load->view('template/footer');
  }       
    
  public function medicalservices() 
  {      
       $data=array('headline' => 'Medical Service','title'=>"Medical Service for India | MiConsulting.in");
    $this->load->view('template/header' , $data);
		$this->load->view('services/medicalservices');
		$this->load->view('template/footer');
  }       
    
  public function touristvisa()       
  {      
       $data=array('headline' => 'Tourism Visa Service','title'=>"Tourism Visa Service for India | MiConsulting.in");
    $this->load->view('template/header' , $data);
		$this->load->view('services/tourismservices');
		$this->load->view('template/footer');
  }        
    
  public function accommodationservices() 
  {      
       $data=array('headline' => 'Accommodation Service','title'=>"Accommodation Service for India | MiConsulting.in");
    $this->load->view('template/header' , $data);
		$this->load->view('services/accommodationservices');
		$this->load->view('template/footer');
  }         
    
  public function entertainmentservices() 
  {      $data=array('headline' => 'Entertainment Service','title'=>"Entertainment Service for India | MiConsulting.in");
    $this->load->view('template/header' , $data);
    $this->load->view('services/entertainmentservices');
    $this->load->view('template/footer');
    
  }  
  
}