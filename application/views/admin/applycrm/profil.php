<!-- Händler sperren -->
<div class="modal fade" id="userBlock" tabindex="-1" role="dialog" aria-labelledby="userBlockLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form method="POST">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="userBlockLabel"><i class="fa fa-retweet"></i> Update Status</h4>
      </div>
      <div class="modal-body">
        <h2>Update Status?</h2>  
        
              <input type="hidden" name="send" value="setstatus">              
              <input type="hidden" name="appid" id="cid" value="<?php echo $apply['app_id'];?>">
              <select class="form-control" name="status" onclick="application(this)">
                  <option value="0">New</option>
                  <option value="1">In Progress</option>
                  <option value="2">Confirmed</option>
                  <option value="3">Rejected</option>
              </select>  

              <script type="text/javascript">
              function application(att)
              {
                var val = att.options[att.selectedIndex].value;
                document.getElementById("embId").style.display = val == '1' ? "block" : 'none';
                document.getElementById("visaId").style.display = val == '2' ? "block" : 'none';
              }
                
              </script>
              <div id="embId" style="display: none;">
                
                <br>
                <input class="form-control" name="embassy_id" type="text" placeholder="Enter Embassy Application Id" >
              </div>
              <div id="visaId" style="display: none;">
                
                <br>
                <input class="form-control" name="visa_id" type="text" placeholder="Enter Visa Id" >
              </div>

      </div>
      <div class="modal-footer">          
              <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>        
              <button type="submit" class="btn btn-success">Update Status</button>        
         
      </div>
    </div>
   </form>
  </div>
</div>









<div id="page-content">
    <div id="wrap">
    
    
    
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="index.php?c=apply">All Applies</a></li>
                <li class='active'><?php echo $headline;?> ID: <?php echo $apply['app_id'];?></li>
            </ol>

            <h1><?php echo $headline;?></h1>
            <?php if($apply['emp_working']==""){}else{ ?>
            <div class="col-md-4 col-xs-12"><p style="margin: 6% 0 0 10%;"><small style="padding: 4px;" class="alert alert-info"><?php echo $apply['emp_working']; ?> is working on this profile</small></p></div>
            <?php } ?>
            <div class="options">
                <div class="btn-toolbar">                    
                    
                    <a href="" class="btn btn-primary pull-right" data-toggle="modal" data-target="#userBlock"><i class="fa fa-retweet"></i> <span class="">Update Status</span></a>                    
                    <a href="mailto:<?php echo $apply['email'];?>" class="btn btn-success pull-right"><i class="fa fa-envelope"></i> <span class="hidden-xs">Contact Applicant</span></a>                    
                </div>
            </div>
        </div>





        <div class="container">
    
           
                  
                         
                                
                                       
                                              
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h5 style="color:#ffffff"><i class="fa fa-user"></i> <?php echo $apply['given_name'];?> - <?php echo $apply['visa_type'];?></h5>                  
            </div>
          <div class="panel-body collapse in">                                  
            
            
            <div class="row">
            
            
              <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                  <img style="width:180px;height:180px;" src="uploads/<?php echo $apply['picture'];?>" alt="<?php echo $apply['given_name'];?>" title="<?php echo $apply['given_name'];?>">
              </div>
              
              <div class="col-xs-12 col-sm-9 col-md-9">
                  <p><b>Name:</b> <?php echo $apply['given_name'];?></p>
                  <p><b>Visa Type:</b> <?php echo $apply['visa_type'];?></p>
                  <p><b>Status:</b>                   
                  <?php 
                    if($apply['status']=="0"){ 
                        echo "New";
                    }elseif($apply['status']=="1"){ 
                        echo "In Progress";
                    }elseif($apply['status']=="2"){ 
                        echo "Confirmed";
                    }elseif($apply['status']=="3"){ 
                      echo "Rejected";
                    }
                  ?>
                  
                  </p>
                  <p><b>Apply Date:</b> <?php echo $apply['apply_date'];?></p>
                  <p><b>MIC Apply ID:</b> <?php echo $apply['app_id'];?></p>
                  <p><b>Embassy App ID:</b> 
                  <?php if($apply['embassy_id']==""){
                    echo "No Embassy ID";
                  } else{
                  echo $apply['embassy_id'];
                  }
                  ?></p>
                  <p><b>Visa ID:</b> 
                  <?php if($apply['visa_id']==""){ 
                      echo "No Visa ID";
                  }else{
                      echo $apply['visa_id'];
                  }
                      
                  ?>
                  
                  
                  
                  </p>
              </div>
               
             
              
              </div>
              
          </div>          
        </div>
    </div>
</div>                                                       
                                                            
                                                                   
                                                                          
                                                                                 
                                                                                        
                                                                                               
                                                                                                      
                                                                                                             
                                                                                                                           
           
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h5 style="color:#ffffff"><i class="fa fa-user"></i> <?php echo $apply['given_name'];?></h5>                  
            </div>
          <div class="panel-body collapse in">                                  
            
            
            <div class="row">
            
            
              <div class="col-xs-12 col-sm-4 col-md-4">
                  <p><b>Country you are applying visa from:</b> <?php echo $apply['applying_country'];?></p>                  
                  <p><b>Indian Mission:</b> <?php echo $apply['indian_mission'];?><p>
                  <p><b>Nationality:</b> <?php echo $apply['nationality'];?><p>
                  <p><b>Date of Birth:</b> <?php echo $apply['date_of_birth'];?><p>
                  <p><b>Email ID:</b> <?php echo $apply['email'];?><p>
                  <p><b>Expected Date of Arrival:</b> <?php echo $apply['date_of_arrival'];?><p>
                  <p><b>Visa Type:</b> <?php echo $apply['visa_type'];?><p>
              
              </div>
              
              <div class="col-xs-12 col-sm-4 col-md-4">              
                    <p><b>Surname:</b> <?php echo $apply['surname'];?><p>                
                    <p><b>Given Name:</b> <?php echo $apply['given_name'];?><p>                
                    <p><b>Have you ever changed your name?:</b> <?php echo $apply['changed_name'];?><br>
                    <?php if($apply['changed_name']=="Yes"){ ?>
                    <b>Previous Surname:</b> <?php echo $apply['previous_surname'];?><br>
                    <b>Previous Name:</b> <?php echo $apply['previous_name'];?>
                    <?php } ?>
                    <p>
                    <p><b>Sex:</b> <?php echo $apply['sex'];?><p>
                    <p><b>Town/City of birth:</b> <?php echo $apply['city_of_birth'];?><p>
                    <p><b>Country of birth:</b> <?php echo $apply['country_of_birth'];?><p>
                    <p><b>Citizenship/National Id No.:</b> <?php echo $apply['national_id'];?><p>              
              </div>
              
              <div class="col-xs-12 col-sm-4 col-md-4">              
                    <p><b>Religion:</b> <?php echo $apply['religion'];?>
                    <?php if($apply['religion']=="OTHERS"){ ?>
                    <br>
                    <b>Other Religion:</b> <?php echo $apply['other_religion'];?>
                    <?php } ?>
                    <p>
                    <p><b>Visible identification marks:</b> <?php echo $apply['visible_identification_marks'];?>
                    <p><b>Educational Qualification:</b> <?php echo $apply['educational_qualification'];?>
                    <p><b>Did you acquire Nationality by birth or by naturalization?:</b> <?php echo $apply['acquire_nationality'];?></p>
                    <?php if($apply['acquire_nationality']=="Naturalization"){ ?>
                    <p><b>Prev. Nationality:</b> <?php echo $apply['previous_nationality'];?>
                    <?php } ?> 
              </div> 
             
              
              </div>
              
          </div>          
        </div>
    </div>
</div>
          
          
          
          
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h5 style="color:#ffffff"><i class="fa fa-user"></i> <?php echo $apply['given_name'];?></h5>                  
            </div>
          <div class="panel-body collapse in">                                  
            
            
            <div class="row">
            
            
              <div class="col-xs-12 col-sm-4 col-md-4">
                  <p><b>Passport No.:</b> <?php echo $apply['passport_no'];?></p>                  
                  <p><b>Place of Issue:</b> <?php echo $apply['place_of_issue'];?></p>                  
                  <p><b>Date of Issue:</b> <?php echo $apply['date_of_issue'];?></p>                  
                  <p><b>Date of Expiry:</b> <?php echo $apply['date_of_expiry'];?></p>                  
                  <p><b>Any other valid Passport/Identity Certificate(IC) held:</b><br><?php echo $apply['other_valid_passport'];?></p>
                  <?php if($apply['other_valid_passport']=="Yes"){ ?>
                  <p>
                   <b>Country of Issue:</b> <?php echo $apply['other_country_of_issue'];?><br>
                   <b>Passport/IC No.:</b> <?php echo $apply['other_passport_no'];?><br>
                   <b>Date of Issue:</b> <?php echo $apply['other_date_of_issue'];?><br>
                   <b>Place of Issue:</b> <?php echo $apply['other_place_of_issue'];?><br>
                   <b>Nationality mentioned therein:</b> <?php echo $apply['other_nationality_mentioned'];?>                     
                  </p>                  
                  <?php } ?>    
                              
                  
              
              </div>
              
              <div class="col-xs-12 col-sm-4 col-md-4">
                    
                    <p>
                    #Present Address<br>
                    <b>House No./Street:</b> <?php echo $apply['street_present'];?><br>
                    <b>Village/Town/City:</b> <?php echo $apply['city_present'];?><br>              
                    <b>State/Province/District:</b> <?php echo $apply['state_present'];?><br>                
                    <b>Country:</b> <?php echo $apply['country_present'];?><br> 
                    <b>Postal/Zip Code:</b> <?php echo $apply['zip_code_present'];?><br>
                    <b>Phone No.:</b> <?php echo $apply['phone_no'];?><br> 
                    <b>Mobile No.:</b> <?php echo $apply['mobile_no'];?>
                    <p>
                    
                    <p>
                    #Permanent Address<br>
                    <b>House No./Street:</b> <?php echo $apply['street_permanent'];?><br>
                    <b>Village/Town/City:</b> <?php echo $apply['city_permanent'];?><br>                
                    <b>State/Province/District:</b> <?php echo $apply['state_permanent'];?><br>
                    </p>
                                 
              </div>
              
              <div class="col-xs-12 col-sm-4 col-md-4">                                  
                    <p>
                    #Father's Details<br>
                    <b>Name:</b> <?php echo $apply['name_father'];?><br>
                    <b>Nationality:</b> <?php echo $apply['nationality_father'];?><br>
                    <b>Previous Nationality:</b> <?php echo $apply['previous_nationality_father'];?><br>
                    <b>Place of Birth:</b> <?php echo $apply['place_of_birth_father'];?><br>
                    <b>Country of Birth:</b> <?php echo $apply['country_of_birth_father'];?><br>                    
                    <p>                    
                    <p>
                    #Mother's Details<br>
                    <b>Name:</b> <?php echo $apply['name_mother'];?><br>
                    <b>Nationality:</b> <?php echo $apply['nationality_mother'];?><br>
                    <b>Previous Nationality:</b> <?php echo $apply['previous_nationality_mother'];?><br>
                    <b>Place of Birth:</b> <?php echo $apply['place_of_birth_mother'];?><br>
                    <b>Country of Birth:</b> <?php echo $apply['country_of_birth_mother'];?><br>  
                    </p>
              </div> 
             
              
              </div>
              
          </div>          
        </div>
    </div>
</div> 
          
                   
                            
                                     
                                              
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h5 style="color:#ffffff"><i class="fa fa-user"></i> <?php echo $apply['given_name'];?></h5>                  
            </div>
          <div class="panel-body collapse in">                                  
            
            
            <div class="row">
            
            
              <div class="col-xs-12 col-sm-4 col-md-4">
                  <p><b>Applicant's Marital Status:</b> <?php echo $apply['applicant_marital_status'];?><br>                  
                  <?php if($apply['applicant_marital_status']=="Married"){ ?>
                      <b>Name:</b> <?php echo $apply['name_married'];?><br>
                      <b>Nationality:</b> <?php echo $apply['nationality_married'];?><br>
                      <b>Previous Nationality:</b> <?php echo $apply['previous_nationality_married'];?><br>
                      <b>Place of Birth:</b> <?php echo $apply['place_of_birth_married'];?><br>
                      <b>Country of Birth:</b> <?php echo $apply['country_of_birth_married'];?><br>
                  <?php } ?>
                  </p>
                  
                  <p><b>Were your Grandfather/ Grandmother (paternal/maternal) Pakistan Nationals or Belong to Pakistan held area.</b><br>
                  <?php echo $apply['grandparents_pakistan'];?><br><br>
                  <?php if($apply['grandparents_pakistan']=="Yes"){ ?>
                  <b>Grandparents details:</b><br>
                  <?php echo $apply['grandparents_pakistan_details '];?>
                  <?php } ?>
                  </p>
                  
                  
                  
              </div>
              
              <div class="col-xs-12 col-sm-4 col-md-4">
                    <p>
                    <b>Present Occupation:</b> <?php echo $apply['present_occupation'];?><br>
                    <?php if($apply['present_occupation']=="OTHERS"){ ?>
                    <b>Present Occupation:</b> <?php echo $apply['occupation_other'];?>
                    <?php } ?>
                    </p>
                    <p><b>Employer Name/business:</b> <?php echo $apply['business_name'];?></p>
                    <p><b>Designation:</b> <?php echo $apply['designation'];?></p>
                    <p><b>Address:</b> <?php echo $apply['address'];?></p>
                    <p><b>Phone:</b> <?php echo $apply['phone'];?></p>
                    <p><b>Past Occupation, if any:</b> <?php echo $apply['past_occupation'];?></p>
                    
                    <p><b>Are/were you in a Military/Semi-Military/Police/Security. Organization?:</b><br>
                    <?php echo $apply['military'];?>
                    <?php if($apply['military']=="Yes"){ ?>
                    <b>Organisation:</b> <?php echo $apply['military_organisation'];?><br>
                    <b>Designation :</b> <?php echo $apply['military_designation'];?><br>
                    <b>Rank:</b> <?php echo $apply['military_rank'];?><br>
                    <b>Place of Posting:</b> <?php echo $apply['military_place_of_posting'];?><br>
                    <?php } ?>
                    
                    
                    </p>
                    
                  
                                 
              </div>
              
              <div class="col-xs-12 col-sm-4 col-md-4">  
                   #VISA INFO<br>                                
                    <?php if($apply['visa_type']=="TOURIST VISA"){ ?>                      
                       <p><b>Places likely to be visited</b> <?php echo $apply['tv_places_visited'];?></p>                         
                    <?php }elseif($apply['visa_type']=="BUSINESS VISA"){ ?>                      
                       <p><b>Name of the Company in India:</b> <?php echo $apply['bv_company_name'];?></p>
                       <p><b>Address:</b> <?php echo $apply['bv_address'];?></p>
                       <p><b>Phone:</b> <?php echo $apply['bv_phone'];?></p>
                       <p><b>Email:</b> <?php echo $apply['bv_email'];?></p>                       
                    <?php }elseif($apply['visa_type']=="MEDICAL VISA"){ ?>                        
                        <p>
                        #Hospital In Country Of Residence<br>
                        <b>Name:</b> <?php echo $apply['mv_hr_name'];?><br>
                        <b>Address:</b> <?php echo $apply['mv_hr_address'];?><br>
                        <b>Doctor's Name:</b> <?php echo $apply['mv_hr_doctor_name'];?><br>
                        <b>Phone/Fax:</b> <?php echo $apply['mv_hr_phone'];?><br>
                        <b>Email:</b> <?php echo $apply['mv_hr_email'];?><br>                        
                        </p>
                        <p>
                        #Hospital in India<br>
                        <b>Name:</b> <?php echo $apply['mv_hi_name'];?><br>
                        <b>Address:</b> <?php echo $apply['mv_hi_address'];?><br>
                        <b>Doctor's Name:</b> <?php echo $apply['mv_hi_doctor_name'];?><br>
                        <b>Phone/Fax:</b> <?php echo $apply['mv_hi_phone'];?><br>
                        <b>Email:</b> <?php echo $apply['mv_hi_email'];?><br>                        
                        </p>                        
                        <p><b>Nature of Illness</b> <?php echo $apply['mv_hi_illness'];?></p>                        
                    <?php } ?>
                    
                    <p><b>Duration of Visa (in Months):</b> <?php echo $apply['v_duration_of_visa'];?></p>
                    <p><b>No. of Entries:</b> <?php echo $apply['v_no_of_entries'];?></p>
                    <p><b>Purpose of Visit:</b> <?php echo $apply['v_purpose_of_visit'];?></p>
                    <p><b>Expected Date journey:</b> <?php echo $apply['v_expected_date_journey'];?></p>
                    <p><b>Port of Arrival in India:</b> <?php echo $apply['v_port_arrival'];?></p>
                    <p><b>Expected Port of Exit from India:</b> <?php echo $apply['v_port_exit'];?></p>
                    
                    
              </div> 
             
              
              </div>
              
          </div>          
        </div>
    </div>
</div>          
           
   
         
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h5 style="color:#ffffff"><i class="fa fa-user"></i> <?php echo $apply['given_name'];?></h5>                  
            </div>
          <div class="panel-body collapse in">                                  
            
            
            <div class="row">
            
            
              <div class="col-xs-12 col-sm-6 col-md-6">
                  <p><b>Have you ever visited India before?</b> <?php echo $apply['visited_india_before'];?><br>
                  <?php if($apply['visited_india_before']=="Yes"){ ?>
                      <b>Address 1:</b> <?php echo $apply['visited_address_1'];?><br>
                      <b>Address 2:</b> <?php echo $apply['visited_address_2'];?><br>
                      <b>Address 3:</b> <?php echo $apply['visited_address_3'];?><br>
                      <b>Cities previously visited in India:</b> <?php echo $apply['cities_previously_visited_india'];?><br>
                      <b>Last Indian Visa No/Currently valid Indian Visa No.:</b> <?php echo $apply['last_indian_visa_no'];?><br>
                      <b>Type of Visa:</b> <?php echo $apply['last_type_visa'];?><br>
                      <b>Place of Issue:</b> <?php echo $apply['last_place_of_issue'];?><br>
                      <b>Date of Issue:</b> <?php echo $apply['last_date_of_issue'];?><br>
                      <b>Has permission to visit or to extend stay in India previously been refused?:</b> <?php echo $apply['last_visit_previously_refused'];?><br>
                      <b>If so, when and by whom (Mention Control No. and date also):</b> <?php echo $apply['mention_control_no'];?><br>
                  <?php } ?>
                  </p>
                  
                  
              </div>
              
              <div class="col-xs-12 col-sm-6 col-md-6">
                  <p><b>Countries Visited in Last 10 years</b><br><?php echo $apply['countries_visited_last_10_years'];?></p>             
              </div>
              
               
             
              
              </div>
              
          </div>          
        </div>
    </div>
</div> 
    
                  
                                
                                              
                                                            
                                                                          
                                                                                        
                                                                                                      
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h5 style="color:#ffffff"><i class="fa fa-user"></i> <?php echo $apply['given_name'];?></h5>                  
            </div>
          <div class="panel-body collapse in">                                  
            
            
            <div class="row">
           
              
              <div class="col-xs-12 col-sm-12 col-md-12">
                  <p><b>Have you visited SAARC countries (except your own country) during last 3 years?</b> <?php echo $apply['visited_saarc_countries'];?></p>
                  
                  <table class="table table-striped table-bordered">
                      <tr>
                          <td><b>Name of SAARC country</b></td>
                          <td><b>Year</b></td>
                          <td><b>No. of visits</b></td>
                      </tr>
                      <?php if($apply['saarc_country_name_1']!=""){ ?>
                      <tr>
                          <td><?php echo $apply['saarc_country_name_1'];?></td>
                          <td><?php echo $apply['saarc_country_year_1'];?></td>
                          <td><?php echo $apply['saarc_country_no_visits_1'];?></td>
                      </tr>
                      <?php } ?>
                      <?php if($apply['saarc_country_name_2']!=""){ ?>
                      <tr>
                          <td><?php echo $apply['saarc_country_name_2'];?></td>
                          <td><?php echo $apply['saarc_country_year_2'];?></td>
                          <td><?php echo $apply['saarc_country_no_visits_2'];?></td>
                      </tr>
                      <?php } ?>
                      <?php if($apply['saarc_country_name_3']!=""){ ?>
                      <tr>
                          <td><?php echo $apply['saarc_country_name_3'];?></td>
                          <td><?php echo $apply['saarc_country_year_3'];?></td>
                          <td><?php echo $apply['saarc_country_no_visits_3'];?></td>
                      </tr>
                      <?php } ?>
                      <?php if($apply['saarc_country_name_4']!=""){ ?>
                      <tr>
                          <td><?php echo $apply['saarc_country_name_4'];?></td>
                          <td><?php echo $apply['saarc_country_year_4'];?></td>
                          <td><?php echo $apply['saarc_country_no_visits_4'];?></td>
                      </tr>
                      <?php } ?>
                      <?php if($apply['saarc_country_name_5']!=""){ ?>
                      <tr>
                          <td><?php echo $apply['saarc_country_name_5'];?></td>
                          <td><?php echo $apply['saarc_country_year_5'];?></td>
                          <td><?php echo $apply['saarc_country_no_visits_5'];?></td>
                      </tr>
                      <?php } ?>
                      <?php if($apply['saarc_country_name_6']!=""){ ?>
                      <tr>
                          <td><?php echo $apply['saarc_country_name_6'];?></td>
                          <td><?php echo $apply['saarc_country_year_6'];?></td>
                          <td><?php echo $apply['saarc_country_no_visits_6'];?></td>
                      </tr>
                      <?php } ?>
                      <?php if($apply['saarc_country_name_7']!=""){ ?>
                      <tr>
                          <td><?php echo $apply['saarc_country_name_7'];?></td>
                          <td><?php echo $apply['saarc_country_year_7'];?></td>
                          <td><?php echo $apply['saarc_country_no_visits_7'];?></td>
                      </tr>
                      <?php } ?>
                      <?php if($apply['saarc_country_name_8']!=""){ ?>
                      <tr>
                          <td><?php echo $apply['saarc_country_name_8'];?></td>
                          <td><?php echo $apply['saarc_country_year_8'];?></td>
                          <td><?php echo $apply['saarc_country_no_visits_8'];?></td>
                      </tr>
                      <?php } ?>
                  </table>
                  
                  
                  
              </div>
              
               
             
              
              </div>
              
          </div>          
        </div>
    </div>
</div>                                                                                                                                   
     
            

     
     
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h5 style="color:#ffffff"><i class="fa fa-user"></i> <?php echo $apply['given_name'];?></h5>                  
            </div>
          <div class="panel-body collapse in">                                  
            
            
            <div class="row">
            
            
              <div class="col-xs-12 col-sm-6 col-md-6">
                    <p><b>Reference Name in India:</b> <?php echo $apply['reference_name_india'];?></p>
                    <p><b>Address 1:</b> <?php echo $apply['reference_address_india_1'];?></p>
                    <p><b>Address 2:</b> <?php echo $apply['reference_address_india_2'];?></p>
                    <p><b>Phone:</b> <?php echo $apply['reference_phone_india'];?></p>
                                  
              </div>
              
              <div class="col-xs-12 col-sm-6 col-md-6">
                  <p><b>Reference Name in AFGHANISTAN:</b> <?php echo $apply['reference_name_country'];?></p>
                    <p><b>Address 1:</b> <?php echo $apply['reference_address_country_1'];?></p>
                    <p><b>Address 2:</b> <?php echo $apply['reference_address_country_2'];?></p>
                    <p><b>Phone:</b> <?php echo $apply['reference_phone_country'];?></p>
              </div>
              
               
             
              
              </div>
              
          </div>          
        </div>
    </div>
</div>
    
          
                
                      
                            
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h5 style="color:#ffffff"><i class="fa fa-user"></i> <?php echo $apply['given_name'];?></h5>                  
            </div>
          <div class="panel-body collapse in">                                  
            
            
            <div class="row">
            
            <form action="" method="post"> 
              <div class="col-xs-12 col-sm-12 col-md-12">
                  #Notice<br> 
                  <textarea class="form-control" name="notice" value="<?php echo $apply['notice']; ?>" rows="8"><?php echo $apply['notice']; ?></textarea>
                  <input type="hidden" name="appid" value="<?php echo $apply['app_id'];?>">
                  <input type="hidden" name="send" value="update_notice" />
                  <button type="submit" class="btn btn-success" id="save_notice">save notice</button>
              </div>
            </form>
               
             
              
              </div>
              
          </div>          
        </div>
    </div>
</div>                                        
     
     
      
            
           

        </div> <!-- container -->
        
        
        
        
    </div> <!--wrap -->
</div> <!-- page-content -->
