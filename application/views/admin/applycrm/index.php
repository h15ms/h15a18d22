<?php error_reporting(0);?>
<div id="page-content">
    <div id="wrap">
        
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="">Dashboard</a></li>                
                <li class='active'><?php echo $headlines;?></li>
            </ol>

            <h1><?php echo $headlines;?></h1>
            <div class="options">
                <div class="btn-toolbar">                	                   
                </div>
            </div>
        </div>


        <div class="container">
           
           
           
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4><i class="fa fa-group"></i> <?php echo $headlines;?></h4>
                
            </div>
          <div class="panel-body collapse in">                                  
          
            <div class="table-flipscroll">
               <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-hover datatable" id="customer_table">
					<thead>
					<tr>
						<th style="width:auto;">APP ID</th>
						<th style="width:auto;">Visa Type</th>
						<th style="width:auto;">Mission</th>
						<th style="width:auto;">Name</th>						
						<th style="width:auto;">City</th>		
						<th style="width:auto;">Email</th>
						<th style="width:auto;">Phone</th>
						<th style="width:auto;">Date</th>
                        <th style="width:auto;" align="center">Status</th>  				
						<th style="width:auto;" align="center">Profile</th>						
					</tr>
					</thead>
					<tbody>
                                            
                                            
                        <?php foreach($applys as $client): ?>
                        <tr>
                            <td><?php echo $client->app_id; ?></td>
                            <td><?php echo $client->visa_type; ?></td>
                            <td><?php echo $client->indian_mission; ?></td>
                            <td><?php echo $client->given_name; ?></td> 
                            <td><?php echo $client->city_present; ?></td> 
                            <td><?php echo $client->email; ?></td>
                            <td><?php echo $client->phone_no; ?></td>
                            <td><?php echo date('d-m-Y', $client->apply_date); ?></td>
                            <td align="center">
                            <?php 
                                if($client->status =="0"){ 
                                    echo "New";
                                }elseif($client->status =="1"){ 
                                    echo "In Progress";
                                }elseif($client->status =="2"){ 
                                    echo "Confirmed";
                                }elseif($client->status =="3"){ 
                                  echo "Rejected";
                                }
                              ?>
                            </td>
                            <td align="center"><a href="<?php echo base_url(); ?>admin/applycrm/profil/<?php echo $client->app_id; ?>"><i class="fa fa-user"></i></a></td>
                        </tr>
                        <?php endforeach; ?>
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
