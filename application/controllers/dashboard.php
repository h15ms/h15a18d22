<?php
class dashboard extends CI_Controller
{

  private $_view;
  private $_model;
  private $_login;

  public function __construct() 
  {
        require_once 'library/View.php';
        $this->_view = new View();        
        require_once 'library/Login.php'; 
        $this->_login = new Login();
  }

    
  public function __call($name, $args) 
  {
        header('Location: '.URL.'404/');
  }

    
  public function index() 
  { 

        if($_SESSION[user_id] == ""){
                header('Location: '.URL.'login/'); 
        }
        else
        {        
            require_once 'models/dashboardModel.php';
            $model = new dashboardModel();
            $this->_view->displayAll = $model->displayAll(); 

            $this->_view->title = "Customer Dashboard | Premiumleasing";
            $this->_view->description = "";
            $this->_view->headline = "Customer Dashboard";    
            $this->_view->canonical = URL."dashboard/";       
            $this->_view->display('dashboard/index.php');    
        }
  } 
  
  
}