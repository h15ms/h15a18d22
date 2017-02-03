<?php
class ApplyModelcrm extends CI_Model
{

  
  function __construct() {
     
      parent::__construct(); // call parent constructor
      $this->load->database();
  }


  public function allApplysAdmin()
  {
      $getdata = $this->db->select('*')->from('mi_apply');
      $result = $getdata->get();
      
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }

  }   


  public function allApplysAgent($id)
  {
      $query = "SELECT c.*, a.* FROM `mi_customer` c  inner join  mi_apply a on c.id=a.user_id WHERE c.`agent_id` =".$id." OR c.`id` = ".$id;
      $getdata = $this->db->query($query);

        if ($getdata->conn_id->affected_rows > 0) {
            return $getdata->result();
        } else {
            return false;
        }

  }
    
  public function agentapplication($id)
  {
      $getdata = $this->db->select('*')->get_where('mi_apply', array('user_id' => $id));
      return $getdata->result();
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
