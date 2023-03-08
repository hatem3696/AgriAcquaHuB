<?php
session_start();
if (isset($_SESSION['user'])) {
	header('location:profile.php');
}
if (isset($_POST['submit'])) {
	$user = $_POST['user']; // save username to user variable 
	$pass = $_POST['pass']; // save password to pass variable 

	//session_start();
	$_SESSION['user'] = $user;
	$_SESSION['pass'] = $pass;

	//echo "Hi ". $_SESSION['user'];
	header('location:profile.php');
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Define variables and set to empty values
	$username = $password = "";

	// Validate input and store in variables
	if (empty($_POST["username"])) {
		echo "<p>Username is required.</p>";
	} else {
		$username = test_input($_POST["username"]);
	}

	if (empty($_POST["password"])) {
		echo "<p>Password is required.</p>";
	} else {
		$password = test_input($_POST["password"]);
	}


	// Use the variables for login or authentication
	// ...
}

function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Responsive login form</title>
	<link rel="stylesheet" type="text/css" href="CSS/login.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
		rel="stylesheet">

</head>

<body>
	<div class="lHeader">
		<?php include 'header.php'; ?>

	</div>



	<div class="container">
		<h1>Log in</h1>
		<form method="post">
			<div class="main">
				<input type="text" name="user" required>
				<span></span>
				<label>Username</label>
			</div>

			<div class="main">
				<input type="password" name="pass" required>
				<span></span>
				<label>Password</label>
			</div>

			<div class="pass">Don't have an account?</div>
			<input type="submit" name="submit" value="Log In" <a href="profile.php">

			<div class="signup">
				Not a member?? <a href="Registration.php">Sign up here</a>
			</div>
		</form>
	</div>

	<br>

	<br>

	<br>
	<div>
	<?php include 'Footer.php'; ?>
</div>
</body>

</html>