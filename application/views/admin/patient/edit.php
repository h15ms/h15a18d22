<div id="page-content">
    <div id="wrap">
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url() ?>admin">Dashboard</a></li>
                <li><a href="<?php echo base_url() ?>admin/patient">Patient</a></li>
                <li class='active'><?php echo $headline; ?></li>
            </ol>

            <h1><?php echo $headline; ?></h1>
            <div class="options">
                <div class="btn-toolbar">
                    <a href="<?php echo base_url() ?>admin/patient" class="btn btn-default hidden-xs"><i class="fa fa-files-o"></i> All Doctor</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row" data-ng-controller="patientController">
                <div class="col-sm-12">
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4><i class="fa fa-hospital-o"></i> <span>Add Patient</span></h4>                         
                        </div>
                        <div class="panel-body collapse in"> 
                            <form method="post" enctype="multipart/form-data" action="#" name="Patient" id="Patient" novalidate>
                                <input type="hidden" name="send" value="1" ng-model = "Patient.send">  
                                <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>First Name:</label> 
                                        <input type="text" class="form-control" name="first_name" id="first_name" ng-model = "Patient.first_name" ng-init="Patient.first_name ='<?php echo $patient->first_name;?>'" value="" placeholder="First Name" required> 
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>Middle Name:</label> 
                                        <input type="text" class="form-control" name="middle_name" id="first_name" ng-model = "Patient.middle_name"  ng-init="Patient.middle_name ='<?php echo $patient->middle_name;?>'"  value="" placeholder="Middle Name" required> 
<!--                                        <span ng-show="error_first_name">{{error_first_name}}</span>-->
                                    </div>
                                </div>   
                                <div class="col-xs-12 col-sm-12 col-md-12"> 
                                     <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>Last Name:</label> 
                                        <input type="text" class="form-control" name="last_name" id="last_name" ng-model = "Patient.last_name" ng-init="Patient.last_name ='<?php echo $patient->last_name;?>'"  value="" placeholder="Last Name" > 
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>Phone No:</label> 
                                        <input type="text" class="form-control" name="phone_no" id="phone_no"  ng-model = "Patient.phone_no" ng-init="Patient.phone_no ='<?php echo $patient->phone;?>'"  value="" placeholder="Phone No" > 
                                    </div>
                                </div> 
                                <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>Gender:</label> 
                                        <input type="text" class="form-control" name="gender" id="gender"   ng-model = "Patient.gender" ng-init="Patient.gender ='<?php echo $patient->gender;?>'"  value="" placeholder="Gender" required> 
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>Dob:</label> 
                                        <input type="text" class="form-control" name="dob" id="dob" ng-model = "Patient.dob" ng-init="Patient.dob ='<?php echo $patient->dob;?>'"  value="" placeholder="Dob Formate. 1988-06-25" required> 
                                    </div>
                                </div> 
                                <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>Mobile No:</label> 
                                        <input type="text" class="form-control" name="mobile" id="mobile"   ng-model = "Patient.mobile" ng-init="Patient.mobile ='<?php echo $patient->mobile;?>'"  value="" placeholder="mobile" required> 
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>Alt Mobile No.:</label> 
                                        <input type="text" class="form-control" name="alt_mobile" id="alt_mobile" ng-model = "Patient.alt_mobile" ng-init="Patient.alt_mobile ='<?php echo $patient->alt_mobile;?>'"  value="" placeholder="Alt Mobile" > 
                                    </div>
                                </div> 
                                <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group">   
                                        <label>Reports : </label>
                                        <input type="file" class="form-control" name="reports" id="reports"  ng-model = "Patient.reports"  value="" placeholder="reports" >
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group">   
                                        <label>Patient ID Number : </label>
                                      <input type="text" class="form-control" name="patient_uid" id="patient_uid"  ng-model = "Patient.patient_uid"  ng-init="Patient.patient_uid ='<?php echo $patient->patient_uid;?>'"  value="" placeholder="Patient ID Number ie. Passport Number etc." required> 
                                    </div>
                                </div> 
                                <div class="col-xs-12 col-sm-12 col-md-12"> 

                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group">   
                                        <label>Photo : </label>
                                        <input type="file" class="form-control" name="avatar" id="avatar"  ng-model = "Patient.avatar" value="" placeholder="Photo" >
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>Email:</label> 
                                        <input type="email" class="form-control" name="email" id="email"  ng-model = "Patient.email"  ng-init="Patient.email ='<?php echo $patient->email;?>'"  value="" placeholder="Email" required> 
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