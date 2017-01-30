<div id="page-content">
    <div id="wrap">
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url() ?>admin">Dashboard</a></li>
                <li><a href="<?php echo base_url() ?>admin/doctor">Doctor</a></li>
                <li class='active'><?php echo $headline; ?></li>
            </ol>

            <h1><?php echo $headline; ?></h1>
            <div class="options">
                <div class="btn-toolbar">
                    <a href="<?php echo base_url() ?>admin/doctor" class="btn btn-default hidden-xs"><i class="fa fa-files-o"></i> All Doctor</a>
                </div>
            </div>
        </div>

        <div class="container">

            <?php
//            
//            echo '<pre>';
//                print_r($doctor);
//            echo '</pre>';
            
            
            ?>

            <div class="row" data-ng-controller="countryController">
                <div class="col-sm-12">
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4><i class="fa fa-hospital-o"></i> <span>Edit Doctor</span></h4>                         
                        </div>
                        <div class="panel-body collapse in"> 
                            <form method="post" enctype="multipart/form-data" action="" name="doctor" id="doctor">
                                <input type="hidden" name="send" value="1" ng-model = "formAdata.send">  
                                <input type="hidden" name="id" value="<?php echo $doctor->id;?>"/>  
                                <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>First Name:</label> 
                                        <input type="text" class="form-control" name="first_name" id="first_name" ng-model = "formAdata.first_name" ng-init="formAdata.first_name ='<?php echo $doctor->first_name;?>'" value="" placeholder="First Name" required> 
<!--                                        <span ng-show="error_first_name">{{error_first_name}}</span>-->
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>Last Name:</label> 
                                        <input type="text" class="form-control" name="last_name" id="last_name" ng-model = "formAdata.last_name" ng-init="formAdata.last_name ='<?php echo $doctor->last_name;?>'" value="" placeholder="Last Name" > 
                                    </div>
                                </div>   
                                <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>Email:</label> 
                                        <input type="email" class="form-control" name="email" id="email"  ng-model = "formAdata.email" ng-init="formAdata.email ='<?php echo $doctor->email;?>'" value="" placeholder="Email" required> 
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>Phone No:</label> 
                                        <input type="text" class="form-control" name="phone_no" id="phone_no"  ng-model = "formAdata.phone_no" ng-init="formAdata.phone_no ='<?php echo $doctor->phone_no;?>'" value="" placeholder="Phone No" > 
                                    </div>
                                </div> 

                                <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>Mobile No:</label> 
                                        <input type="text" class="form-control" name="mobile" id="mobile"   ng-model = "formAdata.mobile" ng-init="formAdata.mobile ='<?php echo $doctor->mobile;?>'" value="" placeholder="mobile" required> 
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>Address:</label> 
                                        <input type="text" class="form-control" name="address" id="address" ng-model = "formAdata.address" ng-init="formAdata.address ='<?php echo $doctor->address;?>'" value="" placeholder="Address" required> 
                                    </div>
                                </div>   


                                <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group">   
                                        <label>Registration No : </label>
                                        <input type="text" class="form-control" name="registration_no" id="registration_no"  ng-model = "formAdata.registration_no" ng-init="formAdata.registration_no ='<?php echo $doctor->first_name;?>'" value="" placeholder="Registration No" >
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group">   
                                        <label>Qualification : <span style="font-size: 8px;">(Add comma ( , ) seprated value with )</span></label>
                                        <input type="text" class="form-control" name="qualification"  ng-model = "formAdata.qualification" ng-init="formAdata.qualification ='<?php echo $doctor->qualification;?>'"  id="qualification" value="" placeholder="Qualification" >
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group">   
                                        <label>Experience : </label>
                                        <input type="text" class="form-control" name="experience"  ng-model = "formAdata.experience" ng-init="formAdata.experience ='<?php echo $doctor->experience;?>'" id="experience" value="" placeholder="Experience" >
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group">   
                                        <label>Consulting Fees : </label>
                                        <input type="int" class="form-control" name="consultancy_fee"  ng-model = "formAdata.consultancy_fee" ng-init="formAdata.consultancy_fee ='<?php echo $doctor->consultancy_fee;?>'" id="consultancy_fee" value="" placeholder="Fees" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12"> 

                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group">   
                                        <label>Photo : </label>
                                        <input type="file" class="form-control" name="avatar" id="avatar"  ng-model = "formAdata.avatar" value="" placeholder="Photo" >
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group">   
                                        <label>Specialization : <span style="font-size: 8px;">(Add comma ( , ) seprated value with )</span></label>
                                        <input type="text" class="form-control" name="specialization"  ng-model = "formAdata.specialization" ng-init="formAdata.specialization ='<?php echo $doctor->specialization;?>'" id="specialization" value="" placeholder="Specialization" required>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 form-group"> 
                                    <label>Type : </label><br/>
                                    <input name="clinic_hospital_type"  ng-model = "formAdata.clinic_hospital_type" ng-init="formAdata.clinic_hospital_type ='<?php echo $doctor->clinic_hospital_type;?>'" type="radio" value="HOSPITAL"> Hospital
                                    <input name="clinic_hospital_type"  ng-model = "formAdata.clinic_hospital_type" ng-init="formAdata.clinic_hospital_type ='<?php echo $doctor->clinic_hospital_type;?>'" type="radio" value="CLINIC" style="margin-left: 10%;"> Clinic
                                    <input name="clinic_hospital_type"  ng-model = "formAdata.clinic_hospital_type" ng-init="formAdata.clinic_hospital_type ='<?php echo $doctor->clinic_hospital_type;?>'" type="radio" value="BOTH" style="margin-left: 10%;"> Both
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group">   
                                        <label>Country : </label>  
                                        <select class="form-control" name="country"  id="country" ng-init="country = 'IN'"  ng-model="country" ng-change="GetState({{countryData.code}})">
                                            <option ng-repeat="countryData in countryList" value="{{countryData.code}}" ng-selected="IN">{{countryData.name}}</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group state"> 
                                        <label   ng-init="GetState('IN')">State : </label>
                                        <div ng-bind-html="htmlAdText">
                                            <select class="form-control" name="state" id="state"  ng-init="state ='<?php echo $doctor->state;?>'" ng-model="state"></select>  
                                        </div>
                                    </div>
                                </div>  

                                <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>City : </label> 
                                        <input type="text" class="form-control" name="city"  ng-model = "formAdata.city"  ng-init="formAdata.city ='<?php echo $doctor->city;?>'" id="city" value="" placeholder="City" required> 
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group">   
                                        <label>ZipCode : </label>
                                        <input type="text" class="form-control" name="zipcode"  ng-model = "formAdata.zipcode"  ng-init="formAdata.zipcode ='<?php echo $doctor->zipcode;?>'" id="zipcode" value="" placeholder="zipcode" required>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 mt20">  
                                    <input style="width: 20%" type="submit" class="btn btn-lg btn-success pull-right" value="Save"> 
                                </div>

                            </form>


                        </div>

                    </div>
                </div>
            </div>




        </div> <!-- container -->




    </div> <!--wrap -->
</div> <!-- page-content -->





