<?php

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

							echo "Verified";
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