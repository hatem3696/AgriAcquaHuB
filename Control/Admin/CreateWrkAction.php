<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// include("Connection.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $Name = sanitize($_POST['Name']);
    $Type = sanitize($_POST['Type']);
    $Description = sanitize($_POST['Description']);
    $Start_Date = sanitize($_POST['Start_Date']);


    $isValid = false;
    $pkgNameValidity = false;

    //Check package name Validity
    require('../../Model/Admin/PackagesModel.php');
    $result = validatePkgName($Name);
    if ($result == false) {
        $_SESSION['CreatePkgError'] = "This Package Name already exists";
        header("Location: ../../View/Admin/CreatePackage.php");
        exit();
    } else if ($result == true) {
        $pkgNameValidity = true;
    }

    //checks if fields are filled or not
    if (
        empty($Type) && empty($Name) && empty($Start_Date) 
    ) {
        $_SESSION['CreatePkgError'] = "Please fill all the required fields";
        header("Location: ../../View/Admin/CreatePackage.php");
        exit();

    } else if (empty($Name)) {
        $_SESSION['CreatePkgError'] = "Name cannot be empty";
        header("Location: ../../View/Admin/CreatePackage.php");
        exit();
    } else if (empty($Type)) {
        $_SESSION['CreatePkgError'] = "Type cannot be empty";
        header("Location: ../../View/Admin/CreatePackage.php");
        exit();
    } else if (empty($Start_Date)) {
        $_SESSION['CreatePkgError'] = "Starting Date cannot be empty";
        header("Location: ../../View/Admin/CreatePackage.php");
        exit();
    } else if (
        !empty($Name) && !empty($Type) && !empty($Start_Date)
    ) {
        $isValid = true;
    }


    if (
        !empty($Name) && !empty($Type) && !is_numeric($Name) && !empty($Price) && !empty($P_left) && !empty($Days) && !empty($Start_Date)
        && $isValid === true && $pkgNameValidity = true
    ) {
        $result = createPackage($Name, $Type, $Description, $Price, $Days, $P_left, $Start_Date, $End_Date, $Img_url);
        if ($result) {
            $_SESSION['CreatePkgError'] = "Package Added Successfully";
            header("Location: ../../View/Admin/CreatePackage.php");
        }

    } else {
        $_SESSION['CreatePkgError'] = "Please provide valid informations";
        header("Location: ../../View/Admin/CreatePackage.php");
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
?>