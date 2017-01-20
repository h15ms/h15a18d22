<div style="height: 150px;">
</div>
<header id="overview2">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="s_inner" id="s_result">
          <h1>Customer Dashboard
          </h1>
        </div>
      </div>                          
    </div>      
  </div>
</header>
<!-- wrap start -->
<div class="wrap">
  <div class="wrapper">
    <div class="container">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <h3 style="font-weight:50;">Welcome back, <?php echo $_SESSION['logged_in']['user_name']; ?></h3>
      </div>

     <?php if (count($displayAll) == 0) { ?>

      <div class="col-xs-12 col-sm-12 col-md-12" style="margin:50px 0;">
        <div style="border:4px dashed #cdced1;text-align:center;padding-top:50px;padding-bottom:50px;">
          <table>
              <h3>No Applications!!</h3>
          </table>
          <a href="<?php echo URL;?>apply" class="btn btn-default"><i class="fa fa-hand-o-up"></i> Apply</a>
        </div>
      </div>
             
     <?php  } else {?>
      
      <div class="col-xs-12 col-sm-12 col-md-12" style="margin:50px 0;">
      <table class="" border="0" style="text-align: center;border:1px solid #ddd !important;">
      <tr>
        <th style="text-align: center;">Status</th>
        <th style="text-align: center;">MIC ID</th>
        <th style="text-align: center;">Embassy ID</th>
        <th style="text-align: center;">Visa ID</th>
        <th style="text-align: center;">Name</th>
        <th style="text-align: center;">Visa Type</th>
        <th style="text-align: center;">Apply Date</th>
        
      </tr>
          <tbody>


            <?php foreach($displayAll as $value)     { ?>
            <tr>
              <td>
              <?php
               if($value->status=="0"){
                echo "New Applicant";
               }elseif ($value->status=="1") {
                 echo "In Progress";
               }elseif ($value->status=="2") {
                 echo "Confirmed";
               }else {
                 echo "Rejected";
               }
               ?></td>
              <td><?php echo $value->app_id; ?></td>
              <td><?php if($value->embassy_id==""){echo "No Embassy ID";}else{echo $value->embassy_id;} ?></td>
              <td><?php if($value->visa_id==""){echo "No Visa ID";}else{echo $value->visa_id;} ?></td>
              <td><?php echo $value->given_name; ?></td>
              <td><?php echo $value->visa_type; ?></td>
              <td><?php echo $value->apply_date; ?></td>
            </tr>
             <?php   
            } 
            ?>
          </tbody>
      </table>
      </div>

     <?php } ?>

  </div> 
  <!-- container -->
  <div style="height: 150px;">
  </div>
</div>
</div>
