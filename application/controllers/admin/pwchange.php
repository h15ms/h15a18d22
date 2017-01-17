<?php
class pwchangeController 
{

  private $_view;

    
  public function __construct() 
  {
    require 'library/View.php';
    $this->_view = new View();
  }

    
  public function __call($name, $args) 
  {
    $this->_view->title = TITEL_404;
    $this->_view->headline = HEADLINE_404;
    $this->_view->display('404/error.tpl.php');
  }

    
  public function indexAction() 
  {        
    $err = "";      
    // Update Userdata
    require_once 'models/userModel.php';
    $model = new userModel();    
    $user = $model->user($_SESSION[user_id]);
    if($_POST['send']=="changepass")
    {        
        if ($_POST['old_pw'] === $user['pass'])
        {
            if ($_POST['new_pw1'] === $_POST['new_pw2'])
            {
                $model->savePassword($_SESSION[user_id], $_POST['new_pw1']);   
                $msg = "Passwort wurde geändert!";    
            }else{
                $err = "Passwörter nicht identisch!";    
            }
        }else{
            $err = "Passwort nicht korrekt!";
        }
    }
    $this->_view->err = $err;   
    $this->_view->msg = $msg;   
    $this->_view->title = "Passwort ändern Daten - Premiumleasing.de";    
    $this->_view->headline = "Passwort ändern";            
    $this->_view->display('pwchange/index.tpl.php');   
  }
 

}