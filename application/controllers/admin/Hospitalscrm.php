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
<<<<<<< HEAD
  {   
=======
  {
      
    $message='';
>>>>>>> origin/master
    if(isset($_POST['send']) && ($_POST['send']=="1"))
    {
         
        $pic =$_FILES['hospital_image']['name'];
        $pic_loc = $_FILES['hospital_image']['tmp_name'];
        $folder="assets/img/hospitals/";
        $move=$folder.$pic;
        move_uploaded_file($_FILES['hospital_image']['tmp_name'],$move);
<<<<<<< HEAD
        $hospList=$this->model->addhospitalDetail($_POST,$pic);
    
    }
    
    $hospList=$this->model->gethospitallist();
    $speciliztion=$this->model->getspeciliztions();

    $header = array('page_title' => 'Add Hospital | MiConsulting');
    $content = array('headline'=>'Add Hospital','hospList'=>$hospList,'speciliztion'=>$speciliztion);
    $this->getLayout('admin/hospitalscrm/addhospital', $header, $left, $content, $footer);

=======
        $hospList=$this->app->addhospitalDetail($_POST,$pic,$this->session['user_id']);
        $message="Hospital Added Successfully";
    }
    
    $hospList=$this->app->gethospitallist();
    $speciliztion=$this->app->getspeciliztions();
    
    $data1 = array(
        'page_title' => 'Add Hospital | MiConsulting'
    );
    $data=array("headline"=>"Add Hospital",'hospList'=>$hospList,'speciliztion'=>$speciliztion,'message'=>$message);
    
    $this->load->view('admin/temp/headercrm',$data1);
    $this->load->view('admin/hospitalscrm/addhospital',$data);
    $this->load->view('admin/temp/footercrm');
>>>>>>> origin/master

  }
  public function addhospitalname(){
  
    $hospitalName=$_GET['hospitl'];
<<<<<<< HEAD
    $hsp=$this->model->addHospitalname($hospitalName);
=======
    if($hospitalName!=''){
    $hsp=$this->app->addHospitalname($hospitalName);
>>>>>>> origin/master
    if(count($hsp)>=1){
     //$bank=$model->insertnewbank($_GET['bankName']);
     echo '<span style="color:green;" >'.$hospitalName.' Add Successfully</sapn>'; 
    }else{
     echo '<span style="color:red;" >'.$hospitalName.' Already Exist </span>'; 
    }
<<<<<<< HEAD
    
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
=======
    }else{
     echo '<span style="color:red;" >Please Enter Hospital Name.</span>';  
    }
}
public function updateGetNewHospital(){
    
    $hospList=$this->app->gethospitallist();
    $html='';
   foreach($hospList as $val):
    $html.='<option value="'.$val->id.'_'.$val->name.'">'.$val->name.'</option>' ;  
   endforeach;
   $html.='<option value="oth">Other</option>' ;  
   echo $html;
}
  public function viewhospital(){
    $hospital = $this->app->hospitalById($this->uri->segment('4')); 
    
  
    $data=array('headline' => 'Hospital Profile','hospital'=>$hospital);
    $data1=array('page_title'=>"Profile | MiConsulting");
>>>>>>> origin/master
    
  public function viewhospital(){
    $hospital = $this->model->hospitalById($this->uri->segment('4')); 

    $header = array('page_title' => 'Hospital Profile | MiConsulting');
    $content = array('headline'=>'Hospital Profile','hospital'=>$hospital);
    $this->getLayout('admin/hospitalscrm/viewhospital', $header, $left, $content, $footer);
      
  }

   public function viewhospitaldata(){
  
<<<<<<< HEAD
       $hospital = $this->model->hospitalById($_GET['id']); 
       echo json_encode($hospital); 
=======
       $hospital = $this->app->hospitalById($_GET['id']); 
       $specil=$this->app->getspecialization($hospital[0]->specialization);
     
       $ar=array('hospital'=>$hospital,'sepecial'=>$specil);
     
       echo json_encode($ar); 
>>>>>>> origin/master
      
  }
  public function edithospital()
  {
<<<<<<< HEAD
       
    if(isset($_POST['send']) && ($_POST['send']=="1")){

      $hospList=$this->model->edithospitalDetail($_POST,$this->uri->segment('4'));
    }
    
    $editdata=$this->model->hospitalById($this->uri->segment('4')); 
    $hospList=$this->model->gethospitallist();
=======
    $message=''; 
    if(isset($_POST['send']) && ($_POST['send']=="1"))
    {
      $hospList=$this->app->edithospitalDetail($_POST,$this->uri->segment('4'),$this->session['user_id']);
      $message='Updated Successfully';
    }
    $speciliztion=$this->app->getspeciliztions();
    $editdata=$this->app->hospitalById($this->uri->segment('4')); 
    $specil=$this->app->getspecialization($editdata[0]->specialization);
    $hospList=$this->app->gethospitallist();
    $data1 = array( 'page_title' => 'Add Hospital | MiConsulting');
    $data=array("headline"=>"Add Hospital",'hospList'=>$hospList,'editdata'=>$editdata,'message'=>$message,'specil'=>$specil,'speciliztion'=>$speciliztion);    
    $this->load->view('admin/temp/headercrm',$data1);
    $this->load->view('admin/hospitalscrm/edithospital',$data);
    $this->load->view('admin/temp/footercrm');
>>>>>>> origin/master

    $header = array('page_title' => 'Add Hospital | MiConsulting');
    $content = array('headline'=>'Add Hospital','hospList'=>$hospList,'editdata'=>$editdata);
    $this->getLayout('admin/hospitalscrm/edithospital', $header, $left, $content, $footer);
  }
  
  public function delhospitalwithid(){
    $id=$_GET['appid'];
    $this->model->udpatehospitalstatus($id);
    
    
  }
}
