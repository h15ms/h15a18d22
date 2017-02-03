<?php
class ApplyModelcrm extends CI_Model
{

  
  function __construct() {
     
      parent::__construct(); // call parent constructor
      $this->load->database();
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
//        foreach($con->query('SELECT * from '.PREFIX.'apply ORDER BY id DESC ') as $row) { $applys[] = $row; }    	
//        return $applys;
//        
//        $getdata = $this->db->select('id, username, password, firstname, lastname, zip, email, avatar, email_confirm, status')->get_where('mi_customer', array('email' => $data, 'email_confirm' => '1'));
//
//        if ($getdata->num_rows() == 1) {
//            return $getdata->result();
//        } else {
//            return false;
//        }
  }
    
    
  public function applyById($appid) 
  {     
       
     $getdata = $this->db->select('*')->get_where('mi_apply',array('app_id'=>$appid ));
          
        if ($getdata->num_rows() > 0) {
            return $getdata->result();
        } else {
            return false;
        }   
  }
    
  
//  public function countApplys($appid) 
//  {          
//        $con = new Database();
//        $con = $con->con();
//        $nRows = $con->query('SELECT count(*) from '.PREFIX.'apply WHERE app_id = "'.$appid.'" ')->fetchColumn();
//        return $nRows; 
//  }
//
//    

 

 public function updateNotice($appid,$notice)
 {

  $this->db->where('app_id' , $appid);
  $update = $this->db->update('mi_apply', array('notice' => $notice));

  if(isset($update))
  {
    return "true";
  }else
  {
    return "False";
  }

 }


public function updateVisaId($app_id, $visaId, $status)
 {
    $sess = $this->session->userdata();
    $sessName = $sess['logged_in']['user_name'];
   
   $this->db->where('app_id' , $app_id);
   $update = $this->db->update('mi_apply', array('visa_id' => $visaId, 'emp_working' => $sessName, 'status' => $status));

   if(isset($update))
   {
     return "true";
   }else
   {
     return "False";
   } 
 }

public function updateEmbassyId($app_id, $embId, $status)
 {
  $sess = $this->session->userdata();
  $sessName = $sess['logged_in']['user_name'];

   $this->db->where('app_id' , $app_id);
   $update = $this->db->update('mi_apply', array('embassy_id' => $embId, 'emp_working' => $sessName, 'status' => $status));

   if(isset($update))
   {
     return "true";
   }else
   {
     return "False";
   } 
 }

 public function updateStatus($app_id, $status)
 {
  $sess = $this->session->userdata();
  $sessName = $sess['logged_in']['user_name'];

   $this->db->where('app_id' , $app_id);
   $update = $this->db->update('mi_apply', array('emp_working' => $sessName, 'status' => $status));

   if(isset($update))
   {
     return "true";
   }else
   {
     return "False";
   } 
 }



}
