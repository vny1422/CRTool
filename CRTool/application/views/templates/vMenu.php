<body class="hold-transition skin-blue sidebar-mini">
      <!--<div class="se-pre-con"></div>-->
      <script type="text/javascript">
        $(window).load(function() {
    // Animate loader off screen
          $(".se-pre-con").fadeOut("slow");;
        });
      </script>
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="./cHalamanUtama" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>CR</b>M</span>
      <!-- logo for regular state and mobile devices 
      <span class="logo-lg"><b>Admin</b>LTE</span>-->
      <span class="logo-lg"><b>CR</b>Monitoring</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="label label-warning">4</span>
              <span class="glyphicon glyphicon-user"></span> 
              <span class="hidden-xs"><?php echo $username; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header" style="height: 75px;">
                <p>
                  <strong><?php echo $fullName; ?></strong>
                  <small><?php echo $email; ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body" style="height: 100px;">
                        <a href="">
                            <i class="fa fa-warning text-yellow"></i>5's WARNING
                        </a>  
                    
                        <a href="">
                            <i class="fa fa-close text-red"></i>4's BAD ACHIEVEMENT 
                        </a>
                  
                  
                <!--<div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                  <a href="cLogin" class="btn btn-danger btn-block" style="color: white;">LOG OUT</a>
                <!--<div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>-->
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <ul class="sidebar-menu">
        <li class="active treeview">
          <a href="./cAchievement">
            <i class="fa fa-trophy text-yellow"></i> <span>ACHIEVEMENT</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="./cAchievement"><i class="fa fa-circle-o"></i>TABLE</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i>CHART</a></li>
          </ul>
        </li>
        <li><a href="./cSalesOut"><i class="fa fa-area-chart text-green"></i> <span>SALES OUT</span></a></li>
        <li class="header" style="text-align: center;font-size: 1.5em;">CR'S STATUS</li>
        <li ><i class="fa fa-circle-o text-green"></i> <span>ONLINE</span></li>
        <li style="text-align: center"><i class="fa fa-circle-o text-red"></i> <span>OFFLINE</span></li>
        <li style="text-align: center"><i class="fa fa-warning text-yellow"></i> <span>WARNING</span></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>