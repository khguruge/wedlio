<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/vendor_home.css');?>" media="all"/>


<body>
  <div class="top-bar">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="<?php echo base_url('index.php/Vendor/index');?>"><img src="<?php echo $this->config->item('base_url'); ?>/img/assets/wedlio_logo.png" class="responsive"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="top-nav navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li><a href="#"><div class="dropdown">
                <button class="dropbtn">planning tools</button>
                <div class="dropdown-content">
                  <a href="#">Link 1</a>
                  <a href="#">Link 2</a>
                  <a href="#">Link 3</a>
                </div>
              </div></a></li>

          <li><a href="#"><div class="dropdown">
                <button class="dropbtn">wedding vision</button>
                <div class="dropdown-content">
                  <a href="#">Link 1</a>
                  <a href="#">Link 2</a>
                  <a href="#">Link 3</a>
                </div>
              </div></a></li>
          <li><a href="<?php echo base_url('index.php/Vendor/index');?>"><div class="dropdown">
                <button class="dropbtn">local vendors</button>
                <div class="dropdown-content">
                  <a href="<?php echo base_url('index.php/Vendor/WeddingPlanners');?>">Wedding Planners</a>
                  <a href="<?php echo base_url('index.php/Vendor/ReceptionVenues');?>">Reception Venues</a>
                  <a href="<?php echo base_url('index.php/Vendor/Videographers');?>">Videographers</a>
                  <a href="<?php echo base_url('index.php/Vendor/Photographers');?>">Photographers</a>
                  <a href="<?php echo base_url('index.php/Vendor/BridalSalons');?>">Bridal Salons</a>
                  <a href="<?php echo base_url('index.php/Vendor/DJs');?>">DJs</a>
                  <a href="<?php echo base_url('index.php/Vendor/WeddingBands');?>">Wedding Bands</a>
                  <a href="<?php echo base_url('index.php/Vendor/Rentals');?>">Rentals</a>
                </div>
              </div></a></li>

          <li><a href="#"><div class="dropdown">
                <button class="dropbtn">gallery</button>
                <div class="dropdown-content">
                  <a href="#">Link 1</a>
                  <a href="#">Link 2</a>
                  <a href="#">Link 3</a>
                </div>
              </div></a></li>

          <li><a href="#"><div class="dropdown">
                <button class="dropbtn">budgeter</button>
                <div class="dropdown-content">
                  <a href="#">Link 1</a>
                  <a href="#">Link 2</a>
                  <a href="#">Link 3</a>
                </div>
              </div></a></li>
        </ul>
          <a href="<?php echo base_url('index.php/Vendor/Login');?>"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button></a>

          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" type="button" data-toggle="modal" data-target="#myModal">Sign Up</button>
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
    
            <!-- Modal content-->
              <div class="modal-content">
        
                <div class="modal-body">
                  <p>Customer Or Vendor</p>
                  <div style="padding-left:150px">
                    <a href="<?php echo base_url('index.php/Vendor/Login');?>"><button type="button" class="btn btn-success" >Customer</button></a>
                    <a href="<?php echo base_url('index.php/Vendor/SignUp');?>"><button type="button" class="btn btn-success">Vendor</button></a>
                  </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div> <!-- modal-footer -->
              </div> <!-- modal-content -->
      
            </div> <!-- modal-dialog -->
          </div> <!-- modal -->
      </div> <!-- top-nav -->
    </nav> <!-- navbar -->
  </div> <!-- top-bar -->