<?php
session_start();
if (isset($_SESSION['user'])) {
    header('location:../View/profile.php');
}

if (isset($_POST['submit'])) {
    // Define variables and set to empty values
    $user = $pass = "";

    // Validate input and store in variables
    if (empty($_POST["user"])) {
        echo "<p>Username is required.</p>";
    } else {
        $user = test_input($_POST["user"]);
        // Validate username
        if (!preg_match("/^[a-zA-Z0-9_]*$/", $user)) {
            echo "<p>Username can only contain letters, numbers, and underscores.</p>";
        } elseif (strlen($user) < 6) {
            echo "<p>Username must be at least 6 characters long.</p>";
        } else {
            // Username is valid
        }
    }

    if (empty($_POST["pass"])) {
        echo "<p>Password is required.</p>";
    } else {
        $pass = test_input($_POST["pass"]);
        // Validate password
        if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $pass)) {
            echo "<p>Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one digit, and one special character.</p>";
        } else {
            // Password is valid
        }
    }

    if (isset($_POST["email"])) {
        $email = test_input($_POST["email"]);
        // Validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Invalid email format.</p>";
        } else {
            // Email is valid
        }
    }

    // If all input is valid, start the session and redirect to profile page
    if (!empty($user) && !empty($pass)) {
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;
        //echo "Hi ". $_SESSION['user'];
        header('location:../View/profile.php');
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
