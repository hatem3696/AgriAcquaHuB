<?php
session_start();

// Define variables and initialize with empty values
$name = $email = $website = $comment = $gender = "";
$nameErr = $emailErr = $websiteErr = $genderErr = "";

// Function to test input fields for special characters and remove unnecessary whitespace
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Validate name field
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  // Validate email field
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
<?php include 'header.php'; ?>
	<section class="main">
		<h1 class="title">Registration Form</h1>
		<form action="#">
			<div class="main-box">
				<div class="input-box">
					<span class="text">Full Name</span>
					<input type="text" placeholder="Please enter your" required>
				</div>

				<div class="input-box">
					<span class="text">Username</span>
					<input type="text" placeholder="Please enter your" required>
				</div>

				<div class="input-box">
					<span class="text">Email</span>
					<input type="email" placeholder="Email" required>
				</div>

				<div class="input-box">
					<span class="text">Phone Number</span>
					<input type="text" placeholder="Phone Number" required>
				</div>

				<div class="input-box">
					<span class="text">Password</span>
					<input type="Password" placeholder="Please enter your" required>
				</div>

				<div class="input-box">
					<span class="text">Confirm Password</span>
					<input type="Password" placeholder="Confirm your password" required>
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
			</div>

			
			<div class="btn">
				<input type="submit" value="Register">
			</div>
		</form>
	</section>
	


<?php include 'footer.php'; ?>
</body>
</html>