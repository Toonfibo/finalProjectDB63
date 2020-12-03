<?php
$servername = "localhost";
$username = "root";
$password = "123456789";
$dbname = "aquetic";
	$connect = mysqli_connect($servername, $username, $password, $dbname);
	if (mysqli_connect_error($connect)) 
	{
		echo "Failed to connect" ;
	}
?>