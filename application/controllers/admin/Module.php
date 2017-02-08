<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Base.php');
class Module extends Base {


  function __construct()
  {
    parent:: __construct(); 
    $this->isLoggedIn();
    $this->load->model('admin/moduleManage', 'model');
    
    if($this->session['user_id'] == '0'){
      echo "Hello Developer";
    }else{
      echo "!!! For Developer Only !!!";
    }

  }


  public function index() {   

    $post = $this->input->post();
    if(isset($post['send'])){
      $out = $this->model->moduleInsert($post);
    }

    $data = $this->model->dataFetch();
    $header = array('page_title' => 'Manage Module | MiConsulting');
    $content = array('headline' => "Manage Modules", 'data' => $data);

    $this->getLayout('admin/moduleManage/index', $header, $left, $content, $footer);


  }


  public function addModule() {      

    $header = array('page_title' => 'Add Module | MiConsulting');
    $content = array('headline' => "Add Module", 'countnewapplys' => $countnewapplys, 'countapplys' => $countApplys, 'allnewapplys' => $allNewApplys, 'allupdatedapplys' => $allUpdatedApplys);
    $this->getLayout('admin/moduleManage/addModule', $header, $left, $content, $footer);

  }

  public function updateModule() {

    $id = $this->uri->segment(4);
    $data = $this->model->dataFetchById($id);      

    $header = array('page_title' => 'Update Module | MiConsulting');
    $content = array('headline' => "Update Module", 'data'=> $data);
    $this->getLayout('admin/moduleManage/updateModule', $header, $left, $content, $footer);

  }


    

  
}
