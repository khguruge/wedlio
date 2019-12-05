<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpinfo";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
if(!empty($_POST['rating']) && !empty($_POST['itemId'])){
	$itemId = $_POST['itemId'];
	$userID = 1234567;		
	$insertRating = "INSERT INTO item_rating (itemId, userId, ratingNumber, title, comments, created, modified) VALUES ('".$itemId."', '".$userID."', '".$_POST['rating']."', '".$_POST['title']."', '".$_POST["comment"]."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')";
	mysqli_query($conn, $insertRating) or die("database error: ". mysqli_error($conn));		
	echo "rating saved!";
}
?>