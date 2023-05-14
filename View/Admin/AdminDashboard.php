<?php
if ($_SESSION['role'] !== "admin" && $_SESSION['role'] !== "employee") {
    header('location: ../../View/UserLogin.php');
    exit();
}
include('../../Control/Admin/AdminDashboardController.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Body</title>
    <style>
        body {
  font-family: Arial, sans-serif;
  font-size: 16px;
  background-color: #f8f8f8;
  color: #333;
}

.AdminDash {
  margin: 0 auto;
  width: 90%;
  max-width: 1200px;
  background-color: #fff;
  padding: 20px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

.AdminDash fieldset {
  border: none;
  border-top: 4px solid #75914b;
  padding: 0 10px 10px;
}

.AdminDash legend {
  font-size: 24px;
  font-weight: bold;
  text-align: center;
  padding-bottom: 10px;
  border-bottom: 2px solid #75914b;
}
</style>
</head>

<body>

    <div class="AdminDash">
        <fieldset
        <style
fieldset {
  border: 4px solid #75914b;
  border-bottom: none;
  border-left: none;
  border-right: none;
  width: 95%;
}
legend {
  text-align: left;
}
h1 {
  text-align: center;
}
</style>
<fieldset>
<legend><h1>Dashboard</h1></legend>
<!-- Dashboard content here -->
</fieldset>
           


        <?php
        include_once('../../Control/Admin/AdminDashboardController.php');
        renderDashboardCards();
        
        ?>
        
</body>

</html>