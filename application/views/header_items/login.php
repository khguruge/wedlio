<div class="container">
	<?php
	if ($this->session->flashdata('msg')){
		echo "<h3>".$this->session->flashdata('msg')."</h3>";
	} 
?>	
	<h1>Login</h1>
	<?php echo form_open("login/CustomerLogin")  ?>
	  <div class="form-group">
	    <label for="email">Email address:</label>
	    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
	  </div>
	  <div class="form-group">
	    <label for="pwd">Password:</label>
	    <input type="password" class="form-control" id="pwd" name="password" placeholder="Password">
	  </div>
	  <div class="checkbox">
	    <label><input type="checkbox">Remember me</label>
	  </div>
	  <button type="submit" class="btn btn-default">Submit</button>
	<? form_close() ?>
	
</div>