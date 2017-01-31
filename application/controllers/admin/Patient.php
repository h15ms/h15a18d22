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
            $reports = $_FILES['reports']['name'];
            $reports_loc = $_FILES['reports']['tmp_name'];
            $folder = "assets/img/reports/";
            $data['reports'] = $reports;
            $reports = $folder . $reports;
            move_uploaded_file($_FILES['reports']['tmp_name'], $reports);
            $name =$_FILES['avatar']['name'];
            $pic_loc = $_FILES['avatar']['tmp_name'];
            $folder="assets/img/patient/";
            $avatar=$folder.$name;
            $data['avatar'] = $name;
            $file_moved = move_uploaded_file($_FILES['avatar']['tmp_name'],$avatar);
            if ($file_moved) {
                $res = $this->app->add($data);
                unset($_POST);
                 redirect('/admin/patient/', 'location');
            }else{
              echo  'avatar not moved';
            }
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
        
       // var_dump($patient);
        
         if ($this->input->server('REQUEST_METHOD') === 'POST'  && $_POST['send'] == 1) {
              extract($_POST);
             $data = array();
             $data['first_name'] = $first_name?$first_name:$patient[0]->first_name;
             $data['last_name'] = $last_name?$last_name:$patient[0]->last_name;
             $data['email'] = $email?$email:$patient[0]->email;
             $data['phone_no'] = $phone_no?$phone_no:$patient[0]->phone_no;
             $data['mobile'] = $mobile?$mobile:$patient[0]->mobile;
             $data['address'] = $address?$address:$patient[0]->address;
             $data['registration_no'] = $registration_no?$registration_no:$patient[0]->registration_no;
             $data['qualification'] = $qualification?$qualification:$patient[0]->qualification;
             $data['experience'] = $experience?$experience:$patient[0]->experience;
             $data['consultancy_fee'] = $consultancy_fee?$consultancy_fee:$patient[0]->consultancy_fee;
             $data['specialization'] = $specialization?$specialization:$patient[0]->specialization;
             $data['clinic_hospital_type'] = $clinic_hospital_type?$clinic_hospital_type:$patient[0]->clinic_hospital_type;
             $data['country'] = $country?$country:$patient[0]->country;
             $data['state'] = $state?$state:$patient[0]->state;
             $data['city'] = $city?$city:$patient[0]->city;
             $data['zipcode'] = $zipcode?$zipcode:$patient[0]->zipcode;
             $data['id'] = $id?$id:$patient[0]->id;
             
            $name =$_FILES['avatar']['name']?$_FILES['avatar']['name']:'';
            if ( $name != '') {
                $pic_loc = $_FILES['avatar']['tmp_name'];
                $folder="assets/img/patient/";
                $avatar=$folder.$name;
                $data['avatar'] = $name;
                $file_moved = move_uploaded_file($_FILES['avatar']['tmp_name'],$avatar);
                $res = $this->app->update($data);
                unset($_POST);
                $this->load->library('user_agent');
                 redirect('/admin/patient/', 'location');
            }else{
                $data['avatar'] = $patient[0]->avatar;
                $res = $this->app->update($data);
                unset($_POST);
                $this->load->library('user_agent');
                 redirect('/admin/patient/', 'location');
            }
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
