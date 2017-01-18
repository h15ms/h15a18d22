<?php error_reporting(0);?>

<div id="page-content">
    <div id="wrap">
    
    
    
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="<?php base_url()?>/admin">Dashboard</a></li>
                <li>Employees</li>
                <li class='active'><?php echo $headline; ?></li>
            </ol>

            <h1><?php echo $headline; ?></h1>
            <div class="options">
                <div class="btn-toolbar">
                	<a href='<?php base_url()?>usercrm/adduser' class="btn btn-success hidden-xs"><i class="fa fa-plus-circle"></i> Add Employee</a>					           
                </div>
            </div>
        </div>





        <div class="container">
           
           
           
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4><i class="fa fa-users"></i> <?php echo $headline; ?></h4>
            </div>
          <div class="panel-body collapse in">                                  
            
            <div class="table-flipscroll">
               <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-hover datatable" id="car_table">
					<thead>
					<tr>
						<th style="width:auto;">ID</th>
                        <th style="width:auto;">Position</th>
						<th style="width:auto;">Name</th>
						<th style="width:auto;">Email</th>
						<th style="width:auto;">Phone</th>
						<th style="width:auto;">Mobil</th>						
						<th style="width:auto;">Date</th>						
						<th style="width:auto;" align="center">Edit</th>			
					</tr>
					</thead>
					<tbody>
                                       
                        <?php foreach($users as $user){   ?>
                        <tr>
                            <td><?php echo $user->id;?></td>
                            <td><?php echo $user->position;?></td>
                            <td><?php echo $user->vorname." ".$user->nachname;?></td>
                            <td><?php echo $user->email;?></td>
                            <td><?php echo $user->telefon;?></td>
                            <td><?php echo $user->mobil;?></td>
                            <td><?php echo $user->datum;?></td>
                            <td align="center"><a href="usercrm/user/<?php echo $user->id;?>"><i class="fa fa-pencil"></i></a></td>
                        </tr>
                        <?php } ?>
					</tbody>
				</table>

                
            </div>
          </div>
          
        </div>
    </div>
</div>
           
           
           

        </div> <!-- container -->
        
        
        
        
    </div> <!--wrap -->
</div> <!-- page-content -->
