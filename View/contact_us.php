<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/contactus.css">
    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var subject = document.getElementById("subject").value;
            var message = document.getElementById("message").value;

            // Validate name
            if (name == "") {
                alert("Please enter your name.");
                return false;
            }

            // Validate email
            if (email == "") {
                alert("Please enter your email.");
                return false;
            } else if (!validateEmail(email)) {
                alert("Please enter a valid email address.");
                return false;
            }

            // Validate subject
            if (subject == "") {
                alert("Please enter a subject.");
                return false;
            }

            // Validate message
            if (message == "") {
                alert("Please enter your message.");
                return false;
            }

            return true;
        }

        function validateEmail(email) {
            var regex = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
            return regex.test(email);
        }
    </script>
</head>

<body>


    <?php include '../View/header.php'; ?>

    <section class="contact">
        <div class="contact-form">
            <h1>Contact <span>Us</span></h1>
            <p>As a valued user of the Agriculture Aquaculture Hub website, we would love to hear from you and provide
                any assistance or information you may need. Our team is committed to providing the best possible service
                to all of our users.

            </p>

            <form action="" onsubmit="return validateForm();">
                <input type="text" id="name" placeholder="Your NAME">
                <input type="email" id="email" name="email" placeholder="Email">
                <input type="text" id="subject" placeholder="Write a subject">
                <textarea id="message" cols="30" placeholder="Your message "></textarea>
                <input type="submit" value="Submit" class="btn">

            </form>

        </div>
        <div class="My-image">
            <img src="../img/4th.jpg" alt="">
        </div>
    </section>
    <br>
    <br>
    <?php include '../View/Footer.php'; ?>
</body>

</html>
