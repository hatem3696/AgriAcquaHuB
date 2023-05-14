<?php
session_start();
if ($_SESSION['role'] !== "admin" && $_SESSION['role'] !== "employee") {
    header('location: ../UserLogin.php');
    exit();
}
include('../../Control/Admin/CreateWrkAction.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Workshop</title>
    <style>
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

    h1 {
        font-size: 50px;
        color: black;
        text-transform: uppercase;
        letter-spacing: 10px;
        text-align: center;
        background-color: white;
        padding: 20px;
        border: 10px;
        box-shadow: 0 0 10px #f44336;
    }
    </style>
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
                <fieldset <legend>
                    <h1 align="center">Create Workshops</h1>
                    </legend>
                </fieldset>
                <div class="" align="center">
                    <div>

                        <form method="POST" action="../../Control/Admin/CreateWrkAction.php"
                            onsubmit="return createWorkError()">
                            <div>
                                <table align="center" style="text-align: left">
                                    <tr>
                                        <td><label for="Name">Name</label></td>
                                        <td>:</td>
                                        <td><Input type="text" name="Name" id="Name"></Input></td>
                                        <td>*</td>
                                        <td>
                                            <p class="ErrorMsg" id="nameError"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="Description">Description </label></td>
                                        <td>:</td>
                                        <td><Input type="text" name="Description" id="Description"></Input></td>
                                    </tr>
                                    <tr>
                                        <td>Type</td>
                                        <td>:</td>
                                        <td>
                                            <?php
                                            $result = c_getTypeof();
                                            echo "<select class='hselect' id='category' name='category'>";
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<option value='" . $row["category"] . "'>" . $row["category"] . "</option>";
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
                                        <td><label for="Start_Date">Date</label></td>
                                        <td>:</td>
                                        <td><Input type="date" name="Start_Date" id="Start_Date"></Input></td>
                                        <td>*</td>
                                        <td>
                                            <p class="ErrorMsg" id="dateError"></p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="3">
                                            <p style="color:red; font-weight:500">
                                                <?php if (!empty($_SESSION['CreatePkgError'])) {
                                                    if ($_SESSION['CreatePkgError'] == "Package Added Successfully") { ?>

                                                <?php }
                                                    print_r($_SESSION['CreatePkgError']);
                                                    unset($_SESSION['CreatePkgError']);
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
        include("../Footer.php");
        ?>
    </div>
    <script src="../../View/js/adminPanel.js"></script>
</body>

</html>