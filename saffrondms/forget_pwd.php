

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
    
<head>
	<title>DMS LOGIN</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="img/logo.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">					
					<form action="forget_pwd_core.php" method="POST">
						<?php
						if(isset($_REQUEST["pass_not_match"])){
							
								echo "<font color='red'>Password not match!</font>";	


							}
						if(isset($_REQUEST["notfound"])){
							
								echo "<font color='red'>Email address not found!</font>";	


							}

							
						
					?>		
						
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" class="form-control input_user" value="" placeholder="Your username" required="">
						</div>
						<!-- <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="mobile" class="form-control input_user" value="" placeholder="Your mobile no" required="">
						</div> -->
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="npassword" class="form-control input_pass" value="" placeholder="New Password" required="">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="cpassword" class="form-control input_pass" value="" placeholder="Confirm password" required="">
						</div>
												
							<div class="d-flex justify-content-center mt-2 login_container">
				 	<button type="submit" name="signup" class="btn login_btn">Change Password</button>
				   </div>
					</form>
				</div>					
				<div>								
					<div class="d-flex justify-content-center links">
						Don't have an account? <a href="signup.php" class="ml-2">Sign Up</a>
					</div>
				<!-- 	<div class="d-flex justify-content-center links">
						<a href="#">Forgot your password?</a>
					</div> -->
				</div>
			</div>
		</div>
	</div>	
</body>


</html>

<?php 
if (isset($_COOKIE["CurrentUser"])) {
	
	header("location: index.php");
}

include 'functions.php';
?>