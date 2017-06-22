<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Area</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>

    <link href="<?php echo e(URL::to('src/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::to('src/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::to('src/css/ionicons.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::to('src/css/morris/morris.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::to('src/css/jvectormap/jquery-jvectormap-1.2.2.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::to('src/css/fullcalendar/fullcalendar.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::to('src/css/daterangepicker/daterangepicker-bs3.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::to('src/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::to('src/css/AdminLTE.css')); ?>" rel="stylesheet" type="text/css" />

    <!--  NEW CSS FOR DataTables  -->
    <link href="<?php echo e(URL::to('dataTables/bower_components/metisMenu/dist/metisMenu.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::to('dataTables/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::to('dataTables/bower_components/datatables-responsive/css/dataTables.responsive.css')); ?>" rel="stylesheet" type="text/css" />
    <style>
        .search-form .form-group {
            float: right !important;
            transition: all 0.35s, border-radius 0s;
            width: 32px;
            height: 32px;
            background-color: #fff;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
            border-radius: 25px;
            border: 1px solid #ccc;
        }
        .search-form .form-group input.form-control {
            padding-right: 20px;
            border: 0 none;
            background: transparent;
            box-shadow: none;
            display:block;
        }
        .search-form .form-group input.form-control::-webkit-input-placeholder {
            display: none;
        }
        .search-form .form-group input.form-control:-moz-placeholder {
            /* Firefox 18- */
            display: none;
        }
        .search-form .form-group input.form-control::-moz-placeholder {
            /* Firefox 19+ */
            display: none;
        }
        .search-form .form-group input.form-control:-ms-input-placeholder {
            display: none;
        }
        .search-form .form-group:hover,
        .search-form .form-group.hover {
            width: 100%;
            border-radius: 4px 25px 25px 4px;
        }
        .search-form .form-group span.form-control-feedback {
            position: absolute;
            top: -1px;
            right: -2px;
            z-index: 2;
            display: block;
            width: 34px;
            height: 34px;
            line-height: 34px;
            text-align: center;
            color: #3596e0;
            left: initial;
            font-size: 14px;
        }
    </style>


</head>
<body class="skin-blue pace-done fixed">
<!-- header logo: style can be found in header.less -->
<?php echo $__env->make('admin/includes/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<div class="wrapper row-offcanvas row-offcanvas-left">

    <?php echo $__env->make('admin/includes/left_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('admin/includes/view_images', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div><!-- ./wrapper -->

<!-- add new calendar event modal -->


<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js" type="text/javascript"></script>


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



<!--  NEW JS For DataTables   -->
<script src="<?php echo e(URL::to('dataTables/bower_components/jquery/dist/jquery.min.js')); ?>" type="text/javascript"></script>


<script src="https://code.jquery.com/jquery-2.1.3.min.js" type="text/javascript"></script>

<script src="<?php echo e(URL::to('dataTables/bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::to('dataTables/bower_components/metisMenu/dist/metisMenu.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::to('dataTables/bower_components/datatables/media/js/jquery.dataTables.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::to('dataTables/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::to('dataTables/dist/js/sb-admin-2.js')); ?>" type="text/javascript"></script>

<script>
    $(document).ready(function () {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>


<script type="text/javascript">
    $("#selectall").on("click", function ()
    {
        $(".items").prop('checked', true);
        $(this).hide(); $("#unselectall").show();
    });

    $("#unselectall").on("click", function ()
    {
        $(".items").prop('checked', false);
        $(this).hide(); $("#selectall").show();
    });

</script>

</body>
</html>