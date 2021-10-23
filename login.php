<?php 
include('header_login.php');
 include('login_process.php');

 ?>
 <script src="https://www.google.com/recaptcha/api.js?render=6LfWiOMcAAAAAFj6DMhokE3gp2cvCHyklUN0AkUg"></script>
 <script>
        grecaptcha.ready(function() {
          grecaptcha.execute('6LfWiOMcAAAAAFj6DMhokE3gp2cvCHyklUN0AkUg', {action: 'contact'}).then(function(token) {
              var recaptchaResponse = document.getElementById('recaptchaResponse');
              console.log(recaptchaResponse);
              recaptchaResponse.value = token;
          });
        });
    </script>

 <body class="wew">	
	
<div class="logss">
	<div class="col-md-6 col-lg-4 offset-lg-4 offset-md-3 mt-5 home" >
    <div class=" ms-2 me-2 bg-light p-5 border shadow" >

        <form method="POST">
        	<legend class="mb-5 fs-1 text-center">Login</legend>

            <div class="mb-4">

            <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user-alt"></i></span>
             <input type="text" class="form-control" name="user" placeholder="Username/Email" value="<?php if(isset($user)){ echo $user; }?>">
            </div>

               
                
                <span id="user_error" class="text-danger form-text text-end float-end"><?php if(isset($user_error)){ echo $user_error; }?></span>
            </div>
            <div class="mb-4">
               <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fas fa-key"></i></span>
              <input type="password" class="form-control" name="pass" placeholder="Enter Password">
            </div>
               
                
                <span id="pass_error" class="text-danger form-text text-end float-end"><?php if(isset($pass_error)){ echo $pass_error; }?></span>
            </div>

            <input type="hidden" name="recaptcha_response" id="recaptchaResponse">

            <button type="submit" class="btn w-100 my-3 shadow wiw"   name="reg">Login</button>
            <p class="m-0"><a href="register.php" class="linkss" >Dont have an account?</a></p>
        </form>

    </div>
    
</div>
</div>
</body>
</html>

<script>
	if ( window.history.replaceState ) {
  		window.history.replaceState( null, null, window.location.href );
	}
</script>