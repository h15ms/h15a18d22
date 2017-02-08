<div id="page-container">
      <!-- BEGIN SIDEBAR -->
      <nav id="page-leftbar" role="navigation">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="acc-menu" id="sidebar">
          <li id="search">                    
            <a href="javascript:;">
              <i class="fa fa-search opacity-control">
              </i>
            </a>
            <form action="index.php" method="get">                     
              <input type="hidden" value="applyprofil" name="c">
              <input type="text" class="search-query" name="id" placeholder="Application #ID.">
              <button type="submit">
                <i class="fa fa-search">
                </i>
              </button>
            </form>
          </li>
          <li class="divider"></li>
          <li>
            <a href="<?php echo base_url();?>admin/homecrm"><i class="fa fa-tachometer"></i> 
              <span>Dashboard</span>
            </a>
          </li>                
          <li>
            <a href="javascript:;"><i class="fa fa-file-text-o"></i> 
              <span>Applications</span>
            </a>
            <ul class="acc-menu">
                
                <li><a href="<?php echo base_url();?>admin/applycrm">All Applications</a></li>

                <li><a href="<?php echo base_url();?>admin/applycrm/agentapplication">My Applications</a></li>                        
            </ul>
          </li>                
          <li>
            <a href="javascript:;"><i class="fa fa-group"></i> 
              <span>Employees</span>
            </a>
            <ul class="acc-menu">
                <!-- <li><a href="<?php echo base_url();?>admin/usercrm">All Agents</a></li> -->
                <li><a href="<?php echo base_url();?>admin/usercrm/allemployee">All Employees</a></li>                        
                <li><a href="<?php echo base_url();?>admin/usercrm/agentapplication">All Customers</a></li>                        
            </ul>
          </li>
          <li>
              <a href="<?php echo base_url(); ?>admin/doctor"><i class="fa fa-group" aria-hidden="true"></i><span>Doctor</span></a>
          </li>
          <li>
              <a href="<?php echo base_url(); ?>admin/patient"><i class="fa fa-group" aria-hidden="true"></i><span>Patient</span></a>
          </li>
          <li>
            <a href="<?php echo base_url();?>admin/hospitalscrm"><i class="fa fa-hospital-o" aria-hidden="true"></i> 
              <span>Hospitals</span>
            </a>
              
          </li>
          <li>
              <a href="<?php echo base_url(); ?>admin/specialization"><i class="fa fa-list" aria-hidden="true"></i><span>Specialization</span></a>
          </li>
          
          
          
          
          
          
          <!--li class="divider"></li>
<li><a href="javascript:;"><i class="fa fa-ticket"></i> <span>Support Tickets</span> </a>
<ul class="acc-menu">
<li><a href="index.php?c=tickets">Offene Tickets</a></li>
<li><a href="index.php?c=ticketsclose">Geschlossene Tickets</a></li>                        
</ul>
</li-->                
        </ul>
        <!-- END SIDEBAR MENU -->
      </nav>
      <!-- BEGIN RIGHTBAR >
<div id="page-rightbar">
<div id="widgetarea">                
<div class="widget" id="activities">                    
<p><span class="fa fa-user"></span> Benutzer AktivitÃ¤ten</p>                    
</div>
</div>
</div>
<- END RIGHTBAR -->
