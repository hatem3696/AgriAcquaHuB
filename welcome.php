<?php
$username = "admin";

// Start session
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: View/login.php");
    exit;
}

// Display welcome message
echo "Welcome, " . $_SESSION['username'] . "!";

// TODO: Implement any other functionality for authenticated users here
?>
//check