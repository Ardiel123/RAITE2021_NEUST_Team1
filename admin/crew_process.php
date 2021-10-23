<?php 
	include('../includes/dbcon.php');

$query2 = "SELECT * FROM crew";
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
 	

 	$file = $_FILES['img']['name'];
		$tmp_name = $_FILES['img']['tmp_name'];

		$div = explode('.', $file);
		$ext = strtolower(end($div));
		$unique_name = md5($div[0].time()).'.'.$ext;

		$destination ="../img/".$unique_name;
		$destination1 = "img/".$unique_name;
		move_uploaded_file($tmp_name, $destination);


 	$insert_det = "INSERT INTO `crew`( `fname`, `surname`, `rank`, `image`, `ship_id`) VALUES ('$firstname','$lastname','$rank','$destination1','$ship')"
 	;
	$result6 = mysqli_query($db,$insert_det);

 }


 ?>
 <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>