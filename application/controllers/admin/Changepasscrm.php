<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');
require_once('Base.php');
class Changepasscrm extends Base {

    function __construct()
    {
      parent:: __construct();
      $this->load->model('admin/ChangepassModelCrm' , 'model');
      $this->isLoggedIn();
    }  


    public function index() 
    { 

      $user_id = $this->session_data['user_id'];
      $userdata = $this->model->usersData($user_id);
      $send = $this->input->post('send');
      
      if(isset($send)){
        $out = $this->Changepassword($this->input->post() , $userdata);
      }

      $header = array('page_title' => 'Change Password | MiConsulting');
      $content = array('headline'=>'Change Password', 'user' => $userdata, 'result' => $out);

      $this->getLayout('admin/chngpw/index', $header, $left, $content, $footer);
    }

    public function Changepassword($data , $profileData)
    {

      if($data['newpass'] == $data['repass']){

          if($data['oldpass'] == $profileData['0']->password){

            $result = $this->model->setNewPass($this->session_data['user_id'], $data['newpass']);
             
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