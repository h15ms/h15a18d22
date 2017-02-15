<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Base.php');
class Patient extends Base {

    function __construct()
    {
      parent:: __construct();
      $this->isLoggedIn();
      $this->load->model('admin/Patient_model', 'model');
    }

    public function index() {
        $patients = $this->model->fetchAll();
        
        $config = array();
        $config["base_url"] = base_url() . "admin/patient/index";
        $config["total_rows"] = count($patients);//$this->Countries->record_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 4;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = round($choice);
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data["results"] = $this->model->fetchAll($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();

        $header = array('page_title' => 'All Patients | MiConsulting');
        $content = array('headline'=>'All Patients', 'patients' => $data);
        $this->getLayout('admin/patient/index', $header, $left, $content, $footer);
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
            $res = $this->model->add($data);
            unset($_POST);
            redirect('/admin/patient/', 'location');
        }
        


        $patients = array();

        $header = array('page_title' => 'Add Patients | MiConsulting');
        $content = array('headline'=>'Add Patients', 'patient' => $patients);
        $footer = array('js' => "patient.js");
        $this->getLayout('admin/patient/index', $header, $left, $content, $footer);
        
    }
    
    public function edit() {
         
        $data = array(); 
        $id = $this->uri->segment('4');
        $patient = $this->model->fetchById($id);
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
            
            $res = $this->model->update($data);
            unset($_POST);
            redirect('/admin/patient/', 'location');
            
            
        }
        
//        else {
//            $this->load->view('add_form');
//        }
        

        $header = array('page_title' => 'Edit Doctor | MiConsulting');
        $content = array('headline'=>'Edit Doctor','patient' => $patient[0]);
        $footer = array('js' => "patient.js");
        $this->getLayout('admin/patient/edit', $header, $left, $content, $footer);
    }


    public function view() {
         

  // Angular Js file name
        $id = $this->uri->segment('4');
        $patients = $this->model->fetchById($id);
       /// $states =  $this->state_city_india();

        $header = array('page_title' => 'Add Doctor | MiConsulting');
        $content = array('headline'=>'Add Doctor','states'=>$states, 'doctor' => $patients);
        $footer = array('js' => "patient.js");
        $this->getLayout('admin/patient/view', $header, $left, $content, $footer);
        
    }
    
    
    public  function tab(){
         $this->tab1(5, 1);
        
    }
    
    
    private function tab1($number, $i){
        
        if($i > 10){
            //break;
            //$found = TRUE;
            //break;
            
            //continue;
        }else{
            echo '<br/>';
            echo $number*$i;
            $this->tab1($number, ++$i);
        }
        
        
        
        
    }
    
    
 

    
}
