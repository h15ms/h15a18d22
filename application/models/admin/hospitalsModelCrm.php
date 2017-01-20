<?php
class hospitalsModelCrm extends CI_Model
{

  
  public function __construct() 
  {
      parent:: __construct();
  }


  public function allApplys()
  {
      
      $getdata = $this->db->select('*')->from('mi_apply');
      $result = $getdata->get();
      
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }

  }
    
    
  public function applyById($appid) 
  {     
       
     $getdata = $this->db->select('*')->get_where('mi_apply',array('app_id'=>$appid ));
    //  $result = $getdata->get();
          
        if ($getdata->num_rows() > 0) {
            return $getdata->result();
        } else {
            return false;
        }   
  }
  

public function gethospitallist(){
    $getdata = $this->db->select('*')->get_where('mi_hospital', array('status'=>1));
    
    //$result = $getdata->get();
       
        if ($getdata->num_rows() > 0) {
            return $getdata->result();
        } else {
            return false;
        }   
}
public function addHospitalname($arr){
      $data=array('name'=>$arr,'created'=> time()); 
      $insertID = $this->db->insert('mi_hospital', $data);
      return $insertID;
}

public function addhospitalDetail($arr){
    echo '<pre>'; print_r($arr); 
    
        echo '<pre>';
        $sess = $this->session->userdata();
        print_r($sess['logged_in']);
    exit;
      $data=array('hospital_id'=>$arr,
          'address'=> time(),
          'city'=> time(),
          'state'=> time(),
          'phone_no'=> time(),
          'email'=> time(),
          'website'=> time(),
          'rating'=> time(),
          'distance_from_airport'=> time(),
          'emergency_services'=> time(),
          'hospital_type'=> time(),
          'address'=> time(),
          'specialization'=> time(),
          'createdtime'=>time(),
          'createdby'=>time()
          
          
          
          
          ); 
      $insertID = $this->db->insert('mi_hospital_detail', $data);
      return $insertID;  
} 
}