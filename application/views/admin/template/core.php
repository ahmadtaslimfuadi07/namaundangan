<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>assets/images/apple-icon.png">
        <link rel="icon" type="image/png" href="<?= base_url() ?>assets/images/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            My Admin
        </title>
        <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
        <!-- Bootstrap -->
        <link href="<?= base_url() ?>assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?= base_url() ?>assets/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="<?= base_url() ?>assets/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- jQuery custom content scroller -->
        <link href="<?= base_url() ?>assets/admin/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>
        <!-- bootstrap-daterangepicker -->
        <link href="<?= base_url() ?>assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <!-- bootstrap-datetimepicker -->
        <link href="<?= base_url() ?>assets/admin/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
        <!-- select2 -->
        <link href="<?= base_url() ?>assets/admin/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="<?= base_url() ?>assets/admin/css/custom.min.css" rel="stylesheet">
        <!-- bootstrap-progressbar -->
        <link href="<?= base_url() ?>assets/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
        
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <?= $_sidebar ?>
                <!-- top navigation -->
                <?= $_navbar ?>
                <!-- /top navigation -->
                <!-- page content -->
                <?= $_content ?>
                <!-- /page content -->
                <!-- footer content -->
                <?= $_footer ?>
                <!-- /footer content -->
            </div>
        </div>
        <!-- jQuery -->
        <script src="<?= base_url() ?>assets/admin/vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?= base_url() ?>assets/admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <!-- FastClick -->
        <script src="<?= base_url() ?>assets/admin/vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="<?= base_url() ?>assets/admin/vendors/nprogress/nprogress.js"></script>
        <!-- jQuery custom content scroller -->
        <script src="<?= base_url() ?>assets/admin/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
        <!-- bootstrap-progressbar -->
        <script src="<?= base_url() ?>assets/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <!-- iCheck -->
        <script src="<?= base_url() ?>assets/admin/vendors/iCheck/icheck.min.js"></script>
        <!-- Chart.js -->
        <script src="<?= base_url() ?>assets/admin/vendors/Chart.js/dist/Chart.min.js"></script>

        <script src="<?= base_url() ?>assets/admin/vendors/Flot/jquery.flot.js"></script>
        <script src="<?= base_url() ?>assets/admin/vendors/Flot/jquery.flot.pie.js"></script>
        <script src="<?= base_url() ?>assets/admin/vendors/Flot/jquery.flot.time.js"></script><!-- 
        <script src="<?= base_url() ?>assets/admin/vendors/Flot/jquery.flot.stack.js"></script>
        <script src="<?= base_url() ?>assets/admin/vendors/Flot/jquery.flot.resize.js"></script> -->
        <!-- Flot plugins -->
        <script src="<?= base_url() ?>assets/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
        <script src="<?= base_url() ?>assets/admin/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
        <script src="<?= base_url() ?>assets/admin/vendors/flot.curvedlines/curvedLines.js"></script>
        <script src="<?= base_url() ?>assets/admin/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?= base_url() ?>assets/admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="<?= base_url() ?>assets/admin/vendors/moment/min/moment.min.js"></script>
        <!-- bootstrap-datetimepicker -->    
        <script src="<?= base_url() ?>assets/admin/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
        <!-- DateJS -->
        <script src="<?= base_url() ?>assets/admin/vendors/DateJS/build/date.js"></script>
        <!-- Select2 -->
        <script src="<?= base_url() ?>assets/admin/vendors/select2/dist/js/select2.min.js"></script>
        <!-- Custom Theme Scripts -->
        <script src="<?= base_url() ?>assets/admin/vendors/pnotify/dist/pnotify.js"></script>
        <script src="<?= base_url() ?>assets/admin/vendors/pnotify/dist/pnotify.buttons.js"></script>
        <script src="<?= base_url() ?>assets/admin/vendors/pnotify/dist/pnotify.nonblock.js"></script>

        <script src="<?= base_url() ?>assets/admin/js/custom.js"></script>
        <?= $_jquery ?>
    </body>
</html>