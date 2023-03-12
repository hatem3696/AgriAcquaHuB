<?php
session_start();

require_once("Connection.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $fname = sanitize($_POST['fname']);
    $email = sanitize($_POST['email']);
    $phone = sanitize($_POST['phone']);
    $username = sanitize($_POST['username']);
    $password = sanitize($_POST['password']);
    $cpassword = sanitize($_POST['cpassword']);
    $numFormat = "/^(\+?88)?01[3-9]\d{8}$/";
    $usernameFormat = "/^[a-zA-Z0-9_-]{4,16}$/";





    if (
        empty($username) && empty($password) && empty($fname) &&
        empty($cpassword) && empty($phone) && empty($email)
    ) {
        $_SESSION['fnameError'] = "Full Name is required";
        $_SESSION['emailError'] = "Please enter your Email";
        $_SESSION['phnError'] = "Please enter your Phone Number";
        $_SESSION['usernameError'] = "Username is required";
        $_SESSION['passError'] = "Please enter your Password";
        header('location: ../View/Registration.php');
        exit();
    } else if (empty($fname)) {
        $_SESSION['fnameError'] = "First Name is required";
        header('location: ../View/Registration.php');
        exit();
    } else if (empty($email)) {
        $_SESSION['emailError'] = "Please enter your Email";
        header('location: ../View/Registration.php');
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['emailError'] = "Invalid email format";
        header('location: ../View/Registration.php');
        exit();
    } else if (empty($phone)) {
        $_SESSION['phnError'] = "Please enter your Phone Number";
        header('location: ../View/Registration.php');
        exit();
    } else if (!preg_match($numFormat, $phone)) {
        $_SESSION['phnError'] = "Invalid phone number";
        header('location: ../View/Registration.php');
        exit();
    } else if (empty($username)) {
        $_SESSION['usernameError'] = "Username is required";
        header('location: ../View/Registration.php');
        exit();
    } else if (!preg_match($usernameFormat, $username)) {
        $_SESSION['usernameError'] = "Invalid User Name!";
        header('location: ../View/Registration.php');
        exit();
    } else if (empty($password)) {
        $_SESSION['passError'] = "Please enter your Password";
        header('location: ../View/Registration.php');
        exit();
    } else if ($password !== $cpassword) {
        $_SESSION['cpassError'] = "Password doesn't match";
        header('location: ../View/Registration.php');
        exit();
    } else if (
        empty($username) || empty($password) || is_numeric($username) || is_numeric($fname) ||
        !is_numeric($phone) || is_numeric($email)
    ) {
        $_SESSION['RegError'] = "Please enter some valid information!";
        header('location: ../View/Registration.php');
        exit();
    }
    $chkUsername = "select * from users where Username = '$username' limit 1";
    $result1 = mysqli_query($con, $chkUsername);
    $isValid = false;
    //Username and email validation
    if (mysqli_num_rows($result1) > 0) {
        $_SESSION['usernameError'] = "Username is taken, try again";
        header('location: ../View/Registration.php');
        exit();
    } else if ($result1 && mysqli_num_rows($result1) === 0) {
        $chkEmail = "select * from users where Email = '$email' limit 1";
        $result2 = mysqli_query($con, $chkEmail);
        if ($chkEmail) {
            if ($result2 && mysqli_num_rows($result2) === 0) {
                $isValid = true;
            } else {
                $_SESSION['RegError'] = "You're already registered.";
                header('location: ../View/Registration.php');
                exit();
            }
        }
    }

    if (
        !empty($username) && !empty($password) && !is_numeric($username) && !empty($fname) &&
        !empty($cpassword) && !empty($phone) && !empty($email) && $isValid === true
    ) {
        $query2 = "insert into users (Username,Password,FullName,Email,Phone) values ('$username','$password','$fname','$email', '$phone')";
        mysqli_query($con, $query2);
        $_SESSION['username'] = $username;
        header('location: ../View/profile.php');
    } else if (
        empty($username) || empty($password) || is_numeric($username) || empty($fname) || empty($cpassword) ||
        empty($phone) || empty($email) || $isValid === false
    ) {
        $_SESSION['RegError'] = "Please enter some valid information!";
    }
}
function sanitize($data)
{
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    $data = trim($data);
    return $data;

}
?>