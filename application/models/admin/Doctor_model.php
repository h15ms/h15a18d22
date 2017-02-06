<?php

class Doctor_model extends CI_Model {

    public function __construct() {
        parent:: __construct();
    }

    public function fetchAll($limit = '', $start = '') {
        if ($limit != '') {
            $getdata = $this->db->select('*')->from(PR . 'doctors')->limit($limit, $start);
            $result = $getdata->get();
        } else {
            $getdata = $this->db->select('*')->from(PR . 'doctors');
            $result = $getdata->get();
        }
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function fetchById($id) {

        $getdata = $this->db->select('*')->get_where(PR.'doctors', array('id' => $id));
        //  $result = $getdata->get();

        if ($getdata->num_rows() > 0) {
            return $getdata->result();
        } else {
            return false;
        }
    }
    
    public function timeSlot($doctor_id) {

        if (empty($doctor_id)) {
            return FALSE;
        }

        $this->db->select('slot');
        $this->db->where('id', $doctor_id);
        $query = $this->db->get(PR . 'doctors');

        if ($query->num_rows() == 1) {
            $result = $query->result_array();
            return $result[0]['slot'];
        } else {
            return FALSE;
        }
    }

    public function fetchByName($name) {

        $getdata = $this->db->select('*')->get_where(PR.'doctors', array('app_id' => $appid));
        //  $result = $getdata->get();

        if ($getdata->num_rows() > 0) {
            return $getdata->result();
        } else {
            return false;
        }
    }
    
    public function fetchByToken($token) {

        $getdata = $this->db->select('*')->get_where(PR.'doctors', array('app_id' => $appid));
        //  $result = $getdata->get();

        if ($getdata->num_rows() > 0) {
            return $getdata->result();
        } else {
            return false;
        }
    }

    public function add($data) {
        $insertID = $this->db->insert(PR.'doctors', $data);
        return $insertID;
    }
    
    public function slot($data) {
        $insertID = $this->db->insert(PR.'slot', $data);
        return $insertID;
    }
    
    public function delete_slot($doctor_id) {
        
        if(empty($doctor_id)){
            return FALSE;
            
        }
        
        $getdata = $this->db->select('*')->get_where(PR.'slot', array('doctor_id' => $doctor_id));
        if ($getdata->num_rows() > 0) {
            $this->db->where('doctor_id', $doctor_id);
            $this->db->delete(PR.'slot');
        }
        
    }

    public function update($data) {
         $this->db->where('id', $data['id']);
        $insertID = $this->db->update(PR.'doctors', $data);
        return $insertID;
    }

}
