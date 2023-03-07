<<<<<<< HEAD
<?php
session_start();
?>
=======

>>>>>>> 393f948f24e730daab68db7614f515ebb843671c
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Responsive Registration Form</title>

	<!---custom css link--->
	<link rel="stylesheet" type="text/css" href="CSS/reg.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;800;900&display=swap"
		rel="stylesheet">
</head>

<body>
	<?php include 'header.php'; ?>
	<section class="main">
		<h1 class="title">Registration Form</h1>
		<form Action="RegAction.php" method="POST">
			<div class="main-box">
				<div class="input-box">
					<span class="text">Full Name</span>
					<input type="text" id="fname" name="fname" placeholder="Please enter your" required>
				</div>

				<div class="input-box">
					<span class="text">Username</span>
					<input type="text" id="user" name="user" placeholder="Please enter your" required>
				</div>

				<div class="input-box">
					<span class="text">Email</span>
					<input type="email" id="email" name="email" placeholder="Email" required>
				</div>

				<div class="input-box">
					<span class="text">Phone Number</span>
					<input type="text" id="phone" name="phone" placeholder="Phone Number" required>
				</div>

				<div class="input-box">
					<span class="text">Password</span>
					<input type="Password" id="password" name="password" placeholder="Please enter your" required>
				</div>

				<div class="input-box">
					<span class="text">Confirm Password</span>
					<input type="Password" id="cpassword" name="cpassword" placeholder="Confirm your password" required>
				</div>

			</div>

			<div class="container">
				<input type="radio" name="gender" id="circle-1">
				<input type="radio" name="gender" id="circle-2">
				<input type="radio" name="gender" id="circle-3">
				<span class="gender">Gender</span>
				<div class="category">
					<label for="circle-1">
						<span class="circle one"></span>
						<span class="male">Male</span>
					</label>

					<label for="circle-2">
						<span class="circle two"></span>
						<span class="male">female</span>
					</label>

					<label for="circle-3">
						<span class="circle three"></span>
						<span class="male">Other</span>
					</label>

				</div>


				<div class="btn">
					<input type="submit" value="Register">
				</div>
				<?php

				if (isset($SESSION['ErrorMsg'])) { ?>
				<div>
					<p style="color: red">

							<?php

							echo $SESSION['ErrorMsg']; ?>
					</p>
				</div>
				<?php } ?>
			</div>
		</form>
	</section>



	<?php include 'footer.php'; ?>
</body>

</html>