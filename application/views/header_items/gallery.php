<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


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
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/wedlio.css');?>" media="all"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/dashboard.css');?>" media="all"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/gallery.css');?>" media="all"/>


  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->




<body>
  <div class="top-bar">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="<?php echo base_url('index.php/Home/index');?>"><img src="<?php echo $this->config->item('base_url'); ?>/img/assets/wedlio_logo.png" class="responsive"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="top-nav navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li><a href="<?php echo base_url('index.php/Home/PlanningTools');?>"><div class="dropdown">
                <button class="dropbtn">planning tools</button>
                <div class="dropdown-content">
                  <a href="#">Link 1</a>
                  <a href="#">Link 2</a>
                  <a href="#">Link 3</a>
                </div>
              </div></a></li>

          <li><a href="<?php echo base_url('index.php/Home/WeddingVision');?>"><div class="dropdown">
                <button class="dropbtn">wedding vision</button>
                <div class="dropdown-content">
                  <a href="#">Link 1</a>
                  <a href="#">Link 2</a>
                  <a href="#">Link 3</a>
                </div>
              </div></a></li>
          <li><a href="<?php echo base_url('index.php/Home/LocalVendors');?>"><div class="dropdown">
                <button class="dropbtn">local vendors</button>
                <div class="dropdown-content">
                  <a href="<?php echo base_url('index.php/Home/WeddingPlanners');?>">Wedding Planners</a>
                  <a href="<?php echo base_url('index.php/Home/ReceptionVenues');?>">Reception Venues</a>
                  <a href="<?php echo base_url('index.php/Home/Videographers');?>">Videographers</a>
                  <a href="<?php echo base_url('index.php/Home/Photographers');?>">Photographers</a>
                  <a href="<?php echo base_url('index.php/Home/BridalSalons');?>">Bridal Salons</a>
                  <a href="<?php echo base_url('index.php/Home/DJs');?>">DJs</a>
                  <a href="<?php echo base_url('index.php/Home/WeddingBands');?>">Wedding Bands</a>
                  <a href="<?php echo base_url('index.php/Home/Rentals');?>">Rentals</a>
                </div>
              </div></a></li>

          <li><a href="<?php echo base_url('index.php/Home/Gallery');?>"><div class="dropdown">
                <button class="dropbtn">gallery</button>
                <div class="dropdown-content">
                  <a href="#">Link 1</a>
                  <a href="#">Link 2</a>
                  <a href="#">Link 3</a>
                </div>
              </div></a></li>

          <li><a href="<?php echo base_url('index.php/Home/Budgeter');?>"><div class="dropdown">
                <button class="dropbtn">budgeter</button>
                <div class="dropdown-content">
                  <a href="#">Link 1</a>
                  <a href="#">Link 2</a>
                  <a href="#">Link 3</a>
                </div>
              </div></a></li>
        </ul>
          <a href="<?php echo base_url('index.php/Home/Login');?>"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button></a>

          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" type="button" data-toggle="modal" data-target="#myModal">Sign Up</button>
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
    
            <!-- Modal content-->
              <div class="modal-content">
        
                <div class="modal-body">
                  <p>Customer Or Vendor</p>
                  <div style="padding-left:150px">
                    <a href="<?php echo base_url('index.php/Home/CustomerSignUp');?>"><button type="button" class="btn btn-success" >Customer</button></a>
                    <a href="<?php echo base_url('index.php/Home/VenderSignUp');?>"><button type="button" class="btn btn-success">Vendor</button></a>
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
  <i class="fab fa-angellist"></i>






<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('nature')"> Nature</button>
  <button class="btn" onclick="filterSelection('cars')"> Cars</button>
  <button class="btn" onclick="filterSelection('people')"> People</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column nature">
    <div class="content">
      <img src="/w3images/mountains.jpg" alt="Mountains" style="width:100%">
      <h4>Mountains</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="/w3images/lights.jpg" alt="Lights" style="width:100%">
      <h4>Lights</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="/w3images/nature.jpg" alt="Nature" style="width:100%">
      <h4>Forest</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  
  <div class="column cars">
    <div class="content">
      <img src="/w3images/cars1.jpg" alt="Car" style="width:100%">
      <h4>Retro</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="/w3images/cars2.jpg" alt="Car" style="width:100%">
      <h4>Fast</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="/w3images/cars3.jpg" alt="Car" style="width:100%">
      <h4>Classic</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>

  <div class="column people">
    <div class="content">
      <img src="/w3images/people1.jpg" alt="Car" style="width:100%">
      <h4>Girl</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column people">
    <div class="content">
    <img src="/w3images/people2.jpg" alt="Car" style="width:100%">
      <h4>Man</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column people">
    <div class="content">
    <img src="/w3images/people3.jpg" alt="Car" style="width:100%">
      <h4>Woman</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>


