<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V16</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../../../login-form/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../../login-form/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../../login-form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../../login-form/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../../login-form/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../../../login-form/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../../login-form/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../../login-form/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../../../login-form/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../../login-form/css/util.css">
	<link rel="stylesheet" type="text/css" href="../../../login-form/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../../../login-form/images/top\ 5.jfif');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
				<form action="{{ route('login') }}" method="POST" class="login100-form validate-form p-b-33 p-t-5">
					@csrf

					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="text" name="username" placeholder="User name":value="{{ old('username')}}">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password":value="{{ old('Password')}}">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<!-- LOGIN BUTTON -->
   						 <div class="container-login100-form-btn m-t-32">
       						 <button class="login100-form-btn" type="submit">Login</button>
   						 </div>

					<!-- SIGN UP BUTTON (Now Below Login) -->
						<div class="container-login100-form-btn m-t-10">
							<a href="{{ route('register') }}" class="login100-form-btn signup-link">SIGN UP</a>
							<a href="{{ url('/') }}" class="btn btn--radius-2 btn--blue">Back</a>
						</div>

				

					

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../../../login-form/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../../../login-form/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../../../login-form/vendor/bootstrap/js/popper.js"></script>
	<script src="../../../login-form/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../../../login-form/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../../../login-form/vendor/daterangepicker/moment.min.js"></script>
	<script src="../../../login-form/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../../../login-form/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../../../login-form/js/main.js"></script>

</body>
</html>