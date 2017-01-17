<?php
class index extends CI_Controller {

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
		//$this->load->model('admin/applyModelCrm');
	}
  
  public function index() 
  {
    //require 'models/applyModel.php';
   // $model = new applyModel();
   // $applys = $model->allApplys(); 
//    $this->_view->title = "All Applies | MiConsulting";
//    $this->_view->headline = "All Applies";
//    $this->_view->applys = $applys;
//    $this->_view->display('apply/index.tpl.php');
     $data=array(
         
         'headlines' => 'All Applies'
     );
     
     
     
     $this->load->view('admin/template/header');
     $this->load->view('admin/index');
     $this->load->view('admin/template/footer');
  }  
  
}