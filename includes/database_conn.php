<?php 
	$hostname="";
	$username="";
	$password="";
	$database="";
	$conn=mysqli_init();
	
	if(!$conn) {
		die("mysqli_init failed!");
	}
	
	$conn = mysqli_connect($hostname ,$username ,$password ,$database);
	
	if(mysqli_connect_errno()) {
		die("Connection Error: "."[".mysqli_connect_errno()."] ".mysqli_connect_error());
	}else{
		//printf("Successful Connection!<br>Client Version: %d ", mysqli_get_client_version());
	}
?>