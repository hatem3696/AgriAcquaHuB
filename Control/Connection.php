<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "Aqua";
$con = mysqli_connect($host, $user, $pass, $database);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>