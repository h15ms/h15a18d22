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


            <div class="row" data-ng-controller="countryController">
                <div class="col-sm-12">
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4><i class="fa fa-hospital-o"></i> <span>Add Doctor</span></h4>                         
                        </div>
                        <div class="panel-body collapse in"> 
                            
                                <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>Name:</label> 
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <img src="<?php echo base_url(); ?>assets/img/doctor/<?php echo $doctor[0]->avatar; ?>" width="100" height="100"/><br/>
                                        <?php echo $doctor[0]->first_name . ' ' . $doctor[0]->last_name; ?>
                                    </div>
                                </div>  
                            <div class="col-xs-12 col-sm-12 col-md-12"> 
                                <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                    <label>Type:</label> 
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                    <?php echo $doctor[0]->clinic_hospital_type; ?>
                                </div>
                            </div> 

                              <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>Contact No:</label> 
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <?php echo $doctor[0]->mobile; ?>,  <?php echo $doctor[0]->phone_no; ?>
                                    </div>
                                </div>  
                             <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>Address:</label> 
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <?php echo $doctor[0]->address . ' ,' . $doctor[0]->city. ' ,' . $doctor[0]->state.' ,'.$doctor[0]->country .' ,'.  $doctor[0]->zipcode; ?>
                                    </div>
                                </div>  
                              
                             <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>Experience:</label> 
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <?php echo $doctor[0]->experience ; ?>
                                    </div>
                                </div>  
                             <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>Fees:</label> 
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <?php echo $doctor[0]->consultancy_fee; ?>
                                    </div>
                                </div>  
                               
                             <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>Time:</label> 
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <?php echo $doctor[0]->available_time?$doctor[0]->available_time:'NIL'; ?>
                                    </div>
                                </div> 
                            <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>Status:</label> 
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <?php   if($doctor[0]->status == 1){echo 'Active';}   ?>
                                    </div>
                                </div>
                        </div>

                    </div>
                </div>
            </div>




        </div> <!-- container -->




    </div> <!--wrap -->
</div> <!-- page-content -->





