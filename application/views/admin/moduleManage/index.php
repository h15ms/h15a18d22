<div id="page-content">
    <div id="wrap">
    
    
    
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="<?php base_url()?>/admin">Dashboard</a></li>
                <li>Modules</li>
                <li class='active'><?php echo $headline; ?></li>
            </ol>

            <h1><?php echo $headline; ?></h1>
            <div class="options">
                <div class="btn-toolbar">
                	<a href='<?php base_url()?>module/addModule' class="btn btn-success hidden-xs"><i class="fa fa-plus-circle"></i> Add Module</a>					           
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
                        <th style="width:auto;">Name</th>
						<th style="width:auto;">Action</th>
						<th style="width:auto;">View</th>
						<th style="width:auto;">Delete</th>
                        <th style="width:auto;">Update</th>                       
                        <th style="width:auto;">User Level</th>                     
						<th style="width:auto;">Status</th>						
						<th style="width:auto;" align="center">Edit</th>			
					</tr>
					</thead>
					<tbody>

                        <?php $i = '1'; foreach($users as $user){   ?>

                        <tr>
                            <td><?php echo $i;?></td>
                            <td><?php 
                                if($user->user_type == '1'){
                                    echo 'Admin';
                                }elseif($user->user_type == '2'){
                                    echo 'Agent';
                                }
                                ?></td>
                            <td><?php echo $user->firstname." ".$user->lastname;?></td>
                            <td><?php echo $user->email;?></td>
                            <td><?php echo $user->phone;?></td>

                            <td><?php echo date('d-m-Y', $user->date);?></td>
                            <td><?php if($user->registration_status == '0'){
                                        echo "<p style='color:red;'>Not Approved</p>";
                                    }elseif($user->registration_status == '1'){
                                        echo "<p style='color:green;'>Approved</p>";
                                    }

                                ?></td>
                            <td align="center"><a href="usercrm/employee/<?php echo $user->id;?>"><i class="fa fa-eye"></i></a></td>
                            <td align="center"><a href="usercrm/user/<?php echo $user->id;?>"><i class="fa fa-pencil"></i></a></td>
                        </tr>
                        <?php $i++; } ?>
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
