<?php


//print_r($patientData);

//echo $patientData->first_name;
?>
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


            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4><i class="fa fa-hospital-o"></i> <span>Schedule Appointment</span></h4>                         
                        </div>
                        
                       
                        <div class="panel-body collapse in"> 
                            <?php if (isset($_SESSION['past_date_error'])) { ?>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="alert text-danger">
                                            <?php echo $_SESSION['past_date_error']; ?>
                                        </div>
                                    </div>
                                </div> 
                            <?php } ?>
                            <div class="row" >
                                 
                                <form action="" name="schedule" id="schedule" method="post" >
                                <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>Appointment date:</label>
                                        <div class="row form-group">
                                            <select name="day" id="day" class="" required=""  class="form-control" onchange="jsFunction()">
                                            <?php for ($i = 0; $i < 31; $i++) { ?>

                                                <?php if ($filter['d'] == $i || $_SESSION['pastdata']['day'] == $i ) { ?>
                                                    <option value="<?php echo $i; ?>" selected><?php echo $i; ?></option>
                                                <?php } else { ?>
                                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                <?php } ?>
                                            <?php } ?>
                                        </select>

                                        <?php $months = array('01' => 'January', '02' => 'February', '03' => 'March', '04' => 'April', '05' => 'May', '06' => 'June', '07' => 'July ', '08' => 'August', '09' => 'September', '10' => 'October', '11' => 'November', '12' => 'December'); ?>
                                        <select name="month" id="month" class="" required="" onchange="jsFunction()"  class="form-control">

                                            <?php foreach ($months as $key => $value) { ?>
                                                <?php if ($filter['m'] == $key || $_SESSION['pastdata']['month'] == $key) { ?>
                                                    <option value="<?php echo $key; ?>" selected><?php echo $value; ?></option>
                                                <?php } else { ?>
                                                    <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                <?php } ?>
                                            <?php } ?>
                                        </select>
                                        <?php  $years = array('2017','2018','2019','2020','2021','2022','2023','2024','2025','2026','2027','2028','2029','2030'); ?>
                                        <select name="year" id="year" class="" onchange="jsFunction()" required=""  class="form-control">
                                            <?php foreach ($years as $year)  { ?>
                                                <?php if ($filter['y'] == $year ||  $_SESSION['pastdata']['year'] == $year) { ?>
                                                    <option selected="selected" value="<?php echo $year; ?>"><?php echo $year; ?></option>
                                                <?php } else { ?>
                                                    <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                                                <?php } ?>
                                            <?php } ?> 
                                        </select>
                                        </div>
                                        
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>Slot:</label>
                                        <?php if ($slotData != FALSE) { ?>
                                            <select name="slot_time" id="slot_time"  class="form-control">
                                                <option value="">Select Slot</option>
                                                <?php foreach ($slotData as $key => $value) { ?>
                                                    <optgroup label="<?php echo $key; ?>">
                                                        <?php foreach ($value as $time) { ?>
                                                            <option value="<?php echo $time; ?>" <?php  if( $_SESSION['pastdata']['slot_time'] == $time){ echo 'selected';}   ?>><?php echo $time; ?></option>
                                                        <?php } ?>
                                                    </optgroup>

                                                <?php } ?>
                                            </select>

                                        <?php
                                        } else {
                                            echo '<p class="text-danger">Slot time not available. Please Select another date.</p>';
                                        }
                                        ?>

                                    </div>


                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>First Name</label>
                                        <input type="text" name="fname" class="form-control" id="fname" value="<?php echo $patientData[0]->first_name?$patientData[0]->first_name: $_SESSION['pastdata']['fname']; ?>" required="">
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>Last Name</label>
                                        <input type="text" name="lname" class="form-control" id="lname" value="<?php echo $patientData[0]->last_name?$patientData[0]->last_name: $_SESSION['pastdata']['lname']; ?>">
                                    </div>


                                </div>


                                <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>Mobile No.</label>
                                        <input type="text" name="mobile" class="form-control" id="mobile" value="<?php echo $patientData[0]->mobile?$patientData[0]->mobile:$_SESSION['pastdata']['mobile']; ?>"  required="">
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" id="email" value="<?php echo $patientData[0]->email?$patientData[0]->email:$_SESSION['pastdata']['email']; ?>"  required="">
                                    </div>

                                </div>


                                <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>City</label>
                                        <input type="text" name="city" class="form-control" id="city" value="<?php echo $patientData[0]->city?$patientData[0]->city:$_SESSION['pastdata']['city']; ?>"  required="">
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                                        <label>State</label>
                                        <input type="text" name="state" class="form-control" id="state" value="<?php echo $patientData[0]->state?$patientData[0]->state:$_SESSION['pastdata']['state']; ?>"  required="">
                                    </div>

                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <label>Country</label>
                                    <input type="text" name="country" id="country" class="form-control" value="<?php echo $patientData[0]->country?$patientData[0]->country:$_SESSION['pastdata']['country']; ?>"  required="" placeholder="Country Code">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mt20">  
                                    <input style="width: 20%" type="submit" class="btn btn-lg btn-success pull-right" value="Appointment"> 
                                </div>
                              </form>
                            </div>
                           
                        </div>
                    </div>
                </div>




            </div> <!-- container -->




        </div> <!--wrap -->
    </div> <!-- page-content -->


    <script>
        function  jsFunction() {

            var day = document.getElementById("day").value;
            var month = document.getElementById("month").value;
            var year = document.getElementById("year").value;
            var str = "?d=" + day + '-' + month + '-' + year;
            window.location = str;
        }

    </script>





