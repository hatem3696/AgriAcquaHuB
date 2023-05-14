<?php
session_start();


include("../Control/Connection.php");
require_once("../Control/LoginModel.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {

	$username = $_POST['username'];
	$password = $_POST['password'];
	$_SESSION['LoginError'] = "";
	if (empty($username) && empty($password)) {
		$_SESSION['LoginError'] = "Please enter your username & password";
		header("Location: ../View/login.php");
		exit();
	}
	if (empty($username)) {
		$_SESSION['LoginError'] = "Please enter your username";
		header("Location: ../View/login.php");
		exit();
	}
	if (empty($password)) {
		$_SESSION['LoginError'] = "Please enter your password!";
		header("Location: ../View/login.php");
		exit();
	}
	if (!empty($username) && !empty($password) && !is_numeric($username)) {

		$query = "select * from users where Username = '$username' limit 1";
		$result = mysqli_query($con, $query);

		if ($result) {
			if ($result && mysqli_num_rows($result) > 0) {

				$user_data = mysqli_fetch_assoc($result);
				if ($user_data['Password'] === $password) {
					$_SESSION['User_Id'] = $user_data['User_Id'];
					$_SESSION['username'] = $username;
					$_SESSION['email'] = $user_data['Email'];
					$_SESSION['role'] = userType($username);
					header("Location: ../View/profile.php");
				}
				$_SESSION['LoginError'] = "Incorrect username or password!";
			}
			$_SESSION['LoginError'] = "Incorrect username or password!";
		}
	} else if (empty($username) && empty($password)) {
		$_SESSION['LoginError'] = "Please enter your username and password.";
	}
	mysqli_close($con);
}

?>


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
        <form method="post" action="" onsubmit="return loginCheck()">
            <div class="main">
                <input type="text" id="username" name="username">
                <span></span>
                <p id="userErr" style="color:red"></p>
                <label>Username</label>

            </div>

            <div class="main">
                <input type="password" id="password" name="password">
                <span></span>
                <p id="passErr" style="color:red"></p>
                <label>Password</label>
            </div>
            <div>
                <?php
				if (isset($_SESSION['LoginError'])) {
					echo '<p style="color:red">' . $_SESSION['LoginError'] . '</p><br>
					';
					$_SESSION['LoginError'] = "";
				}
				?>

            </div>

            <div class="pass">

                Don't have an account?
            </div>
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
        <script src="../View/js/login.js"></script>
</body>

</html>