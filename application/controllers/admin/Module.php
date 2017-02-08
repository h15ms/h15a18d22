<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Base.php');
class Module extends Base {


  function __construct()
  {
    parent:: __construct(); 
    $this->isLoggedIn();
    if($this->session['user_id'] == '0'){
      echo "Hello Developer";
    }else{
      echo "Not Autharised";
    }
  }


  public function index() {      
       
    $header = array('page_title' => 'Manage Module | MiConsulting');
    $content = array('headline' => "Manage Modules", 'countnewapplys' => $countnewapplys, 'countapplys' => $countApplys, 'allnewapplys' => $allNewApplys, 'allupdatedapplys' => $allUpdatedApplys);

    $this->getLayout('admin/moduleManage/index', $header, $left, $content, $footer);


  }

  public function addModule() {      
       
    $header = array('page_title' => 'Add Module | MiConsulting');
    $content = array('headline' => "Add Module", 'countnewapplys' => $countnewapplys, 'countapplys' => $countApplys, 'allnewapplys' => $allNewApplys, 'allupdatedapplys' => $allUpdatedApplys);
    $this->getLayout('admin/moduleManage/addModule', $header, $left, $content, $footer);

  }
    

  
}
