<?php include('header.php');?>
<h1>Profile page</h1>
<hr>
<?php
	session_start();
	if(isset($_SESSION['user'])){
		echo "<h1>Succesfully Logged in By ". $_SESSION['user']."</h1>"; 
		echo"<br>";

		echo "<br> <a href ='logout.php'> 
		<input type =button value =LOGOUT name=></a>" ;

		echo "<br> <a href ='post.php'> 
		<input type =button value =Upload-picture name= </a>" ;
		
	}
		
	
?>