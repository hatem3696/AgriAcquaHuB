<!DOCTYPE html>
<html>
<head>
	<title>Fish Farming Information</title>
	<link rel="stylesheet" href="../CSS/fishfarminginfo.css">
	<style>
		#fish-form {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
}

#topic {
  margin-bottom: 10px;
}

#submit-button {
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  text-decoration: none;
  border-radius: 5px;
}
</style>
</head>
<body>
<?php include '../View/header.php'; ?>
	<h1>Fish Farming Information</h1>
	
	<form action="fishfarminginfo.php" method="post">
		<label for="topic">What would you like to know?</label><br>
		<select id="topic" name="topic">
			<option value="">Select a topic</option>
			<option value="breeding">Breeding fish</option>
			<option value="raising">Raising fish</option>
			<option value="harvesting">Harvesting fish</option>
			<option value="shellfish">Shellfish farming</option>
			<option value="aquatic">Aquatic plant farming</option>
		</select><br><br>
		<input type="submit" value="Submit">
	</form>
	
	<?php
	// Check if form was submitted
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Get the selected topic
		$topic = $_POST["topic"];
		
		// Display information based on the selected topic
		if ($topic == "breeding") {
			echo "<h1>Breeding Fish</h1>";
			echo "<p><h2>What is the importance of fish breeding in aquaculture?
            Fish breeding is the act of producing young ones from parent brood fish. This ensures species continuity and survival. In aquaculture, fish breeding is a very important activity ensuring availability of fingerlings for the stocking of ponds, pens, tanks and cages</p>
            
            <p>How do you make fish breed?
            Most fish species are stimulated to breed in the springtime when the water warms up and the daylight lengthens. You can replicate this anytime in your home aquarium by doing water changes, increasing the temperature setting on the aquarium thermometer, and gradually increasing the length of time the lights are on.</p></h2>";
			echo "<img src='https://images2.ratemyfishtank.com/photo/1200x675/0/102/spawning-of-corydoras-3742288-1920-ELDTUh.jpg' alt='Breeding Fish' id='image'>";
		} elseif ($topic == "raising") {
			echo "<h2>Raising Fish</h2>";
			echo "<p>Farm-raised fish are commercially raised in controlled pens that exist within lakes, oceans or rivers, as well as fish raised in large tanks. Farm-raised fish are bred to make fish cheaper and more readily available to consumers. As it stands, farm-raised fish makes up about 90% of the fish consumption within the US";
			echo "<img src='https://modernfarmer.com/wp-content/uploads/2016/05/aquaculture.jpg' alt='Raising Fish' id='image'>";
		} elseif ($topic == "harvesting") {
			echo "<h1>Harvesting Fish</h1>";
			echo "<p><h3>Traditional methods of fish harvesting are Ring seine, Stake net, Chinese dip net, Cast net, Shore seine, Trammel net, Mini trawls, Gill ntes, Hook and line, traps and pots. Modern methods of fish harvesting include Trawling, Purse seining, Gill net, Hook and line mechanized, Jigging and Trolling lines..</h3></p>";
			echo "<img src='https://i.ytimg.com/vi/9qc7e9jxqb8/maxresdefault.jpg' alt='Harvesting Fish' id='image'>";
		} elseif ($topic == "shellfish") {
			echo "<h2>Shellfish Farming</h2>";
			echo "<p>Shellfish is a colloquial and fisheries term for exoskeleton-bearing aquatic invertebrates used as food, including various species of molluscs, crustaceans, and echinoderms. Although most kinds of shellfish are harvested from saltwater environments, some are found in freshwater..</p>";
			echo "<img src='https://www.rdtaxsavers.com/articles/main-images/Shellfish-Farming.jpeg' alt='Shellfish Farming' id='image'>";
		} elseif ($topic == "aquatic") {
			echo "<h2>Aquatic Plant Farming</h2>";
			echo "<p>Aquatic plants are plants that have adapted to living in aquatic environments. They are also referred to as hydrophytes or macrophytes to distinguish them from algae and other microphytes. A macrophyte is a plant that grows in or near water and is either emergent, submergent, or floating..</p>";
			echo "<img src='https://i.pinimg.com/originals/d3/f5/66/d3f5662ad7828b23bf60b0b5acad3787.jpg' alt='Aquatic Plant Farming' id='image'>";
		}
	}
	?>
	<?php include '../View/Footer.php'; ?>
</body>
</html>
