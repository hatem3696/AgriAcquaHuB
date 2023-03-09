<!DOCTYPE html>
<html>
<head>
	<title>Crop Information</title>
	<link rel="stylesheet" type="text/css" href="CSS/cropinfo.css">
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
	</form>

	<?php
	// Check if the form has been submitted
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$crop = $_POST["crop"];
		$filename = "crops/" . $crop.".txt";

		// Check if the file exists
		if (file_exists($filename)) {
			// Read the contents of the file and display it
			$info = file_get_contents($filename);
			echo "<h2>$crop Information</h2>";
			echo "<p>$info</p>";
		} else {
			echo "<p>Sorry, information about $crop is not available.</p>";
		}
	}
	?>

</body>
</html>