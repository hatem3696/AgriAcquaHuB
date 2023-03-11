<!DOCTYPE html>
<html>
<head>
	<title>AgriHelp</title>
	<link rel="stylesheet" href="../CSS/agrihelp.css">
	<style type="text/css">
		label {
			display: block;
			margin-top: 10px;
		}
		select {
			margin-top: 5px;
		}
		input[type="submit"] {
			margin-top: 10px;
		}
	</style>
</head>
<?php include 'header.php'; ?>
<body>
	<form method="post">
		<label for="name">What's your name?</label>
		<input type="text" id="name" name="name" required>

		<label for="problem">What's your problem?</label>
		<select id="problem" name="problem">
			<option value="">Select a problem</option>
			<option value="1">Pests and diseases</option>
			<option value="2">Soil fertility</option>
			<option value="3">Irrigation</option>
			<option value="4">Crop selection</option>
			<option value="5">Harvesting</option>
			<option value="6">Marketing</option>
			<option value="7">Weather</option>
			<option value="8">Pricing</option>
			<option value="9">Labor</option>
			<option value="10">Equipment and machinery</option>
		</select>

		<input type="submit" value="Submit">
	</form>

	<?php
		// Check if the form has been submitted
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$name = $_POST["name"];
			$problem = $_POST["problem"];

			if (!empty($name) && !empty($problem)) {
				switch ($problem) {
					case 1:
						echo "<h2>Solutions for pests and diseases</h2>";
						echo "<ul>";
						echo "<li>Use natural pesticides and herbicides</li>";
						echo "<li>Crop rotation to prevent disease buildup</li>";
						echo "<li>Implement integrated pest management techniques</li>";
						echo "</ul>";
						break;
					case 2:
						echo "<h2>Solutions for soil fertility</h2>";
						echo "<ul>";
						echo "<li>Use compost or manure to improve soil health</li>";
						echo "<li>Add nutrients like nitrogen, phosphorus, and potassium</li>";
						echo "<li>Plant cover crops to prevent erosion and add organic matter</li>";
						echo "</ul>";
						break;
					case 3:
						echo "<h2>Solutions for irrigation</h2>";
						echo "<ul>";
						echo "<li>Implement drip irrigation systems to conserve water</li>";
						echo "<li>Use rainwater harvesting techniques to collect and store water</li>";
						echo "<li>Plant drought-resistant crops</li>";
						echo "</ul>";
						break;
					case 4:
						echo "<h2>Solutions for crop selection</h2>";
						echo "<ul>";
						echo "<li>Choose crops that are well-suited to your soil and climate</li>";
						echo "<li>Rotate crops to prevent disease and pest buildup</li>";
						echo "<li>Consider market demand and profitability</li>";
						echo "</ul>";
						break;
					case 5:
						echo "<h2>Solutions for harvesting</h2>";
						echo "<ul>";
						echo "<li>Harvest at the right time to maximize yield and quality</li>";
						echo "<li>Use proper techniques to avoid damage to crops</li>";
						echo "<li>Ensure proper storage and transportation of harvested crops</li>";
					echo "</ul>";
					break;
				case 6:
					echo "<h2>Solutions for marketing</h2>";
					echo "<ul>";
					echo "<li>Identify and target your ideal customer base</li>";
					echo "<li>Create a strong brand identity and marketing strategy</li>";
					echo "<li>Partner with local markets or distributors to increase visibility and sales</li>";
					echo "</ul>";
					break;
				case 7:
					echo "<h2>Solutions for weather</h2>";
					echo "<ul>";
					echo "<li>Monitor weather forecasts and plan accordingly</li>";
					echo "<li>Implement irrigation systems to mitigate drought</li>";
					echo "<li>Use greenhouse or other protective structures to shelter crops from extreme weather</li>";
					echo "</ul>";
					break;
				case 8:
					echo "<h2>Solutions for pricing</h2>";
					echo "<ul>";
					echo "<li>Research market trends and pricing</li>";
					echo "<li>Consider production costs when setting prices</li>";
					echo "<li>Find a balance between profitability and affordability for customers</li>";
					echo "</ul>";
					break;
				case 9:
					echo "<h2>Solutions for labor</h2>";
					echo "<ul>";
					echo "<li>Implement fair </li>";
                    echo "<li>Recruiting: More Referrals = Better Employees.</li>";
                    echo "<li>Optimize the Onboarding Experience.</li>";
                    echo "<li>Make Training an Ongoing Process.</li>";
                    echo "<li>Provide Context Around Why Policies and Processes Change. </li>";
                    echo "<li>Better Scheduling for Better Lives.</li>";
                    echo "<li>Build Better Teams Through Better Communication. </li>";
                    echo "<li>Recognize and Reward.</li>";
                    echo "</ul>";
					break;

                case 10 :
					echo "<h2>Solutions Equipment and machinery </h2>";
					echo "<ul>";
					echo "<li>Cope with climate change, soil erosion and biodiversity loss </li>";
                    echo "<li>Satisfy consumers' changing tastes and expectations.</li>";
                    echo "<li>Meet rising demand for more food of higher quality..</li>";
                    echo "<li>Make Training an Ongoing Process.</li>";
                    echo "<li>Invest in farm productivity. </li>";
                    echo "<li>Adopt and learn new technologies.</li>";
                    echo "<li>Stay resilient against global economic factors. </li>";
                    echo "<li>Inspire young people to stay in rural areas and become future farmers</li>";
                    echo "<li>Maintain and repair equipment regularly to prevent breakdowns and downtime</li>";
					echo "<li>Upgrade or replace outdated equipment to improve efficiency and productivity</li>";
					echo "<li>Implement safety protocols to protect workers from accidents</li>";
					echo "</ul>";
					break;
					default:
					echo "<p>Please select a problem to get solutions</p>";
					break;
						}
				} else {
echo "<p>Please enter your name and select a problem to get solutions</p>";
					}
					}
					?>
 
</body>
</html>