<?php
function userType($username)
{
    require("Connection.php");
    $query = "SELECT * FROM users WHERE username = ? AND role = ? LIMIT 1;";
    $stmt = $con->prepare($query);
    $stmt->bind_param("ss", $username, $role);

    $role = 'admin';
    $stmt->execute();
    $result2 = $stmt->get_result();

    $role = 'employee';
    $stmt->execute();
    $result3 = $stmt->get_result();

    if ($result2 && mysqli_num_rows($result2) > 0) {
        $role = 'admin';
    } else if ($result3 && mysqli_num_rows($result3) > 0) {
        $role = 'employee';
    } else {
        $role = 'customer';
    }

    $stmt->close();
    $con->close();

    return $role;
}
?>