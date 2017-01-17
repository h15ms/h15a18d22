<?php

class homeCrm extends CI_Controller {


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
      
      $this->load->view('admin/temp/headercrm');
        $this->load->view('admin/homecrm/index', $data);
        $this->load->view('admin/temp/footercrm');
    }

  public function listAction() 
  {      
    //require 'models/homeModel.php';
//    $model = new homeModel();
//    $this->_view->title = "Dashboard | MiConsulting";    
//    $this->_view->headline = "Dashboard";
//    $this->_view->countnewapplys = $model->countNewApplys();
//    $this->_view->countapplys = $model->countApplys();   
//
//    $this->_view->allnewapplys = $model->allNewApplys();   
//    $this->_view->allupdatedapplys = $model->allUpdatedApplys();   
//
//    $this->_view->display('home/index.php');
  }  
  
}