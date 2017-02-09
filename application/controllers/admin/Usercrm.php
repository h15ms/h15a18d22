<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Base.php');
class Usercrm extends Base
{

  function __construct()
  {
    parent:: __construct();   
    $this->isLoggedIn();
    $this->load->model('admin/userModelCrm' , 'model');
  }
   
  public function index() 
  { 

    if($this->session_data['user_level'] == '1'){
      $users=$this->model->allUsersAdmin();
    }elseif($this->session_data['user_level'] == '2'){
      $users=$this->model->allUsersAgent($this->session_data['user_id']);
    }

    $header = array('page_title' => 'Manage Agents | MiConsulting ');
    $content = array('headline'=>'Manage Agents','users'=>$users);

    $this->getLayout('admin/usercrm/index', $header, $left, $content, $footer);

  }

    
  public function user() 
  {

   $page = $this->model->user($this->uri->segment('4'));
   
   if($this->session_data['user_level'] == '1'){
    $users = $this->model->allUsersAdmin();
   }elseif($this->session_data['user_level'] == '2'){
     $users=$this->model->allUsersAgent($this->session_data['user_id']);
   }

    $header = array('page_title' => 'Edit employees | MiConsulting ');
    $content = array('headline'=>'Edit employees','page'=>$page,'user'=>$users);

    $this->getLayout('admin/usercrm/user', $header, $left, $content, $footer);

  }  


  public function allEmployee() 
  {

   $id = $this->session_data['user_id'];
   $users = $this->model->allEmployee($id);

    //$data=array('headline'=>"All Employees","page"=>$page,"user"=>$users);


    $header = array('page_title' => 'All employees | MiConsulting ');
    $content = array('headline'=>'Edit employees','page'=>$page,'user'=>$users);

    $this->getLayout('admin/usercrm/employee', $header, $left, $content, $footer);


  }  

  public function employee() 
  {
  
    $users = $this->model->employee($this->uri->segment('4'));

    $header = array('page_title' => 'Edit employees | MiConsulting');
    $content = array('headline'=>'Manage Employees','page'=>$page,'user'=>$users);

    $this->getLayout('admin/usercrm/employee', $header, $left, $content, $footer);

  }

  public function userUpdate(){

    $arr = $this->input->post();

    if($arr['send'] == 'userupdate')
      { 
        $result = $this->model->userUpdate($arr);
        if(isset($result)){  
          redirect('admin/usercrm/user/'.$arr['id'],'refresh');  
        }
      } 

  }
    
    
  public function adduser()
  {

    $header = array('page_title' => 'Add employees | MiConsulting');
    $content = array('headline'=>'Add employee');

    $this->getLayout('admin/usercrm/adduser', $header, $left, $content, $footer);
  }
  
  public function delUser(){

    $send = $this->input->post('send');
    $id = $this->input->post('id');

    if($send == 'del'){

      $this->model->userdel($id);
      redirect('admin/usercrm','refresh');
    }
  }  

  public function userapprovelevel(){

    $id = $this->uri->segment(4);
    $this->model->userapprovelevel($id);
    redirect('admin/usercrm','refresh');
  
  }

public function addNewUser(){

    $arr = $this->input->post();
    $pass = $this->model->makePass();

    if($arr['send'] == 'insertUser'){
                  
      $userexistcheck = $this->model->userexistcheck($arr['email']);
      

      if($userexistcheck == '0'){

        $res = $this->model->userinsert($arr, $pass);

        if(isset($res)){
          
          $to = $arr["email"];
          $subject = "Your Account for MiConsulting CRM";
          
          $mailtext = '<html><head><title>Welcome at MiConsulting</title></head><body>
                 <h2>Welcome at MiConsulting</h2>
                 <p>Your access account for MiConsulting CRM is:</p>        
                 <p>Username: '.$arr["email"].'</p>
                 <p>Password: '.$pass.'</p>
                 <p>Url: http://miconsulting.in/login</p>
                 <p>We wish you all the best at MiConsulting</p>
                 </body></html>';
          
          $header = "From:info@miconsulting.in \r\n";
          $header .= "MIME-Version: 1.0\r\n";
          $header .= "Content-type: text/html\r\n";
          
          $retval = mail($to,$subject,$mailtext,$header);
          
          if( $retval == true ) {
            redirect('admin/usercrm','refresh');
          }else {
             redirect('admin/usercrm/adduser','refresh');
          }

        }else{
          
             redirect('admin/usercrm/adduser','refresh');
        }

      }else{
      

      $header = array('page_title' => 'Add employees | MiConsulting');
      $content = array('headline'=>'Add employee','userexist' => '1');

      $this->getLayout('admin/usercrm/adduser', $header, $left, $content, $footer);


      }



    }   
 }



  
}
