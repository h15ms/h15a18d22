

<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li class='active'><a href="admin">Dashboard</a></li>
            </ol>

            <h1>Dashboard</h1>
            <div class="options">
                <div class="btn-toolbar">                   
                </div>
            </div>
        </div>


        <div class="container">

			 <div class="row">                         
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <a class="info-tiles tiles-success" href="<?php base_url(); ?>ApplyCrm">
                        <div class="tiles-heading">
                            <div class="pull-left">New Applies</div>
                            <div class="pull-right"></div>
                        </div>
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-file-text-o"></i></div>
                            <div class="text-center"><?php echo $countnewapplys; ?></div>
                            <small>Applies</small>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <a class="info-tiles tiles-success" href="<?php base_url(); ?>ApplyCrm">
                        <div class="tiles-heading">
                            <div class="pull-left"><span>Applies total</span></div>
                            <div class="pull-right"></div>
                        </div>
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-file-text-o"></i></div>
                            <div class="text-center"><?php echo $countapplys; ?></div>
                            <small>Applies</small>
                        </div>
                    </a>
                </div>
            </div>


        
			<div class="row">                
                <div class="col-md-6">
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                              <h4><i class="fa fa-rss"></i> New Applies</h4>
                              <div class="options">
                                <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
                              </div>
                        </div>
                        <div class="panel-body">
                        


                        <table class="table table-hover">
                          <tbody>
                           <?php for($i=0;$i<count($allnewapplys);$i++){ ?>                            
                            <tr>
                              <td>

                                <a href="<?php echo base_url(); ?>admin/applycrm/profil/<?php echo $allnewapplys[$i]->app_id; ?>"><?php echo $allnewapplys[$i]->given_name; ?> <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span></a>
                              </td>                            
                            </tr>  
                            <?php } ?>                          
                          </tbody>
                        </table>
                        
                        </div>
                    </div>
                </div>
                
                
                <div class="col-md-6">
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                              <h4><i class="fa fa-rss"></i> New edit Applies</h4>
                              <div class="options">
                                <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
                              </div>
                        </div>
                        <div class="panel-body">
                        
                        <table class="table table-hover">
                          <tbody>                            
                           <?php for($i=0;$i<count($allupdatedapplys);$i++){ ?>                            
                            <tr>
                              <td>
                                <a href="<?php echo base_url(); ?>admin/applycrm/profil/<?php echo $allupdatedapplys[$i]->app_id; ?>"><?php echo $allupdatedapplys[$i]->given_name; ?><span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span></a>
                              </td>                            
                            </tr>  
                            <?php } ?>
                          </tbody>
                        </table>
                        
                        </div>
                    </div>
                </div>

                
                
				</div>


			 

            

        </div> <!-- container -->
    </div> <!--wrap -->
</div> <!-- page-content -->



