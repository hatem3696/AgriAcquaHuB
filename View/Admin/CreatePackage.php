<?php
session_start();
if ($_SESSION['role'] !== "admin" && $_SESSION['role'] !== "employee") {
    header('location: ../UserLogin.php');
    exit();
}
include('../../Control/Admin/CreatePkgAction.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Package</title>
<<<<<<< HEAD
    <style>
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
        /* Styling for the form */
form {
  max-width: 500px;
  margin: auto;
  padding: 20px;
  background: #f5f5f5;
  border: 1px solid #ccc;
  border-radius: 5px;
}

/* Transition effect when hovering over form inputs */
form input[type=text]:hover,
form input[type=date]:hover,
form select:hover {
  border-color: #008080;
  transition: border-color 0.3s ease-in-out;
}

/* Keyframe animation */
@keyframes rotate {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

/* Animation effect on submit button */
input[type=submit] {
  background-color: #008080;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  
}

/* Transformation effect on error messages */
.ErrorMsg {
  transform: translateX(-50px);
  transition: transform 0.5s ease-in-out;
}

/* Timing function effect on input field border */
.hselect {
  transition: border-color 0.5s cubic-bezier(0.75, 0, 0.25, 1);
}

/* Delay effect on error messages */
#error {
  transition-delay: 1s;
}

</style>
=======
    <link rel="stylesheet" href="../Assets/index.css">
>>>>>>> c7670646d5b4952889d209edb78bafeced4ab2b6
</head>

<body>



    <div>
        <div class="AddEmpForm">
            <?php
            if (!isset($_SESSION['CreatePkgError'])) {
                $_SESSION['CreatePkgError'] = "";
            }
            include("Header.php");
            include("../Admin/AdminPanelMenu.php");
            ?>
            <div class="AdminDash">
                <fieldset
<<<<<<< HEAD
                   
                   <legend>
                       <h1 align="center">Create Packages</h1>
                   </legend>
               </fieldset>
                <div class="" align="center">
                    <div>

                    <form method="POST" action="../../Control/Admin/CreatePkgAction.php"
      onsubmit="return createPackError()">
    <div>
        <table align="center" style="text-align: left">
            <tr>
                <td><label for="Name">Package Name</label></td>
                <td>:</td>
                <td><input type="text" name="Name" id="Name"></td>
                <td>*</td>
                <td>
                    <p class="ErrorMsg" id="nameError"></p>
                </td>
            </tr>
            <tr>
                <td>Type</td>
                <td>:</td>
                <td>
                    <?php
                    $result = getTypeof();
                    echo "<select class='hselect' name='Type'>";
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
                <td><input type="text" name="Description" id="Description"></td>
            </tr>
            <tr>
                <td><label for="Price">Price </label></td>
                <td>:</td>
                <td><input type="text" name="Price" id="Price"></td>
                <td>*</td>
                <td>
                    <p class="ErrorMsg" id="priceError"></p>
                </td>
            </tr>
            <tr>
                <td><label for="Days">Duration</label></td>
                <td>:</td>
                <td><input type="text" name="Days" id="Days"></td>
                <td>*</td>
                <td>
                    <p class="ErrorMsg" id="tripError"></p>
                </td>
            </tr>
            <tr>
                <td><label for="TotalPackages">Total Package </label></td>
                <td>:</td>
                <td><input type="text" name="TotalPackages" id="TotalPackages"></td>
                <td>*</td>
                <td>
                    <p class="ErrorMsg" id="tpackError"></p>
                </td>
            </tr>
            <tr>
                <td><label for="Start_Date">Start Date </label></td>
                <td>:</td>
                <td><input type="date" name="Start_Date" id="Start_Date"></td>
                <td>*</td>
                <td>
                    <p class="ErrorMsg" id="dateError"></p>
                </td>
            </tr>
            <tr>
                <td><label for="img">Image Link </label></td>
                <td>:</td>
                <td><input type="text" name="img" id="img"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <p class="error-message">
                        <?php if (!empty($_SESSION['CreatePkgError'])) {
                            if($_SESSION['CreatePkgError'] == "Package Added Successfully"){ ?>

                        <?php }
                            print_r($_SESSION['CreatePkgError']);
                            unset($_SESSION['CreatePkgError']);
                        } ?>
                    </p>
                </td>
            </tr>
        </table>
   

=======
                    style=" border: 4px solid #3B577D; border-bottom: none; border-left: none; border-right: none;">
                    <legend style="text-align: left">
                        <h1 align="center">Create Package</h1>
                    </legend>
                </fieldset>
                <div class="" align="center">
                    <div>

                        <form method="POST" action="../../Control/Admin/CreatePkgAction.php"
                            onsubmit="return createPackError()">
                            <div>
                                <table align="center" style="text-align: left">
                                    <tr>
                                        <td><label for="Name">Package Name</label></td>
                                        <td>:</td>
                                        <td><Input type="text" name="Name" id="Name"></Input></td>
                                        <td>*</td>
                                        <td>
                                            <p class="ErrorMsg" id="nameError"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Type</td>
                                        <td>:</td>
                                        <td>
                                            <?php
                                            $result = getTypeof();
                                            echo "<select class='hselect'name='Type'>";
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
                                        <td><Input type="text" name="Description" id="Description"></Input></td>
                                    </tr>
                                    <tr>
                                        <td><label for="Price">Price </label></td>
                                        <td>:</td>
                                        <td><input type="text" name="Price" id="Price"></td>
                                        <td>*</td>
                                        <td>
                                            <p class="ErrorMsg" id="priceError"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="Days">Duration</label></td>
                                        <td>:</td>
                                        <td><Input type="text" name="Days" id="Days"></Input></td>
                                        <td>*</td>
                                        <td>
                                            <p class="ErrorMsg" id="tripError"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="TotalPackages">Total Package </label></td>
                                        <td>:</td>
                                        <td><Input type="text" name="TotalPackages" id="TotalPackages"></Input></td>
                                        <td>*</td>
                                        <td>
                                            <p class="ErrorMsg" id="tpackError"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="Start_Date">Start Date </label></td>
                                        <td>:</td>
                                        <td><Input type="date" name="Start_Date" id="Start_Date"></Input></td>
                                        <td>*</td>
                                        <td>
                                            <p class="ErrorMsg" id="dateError"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="img">Image Link </label></td>
                                        <td>:</td>
                                        <td><input type="text" name="img" id="img"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <p style="color:red; font-weight:500">
                                                <?php if (!empty($_SESSION['CreatePkgError'])) {
                                                    if($_SESSION['CreatePkgError'] == "Package Added Successfully"){ ?>

                                                <?php }
                                                    print_r($_SESSION['CreatePkgError']);
                                                    unset($_SESSION['CreatePkgError']);
                                                } ?>
                                            </p>
                                        </td>
                                    </tr>
                                </table>
>>>>>>> c7670646d5b4952889d209edb78bafeced4ab2b6
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
        include("../Footer.php");
        ?>
    </div>
    <!-- <script src="../../View/js/AdminPanel.js"></script> -->
</body>

</html>