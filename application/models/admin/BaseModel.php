<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class BaseModel extends CI_Model {
    

    public function retrieveUserAccessMethod($level, $controller, $action){

    	$out = $this->db->select('*')->get_where(PR.'module' , array('user_level' => $level, 'module' => $controller, 'action' => $action));
    	return $out->result();
    }    

    public function retrieveUserAccessController($level, $controller, $action){

    	$out = $this->db->select('*')->get_where(PR.'module' , array('user_level' => $level, 'module' => $controller, 'action' => 'index'));
    	return $out->result();
    }    

    public function retrieveLeftPanelBySession(){

    	$user_level = $this->session_data['user_level'];
    	$out = $this->db->select('*')->get_where(PR.'leftpanel' , array('user_level' => $user_level));
    	return $out->result();
    }    

    public function retrieveRootHeading(){

    	$user_level = $this->session_data['user_level'];
    	$out = $this->db->select('*')->get_where(PR.'leftpanel' , array('user_level' => $user_level, 'sub_id'=> '0'));
    	return $out->result();
    }



}
        










 ?>