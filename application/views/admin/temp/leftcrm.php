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
            <form action="" method="get">                     
              <input type="hidden" value="applyprofil" name="c">
              <input type="text" class="search-query" name="id" placeholder="Application #ID.">
              <button type="submit">
                <i class="fa fa-search"></i>
              </button>
            </form>
          </li>
          <li class="divider"></li>
          
          <li>
              <a href="<?php echo base_url(); ?>admin"><i class="fa fa-tachometer" aria-hidden="true"></i><span>Dashboard</span></a>
          </li>
          
          <?php foreach($left_base as $value){ ?>
          

            <?php 

            if(isset($value['sub-nav'])){?>

            <li>
              <a href="javascript:;"><i class="fa <?php echo $value['icon']; ?>"></i> <span><?php echo $value['nav']; ?></span> </a>
              <ul class="acc-menu">
                <?php foreach($value['sub-nav'] as $sub_nav){ ?>
                <li><a href="<?php echo base_url().$sub_nav['url']; ?>"><?php echo $sub_nav['sub_heading']; ?></a></li>                     
                <?php } ?>
              </ul>
            </li> 


            <?php }else{ ?>


            <li>
              <a href="<?php echo base_url().$value['url']; ?>"><i class="fa <?php echo $value['icon']; ?>"></i> <span><?php echo $value['nav']; ?></span> </a>
            </li> 

            <?php  } ?>


          <?php } ?>
          <li class="divider"></li>


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
