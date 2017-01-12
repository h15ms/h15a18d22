<?php
class applyModel 
{

  private $_con;
  
    
  public function __construct() 
  {   
		require_once 'library/Database.php';
		$this->_con = new Database();
		$this->_con = $this->_con->con();		
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

    
 public function saveForm($arr) 
{      
               $photoName = $this->imgInsertdb();
               $app_id = $this->newApplyId();
               $user_id= $_SESSION[user_id];

               $saarc_country_name_1 = $_POST['saarc_country_name'][0];
               $saarc_country_year_1 = $_POST['saarc_country_year'][0];
               $saarc_country_no_visits_1 = $_POST['saarc_country_no_visits'][0];
               $saarc_country_name_2 = $_POST['saarc_country_name'][1];
               $saarc_country_year_2 = $_POST['saarc_country_year'][1];
               $saarc_country_no_visits_2 = $_POST['saarc_country_no_visits'][1];
               $saarc_country_name_3 = $_POST['saarc_country_name'][2];
               $saarc_country_year_3 = $_POST['saarc_country_year'][2];
               $saarc_country_no_visits_3 = $_POST['saarc_country_no_visits'][2];
               $saarc_country_name_4 = $_POST['saarc_country_name'][3];
               $saarc_country_year_4 = $_POST['saarc_country_year'][3];
               $saarc_country_no_visits_4 = $_POST['saarc_country_no_visits'][3];
               $saarc_country_name_5 = $_POST['saarc_country_name'][4];
               $saarc_country_year_5 = $_POST['saarc_country_year'][4];
               $saarc_country_no_visits_5 = $_POST['saarc_country_no_visits'][4];
               $saarc_country_name_6 = $_POST['saarc_country_name'][5];
               $saarc_country_year_6 = $_POST['saarc_country_year'][5];
               $saarc_country_no_visits_6 = $_POST['saarc_country_no_visits'][5];
               $saarc_country_name_7 = $_POST['saarc_country_name'][6];
               $saarc_country_year_7 = $_POST['saarc_country_year'][6];
               $saarc_country_no_visits_7 = $_POST['saarc_country_no_visits'][6];
               $saarc_country_name_8 = $_POST['saarc_country_name'][7];
               $saarc_country_year_8 = $_POST['saarc_country_year'][7];
               $saarc_country_no_visits_8 = $_POST['saarc_country_no_visits'][7];

              if($_POST['changed_name'] == NULL){ $_POST['changed_name'] = 0; }
              if($_POST['country_present'] == NULL){ $_POST['country_present'] = 0; }
              if($_POST['email_present'] == NULL){ $_POST['email_present'] = 0; }
              if($_POST['same_address_permanent'] == NULL){ $_POST['same_address_permanent'] = 0; }
              if($saarc_country_name_2 == NULL ){ $saarc_country_name_2 = 0; }
              if($saarc_country_name_3 == NULL ){ $saarc_country_name_3 = 0; }
              if($saarc_country_name_4 == NULL ){ $saarc_country_name_4 = 0; }
              if($saarc_country_name_5 == NULL ){ $saarc_country_name_5 = 0; }
              if($saarc_country_name_6 == NULL ){ $saarc_country_name_6 = 0; } 
              if($saarc_country_name_7 == NULL ){ $saarc_country_name_7 = 0; }
              if($saarc_country_name_8 == NULL ){ $saarc_country_name_8 = 0; }
              if($saarc_country_year_2 == NULL ){ $saarc_country_year_2 = 0; }
              if($saarc_country_year_3 == NULL ){ $saarc_country_year_3 = 0; }
              if($saarc_country_year_4 == NULL ){ $saarc_country_year_4 = 0; }
              if($saarc_country_year_5 == NULL ){ $saarc_country_year_5 = 0; }
              if($saarc_country_year_6 == NULL ){ $saarc_country_year_6 = 0; }
              if($saarc_country_year_7 == NULL ){ $saarc_country_year_7 = 0; }
              if($saarc_country_year_8 == NULL ){ $saarc_country_year_8 = 0; }
              if($saarc_country_no_visits_2 == NULL ){ $saarc_country_no_visits_2 = 0; }
              if($saarc_country_no_visits_3 == NULL ){ $saarc_country_no_visits_3 = 0; }
              if($saarc_country_no_visits_4 == NULL ){ $saarc_country_no_visits_4 = 0; }
              if($saarc_country_no_visits_5 == NULL ){ $saarc_country_no_visits_5 = 0; }
              if($saarc_country_no_visits_6 == NULL ){ $saarc_country_no_visits_6 = 0; }
              if($saarc_country_no_visits_7 == NULL ){ $saarc_country_no_visits_7 = 0; }
              if($saarc_country_no_visits_8 == NULL ){ $saarc_country_no_visits_8 = 0; }

              if($app_id == NULL ){ $app_id = 0; }

              $apply_date = date("d/m/Y h:i A");


        $sql = "INSERT INTO ".PREFIX."apply ( 
               app_id,
               applying_country,
               indian_mission,
               nationality,
               date_of_birth,
               email,
               date_of_arrival,
               visa_type,
               surname,
               given_name,
               changed_name,
               previous_surname,
               previous_name,
               sex,
               city_of_birth,
               country_of_birth,
               national_id,
               religion,
               other_religion,
               visible_identification_marks,
               educational_qualification,
               acquire_nationality,
               previous_nationality,
               passport_no,
               place_of_issue,
               date_of_issue,
               date_of_expiry,
               other_valid_passport,
               other_country_of_issue,
               other_passport_no,
               other_date_of_issue,
               other_place_of_issue,
               other_nationality_mentioned,
               street_present,
               city_present,
               state_present,
               country_present,
               zip_code_present,
               phone_no,
               mobile_no,
               email_present,
               same_address_permanent,
               street_permanent,
               city_permanent,
               state_permanent,
               name_father,
               nationality_father,
               previous_nationality_father,
               place_of_birth_father,
               country_of_birth_father,
               name_mother,
               nationality_mother,
               previous_nationality_mother,
               place_of_birth_mother,
               country_of_birth_mother,
               applicant_marital_status,
               name_married,
               nationality_married,
               previous_nationality_married,
               place_of_birth_married,
               country_of_birth_married,
               grandparents_pakistan,
               grandparents_pakistan_details,
               present_occupation,
               occupation_other,
               business_name,
               designation,
               address,
               phone,
               past_occupation,
               military,
               military_organisation,
               military_designation,
               military_rank,
               military_place_of_posting,
               bv_company_name,
               bv_address,
               bv_phone,
               bv_email,
               medical_visa_result,
               mv_hr_name,
               mv_hr_address,
               mv_hr_doctor_name,
               mv_hr_phone,
               mv_hr_email,
               mv_hi_name,
               mv_hi_address,
               mv_hi_doctor_name,
               mv_hi_phone,
               mv_hi_email,
               mv_hi_illness,
               tv_places_visited,
               v_duration_of_visa,
               v_no_of_entries,
               v_purpose_of_visit,
               v_expected_date_journey,
               v_port_arrival,
               v_port_exit,
               visited_india_before,
               visited_address_1,
               visited_address_2,
               visited_address_3,
               cities_previously_visited_india,
               last_indian_visa_no,
               last_type_visa,
               last_place_of_issue,
               last_date_of_issue,
               last_visit_previously_refused,
               mention_control_no,
               refused_date,
               countries_visited_last_10_years,
               saarc_country_name_1,
               saarc_country_year_1,
               saarc_country_no_visits_1,
               saarc_country_name_2,
               saarc_country_year_2,
               saarc_country_no_visits_2,
               saarc_country_name_3,
               saarc_country_year_3,
               saarc_country_no_visits_3,
               saarc_country_name_4,
               saarc_country_year_4,
               saarc_country_no_visits_4,
               saarc_country_name_5,
               saarc_country_year_5,
               saarc_country_no_visits_5,
               saarc_country_name_6,
               saarc_country_year_6,
               saarc_country_no_visits_6,
               saarc_country_name_7,
               saarc_country_year_7,
               saarc_country_no_visits_7,
               saarc_country_name_8,
               saarc_country_year_8,
               saarc_country_no_visits_8,
               reference_name_india,
               reference_address_india_1,
               reference_address_india_2,
               reference_phone_india,
               reference_name_country,
               reference_address_country_1,
               reference_address_country_2,
               reference_phone_country,
               picture,
               user_id,
               apply_date

    
               ) VALUES (
               
               :app_id,
               :applying_country,
               :indian_mission,
               :nationality,
               :date_of_birth,
               :email,
               :date_of_arrival,
               :visa_type,
               :surname,
               :given_name,
               :changed_name,
               :previous_surname,
               :previous_name,
               :sex,
               :city_of_birth,
               :country_of_birth,
               :national_id,
               :religion,
               :other_religion,
               :visible_identification_marks,
               :educational_qualification,
               :acquire_nationality,
               :previous_nationality,
               :passport_no,
               :place_of_issue,
               :date_of_issue,
               :date_of_expiry,
               :other_valid_passport,
               :other_country_of_issue,
               :other_passport_no,
               :other_date_of_issue,
               :other_place_of_issue,
               :other_nationality_mentioned,
               :street_present,
               :city_present,
               :state_present,
               :country_present,
               :zip_code_present,
               :phone_no,
               :mobile_no,
               :email_present,
               :same_address_permanent,
               :street_permanent,
               :city_permanent,
               :state_permanent,
               :name_father,
               :nationality_father,
               :previous_nationality_father,
               :place_of_birth_father,
               :country_of_birth_father,
               :name_mother,
               :nationality_mother,
               :previous_nationality_mother,
               :place_of_birth_mother,
               :country_of_birth_mother,
               :applicant_marital_status,
               :name_married,
               :nationality_married,
               :previous_nationality_married,
               :place_of_birth_married,
               :country_of_birth_married,
               :grandparents_pakistan,
               :grandparents_pakistan_details,
               :present_occupation,
               :occupation_other,
               :business_name,
               :designation,
               :address,
               :phone,
               :past_occupation,
               :military,
               :military_organisation,
               :military_designation,
               :military_rank,
               :military_place_of_posting,
               :bv_company_name,
               :bv_address,
               :bv_phone,
               :bv_email,
               :medical_visa_result,
               :mv_hr_name,
               :mv_hr_address,
               :mv_hr_doctor_name,
               :mv_hr_phone,
               :mv_hr_email,
               :mv_hi_name,
               :mv_hi_address,
               :mv_hi_doctor_name,
               :mv_hi_phone,
               :mv_hi_email,
               :mv_hi_illness,
               :tv_places_visited,
               :v_duration_of_visa,
               :v_no_of_entries,
               :PurposeofVisit,
               :v_expected_date_journey,
               :v_port_arrival,
               :v_port_exit,
               :visited_india_before,
               :visited_address_1,
               :visited_address_2,
               :visited_address_3,
               :cities_previously_visited_india,
               :last_indian_visa_no,
               :last_type_visa,
               :last_place_of_issue,
               :last_date_of_issue,
               :last_visit_previously_refused,
               :mention_control_no,
               :refused_date,
               :countries_visited_last_10_years,
               :saarc_country_name_1,
               :saarc_country_year_1,
               :saarc_country_no_visits_1,
               :saarc_country_name_2,
               :saarc_country_year_2,
               :saarc_country_no_visits_2,
               :saarc_country_name_3,
               :saarc_country_year_3,
               :saarc_country_no_visits_3,
               :saarc_country_name_4,
               :saarc_country_year_4,
               :saarc_country_no_visits_4,
               :saarc_country_name_5,
               :saarc_country_year_5,
               :saarc_country_no_visits_5,
               :saarc_country_name_6,
               :saarc_country_year_6,
               :saarc_country_no_visits_6,
               :saarc_country_name_7,
               :saarc_country_year_7,
               :saarc_country_no_visits_7,
               :saarc_country_name_8,
               :saarc_country_year_8,
               :saarc_country_no_visits_8,
               :reference_name_india,
               :reference_address_india_1,
               :reference_address_india_2,
               :reference_phone_india,
               :reference_name_country,
               :reference_address_country_1,
               :reference_address_country_2,
               :reference_phone_country,
               :picture,
               :user_id,
               :apply_date
            
               
               )"; 
    

      $stmt = $this->_con->prepare($sql);  

      $stmt->bindParam(':app_id', $app_id, PDO::PARAM_STR);
      $stmt->bindParam(':applying_country', $_POST['applying_country'], PDO::PARAM_STR);
      $stmt->bindParam(':indian_mission', $_POST['indian_mission'], PDO::PARAM_STR);
      $stmt->bindParam(':nationality', $_POST['nationality'], PDO::PARAM_STR);
      $stmt->bindParam(':date_of_birth', $_POST['date_of_birth'], PDO::PARAM_STR);
      $stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
      $stmt->bindParam(':date_of_arrival', $_POST['date_of_arrival'], PDO::PARAM_STR);
      $stmt->bindParam(':visa_type', $_POST['visa_type'], PDO::PARAM_STR);
      $stmt->bindParam(':surname', $_POST['surname'], PDO::PARAM_STR);
      $stmt->bindParam(':given_name', $_POST['given_name'], PDO::PARAM_STR);
      $stmt->bindParam(':changed_name', $_POST['changed_name'], PDO::PARAM_STR);
      $stmt->bindParam(':previous_surname', $_POST['previous_surname'], PDO::PARAM_STR);
      $stmt->bindParam(':previous_name', $_POST['previous_name'], PDO::PARAM_STR);
      $stmt->bindParam(':sex', $_POST['sex'], PDO::PARAM_STR);
      $stmt->bindParam(':city_of_birth', $_POST['city_of_birth'], PDO::PARAM_STR);
      $stmt->bindParam(':country_of_birth', $_POST['country_of_birth'], PDO::PARAM_STR);
      $stmt->bindParam(':national_id', $_POST['national_id'], PDO::PARAM_STR);
      $stmt->bindParam(':religion', $_POST['religion'], PDO::PARAM_STR);
      $stmt->bindParam(':other_religion', $_POST['other_religion'], PDO::PARAM_STR);
      $stmt->bindParam(':visible_identification_marks', $_POST['visible_identification_marks'], PDO::PARAM_STR);
      $stmt->bindParam(':educational_qualification', $_POST['educational_qualification'], PDO::PARAM_STR);
      $stmt->bindParam(':acquire_nationality', $_POST['acquire_nationality'], PDO::PARAM_STR);
      $stmt->bindParam(':previous_nationality', $_POST['previous_nationality'], PDO::PARAM_STR);
      $stmt->bindParam(':passport_no', $_POST['passport_no'], PDO::PARAM_STR);
      $stmt->bindParam(':place_of_issue', $_POST['place_of_issue'], PDO::PARAM_STR);
      $stmt->bindParam(':date_of_issue', $_POST['date_of_issue'], PDO::PARAM_STR);
      $stmt->bindParam(':date_of_expiry', $_POST['date_of_expiry'], PDO::PARAM_STR);
      $stmt->bindParam(':other_valid_passport', $_POST['other_valid_passport'], PDO::PARAM_STR);
      $stmt->bindParam(':other_country_of_issue', $_POST['other_country_of_issue'], PDO::PARAM_STR);
      $stmt->bindParam(':other_passport_no', $_POST['other_passport_no'], PDO::PARAM_STR);
      $stmt->bindParam(':other_date_of_issue', $_POST['other_date_of_issue'], PDO::PARAM_STR);
      $stmt->bindParam(':other_place_of_issue', $_POST['other_place_of_issue'], PDO::PARAM_STR);
      $stmt->bindParam(':other_nationality_mentioned', $_POST['other_nationality_mentioned'], PDO::PARAM_STR);
      $stmt->bindParam(':street_present', $_POST['street_present'], PDO::PARAM_STR);
      $stmt->bindParam(':city_present', $_POST['city_present'], PDO::PARAM_STR);
      $stmt->bindParam(':state_present', $_POST['state_present'], PDO::PARAM_STR);
      $stmt->bindParam(':country_present', $_POST['country_present'], PDO::PARAM_STR);
      $stmt->bindParam(':zip_code_present', $_POST['zip_code_present'], PDO::PARAM_STR);
      $stmt->bindParam(':phone_no', $_POST['phone_no'], PDO::PARAM_STR);
      $stmt->bindParam(':mobile_no', $_POST['mobile_no'], PDO::PARAM_STR);
      $stmt->bindParam(':email_present', $_POST['email_present'], PDO::PARAM_STR);    
      $stmt->bindParam(':same_address_permanent', $_POST['same_address_permanent'], PDO::PARAM_STR);
       $stmt->bindParam(':street_permanent', $_POST['street_permanent'], PDO::PARAM_STR);
       $stmt->bindParam(':city_permanent', $_POST['city_permanent'], PDO::PARAM_STR);
       $stmt->bindParam(':state_permanent', $_POST['state_permanent'], PDO::PARAM_STR);
       $stmt->bindParam(':name_father', $_POST['name_father'], PDO::PARAM_STR);
       $stmt->bindParam(':nationality_father', $_POST['nationality_father'], PDO::PARAM_STR);
       $stmt->bindParam(':previous_nationality_father', $_POST['previous_nationality_father'], PDO::PARAM_STR);
       $stmt->bindParam(':place_of_birth_father', $_POST['place_of_birth_father'], PDO::PARAM_STR);
       $stmt->bindParam(':country_of_birth_father', $_POST['country_of_birth_father'], PDO::PARAM_STR);
       $stmt->bindParam(':name_mother', $_POST['name_mother'], PDO::PARAM_STR);
       $stmt->bindParam(':nationality_mother', $_POST['nationality_mother'], PDO::PARAM_STR);
       $stmt->bindParam(':previous_nationality_mother', $_POST['previous_nationality_mother'], PDO::PARAM_STR);
       $stmt->bindParam(':place_of_birth_mother', $_POST['place_of_birth_mother'], PDO::PARAM_STR);
       $stmt->bindParam(':country_of_birth_mother', $_POST['country_of_birth_mother'], PDO::PARAM_STR);
       $stmt->bindParam(':applicant_marital_status', $_POST['applicant_marital_status'], PDO::PARAM_STR);
       $stmt->bindParam(':name_married', $_POST['name_married'], PDO::PARAM_STR);
       $stmt->bindParam(':nationality_married', $_POST['nationality_married'], PDO::PARAM_STR);
       $stmt->bindParam(':previous_nationality_married', $_POST['previous_nationality_married'], PDO::PARAM_STR);
       $stmt->bindParam(':place_of_birth_married', $_POST['place_of_birth_married'], PDO::PARAM_STR);
       $stmt->bindParam(':country_of_birth_married', $_POST['country_of_birth_married'], PDO::PARAM_STR);
       $stmt->bindParam(':grandparents_pakistan', $_POST['grandparents_pakistan'], PDO::PARAM_STR);
       $stmt->bindParam(':grandparents_pakistan_details', $_POST['grandparents_pakistan_details'], PDO::PARAM_STR);
       $stmt->bindParam(':present_occupation', $_POST['present_occupation'], PDO::PARAM_STR);
       $stmt->bindParam(':occupation_other', $_POST['occupation_other'], PDO::PARAM_STR);
       $stmt->bindParam(':business_name', $_POST['business_name'], PDO::PARAM_STR);
       $stmt->bindParam(':designation', $_POST['designation'], PDO::PARAM_STR);
       $stmt->bindParam(':address', $_POST['address'], PDO::PARAM_STR);
       $stmt->bindParam(':phone', $_POST['phone'], PDO::PARAM_STR);
       $stmt->bindParam(':past_occupation', $_POST['past_occupation'], PDO::PARAM_STR);
       $stmt->bindParam(':military', $_POST['military'], PDO::PARAM_STR);
       $stmt->bindParam(':military_organisation', $_POST['military_organisation'], PDO::PARAM_STR);
       $stmt->bindParam(':military_designation', $_POST['military_designation'], PDO::PARAM_STR);
       $stmt->bindParam(':military_rank', $_POST['military_rank'], PDO::PARAM_STR);
       $stmt->bindParam(':military_place_of_posting', $_POST['military_place_of_posting'], PDO::PARAM_STR);
       // $stmt->bindParam(':business_visa_result', $_POST['business_visa_result'], PDO::PARAM_STR);
       $stmt->bindParam(':bv_company_name', $_POST['bv_company_name'], PDO::PARAM_STR);
       $stmt->bindParam(':bv_address', $_POST['bv_address'], PDO::PARAM_STR);
       $stmt->bindParam(':bv_phone', $_POST['bv_phone'], PDO::PARAM_STR);
       $stmt->bindParam(':bv_email', $_POST['bv_email'], PDO::PARAM_STR);
       $stmt->bindParam(':medical_visa_result', $_POST['medical_visa_result'], PDO::PARAM_STR);
       $stmt->bindParam(':mv_hr_name', $_POST['mv_hr_name'], PDO::PARAM_STR);
       $stmt->bindParam(':mv_hr_address', $_POST['mv_hr_address'], PDO::PARAM_STR);
       $stmt->bindParam(':mv_hr_doctor_name', $_POST['mv_hr_doctor_name'], PDO::PARAM_STR);
       $stmt->bindParam(':mv_hr_phone', $_POST['mv_hr_phone'], PDO::PARAM_STR);
       $stmt->bindParam(':mv_hr_email', $_POST['mv_hr_email'], PDO::PARAM_STR);
       $stmt->bindParam(':mv_hi_name', $_POST['mv_hi_name'], PDO::PARAM_STR);
       $stmt->bindParam(':mv_hi_address', $_POST['mv_hi_address'], PDO::PARAM_STR);
       $stmt->bindParam(':mv_hi_doctor_name', $_POST['mv_hi_doctor_name'], PDO::PARAM_STR);
       $stmt->bindParam(':mv_hi_phone', $_POST['mv_hi_phone'], PDO::PARAM_STR);
       $stmt->bindParam(':mv_hi_email', $_POST['mv_hi_email'], PDO::PARAM_STR);
       $stmt->bindParam(':mv_hi_illness', $_POST['mv_hi_illness'], PDO::PARAM_STR);
       $stmt->bindParam(':tv_places_visited', $_POST['tv_places_visited'], PDO::PARAM_STR);
       $stmt->bindParam(':v_duration_of_visa', $_POST['v_duration_of_visa'], PDO::PARAM_STR);
       $stmt->bindParam(':v_no_of_entries', $_POST['v_no_of_entries'], PDO::PARAM_STR);
       $stmt->bindParam(':PurposeofVisit', $_POST['PurposeofVisit'], PDO::PARAM_STR);
       $stmt->bindParam(':v_expected_date_journey', $_POST['v_expected_date_journey'], PDO::PARAM_STR);
       $stmt->bindParam(':v_port_arrival', $_POST['v_port_arrival'], PDO::PARAM_STR);
       $stmt->bindParam(':v_port_exit', $_POST['v_port_exit'], PDO::PARAM_STR);
       $stmt->bindParam(':visited_india_before', $_POST['visited_india_before'], PDO::PARAM_STR);
       $stmt->bindParam(':visited_address_1', $_POST['visited_address_1'], PDO::PARAM_STR);
       $stmt->bindParam(':visited_address_2', $_POST['visited_address_2'], PDO::PARAM_STR);
       $stmt->bindParam(':visited_address_3', $_POST['visited_address_3'], PDO::PARAM_STR);
       $stmt->bindParam(':cities_previously_visited_india', $_POST['cities_previously_visited_india'], PDO::PARAM_STR);
       $stmt->bindParam(':last_indian_visa_no', $_POST['last_indian_visa_no'], PDO::PARAM_STR);

       $stmt->bindParam(':last_type_visa', $_POST['last_type_visa'], PDO::PARAM_STR);
       $stmt->bindParam(':last_place_of_issue', $_POST['last_place_of_issue'], PDO::PARAM_STR);
       $stmt->bindParam(':last_date_of_issue', $_POST['last_date_of_issue'], PDO::PARAM_STR);
       $stmt->bindParam(':last_visit_previously_refused', $_POST['last_visit_previously_refused'], PDO::PARAM_STR);
      
       $stmt->bindParam(':mention_control_no', $_POST['mention_control_no'], PDO::PARAM_STR);
       $stmt->bindParam(':refused_date', $_POST['refused_date'], PDO::PARAM_STR);
       $stmt->bindParam(':countries_visited_last_10_years', $_POST['countries_visited_last_10_years'], PDO::PARAM_STR);
      
      // $stmt->bindParam(':visited_saarc_countries ', $_POST['visited_saarc_countries'], PDO::PARAM_STR);
       
       $stmt->bindParam(':saarc_country_name_1',$saarc_country_name_1, PDO::PARAM_STR);
       $stmt->bindParam(':saarc_country_year_1',$saarc_country_year_1, PDO::PARAM_STR);
       $stmt->bindParam(':saarc_country_no_visits_1',$saarc_country_no_visits_1, PDO::PARAM_STR);
       $stmt->bindParam(':saarc_country_name_2', $saarc_country_name_2, PDO::PARAM_STR);
       $stmt->bindParam(':saarc_country_year_2', $saarc_country_year_2, PDO::PARAM_STR);
       $stmt->bindParam(':saarc_country_no_visits_2', $saarc_country_no_visits_2, PDO::PARAM_STR);
       $stmt->bindParam(':saarc_country_name_3', $saarc_country_name_3, PDO::PARAM_STR);
       $stmt->bindParam(':saarc_country_year_3', $saarc_country_year_3, PDO::PARAM_STR);
       $stmt->bindParam(':saarc_country_no_visits_3', $saarc_country_no_visits_3, PDO::PARAM_STR);
       $stmt->bindParam(':saarc_country_name_4', $saarc_country_name_4, PDO::PARAM_STR);
       $stmt->bindParam(':saarc_country_year_4', $saarc_country_year_4, PDO::PARAM_STR);
       $stmt->bindParam(':saarc_country_no_visits_4', $saarc_country_no_visits_4, PDO::PARAM_STR);
       $stmt->bindParam(':saarc_country_name_5', $saarc_country_name_5, PDO::PARAM_STR);
       $stmt->bindParam(':saarc_country_year_5', $saarc_country_year_5, PDO::PARAM_STR);
       $stmt->bindParam(':saarc_country_no_visits_5', $saarc_country_no_visits_5, PDO::PARAM_STR);
       $stmt->bindParam(':saarc_country_name_6', $saarc_country_name_6, PDO::PARAM_STR);
       $stmt->bindParam(':saarc_country_year_6', $saarc_country_year_6, PDO::PARAM_STR);
       $stmt->bindParam(':saarc_country_no_visits_6', $saarc_country_no_visits_6, PDO::PARAM_STR);
       $stmt->bindParam(':saarc_country_name_7', $saarc_country_name_7, PDO::PARAM_STR);
       $stmt->bindParam(':saarc_country_year_7', $saarc_country_year_7, PDO::PARAM_STR);
       $stmt->bindParam(':saarc_country_no_visits_7', $saarc_country_no_visits_7, PDO::PARAM_STR);
       $stmt->bindParam(':saarc_country_name_8', $saarc_country_name_8, PDO::PARAM_STR);
       $stmt->bindParam(':saarc_country_year_8', $saarc_country_year_8, PDO::PARAM_STR);
       $stmt->bindParam(':saarc_country_no_visits_8', $saarc_country_no_visits_8, PDO::PARAM_STR);
       $stmt->bindParam(':reference_name_india', $_POST['reference_name_india'], PDO::PARAM_STR);
       $stmt->bindParam(':reference_address_india_1', $_POST['reference_address_india_1'], PDO::PARAM_STR);
       $stmt->bindParam(':reference_address_india_2', $_POST['reference_address_india_2'], PDO::PARAM_STR);
       $stmt->bindParam(':reference_phone_india', $_POST['reference_phone_india'], PDO::PARAM_STR);
       $stmt->bindParam(':reference_name_country', $_POST['reference_name_country'], PDO::PARAM_STR);
       $stmt->bindParam(':reference_address_country_1', $_POST['reference_address_country_1'], PDO::PARAM_STR);
       $stmt->bindParam(':reference_address_country_2', $_POST['reference_address_country_2'], PDO::PARAM_STR);
       $stmt->bindParam(':reference_phone_country', $_POST['reference_phone_country'], PDO::PARAM_STR);
       $stmt->bindParam(':picture', $photoName, PDO::PARAM_STR);
       $stmt->bindParam(':user_id', $user_id, PDO::PARAM_STR);
       $stmt->bindParam(':apply_date', $apply_date, PDO::PARAM_STR);
      
       if($stmt->execute()){
           return 1;
       }else{
           return 0;
       }    
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