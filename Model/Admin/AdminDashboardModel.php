<?php

function getUsersNum()
{
    include('../../Model/Connection.php');
    $sql = "SELECT * FROM users";
    $result = mysqli_query($con, $sql);
    $num_rows = mysqli_num_rows($result);
    return $num_rows;
}
function getPackNum()
{
    include('../../Model/Connection.php');
    $sql = "SELECT * FROM packages";
    $result = mysqli_query($con, $sql);
    $num_rows = mysqli_num_rows($result);
    return $num_rows;
}
function getWorkNum()
{
    include('../../Model/Connection.php');
    $sql = "SELECT * FROM workshops";
    $result = mysqli_query($con, $sql);
    $num_rows = mysqli_num_rows($result);
    return $num_rows;
}
?>