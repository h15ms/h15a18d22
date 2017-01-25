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
            
            
<!--            <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>-->

<!--https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js-->

<div ng-app="">
<p>Input something in the input box:</p>
<p>Name : <input type="text" ng-model="name" placeholder="Enter name here"></p>
<h1>Hello {{name}}</h1>

</div>
            
            
            
            
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4><i class="fa fa-hospital-o"></i> <span>Add Doctor</span></h4>                         
                        </div>
                        <div class="panel-body collapse in"> 
                            <form method="post" enctype="multipart/form-data" >
                                <input type="hidden" name="send" value="1">  
                                <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>First Name:</label> 
                                        <input type="text" class="form-control" name="first_name" id="first_name" value="" placeholder="First Name" required> 
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>Last Name:</label> 
                                        <input type="text" class="form-control" name="last_name" id="first_name" value="" placeholder="Last Name" required> 
                                    </div>
                                </div>   
                                <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>Email:</label> 
                                        <input type="text" class="form-control" name="email" id="email" value="" placeholder="Email" required> 
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>Phone No:</label> 
                                        <input type="text" class="form-control" name="phone_no" id="phone_no" value="" placeholder="Phone No" required> 
                                    </div>
                                </div> 

                                <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>Specialization:</label> 
                                        <input type="text" class="form-control" name="specialization" id="specialization" value="" placeholder="Specialization" required> 
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>Address:</label> 
                                        <input type="text" class="form-control" name="address" id="address" value="" placeholder="Address" required> 
                                    </div>
                                </div>   


                                <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group">   
                                        <label>Registration No : </label>
                                        <input type="text" class="form-control" name="registration_no" id="registration_no" value="" placeholder="Registration No" required>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group">   
                                        <label>Qualification : </label>
                                        <input type="text" class="form-control" name="qualification"  id="qualification" value="" placeholder="Qualification" required>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group">   
                                        <label>Experience : </label>
                                        <input type="text" class="form-control" name="experience" id="experience" value="" placeholder="Experience" required>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group">   
                                        <label>Consulting Fees : </label>
                                        <input type="int" class="form-control" name="consultancy_fee"  id="consultancy_fee" value="" placeholder="Fees" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12"> 

                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group">   
                                        <label>Photo : </label>
                                        <input type="file" class="form-control" name="avatar" id="avatar" value="" placeholder="Photo" required>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group">   
                                        <label>Specialization : <span style="font-size: 8px;">(Add comma ( , ) seprated value with )</span></label>
                                        <input type="text" class="form-control" name="specialization"  id="specialization" value="" placeholder="Specialization" required>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 form-group"> 
                                        <label>Type : </label><br/>
                                        <input name="clinic_hospital_type" type="radio" value="HOSPITAL" checked=""> Hospital
                                            <input name="clinic_hospital_type" type="radio" value="CLINIC" style="margin-left: 10%;"> Clinic
                                            <input name="clinic_hospital_type" type="radio" value="BOTH" style="margin-left: 10%;"> Both
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group">   
                                        <label>Country : </label>
                                        <select class="form-control" name="country"  id="country" required>
                                        <?php $countryCollection =  unserialize(COUNTRIES);
                                       foreach ($countryCollection as $Code => $country) { ?>
                                        <option value="<?php echo $Code; ?>"  <?php if($Code == 'IN'){ echo 'selected';}  ?>><?php echo $country; ?></option>
                                        <?php  } ?>
                                        </select>
                                    </div>
                                    
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group state"> 
                                         <label>State : </label>
                                        <select class="form-control" name="state" id="state" required>
                                            <?php foreach ($states as $state => $value) { ?>
                                                <option value="<?php echo $state; ?>" <?php if( $state == 'Haryana'){ echo 'selected';}?>><?php echo $state; ?></option>
                                            <?php } ?>
                                        </select>
<!--                                        <input type="text" class="form-control" name="state" id="state" value="" placeholder="State" required>-->
                                    </div>
                                </div>  

                                <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>City : </label> 
                                        <input type="text" class="form-control" name="city" id="city" value="" placeholder="City" required> 
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group">   
                                        <label>ZipCode : </label>
                                        <input type="text" class="form-control" name="zipcode"  id="zipcode" value="" placeholder="zipcode" required>
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


    
    
   
