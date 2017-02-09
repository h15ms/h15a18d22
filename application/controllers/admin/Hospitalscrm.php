<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Base.php');
class Hospitalscrm extends Base {

  function __construct()
  {
    parent:: __construct();
    $this->isLoggedIn();
    $this->load->model('admin/HospitalsModelCrm','model');
	}


  public function index() 
  {

     $hospitals = json_encode($this->model->getallhospitallist()); 
     $header = array('page_title' => 'All Hospitals | MiConsulting');
     $content = array('headline'=>'All Hospitals','hospitals'=>$hospitals);
     $this->getLayout('admin/hospitalscrm/index', $header, $left, $content, $footer);
  } 
 

  function do_upload()
  {
      $config['upload_path'] = './uploads/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size'] = '100';
      $config['max_width']  = '1024';
      $config['max_height']  = '768';
      $config['overwrite'] = TRUE;
      $config['encrypt_name'] = FALSE;
      $config['remove_spaces'] = TRUE;
      if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('userfile')) {
          echo 'error';
      } else {

          return array('upload_data' => $this->upload->data());
      }
  }


  public function getindexjson(){
     echo    json_encode($this->model->getallhospitallist()); 
       
  }
  

  public function addhospital()
  {
      
    $message='';

    if(isset($_POST['send']) && ($_POST['send']=="1"))
    {
         
        $pic =$_FILES['hospital_image']['name'];
        $pic_loc = $_FILES['hospital_image']['tmp_name'];
        $folder="assets/img/hospitals/";
        $move=$folder.$pic;
        move_uploaded_file($_FILES['hospital_image']['tmp_name'],$move);

        $hospList=$this->model->addhospitalDetail($_POST,$pic,$this->session_data['user_id']);
        $message="Hospital Added Successfully";
    }
    
    $hospList=$this->model->gethospitallist();
    $speciliztion=$this->model->getspeciliztions();

    $header = array('page_title' => 'Add Hospital | MiConsulting');
    $content = array('headline'=>'Add Hospital','hospList'=>$hospList,'speciliztion'=>$speciliztion,'message'=>$message);
    $this->getLayout('admin/hospitalscrm/addhospital', $header, $left, $content, $footer);


  }
  public function addhospitalname(){
  
    $hospitalName=$_GET['hospitl'];

    if($hospitalName!=''){
    $hsp=$this->model->addHospitalname($hospitalName);

    if(count($hsp)>=1){
     //$bank=$model->insertnewbank($_GET['bankName']);
     echo '<span style="color:green;" >'.$hospitalName.' Add Successfully</sapn>'; 
    }else{
     echo '<span style="color:red;" >'.$hospitalName.' Already Exist </span>'; 
    }
    }else{
     echo '<span style="color:red;" >Please Enter Hospital Name.</span>';  
    }
}

    
  public function viewhospital(){
      
    $hospital = $this->model->hospitalById($this->uri->segment('4')); 

    $header = array('page_title' => 'Hospital Profile | MiConsulting');
    $content = array('headline'=>'Hospital Profile','hospital'=>$hospital);
    $this->getLayout('admin/hospitalscrm/viewHospital', $header, $left, $content, $footer);
      
  }

   public function viewhospitaldata(){
  
       $hospital = $this->model->hospitalById($_GET['id']);
       $specil=$this->model->getspecialization($hospital[0]->specialization);   
      
       $ar=array('hospital'=>$hospital,'sepecial'=>$specil); 
     
       echo json_encode($ar); 
      
  }
  
  public function edithospital()
  {
       
    $message=''; 
    if(isset($_POST['send']) && ($_POST['send']=="1"))
    {
      $hospList=$this->model->edithospitalDetail($_POST,$this->uri->segment('4'),$this->session_data['user_id']);
      $message='Updated Successfully';
    }
    $sp='';
    $listspe='';
    $speciliztion=$this->model->getspeciliztions();
    $editdata=$this->model->hospitalById($this->uri->segment('4')); 
    if($editdata[0]->specialization!=''){
    $listspe=$this->model->getspecialization($editdata[0]->specialization);
   
    foreach($listspe as $v){
        $sp.=$v->sepcialization.',';
    }
    }
    $hospList=$this->model->gethospitallist();
    
    $header = array('page_title' => 'Add Hospital | MiConsulting');
    $content = array('headline'=>'Add Hospital','hospList'=>$hospList,'editdata'=>$editdata,'message'=>$message,'specil'=>$listspe,'speciliztion'=>$speciliztion,'listspe'=> $sp);
    $this->getLayout('admin/hospitalscrm/edithospital', $header, $left, $content, $footer);
  }
  
  public function delhospitalwithid(){
    $id=$_GET['appid'];
    $this->model->udpatehospitalstatus($id);
    
    
  }
  
}
