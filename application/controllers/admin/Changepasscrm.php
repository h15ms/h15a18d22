<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Changepasscrm extends CI_Controller {

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

       $this->load->model('admin/ChangepassModelCrm' , 'model');
    }  


    public function index() 
    { 
      $data1 = array('page_title' => 'Change Password | MiConsulting');

      $user_id = $this->session['user_id'];
      $userdata = $this->model->usersData($user_id);
      $headline = "Change Password";
      $send = $this->input->post('send');
      
      if(isset($send)){
        $res = $this->Changepassword($this->input->post() , $userdata);
      }

      $data = array('headline' => $headline,'user' => $userdata, 'result' => $res);

      $this->load->view('admin/temp/headercrm',$data1 );
      $this->load->view('admin/chngpw/index',$data);
      $this->load->view('admin/temp/footercrm',$data);
    }

    public function Changepassword($data , $profileData)
    {

      if($data['newpass'] == $data['repass']){

          if($data['oldpass'] == $profileData['0']->password){

            $result = $this->model->setNewPass($this->session['user_id'], $data['newpass']);
             
              if(isset($result)){
                return "4"; // Successfully Changed
              }else{
                return "3"; // SORRY Password not set, try Again!
              }

          }else{
            return "2"; // old password not matches with previous password which is stored in Database
          }
      }else{
          return "1"; // new password is not equals to re-entered password
      }

    }










}
        








 ?>