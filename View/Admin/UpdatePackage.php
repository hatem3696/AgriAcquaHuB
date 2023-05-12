<?php
session_start();
if ($_SESSION['role'] !== "admin" && $_SESSION['role'] !== "employee") {
    header('location: UserLogin.php');
    exit();
}

if (isset($_GET['updatePack'])) {

    $Package_Id = $_GET['updatePack'];
    require_once('../../Control/Admin/UpdatePackageController.php');


    $result =  getPack($Package_Id);
    $data = mysqli_fetch_assoc($result);

    $Package_Name = $data['Name'];
    $Type = $data['Type'];
    $Description = $data['Description'];
    $Price = $data['Price'];
    $Days = $data['Days'];
    $P_left = $data['P_left'];
    $P_sold = $data['P_sold'];
    $Start_Date = date('Y-m-d', strtotime($data['Start_Date'] . ' + ' . $Days . ' days'));
    $Image_url = $data['Image_url'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Update Packages</title>
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
                        <h1 align="center">Update Package</h1>
                    </legend>
                </fieldset>
                <div class="" align="center">
                    <div>
                        <form method="POST"
                            action="../../Control/Admin/UpdatePackageController.php?updateid=<?php echo $Package_Id ?>"
                            onsubmit="return updatePackCheck()">
                            <div>
                                <table align="center" style="text-align: left">
                                    <tr>
                                        <td><label for="Name">Package Name</label></td>
                                        <td>:</td>
                                        <td><Input type="text" name="Name" id="Name"
                                                value="<?php echo $Package_Name; ?>"></Input></td>
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
                                            require_once('../../Control/Admin/UpdatePackageController.php');
                                            $result = c_getType();
                                            echo "<select class='hselect'name='Type'>";
                                            ?>
                                            <option selected="selected">
                                                <?php echo $Type; ?>
                                            </option>
                                            <?php
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<option value='" . $row["Type"] . "'>" . $row["Type"] . "</option>";
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
                                        <td><label for="Description">Description </label></td>
                                        <td>:</td>
                                        <td><Input type="text" name="Description" id="Description"
                                                value="<?php echo $Description; ?>"></Input></td>
                                    </tr>
                                    <tr>
                                        <td><label for="Price">Price </label></td>
                                        <td>:</td>
                                        <td><input type="text" name="Price" id="Price" value="<?php echo $Price; ?>">
                                        </td>
                                        <td>*</td>
                                        <td>
                                            <p class="ErrorMsg" id="priceError"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="Days">Duration</label></td>
                                        <td>:</td>
                                        <td><Input type="text" name="Days" id="Days"
                                                value="<?php echo $Days; ?>"></Input></td>
                                        <td>*</td>
                                        <td>
                                            <p class="ErrorMsg" id="daysError"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="TotalPackages">Total Package </label></td>
                                        <td>:</td>
                                        <td><Input type="text" name="TotalPackages" id="TotalPackages"
                                                value="<?php echo $P_left; ?>"></Input></td>
                                        <td>*</td>
                                        <td>
                                            <p class="ErrorMsg" id="totPackError"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="Start_Date">Start Date </label></td>
                                        <td>:</td>
                                        <td><Input type="date" name="Start_Date" id="Start_Date"
                                                value="<?php echo $Start_Date; ?>"></Input></td>
                                        <td>*</td>
                                        <td>
                                            <p class="ErrorMsg" id="dateError"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="img">Image Link </label></td>
                                        <td>:</td>
                                        <td><input type="text" name="img" id="img" value="<?php echo $Image_url; ?>">
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