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

            <?php $exist_slots = $existSlot; // unserialize($doctor->slot);?>

            <div class="row" data-ng-controller="countryController">
                <div class="col-sm-12">
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4><i class="fa fa-hospital-o"></i> <span>Assign Slot :  <?php echo $doctor->first_name . ' ' . $doctor->last_name; ?> </span></h4>                         
                        </div>
                        <div class="panel-body collapse in"> 
                            <form method="post" enctype="multipart/form-data" action="" name="doctor" id="doctor">
                                <input type="hidden" name="send" value="1" ng-model = "formAdata.send">  
                                <input type="hidden" name="id" value="<?php echo $doctor->id; ?>"/>



                                <?php
                                $days = unserialize(DAYS);
                                foreach ($days as $code => $day) {
                                    ?> 
                                    <div class="col-xs-12 col-sm-12 col-md-12"> 
                                        <p class="panel-heading"> <?php echo $day; ?></p><br/>

                                        <?php $slots = unserialize(SLOT); ?>
    <?php foreach ($slots as $key => $slot) { ?>
                                            <div class="col-xs-3 col-sm-3 col-md-3 form-group <?php echo $key; ?>">
                                                <h3 style="text-align: center;"> <?php echo $key; ?></h3>
        <?php foreach ($slot as $time) { ?>
                                                    <div class="col-xs-4 col-sm-4 col-md-4" style="margin-bottom: 5px;" > 
                                                        <label style="vertical-align: middle; font-size:11px; cursor: pointer;" > 
                                                            <input type="checkbox" class="checkbox checkbox-inline" style="vertical-align: middle; font-size:11px; margin-top: -2px; margin-right: 5px;" name="<?php echo $code; ?>_<?php echo $key; ?>[]" value="<?php echo $time; ?>"    <?php if (in_array($time, $exist_slots['slot'][$code][$key])) {
                echo 'checked';
            } ?>/> <?php echo $time; ?> 
                                                        </label>
                                                    </div>

        <?php } ?>
                                            </div>
                                    <?php } ?> 

                                    </div>   
<?php } ?>


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





