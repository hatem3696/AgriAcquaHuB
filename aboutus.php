<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/aboutus.css">
    
</head>
<body>
<?php include 'header.php'; ?>

   <section class="about">
    <div class ="main">
        <img class="img" src="./img/aboutus.jpg" alt="">
        <div class="text">
            <h1>About us</h1>
            <h4>Agriculture <span>& Aquaculture</span> </h4>
            <p>AgricultureAquacultureHub is a website dedicated to promoting sustainable farming practices and technologies.

Our focus is on the integration of aquaculture and agriculture, with the goal of increasing food production while minimizing environmental impact.

We provide information and resources to farmers, entrepreneurs, and other stakeholders interested in sustainable farming practices.

Our website features articles, case studies, and other educational materials to help users learn about the latest innovations in the field.

We also provide a platform for users to connect and share their experiences, and to collaborate on projects related to sustainable farming.

Our ultimate aim is to support the development of a more sustainable and equitable food system for everyone.

Join us in the journey towards a better future for agriculture and aquaculture.</p>
         
           
        </div>


    </div>
   </section>
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
    <?php include 'footer.php'; ?>
</body>
</html>