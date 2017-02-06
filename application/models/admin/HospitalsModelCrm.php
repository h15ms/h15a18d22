<?php
class HospitalsModelcrm extends CI_Model
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
    $this->db->select('*')->from('mi_hospital_detail  d');
    $this->db->join('mi_hospital  h' , 'h.id=d.hospital_id', 'left');
    $this->db->where(array('d.id'=>$appid,'h.status'=>1 ));
    $this->db->order_by('d.id','asc');         
    $getdata = $this->db->get(); 
    
        if ($getdata->num_rows() > 0) {
            return $getdata->result();
        } else {
            return false;
        }   
  }
  public function getspecialization($inids){
     
      $query=$this->db->query('SELECT sepcialization FROM mi_specialization where id IN ('.$inids.')');

      return   $res=$query->result();
  
       
  }
 public function getallhospitallist(){
    $this->db->select('*, d.id appID')->from(PR.'hospital_detail  d');
    $this->db->join('mi_hospital  h' , 'h.id=d.	hospital_id ', 'left');
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
public function getspeciliztions(){
    $this->db->select('*')->from(PR.'specialization');
    $this->db->where(array('status'=>1));
    $this->db->order_by('sepcialization','asc');         
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

public function addhospitalDetail($arr,$pic,$userID){
        $hosId=explode('_',$arr['hospitalssel']); 
        $specStr= implode(',', $arr['specialization']);  
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
          'specialization'=> $specStr,
          'createdtime'=>time(),
          'createdby'=> $userID ); 
      
      $insertID = $this->db->insert(PR.'hospital_detail', $data);
      return $insertID;  
} 
public function edithospitalDetail($arr,$id,$userID){
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
          'createdby'=>$userID); 
            
            $this->db->where('id',$id);
            $this->db->update('mi_hospital_detail',$data);

      return;
} 
public function udpatehospitalstatus($id){
   //$hosId=explode('_',$arr['hospitalssel']); 
    
  
      $data=array(
         
          'status'=>0,
           ); 
            
            $this->db->where('id',$id);
            $this->db->update('mi_hospital_detail',$data);

      return;
} 





}
