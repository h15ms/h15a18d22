

<div id="page-content">
    <div id="wrap">
    
    
    
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url()?>admin">Dashboard</a></li>
                <li><a href="<?php echo base_url()?>admin/usercrm">Employees</a></li>
                <li class='active'><?php echo $headline; ?></li>
            </ol>

            <h1><?php echo $headline; ?></h1>
            <div class="options">
                <div class="btn-toolbar">
                	<a href="<?php echo base_url()?>admin/usercrm" class="btn btn-default hidden-xs"><i class="fa fa-files-o"></i> All Employees</a>
                </div>
            </div>
        </div>





        <div class="container">
           
           
           
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4><i class="fa fa-user"></i> <span>Add Employee</span></h4>                         
            </div>
          <div class="panel-body collapse in">                                  
            
            <p class="well">A password for the new employee is automatically generated and will be send to employee email.</p>  
              
            <form action="addNewUser" method="post">
            <input type="hidden" name="send" value="insertUser">                        
              
            <div class="col-xs-12 col-sm-12 col-md-6"> 
                <p><strong>User Level:</strong><br>
                <p><select class="form-control" name="user_level" required="">
                    <option value="">Select User Level</option>
                    <option value="1">Admin</option>
                    <option value="2">Agent/Dealer</option>
                    <option value="3">Customer/Patient</option>
                </select></p>
            </div>    
                
            <div class="col-xs-12 col-sm-12 col-md-6"> 
                <p><strong>First name*:</strong><br>
                <p><input type="text" class="form-control" name="firstname" value="" placeholder="First name" required></p>
            </div>
                
            <div class="col-xs-12 col-sm-12 col-md-6"> 
                <p><strong>Last name*:</strong><br>
                <p><input type="text" class="form-control" name="lastname" value="" placeholder="Last name" required></p>
            </div>
              
            <div class="col-xs-12 col-sm-12 col-md-6"> 
                <p><strong>Street:</strong><br>
                <p><input type="text" class="form-control" value="" name="street" placeholder="Street"></p>
            </div>                    
            
            <div class="col-xs-12 col-sm-12 col-md-6">                
                <p><strong>ZIP:</strong><br>
                <p><input type="text" class="form-control" name="zip" value="" placeholder="ZIP"></p>
            </div>
              
            <div class="col-xs-12 col-sm-12 col-md-6"> 
                <p><strong>City:</strong><br>
                <p><input type="text" class="form-control" name="city" value="" placeholder="City"></p>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6"> 
                <p><strong>State:</strong><br>
                <p><input type="text" class="form-control" name="state" value="" placeholder="State"></p>
            </div>
                
            <div class="col-xs-12 col-sm-12 col-md-6"> 
                <p><strong>Country:</strong><br>
                <p><input type="text" class="form-control" name="country" value="" placeholder="Country"></p>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6"> 
                <p><strong>Email*:</strong><br>
                <p><input type="text" class="form-control" name="email" value="" placeholder="Email" required></p>
            </div>    
                
            <div class="col-xs-12 col-sm-12 col-md-6"> 
                <p><strong>Phone*:</strong><br>
                <p><input type="text" class="form-control" name="phone" value="+93 " placeholder="Mobile" required></p>
            </div>
              
            <div class="col-xs-12 col-sm-12 col-md-6">                
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
