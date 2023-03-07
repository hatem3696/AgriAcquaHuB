<!DOCTYPE html>
<html>
<head>
	<title>Agriculture</title>
    <link rel="stylesheet" href="CSS/agriculture.css">
</head>
<body>
<?php include 'header.php'; ?>
	<h1 class="main-title">Welcome to Agriculture</h1>
	<p class="sub-title">What do you need help with today?</p>
	<form method="post" action="agriculture.php" id="needs-form">
		<input type="radio" id="seeds" name="need" value="seeds" class="need-option">
		<label for="seeds">I want to buy seeds</label><br>
		<input type="radio" id="crops" name="need" value="crops" class="need-option">
		<label for="crops">I want to learn about my crops</label><br>
		<input type="radio" id="problems" name="need" value="problems" class="need-option">
		<label for="problems">I am having problems with my agriculture</label><br><br>
		<input type="submit" name="submit" value="Submit" class="submit-button">
	</form>
</body>
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
