<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Base.php');
class Homecrm extends Base {


  function __construct()
  {
    parent:: __construct(); 
    $this->isLoggedIn();
    $this->load->model('admin/HomeModelCrm' , 'model');  
  }


  public function index() {

    $countnewapplys = $this->model->countNewApplys();
    $countApplys = $this->model->countApplys();
    $allNewApplys = $this->model->allNewApplys();
    $allUpdatedApplys = $this->model->allUpdatedApplys();              
       
    $header = array('page_title' => 'Dashboard | MiConsulting');
    $content = array('headline' => "Dashboard", 'countnewapplys' => $countnewapplys, 'countapplys' => $countApplys, 'allnewapplys' => $allNewApplys, 'allupdatedapplys' => $allUpdatedApplys);

    $this->getLayout('admin/homecrm/index', $header, $left, $content, $footer);


  }  

  public function hello() {

    echo "<pre>";
        print_r($this->access());
    exit;

  }
    
  public function applyprofil() {
      
    $apply = $this->model->applyById($this->uri->segment('4')); 
    $header = array('page_title' => 'Application Profile | MiConsulting');
    $content = array('headline'=>'Application Profile','apply' => $apply);

    $this->getLayout('admin/applycrm/profil', $header, $left, $content, $footer);

  } 

    public function editProfile() {

      $out = $this->model->editProfile($this->session_data['user_id']);

      $header = array('page_title' => 'Application Profile | MiConsulting');
      $content = array('headline'=>'Edit Profile','data' => $out['0']);

      $this->getLayout('admin/homecrm/editprofile', $header, $left, $content, $footer); 
  
    }

    public function editProfileAction() {
         
      $data = array(
        'firstname' => $this->input->post('firstname'),
        'lastname' => $this->input->post('lastname'),
        'street' => $this->input->post('street'),
        'zip' => $this->input->post('zip'),
        'city' => $this->input->post('city'),
        'email' => $this->input->post('email'),
        'phone' => $this->input->post('phone'),
        'avatar' => $this->input->post('avatar')
        );

      $out = $this->model->editProfileAction($data);
      echo $out;
      
    }
 
  
}
