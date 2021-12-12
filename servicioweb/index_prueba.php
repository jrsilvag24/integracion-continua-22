<?php
	//create connection database
	$serverName = "basededatos:3306";
	$userName = "myuser";
	$pass="welcome1";
	$conn = mysqli_connect($serverName,$userName,$pass);
	//check connection
	if(!$conn){
		die("Connection failed" . mysqli_connect_error());
	}
	echo "Connection success";
?>