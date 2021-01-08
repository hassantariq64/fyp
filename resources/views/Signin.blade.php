<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util_login.css">
	<link rel="stylesheet" type="text/css" href="css/main4login.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('img/1.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form "  action="{{url('/Signin')}}" method="post">
				@csrf
				<span class="login100-form-title p-b-37">
					Sign In
				</span>

				<div class="wrap-input100  m-b-20" data-validate="Enter username or email">
					<input class="input100" type="text" name="name" placeholder="username or email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100  m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="pass" placeholder="password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Sign In
					</button>
				</div>


			
				
			</form>

			
		</div>


	<div class="container-login120">
		

		<div class="wrap-login120 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login120-form validate-form" action="{{url('/submit')}}" method="POST">
				@csrf
				<span class="login120-form-title p-b-37">
					Registration Form
				</span>

				<div class="wrap-input120 validate-input m-b-20" data-validate="Enter Full name">
					<input class="input120"  name="fname" placeholder="Full Name">
					<span class="focus-input120"></span>
				</div>

				<div class="wrap-input120 validate-input m-b-20" data-validate="Enter email">
					<input class="input120" type="text" name="email" placeholder="Email">
					<span class="focus-input120"></span>
				</div>

				<div class="wrap-input120 validate-input m-b-20" data-validate="Enter Phone Number">
					<input class="input120" type="text" name="pnumber" placeholder="Phone number">
					<span class="focus-input120"></span>
				</div>

				<div class="wrap-input120 validate-input m-b-25" data-validate = "Enter password">
					<input class="input120" type="password" name="password" placeholder="password">
					<span class="focus-input120"></span>
				</div>

				<div class="container-login120-form-btn">
					<button class="login120-form-btn" type="submit">
						Register
					</button>
				</div>

			

				

			
			</form>

			
		</div>



	</div>
	
	</div>	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main4login.js"></script>

</body>
</html>