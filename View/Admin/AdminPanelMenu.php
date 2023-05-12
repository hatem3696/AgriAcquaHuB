<?php
if ($_SESSION['role'] !== "admin" && $_SESSION['role'] !== "employee") {
    header('location: UserLogin.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel Menu</title>
    <link rel="stylesheet" href="../Assets/index.css">
</head>

<body>
    <div class="AdminMenu">
        <button class="button">
            <a href="AdminPanel.php">Dashboard</a>
        </button>
        <?php
        if ($_SESSION['role'] == "admin") {
            ?>
        <!-- <button class="button">
            <a href="AddEmployee.php">Add Employee</a>
        </button> -->
        <?php } ?>

        <button class="button">
            <a href="CreatePackage.php">Create Package</a>
        </button>
        <button class="button">
            <a href="ViewPackages.php">View Package</a>
        </button>
        <button class="button">
            <a href="CreateWorkshop.php">Create Workshop</a>
        </button>
        <button class="button">
            <a href="ViewPackages.php">View Workshop</a>
        </button>

    </div>
</body>

</html>