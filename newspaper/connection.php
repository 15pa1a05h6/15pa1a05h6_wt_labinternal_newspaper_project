<?php 
	$servername ="localhost";
	$username="root";
	$password="vishnu123";
	$db="news";
	$conn=mysqli_connect($servername, $username ,$password) or die("connection failed: ".mysqli_connect());
	//echo "connection establised";
	mysqli_select_db($conn,$db);
?>

