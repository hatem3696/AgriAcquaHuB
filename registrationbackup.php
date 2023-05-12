<?php
session_start();

$fname = $user = $email = $phone = $password = "";
$cpassword = "";
$SESSION['ErrorMsg'] = "";
$Valid = false;
$disableButton = "";

// Function to test input fields for special characters and remove unnecessary whitespace
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Validate name field
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = test_input($_POST['fname']);
    $user = test_input($_POST['user']);
    $email = test_input($_POST['email']);
    $phone = test_input($_POST['phone']);
    $password = test_input($_POST['password']);
    $cpassword = test_input($_POST['cpassword']);
    if (!empty($fname) && !empty($user) && !empty($email) && !empty($phone) && !empty($password) && !empty($cpassword)) {

        if (!preg_match("/^[a-zA-Z ]*$/", $fname)) {
            $SESSION['ErrorMsg'] = "Only letters and white space allowed in names";
            $Valid = false;
        } else {
            $SESSION['ErrorMsg'] = "";
            $Valid = true;
        }

        // Validate email field
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $SESSION['ErrorMsg'] = "Invalid email format";
            $Valid = false;
        } else {
            $SESSION['ErrorMsg'] = "";
            $Valid = true;
        }

        // Validate password
        if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=!])(?!.*\s).{12,}$/", $password)) {
            $SESSION['ErrorMsg'] = "Password must be at least 12 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one symbol.";
            $Valid = false;
        } else {
            $SESSION['ErrorMsg'] = "";
            $Valid = true;
        }

        if ($password !== $cpassword) {
            $SESSION['ErrorMsg'] = "Passwords do not match";
            $disableButton = "disabled";
            $Valid = false;
        } else if ($password == $cpassword) {
            $SESSION['ErrorMsg'] = "";
            $disableButton = "";
            $Valid = true;
        }

        if ($Valid == true && empty($SESSION['ErrorMsg'])) {
            header('location: registration.php');
            $_SESSION['user'] = $user;
            $SESSION['ErrorMsg'] = "";
        }

    }
}
?>
<link rel="stylesheet" href="CSS/regbackup.css">
<?php include('header.php');?>
<div class="container">
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="fname">Full Name:</label>
    <input type="text" id="fname" name="fname" required>

    <label for="user">Username:</label>
    <input type="text" id="user" name="user" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <label for="cpassword


    <label for="cpassword">Confirm Password:</label>
    <input type="password" id="cpassword" name="cpassword" required>

    <button type="submit" name="next" <?php echo $disableButton; ?>>Next</button>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($SESSION['ErrorMsg'])) {
    echo '<p style="color:red">' . $SESSION['ErrorMsg'] . '</p>';
}
?>


</form>
</div>
<?php include '../View/Footer.php'; ?>