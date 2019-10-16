<div class="container">

	<h1>Login</h1>
	<?php echo form_open("sign_up/RegisterUser")  ?>
	  <div class="form-group">
	    <label for="email">Email address:</label>
	    <input type="email" class="form-control" id="email">
	  </div>
	  <div class="form-group">
	    <label for="pwd">Password:</label>
	    <input type="password" class="form-control" id="pwd">
	  </div>
	  <div class="checkbox">
	    <label><input type="checkbox">Remember me</label>
	  </div>
	  <button type="submit" class="btn btn-default">Submit</button>
	<? form_close() ?>
	
</div>
