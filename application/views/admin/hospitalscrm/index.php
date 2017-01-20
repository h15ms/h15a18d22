<?php error_reporting(0);?>
<div id="page-content">
    <div id="wrap">
    
    
     <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="<?php base_url()?>/admin">Dashboard</a></li>
                <li>Hospitals</li>
                <li class='active'><?php echo $headline; ?></li>
            </ol>

            <h1><?php echo $headline; ?></h1>
            <div class="options">
                <div class="btn-toolbar">
                	<a href='<?php base_url()?>hospitalscrm/addhospital' class="btn btn-success hidden-xs"><i class="fa fa-plus-circle"></i> Add Hospitals</a>					           
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
          <?php //print_r($hospitals);?>
            <div class="table-flipscroll">
               <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-hover datatable" id="customer_table">
					<thead>
					<tr>
						<th style="width:auto;">#</th>
						<th style="width:auto;">Hospital Name</th>
						<th style="width:auto;">Address</th>
						<th style="width:auto;">City</th>						
						<th style="width:auto;">State</th>		
						<th style="width:auto;">Phone</th>
						<th style="width:auto;">Email</th>
                                                <th style="width:auto;">Website</th>
						<th style="width:auto;">Emergency Services </th>
                                                <th style="width:auto;">Hospital Type</th>
                                                <th style="width:auto;">Specialization </th>
                                                <th style="width:auto;">Distance From Airport</th>
                        			<th style="width:auto;" align="center">Status</th>						
					</tr>
					</thead>
					<tbody>
                                            
                                            
                        <?php $i=1; foreach($hospitals as $hospital): ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $hospital->name; ?></td>
                            <td><?php echo $hospital->address; ?></td>
                            <td><?php echo $hospital->city; ?></td>
                            <td><?php echo $hospital->state; ?></td>                            
                            <td><?php echo $hospital->phone_no; ?></td>                            
                            <td><?php echo $hospital->email; ?></td>
                            <td><?php echo $hospital->website; ?></td>
                            <td><?php echo $hospital->emergency_services; ?></td>
                            <td><?php echo $hospital->hospital_type; ?></td>
                            <td><?php $va= explode(',',$hospital->specialization);?>
                                <ul style="list-style: none;">
                           <?php  foreach($va as $a):?>
                                <li> <?php echo $a; ?> </li>
                                
                                
                           <?php  endforeach;?>
                            </ul>
                            
                            </td>
                            <td><?php echo $hospital->distance_from_airport; ?></td>
                           
                            <td align="center"><a href="#"><i class="fa fa-user"></i></a></td>
                        </tr>
                        <?php $i++; endforeach; ?>
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
