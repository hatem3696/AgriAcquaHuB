<?php 
session_start();
session_destroy();

?>
<?php include('header.php');
echo"<hr>";
//echo "<h1> Logged out </h1";
header('location:Login.php');
?>
<?php include '../Control/Footer.php'; ?>