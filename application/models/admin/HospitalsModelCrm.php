<?php
class HospitalsModelCrm extends CI_Model
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
    
    
  public function hospitalById($appid) 
  {     
       
     //$getdata = $this->db->select('*')->get_where('mi_hospital_detail',array('d.id'=>$appid,'h.status'=>1 ));
    //  $result = $getdata->get();
          $this->db->select('*, d.id appID')->from('mi_hospital_detail  d');
    $this->db->join('mi_hospital  h' , 'h.id=d.	hospital_id ', 'left');
    $this->db->where(array('d.id'=>$appid,'h.status'=>1 ));
    $this->db->order_by('d.id','asc');         
    $getdata = $this->db->get(); 
    //$result = $getdata->get();
       
    
    
        if ($getdata->num_rows() > 0) {
            return $getdata->result();
        } else {
            return false;
        }   
  }
 public function getallhospitallist(){
    $this->db->select('*, d.id appID')->from('mi_hospital_detail  d');
    $this->db->join('mi_hospital  h' , 'h.id=d.	hospital_id ', 'left');
    $this->db->where('h.status',1);
    $this->db->order_by('d.id','asc');         
    $getdata = $this->db->get(); 
    //$result = $getdata->get();
       
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

public function addhospitalDetail($arr,$pic){
   $hosId=explode('_',$arr['hospitalssel']); 
    
  
        $sess = $this->session->userdata();
      
      $data=array('hospital_id'=>$hosId[0],
          'address'=> $arr['address'],
          'city'=> $arr['city'],
          'state'=> $arr['state'],
          'phone_no'=> $arr['phone_no'],
          'email'=> $arr['email'],
          'website'=> $arr['website'],
          'rating'=> $arr['rating'],
          'distance_from_airport'=>$arr['distance_from_airport'],
          'emergency_services'=> $arr['emergency_services'],
          'hospital_type'=> $arr['hospital_type'],
          'image'=>$pic,
          'specialization'=> $arr['specialization'],
          'createdtime'=>time(),
          'createdby'=> $sess['logged_in']['user_id'] ); 
      $insertID = $this->db->insert('mi_hospital_detail', $data);
      return $insertID;  
} 
}