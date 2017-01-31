<?php

class Homecrm extends CI_Controller {


  public function __construct() {
      
     parent:: __construct();
    
    error_reporting(0);

    if(isset($_SESSION['logged_in'])){
      $sess = $this->session->userdata();
      if(( $sess['logged_in']['user_level'] != '1' && $sess['logged_in']['user_level_status'] != '1' ) || ( $sess['logged_in']['user_level'] != '2' && $sess['logged_in']['user_level_status'] != '1' ) ){  redirect('home','refresh');}//header ('Location: '.base_url().'home '); }
    }else{
      redirect('login','refresh');
    }      


  }


  public function index() {

      $countnewapplys = $this->hmc->countNewApplys();
      $countApplys = $this->hmc->countApplys();
      $allNewApplys = $this->hmc->allNewApplys();
      $allUpdatedApplys = $this->hmc->allUpdatedApplys();

      $data = array(
          'headline' => "Dashboard",
          'countnewapplys' => $countnewapplys,
          'countapplys' => $countApplys,
          'allnewapplys' => $allNewApplys,
          'allupdatedapplys' => $allUpdatedApplys
      );
        $data1=array('page_title'=>"Dashboard | MiConsulting");
        $this->load->view('admin/temp/headercrm' , $data1);
        $this->load->view('admin/homecrm/index', $data);
        $this->load->view('admin/temp/footercrm');
    }
    
 public function applyprofil() {
      
      $apply = $this->hmc->applyById($this->uri->segment('4')); 
   
      $data = array(
          'headline' => "Application Profile",
          'apply' => $apply);
        $data1=array('page_title'=>"Application Profile | MiConsulting");
        $this->load->view('admin/temp/headercrm' , $data1);
        $this->load->view('admin/applycrm/profil', $data);
        $this->load->view('admin/temp/footercrm');
    } 

    public function editProfile() {
         
      $sess = $this->session->userdata();
      $id = $sess['logged_in']['user_id'];
      $data1 = $this->hmc->editProfile($id);

      $data = array(
          'headline' => "Edit Profile",
          'data' => $data1['0']
        );

      $this->load->view('admin/temp/headercrm');
      $this->load->view('admin/homecrm/editprofile', $data);
      $this->load->view('admin/temp/footercrm');
    }

    public function editProfileAction() {
         
      $data = array(
        'firstname' => $this->input->post('firstname'),
        'lastname' => $this->input->post('lastname'),
        'street' => $this->input->post('street'),
        'zip' => $this->input->post('zip'),
        'city' => $this->input->post('city'),
        'email' => $this->input->post('email'),
        'phone' => $this->input->post('phone'),
        'avatar' => $this->input->post('avatar')
        );

      $data1 = $this->hmc->editProfileAction($data);

echo $data1;
      
    }
 
  
}
