<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    include('Connection.php');
    $arr = array();

    if ($_GET['type'] == 1) {
        $sql = "SELECT `name`, `description`, `category`, `time` FROM `workshops` WHERE `category` = 'Agriculture';";
        $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {
            $arr[] = array(
                'name' => $row['name'],
                'description' => $row['description'],
                'category' => $row['category'],
                'time' => $row['time'],
            );
        }
        echo json_encode($arr);
    } else if ($_GET['type'] == 2) {
        $sql = "SELECT `name`, `description`, `category`, `time` FROM `workshops` WHERE `category` = 'Aquaculture';";
        $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {
            $arr[] = array(
                'name' => $row['name'],
                'description' => $row['description'],
                'category' => $row['category'],
                'time' => $row['time'],
            );
        }
        echo json_encode($arr);
    }
}