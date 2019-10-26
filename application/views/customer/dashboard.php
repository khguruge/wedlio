<!DOCTYPE html>
<html>
<head>
	<title>dashboard</title>
</head>
<body>	

	<?php
	if ($this->session->flashdata('msg')){
		echo "<h3>".$this->session->flashdata('msg')."</h3>";
	} 
?>	

<?php 
echo $this->session->userdata('first_name');
?>



<h3>Dashboard</h3>
</body>
</html>