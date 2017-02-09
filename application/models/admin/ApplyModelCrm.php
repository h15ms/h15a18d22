<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class ApplyModelcrm extends CI_Model
{

  
  function __construct() {
      parent::__construct(); 
  }


  public function allApplysAdmin()
  {
      $getdata = $this->db->select('*')->from( PR.'apply');
      $result = $getdata->get();
      
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }

  }   


  public function allApplysAgent($id)
  {
      $query = "SELECT c.*, a.* FROM `".PR."customer` c  inner join  ".PR."apply a on c.id=a.user_id WHERE c.`agent_id` =".$id." OR c.`id` = ".$id;
      $getdata = $this->db->query($query);

        if ($getdata->conn_id->affected_rows > 0) {
            return $getdata->result();
        } else {
            return false;
        }

  }
    
  public function agentapplication($id)
  {
      $getdata = $this->db->select('*')->get_where( PR.'apply', array('user_id' => $id));
      return $getdata->result();
  }  
    
  public function applyById($appid) 
  {     
       
     $getdata = $this->db->select('*')->get_where( PR.'apply',array('app_id'=>$appid ));
          
        if ($getdata->num_rows() > 0) {
            return $getdata->result();
        } else {
            return false;
        }   
  } 

 public function updateNotice($appid,$notice)
 {

  $this->db->where('app_id' , $appid);
  $update = $this->db->update( PR.'apply', array('notice' => $notice));

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
   
   $this->db->where('app_id' , $app_id);
   $update = $this->db->update( PR.'apply', array('visa_id' => $visaId, 'emp_working' => $this->session_data['user_name'], 'status' => $status));

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

   $this->db->where('app_id' , $app_id);
   $update = $this->db->update( PR.'apply', array('embassy_id' => $embId, 'emp_working' => $this->session_data['user_name'], 'status' => $status));

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

   $this->db->where('app_id' , $app_id);
   $update = $this->db->update( PR.'apply', array('emp_working' => $this->session_data['user_name'], 'status' => $status));

   if(isset($update))
   {
     return "true";
   }else
   {
     return "False";
   } 
 }



}
