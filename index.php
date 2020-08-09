<?php include('include/server.php') ?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Mero Pasal</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--===============================================================================================-->
		<link rel="icon" type="image/png" href="Login/images/icons/favicon.ico" />
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="Login/vendor/bootstrap/css/bootstrap.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="Login/vendor/animate/animate.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="Login/vendor/css-hamburgers/hamburgers.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="Login/vendor/select2/select2.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="Login/css/util.css">
		<link rel="stylesheet" type="text/css" href="Login/css/main.css">
		<!--===============================================================================================-->
	</head>

	<body>
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100">
					<div class="login100-pic js-tilt" data-tilt>
						<img src="Login/images/img-01.png" alt="IMG">
					</div>

					<form method="post" class="login100-form validate-form">
						<span class="login100-form-title">
							Enter Details to Login
						</span>

						<div class="wrap-input100 validate-input" data-validate="Email is required">
							<input class="input100" type="text" name="username" placeholder="Email">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Password is required">
							<input class="input100" type="password" name="password" placeholder="Password">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</span>
						</div>
						<div>


						<select name="usertype" class="validate-input" data-validate="Password is required">
						<option value="customer">Customer</option>
						<option value="retailer">Retailer</option>
						</select>
						</div>

						<style>
						select{
							background-color: #fff;
							box-shadow: .1em .1em 1em #eee;
							color: #666;
							border-radius: 2em;
							padding: .7em 6em;
							border:none;
						}
						
						</style>

						<div class="container-login100-form-btn">
							<button class="login100-form-btn" value=login_user name=login_user>
								Login
							</button>
						</div>


						<div class="text-center p-t-136">
							<a class="txt2" href="/register/">
								Create your Account
								<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!--===============================================================================================-->
		<script src="Login/vendor/jquery/jquery-3.2.1.min.js"></script>
		<!--===============================================================================================-->
		<script src="Login/vendor/bootstrap/js/popper.js"></script>
		<script src="Login/vendor/bootstrap/js/bootstrap.min.js"></script>
		<!--===============================================================================================-->
		<script src="Login/vendor/select2/select2.min.js"></script>
		<!--===============================================================================================-->
		<script src="Login/vendor/tilt/tilt.jquery.min.js"></script>
		<script>
			$('.js-tilt').tilt({
				scale: 1.1
			})

		</script>
		<!--===============================================================================================-->
		<script src="Login/js/main.js"></script>

	</body>

</html>