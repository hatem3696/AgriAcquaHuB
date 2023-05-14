<?php
session_start();
if ($_SESSION['role'] !== "admin" && $_SESSION['role'] !== "employee") {
    header('location: UserLogin.php');
    exit();
}

if (isset($_GET['updateWork'])) {

    $id = $_GET['updateWork'];
    require_once('../../Control/Admin/UpdateWorkController.php');


    $result =  getWork($id);
    $data = mysqli_fetch_assoc($result);

    $name = $data['name'];
    $description = $data['description'];
    $category = $data['category'];
    $time = $data['time'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Update Workshop</title>
    <style>
    .check {
        padding-top: 150px;
        padding-left: 420px;
        align-items: center;
        color: #3B577D;
        text-align: center;
    }

    .check button {
        color: white !important;
        background-color: green;
        /* align: center; */
    }
    </style>
</head>

<body>


    <div>
        <div class="AddEmpForm">
            <?php

            include("Header.php");
            include("AdminPanelMenu.php");
            ?>
            <div class="AdminDash">
                <fieldset
                    style=" border: 4px solid #3B577D; border-bottom: none; border-left: none; border-right: none;">
                    <legend style="text-align: left">
                        <h1 align="center">Update Workshop</h1>
                    </legend>
                </fieldset>
                <div class="" align="center">
                    <div>
                        <form method="POST"
                            action="../../Control/Admin/UpdateWorkController.php?updateid=<?php echo $id ?>"
                            onsubmit="return true">
                            <div>
                                <table align="center" style="text-align: left">
                                    <tr>
                                        <td><label for="name">Name</label></td>
                                        <td>:</td>
                                        <td><Input type="text" name="name" id="name"
                                                value="<?php echo $name; ?>"></Input></td>
                                        <td>*</td>
                                        <td>
                                            <p class="ErrorMsg" id="nameError"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Category</td>
                                        <td>:</td>
                                        <td>
                                            <?php
                                            require_once('../../Control/Admin/UpdateWorkController.php');
                                            $result = cc_getType();
                                            echo "<select class='hselect'name='category'>";
                                            ?>
                                            <option selected="selected">
                                                <?php echo $category; ?>
                                            </option>
                                            <?php
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<option value='" . $row["category"] . "'>" . $row["category"] . "</option>";
                                            }
                                            echo "</select>";
                                            ?>
                                        </td>
                                        <td>*</td>
                                        <td>
                                            <p class="ErrorMsg" id="hotelError"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="description">Description </label></td>
                                        <td>:</td>
                                        <td><Input type="text" name="description" id="description"
                                                value="<?php echo $description; ?>"></Input></td>
                                    </tr>
                                    <tr>
                                        <td><label for="time">Time </label></td>
                                        <td>:</td>
                                        <td><input type="text" name="time" id="time" value="<?php echo $time; ?>">
                                        </td>
                                        <td>*</td>
                                        <td>
                                            <p class="ErrorMsg" id="timeError"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <p style="color:red; font-weight:500">
                                                <?php if (!empty($_SESSION['updatePackError'])) {
                                                    echo $_SESSION['updatePackError'];
                                                    unset($_SESSION['updatePackError']);
                                                } ?>
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="EmpFormButton">
                                <input class="input-btn" type="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include('../../View/Footer.php');
        ?>
        <script src="../../View/js/AdminPanel.js"></script>
</body>

</html>