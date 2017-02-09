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



}
        










 ?>