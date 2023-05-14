<?php
session_start();
if ($_SESSION['role'] !== "admin" && $_SESSION['role'] !== "employee") {
    header('location: ../../View/UserLogin.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Workshops</title>
<<<<<<< HEAD
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
        <style>
            /* add transition to the table */
.customers {
  transition: all 0.3s ease;
}

/* add animation to the table header */
.Table.header th {
  animation: fadein 1s;
}

.customers {
  border-collapse: collapse;
  width: 100%;
}

.customers td, .customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

.customers tr:nth-child(even){background-color: #f2f2f2;}

.customers tr:hover {background-color: #ddd;}

.customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #3B577D;
  color: white;
}


h1 {
  font-size: 50px;
  color: black;
  text-transform: uppercase;
  letter-spacing: 10px;
  text-align: center;
  background-color: white;
  padding: 20px;
  border: 10px ;
  box-shadow: 0 0 10px #f44336;
}




            </style>
=======
    <link rel="stylesheet" href="../Assets/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
>>>>>>> c7670646d5b4952889d209edb78bafeced4ab2b6
</head>


<body>
    <div class="page">
        <div class="AdminPage">
            <?php
            if (!isset($_SESSION['message'])) {
                $_SESSION['message'] = "";
            }
            include("Header.php");
            include("../Admin/AdminPanelMenu.php");
            ?>
            <div class="AdminDash">
                <fieldset
<<<<<<< HEAD
                   
                    <legend>
=======
                    style=" border: 4px solid #3B577D; border-bottom: none; border-left: none; border-right: none;">
                    <legend style="text-align: left">
>>>>>>> c7670646d5b4952889d209edb78bafeced4ab2b6
                        <h1 align="center">Workshops</h1>
                    </legend>
                </fieldset>
                <table class="customers">
<<<<<<< HEAD
                    <tr class="Table header" >
=======
                    <tr>
>>>>>>> c7670646d5b4952889d209edb78bafeced4ab2b6
                        <th>Name</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Time</th>
                        <th colspan="2">Action</th>
                    </tr>
                    <?php
                    require('../../Control/WorkshopController.php');
                    include_once('../../Control/Admin/DeleteAction.php');
                    $result = viewAllWorkshops();
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>
                            <td>' . $row["name"] . '</td>
                            <td>' . $row["description"] . '</td>
                            <td>' . $row["category"] . '</td>
                            <td>' . $row["time"] . '</td>
                            <td><button class="button btn-crud"><a href="UpdateWorkshop.php?updateWork=' . $row["id"] . '"><i class="bi bi-pencil-square"></i></a></button><button class="button btn-crud-2"><a href="../../Control/Admin/DeleteAction.php?deleteWork=' . $row["id"] . '"><i class="bi bi-trash-fill"></i></a></button></td>
                            </tr>';
                        }
                    }
                    ?>
                    <tr>
                        <td colspan="8">
                            <p style="color:red; font-weight:500">
                                <?php if (!empty($_SESSION['message'])) {
                                    if($_SESSION['message'] == "Operation completed successfully"){ ?>


                                <?php }
                                    echo $_SESSION['message'];
                                    unset($_SESSION['message']);
                                } ?>
                            </p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>




        <?php
        include("../Footer.php");
        ?>
    </div>
</body>

</html>