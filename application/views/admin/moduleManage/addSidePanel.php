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
                    <input type="hidden" name="sidebar_insert" value="1">                        
                      
                    <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                            <label>User Level:</label> 
                          <select name="user_level[]" multiple class="form-control" id="addSidePanel">
                            <?php foreach(unserialize(USER_LEVEL) as $key => $val ){?>
                              <option value="<?php echo $key; ?>"><?php echo $val;?></option>
                            <?php } ?>
                          </select> 
                        </div>
                    </div> 

                    <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                            <label>Root Heading:</label> 
                            <select name="root_heading" class="form-control" id="root_heading" onclick="rootheading(this);">
                                <option value=""> -- Select -- </option>
                                <option id="new_root_heading" value="new_root_heading">Add New Root Heading</option>
                              <?php foreach($rootheading as $val ){?>
                                <option value="<?php echo $val->id; ?>"><?php echo $val->root_heading;?></option>
                              <?php } ?>
                            </select> 
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 form-group root" id="root_hide" style="display: none;">   
                          <label>New Root Heading</label>
                          <input type="text" class="form-control" name="new_root_heading" value="" placeholder="New Root Heading">
                        </div>
                    </div> 
                    <div class="col-xs-12 col-sm-12 col-md-12" id="root_hide_new" style="display: none;"> 
                        <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 

                            <div class="col-xs-6 col-sm-6 col-md-6" style="margin: 10px 0 0 -10px;">
                              <label>This Root Heading contains own URL?</label>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-1">
                              <input type="checkbox" value="yes" id="contains_url_id" onclick="valueChanged()" checked="" class="form-control pull-left" name="contains_url"> 
                            </div>

                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 form-group" id="root_heading_url">   
                          <label>Root Heading URL</label>
                          <input type="text" class="form-control" name="new_root_heading_url" value="" placeholder="Root Heading URL">
                        </div>

                    </div> 
                    <script type="text/javascript">
                      function rootheading(att)
                      {
                        var val = att.options[att.selectedIndex].value;
                        document.getElementById("root_hide").style.display = val == 'new_root_heading' ? "block" : 'none';
                        document.getElementById("root_hide_new").style.display = val == 'new_root_heading' ? "block" : 'none';
                        document.getElementById("sub_heading_div").style.display = val != 'new_root_heading' ? "block" : 'none';
                        document.getElementById("root_heading_icon").style.display = val == 'new_root_heading' ? "block" : 'none';
                      }
                      function valueChanged(){
                        $('#contains_url_id').click(function(){
                            if($('#contains_url_id').is(':checked')){
                              $('#root_heading_url').show();
                            }else{
                              $('#root_heading_url').hide();
                            }
                        });
                      }

                    </script>

                    <div class="col-xs-12 col-sm-12 col-md-12" id="sub_heading_div"> 
                        <div class="col-xs-6 col-sm-6 col-md-6 form-group"> 
                            <label>Sub Heading:</label> 
                            <input type="text" class="form-control" name="sub_heading" value="" placeholder="Sub Heading">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 form-group">   
                          <label>Sub Heading URL</label>
                          <input type="text" class="form-control" name="sub_heading_url" value="" placeholder="Sub Heading URL">
                        </div>

                    </div>    
                        
                    <div class="col-xs-12 col-sm-12 col-md-12" id="root_heading_icon" style="display: none;"> 
                      <div class="col-xs-6 col-sm-6 col-md-6 form-group">   
                        <label>Icon</label>
                        <input type="text" class="form-control" name="root_heading_icon" value="" placeholder="fa-user">
                      </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 mt20">    
                        
                        <input style="width: 20%" type="submit" class="btn btn-lg btn-success pull-right" value="Add Sidebar"> 
                    </div>
                    
                    </form>
                      
                  </div>
                  
                </div>
            </div>
        </div>
           
           
           

        </div> <!-- container -->
        
        
        
        
    </div> <!--wrap -->
</div> <!-- page-content -->
