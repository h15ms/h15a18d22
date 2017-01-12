<?php
class sitemap extends CI_Controller {


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

    
  public function index() 
  {      
    $this->_view->title = "Sitemap | MiConsulting.in";
    $this->_view->description = "";
    $this->_view->headline = "Sitemap";
    $this->_view->canonical = URL."sitemap/";
    $this->_view->display('sitemap/index.php');
  }  
  
}