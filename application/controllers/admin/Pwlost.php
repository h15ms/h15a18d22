<?php

class PwLost extends CI_Controller{

  private $_view;
  private $username;
  private $password;

  public function __construct() {
    require 'library/View.php';
    $this->_view = new View();
  }

  public function __call($name, $args) {
    $this->_view->title = TITEL_404;
    $this->_view->headline = HEADLINE_404;
    $this->_view->display('404/error.tpl.php');
  }

  public function indexAction() {
    $this->listAction();
  }
  
  public function logoutAction() {
      session_unset();
	  session_destroy();
	  ob_end_flush();
	  header("Location: index.php");
  }

  public function listAction() {
  	
  	$this->username=$_POST['username'];
	$this->password=$_POST['password'];
	
	
	// table users pw abgleich
	
	
	if(isset($_SESSION['mvc_user'])){		
		
		header("Location: index.php");
		
	}else{
		#echo $this->username;
		if($this->username=="s.harke@premiumleasing.de"){
			$_SESSION['mvc_user'] = $this->username; 
			header("Location: index.php");	
		}
	
		$this->_view->display('pwlost/index.tpl.php');
	}
  }  
  
}


