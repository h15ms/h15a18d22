<?php
class Applycrm extends CI_Controller {

  function __construct()
	{
		parent::__construct();
                
		// Load form helper library
		$this->load->helper('form');

		// Load form validation library
		$this->load->library('form_validation');

		// Load session library
		$this->load->library('session');

		// Load database
		$this->load->model('admin/applyModelCrm','app');
	}
  
  public function index() 
  {
   

//require 'models/applyModel.php';
   // $model = new applyModel();
    $applys = $this->app->allApplys(); 
//    $this->_view->title = "All Applies | MiConsulting";
//    $this->_view->headline = "All Applies";
//    $this->_view->applys = $applys;
//    $this->_view->display('apply/index.tpl.php');

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
}
