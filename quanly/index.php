<?php include_once("config.php"); ?>
<?php include_once("control/ctrl_login_check.php") ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | VLUTE</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <base href="<?php echo $vlute['HOST']; ?>/" />
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="plugin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="plugin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="plugin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="plugin/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" type="text/css" href="../css/animate.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugin/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugin/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugin/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Font -->
  <!--<link href="css/vendor/font-awesome.min.css" type="text/css" rel="stylesheet">
  <link href="css/font-awesome-4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">-->

  <!-- css -->
   <link rel="stylesheet" href="css/style.css">
  <!-- jQuery 3 -->
<script src="plugin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugin/bower_components/jquery-ui/jquery-ui.min.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini" style="min-height: 0%;">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">VLU</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>VLUTE</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../<?php echo $hinh_user; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $ten_user; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../<?php echo $hinh_user; ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $ten_user; ?>
                  <small></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="?p=suathanhvien" class="btn btn-default btn-flat">Hồ sơ</a>
                </div>
                <div class="pull-right">
                  <a href="control/ctrl_login_out.php" class="btn btn-default btn-flat">Đăng xuất</a>
                </div>
              </li>
            </ul>
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
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../<?php echo $hinh_user; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $ten_user; ?></p><!-- Tên người dùng -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <li class="" id="trangchu">
          <a href=".." target="_blank">
            <i class="fa fa-dashboard"></i><span>Trang chủ</span>
          </a>
        </li>
        <li class="treeview" id="baiviet">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Quản lý bài viết</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?p=thembai"><i class="fa fa-circle-o"></i> Thêm bài viết</a></li>
            <li><a href="?p=baiviet"><i class="fa fa-circle-o"></i> Tất cả bài viết</a></li>
          </ul>
        </li>
        <li class="treeview" id="thongtin">
          <a href="#">
            <i class="fa fa-globe"></i>
            <span>Thông tin Website</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
          </ul>
        </li>
        <li class="treeview" id="thongtin">
          <a href="#">
            <i class="fa fa-globe"></i>
            <span>Bố cục website</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?p=slider"><i class="fa fa-circle-o"></i> Slider</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Đơn vị trực thuộc</a></li>
          </ul>
        </li>
      <?php if ($quyen_user=='1') { ?>
        <li class="treeview" id="khoabomon">
          <a href="#">
            <i class="fa fa-graduation-cap"></i>
            <span>Quản lý khoa - bộ môn</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li><a href="?p=khoabomon"><i class="fa fa-circle-o"></i> Danh sách khoa - bộ môn</a></li> 
          </ul>
        </li>
        <li class="treeview" id="giaovien">
          <a href="#">
            <i class="fa fa-graduation-cap"></i>
            <span>Quản lý giáo viên</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li><a href="?p=giaovien"><i class="fa fa-circle-o"></i> Danh sách giáo viên</a></li> 
          </ul>
        </li>
        <li class="treeview" id="thanhvien">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Quản lý thành viên</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?p=themthanhvien"><i class="fa fa-circle-o"></i> Thêm thành viên</a></li>
             <li><a href="?p=thanhvien"><i class="fa fa-circle-o"></i> Danh sách thành viên</a></li> 
          </ul>
        </li>
      <?php } ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style=" background: url(../images/body-bg.png) rgb(247, 247, 247) repeat;padding-bottom: 10px;">
    <!-- Content Header (Page header) -->
    <?php 
      if(isset($_GET['p']) && $_GET['p']=='baiviet')
        include_once('control/ctrl_bai_viet.php');
      else if(isset($_GET['p']) && $_GET['p']=='thembai')
        include_once('control/ctrl_them_bai_viet.php');
      else if(isset($_GET['p']) && $_GET['p']=='suabai' && isset($_GET['id']))
        include_once('control/ctrl_sua_bai_viet.php');
      else if(isset($_GET['p']) && $_GET['p']=='thanhvien')
        include_once('control/ctrl_thanh_vien.php');
      else if(isset($_GET['p']) && $_GET['p']=='themthanhvien')
        include_once('control/ctrl_them_thanh_vien.php');
      else if(isset($_GET['p']) && $_GET['p']=='suathanhvien')
        include_once('control/ctrl_sua_thanh_vien.php');
      else if(isset($_GET['p']) && $_GET['p']=='slider')
        include_once('control/ctrl_slider.php');
      else if(isset($_GET['p']) && $_GET['p']=='giaovien')
        include_once('control/ctrl_giao_vien.php');
      else if(isset($_GET['p']) && $_GET['p']=='khoabomon')
        include_once('control/ctrl_khoa_bo_mon.php');
      else
        include_once("control/ctrl_trang_chu.php");
     ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0.beta</div>
    <strong>&copy; 2017 | <a href="https://fb.com/ly.ngothanh/" target="_blank">Ngô Thanh Lý</a></strong>
  </footer>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<script type="text/javascript">
  var userclick=1;
  $(document).ready(function() {
      $(".user-menu").click(function(){
        if(userclick==1){
          $(".user-menu").addClass("open");
          userclick=2;
          return;
        }
        else{
          $(".user-menu").removeClass("open");
          userclick=1;
          return;
        }
      });
  });
</script>
<!-- ./wrapper -->
<!-- Bootstrap 3.3.7 -->
<script src="plugin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="plugin/bower_components/raphael/raphael.min.js"></script>
<script src="plugin/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugin/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugin/bower_components/moment/min/moment.min.js"></script>
<script src="plugin/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="plugin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="plugin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="plugin/dist/js/demo.js"></script>
</body>
</html>
