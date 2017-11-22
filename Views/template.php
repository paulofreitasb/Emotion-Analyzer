
<link href="<?php echo DEFAULT_URL."/Assets"; ?>/css/maps/jquery-jvectormap-2.0.3.css" rel="stylesheet">

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Emotion Analyzer</title>

  <!-- Bootstrap -->
  <link href="<?php echo DEFAULT_URL."/Assets"; ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?php echo DEFAULT_URL."/Assets"; ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?php echo DEFAULT_URL."/Assets"; ?>/vendors/nprogress/nprogress.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="<?php echo DEFAULT_URL."/Assets"; ?>/build/css/custom.min.css" rel="stylesheet">



  <!-- iCheck -->
  <link href="<?php echo DEFAULT_URL."/Assets"; ?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

  <!-- bootstrap-progressbar -->
  <link href="<?php echo DEFAULT_URL."/Assets"; ?>/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <!-- JQVMap -->
  <link href="<?php echo DEFAULT_URL."/Assets"; ?>/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
  <!-- bootstrap-daterangepicker -->
  <link href="<?php echo DEFAULT_URL."/Assets"; ?>/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">





</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Emotion Analyzer</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="<?php echo DEFAULT_URL."/Assets"; ?>/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>Paulo Freitas</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="index.html">Dashboard</a></li>
                    <li><a href="index2.html">Dashboard2</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="<?php echo DEFAULT_URL."/Assets"; ?>/images/img.jpg" alt="">Paulo Freitas
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <!---
                  <li><a href="javascript:;"> Profile</a></li>
                  <li>
                  <a href="javascript:;">
                  <span class="badge bg-red pull-right">50%</span>
                  <span>Settings</span>
                </a>
              </li>
              <li><a href="javascript:;">Help</a></li>
            -->
            <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
          </ul>
        </li>

        <li role="presentation" class="dropdown">
          <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-envelope-o"></i>
            <span class="badge bg-green">6</span>
          </a>
          <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
            <li>
              <a>
                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                <span>
                  <span>John Smith</span>
                  <span class="time">3 mins ago</span>
                </span>
                <span class="message">
                  Film festivals used to be do-or-die moments for movie makers. They were where...
                </span>
              </a>
            </li>
            <li>
              <div class="text-center">
                <a>
                  <strong>See All Alerts</strong>
                  <i class="fa fa-angle-right"></i>
                </a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</div>
<!-- /top navigation -->


<?php
$this->loadViewInTemplate($viewName, $viewData);
?>






<!-- footer content -->
<footer>
  <div class="pull-right">
    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
  </div>
  <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>

<!-- jQuery -->
<script src="<?php echo DEFAULT_URL."/Assets"; ?>/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo DEFAULT_URL."/Assets"; ?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo DEFAULT_URL."/Assets"; ?>/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?php echo DEFAULT_URL."/Assets"; ?>/vendors/nprogress/nprogress.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?php echo DEFAULT_URL."/Assets"; ?>/build/js/custom.min.js"></script>



<!-- Chart.js -->
<script src="<?php echo DEFAULT_URL."/Assets"; ?>/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="<?php echo DEFAULT_URL."/Assets"; ?>/vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="<?php echo DEFAULT_URL."/Assets"; ?>/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="<?php echo DEFAULT_URL."/Assets"; ?>/vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="<?php echo DEFAULT_URL."/Assets"; ?>/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="<?php echo DEFAULT_URL."/Assets"; ?>/vendors/Flot/jquery.flot.js"></script>
<script src="<?php echo DEFAULT_URL."/Assets"; ?>/vendors/Flot/jquery.flot.pie.js"></script>
<script src="<?php echo DEFAULT_URL."/Assets"; ?>/vendors/Flot/jquery.flot.time.js"></script>
<script src="<?php echo DEFAULT_URL."/Assets"; ?>/vendors/Flot/jquery.flot.stack.js"></script>
<script src="<?php echo DEFAULT_URL."/Assets"; ?>/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="<?php echo DEFAULT_URL."/Assets"; ?>/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="<?php echo DEFAULT_URL."/Assets"; ?>/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="<?php echo DEFAULT_URL."/Assets"; ?>/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="<?php echo DEFAULT_URL."/Assets"; ?>/vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="<?php echo DEFAULT_URL."/Assets"; ?>/vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="<?php echo DEFAULT_URL."/Assets"; ?>/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="<?php echo DEFAULT_URL."/Assets"; ?>/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?php echo DEFAULT_URL."/Assets"; ?>/vendors/moment/min/moment.min.js"></script>
<script src="<?php echo DEFAULT_URL."/Assets"; ?>/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>


<!-- morris.js -->
<script src="<?php echo DEFAULT_URL."/Assets"; ?>/vendors/raphael/raphael.min.js"></script>
<script src="<?php echo DEFAULT_URL."/Assets"; ?>/vendors/morris.js/morris.min.js"></script>






</body>
</html>
