<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="view/login/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="view/login/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="view/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="view/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="view/login/vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="view/login/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="view/login/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="view/login/vendor/select2/select2.min.css">	
	<link rel="stylesheet" type="text/css" href="view/login/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="view/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="view/login/css/main.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" method="POST" id="formLogin" name="Login" action="controller/loginController.php" >
					<!-- <input type="hidden" name="acao" value="efetuarLogin" /> -->
					<span class="login100-form-title p-b-51">
						Login
					</span>

					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username" id="username" action="login.php">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" id="password">
						<span class="focus-input100"></span>
					</div>
					<input class="input100" type="hidden" name="type" id="type" value="Login">
					<div class="flex-sb-m w-full p-t-3 p-b-24">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" type="submit" name="login" value="Login">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>

	<script src="view/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="view/Login/js/ajax.js"></script>
	<script src="view/login/vendor/animsition/js/animsition.min.js"></script>
	<script src="view/login/vendor/bootstrap/js/popper.js"></script>
	<script src="view/login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="view/login/vendor/select2/select2.min.js"></script>
	<script src="view/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="view/login/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="view/login/vendor/countdowntime/countdowntime.js"></script>
	<script src="view/login/js/main.js"></script>

</body>
</html>