<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hospital extends CI_Controller {

  public function __construct()
  {
    parent:: __construct();
    error_reporting(0);
    $this->active['current_page'] = $this->uri->segment(1);
  }
  
  public function index() 
  {  
      $timearray= unserialize(TIME_ARRAY);
    // echo $timearray[$time];
$timejson= json_encode($timearray); 
$data=array('timejson'=>$timejson);
     $this->load->view('template/header');
     $this->load->view('hospital/index.php',$data);
     $this->load->view('template/footer',$data);
  }  
  
  
  
  
  public function result() 
  {      
	 $this->load->view('template/header');
     $this->load->view('hospital/result.php');
     $this->load->view('template/footer');
     
     
     
     
     
     
     
  } 
  
  public function gettimearray(){
       $time=$_GET['time'];
      $timearray= unserialize(TIME_ARRAY);
     echo $timearray[$time];
$timejson= json_encode($timearray);

      
      
  }
  
  
  
  
  
  
  
  
  }


?>