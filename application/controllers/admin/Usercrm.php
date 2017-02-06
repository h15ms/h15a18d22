<?php
class Usercrm extends CI_Controller
{

  public $session;

  function __construct()
  {
    parent:: __construct();
    error_reporting(0);
    if(isset($_SESSION['logged_in'])){
      $this->session = $this->session->userdata('logged_in');
      if(( $this->session['user_level'] != '1' && $this->session['user_level_status'] != '1' ) || ( $this->session['user_level'] != '2' && $this->session['user_level_status'] != '1' ) ){  redirect('home','refresh');}//header ('Location: '.base_url().'home '); }
    }else{
      redirect('login','refresh');
    }      

      $this->load->model('admin/userModelCrm' , 'model');

  }

    

    
  public function index() 
  { 
    $title         = "Manage employees | MiConsulting";
    $headline      = "Manage employees";
    
    $data1 = array(
        'page_title' => 'Manage employees | MiConsulting'
    );
    // print_r($this->session);

    if($this->session['user_level'] == '1'){
      $users=$this->model->allUsersAdmin();
    }elseif($this->session['user_level'] == '2'){
      $users=$this->model->allUsersAgent($this->session['user_id']);
    }

    $data = array('headline'=>$headline,'users'=>$users);
    $this->load->view('admin/temp/headercrm',$data1 );
    $this->load->view('admin/usercrm/index',$data);
    $this->load->view('admin/temp/footercrm',$data);
  }

    
  public function user() 
  {
    $data1 = array(
        'page_title' => 'Edit employees | MiConsulting'
    );
  
   $page = $this->model->user($this->uri->segment('4'));
     
    if($this->session['user_level'] == '1'){
     $users = $this->model->allUsersAdmin();
    }else{
      $users=$this->model->allUsersAgent($this->session['user_id']);
    }

    $data=array('headline'=>"Edit employees","page"=>$page,"user"=>$users);

    $this->load->view('admin/temp/headercrm',$data1);
    $this->load->view('admin/usercrm/user',$data);
    $this->load->view('admin/temp/footercrm');
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
  
    $data1 = array(
        'page_title' => 'Add employee | MiConsulting'
    );
    $data=array("headline"=>"Add employee");
    
    $this->load->view('admin/temp/headercrm',$data1);
    $this->load->view('admin/usercrm/adduser',$data);
    $this->load->view('admin/temp/footercrm');
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
        
        $data = array('userexist' => '1');
        $this->load->view('admin/temp/headercrm',$data1);
        $this->load->view('admin/usercrm/adduser',$data);
        $this->load->view('admin/temp/footercrm');
      
      }



    }   
 }
  


  
}
