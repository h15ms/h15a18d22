<?php
class applyprofilController 
{

  private $_view;
  private $_status;

    
  public function __construct() 
  {
    require_once 'library/View.php';
    $this->_view = new View();    
  }

    
  public function __call($name, $args) 
  {
    $this->_view->title = $name;
    $this->_view->headline = $name;
    $this->_view->display('404/error.tpl.php');
  }

    
    
  public function indexAction() 
  {     
     //echo $user['vorname']." ".$user['nachname'];          
      
      require_once 'models/applyModel.php';
      $model = new applyModel();            

      $this->empAction();

      if($model->countApplys($_GET['id'])!="0")
      {              
        $this->_view->title = "Application Profile | MiConsulting";
        $this->_view->headline = "Application Profile";
        $this->_view->apply = $model->applyById($_GET['id']);        
        $this->_view->display('apply/profil.tpl.php');
      }
      else
      {
        $this->__call("Application not found", "");
      }

     
  }

  public function empAction()
  {
    require_once 'models/applyModel.php';
      $model = new applyModel();  
      $app_id = $_GET['id'];

    if($_POST['send']=="setstatus")
    { 
      $model->setStatus($_POST['appid'],$_POST['status'],$_POST['embassy_id'],$_POST['visa_id']);
      
      $user_name = $_SESSION[user_name];
      $model->updateEmpname($app_id, $user_name); 
    }      
    if($_POST['send']=="update_notice")
    {
      $model->updateNotice($_POST['appid'], $_POST['notice']);
    }

  }  
  
    
}