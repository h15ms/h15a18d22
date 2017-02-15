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

            <h1><?php echo $headline; ?></h1>  
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
                    <input type="hidden" name="id" value="<?php echo $data['0']->id; ?>">                        
                      
                    <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                            <label>User Level:</label> 
                          <select name="user_level" class="form-control" id="level">
                            <?php foreach(unserialize(USER_LEVEL) as $key => $val ){?>
                              <option <?php if($key == $data['0']->user_level){echo 'selected';} ?> value="<?php echo $key; ?>"><?php echo $val;?></option>
                            <?php } ?>
                          </select> 
                        </div>
                    </div> 

                    <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                             <label>Module Name:</label> 
                          <input type="text" class="form-control" name="module_name" id="address" value="<?php echo $data['0']->module; ?>" placeholder="Module Name*" required> 
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 form-group">   
                         <label>Action</label>
                        <input type="text" class="form-control" name="action" value="<?php echo $data['0']->action; ?>" placeholder="Action" required>
                        </div>

                    </div>    
                        
                    <div class="col-xs-12 col-sm-12 col-md-12"> 
                       
                         <div class="col-xs-6 col-sm-6 col-md-6 form-group">   
                        <div class="col-xs-6 col-sm-6 col-md-1" style="margin-top: 10px;">
                          <label>View</label>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-1">
                          <input type="checkbox" <?php if($data['0']->view == '1'){echo 'checked';} ?> value="1" class="form-control" name="view"> 
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-1" style="margin-top: 10px;">
                         <label>Delete</label>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-1">
                         <input type="checkbox" <?php if($data['0']->delete == '1'){echo 'checked';} ?> value="1" class="form-control" name="delete">
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-1" style="margin-top: 10px;">
                          <label>Update</label>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-1">
                          <input type="checkbox" <?php if($data['0']->update == '1'){echo 'checked';} ?> value="1" class="form-control" name="update">
                        </div>

                       </div>

                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 mt20">    
                        
                        <input style="width: 20%" type="submit" class="btn btn-lg btn-success pull-right" value="Update Module"> 
                    </div>
                    
                    </form>
                      
                  </div>
                  
                </div>
            </div>
        </div>
           
           
           

        </div> <!-- container -->
        
        
        
        
    </div> <!--wrap -->
</div> <!-- page-content -->



