<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class ModuleManage  extends CI_Model
{

  

  public function __construct() 
  {
		
  }

    
  public function updateModule($arr)
  {  
    print_r($arr);
    exit;
    $data=array(
     'user_type'=>$arr['user_level'],
     'firstname'=>$arr['firstname'],
     'lastname'=>$arr['lastname'],
     'city'=>$arr['city'],
     'zip'=>$arr['zip'],
     'street'=>$arr['street'],
     'state'=>$arr['state'],
     'country'=>$arr['country'],
     'email'=>$arr['email'],
     'phone'=>$arr['phone']
     ); 
     
     $this->db->where('id', $arr['id']);
     $this->db->update(PR.'customer', $data);

     return 'OK';

  }
    
    
  public function dataFetch()
  {          
      $newid = $this->db->select('*')->get_where(PR.'module');
      return $newid->result();
  }   

  public function dataFetchById($id)
  {          
      $newid = $this->db->select('*')->get_where(PR.'module', array('id'=>$id));
      return $newid->result();
  }  

  public function moduleInsert($arr)
  {      

     $data=array(
         'user_level'=>$arr['user_level'],
         'module'=>$arr['module_name'],
         'action'=>$arr['action'],
         'view'=>$arr['view'],
         'delete'=>$arr['delete'],
         'update'=>$arr['update']
         ); 
      
      $newid = $this->db->insert(PR.'module', $data);
      return $newid;
  }


}
