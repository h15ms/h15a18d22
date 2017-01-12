<?php
class review extends CI_Controller {


  private $_view;

    
  public function __construct() 
  {
    require 'library/View.php';
    $this->_view = new View();
  }

  
  public function __call($name, $args) 
  {
    header('Location: '.URL.'404/');
  }

    
  public function indexAction() 
  {      
    $this->_view->title = "Review | MiConsulting.in";
    $this->_view->description = "";
    $this->_view->headline = "Review";
    $this->_view->canonical = URL."review/";
    $this->_view->display('reviews/index.php');
  }  
  
}