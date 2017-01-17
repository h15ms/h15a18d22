
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
          <form method="post">
          <input type="hidden" name="send" value="del">
          <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
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
                <li><a href="index.php">Dashboard</a></li>
                <?php if($user['position']=="CEO"){ ?> 
                <li><a href="index.php?c=user">Employees</a></li>
                <?php }else{ ?>
                <li><a>Employees</a></li>
                <?php } ?>
                <li class='active'>Edit Employee</li>
            </ol>

            <h1>Edit Employee</h1>
             <?php if($user['position']=="CEO"){ ?> 
            <div class="options">
                <div class="btn-toolbar">                	
                    <div class="btn-group">
                        <select id="goto" onchange="goto()" class="form-control">
                            <option value="0">Choose Employee</option>
                            <?php foreach($users as $plink){ ?>                            
                            <option value="index.php?c=user&a=user&id=<?php echo $plink['id']; ?>"><?php echo $plink['vorname']; ?> <?php echo $plink['nachname']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <a href='index.php?c=user' class="btn btn-default"><i class="fa fa-files-o"></i> <span class="hidden-xs">All Employees</span></a>
                    <a href='index.php?c=user&a=adduser' class="btn btn-success"><i class="fa fa-plus-circle"></i> <span class="hidden-xs">Add Employee</span></a>
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
                <div class="pull-right">Datum: <?php echo $page['datum']; ?></div>              
            </div>
          <div class="panel-body collapse in">                                  
            
            <form method="post">
            <input type="hidden" name="send" value="1"> 
            <input type="hidden" name="id" value="<?php echo $page['id']; ?>"> 
           
                
            <div class="col-xs-12 col-sm-12 col-md-12"> 
                <p><strong>Position:</strong><br>
                <p><input type="text" class="form-control" name="position" value="<?php echo $page['position']; ?>" placeholder="Position im Unternehmen"></p>
            </div>    
                
            <div class="col-xs-12 col-sm-12 col-md-12"> 
                <p><strong>First name:</strong><br>
                <p><input type="text" class="form-control" name="vorname" value="<?php echo $page['vorname']; ?>" placeholder="First name"></p>
            </div>
                
            <div class="col-xs-12 col-sm-12 col-md-12"> 
                <p><strong>Last name:</strong><br>
                <p><input type="text" class="form-control" name="nachname" value="<?php echo $page['nachname']; ?>" placeholder="Last name"></p>
            </div>
              
            <div class="col-xs-12 col-sm-12 col-md-12"> 
                <p><strong>Street:</strong><br>
                <p><input type="text" class="form-control" value="<?php echo $page['strasse']; ?>" name="strasse" placeholder="Street"></p>
            </div>                    
            
            <div class="col-xs-12 col-sm-12 col-md-12">                
                <p><strong>ZIP:</strong><br>
                <p><input type="text" class="form-control" name="plz" value="<?php echo $page['plz']; ?>" placeholder="ZIP"></p>
            </div>
              
            <div class="col-xs-12 col-sm-12 col-md-12"> 
                <p><strong>City:</strong><br>
                <p><input type="text" class="form-control" name="stadt" value="<?php echo $page['stadt']; ?>" placeholder="City"></p>
            </div>
                
            <div class="col-xs-12 col-sm-12 col-md-12"> 
                <p><strong>Email:</strong><br>
                <p><input type="text" class="form-control" name="email" value="<?php echo $page['email']; ?>" placeholder="Email"></p>
            </div>
                
            <div class="col-xs-12 col-sm-12 col-md-12"> 
                <p><strong>Phone:</strong><br>
                <p><input type="text" class="form-control" name="telefon" value="<?php echo $page['telefon']; ?>" placeholder="Phone"></p>
            </div>
                
            <div class="col-xs-12 col-sm-12 col-md-12"> 
                <p><strong>Mobil:</strong><br>
                <p><input type="text" class="form-control" name="mobil" value="<?php echo $page['mobil']; ?>" placeholder="Mobil"></p>
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
