<?php 
	include('../includes/dbcon.php');

	$query2 = "SELECT * FROM crew INNER JOIN rank ON crew.rank_id = rank.rank_id INNER JOIN ship WHERE crew.ship_id = ship.ship_id";
	$result2 = mysqli_query($db,$query2);
	$crew = mysqli_fetch_assoc($result2);

	$query3 = "SELECT * FROM rank";
	$result3 = mysqli_query($db,$query3);
	$rank = mysqli_fetch_assoc($result3);

	$query4 = "SELECT * FROM ship";
	$result4 = mysqli_query($db,$query4);
	$ship = mysqli_fetch_assoc($result4);



 if (isset($_POST['add_crew'])) {
 	$firstname = $_POST['fname'];
 	$lastname = $_POST['lname'];
 	$rank = $_POST['rank'];
 	$ship = $_POST['ship'];
 	

 	$insert_det = "INSERT INTO `crew`( `fname`, `surname`, `rank`, `ship_id`) VALUES ('$firstname','$lastname','$rank','$ship')"
 	;
	$result6 = mysqli_query($db,$insert_det);

 }

 if (isset($_POST['save_edit'])) {
		
		$crew_id = $_POST['the_id'];
		$fname = $_POST['upd_fname'];
		$lname = $_POST['upd_lname'];
		$rankk = $_POST['upd_rank'];
		$shipp = $_POST['upd_ship'];

		$sql2 = "UPDATE `crew` SET `fname`='$fname', `surname`='$lname', `rank_id`='$rankk', `ship_id`='$shipp' WHERE 'crew_id' = '$crew_id'";
		mysqli_query($db, $sql2);

		echo '<script> window.location.href="crew.php";</script>';
	}

	if (isset($_POST['back_edit'])) {
		
		echo '<script> window.location.href="crew.php";</script>';
	}


 ?>
 <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>