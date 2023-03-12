<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Responsive login form</title>
	<link rel="stylesheet" type="text/css" href="../CSS/login.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
		rel="stylesheet">

</head>

<body>
	<div class="lHeader">
		<?php include '../View/header.php'; ?>

	</div>



	<div class="container">
		<h1>Log in</h1>
		<form method="post" action="../Control/LoginController.php">
			<div class="main">
				<input type="text" name="user">
				<span></span>
				<label>Username</label>
			</div>

			<div class="main">
				<input type="password" name="pass">
				<span></span>
				<label>Password</label>
			</div>

			<div class="pass">Don't have an account?</div>
			<input type="submit" name="submit" value="Log In">

			<div class="signup">
				Not a member?? <a href="../View/Registration.php">Sign up here</a>
			</div>
		</form>
	</div>

	<br>

	<br>

	<br>



	<br>
	<div>
		<?php include '../View/Footer.php'; ?>
</body>

</html>