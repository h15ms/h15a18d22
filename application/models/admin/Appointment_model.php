<?php

class Appointment_model extends CI_Model {
    
    

    public function __construct() {
        parent:: __construct();
    }

    public function fetchAll($limit = '', $start = '') {
        if ($limit != '') {
            $getdata = $this->db->select('*')->from(PR . 'patient')->limit($limit, $start);
            $result = $getdata->get();
        } else {
            $getdata = $this->db->select('*')->from(PR . 'patient');
            $result = $getdata->get();
        }
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function fetchById($id) {

        $getdata = $this->db->select('*')->get_where(PR . 'patient', array('id' => $id));
        if ($getdata->num_rows() > 0) {
            return $getdata->result();
        } else {
            return false;
        }
    }
    
    public function appointment($data) {
        
        
        
        $dataConfig = array();
        
        
        //  Patient Detail info
        $patient_id = $data['patient_id'];
        if ($patient_id != '') {
            $patient = $this->db->select('*')->get_where(PR . 'patient', array('id' => $patient_id));
            if ($patient->num_rows() > 0) {
                $dataConfig['patient'] = $patient->result();
            } else {
                $dataConfig['patient'] = false;
            }
        }





        //  Doctor Detail info
        $doctor_id = $data['doctor_id'];
        $doctor = $this->db->select('*')->get_where(PR . 'doctors', array('id' => $doctor_id));
        if ($doctor->num_rows() > 0) {
            $dataConfig['doctor'] =  $doctor->result();
        } else {
            $dataConfig['doctor'] =  false;
        }
        
        //  Hospital Detail Info
        $hospital_id = $data['hospital_id'];
        $hospital = $this->db->select('*')->get_where(PR . 'hospital', array('id' => $hospital_id));
        if ($hospital->num_rows() > 0) {
            $dataConfig['hospital'] =  $hospital->result();
        } else {
            $dataConfig['hospital'] =  false;
        }
        
        
        
        
        
    }

    public function fetchByName($name) {

        $getdata = $this->db->select('*')->get_where(PR . 'patient', array('app_id' => $appid));
        //  $result = $getdata->get();

        if ($getdata->num_rows() > 0) {
            return $getdata->result();
        } else {
            return false;
        }
    }

    public function fetchByToken($token) {

        $getdata = $this->db->select('*')->get_where(PR . 'patient', array('app_id' => $appid));
        //  $result = $getdata->get();

        if ($getdata->num_rows() > 0) {
            return $getdata->result();
        } else {
            return false;
        }
    }

    public function add($data) {
        $insertID = $this->db->insert(PR . 'patient', $data);
        return $insertID;
    }

    public function update($data) {
        $this->db->where('id', $data['id']);
        $insertID = $this->db->update(PR . 'patient', $data);
        return $insertID;
    }

    public function getHospital() {
        $hospital = $this->db->select('*')->get_where(PR . 'hospital', array('status' => 1));
        if ($hospital->num_rows() > 0) {
            return $hospital->result();
        } else {
            return false;
        }
    }

    public function getspecialityByHospital($hospital_id) {

        $speciality = $this->db->select(PR . 'specialization.*')
                        ->from(PR . 'specialization')
                        ->join(PR . 'hospital_specialization_rel', PR . 'hospital_specialization_rel.specialization_id =' . PR . 'specialization. id', 'inner')
                        ->where(PR . 'hospital_specialization_rel.hospital_id', $hospital_id)->get();


        if ($speciality->num_rows() > 0) {
            return $speciality->result();
        } else {
            return false;
        }
    }

    public function getspeciality() {
        $speciality = $this->db->select(PR . 'specialization.*')
                ->from(PR . 'specialization')
                ->join(PR . 'hospital_specialization_rel', PR . 'hospital_specialization_rel.specialization_id=' . PR . 'specialization.id', 'inner')
                ->get();

        if ($speciality->num_rows() > 0) {
            return $speciality->result();
        } else {
            return false;
        }
    }

    public function getDoctor($filter = array()) {

        if ($filter['hospital'] != '' && $filter['speciality'] != '') {
            $speciality = $this->db->select(PR . 'specialization.*')
                            ->from(PR . 'specialization')
                            ->join(PR . 'hospital_specialization_rel', PR . 'hospital_specialization_rel.specialization_id =' . PR . 'specialization. id', 'inner')
                            ->where(PR . 'hospital_specialization_rel.hospital_id', $hospital_id)->get();


            if ($speciality->num_rows() > 0) {
                return $speciality->result();
            } else {
                return false;
            }
        } if ($filter['hospital'] != '') {
            $speciality = $this->db->select(PR . 'specialization.*')
                            ->from(PR . 'specialization')
                            ->join(PR . 'hospital_specialization_rel', PR . 'hospital_specialization_rel.specialization_id =' . PR . 'specialization. id', 'inner')
                            ->where(PR . 'hospital_specialization_rel.hospital_id', $hospital_id)->get();


            if ($speciality->num_rows() > 0) {
                return $speciality->result();
            } else {
                return false;
            }
        } if ($filter['speciality'] != '') {
            $speciality = $this->db->select(PR . 'specialization.*')
                            ->from(PR . 'specialization')
                            ->join(PR . 'hospital_specialization_rel', PR . 'hospital_specialization_rel.specialization_id =' . PR . 'specialization. id', 'inner')
                            ->where(PR . 'hospital_specialization_rel.hospital_id', $hospital_id)->get();


            if ($speciality->num_rows() > 0) {
                return $speciality->result();
            } else {
                return false;
            }
        } else {
            $speciality = $this->db->select(PR . 'specialization.*')
                    ->from(PR . 'specialization')
                    ->join(PR . 'hospital_specialization_rel', PR . 'hospital_specialization_rel.specialization_id=' . PR . 'specialization.id', 'inner')
                    ->get();

            if ($speciality->num_rows() > 0) {
                return $speciality->result();
            } else {
                return false;
            }
        }
    }
    
    
    public function getAllDoctor() {
        
        $doctor = $this->db->select('*')->get_where(PR . 'doctors', array('status' => 1));
        if ($doctor->num_rows() > 0) {
            $doctors = $doctor->result();
            foreach ($doctors as $key => $doctor) {
                 $data =  unserialize($doctor->slot);
               $doctors[$key]->slot =  $data['slot'];
            }
            return $doctors; 
        } else {
            return false;
        }
        
        
    }
    
    
    public function patient_appointment_new($data) {

        $patient = $this->db->select('*')->get_where(PR . 'patient', array('mobile' => $data['data']['patient']['mobile']));
        if ($patient->num_rows() > 0) {
            $patient = $patient->result();
            $data['data']['appointment']['patient_id'] = $patient[0]->id;

            $appointment = $this->db->select('*')->get_where(PR . 'patient_appointment', array('doctor_id' => $data['data']['appointment']['doctor_id'], 'patient_id' => $data['data']['appointment']['patient_id'], 'appointment_date' => $data['data']['appointment']['appointment_date'], 'slot' => $data['data']['appointment']['slot']));
            //$appointment = $appointment->result();
            if ($appointment->num_rows() > 0) {
                
                 $condition  = array('doctor_id' => $data['data']['appointment']['doctor_id'], 'patient_id' => $data['data']['appointment']['patient_id'], 'appointment_date' => $data['data']['appointment']['appointment_date'], 'slot' => $data['data']['appointment']['slot']);
                 $this->db->where($condition);
                return $updateID = $this->db->update(PR . 'patient_appointment',$data['data']['appointment']);
                
            } else {
                $insertID = $this->db->insert(PR . 'patient_appointment', $data['data']['appointment']);
                return $insertID;
            }
        } else {
            $insertID = $this->db->insert(PR . 'patient', $data['data']['patient']);
            if ($this->db->insert_id() != '') {
                $data['data']['appointment']['patient_id'] = $this->db->insert_id();
                $insertID = $this->db->insert(PR . 'patient_appointment', $data['data']['appointment']);
                return $insertID;
            }
            return $insertID;
        }
    }
    
    public function patient_appointment_exist($data) {
          

            $appointment = $this->db->select('*')->get_where(PR . 'patient_appointment', array('doctor_id' => $data['data']['appointment']['doctor_id'], 'patient_id' => $data['data']['appointment']['patient_id'], 'appointment_date' => $data['data']['appointment']['appointment_date'], 'slot' => $data['data']['appointment']['slot']));
           
            if ($appointment->num_rows() > 0) {
                 $condition  = array('doctor_id' => $data['data']['appointment']['doctor_id'], 'patient_id' => $data['data']['appointment']['patient_id'], 'appointment_date' => $data['data']['appointment']['appointment_date'], 'slot' => $data['data']['appointment']['slot']);
                 $this->db->where($condition);
                return $updateID = $this->db->update(PR . 'patient_appointment',$data['data']['appointment']);
                
            } else {
                $insertID = $this->db->insert(PR . 'patient_appointment', $data['data']['appointment']);
                return $insertID;
            }
        
    }

    public function patient_appointment($data) {
        $insertID = $this->db->insert(PR.'patient_appointment', $data);
        return $insertID;
    }
    
    

}
