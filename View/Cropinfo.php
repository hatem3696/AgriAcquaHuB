<!DOCTYPE html>
<html>
<head>
	<title>Crop Information</title>
	<link rel="stylesheet" type="text/css" href="../CSS/cropinfo.css">
	<style>
		/* CSS for the image */
		.crop-image {
			
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

		.crop-image:hover {
			transform: scale(1.1);
			z-index: 1;
			box-shadow: 10px 10px 20px grey;
		}

		.crop-image img {
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

		.crop-info p {
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
	<h1 class="zawrin">Crop Information</h1>
	<form class ="selectorx" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<div class="selectory">
			<label for="crop-select">Select a crop:</label>
			<select id="crop-select" name="crop" class="select-box">
				<option value="Rice">Rice</option>
				<option value="Onion">Onion</option>
				<option value="Maize">Maize</option>
				<option value="Soyaben">Soyaben</option>
				<option value="Cotton">Cotton</option>
				<option value="Jute">Jute</option>
				<option value="Tomato">Tomato</option>
				<option value="Potato">Potato</option>
				<option value="Eggplant">Eggplant</option>
				<option value="Cucumber">Cucumber</option>
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
		$crop = $_POST["crop"];
		$filename = "./crops/" .$crop.".txt";
		$image_filename = "./crops/" .$crop.".jpg"; // or .jpeg or .png

		// Check if the file exists
		if (file_exists($filename)) {
			// Read the contents of the file and display it
			$info = file_get_contents($filename);
			echo "<div class='crop-info'>";
			echo "<div class='crop-image'><img src='$image_filename'></div>";
			echo "<p>$info</p>";
			echo "</div>";
		} else {
			
				echo "<p>Sorry, information about $crop is not available.</p>";
			}
		}
	?>
	<?php include '../View/Footer.php'; ?>
</body>
</html>
