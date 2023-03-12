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

        if ($password == $cpassword) {
            $SESSION['ErrorMsg'] = "";
            $disableButton = "";
            $Valid = false;
        } else {
            $SESSION['ErrorMsg'] = "Passwords do not match";
            $disableButton = "disabled";
            $Valid = true;
        }

        if ($Valid == true && empty($SESSION['ErrorMsg'])) {
            header('location: profile.php');
            $_SESSION['user'] = $user;
            $SESSION['ErrorMsg'] = "";
        }

    }
}
?>