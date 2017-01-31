
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title text-danger" id="myModalLabel"><i class="fa fa-trash"></i> Delete Employee</h4>
      </div>
      <div class="modal-body">
        <h4>Do you really want to delete this employee?</h4>
      </div>
      <div class="modal-footer">
          <form action="../delUser" method="post">
          <input type="hidden" name="send" value="del">
          <input type="hidden" name="id" value="<?php echo $this->uri->segment('4');?>">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>        
          <button type="submit" class="btn btn-danger">Delete Employee</button>
          </form>
      </div>
    </div>
  </div>
</div>


<div id="page-content">
    <div id="wrap">

        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url()?>/admin">Dashboard</a></li>
                
                <?php if($user[0]->user_type=="1"){ ?> 
                <li><a href="<?php echo base_url()?>/admin/usercrm">Employees</a></li>
                <?php }else{ ?>
                <li><a>Employees</a></li>
                <?php } ?>
                <li class='active'>Edit Employee</li>
            </ol>

            <h1>Edit Employee</h1>
             <?php if($user[0]->user_type=="1"){ ?> 
            <div class="options">
                <div class="btn-toolbar">                	
                    <div class="btn-group">
                        <select id="goto" onchange="goto()" class="form-control">
                            <option value="0">Choose Employee</option>
                            <?php foreach($user as $plink){ ?>  
                            <option value="<?php echo base_url()."admin/usercrm/user/".$plink->id; ?>"><?php echo $plink->firstname; ?> <?php echo $plink->lastname; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <a href='<?php echo base_url()?>admin/usercrm' class="btn btn-default"><i class="fa fa-files-o"></i> <span class="hidden-xs">All Employees</span></a>
                    <a href='<?php echo base_url()?>admin/usercrm/adduser' class="btn btn-success"><i class="fa fa-plus-circle"></i> <span class="hidden-xs">Add Employee</span></a>
                    <a href='#' class="btn btn-danger" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash"></i> <span class="hidden-xs">Delete Employee</span></a>
                </div>
            </div>
            <?php } ?>
        </div>


        <div class="container">
           
           
           
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4><i class="fa fa-file-code-o"></i> <span>Edit Employee</span></h4>
                <div class="pull-right">Date: <?php echo date('d-m-Y',$page['0']->regtime); ?></div>              
            </div>
          <div class="panel-body collapse in">                                
            
            <form action="userUpdate" method="post" >
            <input type="hidden" name="send" value="userupdate"> 
            <input type="hidden" name="id" value="<?php echo $page['0']->id; ?>"> 
           
                
            <div class="col-xs-12 col-sm-12 col-md-6"> 
                <p><strong>User Level:</strong><br>
                
                <p><select class="form-control" name="user_level" required="">
                    <option value="">Select User Level</option>
                    <option <?php if($page['0']->user_type == '1')echo "selected"; ?> value="1">Admin</option>
                    <option <?php if($page['0']->user_type == '2')echo "selected"; ?> value="2">Agent/Dealer</option>
                    <option <?php if($page['0']->user_type == '3')echo "selected"; ?> value="3">Customer/Patient</option>
                </select></p>
            </div>    
                
            <div class="col-xs-12 col-sm-12 col-md-6"> 
                <p><strong>First name:</strong><br>
                <p><input type="text" class="form-control" name="firstname" value="<?php echo $page['0']->firstname; ?>" placeholder="First name"></p>
            </div>
                
            <div class="col-xs-12 col-sm-12 col-md-6"> 
                <p><strong>Last name:</strong><br>
                <p><input type="text" class="form-control" name="lastname" value="<?php echo $page['0']->lastname; ?>" placeholder="Last name"></p>
            </div>
              
            <div class="col-xs-12 col-sm-12 col-md-6"> 
                <p><strong>Street:</strong><br>
                <p><input type="text" class="form-control" name="street" value="<?php echo $page['0']->street; ?>" placeholder="Street"></p>
            </div>                    
            
            <div class="col-xs-12 col-sm-12 col-md-6">                
                <p><strong>ZIP:</strong><br>
                <p><input type="text" class="form-control" name="zip" value="<?php echo $page['0']->zip; ?>" placeholder="ZIP"></p>
            </div>
              
            <div class="col-xs-12 col-sm-12 col-md-6"> 
                <p><strong>City:</strong><br>
                <p><input type="text" class="form-control" name="city" value="<?php echo $page['0']->city; ?>" placeholder="City"></p>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6"> 
                <p><strong>State:</strong><br>
                <p><input type="text" class="form-control" name="State" value="<?php echo $page['0']->state; ?>" placeholder="State"></p>
            </div>
                
            <div class="col-xs-12 col-sm-12 col-md-6"> 
                <p><strong>Country:</strong><br>
                <p><input type="text" class="form-control" name="country" value="<?php echo $page['0']->country; ?>" placeholder="Mobile"></p>
            </div>
                
            <div class="col-xs-12 col-sm-12 col-md-6"> 
                <p><strong>Email:</strong><br>
                <p><input type="text" class="form-control" name="email" value="<?php echo $page['0']->email; ?>" placeholder="Email"></p>
            </div>
                
            <div class="col-xs-12 col-sm-12 col-md-6"> 
                <p><strong>Phone:</strong><br>
                <p><input type="text" class="form-control" name="phone" value="<?php echo $page['0']->phone; ?>" placeholder="Phone"></p>
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
