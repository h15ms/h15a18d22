<?php

class Controller {

  private $ctrlr;
  private $_cconfig;
  private $_view;
  private $_model;
  
  public function __construct() {
    require 'config/controller.inc.php';
    $this->_cconfig = new ControllerConfig();        
  }

  public function run() 
  {
    try 
    {      
      $controller = $this->_getController();
      $action = $this->_getAction();
      $c_file = 'controllers/'.$controller.'.php';      
      $cc = $this->_cconfig->read();
		#echo $controller;
		#echo $action;
		if(in_array($controller, $cc['controller'])==true){			  		
		
			  if(file_exists($c_file)){
			  			  				
			    require $c_file;			    
			  	call_user_func(array(new $controller, $action));
		
			  }else{ $this->_err(); }
		
		}else{ $this->_err(); }
		
      
    } catch (Exception $e) {
      die($e->getMessage());
    }    		
  }

  private function _getController() {
	$controller = isset($_REQUEST['c']) ? strtolower($_REQUEST['c']) : 'home';
	if(empty($controller)){ $controller = "home"; }
    return $controller.'Controller';
  }
  
  private function _getAction() {
    $action = isset($_REQUEST['a']) ? strtolower($_REQUEST['a']) : 'index';
    if(empty($action)){ $action = "index"; }
    return $action.'Action';
  }
  
  private function _err() {
    require_once 'library/View.php';
	$this->_view = new View();
	$this->_view->title = TITEL_404;
	$this->_view->headline = HEADLINE_404;
	$this->_view->display('404/error.tpl.php');   
  }
  
}
?>


