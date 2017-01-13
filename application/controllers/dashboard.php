<?php
class dashboard extends CI_Controller
{
    
  public function __construct(){
    parent::__construct();

    // Load database
    //$this->load->model('login_model','login_model');
  }

  public function index() 
  { 

        if($_SESSION['logged_in']['user_id'] == ""){
                header('Location: '.base_url().'/login'); 
        }
        else
        {        
            $this->load->view('template/header');   
            $this->load->view('dashboard/index');   
            $this->load->view('template/footer');   
        }
  } 
  
  
}