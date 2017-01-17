<div id='main' data-scroll-offset='88'>
  <div id='layer_slider_1' class='avia-layerslider main_color avia-shadow  avia-builder-el-0  el_before_av_codeblock  avia-builder-el-first  container_wrap fullsize'    style='height: 151px;' >
    <script data-cfasync="false" type="text/javascript">var lsjQuery = jQuery; </script>
    <script data-cfasync="false" type="text/javascript"> 
    lsjQuery(document).ready(function() {
        if(typeof lsjQuery.fn.layerSlider == "undefined") {
          lsShowNotice('layerslider_9_1','jquery');
        }
        else {
          lsjQuery("#layerslider_9_1").layerSlider({
            responsiveUnder: 1140, layersContainer: 1140, autoStart: false, startInViewport: false, pauseOnHover: false, twoWaySlideshow: true, loops: 1, keybNav: false, touchNav: false, skin: 'fullwidth', globalBGColor: '#ffffff', navPrevNext: false, hoverPrevNext: false, navStartStop: false, navButtons: false, showCircleTimer: false, thumbnailNavigation: 'disabled', lazyLoad: false, yourLogoStyle: 'left: 10px; top: 10px;', cbInit: function(element) {
            }, cbStart: function(data) {}, cbStop: function(data) {}, cbPause: function(data) {}, cbAnimStart: function(data) {}, cbAnimStop: function(data) {}, cbPrev: function(data) {}, cbNext: function(data) {}, skinsPath: ''}
              ) }  }  );
    </script>
    <div class="ls-wp-fullwidth-container" style="height:150px;">
      <div class="ls-wp-fullwidth-helper">
        <div id="layerslider_9_1" class="ls-wp-container" style="width:100%;height:150px;margin:0 auto;margin-bottom: 0px;">
          <div class="ls-slide" id="#layer_apply" data-ls=" transition2d: all;">
            <img class="ls-l" style="top:0px;left:0px;white-space: nowrap;" data-ls="offsetxin:left;offsetyin:bottom;durationin:2500;delayin:600;fadein:false;offsetxout:left;offsetyout:bottom;durationout:1500;fadeout:false;" src="assets/img/departingflights2.png" alt="">
            <h2 class="ls-l" style="top:52px;left:280px;font-weight:100;font-family:Helvetica;font-size:40px;color:#000000;white-space: nowrap;" data-ls="offsetxin:left;durationin:1500;delayin:650;fadein:false;offsetxout:right;durationout:1500;fadeout:false;">Apply for your Journey to
            </h2>
            <img class="ls-l" style="top:0px;left:460px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:bottom;delayin:2000;offsetxout:0;offsetyout:bottom;" src="assets/img/bg-india2-1.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id='after_layer_slider_1' class='main_color container_wrap fullsize'   >
    <div class='container' >
      <div class='template-page content  av-content-full alpha units'>
        <div class='post-entry post-entry-type-page post-entry-11'>
          <div class='entry-content-wrapper clearfix'>
            <section class="avia_codeblock_section avia_code_block_0"  itemscope="itemscope" itemtype="https://schema.org/CreativeWork" >
              <div class='avia_codeblock '  itemprop="text"> 
                <h3>Apply for our Service</h3>
                <form action="apply" method="post" enctype="multipart/form-data">
                  <input type="hidden" value="send" name="applyform">
                  <div class="row rowspace">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                      <p>
                        <label>
                          <input name="business_service" type="checkbox" value="Yes" id="buscheck" onclick="business(this);"
                                 <?php if($_POST['business_service']=="Yes"){ echo "checked"; } ?> /> Business Service
                        </label>
                      </p>
                      <p>
                        <label>
                          <input name="medical_service" type="checkbox" value="Yes" id="medicalchk" onclick="medical(this);"
                                 <?php if($_POST['medical_service']=="Yes"){ echo "checked"; } ?> /> Medical Service
                        </label>
                      </p>
                    </div>
                    <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                      <p>
                        <label>
                          <input name="tourism_services" type="checkbox" value="Yes" id="touristcheck" onclick="Touristchk(this);"
                                 <?php if($_POST['tourism_services']=="Yes"){ echo "checked"; } ?> /> Tourism Services
                        </label>
                      </p>
                      <p>
                        <label>
                          <input name="ticketing_services" type="checkbox" value="Yes" 
                                 <?php if($_POST['ticketing_services']=="Yes"){ echo "checked"; } ?> /> Ticketing Services
                        </label>
                      </p>
                    </div>
                    <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                      <p>
                        <label>
                          <input name="traveling_services" type="checkbox" value="Yes" 
                                 <?php if($_POST['traveling_services']=="Yes"){ echo "checked"; } ?> /> Traveling Services
                        </label>
                      </p>
                      <p>
                        <label>
                          <input name="passport_services" type="checkbox" value="Yes" 
                                 <?php if($_POST['passport_services']=="Yes"){ echo "checked"; } ?> /> Passport Services
                        </label>
                      </p>
                    </div>
                    <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                      <p>
                        <label>
                          <input name="accommodation_services" type="checkbox" value="Yes" 
                                 <?php if($_POST['accommodation_services']=="Yes"){ echo "checked"; } ?> /> Accommodation Services
                        </label>
                      </p>
                      <p>
                        <label>
                          <input name="entertainment_services" type="checkbox" value="Yes" 
                                 <?php if($_POST['entertainment_services']=="Yes"){ echo "checked"; } ?> /> Entertainment Services
                        </label>
                      </p>
                    </div>
                  </div>
                  <div class="row rowspace">
                    <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Country you are applying visa from*
                      <br>
                      <select class="form-control" name="applying_country" id="applying_country">
                        <option value="AFGHANISTAN">AFGHANISTAN</option>
                      </select>
                    </div>
                    <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Indian Mission*
                      <br>
                      <select class="form-control" name="indian_mission" id="indian_mission" >
                        <option value="AFGH - AFGANISTAN-HERAT">AFGH - AFGANISTAN-HERAT</option>
                        <option value="AFGJ - AFGANISTAN-JALALABAD">AFGJ - AFGANISTAN-JALALABAD</option>
                        <option value="AFGK - AFGANISTAN-KABUL">AFGK - AFGANISTAN-KABUL</option>
                        <option value="AFGR - AFGANISTAN-KANDHAR">AFGR - AFGANISTAN-KANDHAR</option>
                        <option value="AFGM - AFGANISTAN-MAZAR-E-SHARIEF">AFGM - AFGANISTAN-MAZAR-E-SHARIEF</option>
                      </select>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Nationality
                      <br>
                      <select class="form-control" name="nationality" id="nationality" >
                      <?php foreach($data['country'] as $cname){?>
                          <option value="<?php echo $cname; ?>"><?php echo $cname; ?></option>
                      <?php } ?>
                      </select>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Date of Birth*
                      <br>
                      <input class="form-control" name="date_of_birth" type="text" placeholder="Date of Birth" id="date_of_birth"  />
                    </div>
                  </div>
                  <div class="row rowspace"> 
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Email*
                      <br>
                      <input class="form-control" name="email" type="email" placeholder="Email" id="email" >
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Re Enter Email*
                      <br>
                      <input class="form-control" name="ReEnterEmail" type="email" placeholder="Re Enter Email" id="ReEnterEmail"  />
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Expected Date of Arrival*
                      <br>
                      <input class="form-control" name="date_of_arrival" type="text" placeholder="Expected Date of Arrival" id="date_of_arrival"  />
                    </div>
                    <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Visa Type
                      <br>
                      <select class="form-control" name="visa_type" required>
                        <option value="BUSINESS VISA">BUSINESS VISA</option>
                        <option value="MEDICAL VISA">MEDICAL VISA</option>
                        <option value="TOURIST VISA">TOURIST VISA</option>    
                      </select>
                    </div>
                  </div>
                  <div class="row rowspace">
                    <hr>
                    <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <h4>Person Details</h4>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Surname (as shown in your Passport)*
                      <br>
                      <input type="text" value="" class="form-control" name="surname" placeholder="Surname" id="surname"  />
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Given Name (Complete as in Passport)*
                      <br>
                      <input type="text" value="" name="given_name" class="form-control" placeholder="Given Name" id="given_name"  />
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 formspace" style="padding-top:25px;">
                      <b>
                        <label id="click_changed_name_box" for="changed_name_box" style="color:#000;">
                          <input name="changed_name" type="checkbox" value="Yes" id="changed_name_box" <?php if($_POST['changed_name']=="Yes"){ echo "checked"; } ?> /> Have you ever changed your Name? If yes, click the box and give details 
                        </label>
                      </b>
                    </div>
                  </div>
                  <div id="changed_name_fields">
                    <div class="row rowspace">     
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 formspace">
                        Previous Surname
                        <br>
                        <input type="text" value="" class="form-control" name="previous_surname" placeholder="Previous Surname" id="previous_surname" />
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 formspace">
                        Previous Name
                        <br>
                        <input type="text" value="" class="form-control" name="previous_name" placeholder="Previous Name" id="previous_name" />
                      </div>
                    </div>
                  </div>
                  <div class="row rowspace">   
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace"> 
                      Sex*
                      <br>
                      <select class="form-control" name="sex" id="sex" >
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Transgender">Transgender</option>
                      </select>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Place of Birth*
                      <br>
                      <input class="form-control" name="city_of_birth" type="text" placeholder="Place of Birth" id="city_of_birth"  />
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Country of birth*
                      <br>
                      <select class="form-control" name="country_of_birth" id="country_of_birth">
                        <?php foreach($data['country'] as $cname){?>
                          <option value="<?php echo $cname; ?>"><?php echo $cname; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Citizenship/National Id No.*
                      <input class="form-control" name="national_id" type="text" placeholder="Citizenship/National Id No." id="national_id"  />
                    </div>
                  </div>
                  <div class="row rowspace">      
                    <div  class="col-xs-12 col-sm-6 col-md-6 col-lg-6 formspace">
                      Religion*
                      <br>
                      <select class="form-control"  name="religion" id="religion" onclick="religion1(this);" >
                        <option value="Bahai">BAHAI</option>
                        <option value="Buddhism">BUDDHISM</option>
                        <option value="Christian">CHRISTIAN</option>
                        <option value="Hindu">HINDU</option>
                        <option value="Islam">ISLAM</option>
                        <option value="Jainism">JAINISM</option>
                        <option value="Judaism">JUDAISM</option>
                        <option value="Parsi">PARSI</option>
                        <option value="Sikh">SIKH</option>
                        <option value="Zoroastrian">ZOROASTRIAN</option>
                        <option id="o_rel_dis" value="Others">OTHERS</option>
                      </select>
                    </div>     
                    <script type="text/javascript">
                    function religion1(att)
                    {
                      var val = att.options[att.selectedIndex].value;
                      document.getElementById("rel_oth").style.display = val == 'Others' ? "block" : 'none';
                    }
                      
                    </script>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 formspace" id="rel_oth" style="display: none;">
                      Other Religion
                      <br>
                      <input class="form-control" name="other_religion" type="text" placeholder="Other Religion" id="other_religion">
                    </div>
                  </div>
                  <div class="row rowspace">
                    <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Visible Identification Marks*
                      <br>
                      <input class="form-control" name="visible_identification_marks" type="text" placeholder="Visible Identification Marks" id="visible_identification_marks" >
                    </div>
                    <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Eduational Qualification*
                      <br>
                      <select class="form-control"  name="educational_qualification" id="educational_qualification" >
                        <option value="BELOW MATRICULATION">BELOW MATRICULATION</option>
                        <option value="GRADUATE">GRADUATE</option>
                        <option value="HIGHER SECONDARY">HIGHER SECONDARY</option>
                        <option value="ILLITERATE">ILLITERATE</option>
                        <option value="MATRICULATION">MATRICULATION</option>
                        <option value="NA BEING MINOR">NA BEING MINOR</option>
                        <option value="POST GRADUATE">POST GRADUATE</option>
                        <option value="PROFESSIONAL">PROFESSIONAL</option>
                        <option value="OTHERS">OTHERS</option>
                      </select>
                    </div>
                    <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Nationality by birth or Naturalization?
                      <br>
                      <select class="form-control"  name="acquire_nationality" id="acquire_nationality" onclick="nationality_pre(this);"> 
                        <option value="0">Select</option>
                        <option value="By_Birth">By Birth</option>
                        <option value="Naturalization">Naturalization</option>
                      </select>
                      <script type="text/javascript">
                        function nationality_pre(att)
                        {
                          var val = att.options[att.selectedIndex].value;
                          document.getElementById("prev_nation").style.display = val == 'By_Birth' ? "block" : 'none';
                        }
                      </script>
                    </div>
                    <div style="display: none;" id="prev_nation" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Prev. Nationality
                      <br>
                      <select class="form-control" name="previous_nationality" id="previous_nationality">
                        <?php foreach($data['country'] as $cname){?>
                          <option value="<?php echo $cname; ?>"><?php echo $cname; ?></option>
                        <?php } ?>
                      </select>
                    </div> 
                  </div>
                  <div class="row rowspace">
                    <hr>
                    <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <h4>Passport Details</h4>
                    </div>
                    <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Passport No.*
                      <br>
                      <input class="form-control" name="passport_no" type="text" placeholder="Passport No." id="passport_no"  />
                    </div>
                    <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Place of Issue*
                      <br>
                      <input class="form-control" name="place_of_issue" type="text" placeholder="Place of Issue" id="place_of_issue"  />
                    </div>
                    <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Date of Issue*
                      <br>
                      <input class="form-control" name="date_of_issue" type="text" placeholder="Date of Issue" id="date_of_issue"  />
                    </div>
                    <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Expiration Date*
                      <br>
                      <input class="form-control" name="date_of_expiry" type="text" placeholder="Expiration Date" id="date_of_expiry"  />
                    </div>
                  </div>
                  <div class="row rowspace">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      Any other valid Passport/Identity Certificate(IC) Held
                      <br>
                      <select class="form-control" name="other_valid_passport" id="other_valid_passport" onclick="other_passport(this);">
                        <option value="yes">Yes</option>
                        <option value="no" selected="">No</option>
                      </select>
                    </div>
                    <script type="text/javascript">
                      function other_passport(att)
                      {
                        var val = att.options[att.selectedIndex].value;
                        document.getElementById("other_passport").style.display = val == 'yes' ? "block" : 'none';
                      }
                    </script>
                  </div>
                  <div id="other_passport" style="display: none;">
                  <div class="row rowspace">
                    <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Country of Issue
                      <br>
                      <select class="form-control" name="other_country_of_issue" id="other_country_of_issue">
                        <?php foreach($data['country'] as $cname){?>
                          <option value="<?php echo $cname; ?>"><?php echo $cname; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Passport/IC No.
                      <br>
                      <input class="form-control" name="other_passport_no" type="text" placeholder="Passport/IC No." id="other_passport_no" />
                    </div>
                    <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Date of Issue
                      <br>
                      <input class="form-control" name="other_date_of_issue" type="text" placeholder="Date of Issue" id="other_date_of_issue" />
                    </div>
                    <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Place of Issue
                      <input class="form-control" name="other_place_of_issue" type="text" placeholder="Place of Issue" id="other_place_of_issue" />
                    </div>
                  </div>
                  <div class="row rowspace">
                    <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Nationality mentioned therein
                      <br>
                      <select class="form-control" name="other_nationality_mentioned" id="other_nationality_mentioned">
                        <?php foreach($data['country'] as $cname){?>
                          <option value="<?php echo $cname; ?>"><?php echo $cname; ?></option>
                        <?php } ?>
                      </select>
                    </div>     
                  </div>
                  </div>

                  <div class="row rowspace">
                    <hr>
                    <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <h4>Applicant's Address Details - (Present Address)</h4>
                    </div>
                    <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      House No./Street*
                      <br>
                      <input class="form-control" name="street_present" type="text" placeholder="House No./Street" id="street_present"  />
                    </div>
                    <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Village/Town/City*
                      <br>
                      <input class="form-control" name="city_present" type="text" placeholder="Village/Town/City" id="city_present"  />
                    </div>
                    <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      State/Province/District*
                      <br>
                      <input class="form-control" name="state_present" type="text" placeholder="State/Province/District" id="state_present"  />
                    </div>
                    <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Country of Issue*
                      <br>
                      <select class="form-control" name="country" id="country_present"  >
                        <?php foreach($data['country'] as $cname){?>
                          <option value="<?php echo $cname; ?>"><?php echo $cname; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="row rowspace">
                    <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Postal Code
                      <br>
                      <input class="form-control" type="text" name="zip_code_present" placeholder="Postal Code" id="zip_code_present">
                    </div>
                    <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Phone No.
                      <br>
                      <input class="form-control" type="text" name="phone_no" placeholder="Phone No." id="phone_no">
                    </div>
                    <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Mobile No.
                      <br>
                      <input class="form-control" type="text" name="mobile_no" placeholder="Mobile No." id="mobile_no">
                    </div>
                    <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Email
                      <br>
                      <input class="form-control" type="email" name="email" placeholder="Email" id="email">
                    </div>
                  </div>
                  <div class="row rowspace">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <h4>Permanent Address</h4>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace" style="padding-top:25px;">
                      <label id="click_same_address_permanent" for="same_address_permanent">
                        <input name="same_address_permanent" type="checkbox" value="" id="same_address_permanent" /> 
                        <b style="color:#000;"> Click Here for Same Address
                        </b> 
                      </label>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      House No./Street*
                      <br>
                      <input class="form-control" name="street_permanent" type="text" placeholder="House No./Street" id="street_permanent"  />
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Village/Town/City*
                      <br>
                      <input class="form-control" name="city_permanent" type="text" placeholder="Village/Town/City" id="city_permanent" />
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      State/Province/District*
                      <br>
                      <input class="form-control" name="state_permanent" type="text" placeholder="State/Province/District" id="state_permanent"  />
                    </div>
                  </div>
                  <div class="row rowspace">
                    <hr>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <h4>Father's Details</h4>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Father Name*
                      <br>
                      <input class="form-control" name="name_father" type="text" placeholder="Father Name" id="name_father"  />
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Nationality of Father*
                      <br>
                      <select class="form-control" name="nationality_father" id="nationality_father">
                        <?php foreach($data['country'] as $cname){?>
                          <option value="<?php echo $cname; ?>"><?php echo $cname; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Previous Nationality <small>(Optional)</small>
                      <br>
                      <select class="form-control" name="previous_nationality_father" id="previous_nationality_father">
                        <?php foreach($data['country'] as $cname){?>
                          <option value="<?php echo $cname; ?>"><?php echo $cname; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Place of Birth*
                      <br>
                      <input name="place_of_birth_father" type="text" class="form-control" placeholder="Place of Birth" id="place_of_birth_father"  />
                    </div>
                  </div>
                  <div class="row rowspace">
                    <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Country of Birth*
                      <br>
                      <select class="form-control" name="country_of_birth_father" id="country_of_birth_father">
                        <?php foreach($data['country'] as $cname){?>
                          <option value="<?php echo $cname; ?>"><?php echo $cname; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="row rowspace">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <h4>Mother's Details</h4>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Mother Name*
                      <br>
                      <input  class="form-control" name="name_mother" type="text" placeholder="Mother Name" id="name_mother" >
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Nationality of Mother*
                      <br>
                      <select class="form-control" name="nationality_mother" id="nationality_mother" >
                        <?php foreach($data['country'] as $cname){?>
                          <option value="<?php echo $cname; ?>"><?php echo $cname; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Previous Nationality <small>(Optional)</small>
                      <br>
                      <select class="form-control" name="previous_nationality_mother" id="previous_nationality_mother">
                        <?php foreach($data['country'] as $cname){?>
                          <option value="<?php echo $cname; ?>"><?php echo $cname; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Place of Birth*
                      <br>
                      <input  name="place_of_birth_mother" type="text" class="form-control" placeholder="Place of Birth" id="place_of_birth_mother" >
                    </div>
                  </div>
                  <div class="row rowspace">
                    <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Country of Birth*
                      <br>
                      <select class="form-control" name="country_of_birth_mother" id="country_of_birth_mother" >
                        <?php foreach($data['country'] as $cname){?>
                          <option value="<?php echo $cname; ?>"><?php echo $cname; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>

                  <div class="row rowspace">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <h4>Applicant's Marital Status</h4>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                      Marital Status
                      <br>
                      <select class="form-control" name="applicant_marital_status" id="applicant_marital_status" onclick="marital(this);">
                      <option value="0">Select</option>
                      <option value="Married">Married</option>
                      <option value="Single" selected="">Single</option>
                      </select>
                  </div>
                  <script type="text/javascript">
                      function marital(att)
                      {
                        var val = att.options[att.selectedIndex].value;
                        document.getElementById("marital_stat").style.display = val == 'Married' ? "block" : 'none';
                      }
                    </script>
                  </div>
                  <div id="marital_stat" style="display: none;">
                    <div class="row rowspace">
                      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                        Name
                        <br>
                        <input class="form-control" name="name_married" type="text" placeholder="Name" id="name_married" >
                      </div>
                      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                        Nationality
                        <br>
                        <select class="form-control" name="nationality_married" id="nationality_married">
                          <?php foreach($data['country'] as $cname){?>
                            <option value="<?php echo $cname; ?>"><?php echo $cname; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                        Previous Nationality
                        <br>
                        <select class="form-control" name="previous_nationality_married" id="previous_nationality_married">
                          <?php foreach($data['country'] as $cname){?>
                            <option value="<?php echo $cname; ?>"><?php echo $cname; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                        Place of Birth
                        <br>
                        <input name="place_of_birth_married" type="text" class="form-control" placeholder="Place of Birth" id="place_of_birth_married" >
                      </div>
                    </div>
                    <div class="row rowspace">
                      <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                        Country of Birth
                        <br>
                        <select class="form-control" name="country_of_birth_married" id="country_of_birth_married">
                            <?php foreach($data['country'] as $cname){?>
                              <option value="<?php echo $cname; ?>"><?php echo $cname; ?></option>
                            <?php } ?>
                        </select>
                      </div>
                    </div>
                  </div>
                <div class="row rowspace">
                  <hr>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h4>Were your Grandfather/ Grandmother (paternal/maternal) Pakistan Nationals or Belong to Pakistan held area.</h4>
                  </div>
                </div>
                <div class="row rowspace">
                  <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                    <select class="form-control" name="grandparents_pakistan" id="grandparents_pakistan" onclick="grand_pa(this);">
                      <option value="yes">Yes</option>
                      <option value="no" selected="">No</option>
                    </select>
                  </div>
                  <script type="text/javascript">
                      function grand_pa(att)
                      {
                        var val = att.options[att.selectedIndex].value;
                        document.getElementById("grand_pa").style.display = val == 'yes' ? "block" : 'none';
                      }
                    </script>
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" id="grand_pa" style="display: none;">
                    <input class="form-control" name="grandparents_pakistan_details" type="text" placeholder="If Yes, give details" id="grandparents_pakistan_details" /> 
                  </div>
                </div>
                <div class="row rowspace">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h4>Profession/Occupation Details of Applicant</h4>
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                    <select class="form-control" name="present_occupation" id="present_occupation" onclick="Profession(this);">
                      <?php foreach($data['occupation'] as $occu){?>
                        <option value="<?php echo $occu; ?>"><?php echo $occu; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <script type="text/javascript">
                      function Profession(att)
                      {
                        var val = att.options[att.selectedIndex].value;
                        document.getElementById("Profession").style.display = val == 'OTHERS' ? "block" : 'none';
                      }
                    </script>
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace" id="Profession" style="display: none;">
                    <input class="form-control" name="occupation_other" type="text" placeholder="Other Profession/Occupation" id="occupation_other" />
                  </div>
                </div>
                <div class="row rowspace">
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                    <input class="form-control" name="business_name" type="text" placeholder="Employer Name/business*" id="business_name"  />
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                    <input class="form-control" name="designation" type="text" placeholder="Designation*" id="designation"  />
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                    <input class="form-control" name="address" type="text" placeholder="Address*" id="address"  />
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                    <input class="form-control" name="phone" type="text" placeholder="Phone*" id="phone"  />
                  </div>
                </div>
                <div class="row rowspace">
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">    
                    <select class="form-control" name="past_occupation" id="past_occupation">
                      <?php foreach($data['occupation'] as $occu){?>
                        <option value="<?php echo $occu; ?>"><?php echo $occu; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="row rowspace">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h4>Are/were you in a Military/Semi-Military/Police/Security. Organization?
                    </h4>
                  </div>
                  <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                    <select class="form-control" name="military" id="military" onclick="military_sho(this);">
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No" selected="">No</option>
                    </select>
                  </div>
                </div>
                <script type="text/javascript">
                      function military_sho(att)
                      {
                        var val = att.options[att.selectedIndex].value;
                        document.getElementById("military_show").style.display = val == 'Yes' ? "block" : 'none';
                      }
                    </script>
                <div class="row rowspace" id="military_show" style="display: none;">
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                    <input class="form-control" name="military_organisation" type="text" placeholder="Organisation" id="military_organisation" />
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                    <input class="form-control" name="military_designation" type="text" placeholder="Designation" id="military_designation" />
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                    <input class="form-control" name="military_rank" type="text" placeholder="Rank" id="military_rank" />
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                    <input class="form-control" name="military_place_of_posting" type="text" placeholder="Place of Posting" id="military_place_of_posting" />
                  </div>
                </div>
                <script type="text/javascript">
                    function business(chkbus) {
                        var business_visa = document.getElementById("business_visa");
                        business_visa.style.display = buscheck.checked ? "block" : "none";
                    }
                    </script>
                <div id="business_visa" style="display: none;">
                  <div class="row rowspace">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <h4>Details of Visa Sought</h4>
                      <h5>Business Visa</h5>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                      <input class="form-control" name="bv_company_name" type="text" placeholder="Name of the Company in India" id="bv_company_name" /> 
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                      <input class="form-control" name="bv_address" type="text" placeholder="Address" id="bv_address" /> 
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                      <input class="form-control" name="bv_phone" type="text" placeholder="Phone" id="bv_phone" /> 
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                      <input class="form-control" name="bv_email" type="email" placeholder="Email" id="bv_email" /> 
                    </div>
                  </div>
                  
                </div>
                <script type="text/javascript">
                    function medical(chkmed) {
                        var medical_visa = document.getElementById("medical_visa");
                        medical_visa.style.display = medicalchk.checked ? "block" : "none";
                    }
                    </script>
                <div id="medical_visa" style="display: none;">
                  <div class="row rowspace">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <h4>Medical Visa
                      </h4>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                      <input class="form-control" name="medical_visa_result" type="text" placeholder="Medical Visa Result" id="Medical_Visa_Result" /> 
                    </div>
                  </div>
                  <div class="row rowspace">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <h4>Hospital In Country Of Residence</h4>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                      <input class="form-control" name="mv_hr_name" type="text" placeholder="Name" id="mv_hr_name" /> 
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                      <input class="form-control" name="mv_hr_address" type="text" placeholder="Address" id="mv_hr_address" /> 
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                      <input class="form-control" name="mv_hr_doctor_name" type="text" placeholder="Doctor's Name" id="mv_hr_doctor_name" /> 
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                      <input class="form-control" name="mv_hr_phone" type="text" placeholder="Phone/Fax" id="mv_hr_phone" /> 
                    </div>
                  </div>
                  <div class="row rowspace">
                    <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                      <input class="form-control" name="mv_hr_email" type="email" placeholder="Email" id="mv_hr_email" /> 
                    </div>
                  </div>
                  <div class="row rowspace">
                    <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <h4>Hospital in India
                      </h4>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                      <input class="form-control" name="mv_hi_name" type="text" placeholder="Name" id="mv_hi_name" /> 
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                      <input class="form-control" name="mv_hi_address" type="text" placeholder="Address" id="mv_hi_address" /> 
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                      <input class="form-control" name="mv_hi_doctor_name" type="text" placeholder="Doctor's Name" id="mv_hi_doctor_name" /> 
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                      <input class="form-control" name="mv_hi_phone" type="text" placeholder="Phone/Fax" id="mv_hi_phone" /> 
                    </div>
                  </div>
                  <div class="row rowspace">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                      <input class="form-control" name="mv_hi_email" type="email" placeholder="Email" id="mv_hi_email" /> 
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                      <input class="form-control" name="mv_hi_illness" type="text" placeholder="Nature of Illness" id="mv_hi_illness" /> 
                    </div>
                  </div>
                </div>
                    <script type="text/javascript">
                    function Touristchk(chktou) {
                        var tourist_visa = document.getElementById("tourist_visa");
                        tourist_visa.style.display = touristcheck.checked ? "block" : "none";
                    }
                    </script>
                <div id="tourist_visa" style="display: none;">
                  <div class="row rowspace">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <h4>Tourist Visa</h4>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                      <input class="form-control" name="tv_places_visited" type="text" placeholder="Places likely to be visited" id="tv_places_visited" /> 
                    </div>
                  </div>
                </div>
                <div class="row rowspace"> 
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h4>For Every Visa</h4>
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <input class="form-control" name="v_duration_of_visa" type="text" placeholder="Duration of Visa (in Months)" id="v_duration_of_visa" /> 
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                    <select class="form-control" name="v_no_of_entries" id="v_no_of_entries">
                      <option value="0">Duration of Visa (in Months)</option>
                      <option value="Single">Single</option>
                      <option value="Triple">Triple</option>
                      <option value="Double">Double</option>  
                      <option value="Multiple">Multiple</option>   
                    </select>
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                    <select class="form-control" name="PurposeofVisit" id="v_purpose_of_visit">
                      <option value="0">Purpose of Visit</option>
                      <option value="Accompanying Patient">Accompanying Patient</option>
                      <option value="Accompanying Patient as Doctor">Accompanying Patient as Doctor</option>
                      <option value="Business">Business</option>  
                      <option value="Commercial Performance">Commercial Performance</option>
                      <option value="Diplomatic">Diplomatic</option>    
                      <option value="Education">Education</option>    
                      <option value="Employment">Employment</option>    
                      <option value="Joining spouse">Joining spouse</option>    
                      <option value="Journalism">Journalism</option>    
                      <option value="Medical Treatement of Self">Medical Treatement of Self</option>    
                      <option value="Meeting friends/relatives">Meeting friends/relatives</option>    
                      <option value="Minor child(either parent is indian)">Minor child(either parent is indian)</option>    
                      <option value="Official">Official</option>     
                      <option value="Pilgrimage">Pilgrimage</option>    
                      <option value="Seminar/Conference">Seminar/Conference</option>    
                      <option value="Social Visit">Social Visit</option>    
                      <option value="Studies">Studies</option>    
                      <option value="Tourism">Tourism</option>    
                      <option value="Transit">Transit</option>    
                      <option value="Others">Others</option>   
                    </select>
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                    <input class="form-control" name="v_expected_date_journey" type="text" placeholder="Expected Date journey" id="v_expected_date_journey" />
                  </div>
                </div>
                <div class="row rowspace">
                  <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <input class="form-control" name="v_port_arrival" type="text" placeholder="Port of Arrival in India" id="v_port_arrival" /> 
                  </div>
                  <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <input class="form-control" name="v_port_exit" type="text" placeholder="Expected Port of Exit from India" id="v_port_exit" /> 
                  </div>
                </div>
                <div class="row rowspace">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h4>Have you ever visited India before?</h4>
                  </div>
                  <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                    <select class="form-control" name="visited_india_before" id="visited_india_before" onclick="visited_india1(this);">
                      <option value="">Select</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>
                    </select>
                  </div>
                </div>

                <script type="text/javascript">
                      function visited_india1(att)
                      {
                        var val = att.options[att.selectedIndex].value;
                        document.getElementById("visited_india").style.display = val == 'yes' ? "block" : 'none';
                      }
                    </script>
                <div id="visited_india" style="display: none">
                <div class="row rowspace">
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <input class="form-control" name="visited_address_1" type="text" placeholder="Address line 1" id="visited_address_1" /> 
                  </div>
                  <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <input class="form-control" name="visited_address_2" type="text" placeholder="Address line 2" id="visited_address_2" /> 
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <input class="form-control" name="visited_address_3" type="text" placeholder="Address line 3" id="visited_address_3" /> 
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <input class="form-control" name="cities_previously_visited_india" type="text" placeholder="City" id="cities_previously_visited_india" /> 
                  </div>
                </div>
                <div class="row rowspace">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h4>Last Indian Visa No/Currently valid Indian Visa No.
                    </h4>
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <input class="form-control" name="last_indian_visa_no" type="text" placeholder="Visa No." id="last_indian_visa_no" /> 
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                    <select class="form-control" name="last_type_visa" id="last_type_visa" />
                    <option value="Visa Type">Visa Type</option>
                    <option value="BUSINESS VISA">BUSINESS VISA</option>
                    <option value="MEDICAL VISA">MEDICAL VISA</option>
                    <option value="TOURIST VISA">TOURIST VISA</option>    
                    </select>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                  <input class="form-control" name="last_place_of_issue" type="text" placeholder="Place of Issue" id="last_place_of_issue" /> 
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                  <input class="form-control" name="last_date_of_issue" type="text" placeholder="Date of Issue" id="last_date_of_issue" />
                </div>
              </div>
              </div>
              <div class="row rowspace">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <h4>Has permission to visit or to extend stay in India previously been refused?</h4>
                </div>
                <div  class="col-xs-12 col-sm-6 col-md-6 col-lg-6 formspace">
                  <select class="form-control" name="last_visit_previously_refused" id="last_visit_previously_refused" onclick="permsn_india(this);">
                    <option value="0">Select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                </div>
              </div>
              <script type="text/javascript">
                    function permsn_india(att)
                    {
                      var val = att.options[att.selectedIndex].value;
                      document.getElementById("prmsn_india").style.display = val == 'Yes' ? "block" : 'none';
                    }
                  </script>
              <div class="row rowspace" id="prmsn_india" style="display: none;">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                  <input class="form-control" name="mention_control_no" type="text" placeholder="By Whom" id="mention_control_no" /> 
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                  <input class="form-control" name="refused_date" type="text" placeholder="Refused Date" id="RefusedDate" />
                </div>
              </div>
              <div class="row rowspace">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <h4>Other Information</h4>
                  <p>Countries Visited in Last 10 years (Countries Name Separated by Comma. ( , ))</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <input class="form-control" name="countries_visited_last_10_years" type="text" placeholder="Countries Name" id="countries_visited_last_10_years" /> 
                </div>
              </div>
              <div class="row rowspace">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <h4>SAARC Country Visit Details</h4>
                  <p>Have you visited SAARC countries (except your own country) during last 3 years?</p>
                </div>
                <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                  <select onclick="saarc_visit(this);" class="form-control" name="visited_saarc_countries" id="visited_saarc_countries">
                    <option value="0">select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                </div>
                <script type="text/javascript">
                  function saarc_visit(att)
                  {
                    var val = att.options[att.selectedIndex].value;
                    document.getElementById("saarc_visit_1").style.display = val == 'Yes' ? "block" : 'none';
                    $('#add_field_button1').removeAttr('disabled');
                  }
                </script>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                  <button id="add_field_button1" class="btn btn-primary" disabled="" type="button">
                    <i class="fa fa-plus"></i> Add More Fields
                  </button>
                </div>
              </div>
<div id="saarc_visit_1" style="display: none;">             
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <script>
                $(document).ready(function(){
                    $("button#add_field_button1").click(function(){
                         $('.saarc_country_add_more_inner:last').clone().insertAfter(".saarc_country_add_more");
                    });
                });
              </script>     
              <div class="row rowspace saarc_country_add_more_inner">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                    <select class="form-control" name="saarc_country_name[]" id="saarc_country_name_1" />
                    <option value="0">Name of SAARC country</option>
                    <option value="AFGHANISTAN">AFGHANISTAN</option>
                    <option value="BHUTAN">BHUTAN</option>
                    <option value="PAKISTAN">PAKISTAN</option>
                    <option value="MALDIVES">MALDIVES</option>
                    <option value="BANGLADESH">BANGLADESH</option>
                    <option value="SRI LANKA">SRI LANKA</option>
                    <option value="NEPAL">NEPAL</option>
                    </select>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 formspace">
                  <select class="form-control" name="saarc_country_year[]" id="saarc_country_year_1" />
                    <option value="0">Year</option>
                    <option value="2016">2016</option>
                    <option value="2015">2015</option>
                    <option value="2014">2014</option>
                    <option value="2013">2013</option>
                  </select>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                  <input class="form-control" name="saarc_country_no_visits[]" type="text" placeholder="No. of Visits" id="saarc_country_no_visits_1" /> 
                </div>
              </div>
           <div class="saarc_country_add_more"></div>
</div>
          <div class="row rowspace">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <h4>Reference in INDIA
              </h4>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <input class="form-control" name="reference_name_india" type="text" placeholder="Reference Name in India*" id="reference_name_india"  /> 
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <input class="form-control" name="reference_address_india_1" type="text" placeholder="Address line 1*" id="reference_address_india_1"  /> 
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <input class="form-control" name="reference_address_india_2" type="text" placeholder="Address line 2" id="reference_address_india_2" /> 
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <input class="form-control" name="reference_phone_india" type="text" placeholder="Phone No.*" id="reference_phone_india"  /> 
            </div>
          </div>
          <div class="row rowspace">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <h4>Reference in AFGHANISTAN
              </h4>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <input class="form-control" name="reference_name_country" type="text" placeholder="Reference Name in AFGHANISTAN*" id="reference_name_country"  /> 
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <input class="form-control" name="reference_address_country_1" type="text" placeholder="Address line 1*" id="reference_address_country_1"  /> 
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <input class="form-control" name="reference_address_country_2" type="text" placeholder="Address line 2" id="reference_address_country_2" /> 
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <input class="form-control" name="reference_phone_country" type="text" placeholder="Phone No.*" id="reference_phone_country"  /> 
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 input-bmargin">
              <input type="file" name="photos[]" id="picture" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple="true"  />
              
                 
              <table border="0">
                <tr>
                  <td><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg>
                  </td>
                  <td><small>Please upload your passport size JPEG photograph, <br> min size(10KB), max size(300KB) <br>min dimention(350x350), max dimention(1000x1000) </small></td>
                </tr>
              </table>
              

            </div>
          </div>
          <div class="row rowspace">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 rowspace">
              <input name="declare" type="checkbox" id="sub" value="" onclick="apply(this);" /> I declare that the Information provided in the application is true and correct.
            </div>
            <script type="text/javascript">
                    function apply(app) {
                        var submit = document.getElementById("submit");
                         if(sub.checked){$('#submit').removeAttr('disabled');}
                         else
                         {$('#submit').attr('disabled', 'disabled');}
                    }
                    </script>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 rowspace">
              <button class="btn btn-success btn-lg" id="submit" disabled="" type="submit">SEND APPLY</button>
              </form>
          </div>
        </div>
      </div>
      </section>

<script>
  $(function() {
    $("#date_of_birth" ).datepicker();
    $("#date_of_arrival" ).datepicker();
    $("#date_of_issue" ).datepicker();
    $("#date_of_expiry" ).datepicker();
    $("#v_expected_date_journey" ).datepicker();
    $("#last_date_of_issue" ).datepicker();
    $("#RefusedDate" ).datepicker();
    $("#other_date_of_issue" ).datepicker();
  } );
  </script>


  </div>
</div>
</div>
<!-- close content main div --> 
<!-- section close by builder template -->    
</div>
<!--end builder template-->
</div>
<!-- close default .container_wrap element -->            

