
<div id="page-content">
    <div id="wrap">
    
    
    
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="<?php base_url(); ?>">Dashboard</a></li>
                <li class='active'>Change Password</li>
            </ol>

            <h1><?php echo $headline; ?></h1>
            
        </div>





        <div class="container">
           
           
           
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4><i class="fa fa-user"></i> <span>Change Password</span></h4>                         
                        </div>
                      <div class="panel-body collapse in">                                  

                        <?php if(isset($result)){ ?>

                            <?php if($result == '1' || $result == '2' || $result == '3' ){ ?>
                                <div class="col-md-12">
                                    <div class="alert alert-warning">
                                        <i class="fa fa-exclamation-triangle"></i> 
                                            <?php 

                                            if($result == '1'){
                                                echo "New Password is not equals to Re-Entered Password";
                                            }elseif($result == '2'){
                                                echo "Old Password Does not Matches";
                                            }elseif($result == '3'){
                                                echo "SORRY Password not Set, Try Again!";
                                            }
                                             ?>
                                    </div>
                                </div>
                            <?php } ?>

                        <?php if($result == '4'){ ?>
                            <div class="col-md-12">
                                <div class="alert alert-success">
                                    <i class="fa fa-exclamation-triangle"></i> Your Password Successfully Updated !!
                                </div>
                            </div>
                        <?php }} ?>


                        <form action="" method="post">
                            
                            <div style="height: 40px;"></div>
                            
                            <input type="hidden" name="send" value="chngpass">                        
         
                            <div class="col-xs-12 col-sm-12 col-md-12"> 
                                <p><strong>Old Password:</strong><br>
                                <p><input type="password" class="form-control" name="oldpass" value="" placeholder="Old Password" required></p>
                            </div>
                                
                            <div class="col-xs-12 col-sm-12 col-md-12"> 
                                <p><strong>New Password:</strong><br>
                                <p><input type="password" class="form-control" name="newpass" value="" placeholder="New Password" required></p>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12"> 
                                <p><strong>Re-Enter Password:</strong><br>
                                <p><input type="password" class="form-control" name="repass" value="" placeholder="Re-Enter Password" required></p>
                            </div>
                                    
                            <div class="col-xs-12 col-sm-12 col-md-12">                
                                <p><input type="submit" class="btn btn-lg btn-success" value="Save"></p>
                            </div>
                        
                        </form>
                          
                      </div>
                      
                    </div>
                </div>
            </div>
           
           
           

        </div> <!-- container -->
        
        
        
        
    </div> <!--wrap -->
</div> <!-- page-content -->
