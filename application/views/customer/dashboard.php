<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/img/apple-icon.png');?>" media="all"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/img/favicon.png');?>" media="all"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/material-dashboard.css?v=2.1.1');?>" media="all"/>
  <!-- CSS Just for demo purpose, don't include it in your project -->
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/demo/demo.css');?>" media="all"/>

</head>

<body>
	<?php
	if (!($this->session->userdata('loggedin'))){
		redirect('Home/Login');
	}
	// if ($this->session->flashdata('msg')){
	// 	echo "<h3>".$this->session->flashdata('msg')."</h3>";
	// } 
?>

  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?php echo $this->config->item('base_url'); ?>/assets/img/sidebar-1.jpg">

      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="./dashboard.html">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./user.html">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./tables.html">
              <i class="material-icons">content_paste</i>
              <p>Table List</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./typography.html">
              <i class="material-icons">library_books</i>
              <p>Typography</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./icons.html">
              <i class="material-icons">bubble_chart</i>
              <p>Icons</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./notifications.html">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./rtl.html">
              <i class="material-icons">language</i>
              <p>RTL Support</p>
            </a>
          </li>
          <li class="nav-item active-pro ">
            <a class="nav-link" href="./upgrade.html">
              <i class="material-icons">unarchive</i>
              <p>Upgrade to PRO</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo base_url('index.php/login/CustomerLogout'); ?>">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

  <!--   Core JS Files   -->
  <script src="<?php echo $this->config->item('base_url'); ?>/assets/js/core/jquery.min.js"></script>
  <script src="<?php echo $this->config->item('base_url'); ?>/assets/js/core/popper.min.js"></script>
  <script src="<?php echo $this->config->item('base_url'); ?>/assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="<?php echo $this->config->item('base_url'); ?>/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  
  <!-- Chartist JS -->
  <script src="<?php echo $this->config->item('base_url'); ?>/assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo $this->config->item('base_url'); ?>/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo $this->config->item('base_url'); ?>/assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo $this->config->item('base_url'); ?>/assets/demo/demo.js"></script>
 
</body>

</html>






















<!-- <!DOCTYPE html>
<html>
<head>
	<title>dashboard</title>
</head>
<body>	

<?php
	if (!($this->session->userdata('loggedin'))){
		redirect('Home/Login');
	}



	if ($this->session->flashdata('msg')){
		echo "<h3>".$this->session->flashdata('msg')."</h3>";
	} 
?>	

<?php 
echo $this->session->userdata('first_name');
?>

<a href="<?php echo base_url('index.php/login/CustomerLogout'); ?>">Logout</a>



<h3>Dashboard</h3>
</body>
</html> -->