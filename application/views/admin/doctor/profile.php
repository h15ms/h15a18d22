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
         
            
            <style>
            
           .speciality-head, .doctor-head{
                border-bottom: 1px solid #e1e1e1;
                color: #4f5259;
                font-size: 24px;
                margin: 0 0 15px;
                padding-bottom: 5px;
            }
            
            .list_time {
                border-bottom: 1px solid #e0e0e0;
                color: gray;
                padding-bottom: 5px;
            }
            
            ul .time_slot{
                 list-style: outside none none;
                border: 1px solid #e0e0e0;
                padding: 20px;
                margin-bottom: 10px;
                margin-top: 0;
            }
            
             .time_slot li {
                 list-style-type: none;
             }
            
            
            </style>

            <div class="row" data-ng-controller="countryController">
                <div class="col-sm-12">
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4><i class="fa fa-hospital-o"></i> <span>Doctor Profile</span></h4>                         
                        </div>
                        <div class="panel-body collapse in"> 
                            
                                <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <div class="col-xs-4 col-sm-4 col-md-4 form-group"> 
                                       <img src="<?php echo base_url(); ?>assets/img/doctor/<?php echo $data[0]->avatar; ?>" width="240" height="289"  alt="Dr. <?php echo $data[0]->first_name . ' ' . $data[0]->last_name; ?>" title="Dr. <?php echo $data[0]->first_name . ' ' . $data[0]->last_name; ?>"/>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 form-group"> 
                                        <h3 class="doctor-head"><?php echo $data[0]->first_name . ' ' . $data[0]->last_name; ?></h3>
                                       <p><?php echo $data[0]->experience; ?>+ Years Of Experience</p> 
                                        <p><?php echo $data[0]->role_position; ?> - <?php echo $data[0]->hospital_name; ?>  </p> 
                                        <h2 class="speciality-head">
                                            <span>
                                                <a href="#" title="<?php echo $data[0]->specialization; ?>"><?php echo $data[0]->specialization; ?></a>
                                            </span>
                                        </h2>
                                    </div>
                                     <div class="col-xs-4 col-sm-4 col-md-4 form-group"> 
                                        <div class="">
                                            <div class="schdule">
                                                <h3 class=""> <span class="">+91 <?php echo $data[0]->mobile; ?> / <?php echo $data[0]->phone_no; ?></span>
                                                </h3>
                                            </div>
                                            
                                            <ul class="time_slot">
                                                <?php
                                                $slotData   = unserialize($data[0]->slot);
                                                foreach ($slotData['slot'] as $day => $value) {
                                                    $start_time = '';
                                                    $end_time = '';
                                                    $counter = 0;
                                                    foreach ($value as $lavel) {
                                                        foreach ($lavel as $key => $slotTime) {
                                                            
                                                            if($counter == 0 && $key == 0){
                                                                $start_time = $lavel[$key] ? $lavel[$key] : 'NIL';
                                                            }
                                                            
                                                            if ($lavel[$key + 1] == '') {
                                                                $end_time = $lavel[$key] ? $lavel[$key] : 'NIL';
                                                            }
                                                        }
                                                        $counter++;
                                                    }
                                                    
                                                    ?>

                                                    <li><span class=""><?php echo $day; ?></span><p class="list_time"><?php echo $start_time; ?> - <?php echo $end_time; ?></p> </li>

                                                        <?php
                                                        $start_time = '';
                                                        $end_time = '';
                                                         $counter = 0;
                                                    }
                                                    ?>
                                               
                                                <li>
                                                    <span class="req-app">
                                                        <i class="fa fa-calendar"></i><a href="javascript:void(0);">Request Appointment</a>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    <!---------SLOT-------------->
                                    <div class="row" id="" style="" data-ng-controller="appointmentController">
                                      {{date}}
                                      <p>{{ddMMyyyy}}</p>
                                      <p>{{ddMMMMyyyy}}</p>
                                      <p>{{HHmmss}}</p>
                                      <p>{{hhmmsstt}}</p>
                                      <u>dd/MM/yyyy format</u><br /><span ng-bind = "ddMMyyyy"></span>
                                      
                                      

                                        <form class="slot-viewer" method="GET" action="#">
                                            
                                            
                                            
                                            <input type="hidden" value="513456" name="doctor_id" >
                                            <div class="prev-day">
                                                <a class="button day-switcher prev disabled" data-id="0">PREV DAY</a>
                                                <div class="clear"></div>
                                            </div>
                                            
                                            
                                            
                                            
                                                    
                                        </form>

                                    
                                    
                                    <!--------End Here ---------->
                                    
                                    
                                    
                                    
                                    
                                </div>  
                            
                            <div class="col-xs-12 col-sm-12 col-md-12"> 
                                <div class="row"><h3 class="doctor-head">Qualifications</h3></div>
                                <div class="row">
                                    <p><?php echo $data[0]->qualification; ?></p>
                                </div>

                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12"> 
                                <div class="row"><h3 class="doctor-head">View Profile</h3></div>
                                <div class="row">
                                    <p><?php echo $data[0]->desc; ?></p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>




        </div> <!-- container -->




    </div> <!--wrap -->
</div> <!-- page-content -->





