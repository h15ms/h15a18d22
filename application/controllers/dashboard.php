<?php
class dashboard extends CI_Controller
{
    
  public function __construct(){
    parent::__construct();
    $this->active['current_page'] = $this->uri->segment(1);
  }

  public function index() 
  { 

        if($_SESSION['logged_in']['user_id'] == ""){

            $this->load->view('template/header' , $this->active);   
            $this->load->view('login/index');   
            $this->load->view('template/footer');    
        }
        else
        {        
            $this->load->view('template/header' , $this->active);   
            $this->load->view('dashboard/index');   
            $this->load->view('template/footer');   
        }
  } 
  
  
}