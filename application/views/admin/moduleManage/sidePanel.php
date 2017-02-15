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
                    <a href='addSidebar' class="btn btn-primary hidden-xs"><i class="fa fa-plus-circle"></i> Add Sidebar</a>   
                    <a style="margin-left: 10px;" href='index' class="btn btn-success hidden-xs"><i class="fa fa-plus-circle"></i> Manage Module</a>                          
                </div>
            </div>
        </div>



<p><?php echo $message ? '<span style="color:green">'.$message.'</span>' :'' ; ?></p>

        <div class="container">
           

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <h4><i class="fa fa-life-ring"></i> Structure</h4>
                    </div>
                  <div class="panel-body collapse in">                                  
                    
                    <div class="col-md-6">
                        <select class="form-control" id="user_ajax">
                          <?php foreach(unserialize(USER_LEVEL) as $key => $val ){?>
                            <option value="<?php echo $key; ?>"><?php echo $val;?></option>
                          <?php } ?>
                        </select> 
                    </div>
                    <div class="col-md-6">
                        <?php 
                            echo "<pre>";
                            print_r($leftpanel);
                            echo "</pre>";
                         ?>
                    </div>
                            

                  </div>
                  
                </div>
            </div>
        </div> 
           
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4><i class="fa fa-life-ring"></i> <?php echo $headline; ?></h4>
            </div>
          <div class="panel-body collapse in">                                  
            
            <div class="table-flipscroll">
               <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-hover datatable" id="car_table">
					<thead>
					<tr>
                        <th style="width:auto;">ID</th>
						<th style="width:auto;">Icon</th>
                        <th style="width:auto;">Root Heading Name</th>
						<th style="width:auto;">Sub Heading Name</th>
                        <th style="width:auto;">Associated ID</th>                   
						<th style="width:auto;">URL</th>                   
                        <th style="width:auto;">User Type</th>                     
						<th style="width:auto;">Status</th>						
						<th style="width:auto; text-align: center;">Edit</th>			
					</tr>
					</thead>
					<tbody>

                        <?php foreach($data as $user){   ?>

                        <tr>
                            <td><?php echo $user->id;?></td>
                            <td>
                            <?php if($user->icon == ""){ ?>
                                   <i class="fa fa-times"></i>
                            <?php }else{ ?> 
                                   <i class="fa <?php echo $user->icon;?>"></i>
                            <?php } ?> 
                            </td>
                            <td><?php if($user->root_heading == ""){
                                echo "<p style='color:red'>No Heading</p>";
                            }else{
                                echo $user->root_heading;
                            }
                            ?></td>
                            <td><?php 
                                if($user->sub_heading == ""){
                                    echo "<p style='color:red'>No Sub Heading</p>";
                                }else{
                                    echo $user->sub_heading;
                                }
                            ?></td>
                            <td><?php 
                                if($user->sub_id == '0'){
                                    echo "<p style='color:blue'>Root</p>";
                                }else{
                                    echo $user->sub_id;
                                }
                            ?></td>
                            <td><?php if($user->url == ""){
                                    echo "<p style='color:red'>No URL</p>";
                                }else{
                                    echo $user->url;
                                    }?></td>
                            
                           
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
                                        echo "<p><a style='color:red;' href='updateStatusSidePanel/1/".$user->id."'>Deactive</a></p>";
                                    }elseif($user->status == '1'){
                                        echo "<p><a style='color:green;' href='updateStatusSidePanel/0/".$user->id."'>Active</a></p>";
                                    }

                                ?></td>
                            
                            <td align="center"><a href="updateSidePanel/<?php echo $user->id;?>"><i class="fa fa-pencil"></i></a></td>
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
