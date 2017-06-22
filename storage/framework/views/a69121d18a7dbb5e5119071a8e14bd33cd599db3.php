<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Area</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        
        <link href="<?php echo e(URL::to('src/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(URL::to('src/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(URL::to('src/css/ionicons.min.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(URL::to('src/css/morris/morris.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(URL::to('src/css/jvectormap/jquery-jvectormap-1.2.2.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(URL::to('src/css/fullcalendar/fullcalendar.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(URL::to('src/css/daterangepicker/daterangepicker-bs3.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(URL::to('src/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(URL::to('src/css/AdminLTE.css')); ?>" rel="stylesheet" type="text/css" />
        
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <?php echo $__env->make('admin/includes/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
        
        <div class="wrapper row-offcanvas row-offcanvas-left">
            
            <?php echo $__env->make('admin/includes/left_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php echo $__env->make('admin/includes/view_channels', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        
        
        <script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

        
        <script src="<?php echo e(URL::to('src/js/jquery-ui-1.10.3.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(URL::to('src/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(URL::to('src/js/plugins/morris/morris.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(URL::to('src/js/plugins/sparkline/jquery.sparkline.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(URL::to('src/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(URL::to('src/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(URL::to('src/js/plugins/fullcalendar/fullcalendar.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(URL::to('src/js/plugins/jqueryKnob/jquery.knob.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(URL::to('src/js/plugins/daterangepicker/daterangepicker.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(URL::to('src/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(URL::to('src/js/plugins/iCheck/icheck.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(URL::to('src/js/AdminLTE/app.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(URL::to('src/js/AdminLTE/dashboard.js')); ?>" type="text/javascript"></script>

    </body>
</html>