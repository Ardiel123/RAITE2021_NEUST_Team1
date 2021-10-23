<?php
include('includes/dbcon.php');

		if($_SERVER['REQUEST_METHOD'] == 'POST'){

			$user_error = '';
			$pass_error = '';

			$user = '';
			$pass = '';

			if (empty($_POST['user'])) {

				$user_error = 'Username is required';

			}

			if (empty($_POST['pass'])) {

					$pass_error = 'Password is required';

			}else{

					$url ='https://www.google.com/recaptcha/api/siteverify';
					$secret = '6LfWiOMcAAAAAMLHebhCED8X-O9K5iXBrvYY1yMh';
					$response = $_POST['recaptcha_response'];

					$recaptcha = file_get_contents($url . '?secret=' . $secret . '&response=' .$response);
					$recaptcha = json_decode($recaptcha);

					if ($recaptcha->success == true) {
										
						if($recaptcha->score >= 0.5){

							$user = $_POST['user'];
							$pass = $_POST['pass'];

							$sql = "SELECT * FROM `admin` WHERE `username` = '$user' AND `password` = '$pass'";
							$res = mysqli_query($db, $sql);
							$get_acc = mysqli_fetch_assoc($res);

							if (mysqli_num_rows($res) == 1) {
								$_SESSION['user_log'] = $user;
								header('location: admin/index.php');
							}
							else
							{
								header("location: login.php");
							}

						}
						else{
							
							echo "Validation failed";
						}

					}else{
						
						echo "There is an error";
					}
				}

			
		
		}



?>