<?php

class Appointment extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('user_agent');
        $userData = $this->session->userdata();
        if ($userData['logged_in']['user_level'] != '1' && $userData['logged_in']['user_level_status'] != '1') {
            redirect(base_url() . 'home ', 'location');
        } elseif ($userData['logged_in']['user_level'] != '2' && $userData['logged_in']['user_level_status'] != '1') {
            redirect(base_url() . 'home ', 'location');
        }

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('admin/Appointment_model', 'app');
        //$this->load->helper("url");
        // $this->load->library("pagination");
    }
    

//    function __construct()
//	{
//       parent:: __construct();
//      
//      error_reporting(0);
//
//      if(isset($_SESSION['logged_in'])){
//        $sess = $this->session->userdata();
//        if(( $sess['logged_in']['user_level'] != '1' && $sess['logged_in']['user_level_status'] != '1' ) || ( $sess['logged_in']['user_level'] != '2' && $sess['logged_in']['user_level_status'] != '1' ) ){  redirect('home','refresh');}//header ('Location: '.base_url().'home '); }
//      }else{
//        redirect('login','refresh');
//      }  
//        }

    public function index() {
        
        $title = array('page_title' => "Add Appointment | MiConsulting");
        $js = array('js' => "appointment.js");  // Angular Js file name
        $filterArray = array();
        $filterArray['hospital'] =  '';
        $filterArray['speciality'] =  '';
        $id = $this->uri->segment('4');
        $appointment = $this->app->fetchById($id);
        $dataCollection = array('headline' => 'Add appointment', 'appointment' => $appointment);
        $this->load->view('admin/temp/headercrm', $title);
        $this->load->view('admin/appointment/index', $dataCollection);
        $this->load->view('admin/temp/footercrm', $js);
    }
    
    
    public function create() {
        
        $title = array('page_title' => "Create Appointment | MiConsulting");
        $js = array('js' => "appointment.js");  // Angular Js file name
        $filterArray = array();
        $filterArray['hospital'] =  '';
        $filterArray['speciality'] =  '';
        $id = $this->uri->segment('4');
        $appointment = $this->app->fetchById($id);
        $dataCollection = array('headline' => 'Add appointment', 'appointment' => $appointment);
        $this->load->view('admin/temp/headercrm', $title);
        $this->load->view('admin/appointment/create', $dataCollection);
        $this->load->view('admin/temp/footercrm', $js);
    }
    
    
    public function hospital() {
        $hospitals = $this->app->getHospital();
        echo json_encode($hospitals);
    }
    
    public function getspeciality() {
        $id = $_GET['id'];// = 17;
        $speciality = $this->app->getspecialityByHospital($id);
         echo  json_encode($speciality);
    }
    
    
    public function getspecialitiesyall() {
        $speciality = $this->app->getspeciality();
         echo  json_encode($speciality);
    }
    
    
    
    public function doctor() {
        $doctors = $this->app->getAllDoctor();
        echo json_encode($doctors);
    }
    
    public function searchdoctor() {
        
        echo '<pre>';
              print_r($_REQUEST);
        echo '</pre>';
        
//        $doctors = $this->app->getAllDoctor();
//        echo json_encode($doctors);
    }

}
