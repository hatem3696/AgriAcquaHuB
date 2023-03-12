<?php
session_start();
session_destroy();

// include('header.php');
// echo "<hr>";
//echo "<h1> Logged out </h1";
header('location:../View/profile.php');

// php include '../Control/Footer.php'; 

?>