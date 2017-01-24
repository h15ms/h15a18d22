<!-- Händler sperren -->






<div id="page-content">
    <div id="wrap">
    
    
    
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="index.php?c=apply">All Applies</a></li>
                <li class='active'><?php echo $headline;?> ID: <?php echo $hospital[0]->id;?></li>
            </ol>

            <h1><?php echo $headline;?></h1>
            <?php if($hospital[0]->name==""){}else{ ?>
            <div class="col-md-4 col-xs-12"><p style="margin: 6% 0 0 10%;"><small style="padding: 4px;" class="alert alert-info"><?php echo $hospital[0]->name; ?> </small></p></div>
            <?php } ?>
            <div class="options">
                <div class="btn-toolbar">                    
                    
<!--                    <a href="" class="btn btn-primary pull-right" data-toggle="modal" data-target="#userBlock"><i class="fa fa-retweet"></i> <span class="">Update Status</span></a>                    
                    <a href="mailto:<?php echo $hospital[0]->email;?>" class="btn btn-success pull-right"><i class="fa fa-envelope"></i> <span class="hidden-xs">Contact Applicant</span></a>                    
              -->  </div>
            </div>
        </div>





        <div class="container">
    
           
                  
                         
                                
                                       
                                              
<div class="row mt20">
    <div class="col-sm-12">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h5 style="color:#ffffff"><i class="fa fa-user"></i> <?php echo $hospital[0]->name;?></h5>                  
            </div>
          <div class="panel-body collapse in">                                  
               <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                  <img style="width:900px;height:180px;" src="<?php echo base_url();?>/assets/img/hospitals/<?php echo $hospital[0]->image;?>" alt="<?php echo $hospital[0]->name;?>" title="<?php echo $hospital[0]->name;?>">
              </div>
            
            <div class="row mt20">
            
            
           
              
              <div class="col-xs-12 col-sm-6 col-md-6 mt20">
                  <p><b>Name:</b> <?php echo $hospital[0]->name;?></p>
                  <p><b>Hospital Type:</b> <?php echo $hospital[0]->hospital_type;?></p>
                  <p><b>Status:</b>                   
                  <?php 
                    if($hospital[0]->status=="0"){ 
                        echo "New";
                    }elseif($hospital[0]->status=="1"){ 
                        echo "In Progress";
                    }elseif($hospital[0]->status=="2"){ 
                        echo "Confirmed";
                    }elseif($hospital[0]->status=="3"){ 
                      echo "Rejected";
                    }
                  ?>
                  
                  </p>
                  <p><b>Address:</b> <?php echo $hospital[0]->address;?></p>
                  <p><b>City:</b> <?php echo $hospital[0]->city;?></p>
                  <p><b>State:</b> 
                  <?php echo $hospital[0]->state
                  ?></p>
                  <p><b>Contact No:</b> 
                  <?php echo   $hospital[0]->phone_no
                          
                      
                  ?>
                  
                  
                  
                  </p>
              </div>
               
             
              
             
            
           
              
              <div class="col-xs-12 col-sm-6 col-md-6  mt20">
                  <p><b>Specialization </b>                   
                <?php $va= explode(',',$hospital[0]->specialization);?>
                                <ul style="list-style: none;">
                           <?php  foreach($va as $a):?>
                                <li> <?php echo $a; ?> </li>
                                
                                
                           <?php  endforeach;?>
                            </ul>
                  </p>
               
          
                  
                  
                  </p>
              </div>
               
             
              
              </div>
          </div>          
        </div>
    </div>
</div>                                                       
                                                            
                                                                   
                                                   
                                                                          
                                                                                        
                                                                                                      
   

     
     
<!--    
                      
                            
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h5 style="color:#ffffff"><i class="fa fa-user"></i> <?php //echo $hospital[0]->given_name;?></h5>                  
            </div>
          <div class="panel-body collapse in">                                  
            
            
            <div class="row">
            
            <form action="" method="post"> 
              <div class="col-xs-12 col-sm-12 col-md-12">
                  #Notice<br> 
                  <textarea class="form-control" name="notice" value="<?php //echo $hospital[0]->notice; ?>" rows="8"><?php //echo $hospital[0]->notice; ?></textarea>
                  <input type="hidden" name="appid" value="<?php //echo $hospital[0]->app_id;?>">
                  <input type="hidden" name="send" value="update_notice" />
                  <button type="submit" class="btn btn-success" id="save_notice">save notice</button>
              </div>
            </form>
               
             
              
              </div>
              
          </div>          
        </div>
    </div>
</div>                                        
     -->
     
      
            
           

        </div> <!-- container -->
        
        
        
        
    </div> <!--wrap -->
</div> <!-- page-content -->
