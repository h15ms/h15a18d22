<?php
class Usercrm extends CI_Controller
{

 function __construct() 
  {
       parent:: __construct();
      $this->load->model('admin/userModelCrm' , 'umc');
      
   
  }

    

    
  public function index() 
  { 
    $title         = "Manage employees | MiConsulting";
    $headline      = "Manage employees";
    
    $data1 = array(
        'page_title' => 'Manage employees | MiConsulting'
    );
    $users=$this->umc->allUsers();
    $data=array('headline'=>$headline,'users'=>$users);
    $this->load->view('admin/temp/headercrm',$data1 );
    $this->load->view('admin/usercrm/index',$data);
    $this->load->view('admin/temp/footercrm',$data);
  }

    
  public function user() 
  {
      $data1 = array(
        'page_title' => 'Edit employees | MiConsulting'
    );
  
    if(isset($_POST['send']) && ($_POST['send']=="1")){ $this->umc->userupdate($_POST); } 
    if(isset($_POST['send']) && ($_POST['send']=="del")){ $go = $this->_model->userdel($_POST); header("Location: admin/usercrm"); }          

      $page          = $this->umc->user($this->uri->segment('4'));
      $users         = $this->umc->allUsers();

    $data=array('headline'=>"Edit employees","page"=>$page,"user"=>$users,);
    $this->load->view('admin/temp/headercrm',$data1);
    $this->load->view('admin/usercrm/user',$data);
    $this->load->view('admin/temp/footercrm');
  }
    
    
  public function adduser()
  {
    if(isset($_POST['send']) && ($_POST['send']=="1"))
    {
        // generate passwort
        $password = $this->umc->makePass();        
        $newid = $this->umc->userinsert($_POST,$password);
        // send email
//        $mailtext = '<html><head><title>Welcome at MiConsulting</title></head><body>
//        <h2>Welcome at MiConsulting</h2>
//        <p>Your access account for MiConsulting CRM is:</p>        
//        <p>Username: '.$_POST["email"].'</p>
//        <p>Password: '.$password.'</p>
//        <p>Url: http://crm.miconsulting.in/</p>
//        <p>We wish you all the best at MiConsulting</p>
//        </body></html>';
//        $empfaenger = $_POST['email'];
//        $absender   = "info@miconsulting.in";
//        $betreff    = "Your Account for MiConsulting CRM";            
//        $header  = "MIME-Version: 1.0\r\n";
//        $header .= "Content-type: text/html; charset=iso-8859-1\r\n";
//        $header .= "From: $absender\r\n";                        
//        $header .= "X-Mailer: PHP ". phpversion();
//        mail($empfaenger, $betreff, $mailtext, $header);        
//        unset($_POST);        
//        header("Location: index.php?c=user&a=user&id=".$newid);        
    }
    $data1 = array(
        'page_title' => 'Add employee | MiConsulting'
    );
    $data=array("headline"=>"Add employee");
    
    $this->load->view('admin/temp/headercrm',$data1);
    $this->load->view('admin/usercrm/adduser',$data);
    $this->load->view('admin/temp/footercrm');
//    $this->_view->title         = "Add employee | MiConsulting";
//    $this->_view->headline      = "Add employee";
//    $this->_view->display('user/adduser.tpl.php');
  }
  
  
}