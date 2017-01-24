<?php

class HomeCrm extends CI_Controller {


  public function __construct() {
      
      parent:: __construct();
      $this->load->model('admin/homeModelCrm' , 'hmc');
      
  }
  public function index() {
      
      $countnewapplys = $this->hmc->countNewApplys();
      $countApplys = $this->hmc->countApplys();
      $allNewApplys = $this->hmc->allNewApplys();
      $allUpdatedApplys = $this->hmc->allUpdatedApplys();

      $data = array(
          'headline' => "Dashboard",
          'countnewapplys' => $countnewapplys,
          'countapplys' => $countApplys,
          'allnewapplys' => $allNewApplys,
          'allupdatedapplys' => $allUpdatedApplys
      );
        $data1=array('page_title'=>"Dashboard | MiConsulting");
        $this->load->view('admin/temp/headercrm' , $data1);
        $this->load->view('admin/homecrm/index', $data);
        $this->load->view('admin/temp/footercrm');
    }
    
 public function applyprofil() {
      
      $apply = $this->hmc->applyById($this->uri->segment('4')); 
   
      $data = array(
          'headline' => "Application Profile",
          'apply' => $apply);
        $data1=array('page_title'=>"Application Profile | MiConsulting");
        $this->load->view('admin/temp/headercrm' , $data1);
        $this->load->view('admin/applycrm/profil', $data);
        $this->load->view('admin/temp/footercrm');
    }
 
  
}