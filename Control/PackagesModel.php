<?php
function getPackages($page)
{
    if ($page == 2) {
        require('Connection.php');
        $sql = "SELECT * FROM packages";
        $result = $con->query($sql);
        return $result;
    }
    if ($page == 1) {
        require('Connection.php');
        $sql = "SELECT * FROM packages";
        $result = $con->query($sql);
        return $result;
    }
}
?>