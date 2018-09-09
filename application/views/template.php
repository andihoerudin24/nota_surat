
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Forum | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">

        <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

        <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/morris.js/morris.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/jvectormap/jquery-jvectormap.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition skin-red sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="#" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b></b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b><?php echo $this->session->userdata('username'); ?></b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">

                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="hidden-xs"><?php echo $this->session->userdata('username') ?></span>
                                </a>
                                <ul class="dropdown-menu">

                                    <li class="user-footer">
                                        <div class="pull-right">
                                            <a href="<?php echo site_url('Dashboard/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>

                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->


                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <?php $level = $this->session->userdata('level'); ?>
                        <?php if ($level == 1): ?>
                            <li><a href="<?php echo site_url('Seksi') ?>"><i class="fa fa-user text-green"></i> <span>Seksi</span></a></li>
                            <li><a href="<?php echo site_url('Bidang') ?>"><i class="fa fa-check-square text-green"></i> <span>Bidang</span></a></li>
                            <li><a href="<?php echo site_url('Tembusan') ?>"><i class="fa fa-check-square text-green"></i> <span>Tembusan</span></a></li>
                            <li><a href="<?php echo site_url('Nota') ?>"><i class="fa fa-check-square text-green"></i> <span>Nota</span></a></li>

                        <?php elseif ($level == 2): ?>
                            <li><a href="<?php echo site_url('Nota') ?>"><i class="fa fa-check-square text-green"></i> <span> Nota</span></a></li>
                        <?php elseif ($level == 3): ?>
                            <li><a href="<?php echo site_url('Nota') ?>"><i class="fa fa-check-square text-green"></i> <span>Nota</span></a></li>
                            <li><a href="<?php echo site_url('Tembusan') ?>"><i class="fa fa-check-square text-green"></i> <span>Tembusan</span></a></li>

                        <?php elseif ($level == 4): ?>
                            <li><a href="<?php echo site_url('Nota') ?>"><i class="fa fa-check-square text-green"></i> <span>Nota</span></a></li>
                            <li><a href="<?php echo site_url('Tembusan') ?>"><i class="fa fa-check-square text-green"></i> <span>Tembusan</span></a></li>
                            <?php else: ?>
                            <li><a href="<?php echo site_url('Tembusan') ?>"><i class="fa fa-check-square text-green"></i> <span>Tembusan</span></a></li>

                        <?php endif; ?>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->


                <!-- Main content -->
                <section class="content">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->

                        </div>

                    </div>
                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="nav-tabs-custom">
                        <div class="row">

                            <?php echo $contents; ?>

                        </div>
                    </div>
                    <!-- /.content-wrapper -->


                    <!-- Control Sidebar -->

                    <!-- /.control-sidebar -->
                    <!-- Add the sidebar's background. This div must be placed
                         immediately after the control sidebar -->
                    <div class="control-sidebar-bg"></div>
            </div>
            <!-- ./wrapper -->

            <!-- jQuery 3 -->
            <script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
            <!-- jQuery UI 1.11.4 -->
            <script src="<?php echo base_url() ?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
                $.widget.bridge('uibutton', $.ui.button);
            </script>

            <script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

            <!-- DataTables -->
            <script src="<?php echo base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
            <script src="<?php echo base_url() ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

            <script src="<?php echo base_url() ?>assets/bower_components/raphael/raphael.min.js"></script>
            <script src="<?php echo base_url() ?>assets/bower_components/morris.js/morris.min.js"></script>
            <script src="<?php echo base_url() ?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
            <script src="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
            <script src="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
            <script src="<?php echo base_url() ?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
            <script src="<?php echo base_url() ?>assets/bower_components/moment/min/moment.min.js"></script>
            <script src="<?php echo base_url() ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
            <script src="<?php echo base_url() ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
            <script src="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
            <script src="<?php echo base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
            <script src="<?php echo base_url() ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
            <script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
            <script src="<?php echo base_url() ?>assets/dist/js/pages/dashboard.js"></script>
            <script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>

            <script>
                $(function () {
                    $('#example1').DataTable()
                    $('#example2').DataTable({
                        'paging': true,
                        'lengthChange': false,
                        'searching': false,
                        'ordering': true,
                        'info': true,
                        'autoWidth': false
                    })
                })
            </script>
            <script>
                CKEDITOR.replace('editor1');
            </script>

    </body>
</html>
