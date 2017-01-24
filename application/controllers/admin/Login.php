<?php

class Login extends CI_Controller{

  private $_view;
  private $_con;
  private $_err;
  private $username;
  private $password;

  public function __construct() {
    require 'library/View.php';
    $this->_view = new View();
    require 'library/Database.php';
	$this->_con = new Database();
	$this->_con = $this->_con->con();	    
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
	  header("Location: index.php");
	  ob_end_flush();
  }

  public function listAction() {  
  	$this->username=$_POST['username'];
	$this->password=$_POST['password'];	    
	if((isset($_SESSION[user_key]) && $_SESSION[user_key] == md5($_SESSION[user_name].sesseion_secret_key))){	
		header("Location: index.php");
	}else{			
		if(isset($this->username) and  isset($this->password)){
			$this->_err = "";
			$result =  $this->_con->query("SELECT `id`, `pass`, `vorname`, `nachname`, `email` FROM ".PREFIX."admins WHERE email = '".$this->username."'");	
			$result =  $this->_con->query("SELECT `id`, `pass`, `vorname`, `nachname`, `email` FROM ".PREFIX."admins WHERE email = '$this->username'");
			$user = $result->fetch(PDO::FETCH_ASSOC);
		   if (!$user){ 
		   		$this->_err = "<p>Benutzername nicht gefunden<p>";
		   }elseif ($user["pass"] <> $this->password){ 
		   		$this->_err = "<p>Sorry, aber dieses Passwort passt nicht zum Benutzernamen!<p>";
		   }else {                
			    $_SESSION[user_id] = $user["id"];
			    $_SESSION[user_email] = $user["email"];
			    $_SESSION[user_name] = $user["vorname"]." ".$user["nachname"];			    
                $_SESSION[user_key] = md5($user["vorname"]." ".$user["nachname"].sesseion_secret_key);			    
			    header("Location: index.php");    
		   }
		   $this->_view->err = $this->_err;	    
	   }	
	}	
	$this->_view->display('login/index.tpl.php');	
  }  
  
}


