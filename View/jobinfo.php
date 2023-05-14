<!DOCTYPE html>
<html>
<head>
	<title>Job Requirements</title>
</head>
<style>
	.apply-button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border-radius: 5px;
  text-decoration: none;
  transition: background-color 0.3s ease-in-out;
}

.apply-button:hover {
  background-color: #0056b3;
}

.apply-button:active {
  transform: translateY(1px);
}

	</style>

<body>

	<h1>Job Requirements</h1>
	
	<?php
		// Define the list of jobs and their requirements
		$jobs = array(
			"Farm Manager" => "Minimum of 5 years experience in agricultural management.",
			"Agricultural Engineer" => "Bachelor's degree in agricultural engineering or related field.",
			"Agronomist" => "Master's degree in agronomy or related field.",
			"Horticulturist" => "Bachelor's degree in horticulture or related field.",
			"Livestock Farmer" => "Minimum of 3 years experience in livestock farming.",
			"Fish Farm Manager" => "Minimum of 5 years experience in aquaculture management.",
			"Aquatic Biologist" => "Master's degree in aquatic biology or related field.",
			"Fisheries Technician" => "Associate's degree in fisheries management or related field.",
			"Aquaculture Technician" => "Minimum of 2 years experience in aquaculture.",
			"Aquatic Farm Worker" => "High school diploma or equivalent.",
		);

		// Loop through the list of jobs and display their requirements
		foreach ($jobs as $job => $requirements) {
			echo "<h2>$job</h2>";
			echo "<p>$requirements</p>";
			echo "<a href=\"jobapplication.php?job=$job\" class=\"apply-button\">Apply</a>";

		}
	?>
</body>
</html>
