<style>
    .ms-options ul li {
        list-style: none;
    }
</style>

<div  id="page-content">
    <div id="wrap">

        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url()?>admin">Dashboard</a></li>
                <li><a href="<?php echo base_url()?>admin/module">Module</a></li>
                <li class='active'><?php echo $headline; ?> </li>
            </ol>

            <h1><?php echo $headline; ?></h1>  <h3><?php echo $message ? '<span style="color:green">'.$message.'</span>' :'' ; ?></h3>
            <div class="options">
                <div class="btn-toolbar">
                	<a href="<?php echo base_url()?>admin/module" class="btn btn-default hidden-xs"><i class="fa fa-files-o"></i> Manage Modules</a>
                </div>
            </div>
        </div>

        <div class="container">
           
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <h4><i class="fa fa-code"></i> <span><?php echo $headline; ?></span></h4>     
                       
                    </div>
                    <div class="panel-body collapse in" >                                  
                   
                      
                      <form method="post" action="index" >
                    <input type="hidden" name="send" value="1">                        
                      
                    <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                            <label>User Level:</label> 
                          <select name="user_level" class="form-control" id="level">
                            <?php foreach(unserialize(USER_LEVEL) as $key => $val ){?>
                              <option value="<?php echo $key; ?>"><?php echo $val;?></option>
                            <?php } ?>
                          </select> 
                        </div>
                    </div> 

                    <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                             <label>Module Name:</label> 
                          <input type="text" class="form-control" name="module_name" id="address" value="" placeholder="Module Name*" required> 
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 form-group">   
                         <label>Action</label>
                        <input type="text" class="form-control" name="action" value="" placeholder="Action">
                        </div>

                    </div>    
                        
                    <div class="col-xs-12 col-sm-12 col-md-12"> 
                       
                         <div class="col-xs-6 col-sm-6 col-md-6 form-group">   
                        <div class="col-xs-6 col-sm-6 col-md-1" style="margin-top: 10px;">
                          <label>View</label>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-1">
                          <input type="checkbox" value="1" class="form-control" checked name="view"> 
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-1" style="margin-top: 10px;">
                         <label>Delete</label>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-1">
                         <input type="checkbox" value="1" class="form-control" checked name="delete">
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-1" style="margin-top: 10px;">
                          <label>Update</label>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-1">
                          <input type="checkbox" value="1" class="form-control" checked name="update">
                        </div>

                       </div>

                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 mt20">    
                        
                        <input style="width: 20%" type="submit" class="btn btn-lg btn-success pull-right" value="Add Module"> 
                    </div>
                    
                    </form>
                      
                  </div>
                  
                </div>
            </div>
        </div>
           
           
           

        </div> <!-- container -->
        
        
        
        
    </div> <!--wrap -->
</div> <!-- page-content -->




<!---popup---->
 <div id="new_bankpop" tabindex="-1" class="modal fade"   role="dialog" style="z-index: 1400;">
       <div class="modal-dialog modal-lg" style="width:30%;">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="border-bottom:0;">
            
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="text-align:center;border-bottom: 2px;">
              
              ADD NEW HOSPITAL
              
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
               <button type="button" class="form-control btn btn-success" id="ad_n_b"> SAVE </button>
        </div> 
            
            </form>
            </div></div>
       
    
    </div>  
    </div>  
    </div>  
    </div>