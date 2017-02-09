<?php
require_once 'Base.php';
class Appointment extends Base {

    function __construct() {

        error_reporting(0);
        parent::__construct();

        ob_start();
        $this->load->model('admin/Appointment_model', 'app');
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


        $filterArray = array();
        $filterArray['hospital'] = '';
        $filterArray['speciality'] = '';
        $id = $this->uri->segment('4');
        $appointment = $this->app->fetchById($id);
        
        $header = array('page_title' => 'Add Appointment | MiConsulting');
        $content = array('headline' => 'Add appointment', 'appointment' => $appointment);
        $footer = array('js' => "appointment.js");
        $this->getLayout('admin/appointment/index', $header, $left, $content, $footer);
    }

    public function schedule() {

        $doctor_id = $this->uri->segment('4');
        $this->load->model('admin/Doctor_model', 'slot');
        $slots = $this->slot->slotById($doctor_id);
        $slotData = array();
        if (is_array($slots)) {
            foreach ($slots as $key => $slot) {
                $slotData['slot'][$slot->days][$slot->shift][] = $slot->slot;
            }
        }
        
         $patientDataCollection = array();
        $patient_id = $this->uri->segment('5');
        if (isset($patient_id)) {
            $patientDataCollection = $this->slot->patientById($patient_id);
        }


        $d = isset($_GET['d']) ? $_GET['d'] : '';  // appintment date
        if ($d != '') {
            
        } else {
            $d = date('d-m-Y');  //   date('Y-m-d H:i:s');   1-8-2025
        }

        $day = date('l', strtotime($d));
        $day = substr($day, 0, 2);


        $filter = array();
        $filter['d'] = ltrim(date('d', strtotime($d)), '0');
        $filter['m'] = date('m', strtotime($d));
        $filter['y'] = date('Y', strtotime($d));

        if (!empty($slotData['slot'][$day])) {
            $slotData = $slotData['slot'][$day];
        } else {
            $slotData = FALSE;  //  'Slot time not available'
        }



        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $postParam = array();

            // echo $postDate = $_GET['d'];
            //  echo DateTime::createFromFormat('m/d/Y', $postDate);  die;
            $appointmentTime = strtotime(date('m-d-Y', strtotime($_GET['d'])));
            // echo '<br/>';
            $currentTime = strtotime(date('m-d-Y'));


            if ($appointmentTime < $currentTime) {
                $this->session->set_flashdata('past_date_error', " You can't scheduled past date!");
                $this->session->set_flashdata('pastdata', $_POST);
                redirect('admin/appointment/schedule/' . $doctor_id . '?d=' . $postParam['data']['appointment']['appointment_date']);
                // unset($_POST);
            } else {
                $postParam['data']['appointment']['appointment_date'] = $_POST['day'] . '-' . $_POST['month'] . '-' . $_POST['year'];
            }


            $postParam['data']['patient']['first_name'] = $_POST['fname'];
            $postParam['data']['patient']['last_name'] = $_POST['lname'];
            $postParam['data']['patient']['mobile'] = $_POST['mobile'];
            $postParam['data']['patient']['email'] = $_POST['email'];
            $postParam['data']['patient']['city'] = $_POST['city'];
            $postParam['data']['patient']['state'] = $_POST['state'];
            $postParam['data']['patient']['country'] = $_POST['country'];
            $postParam['data']['patient']['status'] = 1;
            
           
             
            $postParam['data']['appointment']['slot'] = $_POST['slot_time'];
            $postParam['data']['appointment']['status'] = 1;
            $postParam['data']['appointment']['doctor_id'] = $doctor_id;
             if($patient_id !='' ){
                $postParam['data']['appointment']['patient_id'] = $patient_id?$patient_id:'';
                $res = $this->app->patient_appointment_exist($postParam);
            } else {
              $res = $this->app->patient_appointment_new($postParam);  
            }
      
            if ($res) {
                $this->session->set_flashdata('success', ' Your appointment is scheduled!');
                redirect('admin/doctor/profile/' . $doctor_id);
            }
        }

        
       // $dataCollection = array('headline' => 'Schedule appointment', 'slotData' => $slotData, 'filter' => $filter,'patientData'=>$patientDataCollection);
//        $this->load->view('admin/temp/headercrm', $title);
//        $this->load->view('admin/appointment/schedule', $dataCollection);
//        $this->load->view('admin/temp/footercrm', '');
        
        
        $header = array('page_title' => "Schedule Appointment | MiConsulting");
        $content = array('headline' => 'Schedule appointment', 'slotData' => $slotData, 'filter' => $filter,'patientData'=>$patientDataCollection);
        $footer = array('js' => "appointment.js");
        $this->getLayout('admin/appointment/schedule', $header, $left, $content, $footer);
        
        
    }

    public function create() {
        
        $filterArray = array();
        $filterArray['hospital'] = '';
        $filterArray['speciality'] = '';
        $id = $this->uri->segment('4');
        $appointment = $this->app->fetchById($id);
        
        $header = array('page_title' => "Create Appointment | MiConsulting");
        $content = array('headline' => 'Add appointment', 'appointment' => $appointment);
        $footer = array('js' => "appointment.js");
        $this->getLayout('admin/appointment/create', $header, $left, $content, $footer);
        
        
    }

    public function hospital() {
        $hospitals = $this->app->getHospital();
        echo json_encode($hospitals);
    }

    public function getspeciality() {
        $id = $_GET['id']; // = 17;
        $speciality = $this->app->getspecialityByHospital($id);
        echo json_encode($speciality);
    }

    public function getspecialitiesyall() {
        $speciality = $this->app->getspeciality();
        echo json_encode($speciality);
    }

    public function doctor() {
        $doctors = $this->app->getAllDoctor();
        echo json_encode($doctors);
    }
    
}
