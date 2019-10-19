<?php
	session_start();
	if(isset($_POST['submit']))
	{
		$enroll = $_POST['enrollment'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
		$mobile = $_POST['mobile'];
		$dob = $_POST['dob'];
		$con = mysqli_connect("localhost","root","","wsaver") or die("connection error".mysqli_error($con));
		$query = "INSERT INTO `users` (`name`, `enroll`, `dob`, `address`, `gender`, `mobile`, `email`, `password`) VALUES ('$name', '$enroll', '$dob', '$address', '$gender', '$mobile', '$email', '$password');";
		$res = mysqli_query($con,$query)or die(mysqli_error($con));
		echo "<script>alert('Register Success Please Login')</script>";
		echo "<script>window.location='index.php'</script>";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V2</title>
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
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="register.php" method="post" class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="enrollment">
						<span class="focus-input100" name="enrollment" data-placeholder="Enrollment"></span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="email">
						<span class="focus-input100" name="enroll" data-placeholder="Email"></span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="name">
						<span class="focus-input100" name="enroll" data-placeholder="Name"></span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="password">
						<span class="focus-input100" name="enroll" data-placeholder="Password"></span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="mobile">
						<span class="focus-input100" name="enroll" data-placeholder="Mobile No"></span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="dob">
						<span class="focus-input100" name="enroll" data-placeholder="Date of Birth(DD/MM/YYYY)"></span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="address">
						<span class="focus-input100" name="enroll" data-placeholder="Address"></span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="gender">
						<span class="focus-input100" name="enroll" data-placeholder="Gender(Male/Female)"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button name="submit" class="login100-form-btn">
								Sign Up
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Already Having Account
						</span>

						<a class="txt2" href="index.php">
							Login 
						</a>
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
	<script src="js/main.js"></script>

</body>
</html>