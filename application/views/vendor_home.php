<?php include_once("header.php")?>
  
<?php include_once("vendor_header.php")?>

<div id="slideshow" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo $this->config->item('base_url'); ?>/img/assets/wedding.jpg" class="responsive" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $this->config->item('base_url'); ?>/img/assets/wedding.jpg" class="responsive" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $this->config->item('base_url'); ?>/img/assets/wedding.jpg" class="responsive" alt="Third slide">
    </div>

  </div> <!-- carousel-inner -->
</div> <!-- slideshow -->

<br><h1><b><center>Top Wedding Vendor Categories</center></b></h1>

<div class="container-fluid">
  <div class="vendor_list">
    <div class="row">
      <div class="column">
        <div class="vendor-description">
          <img src="<?php echo $this->config->item('base_url'); ?>/img/assets/temp.jpg" class="responsive">
            <div class="centered">Centered</div>
        </div>
        <div class="vendor-description">
          <img src="<?php echo $this->config->item('base_url'); ?>/img/assets/temp.jpg" class="responsive">
            <div class="centered">Centered</div>
        </div>
      </div> <!-- column -->
      <div class="column">
        <div class="vendor-description">
          <img src="<?php echo $this->config->item('base_url'); ?>/img/assets/temp.jpg" class="responsive">
            <div class="centered">Centered</div>
        </div>
        <div class="vendor-description">
          <img src="<?php echo $this->config->item('base_url'); ?>/img/assets/temp.jpg" class="responsive">
            <div class="centered">Centered</div>
        </div>
      </div> <!-- column -->
      <div class="column">
        <div class="vendor-description">
          <img src="<?php echo $this->config->item('base_url'); ?>/img/assets/temp.jpg" class="responsive">
            <div class="centered">Centered</div>
        </div>
        <div class="vendor-description">
          <img src="<?php echo $this->config->item('base_url'); ?>/img/assets/temp.jpg" class="responsive">
            <div class="centered">Centered</div>
        </div>
      </div> <!-- column -->
      <div class="column">
        <div class="vendor-description">
          <img src="<?php echo $this->config->item('base_url'); ?>/img/assets/temp.jpg" class="responsive">
            <div class="centered">Centered</div>
        </div>
        <div class="vendor-description">
          <img src="<?php echo $this->config->item('base_url'); ?>/img/assets/temp.jpg" class="responsive">
            <div class="centered">Centered</div>
        </div>
      </div> <!-- column -->
    </div> <!-- row -->
  </div> <!-- vendor_list -->
</div> <!-- container-fluid -->

<?php include_once("footer.php")?>