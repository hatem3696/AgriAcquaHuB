<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Responsive Registration Form</title>

	<!---custom css link--->
	<link rel="stylesheet" type="text/css" href="../CSS/reg.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;800;900&display=swap"
		rel="stylesheet">
</head>

<body>

	<?php include '../View/header.php'; ?>
	<section class="main">
		<h1 class="title">Registration Form</h1>
		<form Action="../Control/RegAction.php" method="POST">
			<div class="main-box">
				<div class="input-box">
					<span class="text">Full Name</span>
					<input type="text" id="fname" name="fname" placeholder="Please enter your">
					<?php
					if (isset($_SESSION['fnameError'])) {
						echo '<p style="color:red">' . $_SESSION['fnameError'] . '</p><br>
					';
						$_SESSION['fnameError'] = "";
					}
					?>
				</div>

				<div class="input-box">
					<span class="text">Username</span>
					<input type="text" id="username" name="username" placeholder="Please enter your">
					<?php
					if (isset($_SESSION['usernameError'])) {
						echo '<p style="color:red">' . $_SESSION['usernameError'] . '</p><br>
					';
						$_SESSION['usernameError'] = "";
					}
					?>
				</div>

				<div class="input-box">
					<span class="text">Email</span>
					<input type="email" id="email" name="email" placeholder="Email">
					<?php
					if (isset($_SESSION['emailError'])) {
						echo '<p style="color:red">' . $_SESSION['emailError'] . '</p><br>
					';
						$_SESSION['emailError'] = "";
					}
					?>
				</div>

				<div class="input-box">
					<span class="text">Phone Number</span>
					<input type="text" id="phone" name="phone" placeholder="Phone Number">
					<?php
					if (isset($_SESSION['phnError'])) {
						echo '<p style="color:red">' . $_SESSION['phnError'] . '</p><br>
					';
						$_SESSION['phnError'] = "";
					}
					?>
				</div>

				<div class="input-box">
					<span class="text">Password</span>
					<input type="Password" id="password" name="password" placeholder="Please enter your">
					<?php
					if (isset($_SESSION['passError'])) {
						echo '<p style="color:red">' . $_SESSION['passError'] . '</p><br>
					';
						$_SESSION['passError'] = "";
					}
					?>
				</div>

				<div class="input-box">
					<span class="text">Confirm Password</span>
					<input type="Password" id="cpassword" name="cpassword" placeholder="Confirm your password">
					<?php
					if (isset($_SESSION['cpassError'])) {
						echo '<p style="color:red">' . $_SESSION['cpassError'] . '</p><br>
					';
						$_SESSION['cpassError'] = "";
					}
					?>
				</div>
				<?php
				if (isset($_SESSION['RegError'])) {
					echo '<p style="text-align:center; color:red;">' . $_SESSION['RegError'] . '</p><br>
					';
					$_SESSION['RegError'] = "";
				}
				?>
			</div>


			<div class="btn">
				<input type="submit" value="Register">
			</div>

			</div>
		</form>
	</section>



	<?php include '../View/Footer.php'; ?>
</body>

</html>