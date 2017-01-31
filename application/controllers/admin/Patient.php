<?php

class Patient extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('user_agent');
      $userData = $this->session->userdata();
      if ($userData['logged_in']['user_level'] != '1' && $userData['logged_in']['user_level_status'] != '1') {
            redirect(base_url() . 'home ', 'location');
        } elseif ($userData['logged_in']['user_level'] != '2' && $userData['logged_in']['user_level_status'] != '1') {
             redirect(base_url() . 'home ', 'location');
        }


        // Load form helper library
        $this->load->helper('form');
        // Load form validation library
        $this->load->library('form_validation');
        // Load session library
        $this->load->library('session');
        // Load database
        $this->load->model('admin/Patient_model', 'app');
        $this->load->helper("url");
        $this->load->library("pagination");

    }

    public function index() {
        $patients = $this->app->fetchAll();
        
        $config = array();
        $config["base_url"] = base_url() . "admin/patient/index";
        $config["total_rows"] = count($patients);//$this->Countries->record_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 4;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = round($choice);
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data["results"] = $this->app->fetchAll($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        
        $dataCollection = array('headlines' => 'All Patients', 'patients' => $data);
        $title = array('page_title' => "All Patients | MiConsulting");
        $this->load->view('admin/temp/headercrm', $title);
        $this->load->view('admin/patient/index', $dataCollection);
        $this->load->view('admin/temp/footercrm');
    }

    public function add() {
         
         $data = array();     
         extract($_POST);
         
         
         if ($this->input->server('REQUEST_METHOD') === 'POST'  && $send == 1) {
             $data = array();
             $data['first_name'] = $first_name;
             $data['middle_name'] = $middle_name;
             $data['last_name'] = $last_name;
             $data['email'] = $email;
             $data['phone'] = $phone_no;
             $data['mobile'] = $mobile;
             $data['gender'] = $gender;
             $data['dob'] = $dob;
             $data['mobile'] = $mobile;
             $data['alt_mobile'] = $alt_mobile;
             $data['patient_uid'] = $patient_uid;
             $data['created'] = date('Y-m-d h:i:s');
             $data['modified'] = date('Y-m-d h:i:s');
             
             
             
            $reports = $_FILES['reports']['name']?$_FILES['reports']['name']:'';
            if ($reports != '') {
                $reports_loc = $_FILES['reports']['tmp_name'];
                $folder = "assets/img/reports/";
                $data['reports'] = $reports;
                $reports = $folder . $reports;
                move_uploaded_file($_FILES['reports']['tmp_name'], $reports);
            }

            $name = $_FILES['avatar']['name'];
            if ($name != '') {
                $pic_loc = $_FILES['avatar']['tmp_name'];
                $folder = "assets/img/patient/";
                $avatar = $folder . $name;
                $data['avatar'] = $name;
                $file_moved = move_uploaded_file($_FILES['avatar']['tmp_name'], $avatar);
            }
            $res = $this->app->add($data);
            unset($_POST);
            redirect('/admin/patient/', 'location');
        }
        

        $title = array('page_title' => "Add Patient | MiConsulting");
        $js = array('js' => "patient.js");  // Angular Js file name
        $patients = array();
        $dataCollection = array('headline' => 'Add Patient', 'patient' => $patients);
        
        $this->load->view('admin/temp/headercrm', $title);
        $this->load->view('admin/patient/add', $dataCollection);
        $this->load->view('admin/temp/footercrm',$js );
        
    }
    
    public function edit() {
         
        $data = array(); 
        $id = $this->uri->segment('4');
        $patient = $this->app->fetchById($id);
         if ($this->input->server('REQUEST_METHOD') === 'POST'  && $_POST['send'] == 1) {
              extract($_POST);
             $data = array();
             if ($id != '') {
                $data['id'] = $id;
            }
             if ($first_name != '') {
                $data['first_name'] = $first_name;
            }
            if ($middle_name != '') {
                $data['middle_name'] = $middle_name;
            }
            if ($last_name != '') {
                $data['last_name'] = $last_name;
            }
            if ($email != '') {
                $data['email'] = $email;
            }
            if ($phone_no != '') {
                $data['phone'] = $phone_no;
            }
            if ($mobile != '') {
                $data['mobile'] = $mobile;
            }
            if ($gender != '') {
                $data['gender'] = $gender;
            }
            if ($dob != '') {
                $data['dob'] = $dob;
            }
            if ($mobile != '') {
                $data['mobile'] = $mobile;
            }
            if ($alt_mobile != '') {
                $data['alt_mobile'] = $alt_mobile;
            }
            if ($patient_uid != '') {
                $data['patient_uid'] = $patient_uid;
            }
            
            $data['modified'] = date('Y-m-d h:i:s');
            $reports = $_FILES['reports']['name']?$_FILES['reports']['name']:'';
            
            if ($reports != '') {
                $reports_loc = $_FILES['reports']['tmp_name'];
                $folder = "assets/img/reports/";
                $data['reports'] = $reports;
                $reports = $folder . $reports;
                move_uploaded_file($_FILES['reports']['tmp_name'], $reports);
            }

            $name = $_FILES['avatar']['name'];
            if ($name != '') {
                $pic_loc = $_FILES['avatar']['tmp_name'];
                $folder = "assets/img/patient/";
                $avatar = $folder . $name;
                $data['avatar'] = $name;
                $file_moved = move_uploaded_file($_FILES['avatar']['tmp_name'], $avatar);
            }
            
            $res = $this->app->update($data);
            unset($_POST);
            redirect('/admin/patient/', 'location');
            
            
        }
        
//        else {
//            $this->load->view('add_form');
//        }

        $title = array('page_title' => "Edit Doctor | MiConsulting");
        $js = array('js' => "patient.js");  // Angular Js file name
        
       
        //$states =  $this->state_city_india();
        $dataCollection = array('headline' => 'Edit Doctor','patient' => $patient[0]);
        $this->load->view('admin/temp/headercrm', $title);
        $this->load->view('admin/patient/edit', $dataCollection);
        $this->load->view('admin/temp/footercrm',$js );
        
    }
public function view() {
         
        $title = array('page_title' => "Add Doctor | MiConsulting");
        $js = array('js' => "patient.js");  // Angular Js file name
        $id = $this->uri->segment('4');
        $patients = $this->app->fetchById($id);
       /// $states =  $this->state_city_india();
        $dataCollection = array('headline' => 'Add Doctor','states'=>$states, 'doctor' => $patients);
        $this->load->view('admin/temp/headercrm', $title);
        $this->load->view('admin/patient/view', $dataCollection);
        $this->load->view('admin/temp/footercrm',$js );
        
    }
    
    
 

    
}
