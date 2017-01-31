    

<footer role="contentinfo">
        <div class="clearfix">
            <ul class="list-unstyled list-inline pull-left">
                <li><?php ?></li>
            </ul>
            <button class="pull-right btn btn-inverse-alt btn-xs hidden-print" id="back-to-top"><i class="fa fa-arrow-up"></i></button>
        </div>
    </footer>

</div> <!-- page-container -->


  <script type='text/javascript' src='<?php echo URL_ADMIN;?>js/jquery.min.js'></script>

 




  <script type='text/javascript' src='<?php echo URL_ADMIN;?>js/bootstrap.min.js'></script>
  <script type='text/javascript' src='<?php echo URL_ADMIN;?>js/enquire.js'></script>
  <script type='text/javascript' src='<?php echo URL_ADMIN;?>js/jquery.cookie.js'></script>
  
  <script type='text/javascript' src='<?php echo URL_ADMIN;?>js/jquery.nicescroll.min.js'></script>
  
  <script type='text/javascript' src='<?php echo URL_ADMIN;?>js/request.js'></script>
  <script type='text/javascript' src='<?php echo URL_ADMIN;?>plugins/codeprettifier/prettify.js'></script>
  <script type='text/javascript' src='<?php echo URL_ADMIN;?>plugins/easypiechart/jquery.easypiechart.min.js'></script>
  <script type='text/javascript' src='<?php echo URL_ADMIN;?>plugins/sparklines/jquery.sparklines.min.js'></script>
  <script type='text/javascript' src='<?php echo URL_ADMIN;?>plugins/form-toggle/toggle.min.js'></script>
  <script type='text/javascript' src='<?php echo URL_ADMIN;?>plugins/dropzone/dropzone.min.js'></script>
  <script type='text/javascript' src='<?php echo URL_ADMIN;?>js/placeholdr.js'></script>
  <script type='text/javascript' src='<?php echo URL_ADMIN;?>js/application.js'></script>
  <?php $this->uri->segment(2);
  if ($this->uri->segment(2) == 'hospitalscrm' || $this->uri->segment(2) == 'Hospitalscrm') { ?>
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
      <script type='text/javascript' src='<?php echo URL_ADMIN; ?>js/hospital.js'></script>
<?php } else { ?>
      <script type='text/javascript' src='<?php echo ASSETS; ?>angularjs/angular.min.1.6.1.js'></script>
      <script type='text/javascript' src='<?php echo ASSETS; ?>angularjs/ctr/<?php echo $js; ?>'></script>
  <?php } ?>
    
  <script type='text/javascript' src='<?php echo URL_ADMIN;?>demo/demo.js'></script>
  <script type='text/javascript' src='<?php echo URL_ADMIN;?>plugins/datatables/jquery.dataTables.min.js'></script>
  <script type='text/javascript' src='<?php echo URL_ADMIN;?>plugins/datatables/dataTables.bootstrap.js'></script>
  <script type='text/javascript' src='<?php echo URL_ADMIN;?>demo/demo-datatables.php?c=<?php echo $this->uri->segment('2'); ?>'></script>
  
  
<script type='text/javascript' src='<?php echo URL_ADMIN;?>plugins/fullcalendar/fullcalendar.min.js'></script>
<script type='text/javascript' src='<?php echo URL_ADMIN;?>plugins/form-daterangepicker/daterangepicker.min.js'></script>
<script type='text/javascript' src='<?php echo URL_ADMIN;?>plugins/charts-flot/jquery.flot.min.js'></script>
<script type='text/javascript' src='<?php echo URL_ADMIN;?>plugins/charts-flot/jquery.flot.resize.min.js'></script>
<script type='text/javascript' src='<?php echo URL_ADMIN;?>plugins/charts-flot/jquery.flot.orderBars.min.js'></script>
<script type='text/javascript' src='<?php echo URL_ADMIN;?>plugins/pulsate/jQuery.pulsate.min.js'></script>
<script type='text/javascript' src='<?php echo URL_ADMIN;?>demo/demo-index.js'></script>
<script type='text/javascript' src='<?php echo URL_ADMIN;?>plugins/form-multiselect/js/jquery.multi-select.min.js'></script>
<script type='text/javascript' src='<?php echo URL_ADMIN;?>assets/plugins/quicksearch/jquery.quicksearch.min.js'></script>
<script type='text/javascript' src='<?php echo URL_ADMIN;?>assets/plugins/form-typeahead/typeahead.min.js'></script>
<script type='text/javascript' src='<?php echo URL_ADMIN;?>plugins/form-autosize/jquery.autosize-min.js'></script>
<script type='text/javascript' src='<?php echo URL_ADMIN;?>plugins/form-colorpicker/js/bootstrap-colorpicker.min.js'></script>
<script type='text/javascript' src='<?php echo URL_ADMIN;?>plugins/jqueryui-timepicker/jquery.ui.timepicker.min.js'></script>
<script type='text/javascript' src='<?php echo URL_ADMIN;?>plugins/form-daterangepicker/daterangepicker.min.js'></script>
<script type='text/javascript' src='<?php echo URL_ADMIN;?>plugins/form-datepicker/js/bootstrap-datepicker.js'></script>
<script type='text/javascript' src='<?php echo URL_ADMIN;?>plugins/form-daterangepicker/moment.min.js'></script>
<script type='text/javascript' src='<?php echo URL_ADMIN;?>plugins/form-ckeditor/ckeditor.js'></script>
<script type='text/javascript' src='<?php echo URL_ADMIN;?>plugins/form-jasnyupload/fileinput.min.js'></script>
<script type='text/javascript' src='<?php echo URL_ADMIN;?>plugins/form-tokenfield/bootstrap-tokenfield.min.js'></script>
<script type='text/javascript' src='<?php echo URL_ADMIN;?>demo/demo-formcomponents.js'></script>

</body>
</html>