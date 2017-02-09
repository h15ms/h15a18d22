<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Base.php');
class Specialization extends Base {

  function __construct()
  {
    parent:: __construct();
    $this->isLoggedIn();
    $this->load->model('admin/SpecializationModel','model');

  }

  public function index() 
  {
     $hospitals = json_encode($this->model->allspecialization()); 

     $header = array('page_title' => 'All Hospitals | MiConsulting');
     $content = array('headline'=>'All Hospitals', 'hospitals'=>$hospitals);
     $this->getLayout('admin/specialization/index', $header, $left, $content, $footer);
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


  public function getsonSpecialization(){
      
      $doctors = $this->model->fetchAll();
        
        $config = array();
        $config["base_url"] = base_url() . "admin/specialization/index";
        $config["total_rows"] = count($doctors);//$this->Countries->record_count();
        $config["per_page"] = 10;
        $config["uri_segment"] =$_GET['id']?$_GET['id']:0;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = round($choice);
        $this->pagination->initialize($config);
        $page = ($_GET['id']) ? $_GET['id'] : 0;
        $data["results"] = $this->model->fetchAll($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        
       $hospitals = json_encode($data); 
      echo  $hospitals;
      
  }
  public function changestatus(){
        $status=$_GET['status'];
        $id=$_GET['id'];
        $this->model->udpatestatus($id,$status);

  }

  public function addspecilization()
  {
     $specif=$_GET['specifi'];
     $arr=array('sepcialization'=>$specif);
     $pre=$this->model->allspecialization($specif);
   
     if(count($pre) <= 0){
     $this->model->insert(PR.'specialization', $arr);
     echo '<span style="color:green;"> '.$specif.' has been added successfully </span>';
     }else{
     echo '<span style="color:red;">'. $pre[0]->sepcialization.' already exist </span>' ; 
     }
     
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
    $this->getLayout('admin/specialization/viewhospital', $header, $left, $content, $footer);
      
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
    $this->getLayout('admin/specialization/edithospital', $header, $left, $content, $footer);
  }
  
  public function delhospitalwithid(){
    $id=$_GET['appid'];
    $this->model->udpatehospitalstatus($id);
    
    
  }
}
