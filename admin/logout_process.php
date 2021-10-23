<?php

	if (isset($_POST['logout'])) {

		session_start();
		unset($_SESSION['user_log']);
		header("location: ../login.php");
	}
	
?>