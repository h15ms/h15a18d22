<?php
class Hospitalscrm extends CI_Controller {

  function __construct()
	{
		parent::__construct();
                
		// Load form helper library
		$this->load->helper('form');

		// Load form validation library
		$this->load->library('form_validation');

		// Load session library
		$this->load->library('session');

		// Load database
		$this->load->model('admin/hospitalsModelCrm','app');
	}
  
  public function index() 
  {
   

     $hospitals = $this->app->getallhospitallist(); 
     $data=array('headlines' => 'All Hospitals','hospitals'=>$hospitals);
     $data1=array('page_title'=>"All Hospitals | MiConsulting");
     
     
     $this->load->view('admin/temp/headercrm',$data1);
     $this->load->view('admin/hospitalscrm/index',$data);
     $this->load->view('admin/temp/footercrm');
  }  
  public function addhospital()
  {
    if(isset($_POST['send']) && ($_POST['send']=="1"))
    {
    
        $hospList=$this->app->addhospitalDetail($_POST);
    
    }
    
    $hospList=$this->app->gethospitallist();
    $data1 = array(
        'page_title' => 'Add Hospital | MiConsulting'
    );
    $data=array("headline"=>"Add Hospital",'hospList'=>$hospList);
    
    $this->load->view('admin/temp/headercrm',$data1);
    $this->load->view('admin/hospitalscrm/addhospital',$data);
    $this->load->view('admin/temp/footercrm');
//    $this->_view->title         = "Add employee | MiConsulting";
//    $this->_view->headline      = "Add employee";
//    $this->_view->display('user/adduser.tpl.php');
  }
  public function addhospitalname(){
  
    $hospitalName=$_GET['hospitl'];
    $hsp=$this->app->addHospitalname($hospitalName);
    if(count($hsp)>=1){
     //$bank=$model->insertnewbank($_GET['bankName']);
     echo '<span style="color:green;" >'.$hospitalName.' Add Successfully</sapn>'; 
    }else{
     echo '<span style="color:red;" >'.$hospitalName.' Already Exist </span>'; 
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
  public function profil(){
   
       $applys = $this->app->applyById($this->uri->segment('4')); 
       $data=array('headline' => 'Applicant Profile','apply'=>$applys);
     $data1=array('page_title'=>"Profile | MiConsulting");
     
      $this->load->view('admin/temp/headercrm',$data1);
     $this->load->view('admin/hospitalscrm/profil',$data);
     $this->load->view('admin/temp/footercrm');
      
  }
}