<!DOCTYPE html>
<html>
<head>
	<title> Fish information</title>
	<style>
		/* Styles for the main title */
.main-title {
  font-size: 32px;
  font-weight: bold;
  text-align: center;
  margin-top: 40px;
}

/* Styles for the paragraph */
p {
  font-size: 18px;
  text-align: center;
  margin-top: 20px;
}

/* Styles for the form */
#fish-form {
  width: 60%;
  margin: 0 auto;
}

/* Styles for the radio buttons and labels */
.fish-option {
  display: none;
  text-align: center;
}

.fish-option + label {
  display: inline-block;
  font-size: 20px;
  margin-bottom: 10px;
  cursor: pointer;
  padding-left: 30px;
  position: relative;
}

.fish-option + label:before {
  content: "";
  display: inline-block;
  width: 20px;
  height: 20px;
  border: 2px solid #333;
  border-radius: 50%;
  margin-right: 10px;
  position: absolute;
  left: 0;
  top: 2px;
}

.fish-option:checked + label:before {
  background-color: #333;
  
}

/* Styles for the submit button */
.submit-button {
  display: block;
  margin: 0 auto;
  font-size: 20px;
  padding: 10px 20px;
  background-color: #333;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.2s ease-in-out;
}

.submit-button:hover {
  background-color: #666;
}
</style>
</head>
<body>
<?php include '../View/header.php'; ?>

	<h1 class="main-title">Buy Fish for Farming</h1>
	<p>Please select a fish from the list below:</p>
	<form method="post" action="fishinfo.php" id="fish-form">
		<input type="radio" id="boal" name="fish" value="boal" class="fish-option">
		<label for="boal">Boal</label><br>
		<input type="radio" id="chitol" name="fish" value="chitol" class="fish-option">
		<label for="chitol">Chitol</label><br>
		<input type="radio" id="ilish" name="fish" value="ilish" class="fish-option">
		<label for="ilish">Ilish</label><br>
		<input type="radio" id="katla" name="fish" value="katla" class="fish-option">
		<label for="katla">Katla</label><br>
		<input type="radio" id="koi" name="fish" value="koi" class="fish-option">
		<label for="koi">Koi</label><br>
		<input type="radio" id="pabda" name="fish" value="pabda" class="fish-option">
		<label for="pabda">Pabda</label><br>
		<input type="radio" id="pangas" name="fish" value="pangas" class="fish-option">
		<label for="pangas">Pangas</label><br>
		<input type="radio" id="rui" name="fish" value="rui" class="fish-option">
		<label for="rui">Rui</label><br>
		<input type="radio" id="shingi" name="fish" value="shingi" class="fish-option">
		<label for="shingi">Shingi</label><br>
		<input type="radio" id="tilapia" name="fish" value="tilapia" class="fish-option">
		<label for="tilapia">Tilapia</label><br><br>
		<input type="submit" name="submit" value="Submit" class="submit-button">
	</form>
</body>


</html>
<?php
	// Check if the form has been submitted
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$fish = $_POST["fish"];
		$filename = "./fish/" .$fish.".txt";

		// Check if the file exists
		if (file_exists($filename)) {
			// Read the contents of the file and display it
			$info = file_get_contents($filename);
			echo "<h2>$fish Information</h2>";
			echo "<p>$info</p>";
		} else {
			echo "<p>Sorry, information about $fish is not available.</p>";
		}
	}
	?>
	<?php include '../View/Footer.php'; ?>