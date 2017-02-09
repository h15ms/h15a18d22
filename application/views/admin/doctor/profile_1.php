<?php  $schedules =  $slotData['slot']; ?>
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

            <div class="row" data-ng-controller="appointmentController">
                
                
                
                
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
                                                //$slotData   = $existSlot;// unserialize($data[0]->slot);
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
                                                    <span class="req-app" >
                                                        <i class="fa fa-calendar"></i><a href="javascript:void(0);" >Request Appointment</a>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <?php
                                    
                                    
                                    echo '<pre>';
                                         prin_r($schedules);
                                    echo '</pre>';
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    ?>
                                    
                                    
                                    
                                    <!---   ng-click="Getappoinment();"   --->
                                    <!------------Deepak Appoinment-------------->
<!--                                    {{timeTableDoc}}-->
                                    <div class="mi_filterresult col-md-9 col-sm-9 col-xs-12">
                                        <div class="row" >
                                            <div class="mi_doctorbook col-md-12">
                                                <div class="mi_doctortimeslot">
                                                    <div class="mi_date mi-lt-grey pt10 pb10">
                                                       
                                                        <ul class="nav nav-tabs" role="tablist">
                                                            
                                                            
                                                            <li role="presentation" class="active" ng-repeat="month in timeTableDoc.m">
                                                                <a  href="#date1" aria-controls="date1" role="tab" data-toggle="tab">
                                                                    <strong>7</strong><span>{{month}}</br>Tuesday</span>
                                                                </a> 
                                                            </li>
                                                            
                                                            
                                                            
                                                            
                                                            <li role="presentation" ><a href="#date2" aria-controls="date2"  role="tab" data-toggle="tab"><strong>8</strong><span>Feb</br> Wednesday </span></a></li>
                                                            <li role="presentation" ><a href="#date3" aria-controls="date3"  role="tab" data-toggle="tab"> <strong>9</strong><span>Feb</br>Tursday</span></a> </li>
                                                            <li role="presentation" ><a href="#date4" aria-controls="date4"  role="tab" data-toggle="tab"><strong>10</strong><span>Feb</br>  Friday</span></a></li>
                                                            <li role="presentation" ><a href="#date5" aria-controls="date5"  role="tab" data-toggle="tab"><strong>11</strong><span>Feb</br>Saturday</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="mi_doctortimes tab-content">
                                                        <div class="mi_doctortimeslotmain tab-pane active" role="tabpanel"  id="date1">

                                                            <div class="mi_doctortimeslotmainbox">
                                                                
                                                               
                                                                <div class="mi_timetab"><span class="mi_morningicon"></span> Morning</div>
                                                                <div class="mi_tabcontentime">10:15 AM</div>
                                                                <div class="mi_tabcontentime">10:30 AM</div>
                                                                <div class="mi_tabcontentime">10:45 AM</div>
                                                                <div class="mi_tabcontentime">11:00 AM</div>
                                                                <div class="mi_tabcontentime">11:15 AM</div>
                                                                <div class="mi_tabcontentime">11:30 AM</div>
                                                                <div class="mi_tabcontentime">11:45 AM</div>
                                                            </div>
                                                            <div class="mi_doctortimeslotmainbox">
                                                                <div class="mi_timetab"><span class="mi_afternoonicon"></span> Afternoon</div>
                                                                <div class="mi_tabcontentime">12:00 PM</div>
                                                                <div class="mi_tabcontentime">12:15 PM</div>
                                                                <div class="mi_tabcontentime">12:30 AM</div>
                                                                <div class="mi_tabcontentime">12:45 AM</div>
                                                                <div class="mi_tabcontentime">01:00 AM</div>
                                                                <div class="mi_tabcontentime">01:15 AM</div>
                                                                <div class="mi_tabcontentime">01:30 AM</div>
                                                                <div class="mi_tabcontentime">01:45 AM</div>
                                                            </div>
                                                            <div class="mi_doctortimeslotmainbox">
                                                                <div class="mi_timetab"><span class="mi_eveningicon"></span> Evening</div>
                                                                <div class="mi_tabcontentime">05:00 PM</div>
                                                                <div class="mi_tabcontentime">05:15 PM</div>
                                                                <div class="mi_tabcontentime">05:30 PM</div>
                                                                <div class="mi_tabcontentime">05:45 PM</div>
                                                                <div class="mi_tabcontentime">06:00 PM</div>
                                                                <div class="mi_tabcontentime">06:15 PM</div>
                                                                <div class="mi_tabcontentime">06:30 PM</div>
                                                                <div class="mi_tabcontentime">06:45 PM</div>
                                                                <div class="mi_tabcontentime">07:00 PM</div>
                                                                <div class="mi_tabcontentime">07:15 PM</div>
                                                                <div class="mi_tabcontentime">07:30 PM</div>
                                                                <div class="mi_tabcontentime">07:45 PM</div>
                                                            </div>
                                                        </div>
                                                        <div class="mi_doctortimeslotmain tab-pane" role="tabpanel"  id="date2">

                                                            <div class="mi_doctortimeslotmainbox">
                                                                <div class="mi_timetab"><span class="mi_morningicon"></span> Morning1</div>
                                                                <div class="mi_tabcontentime">10:15 AM</div>
                                                                <div class="mi_tabcontentime">10:30 AM</div>
                                                                <div class="mi_tabcontentime">10:45 AM</div>
                                                                <div class="mi_tabcontentime">11:00 AM</div>
                                                                <div class="mi_tabcontentime">11:15 AM</div>
                                                                <div class="mi_tabcontentime">11:30 AM</div>
                                                                <div class="mi_tabcontentime">11:45 AM</div>
                                                            </div>
                                                            <div class="mi_doctortimeslotmainbox">
                                                                <div class="mi_timetab"><span class="mi_afternoonicon"></span> Afternoon</div>
                                                                <div class="mi_tabcontentime">12:00 PM</div>
                                                                <div class="mi_tabcontentime">12:15 PM</div>
                                                                <div class="mi_tabcontentime">12:30 AM</div>
                                                                <div class="mi_tabcontentime">12:45 AM</div>
                                                                <div class="mi_tabcontentime">01:00 AM</div>
                                                                <div class="mi_tabcontentime">01:15 AM</div>
                                                                <div class="mi_tabcontentime">01:30 AM</div>
                                                                <div class="mi_tabcontentime">01:45 AM</div>
                                                            </div>
                                                            <div class="mi_doctortimeslotmainbox">
                                                                <div class="mi_timetab"><span class="mi_eveningicon"></span> Evening</div>
                                                                <div class="mi_tabcontentime">05:00 PM</div>
                                                                <div class="mi_tabcontentime">05:15 PM</div>
                                                                <div class="mi_tabcontentime">05:30 PM</div>
                                                                <div class="mi_tabcontentime">05:45 PM</div>
                                                                <div class="mi_tabcontentime">06:00 PM</div>
                                                                <div class="mi_tabcontentime">06:15 PM</div>
                                                                <div class="mi_tabcontentime">06:30 PM</div>
                                                                <div class="mi_tabcontentime">06:45 PM</div>
                                                                <div class="mi_tabcontentime">07:00 PM</div>
                                                                <div class="mi_tabcontentime">07:15 PM</div>
                                                                <div class="mi_tabcontentime">07:30 PM</div>
                                                                <div class="mi_tabcontentime">07:45 PM</div>
                                                            </div>
                                                        </div>
                                                        <div class="mi_doctortimeslotmain tab-pane" role="tabpanel"  id="date3">

                                                            <div class="mi_doctortimeslotmainbox">
                                                                <div class="mi_timetab"><span class="mi_morningicon"></span> Morning</div>
                                                                <div class="mi_tabcontentime">10:15 AM</div>
                                                                <div class="mi_tabcontentime">10:30 AM</div>
                                                                <div class="mi_tabcontentime">10:45 AM</div>
                                                                <div class="mi_tabcontentime">11:00 AM</div>
                                                                <div class="mi_tabcontentime">11:15 AM</div>
                                                                <div class="mi_tabcontentime">11:30 AM</div>
                                                                <div class="mi_tabcontentime">11:45 AM</div>
                                                            </div>
                                                            <div class="mi_doctortimeslotmainbox">
                                                                <div class="mi_timetab"><span class="mi_afternoonicon"></span> Afternoon</div>
                                                                <div class="mi_tabcontentime">12:00 PM</div>
                                                                <div class="mi_tabcontentime">12:15 PM</div>
                                                                <div class="mi_tabcontentime">12:30 AM</div>
                                                                <div class="mi_tabcontentime">12:45 AM</div>
                                                                <div class="mi_tabcontentime">01:00 AM</div>
                                                                <div class="mi_tabcontentime">01:15 AM</div>
                                                                <div class="mi_tabcontentime">01:30 AM</div>
                                                                <div class="mi_tabcontentime">01:45 AM</div>
                                                            </div>
                                                            <div class="mi_doctortimeslotmainbox">
                                                                <div class="mi_timetab"><span class="mi_eveningicon"></span> Evening</div>
                                                                <div class="mi_tabcontentime">05:00 PM</div>
                                                                <div class="mi_tabcontentime">05:15 PM</div>
                                                                <div class="mi_tabcontentime">05:30 PM</div>
                                                                <div class="mi_tabcontentime">05:45 PM</div>
                                                                <div class="mi_tabcontentime">06:00 PM</div>
                                                                <div class="mi_tabcontentime">06:15 PM</div>
                                                                <div class="mi_tabcontentime">06:30 PM</div>
                                                                <div class="mi_tabcontentime">06:45 PM</div>
                                                                <div class="mi_tabcontentime">07:00 PM</div>
                                                                <div class="mi_tabcontentime">07:15 PM</div>
                                                                <div class="mi_tabcontentime">07:30 PM</div>
                                                                <div class="mi_tabcontentime">07:45 PM</div>
                                                            </div>
                                                        </div>
                                                        <div class="mi_doctortimeslotmain tab-pane" role="tabpanel"  id="date4">

                                                            <div class="mi_doctortimeslotmainbox">
                                                                <div class="mi_timetab"><span class="mi_morningicon"></span> Morning</div>
                                                                <div class="mi_tabcontentime">10:15 AM</div>
                                                                <div class="mi_tabcontentime">10:30 AM</div>
                                                                <div class="mi_tabcontentime">10:45 AM</div>
                                                                <div class="mi_tabcontentime">11:00 AM</div>
                                                                <div class="mi_tabcontentime">11:15 AM</div>
                                                                <div class="mi_tabcontentime">11:30 AM</div>
                                                                <div class="mi_tabcontentime">11:45 AM</div>
                                                            </div>
                                                            <div class="mi_doctortimeslotmainbox">
                                                                <div class="mi_timetab"><span class="mi_afternoonicon"></span> Afternoon</div>
                                                                <div class="mi_tabcontentime">12:00 PM</div>
                                                                <div class="mi_tabcontentime">12:15 PM</div>
                                                                <div class="mi_tabcontentime">12:30 AM</div>
                                                                <div class="mi_tabcontentime">12:45 AM</div>
                                                                <div class="mi_tabcontentime">01:00 AM</div>
                                                                <div class="mi_tabcontentime">01:15 AM</div>
                                                                <div class="mi_tabcontentime">01:30 AM</div>
                                                                <div class="mi_tabcontentime">01:45 AM</div>
                                                            </div>
                                                            <div class="mi_doctortimeslotmainbox">
                                                                <div class="mi_timetab"><span class="mi_eveningicon"></span> Evening</div>
                                                                <div class="mi_tabcontentime">05:00 PM</div>
                                                                <div class="mi_tabcontentime">05:15 PM</div>
                                                                <div class="mi_tabcontentime">05:30 PM</div>
                                                                <div class="mi_tabcontentime">05:45 PM</div>
                                                                <div class="mi_tabcontentime">06:00 PM</div>
                                                                <div class="mi_tabcontentime">06:15 PM</div>
                                                                <div class="mi_tabcontentime">06:30 PM</div>
                                                                <div class="mi_tabcontentime">06:45 PM</div>
                                                                <div class="mi_tabcontentime">07:00 PM</div>
                                                                <div class="mi_tabcontentime">07:15 PM</div>
                                                                <div class="mi_tabcontentime">07:30 PM</div>
                                                                <div class="mi_tabcontentime">07:45 PM</div>
                                                            </div>
                                                        </div>
                                                         <div class="mi_doctortimeslotmain tab-pane" role="tabpanel"  id="date5">

                                                            <div class="mi_doctortimeslotmainbox">
                                                                <div class="mi_timetab"><span class="mi_morningicon"></span> Morning</div>
                                                                <div class="mi_tabcontentime">10:15 AM dd</div>
                                                                <div class="mi_tabcontentime">10:30 AM</div>
                                                                <div class="mi_tabcontentime">10:45 AM</div>
                                                                <div class="mi_tabcontentime">11:00 AM</div>
                                                                <div class="mi_tabcontentime">11:15 AM</div>
                                                                <div class="mi_tabcontentime">11:30 AM</div>
                                                                <div class="mi_tabcontentime">11:45 AM</div>
                                                            </div>
                                                            <div class="mi_doctortimeslotmainbox">
                                                                <div class="mi_timetab"><span class="mi_afternoonicon"></span> Afternoon</div>
                                                                <div class="mi_tabcontentime">12:00 PM</div>
                                                                <div class="mi_tabcontentime">12:15 PM</div>
                                                                <div class="mi_tabcontentime">12:30 AM</div>
                                                                <div class="mi_tabcontentime">12:45 AM</div>
                                                                <div class="mi_tabcontentime">01:00 AM</div>
                                                                <div class="mi_tabcontentime">01:15 AM</div>
                                                                <div class="mi_tabcontentime">01:30 AM</div>
                                                                <div class="mi_tabcontentime">01:45 AM</div>
                                                            </div>
                                                            <div class="mi_doctortimeslotmainbox">
                                                                <div class="mi_timetab"><span class="mi_eveningicon"></span> Evening</div>
                                                                <div class="mi_tabcontentime">05:00 PM</div>
                                                                <div class="mi_tabcontentime">05:15 PM</div>
                                                                <div class="mi_tabcontentime">05:30 PM</div>
                                                                <div class="mi_tabcontentime">05:45 PM</div>
                                                                <div class="mi_tabcontentime">06:00 PM</div>
                                                                <div class="mi_tabcontentime">06:15 PM</div>
                                                                <div class="mi_tabcontentime">06:30 PM</div>
                                                                <div class="mi_tabcontentime">06:45 PM</div>
                                                                <div class="mi_tabcontentime">07:00 PM</div>
                                                                <div class="mi_tabcontentime">07:15 PM</div>
                                                                <div class="mi_tabcontentime">07:30 PM</div>
                                                                <div class="mi_tabcontentime">07:45 PM</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mi_pagination">
                                                        <div class="mi_prev"><a href="javascript:void(0)"></a></div>
                                                        <div class="mi_nxt"><a href="javascript:void(0)"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>




                                        <!------- End Here -------->




                                        <!---------SLOT-------------->
                                        
                                        <br/> <br/> <br/> <br/> <br/>
                                        
                                        <div class="row" id="" style="" >


                                            <div class="col-xs-2 col-sm-2 col-md-2" ng-repeat="slotTime in timeTableDoc">
                                                <p>{{slotTime.slot}}</p>
                                            </div>


                                            <div ng-bind-html="timeTable"></div>

                                            <form class="slot-viewer" method="GET" action="#">
                                                <div ng-bind-html="apt"></div>


                                                <div class="slots-group" style="display: table;">

                                                    <input type="button" value="Next Day"  ng-show = "next" ng-click="ShowHide()" />
                                                    <br />
                                                    <br />
                                                    <input type="hidden" ng-model="appointmentTime" name="appointmentTime" id="appointmentTime" value="<?php echo $data[0]->id; ?>" />
                                                    <div ng-show = "IsVisible1"><label id="IsVisible1">4:30:PM</label></div>
                                                    <div ng-show = "IsVisible2"><label id="IsVisible2">5:30:PM</label></div>
                                                    <div ng-show = "IsVisible3"><label id="IsVisible3">6:30:PM</label></div>
                                                    <div ng-show = "IsVisible4"><label id="IsVisible4">7:30:PM</label></div>
                                                    <div ng-show = "IsVisible5"><label id="IsVisible5">8:30:PM</label></div>
                                                    <div ng-show = "IsVisible6"><label id="IsVisible6">9:30:PM</label></div>
                                                    <div ng-show = "IsVisible7"><label id="IsVisible7">10:00:PM</label></div>
                                                    <div ng-show = "IsVisible8"><label id="IsVisible8">11:30:PM</label></div>
                                                    <div ng-show = "IsVisible9"><label id="IsVisible9">12:00:PM</label></div>

                                                    <input type="button" value="Privious Day" ng-show = "privious" ng-click="ShowHideMinuse()" />


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





