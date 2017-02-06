<?php
class Hospitalscrm extends CI_Controller {

  public $session;

  function __construct()
  {
    parent:: __construct();
    error_reporting(0);
    if(isset($_SESSION['logged_in'])){
      $this->session = $this->session->userdata('logged_in');
      if(( $this->session['user_level'] != '1' && $this->session['user_level_status'] != '1' ) || ( $this->session['user_level'] != '2' && $this->session['user_level_status'] != '1' ) ){  redirect('home','refresh');}//header ('Location: '.base_url().'home '); }
    }else{
      redirect('login','refresh');
    }      
   
  
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('admin/HospitalsModelCrm','app');
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
  public function index() 
  {
   
     
     $hospitals = json_encode($this->app->getallhospitallist()); 
     
     
     $data=array('headlines' => 'All Hospitals','hospitals'=>$hospitals);
     $data1=array('page_title'=>"All Hospitals | MiConsulting");
     
     
     $this->load->view('admin/temp/headercrm',$data1);
     $this->load->view('admin/hospitalscrm/index',$data);
     $this->load->view('admin/temp/footercrm');
  } 
 
  public function getindexjson(){
     echo    json_encode($this->app->getallhospitallist()); 
       
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

  }
  public function addhospitalname(){
  
    $hospitalName=$_GET['hospitl'];
    if($hospitalName!=''){
    $hsp=$this->app->addHospitalname($hospitalName);
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
    
    $this->load->view('admin/temp/headercrm',$data1);
    $this->load->view('admin/hospitalscrm/viewhospital',$data);
    $this->load->view('admin/temp/footercrm');
      
  }
   public function viewhospitaldata(){
  
       $hospital = $this->app->hospitalById($_GET['id']); 
       $specil=$this->app->getspecialization($hospital[0]->specialization);
     
       $ar=array('hospital'=>$hospital,'sepecial'=>$specil);
     
       echo json_encode($ar); 
      
  }
  public function edithospital()
  {
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

  }
  
  public function delhospitalwithid(){
    $id=$_GET['appid'];
    $this->app->udpatehospitalstatus($id);
    
    
  }
}
