<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Paspor Online | Dirjen Imigrasi</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/plugins/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/font-awesome/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/ionicons/ionicons.min.css">
        <!-- Select2 -->
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/plugins/select2/select2.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/dist/css/skins/_all-skins.min.css">
        
        <link href="<?php echo BASE_URL; ?>assets/dist/img/logo/logo.png" rel="shortcut icon">
        <link href="<?php echo BASE_URL; ?>assets/dist/img/logo/logo.png" rel="bookmark icon">

        <style type="text/css">
            .sidebar-menu li { font-family: sans-serif; }
            .sidebar-menu li a { font-size: 10pt; }
            #menu6 a { color: #dd4b39 !important; }
        </style>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <!-- jQuery 2.2.0 -->
        <script src="<?php echo BASE_URL; ?>assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo BASE_URL; ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="<?php echo BASE_URL; ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        
        <script src="<?php echo BASE_URL; ?>assets/plugins/jquery.form.min.js"></script>
        <script src="<?php echo BASE_URL; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo BASE_URL; ?>assets/dist/js/global.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function(){
                baseurl = '<?php echo BASE_URL; ?>';
                setActiveMenu('<?php echo $menu; ?>','<?php echo $submenu; ?>');
            });
        </script>
        
    </head>
    <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
    <body class="hold-transition skin-blue-light fixed sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <!--<a href="http://www.imigrasi.go.id/" target="_blank" class="navbar-brand"><img src="<?php echo base_url('assets/dist/img/logo/logo.png'); ?>" style="height: 25px;margin: -5px 7px 0px 0px;display: inline;" /> Direktorat Jenderal <b>Imigrasi</b></a>-->
                <a href="../../index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">
                        <img src="<?php echo base_url('assets/dist/img/logo/logo.png'); ?>" style="height: 25px;margin: -5px 7px 0px 0px;display: inline;" />
                    </span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">
                        <img src="<?php echo base_url('assets/dist/img/logo/logo.png'); ?>" style="height: 25px;margin: -5px 7px 0px 0px;display: inline;" /> Ditjen <b>Imigrasi</b>
                    </span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"></a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Logout Button -->
                            <li class="bg-red-gradient">
                                <a href="#logout" data-toggle="modal" title="Logout ?"><i class="fa fa-power-off"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <!-- =============================================== -->

            <!-- Left side column. contains the sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header" style="font-size: 10pt;">Selamat Datang,</li>
                        <li class="header" style="padding-top: 0;padding-bottom: 20px;"><h5 style="margin: 0;font-family: sans-serif;">DEMO LOREM IPSUM</h5></li>
                        <li id="menu1"><a href="<?php echo base_url('beranda'); ?>"><i class="fa fa-home"></i>&nbsp; <span>Beranda</span></a></li>
                        <li id="menu2"><a href="<?php echo base_url('daftar_kanim'); ?>"><i class="fa fa-building-o"></i>&nbsp; <span>Daftar Kantor Imigrasi</span></a></li>
                        <li id="menu3"><a href="<?php echo base_url('daftar_pengajuan'); ?>"><i class="fa fa-list-ol"></i>&nbsp; <span>Daftar Pengajuan</span></a></li>
                        <li id="menu7"><a href="<?php echo base_url('verifikasi_pemohon'); ?>"><i class="fa fa-check-square"></i>&nbsp; <span>Verifikasi Pemohon</span></a></li>
                        <li id="menu4"><a href=""><i class="fa fa-file-text-o"></i>&nbsp; <span>Syarat & Ketentuan</span></a></li>
                        <li id="menu5"><a href=""><i class="fa fa-user"></i>&nbsp; <span>Profil</span></a></li>
                        <li id="menu6"><a href="#logout" data-toggle="modal" title="Logout ?" style="color: #fff;"><i class="fa fa-power-off"></i>&nbsp; <span>Keluar</span></a></li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- =============================================== -->

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1 style="font-family: sans-serif;">
                        <?php echo $halaman; ?>
                        <small><?php echo $subhalaman; ?></small>
                    </h1>
<!--                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Layout</a></li>
                        <li class="active">Fixed</li>
                    </ol>-->
                </section>

                <!-- Main content -->
                <section class="content">
                    <?php $this->load->view($page); ?>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <footer class="main-footer" style="padding: 10px 15px;">
                <div class="container" style="font-family: sans-serif;font-size: 9pt;">
                    <div class="pull-right hidden-xs">
                        <b>Version</b> 1.0
                    </div>
                    <strong>Copyright &copy; 2017 <a href="http://www.imigrasi.go.id/" target="_blank">Ditjen Imigrasi</a>.</strong> ALL rights
                    reserved.
                </div>
                <!-- /.container -->
            </footer>

        </div>
        <!-- ./wrapper -->
        
        <?php $this->load->view('backend/page_back_modal_view'); ?>

    </body>
    
</html>
