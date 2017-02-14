<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class ModuleManage  extends CI_Model
{

  

  public function __construct() 
  {
		
  }

    
  public function moduleUpdate($arr)
  {  

    $data=array(
     'user_level'=>$arr['user_level'],
     'module'=>$arr['module_name'],
     'action'=>$arr['action'],
     'view'=>$arr['view'],
     'delete'=>$arr['delete'],
     'update'=>$arr['update']
     ); 
     
     $this->db->where('id', $arr['id']);
     $this->db->update(PR.'module', $data);

     return 'OK';
  }
    
    
  public function dataFetch()
  {          
      $this->db->select('*');
      $this->db->order_by('module', 'asc'); 
      $newid = $this->db->get(PR.'module');
      return $newid->result();
  }   

  public function showpaneldata()
  {          
      $this->db->select('*');
      $this->db->order_by('sub_id', 'asc'); 
      $newid = $this->db->get(PR.'leftpanel');
      return $newid->result();
  }   

  public function updateStatusId($id, $status)
  {          

      $this->db->where('id', $id);
      $out = $this->db->update(PR.'module', array('status' => $status));

      return $out;
  }  

  public function updateStatusIdSidePanel($id, $status)
  {          

      $this->db->where('id', $id);
      $out = $this->db->update(PR.'leftpanel', array('status' => $status));

      return $out;
  }   

  public function dataFetchById($id)
  {          
      $newid = $this->db->select('*')->get_where(PR.'module', array('id'=>$id));
      return $newid->result();
  }  

  public function sideBarFetchById($id)
  {          
      $newid = $this->db->select('*')->get_where(PR.'leftpanel', array('id'=>$id));
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

  public function sidebarInsert($arr)
  {      

    if($arr['root_heading'] == 'new_root_heading'){  // if there will be new root heading

      $input['root_heading'] = $arr['new_root_heading']; // new root heading name
      if($arr['contains_url'] == 'yes'){ // new root heading contains URL?
        $input['url'] = $arr['new_root_heading_url']; // if contains URL then URL:
      }else{
        $input['url'] = ''; // if not contains URL then URL = "":
      }
      $input['icon'] = $arr['root_heading_icon'];
      $input['user_level'] = $arr['user_level'];
      $input['sub_id'] = '0'; // root heading id will be 0 always. 
      $input['sub_heading'] = ''; // root heading id will be 0 always. 

    }else{
      
      $input['sub_id'] = $arr['root_heading']; 
      $input['user_level'] = $arr['user_level'];
      $input['sub_heading'] = $arr['sub_heading'];
      $input['url'] = $arr['sub_heading_url'];
      $input['root_heading'] = "";
      $input['icon'] = "";
    }

      
      $newid = $this->db->insert(PR.'leftpanel', $input);
      return $newid;
  }  

  public function fetchRootHeading()
  {            
      $newid = $this->db->select('*')->get_where(PR.'leftpanel', array('sub_id' => '0'));
      return $newid->result();
  }


}
