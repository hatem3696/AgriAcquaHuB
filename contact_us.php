<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Times New Roman', Times, serif;
        }
        section{
            padding :40px 15% ;
        }
        .contact{
            background-color: black;
            height: 100%;
            width: 100%;
            min-height: 100vh ;
            display: grid;
            grid-template-columns: repeat(2,2fr);
            align-items: center;
            grid-gap: 6rem;

        }
        .My-image{
            max-width: 100%;
            width: 720px;
            height: auto;
            border-radius: 10px;
        
        }
        .contact-form h1{
            font-size: 80px;
            color:white ;
            margin-bottom: 20px;
        }
        span{
            color: #f9004d 
        }
        .contact-form p{
            color: blue;
            letter-spacing: 1px;
            line-height: 26px;
            font-size: 1.1rem;
            margin-bottom: 3.8rem;
        }
        .contact-form form{
            position: relative;
        }
        .contact-form form input ,
        form textarea{
           
            width: 100%;
            padding: 17px;
            border: none;
            outline: none;
            background: #191919 ;
            color: #fff ;
            font-size: 1.1rem;
            margin-bottom: 0.7rem;
            border-radius: 10px;
        }
        .contact-form textarea{
            resize: none;
            height: 200px;
        }
        .contact-form form .btn{
            display: inline-block;
            background: #f9004d;
            font-size: 1.1rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-weight: 600;
            border: 2px solid transparent ;
            border-radius: 10px;
            width :220px;
            transition : ease .30s ;
            cursor: pointer;


        }
        .contact-form form .btn:hover {
            border: 2px solid  #f9004d ;
            background: transparent;
            transform: scale(1.1);
        }
    </style>
</head>
<body style="display: flex;
 flex-direction: column; 
 align-items: center;
  height: 100vh;
   margin: 0;">
   <br>
   <br>
   <br>

  <?php include 'header.php'; ?>

    <section class="contact">
        <div class="contact-form">
            <h1>Contact <span>Us</span></h1>
        <p>I am available for freelance work.Connect with via phone : 01827175767
            or email : abdulhayee5767@gmail.com
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
        <img src="./img/contactus.jpg" alt="">
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
    <?php include 'footer.php'; ?>
</body>
</html>