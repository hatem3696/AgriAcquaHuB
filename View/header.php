<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>My Website</title>
    <link rel="stylesheet" href="../CSS/navbar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

</head>
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<body>
    <div class="hero">
        <nav>
            <h2 class="logo">
                Agri-<span>Aqua-HuB</span>
            </h2>
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Login.php">Log in</a></li>
                <li><a href="agriculture.php">Agriculture</a></li>
                <li><a href="aquaculture.php">Aquaculture</a></li>
                <li><a href="workshop.php">Workshop</a></li>
                <li><a href="packages.php">Packages</a></li>
<<<<<<< HEAD
                <li><a href="job.php">Jobs</a></li>
                <li><a href="Feedback.php">FeedBack</a></li>
=======
>>>>>>> c7670646d5b4952889d209edb78bafeced4ab2b6
                <li><a href="aboutus.php">About us</a></li>
                <li><a href="contact_us.php">Contact us</a></li>
                <?php
                    if (isset($_SESSION['username'])) {

                        if ($_SESSION['role'] == 'admin') {
                        ?>
                <li><a href="Admin/AdminPanel.php">Admin Panel</a></li>



                <?php }
                    } ?>
            </ul>
            <button type="button"><a href="Registration.php">Sign up</a></button>
        </nav>
    </div>
</body>

</html>