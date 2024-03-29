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

    <title>Update Packages</title>
    <style>
    /* Style for the fieldset */
    fieldset {
        border: 4px solid #3B577D;
        border-bottom: none;
        border-left: none;
        border-right: none;
        margin-bottom: 20px;
    }

    /* Style for the legend */
    legend {
        text-align: center;
        font-size: 28px;
        font-weight: bold;
    }

    /* Style for the labels */
    label {
        font-size: 20px;
        font-weight: bold;
    }

    /* Style for the input fields */
    input[type=text],
    input[type=date] {
        padding: 8px;
        width: 250px;
        font-size: 16px;
        border-radius: 5px;
        border: none;
        border-bottom: 2px solid #3B577D;
        margin-right: 10px;
        margin-bottom: 10px;
    }

    /* Style for the select field */
    select {
        padding: 8px;
        width: 250px;
        font-size: 16px;
        border-radius: 5px;
        border: none;
        border-bottom: 2px solid #3B577D;
        margin-right: 10px;
        margin-bottom: 10px;
    }

    /* Style for the error messages */
    .ErrorMsg {
        color: red;
        font-size: 16px;
        margin-top: 5px;
    }

    /* Style for the submit button */
    .input-btn {
        background-color: #3B577D;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        margin-top: 10px;
    }

    /* Style for the error message in the form */
    p[style="color:red; font-weight:500"] {
        font-size: 16px;
        font-weight: bold;
        color: red;
        margin-bottom: 10px;
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
                            onsubmit="return upPackError()">
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
                                            echo "<select class='hselect' id='Type' name='Type'>";
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
                                            <p class="ErrorMsg" id="typeError"></p>
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
        <script src="../../View/js/adminPanel.js"></script>
</body>

</html>