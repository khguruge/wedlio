<div class="container">

	<h1>Sign Up</h1>

	<?php echo validation_errors(); ?>

	<?php echo form_open('sign_up/RegisterCustomer');  ?>

		<div class="form-group">
	    	<label for="email">First Name:</label>
	    	<input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
	  	</div>
	  	<div class="form-group">
	    	<label for="email">Last Name:</label>
	    	<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
	  	</div>

	  	
	  	<div class="form-group">
	    	<label for="email">Email address:</label>
	    	<input type="email" class="form-control" id="email" name="email" placeholder="Email">
	  	</div>

	  	<div class="form-group">
	    	<label for="pwd">Password:</label>
			<input type="password" class="form-control" id="password" name="password" placeholder="Password">
	  	</div>
	  	<div class="form-group">
	    	<label for="pwd">Confirm Password:</label>
			<input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
	  	</div>
	  	
	  	<button type="submit" class="btn btn-default">Submit</button>
	<? form_close(); ?>
	
</div>

