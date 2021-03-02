
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="assets/images/favicon.png" type="image/ico" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <style>
  body {
    margin: 0;
    padding: 0;
    height: 100%;
    background-image: url("assets/images/bck.jpg") !important;
    background-size: cover;
    background-attachment: fixed;
  }
  </style>

    <title> 2A (AKHLAK & AKADEMIK): VISUAL REWARD SYSTEM </title>

    <!-- Bootstrap -->
    <link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="assets/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="assets/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
            <center>
            &nbsp; <a href="main.php" class="fa fa-mortar-board fa-2x" style="color:#33F3FF;"><span><font size="2" color="white" face="Helvetica Neue">2A (AKHLAK & AKADEMIK): VISUAL REWARD SYSTEM</font></span></a>
            </center>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="assets/images/tehe.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <h2><span>Welcome to 2A4U 😄</span></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="main.php"><i class="fa fa-home"></i> Home <span class="fa fa-chevron"></span></a>
                  </li>
                  <li><a href="main.php?page=chore"><i class="fa fa-file-image-o"></i> Suitable Chores <span class="fa fa-chevron"></span></a>
                  </li>
                  <li><a href="#"><i class="fa fa-calendar"></i> Kids Performance <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      
                      <li><a href="main.php?page=show_per">Show Performance</a></li>
                      <li><a href="main.php?page=add_per">Add Task</a></li>
                    </ul>
                  </li>
                  <li><a href="#"><i class="fa fa-gift"></i> Reward <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="main.php?page=show_rew">View Reward</a></li>
                      <li><a href="main.php?page=add_rew">Add Reward</a></li>
                    </ul>
                    <li><a href="#"><i class="fa fa-gamepad"></i> Game <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="main.php?page=math_game">Math Game</a></li>
                        <li><a href="main.php?page=scram_game">Word Game</a></li>
                      </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" >
                  <a href="#" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="assets/images/tehe.png" alt="">Profile & Log Out
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="main.php?page=edit_pro"> Profile</a>
                    <a class="dropdown-item"  href="index.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>

        <div class="right_col" role="main">
      <?php
      $queries = array();
      parse_str($_SERVER['QUERY_STRING'], $queries);
      error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
      switch ($queries['page']) {
      	case 'show_per':
      		# code...
      		include 'show.php';
      		break;
      	case 'add_per':
      		# code...
      		include 'add.php';
      		break;
        case 'edit_per':
        		# code...
        	include 'edit.php';
        	break;
        case 'edit_per_save':
          		# code...
          include 'edit.php';
          break;
        case 'show_rew':
          // code...
          include 'showrew.php';
          break;
        case 'add_rew':
          // code...
          include 'addrew.php';
          break;
        case 'edit_rew':
          		# code...
          	include 'edit_rew.php';
          	break;
        case 'edit_rew_save':
              		# code...
              include 'edit_rew.php';
              break;
        case 'chore':
          // code...
          include 'chores.html';
          break;
        case 'edit_pro':
            // code...
            include 'profile.php';
            break;
        case 'math_game':
          // code...
          include 'maths.html';
          break;
        
        case 'scram_game':
          // code...
          include 'scram.html';
          break;
        default:
		          #code...
		      include 'home.php';
		      break;
        }
        ?>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            2A (AKHLAK & AKADEMIK): VISUAL REWARD SYSTEM
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="assets/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="assets/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="assets/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="assets/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="assets/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="assets/skycons/skycons.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="assets/js/custom.min.js"></script>

    <!-- Plugins -->
  <script src="assets/js/scrollreveal.min.js"></script>
  <script src="assets/js/waypoints.min.js"></script>
  <script src="assets/js/jquery.counterup.min.js"></script>
  <script src="assets/js/imgfix.min.js"></script>




  </body>
</html>
