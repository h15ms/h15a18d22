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


            <div class="row" data-ng-controller="appointmentController">
                <div class="col-sm-12">
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4><i class="fa fa-hospital-o"></i> <span>Add Doctor</span></h4>                         
                        </div>
                        <div class="panel-body collapse in"> 
                            
                            
                            <div class="col-xs-12 col-sm-12 col-md-12"><h3 class="head"><span>Find Doctor</span></h3></div>
                            <div class="col-xs-12 col-sm-12 col-md-12"> 
                               
                                <div class="col-xs-4 col-sm-4 col-md-4 form-group"   >
                                   <select class="form-control" name="hospital"  id="hospital" ng-init="hospital = ''"  ng-model="hospital"  data-ng-change="GetSpeciality()">
                                            <option value="">Select Hospital</option>
                                            <option ng-repeat="hospital in hospitals" value="{{hospital.id}}">{{hospital.name}}</option>
                                        </select> 
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 form-group" ng-bind-html="speciality" >
                                    <select class="form-control" name="speciality" id="speciality" ng-model="speciality">
                                        <option value="">Select Speciality</option>
                                        <option value="1">Aesthetic and Reconstructive Surgery</option>
                                        <option value="1">Aesthetic and Reconstructive Surgery</option>
                                        <option value="7">Dental Care</option>
                                        <option value="7">Dental Care</option>
                                    </select>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 form-group">
                                    <button type="button" onclick="return doctorSearch();" class="btn btn-default hidden-xs" ng-click="find()">
                                        <i class="fa fa-search"></i> Search Doctor
                                    </button>
                                </div>
                                
                            </div> 
                            <hr/>
                            
                           <!-----Listing Start here ----->
                           
                           
                                <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <div class="col-xs-4 col-sm-4 col-md-4 form-group"  ng-repeat="doctor in doctors"> 
                                       <img ng-if="doctor.avatar !=''"  src="<?php echo base_url(); ?>assets/img/doctor/{{doctor.avatar}}"  width="100" height="100">
                                       <img ng-if="doctor.avatar ==''" src="<?php echo base_url(); ?>assets/img/doctor/avatar1.jpg"  width="100" height="100">
                                        <h4><span>{{doctor.first_name}} {{doctor.last_name}}</span></h4>
                                        <p style=""> {{doctor.specialization}}</p>
                                        <p style="">Experience : {{doctor.experience}} Years</p>
                                        <p style="">{{doctor.hospital_name}}</p>
                                        <div class="row">
                                            <div class="col-xs-8 col-sm-9 col-md-8">
                                                <p class="rd_more margintop10"><a href="<?php echo base_url(); ?>/admin/doctor/profile/{{doctor.id}}"><i class="fa fa-eye"></i> View Profile</a></p>
                                            </div>
                                            <div class="col-xs-4 col-sm-3 col-md-4">
                                                <p class="rd_more margintop10"><a><i class="fa fa-calendar"></i></a></p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div> 
                            
                            
                            <!----End Here ---->
                            
                        </div>

                    </div>
                </div>
            </div>




        </div> <!-- container -->




    </div> <!--wrap -->
</div> <!-- page-content -->





