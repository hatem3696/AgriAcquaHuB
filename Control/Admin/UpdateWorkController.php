<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if ($_SESSION['role'] !== "admin" && $_SESSION['role'] !== "employee") {
    header('location: UserLogin.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_GET['updateid'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $time = $_POST['time'];

    require('../../Model/Admin/PackagesModel.php');
    $result = validatePWorkName($name);


    $isValid = false;
    $pkgNameValidity = false;

    // Check if Name is valid or not
    if ($result == false) {
        $result1 = c_validateWorkName($name);
        if ($result1) {
            $pkgNameValidity = true;
            die($result1);
        }
    } else {
        $pkgNameValidity = true;
    }

    //checks if fields are filled or not
    if (
        empty($name) && empty($description) && empty($category) && empty($time)
    ) {
        $_SESSION['updatePackError'] = "Please fill all the required fields";
        header("Location: ../../View/Admin/UpdateWorkshop.php?updateWork=$id");
        exit();
    } else if (empty($name)) {
        $_SESSION['updatePackError'] = "Name cannot be empty";
        header("Location: ../../View/Admin/UpdateWorkshop.php?updateWork=$id");
        exit();
    } else if (empty($category)) {
        $_SESSION['updatePackError'] = "Category cannot be empty";
        header("Location: ../../View/Admin/UpdateWorkshop.php?updateWork=$id");
        exit();
    } else if (empty($description)) {
        $_SESSION['updatePackError'] = "Description cannot be empty";
        header("Location: ../../View/Admin/UpdateWorkshop.php?updateWork=$id");
        exit();
    } else if (empty($time)) {
        $_SESSION['updatePackError'] = "Time cannot be empty";
        header("Location: ../../View/Admin/UpdateWorkshop.php?updateWork=$id");
        exit();
    } else if (
        !empty($name) && !empty($category) && !empty($description) && !empty($time)
    ) {
        $isValid = true;
    }


    if (
        !empty($name) && !empty($description) && !is_numeric($name) && !empty($category) && !empty($time)
        && $isValid === true && $pkgNameValidity = true
    ) {
        $result = UpdateWorkshop($id, $name, $category, $description, $time);
        if ($result) {
            $_SESSION['updatePackError'] = "Workshop Updated Successfully";
            header("Location: ../../View/Admin/UpdateWorkshop.php?updateWork=$id");
        } else {
            $_SESSION['updatePackError'] = "Something Went Wrong";
            header("Location: ../../View/Admin/UpdateWorkshop.php?updateWork=$id");
        }
    } else {
        $_SESSION['updatePackError'] = "Please provide correct informations";
        header("Location: ../../View/Admin/UpdateWorkshop.php?updateWork=$id");
    }
}

function sanitize($data)
{
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    $data = trim($data);
    return $data;
}



function getWork($id)
{
    require_once('../../Model/Admin/PackagesModel.php');
    $result = getWorks($id);
    return $result;
}
function cc_getType()
{
    require_once('../../Model/Admin/PackagesModel.php');
    $result = catType();
    return $result;
}