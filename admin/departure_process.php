<?php
	
	$sql2 = "SELECT * FROM departure INNER JOIN ship ON departure.ship_id = ship.ship_id INNER JOIN route WHERE ship.route_id = route.route_id";
	$res2 = mysqli_query($db, $sql2);
	$show_ship2 = mysqli_fetch_assoc($res2);

	$sql = "SELECT * FROM ship INNER JOIN route WHERE ship.route_id = route.route_id";
	$res = mysqli_query($db, $sql);
	$show_ship = mysqli_fetch_assoc($res);

	if (isset($_POST['save_ship'])) {

		$dep = $_POST['departure'];
		
		$sql33 = "SELECT * FROM departure WHERE `ship_id` = '$dep'";
		$result33 = mysqli_query($db, $sql33);
		$show_res = mysqli_fetch_assoc($result33);

		if (mysqli_num_rows($result33) == 1) {
			
			echo "<script>alert('Existing ship')</script>";
		}
		else
		{
			
			$sql1 = "INSERT INTO `departure`(`ship_id`) VALUES ('$dep')";
			mysqli_query($db, $sql1);
			header('location: departure.php');
		}
	}
	if (isset($_POST['remove'])) {

		$deps = $_POST['idd'];
		
		$sql55 = "DELETE FROM `departure` WHERE departure_id = '$deps' ";
		mysqli_query($db, $sql55);

		echo '<script> window.location.href="departure.php";</script>';


	}
?>