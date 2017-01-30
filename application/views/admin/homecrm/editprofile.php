

<div id="page-content">
    <div id="wrap">
    
    
    
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url()?>admin">Dashboard</a></li>
                <li><a href="<?php echo base_url()?>admin/usercrm">Edit User</a></li>
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
                <h4><i class="fa fa-user"></i> <span><?php echo $data->firstname." ".$data->lastname ?></span></h4>                         
            </div>
          <div class="panel-body collapse in">                                  
              
            <form action="editProfileAction" method="post">
            <input type="hidden" name="id" value="<?php echo $data->id; ?>">                          
                
            <div class="col-xs-12 col-sm-12 col-md-12"> 
                <p><strong>First name:</strong><br>
                <p><input type="text" class="form-control" name="firstname" value="<?php echo $data->firstname; ?>" placeholder="First name" required></p>
            </div>
                
            <div class="col-xs-12 col-sm-12 col-md-12"> 
                <p><strong>Last name:</strong><br>
                <p><input type="text" class="form-control" name="lastname" value="<?php echo $data->lastname; ?>" placeholder="Last name" required></p>
            </div>
              
            <div class="col-xs-12 col-sm-12 col-md-12"> 
                <p><strong>Street:</strong><br>
                <p><input type="text" class="form-control" name="street" value="<?php echo $data->street; ?>" placeholder="Street" ></p>
            </div>                    
            
            <div class="col-xs-12 col-sm-12 col-md-12">                
                <p><strong>ZIP:</strong><br>
                <p><input type="text" class="form-control" name="zip" value="<?php echo $data->zip; ?>" placeholder="ZIP" ></p>
            </div>
              
            <div class="col-xs-12 col-sm-12 col-md-12"> 
                <p><strong>City:</strong><br>
                <p><input type="text" class="form-control" name="city" value="<?php echo $data->city; ?>" placeholder="City" ></p>
            </div>
                
            <div class="col-xs-12 col-sm-12 col-md-12"> 
                <p><strong>Email:</strong><br>
                <p><input type="text" class="form-control" name="email" value="<?php echo $data->email; ?>" placeholder="Email" required></p>
            </div>
                
            <div class="col-xs-12 col-sm-12 col-md-12"> 
                <p><strong>Phone:</strong><br>
                <p><input type="text" class="form-control" name="phone" value="<?php echo $data->phone; ?>" placeholder="Phone" required></p>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12"> 
                <p><strong>Avatar:</strong><br>
                <p><input type="file" class="form-control" name="avatar" value="<?php echo $data->avatar; ?>" placeholder="Avatar" ></p>
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
