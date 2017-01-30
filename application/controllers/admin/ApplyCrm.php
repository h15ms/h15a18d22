<?php
class ApplyCrm extends CI_Controller {

  function __construct()
	{
		parent::__construct();                

   $sess = $this->session->userdata();
   if($sess['logged_in']['user_level'] != '1' && $sess['logged_in']['user_level_status'] != '1' ){

     header ('Location:'.base_url().'home ');
   }
   elseif($sess['logged_in']['user_level'] != '2' && $sess['logged_in']['user_level_status'] != '1'){
     
     header ('Location:'.base_url().'home ');
   }

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('admin/applyModelCrm','app');
    
	}
  
  public function index() 
  {
    $applys = $this->app->allApplys(); 

     $data=array('headlines' => 'All Applies','applys'=>$applys);
     $data1=array('page_title'=>"All Applies | MiConsulting");
     
     
     $this->load->view('admin/temp/headercrm',$data1);
     $this->load->view('admin/applycrm/index',$data);
     $this->load->view('admin/temp/footercrm');
  }  
  public function profil(){
   
       $applys = $this->app->applyById($this->uri->segment('4')); 
       $data=array('headline' => 'Applicant Profile','apply'=>$applys);
     $data1=array('page_title'=>"Profile | MiConsulting");
     
      $this->load->view('admin/temp/headercrm',$data1);
     $this->load->view('admin/applycrm/profil',$data);
     $this->load->view('admin/temp/footercrm');
      
  }
  public function updateNotice(){
   
      $appid = $this->input->post('appid');
      $notice = $this->input->post('notice');
      $send = $this->input->post('send');

       if($send == "update_notice"){
          $update = $this->app->updateNotice($appid, $notice); 

          header('Location:'.base_url().'admin/applycrm/profil/'.$appid);

       }
     
      
  }

}
