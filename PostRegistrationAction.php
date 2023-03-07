<!doctype html>
<html lang="en">
<head>
<title>Success</title>
<?php                 
include "../view/header.php";
include "../control/RegistrationAction.php";
?>

<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}


tr:nth-child(even) {background-color: #f2f2f2;}
</style>

<?php
include 'conn.php';
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
// insert start

$username = $_POST['username'];
$useremail = $_POST['useremail'];
$psw = $_POST['psw'];
$gender = $_POST['gender'];
$phno = $_POST['phno'];
$dob = $_POST['dob'];

$sql = "INSERT INTO reg (name, email, password, phno, gender, dob)
VALUES ('$username', '$useremail', '$psw','$phno','$gender','$dob')";

if ($conn->query($sql) === TRUE) {
  
  print "<center><h2>Account created successfully!</h2></center>";  
  // select or read data start 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
// insert end
$conn->close();
}
?>
</head>
<body>

<CENTER>
<div class="acc_info">
        <h3>Account Information</h3>
        <?php
include 'conn.php';
 // select or read data start
$sql = "SELECT uid, name, email, phno, gender, dob FROM reg
ORDER BY uid DESC
LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr> <th>Unique ID</th> <th>Name</th> <th>Email</th> <th>Phone Number</th> <th>Gender</th><th>Date of Birth</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr > 
        <td>" . $row["uid"]. "</td> 
         <td>" . $row["name"]. "</td>
         <td>" . $row["email"]. "</td>
         <td>" . $row["phno"]. "</td>
         <td>" . $row["gender"]. "</td>
         <td>" . $row["dob"]. "</td>     


        </tr>";
       
    }
    echo "</table>";

  
  
} else {
    echo "0 results";
}



?>
    </div> </CENTER>
    <br>

    <?php
header("refresh:7;url=../view/getstarted.php");

?>
<center>
   <h2>You are being redirected to login page or <a href="../view/login.php">Click Here</a></h2> 
    <br>

    </center>
<?php
include "../view/footer.php";                
?>
</body>
</html>
