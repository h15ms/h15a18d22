
<div id="page-content">
    <div id="wrap">
    
    
    
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.php">Dashboard</a></li>
                <li>Einstellungen</li>
                <li class='active'>Passwort ändern</li>
            </ol>

            
            
            
            <h1>Passwort ändern</h1>
            <div class="options">
                <div class="btn-toolbar">                                              
                    
                </div>
            </div>
        </div>

        
        

        <div class="container">
            
            
          <div class="row">
              
              
            <?php if($err!=""){ ?> 
                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="alert alert-dismissable alert-warning">
                        <i class="fa fa-exclamation-triangle"></i> <?php echo $err; ?>
                    </div>
                 </div>        
             <? } ?> 
            
             <?php if($msg!=""){ ?> 
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="alert alert-dismissable alert-success">
                        <i class="fa fa-check-square-o"></i> <?php echo $msg; ?>
                    </div>
                </div>            
             <? } ?>   
                            
                
            <div class="col-md-12">
                    <div class="panel panel-grape">
                        <div class="panel-heading">
                              <h4><i class="fa fa-key"></i> Passwort ändern</h4>
                              <div class="options">                                    
                              </div>
                        </div>
                        <div class="panel-body collapse in">
                           <form action="" method="post" class="form-horizontal row-border">
                            <input type="hidden" name="send" value="changepass">
                                                       
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Passwort</label>
                                <div class="col-sm-6">
                                    <input type="password" name="old_pw" class="form-control" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Neues Passwort</label>
                                <div class="col-sm-6">
                                    <input type="password" name="new_pw1" class="form-control" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Passwort wiederholen</label>
                                <div class="col-sm-6">
                                    <input type="password" name="new_pw2" class="form-control" required>
                                </div>
                            </div>
                            
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-2">
                                    <div class="btn-toolbar pull-left">
                                        <button class="btn-lg btn-success btn"><i class="fa fa-save"></i> Passwort ändern</button>
                                        
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                    </div>
                </div>
             </div> 
            
            
            
            
        </div> <!-- container -->
        
        
        
        
    </div> <!--wrap -->
</div> <!-- page-content -->
