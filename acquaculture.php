<!DOCTYPE html>
<html>
<head>
	<title>Aquaculture</title>
    <link rel="stylesheet" href="CSS/aquaculture.css">
</head>
<body>
<?php include 'header.php'; ?>
	<h1 class="main-title">Welcome to Aquaculture</h1>
	<p class="sub-title">What do you need help with today?</p>
	<form method="post" action="aquaculture.php" id="needs-form">
		<input type="radio" id="farm-fish" name="need" value="farm-fish" class="need-option">
		<label for="farm-fish">I want to buy fish for farming</label><br>
		<input type="radio" id="aquarium-fish" name="need" value="aquarium-fish" class="need-option">
		<label for="aquarium-fish">I want to buy fish for my aquarium</label><br><br>
        <label for="farming-question">Do you want to know more about fish farming?</label>
        <select id="farming-question" name="farming-question" class="option-select">
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select><br>
        <label for="aquarium-question">Do you want to know more about aquariums?</label>
        <select id="aquarium-question" name="aquarium-question" class="option-select">
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select><br><br>
		<input type="submit" name="submit" value="Submit" class="submit-button">
	</form>
</body>
</html>
</html>

<?php
if(isset($_POST['submit'])){
	if(isset($_POST['need'])){
		$need = $_POST['need'];
		switch ($need) {
			case 'seeds':
				header('Location: buyseeds.php');
				break;
			case 'crops':
				header('Location: cropinfo.php');
				break;
			case 'problems':
				header('Location: agrihelp.php');
				break;
			default:
				echo "Please select an option";
				break;
		}
	}
}
?>