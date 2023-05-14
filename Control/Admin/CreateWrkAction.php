<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// include("Connection.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $Name = sanitize($_POST['Name']);
    $category = sanitize($_POST['category']);
    $Description = sanitize($_POST['Description']);
    $Start_Date = sanitize($_POST['Start_Date']);


    $isValid = false;
    $pkgNameValidity = false;
    if (
        empty($category) && empty($Name) && empty($Start_Date)
    ) {
        $_SESSION['CreatePkgError'] = "Please fill all the required fields";
        header("Location: ../../View/Admin/CreateWorkshop.php");
        exit();
    } else if (empty($Name)) {
        $_SESSION['CreatePkgError'] = "Name cannot be empty";
        header("Location: ../../View/Admin/CreateWorkshop.php");
        exit();
    } else if (empty($category)) {
        $_SESSION['CreatePkgError'] = "category cannot be empty";
        header("Location: ../../View/Admin/CreateWorkshop.php");
        exit();
    } else if (empty($Start_Date)) {
        $_SESSION['CreatePkgError'] = "Date cannot be empty";
        header("Location: ../../View/Admin/CreateWorkshop.php");
        exit();
    } else if (
        !empty($Name) && !empty($category) && !empty($Start_Date)
    ) {
        $isValid = true;
    }


    if (
        !empty($Name) && !empty($category) && !is_numeric($Description) && !empty($Start_Date)
        && $isValid === true && $pkgNameValidity = true
    ) {
        include('../Connection.php');
        $sql = "insert into workshops (name, category, description, time) values('$Name', '$category', '$Description' , '$Start_Date')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            $_SESSION['CreatePkgError'] = "Package Added Successfully";
            header("Location: ../../View/Admin/CreateWorkshop.php");
        }
    } else {
        $_SESSION['CreatePkgError'] = "Please provide valid informations";
        header("Location: ../../View/Admin/CreateWorkshop.php");
    }
}

function sanitize($data)
{
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    $data = trim($data);
    return $data;
}

function getTypeof()
{
    require('../../Model/Admin/PackagesModel.php');
    $result = returnType();
    return $result;
}
function c_getTypeof()
{
    require('../../Model/Admin/PackagesModel.php');
    $result = catType();
    return $result;
}