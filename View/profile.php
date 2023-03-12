<?php
session_start();
if (isset($_SESSION['user'])) {
	include('header.php');
	echo "<h1 class='welcome'>Succesfully Logged in By " . $_SESSION['user'] . "</h1>";
	echo "<div class='button-wrapper'><a href ='../Control/logout.php' class='button logout'>LOGOUT</a></div>";
} else {
	?>
	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Profile page</title>
		<link rel="stylesheet" type="text/css" href="./CSS/profile1.css">
	</head>

	<body>
		<?php include '../View/header.php'; ?>
		<h1 class="title">Profile page</h1>
		<hr>

		<form method="post" action="">
			<label for="login-as" class="label">What do you want to be logged in as?</label><br>
			<select name="login-as" id="login-as" class="select">
				<option value="Farmer">Farmer</option>
				<option value="Fisher">Fisher</option>
				<option value="Admin">Admin</option>
			</select><br><br>
			<input type="submit" name="submit" value="Log in" class="submit-button">
		</form>

		<?php
}
if (isset($_POST['submit'])) {
	if (isset($_POST['login-as'])) {
		$login_as = $_POST['login-as'];
		echo "<h1 class='welcome'>Dear user, you are logged in as a $login_as</h1>";
	}
}
?>
	<?php include '../View/Footer.php'; ?>
</body>

</html>