<?php

	$find1 = "SELECT * FROM route";
	$res1 = mysqli_query($db,$find1);
	$show_route = mysqli_fetch_assoc($res1);

	$find2 = "SELECT * FROM ship INNER JOIN route WHERE ship.route_id = route.route_id";
	$res2 = mysqli_query($db,$find2);
	$show_ship = mysqli_fetch_assoc($res2);


	if (isset($_POST['save_ship'])) {

		$shipname = $_POST['shipname'];
		$speed = $_POST['speed'];
		$route = $_POST['route'];

		$ex_speed = explode(',', $speed);
		
		$sql = "SELECT * FROM `ship` WHERE `ship_name` = '$shipname' AND `speed` = '$ex_speed[1]'";
		$result = mysqli_query($db, $sql);
		$show_res = mysqli_fetch_assoc($result);

		if (mysqli_num_rows($result) == 1) {
			
			echo "<script>alert('Existing ship')</script>";
		}
		else
		{
			
			$sql1 = "INSERT INTO `ship`(`ship_name`, `speed`, `knots`, `route_id`) VALUES ('$shipname','$ex_speed[1]','$ex_speed[0]','$route')";
			mysqli_query($db, $sql1);
			header('location: ship.php');
		}
	}

	if (isset($_POST['save_edit'])) {
		
		$ship_id = $_POST['the_id'];
		$shp_name = $_POST['upd_shipname'];
		$rout = $_POST['upd_route'];
		$speeed = $_POST['upd_speed'];

		$expl_speedd = explode(',', $speeed);

		$sql2 = "UPDATE `ship` SET `ship_name`='$shp_name',`speed`='$expl_speedd[1]',`knots`='$expl_speedd[0]',`route_id`='$rout' WHERE ship_id = '$ship_id'";
		mysqli_query($db, $sql2);

		echo '<script> window.location.href="ship.php";</script>';
	}

	if (isset($_POST['back_edit'])) {
		
		echo '<script> window.location.href="ship.php";</script>';
	}
?>