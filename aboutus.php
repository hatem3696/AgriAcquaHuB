<<!DOCTYPE html>
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
            font-family: 'Times New Roman', Times, serif;
            box-sizing: border-box;
        }
		body{
	height: 100vh;
	width: 100%;
	background-image: url("./img/bg.png");
	background-size: cover;
	background-position: center;
	display: flex;
  flex-direction: column;
 
  margin: 0;
	align-items: center;
	justify-content: center;
	padding: 0 10%;
}
        .about{
            width: 100%;
            padding: 78px 0px;
            background-color: #191919;
            height: 100%;
            
        }
        .img{
            width: 420px;
            height: auto;
        }
        .text{
            width: 550px;

        }
        .main{
            width: 100%;
            max-width: 95%;
            margin: 0 auto ;
            display: flex;
            align-items: center;
            justify-content: space-around;
            height: 100%;

        }
        .text h1{
            color: white;
            font-size: 80px;
            text-transform: capitalize;
            margin-bottom: 20px;
        }
        .text h4{
            color: white;
            font-size: 25px;
            text-transform: capitalize;
            margin-bottom: 5px;
            letter-spacing: 2px;
        }
        span{
            color: #f9004d;
        }
        .text p{
            color: #fcfc;
            font-size: 18px;
            line-height: 28px;
            margin-bottom: 45px;
            letter-spacing: 2px;
        }
         button{
            background: #FF4742;
  border: 1px solid #FF4742;
  border-radius: 6px;
  box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: nunito,roboto,proxima-nova,"proxima nova",sans-serif;
  font-size: 16px;
  font-weight: 800;
  line-height: 16px;
  min-height: 40px;
  outline: 0;
  padding: 12px 14px;
  text-align: center;
  text-rendering: geometricprecision;
  text-transform: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;
         }
    </style>
</head>
<body>
<?php include 'header.php'; ?>

   <section class="about">
    <div class ="main">
        <img class="img" src="./img/contactus.jpg" alt="">
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
</body>
</html>