<!DOCTYPE html>
<html>
<head>
	<title>Crop Information</title>
	<link rel="stylesheet" type="text/css" href="CSS/cropinfo.css">
</head>
<body>
	<?php include 'header.php'; ?>
	<h1>Crop Information</h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label for="crop-select">Select a crop:</label>
		<select id="crop-select" name="crop" class="select-box">
			<option value="Rice">Rice</option>
			<option value="onion">Onion</option>
			<option value="maize">Maize</option>
			<option value="soyaben">Soyaben</option>
			<option value="cotton">Cotton</option>
			<option value="jute">Jute</option>
			<option value="tomato">Tomato</option>
			<option value="potato">Potato</option>
			<option value="eggplant">Eggplant</option>
			<option value="cucumber">Cucumber</option>
		</select>
		<br><br>
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