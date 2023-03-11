<!DOCTYPE html>
<html>
<head>
	<title>Crop Information</title>
	
	<style>
		container {
			background-color: #f1f1f1;
			padding: 20px;
			margin-top: 20px;
			border-radius: 5px;
		}
/* Select box styles */
.select-box {
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 16px;
    color: #333;
    background-color: #fff;
    transition: border-color 0.2s ease-in-out;
  }
  
  /* Select box hover styles */
  .select-box:hover {
    border-color: #666;
  }
  
  /* Select box focus styles */
  .select-box:focus {
    outline: none;
    border-color: #00bfff;
    box-shadow: 0 0 0 2px #00bfff33;
  }
  
  /* Submit button styles */
  input[type="submit"] {
    padding: 10px;
    border-radius: 5px;
    border: none;
    font-size: 16px;
    color: #fff;
    background-color: #00bfff;
    transition: background-color 0.2s ease-in-out;
  }
  
  /* Submit button hover styles */
  input[type="submit"]:hover {
    background-color: #0080ff;
  }
  
  /* Crop information heading styles */
  h2 {
    margin-top: 20px;
    font-size: 24px;
    font-weight: bold;
    color: #333;
  }
  
  /* Crop information paragraph styles */
  p {
    margin-top: 10px;
    font-size: 16px;
    line-height: 1.5;
    color: #666;
  }
    .zawrin{
      text-align: center;
    }
    .selectorx{
      display: grid;
    justify-content: center ;
    
    }
    .selectory{
      display: flex;
    }
    label{
      margin-top: 15px;
    }
    input{
      margin-top: 20px;
    }
    
		.fish-image {
			
			width: 1000px;
			height: 500px;
			
			padding : 50px;
			box-shadow: 5px 5px 10px grey;
			border-radius: 10px;
			transition: all 0.5s;
			position: relative;
			display: block;
  margin: 0 auto;
		}

		.fish-image:hover {
			transform: scale(1.1);
			z-index: 1;
			box-shadow: 10px 10px 20px grey;
		}

		.fish-image img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			border-radius: 10px;
			position: absolute;
			top: 0;
			left: 0;
		}

		.crop-info {
			display: flex;
			flex-wrap: wrap;
		}

		.fish-info p {
			margin: 20px;
			padding: 10px;
			background-color: #F0F0F0;
			box-shadow: 5px 5px 10px grey;
			border-radius: 10px;
    }
	</style>
</head>
<body>
	<?php include 'header.php'; ?>
	<h1 class="zawrin">Fish Information</h1>
	<form class ="selectorx" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<div class="selectory">
    <form>
        <label for="fish-select">Choose a fish:</label>
        <select id="fish-select" name="fish" class="select-box">>
          <option value="Angelfish">AngelFish</option>
          <option value="Betta">Betta</option>
          <option value="Discus">Discus</option>
          <option value="Guppies">Guppies</option>
          <option value="Neon">Neon</option>
         
        </select>
			<br><br>
		</div>

		<input type="submit" name="submit" value="Submit">
    <br>


    <br>
	</form>

	<?php
	// Check if the form has been submitted
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$fish = $_POST["fish"];
		$filename = "./fish/" .$fish.".txt";
		$image_filename = "./fish/".$fish.".jpg"; // or .jpeg or .png

		// Check if the file exists
		if (file_exists($filename)) {
			// Read the contents of the file and display it
			$info = file_get_contents($filename);
			echo "<div class='fish-info'>";
			echo "<div class='fish-image'><img src='$image_filename'></div>";
			echo "<p>$info</p>";
			echo "</div>";
		} else {
			
				echo "<p>Sorry, information about $fish is not available.</p>";
			}
		}
	?>
	<?php include '../View/Footer.php'; ?>
</body>
</html>