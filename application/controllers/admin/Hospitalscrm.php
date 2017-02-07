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
    if(isset($_POST['send']) && ($_POST['send']=="1"))
    {
         print_r($_POST);
        $pic =$_FILES['hospital_image']['name'];
        $pic_loc = $_FILES['hospital_image']['tmp_name'];
        $folder="assets/img/hospitals/";
        $move=$folder.$pic;
        move_uploaded_file($_FILES['hospital_image']['tmp_name'],$move);
        $hospList=$this->model->addhospitalDetail($_POST,$pic);
    
    }
    
    $hospList=$this->model->gethospitallist();
    $speciliztion=$this->model->getspeciliztions();

    $header = array('page_title' => 'Add Hospital | MiConsulting');
    $content = array('headline'=>'Add Hospital','hospList'=>$hospList,'speciliztion'=>$speciliztion);
    $this->getLayout('admin/hospitalscrm/addhospital', $header, $left, $content, $footer);


  }
  public function addhospitalname(){
  
    $hospitalName=$_GET['hospitl'];
    $hsp=$this->model->addHospitalname($hospitalName);
    if(count($hsp)>=1){
     //$bank=$model->insertnewbank($_GET['bankName']);
     echo '<span style="color:green;" >'.$hospitalName.' Add Successfully</sapn>'; 
    }else{
     echo '<span style="color:red;" >'.$hospitalName.' Already Exist </span>'; 
    }
    
  }
  public function updateGetNewHospital(){
      
      $hospList=$this->model->gethospitallist();
      $html='';
     foreach($hospList as $val):
      $html.='<option value="'.$val->id.'_'.$val->name.'">'.$val->name.'</option>' ;  
     endforeach;
     $html.='<option value="oth">Other</option>' ;  
     echo $html;
  }
    
  public function viewhospital(){
    $hospital = $this->model->hospitalById($this->uri->segment('4')); 

    $header = array('page_title' => 'Hospital Profile | MiConsulting');
    $content = array('headline'=>'Hospital Profile','hospital'=>$hospital);
    $this->getLayout('admin/hospitalscrm/viewhospital', $header, $left, $content, $footer);
      
  }

   public function viewhospitaldata(){
  
       $hospital = $this->model->hospitalById($_GET['id']); 
       echo json_encode($hospital); 
      
  }
    public function edithospital()
  {
       
    if(isset($_POST['send']) && ($_POST['send']=="1")){

      $hospList=$this->model->edithospitalDetail($_POST,$this->uri->segment('4'));
    }
    
    $editdata=$this->model->hospitalById($this->uri->segment('4')); 
    $hospList=$this->model->gethospitallist();

    $header = array('page_title' => 'Add Hospital | MiConsulting');
    $content = array('headline'=>'Add Hospital','hospList'=>$hospList,'editdata'=>$editdata);
    $this->getLayout('admin/hospitalscrm/edithospital', $header, $left, $content, $footer);
  }
  
  public function delhospitalwithid(){
    $id=$_GET['appid'];
    $this->model->udpatehospitalstatus($id);
    
    
  }
}
