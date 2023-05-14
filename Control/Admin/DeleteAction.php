<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if ($_SESSION['role'] !== "admin" && $_SESSION['role'] !== "employee") {
    header('location: ../../View/UserLogin.php');
    exit();
}


if (isset($_GET['deletePack'])) {
    $id = $_GET['deletePack'];
    include_once('../../Model/Admin/AdminModel.php');
    $result = deletePack($id);
    if ($result) {
        $_SESSION['message'] = "Operation completed successfully";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        $_SESSION['message'] = "Error deleting record";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
if (isset($_GET['deleteWork'])) {
    $id = $_GET['deleteWork'];
    include_once('../../Model/Admin/AdminModel.php');
    $result = deleteWork($id);
    if ($result) {
        $_SESSION['message'] = "Operation completed successfully";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        $_SESSION['message'] = "Error deleting record";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}