<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Base.php');
class Applycrm extends Base {

  function __construct()
  {
    parent:: __construct();
 		$this->load->model('admin/applyModelCrm','model');
    $this->isLoggedIn();
	}
  
  public function index() 
  {
     
    if($this->session_data['user_level'] == '1'){
      $applys = $this->model->allApplysAdmin(); 
    }elseif($this->session_data['user_level'] == '2'){
      $applys = $this->model->allApplysAgent($this->session_data['user_id']); 
    }

     $header = array('page_title' => 'All Applications | MiConsulting');
     $content = array('headline'=>'All Applications', 'applys'=>$applys);
     $this->getLayout('admin/applycrm/index', $header, $left, $content, $footer);

  }  

  public function agentapplication() 
  {
     $id = $this->session_data['user_id'];
     $applys = $this->model->agentapplication($id); 
     
     $header = array('page_title' => 'My Applications | MiConsulting');
     $content = array('headline'=>'My Applications', 'applys'=>$applys);
     $this->getLayout('admin/applycrm/index', $header, $left, $content, $footer);

  }

  public function profil(){
   
     $applys = $this->model->applyById($this->uri->segment('4'));

     $header = array('page_title' => 'Profile | MiConsulting');
     $content = array('headline'=> 'Applicant Profile','apply'=>$applys);
     $this->getLayout('admin/applycrm/profil', $header, $left, $content, $footer);

      
  }
  public function updateNotice(){
   
      $appid = $this->input->post('appid');
      $notice = $this->input->post('notice');
      $send = $this->input->post('send');

       if($send == "update_notice"){
          $update = $this->model->updateNotice($appid, $notice); 
          header('Location:'.base_url().'admin/applycrm/profil/'.$appid);
       }
  }

  public function updateStatus(){
    $send = $this->input->post('send');
    $appid = $this->input->post('appid');
    $status = $this->input->post('status');
    $embassy_id = $this->input->post('embassy_id');
    $visa_id = $this->input->post('visa_id');

    

    if(isset($send)){

      if($status == '1'){ // it will only update Embassy Id
        $this->model->updateEmbassyId($appid, $embassy_id, $status);
      }elseif($status == '2'){ // it will only update Visa Id
        $this->model->updateVisaId($appid, $visa_id, $status);
      }else{
        $this->model->updateStatus($appid, $status);
      }
      header('Location:'.base_url().'admin/applycrm/profil/'.$appid);
    }
  }

}
