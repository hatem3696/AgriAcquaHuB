<?php
function viewAllWorkshops()
{
    require('Connection.php');
    $sql = "SELECT * FROM workshops";
    $result = mysqli_query($con, $sql);
    return $result;
}
?>