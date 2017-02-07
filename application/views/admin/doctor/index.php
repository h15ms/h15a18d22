

<div id="page-content">
    <div id="wrap">


        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="<?php base_url() ?>/admin">Dashboard</a></li>
                <li>Doctors</li>
                <li class='active'><?php echo $headline; ?></li>
            </ol>

            <h1><?php echo $headline; ?></h1>
            <div class="options">
                <div class="btn-toolbar">
                    <a href='<?php base_url() ?>doctor/add' class="btn btn-success hidden-xs"><i class="fa fa-plus-circle"></i> Add Doctors</a>					           
                </div>
            </div>
        </div>
        <div class="container">



            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4><i class="fa fa-hospital-o"></i> <?php echo $headlines; ?></h4>

                        </div>
                        <div class="panel-body collapse in">                                  
<?php //print_r($hospitals); ?>
                            <div class="table-flipscroll table-responsive">
                                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-hover datatable" id="customer_table">
                                    <thead>
                                        <tr>
                                            <th style="width:auto;">#</th>
                                            <th style="width:auto;"> Type</th>
                                            <th style="width:auto;"> Name</th>
                                            <th style="width:auto;">Mobile</th>
                                            <th style="width:auto;">Email</th>
                                            <th style="width:auto;">Address</th>
                                            <th style="width:auto;" align="center">Action</th>						
                                        </tr>
                                    </thead>
                                    <tbody>

<?php $i = 1; foreach ($doctors['results'] as $doctor): ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $doctor->clinic_hospital_type; ?></td>
                                                <td><?php echo $doctor->first_name . ' ' . $doctor->last_name; ?></td>
                                                <td><?php echo $doctor->mobile; ?></td>
                                                <td><?php echo $doctor->email; ?></td>
                                                <td><?php echo $doctor->city . ' , ' . $doctor->state; ?></td>        
                                                <td align="center">
                                                    <a href="<?php echo base_url(); ?>admin/doctor/view/<?php echo $doctor->id; ?>"><i class="fa fa-user"></i></a>&nbsp;
                                                    <a href="<?php echo base_url(); ?>admin/doctor/edit/<?php echo $doctor->id; ?>"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr>
    <?php $i++;
endforeach;
  ?>
                                    </tbody>
                                </table>
                                 <p><?php echo $doctors['links'];// $links; ?></p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>




        </div> <!-- container -->




    </div> <!--wrap -->
</div> <!-- page-content -->
