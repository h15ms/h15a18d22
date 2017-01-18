

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
              
            <form method="post">
            <input type="hidden" name="send" value="1">                        
              
            <div class="col-xs-12 col-sm-12 col-md-12"> 
                <p><strong>Position:</strong><br>
                <p><input type="text" class="form-control" name="position" value="" placeholder="Position" required></p>
            </div>    
                
            <div class="col-xs-12 col-sm-12 col-md-12"> 
                <p><strong>First name:</strong><br>
                <p><input type="text" class="form-control" name="vorname" value="" placeholder="First name" required></p>
            </div>
                
            <div class="col-xs-12 col-sm-12 col-md-12"> 
                <p><strong>Last name:</strong><br>
                <p><input type="text" class="form-control" name="nachname" value="" placeholder="Last name" required></p>
            </div>
              
            <div class="col-xs-12 col-sm-12 col-md-12"> 
                <p><strong>Street:</strong><br>
                <p><input type="text" class="form-control" value="" name="strasse" placeholder="Street" required></p>
            </div>                    
            
            <div class="col-xs-12 col-sm-12 col-md-12">                
                <p><strong>ZIP:</strong><br>
                <p><input type="text" class="form-control" name="plz" value="" placeholder="ZIP" required></p>
            </div>
              
            <div class="col-xs-12 col-sm-12 col-md-12"> 
                <p><strong>City:</strong><br>
                <p><input type="text" class="form-control" name="stadt" value="" placeholder="City" required></p>
            </div>
                
            <div class="col-xs-12 col-sm-12 col-md-12"> 
                <p><strong>Email:</strong><br>
                <p><input type="text" class="form-control" name="email" value="" placeholder="Email" required></p>
            </div>
                
            <div class="col-xs-12 col-sm-12 col-md-12"> 
                <p><strong>Phone:</strong><br>
                <p><input type="text" class="form-control" name="telefon" value="+49" placeholder="Phone" required></p>
            </div>
                
            <div class="col-xs-12 col-sm-12 col-md-12"> 
                <p><strong>Mobil:</strong><br>
                <p><input type="text" class="form-control" name="mobil" value="+49" placeholder="Mobil" required></p>
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
