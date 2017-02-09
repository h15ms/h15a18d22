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



<p><?php echo $message ? '<span style="color:green">'.$message.'</span>' :'' ; ?></p>

        <div class="container">
           
           
           
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4><i class="fa fa-cubes"></i> <?php echo $headline; ?></h4>
            </div>
          <div class="panel-body collapse in">                                  
            
            <div class="table-flipscroll">
               <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-hover datatable" id="car_table">
					<thead>
					<tr>
						<th style="width:auto;">ID</th>
                        <th style="width:auto;">Name</th>
						<th style="width:auto;">Action</th>
						<th style="width:auto; text-align: center;">View</th>
						<th style="width:auto; text-align: center;">Delete</th>
                        <th style="width:auto; text-align: center;">Update</th>                       
                        <th style="width:auto;">User Type</th>                     
						<th style="width:auto;">Status</th>						
						<th style="width:auto; text-align: center;">Edit</th>			
					</tr>
					</thead>
					<tbody>

                        <?php $i = '1'; foreach($data as $user){   ?>

                        <tr>
                            <td><?php echo $i;?></td>
                            <td><?php echo $user->module;?></td>
                            <td><?php echo $user->action;?></td>
                            <td align="center"><?php if($user->view == '1'){?>
                                    <i class="fa fa-check"></i>
                                <?php }else{?>
                                    <i class="fa fa-times"></i>
                                <?php } ?>
                            </td>
                            <td align="center"><?php if($user->delete == '1'){?>
                                    <i class="fa fa-check"></i>
                                <?php }else{?>
                                    <i class="fa fa-times"></i>
                                <?php } ?>
                            </td>
                            <td align="center"><?php if($user->update == '1'){?>
                                    <i class="fa fa-check"></i>
                                <?php }else{?>
                                    <i class="fa fa-times"></i>
                                <?php } ?>
                            </td>
                            <td><?php 
                                if($user->user_level == '0'){
                                    echo 'Developer';
                                }elseif($user->user_level == '1'){
                                    echo 'Admin';
                                }elseif($user->user_level == '2'){
                                    echo 'Agent';
                                }elseif($user->user_level == '3'){
                                    echo 'Customer';
                                }elseif($user->user_level == '4'){
                                    echo 'Member';
                                }
                                ?></td>

                            <td><?php if($user->status == '0'){
                                        echo "<p><a style='color:red;' href='module/updateStatus/1/".$user->id."'>Deactive</a></p>";
                                    }elseif($user->status == '1'){
                                        echo "<p><a style='color:green;' href='module/updateStatus/0/".$user->id."'>Active</a></p>";
                                    }

                                ?></td>
                            
                            <td align="center"><a href="module/updateModule/<?php echo $user->id;?>"><i class="fa fa-pencil"></i></a></td>
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
