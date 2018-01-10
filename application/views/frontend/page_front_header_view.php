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

        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/dist/css/login.css">
        
<!--        <style type="text/css">
            #navbar-collapse li a {
                padding-left: 30px;
                padding-right: 30px;
            }
        </style>-->
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
        
        <script src="<?php echo BASE_URL; ?>assets/plugins/jquery.form.min.js"></script>
        <script src="<?php echo BASE_URL; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo BASE_URL; ?>assets/dist/js/global.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo BASE_URL; ?>assets/dist/js/app.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                baseurl = '<?php echo BASE_URL; ?>';
                setActiveMenu('<?php echo $menu; ?>','<?php echo $submenu; ?>');
            });
        </script>
        
    </head>
    <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
    <body class="hold-transition skin-blue layout-top-nav">
        <div class="wrapper">

            <header class="main-header">
                <nav class="navbar navbar-static-top">
                    <div class="container col-md-10 col-md-offset-1">
                        
                        <div class="navbar-header">
                            <a href="http://www.imigrasi.go.id/" target="_blank" class="navbar-brand"><img src="<?php echo base_url('assets/dist/img/logo/logo.png'); ?>" style="height: 25px;margin: -5px 7px 0px 0px;display: inline;" /> Direktorat Jenderal <b>Imigrasi</b></a>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>

                    </div>
                    <!-- /.container-fluid -->
                </nav>
            </header>
            <!-- Full Width Column -->
            <div class="content-wrapper">
                <div id="bg-box" class="container">
                    <?php $this->load->view($page); ?>
                </div>
                <!-- /.container -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer" style="padding: 7px 15px;">
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
        
        <?php $this->load->view('frontend/page_front_modal_view'); ?>
    </body>
</html>
