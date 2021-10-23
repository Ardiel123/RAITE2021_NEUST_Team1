<?php
	
	if (session_status() == PHP_SESSION_NONE) {
    	session_start();
	}

	$host = "localhost";
	$username = "root";
	$pass = "";
	$database = "neust_one";

	$db = mysqli_connect($host,$username,$pass,$database);
?>