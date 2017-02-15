<?php
class HospitalModel extends CI_Model
{

  private $_con;
  
  public function __construct() 
  {
		#require_once 'library/Database.php';
		#$this->_con = new Database();
		#$this->_con = $this->_con->con();
      
  }
   public function getspeciliztions(){  
      
    $this->db->select('*')->from(PR.'specialization');
     $this->db->order_by('sepcialization','asc');         
    $getdata = $this->db->get(); 
    //$result = $getdata->get();
       
        if ($getdata->num_rows() > 0) {
            return $getdata->result();
        } else {
            return false;
        }   
} 
  public function gethospitalarea(){  
      
    $this->db->select('id, location_area')->from(PR.'hospital_detail');
     $this->db->order_by('location_area','asc');         
    $getdata = $this->db->get(); 
    //$result = $getdata->get();
       
        if ($getdata->num_rows() > 0) {
            return $getdata->result();
        } else {
            return false;
        }   
}
  public function getallhospital(){  
      
    $this->db->select('*')->from(PR.'hospital_detail  d');
    $this->db->join(PR.'hospital  h' , 'h.id=d.hospital_id', 'left');
    $this->db->where(array('h.status'=>1 ));
    $this->db->order_by('d.id','asc');         
    $getdata = $this->db->get(); 
     
        if ($getdata->num_rows() > 0) {
            return $getdata->result();
        } else {
            return false;
        }
}
}
