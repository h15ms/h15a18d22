<?php
class applyCrm extends CI_Controller {

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
		$this->load->model('admin/applyModelCrm');
	}
  
  public function index() 
  {
   

//require 'models/applyModel.php';
   // $model = new applyModel();
    $applys = $this->applyModelCrm->allApplys(); 
//    $this->_view->title = "All Applies | MiConsulting";
//    $this->_view->headline = "All Applies";
//    $this->_view->applys = $applys;
//    $this->_view->display('apply/index.tpl.php');

     $data=array('headlines' => 'All Applies','applys'=>$applys);
  
     
     
     $this->load->view('admin/temp/headercrm');
     $this->load->view('admin/applycrm/index',$data);
     $this->load->view('admin/temp/footercrm');
  }  
  
}