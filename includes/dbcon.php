<?php
	
	if (session_status() == PHP_SESSION_NONE) {
    	session_start();
	}

	$host = "localhost:3307";
	$user = "root";
	$pass = "";
	$database = "neust_one";

	$db = mysqli_connect($host,$user,$pass,$database);
?>