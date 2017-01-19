<?php
class applyModel extends CI_Model
{

   function __constructor()
   {
      parent:: __constructor();

   }
    
   public function applyInsert($arr) 
   {       
      // if($_FILES['photos'] == NULL ){ $_FILES['photos'] = 0; }
      //   echo "<pre>";
      //   print_r($_FILES);
       // echo "</pre>";
       // exit;
       
       // return 0;
          // echo  $appid = $this->newApplyId();
       // print_r($image = $this->imageInsert($arr);
   }

   public function imgInsertdb($arr)
   {
      foreach ($_FILES['photos']['name'] as $key => $value) {
         $photoName = $_FILES['photos']['name'][$key];
       return $photoName;
      }
      
   }


public function saveApply($arr)
{

   if($arr['email_main'] == $arr['ReEnterEmail']){ $email = $arr['email_main']; }else{ return 'Email Not Mached!'; }
   $app_id = $this->newApplyId();
  
   $saarc_country_name_1 = $arr['saarc_country_name']['0'];
   $saarc_country_year_1 = $arr['saarc_country_year']['0'];
   $saarc_country_no_visits_1 = $arr['saarc_country_no_visits']['0'];
   $saarc_country_name_2 = $arr['saarc_country_name']['1'];
   $saarc_country_year_2 = $arr['saarc_country_year']['1'];
   $saarc_country_no_visits_2 = $arr['saarc_country_no_visits']['1'];
   $saarc_country_name_3 = $arr['saarc_country_name']['2'];
   $saarc_country_year_3 = $arr['saarc_country_year']['2'];
   $saarc_country_no_visits_3 = $arr['saarc_country_no_visits']['2'];
   $saarc_country_name_4 = $arr['saarc_country_name']['3'];
   $saarc_country_year_4 = $arr['saarc_country_year']['3'];
   $saarc_country_no_visits_4 = $arr['saarc_country_no_visits']['3'];
   $saarc_country_name_5 = $arr['saarc_country_name']['4'];
   $saarc_country_year_5 = $arr['saarc_country_year']['4'];
   $saarc_country_no_visits_5 = $arr['saarc_country_no_visits']['4'];
   $saarc_country_name_6 = $arr['saarc_country_name']['5'];
   $saarc_country_year_6 = $arr['saarc_country_year']['5'];
   $saarc_country_no_visits_6 = $arr['saarc_country_no_visits']['5'];
   $saarc_country_name_7 = $arr['saarc_country_name']['6'];
   $saarc_country_year_7 = $arr['saarc_country_year']['6'];
   $saarc_country_no_visits_7 = $arr['saarc_country_no_visits']['6'];
   $saarc_country_name_8 = $arr['saarc_country_name']['7'];
   $saarc_country_year_8 = $arr['saarc_country_year']['7'];
   $saarc_country_no_visits_8 = $arr['saarc_country_no_visits']['7'];
   if($saarc_country_name_1 == NULL){$saarc_country_name_1 = '0';}
   if($saarc_country_year_1 == NULL){$saarc_country_year_1 = '0';}
   if($saarc_country_no_visits_1 == NULL){$saarc_country_no_visits_1 = '0';}
   if($saarc_country_name_2 == NULL){$saarc_country_name_2 = '0';}
   if($saarc_country_year_2 == NULL){$saarc_country_year_2 = '0';}
   if($saarc_country_no_visits_2 == NULL){$saarc_country_no_visits_2 = '0';}
   if($saarc_country_name_3 == NULL){$saarc_country_name_3 = '0';}
   if($saarc_country_year_3 == NULL){$saarc_country_year_3 = '0';}
   if($saarc_country_no_visits_3 == NULL){$saarc_country_no_visits_3 = '0';}
   if($saarc_country_name_4 == NULL){$saarc_country_name_4 = '0';}
   if($saarc_country_year_4 == NULL){$saarc_country_year_4 = '0';}
   if($saarc_country_no_visits_4 == NULL){$saarc_country_no_visits_4 = '0';}
   if($saarc_country_name_5 == NULL){$saarc_country_name_5 = '0';}
   if($saarc_country_year_5 == NULL){$saarc_country_year_5 = '0';}
   if($saarc_country_no_visits_5 == NULL){$saarc_country_no_visits_5 = '0';}
   if($saarc_country_name_6 == NULL){$saarc_country_name_6 = '0';}
   if($saarc_country_year_6 == NULL){$saarc_country_year_6 = '0';}
   if($saarc_country_no_visits_6 == NULL){$saarc_country_no_visits_6 = '0';}
   if($saarc_country_name_7 == NULL){$saarc_country_name_7 = '0';}
   if($saarc_country_year_7 == NULL){$saarc_country_year_7 = '0';}
   if($saarc_country_no_visits_7 == NULL){$saarc_country_no_visits_7 = '0';}
   if($saarc_country_name_8 == NULL){$saarc_country_name_8 = '0';}
   if($saarc_country_year_8 == NULL){$saarc_country_year_8 = '0';}
   if($saarc_country_no_visits_8 == NULL){$saarc_country_no_visits_8 = '0';}


   $string = array(
         'app_id' => $app_id,
         //'embassy_id' => $arr['embassy_id'],
         //'visa_id' => $arr['visa_id'],
         'applying_country' => $arr['applying_country'],
         'indian_mission' => $arr['indian_mission'],
         'nationality' => $arr['nationality'],
         'date_of_birth' => $arr['date_of_birth'],
         'email' => $email,
         'date_of_arrival' => $arr['date_of_arrival'],
         'visa_type' => $arr['visa_type'],
         'surname' => $arr['surname'],
         'given_name' => $arr['given_name'],
         'changed_name' => $arr['changed_name'],
         'previous_surname' => $arr['previous_surname'],
         'previous_name' => $arr['previous_name'],
         'sex' => $arr['sex'],
         'city_of_birth' => $arr['city_of_birth'],
         'country_of_birth' => $arr['country_of_birth'],
         'national_id' => $arr['national_id'],
         'religion' => $arr['religion'],
         'other_religion' => $arr['other_religion'],
         'visible_identification_marks' => $arr['visible_identification_marks'],
         'educational_qualification' => $arr['educational_qualification'],
         'acquire_nationality' => $arr['acquire_nationality'],
         'previous_nationality' => $arr['previous_nationality'],
         'passport_no' => $arr['passport_no'],
         'place_of_issue' => $arr['place_of_issue'],
         'date_of_issue' => $arr['date_of_issue'],
         'date_of_expiry' => $arr['date_of_expiry'],
         'other_valid_passport' => $arr['other_valid_passport'],
         'other_country_of_issue' => $arr['other_country_of_issue'],
         'other_passport_no' => $arr['other_passport_no'],
         'other_date_of_issue' => $arr['other_date_of_issue'],
         'other_place_of_issue' => $arr['other_place_of_issue'],
         'other_nationality_mentioned' => $arr['other_nationality_mentioned'],
         'street_present' => $arr['street_present'],
         'city_present' => $arr['city_present'],
         'state_present' => $arr['state_present'],
         'country_present' => $arr['country_present'],
         'zip_code_present' => $arr['zip_code_present'],
         'phone_no' => $arr['phone_no'],
         'mobile_no' => $arr['mobile_no'],
         'email_present' => $arr['email_present'],
         'same_address_permanent' => $arr['same_address_permanent'],
         'street_permanent' => $arr['street_permanent'],
         'city_permanent' => $arr['city_permanent'],
         'state_permanent' => $arr['state_permanent'],
         'name_father' => $arr['name_father'],
         'nationality_father' => $arr['nationality_father'],
         'previous_nationality_father' => $arr['previous_nationality_father'],
         'place_of_birth_father' => $arr['place_of_birth_father'],
         'country_of_birth_father' => $arr['country_of_birth_father'],
         'name_mother' => $arr['name_mother'],
         'nationality_mother' => $arr['nationality_mother'],
         'previous_nationality_mother' => $arr['previous_nationality_mother'],
         'place_of_birth_mother' => $arr['place_of_birth_mother'],
         'country_of_birth_mother' => $arr['country_of_birth_mother'],
         'applicant_marital_status' => $arr['applicant_marital_status'],
         'name_married' => $arr['name_married'],
         'nationality_married' => $arr['nationality_married'],
         'previous_nationality_married' => $arr['previous_nationality_married'],
         'place_of_birth_married' => $arr['place_of_birth_married'],
         'country_of_birth_married' => $arr['country_of_birth_married'],
         'grandparents_pakistan' => $arr['grandparents_pakistan'],
         'grandparents_pakistan_details' => $arr['grandparents_pakistan_details'],
         'present_occupation' => $arr['present_occupation'],
         'occupation_other' => $arr['occupation_other'],
         'business_name' => $arr['business_name'],
         'designation' => $arr['designation'],
         'address' => $arr['address'],
         'phone' => $arr['phone'],
         'past_occupation' => $arr['past_occupation'],
         'military' => $arr['military'],
         'military_organisation' => $arr['military_organisation'],
         'military_designation' => $arr['military_designation'],
         'military_rank' => $arr['military_rank'],
         'military_place_of_posting' => $arr['military_place_of_posting'],
         //'business_visa_result' => $arr['business_visa_result'],
         'bv_company_name' => $arr['bv_company_name'],
         'bv_address' => $arr['bv_address'],
         'bv_phone' => $arr['bv_phone'],
         'bv_email' => $arr['bv_email'],
         'medical_visa_result' => $arr['medical_visa_result'],
         'mv_hr_name' => $arr['mv_hr_name'],
         'mv_hr_address' => $arr['mv_hr_address'],
         'mv_hr_doctor_name' => $arr['mv_hr_doctor_name'],
         'mv_hr_phone' => $arr['mv_hr_phone'],
         'mv_hr_email' => $arr['mv_hr_email'],
         'mv_hi_name' => $arr['mv_hi_name'],
         'mv_hi_address' => $arr['mv_hi_address'],
         'mv_hi_doctor_name' => $arr['mv_hi_doctor_name'],
         'mv_hi_phone' => $arr['mv_hi_phone'],
         'mv_hi_email' => $arr['mv_hi_email'],
         'mv_hi_illness' => $arr['mv_hi_illness'],
         'tv_places_visited' => $arr['tv_places_visited'],
         'v_duration_of_visa' => $arr['v_duration_of_visa'],
         'v_no_of_entries' => $arr['v_no_of_entries'],
         'v_purpose_of_visit' => $arr['PurposeofVisit'],
         'v_expected_date_journey' => $arr['v_expected_date_journey'],
         'v_port_arrival' => $arr['v_port_arrival'],
         'v_port_exit' => $arr['v_port_exit'],
         'visited_india_before' => $arr['visited_india_before'],
         'visited_address_1' => $arr['visited_address_1'],
         'visited_address_2' => $arr['visited_address_2'],
         'visited_address_3' => $arr['visited_address_3'],
         'cities_previously_visited_india' => $arr['cities_previously_visited_india'],
         'last_indian_visa_no' => $arr['last_indian_visa_no'],
         'last_type_visa' => $arr['last_type_visa'],
         'last_place_of_issue' => $arr['last_place_of_issue'],
         'last_date_of_issue' => $arr['last_date_of_issue'],
         'last_visit_previously_refused' => $arr['last_visit_previously_refused'],
         'mention_control_no' => $arr['mention_control_no'],
         'refused_date' => $arr['refused_date'],
         'countries_visited_last_10_years' => $arr['countries_visited_last_10_years'],
         'visited_saarc_countries' => $arr['visited_saarc_countries'],
         'saarc_country_name_1' =>  $saarc_country_name_1,
         'saarc_country_year_1' =>  $saarc_country_year_1,
         'saarc_country_no_visits_1' =>  $saarc_country_no_visits_1,
         'saarc_country_name_2' =>  $saarc_country_name_2,
         'saarc_country_year_2' =>  $saarc_country_year_2,
         'saarc_country_no_visits_2' =>  $saarc_country_no_visits_2,
         'saarc_country_name_3' =>  $saarc_country_name_3,
         'saarc_country_year_3' =>  $saarc_country_year_3,
         'saarc_country_no_visits_3' =>  $saarc_country_no_visits_3,
         'saarc_country_name_4' =>  $saarc_country_name_4,
         'saarc_country_year_4' =>  $saarc_country_year_4,
         'saarc_country_no_visits_4' =>  $saarc_country_no_visits_4,
         'saarc_country_name_5' =>  $saarc_country_name_5,
         'saarc_country_year_5' =>  $saarc_country_year_5,
         'saarc_country_no_visits_5' =>  $saarc_country_no_visits_5,
         'saarc_country_name_6' =>  $saarc_country_name_6,
         'saarc_country_year_6' =>  $saarc_country_year_6,
         'saarc_country_no_visits_6' =>  $saarc_country_no_visits_6,
         'saarc_country_name_7' =>  $saarc_country_name_7,
         'saarc_country_year_7' =>  $saarc_country_year_7,
         'saarc_country_no_visits_7' =>  $saarc_country_no_visits_7,
         'saarc_country_name_8' =>  $saarc_country_name_8,
         'saarc_country_year_8' =>  $saarc_country_year_8,
         'saarc_country_no_visits_8' =>  $saarc_country_no_visits_8,
         'reference_name_india' => $arr['reference_name_india'],
         'reference_address_india_1' => $arr['reference_address_india_1'],
         'reference_address_india_2' => $arr['reference_address_india_2'],
         'reference_phone_india' => $arr['reference_phone_india'],
         'reference_name_country' => $arr['reference_name_country'],
         'reference_address_country_1' => $arr['reference_address_country_1'],
         'reference_address_country_2' => $arr['reference_address_country_2'],
         'reference_phone_country' => $arr['reference_phone_country'],
         // 'picture' => $arr['picture'],
         'status' => '0',
         'user_id' => $_SESSION['logged_in']['user_id'],
         //'notice' => $arr['notice'],
         //'app_update' => $arr['app_update'],
         //'emp_working' => $arr['emp_working'],
         'apply_date' => time()
      );

   $res = $this->db->insert('mi_apply',$string);
   
   return $res;
}

   
    
 public function newApplyId()
 {
       $pool = "0123456789";
       $pool .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
       srand ((double)microtime()*1000000);
       for($index = 0; $index < 16; $index++){
           $npw .= substr($pool,(rand()%(strlen ($pool))), 1);
       }
       return $npw;
 }



}