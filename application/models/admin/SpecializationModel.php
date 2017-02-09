<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class SpecializationModel extends CI_Model
{

  
  public function __construct() 
  {
      parent:: __construct();
  }


  public function allspecialization($specif)
  {
      
      $getdata = $this->db->select('*')->from(PR.'specialization')->where("sepcialization LIKE '%$specif%'");
      $result = $getdata->get();
   
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }

  }
    
  public function fetchAll($limit = '', $start = '') {
     
      if ($limit != '') {
          $getdata = $this->db->select('*')->from(PR . 'specialization')->limit($limit, $start);
          $getdata->order_by('sepcialization','ASC');
          $result = $getdata->get();
      } else {
          $getdata = $this->db->select('*')->from(PR . 'specialization');
          $result = $getdata->get();
      }
      if ($result->num_rows() > 0) {
          return $result->result();
      } else {
          return false;
      }
  }

  public function insert($table, $data){
      $insertID = $this->db->insert($table, $data);
      return $insertID; 
      
  }

  public function hospitalById($appid) 
  {  
     //$getdata = $this->db->select('*')->get_where(PR.'hospital_detail',array('d.id'=>$appid,'h.status'=>1 ));
    //  $result = $getdata->get();
    $this->db->select('*')->from(PR.'hospital_detail  d');
    $this->db->join(PR.'hospital  h' , 'h.id=d.hospital_id', 'left');
    $this->db->where(array('d.id'=>$appid,'h.status'=>1 ));
    $this->db->order_by('d.id','asc');         
    $getdata = $this->db->get(); 
    
        if ($getdata->num_rows() > 0) {
            return $getdata->result();
        } else {
            return false;
        }   
  }
 public function getallhospitallist(){
    $this->db->select('*, d.id appID')->from(PR.'hospital_detail  d');
    $this->db->join(PR.'hospital  h' , 'h.id=d.	hospital_id ', 'left');
    $this->db->where(array('h.status'=>1, 'd.status'=>1));
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
    $getdata = $this->db->select('*')->get_where(PR.'hospital', array('status'=>1));
    
    //$result = $getdata->get();
       
        if ($getdata->num_rows() > 0) {
            return $getdata->result();
        } else {
            return false;
        }   
}
public function addHospitalname($arr){
      $data=array('name'=>$arr,'created'=> time()); 
      $insertID = $this->db->insert(PR.'hospital', $data);
      return $insertID;
}

public function addhospitalDetail($arr,$pic){
   $hosId=explode('_',$arr['hospitalssel']); 
      
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
          'createdby'=> $this->session_data['user_id'] ); 
      $insertID = $this->db->insert(PR.'hospital_detail', $data);
      return $insertID;  
} 
public function edithospitalDetail($arr,$id){
   //$hosId=explode('_',$arr['hospitalssel']); 
    
      $data=array(
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
        
          'specialization'=> $arr['specialization'],
          'createdtime'=>time(),
           ); 
            
            $this->db->where('id',$id);
            $this->db->update(PR.'hospital_detail',$data);

      return;
} 
public function udpatestatus($id,$status){
   //$hosId=explode('_',$arr['hospitalssel']); 
    
  
        



      $data=array(
         
          'status'=>$status,
           ); 
            
            $this->db->where('id',$id);
            $this->db->update(PR . 'specialization',$data);

      return;
} 





}
