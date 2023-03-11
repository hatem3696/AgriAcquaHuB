<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/contactus.css">
</head>
<body >


<?php include '../View/header.php'; ?>

    <section class="contact">
        <div class="contact-form">
            <h1>Contact <span>Us</span></h1>
        <p>As a valued user of the Agriculture Aquaculture Hub website, we would love to hear from you and provide any assistance or information you may need. Our team is committed to providing the best possible service to all of our users.
             
        </p>
        
        <form action="">
            <input type="" placeholder="Your NAME" required>
            <input type="email" id="email" name="email" placeholder="Email" required>
        <input type="" placeholder="Write a subject" required>
          <textarea name="" id="" cols="30" placeholder="Your message " required>
          </textarea>
            <input type="submit" name="" value="Submit" class="btn">
            
        </form>
        
    </div>
    <div class="My-image">
        <img src="../img/4th.jpg" alt="" >
    </div>   
    
    <?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST["name"];
		$email = $_POST["email"];
		$message = $_POST["message"];

		// Split name into separate words
		$names = explode(" ", $name);

		// Check that each name is valid
		foreach ($names as $n) {
			if (!preg_match("/^[a-zA-Z ]+$/", $n)) {
				echo "Name must contain only letters and spaces.";
				exit;
			}
		}

		if (strpos($email, "@") === false) {
			echo "Email must contain an @ symbol.";
		} else {
			echo "Thank you for your message, " . $name . ".";
		}
	}
	?>
        </body>
        </html>
    
    </section>
    <br>
    <br>
    <?php include '../View/Footer.php'; ?>
</body>
</html>