
<!DOCTYPE html>
<html>
<head>
	<title>We're Hiring!</title>
	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
			font-size: 18px;
			line-height: 1.6;
			color: ;
		}
		h1 {
			text-align: center;
			color: green ;
			font-size: 36px;
			margin-top: 50px;
			margin-bottom: 30px;
			animation: pulse 2s ease-in-out infinite;
		}
		@keyframes pulse {
			0% {
				transform: scale(1);
			}
			50% {
				transform: scale(1.1);
			}
			100% {
				transform: scale(1);
			}
		}
		p {
			text-align: center;
			margin-top: 0;
			margin-bottom: 30px;
			color: black;
			font-size: 24px;
			transition: color 0.3s ease-in-out;
		}
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			background-color: #fff;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
			transition: transform 0.3s ease-in-out;
		}
		form:hover {
			transform: translateY(-5px);
		}
		input[type=radio] {
			margin-right: 10px;
			vertical-align: middle;
		}
		input[type=submit] {
			background-color: green;
			color: black;
			font-size: 20px;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.3s ease-in-out;
		}
		input[type=submit]:hover {
			background-color: #005580;
		}
	</style>
</head>
<body>
<?php include '../View/header.php'; ?>
	<h1>We're Hiring!</h1>
	<p>What kind of job are you interested in?</p>
	<form method="POST" action="job.php" id="job-form" class="job-form">
		<input type="radio" name="job-type" value="agriculture" id="job-type-agri" class="job-type" checked> <label for="job-type-agri">Agriculture related</label><br>
		<input type="radio" name="job-type" value="aquaculture" id="job-type-aqua" class="job-type"> <label for="job-type-aqua">Aquaculture related</label><br><br>
		<input type="submit" value="Submit" id="job-submit" class="job-submit">
	</form>

	<div id="job-list">
		<?php
			// Show the appropriate job list based on user selection
			if(isset($_POST["job-type"])) {
				if($_POST["job-type"] === "agriculture") {
					$jobs = array(
						"Farm Manager",
						"Agricultural Engineer",
						"Agronomist",
						"Horticulturist",
						"Livestock Farmer"
					);
				} else if($_POST["job-type"] === "aquaculture") {
					$jobs = array(
						"Fish Farm Manager",
						"Aquatic Biologist",
						"Fisheries Technician",
						"Aquaculture Technician",
						"Aquatic Farm Worker"
					);
				}

				// Display the job list with more information buttons
				foreach($jobs as $job) {
					echo "<p>$job <button class='more-info' data-job='$job'>More Info</button></p>";
				}
			}
		?>
	</div>

	<div id="job-info"></div>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function() {
			// Show the job requirements when user clicks on more info button
			$(".more-info").click(function() {
				var job = $(this).data("job");
				$.ajax({
					url: "jobinfo.php",
					type: "GET",
					data: {
						job: job
					},
					success: function(response) {
						$("#job-info").html(response);
					},
					error: function(xhr, status, error) {
						console.error("AJAX error: " + status + " - " + error);
					}
				});
			});
		});
	</script>
	<?php include '../View/Footer.php'; ?>
</body>
</html>
