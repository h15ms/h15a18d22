<style>
    .cls-page a{
      padding: 2%;
    }
    
</style>

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
                	<a href='#new_special'  data-toggle="modal" class="btn btn-success hidden-xs"><i class="fa fa-plus-circle"></i> Add Hospital Specializations</a>					           
                </div>
            </div>
        </div>

        <div class="container">
           
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4><i class="fa fa-hospital-o"></i> <?php echo $headlines;?></h4>
                
            </div>
          <div class="panel-body collapse in">                                  

            <div class="table-flipscroll table-responsive"   ng-app="specializationAPP" ng-controller="specializationCtrl">
                {{speciliz}}
                
               <table cellpadding="0"  cellspacing="0" border="0" class="table table-striped table-bordered table-hover datatable" id="customer_table">
					<thead>
					<tr>
						<th style="width:auto;"><strong>#</strong></th>
                                                <th style="width:auto;"><Strong>List of Specialization</strong></th>
	
                                                <th style="width:auto;" align="center"><strong>Status</strong></th>	
                                                <th style="width:auto;" align="center"><strong>Change Status</strong></th>	
					</tr>
					</thead>
					<tbody>
                                            <tr ng-repeat=" x in speciliz['results']"> 
                                         
                                            
                                            <td> {{x.id}}</td>
                                            <td>{{x.sepcialization }}</td>
                                         <td >
                                             <span ng-if="x.status==='1'">
                                                 ACTIVE 
                                             </span> 
                                         <span ng-if="x.status==='0'">
                                                 DACTIVE 
                                             </span> 
                                          
                                         
                                         </td> 
                                          <td >
                                             <span ng-if="x.status==='1'">
                                                   <a href="javascript:void(0)" ng-click="updateSpecif(x.id,0)">DACTIVE</a>
                                             </span> 
                                         <span ng-if="x.status==='0'">
                                                   <a href="javascript:void(0)" ng-click="updateSpecif(x.id,1)">ACTIVE</a>
                                             </span> 
                                          
                                         
                                         </td> 
    <!--                                           <td>{{x.city }}</td>
                                            <td>{{x.phone_no }}</td>
                                            <td>{{x.email }}</td>-->
                        <?php //$i=1; foreach($hospitals as $hospital): ?>
                    <!--     <tr>
                            <td><?php ///echo $i; ?></td>
                            <td><?php //echo $hospital->name; ?></td>
                            <td><?php //echo getCutStrip( $hospital->address,"26","..."); ?></td>
                            <td><?php //echo $hospital->city; ?></td>
                           <td><?php //echo $hospital->state; ?></td>                            -->
                          <!--  <td><?php //echo $hospital->phone_no; ?></td>                            
                            <td><?php //echo $hospital->email; ?></td>
<!--                            <td><?php //echo $hospital->website; ?></td>-->
                         <!--   <td><?php // echo $hospital->emergency_services; ?></td>
<!--                            <td><?php //echo $hospital->hospital_type; ?></td>
                            <td><?php //$va= explode(',',$hospital->specialization);?>
                                <ul style="list-style: none;">
                           <?php  //foreach($va as $a):?>
                                <li> <?php //echo $a; ?> </li>
                                
                                
                           <?php // endforeach;?>
                            </ul>
                            
                            </td>
                            <td><?php //echo $hospital->distance_from_airport; ?></td>-->
                           
<!--                            <td align="center"><a href="<?php //echo base_url(); ?>admin/hospitalscrm/viewhospital/{{x.appID }}"><i class="fa fa-eye 2x"></i></a>
                            <a href="<?php //echo base_url(); ?>admin/hospitalscrm/edithospital/{{x.appID }}"><i class="fa fa-pencil-square-o"></i></a>
                            <a href="javascript:void(0)" onclick="delpopup({{x.appID }}, '{{x.name }}')"><i class="fa fa-trash-o"></i></a>
                            -->
                            
                            
                            
                            
                            </td>
                        </tr>
                        <?php //$i++; endforeach;�?>
					</tbody>
				</table>

<p class="cls-page" ng-bind-html="pagination">{{speciliz['links']}}</p>
    <input type="hidden" name="pageno" id="pageno" value="<?php echo $this->uri->segment('4')? $this->uri->segment('4'):0?>"/>            
            </div>
          </div>
          
        </div>
    </div>
</div>
           
           
           

        </div> <!-- container -->
        
        
        
        
    </div> <!--wrap -->
</div> <!-- page-content -->





<div id="new_special"  tabindex="-1" class="modal fade"   role="dialog" style="z-index: 1400;">
       <div class="modal-dialog modal-lg" style="width:30%;">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="border-bottom:0;">
            
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="text-align:center;border-bottom: 2px;">
              
              ADD NEW SPECIALIZATION
              
          </h4>
          <hr>
        </div>
    <div class="modal-body">
  
       
          
        <div class="row">
        <div class="form-group">
          
            <form name="ne_b" id="ne_b">
                <div class="col-md-12 errorpopup" id="response" style="font-size:20px;">   </div>
        <div class="col-md-12">
        <input class="form-control" type="text" name="n_b_name" id="n_b_name" required  />
        </div>
       
           <div class="col-md-12 mt20">
               <button type="button"  class="form-control btn btn-success" > SAVE </button>
        </div> 
            
            </form>
            </div></div>
       
    
    </div>  
    </div>  
    </div>  
    </div>