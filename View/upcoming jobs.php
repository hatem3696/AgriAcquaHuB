<!DOCTYPE html>
<html>
<head>
	<title>We're Hiring</title>
	<style>
		/* apply some basic styles to the page */
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    color: #333;
    margin: 0;
    padding: 0;
	text-align: center;
}

/* style the header */
h1 {
    margin-top: 20px;
    text-align: center;
}

/* style the paragraph */
p {
    margin: 10px 0;
}

/* style the links for agriculture and aquaculture */
ul li a {
    display: inline-block;
    padding: 10px;
    text-decoration: none;
    color: #333;
    border: 1px solid #333;
    border-radius: 5px;
    transition: all 0.3s ease-in-out;
}

/* add hover effect to the links */
ul li a:hover {
    background-color: #333;
    color: #fff;
}

/* style the jobs div */
#jobs {
    margin: 20px 0;
}

/* style the job list */
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

/* style the job list items */
ul li {
    margin: 10px 0;
}

/* More Info link styling */
.more-info {
  display: inline-block;
  margin-left: 10px;
  padding: 5px 10px;
  background-color: #FF8C00;
  color: white;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.2s ease-in-out;
}

.more-info:hover {
  background-color: #FFA500;
}

/* Add a subtle animation to the More Info links */
.more-info {
  animation-name: pulse;
  animation-duration: 1s;
  animation-timing-function: ease-in-out;
  animation-iteration-count: infinite;
}

@keyframes pulse {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.2);
  }
  100% {
    transform: scale(1);
  }
}

}

/* add a fade-in animation to the page */
body {
    opacity: 0;
    animation: fadeIn 1s ease-in-out forwards;
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

		</style>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#agriculture").click(function(){
				$("#jobs").html(`
					<ul>
						<li>Agricultural Engineer <a href="#" class="more-info">More Info</a></li>
						<li>Farm Manager <a href="#" class="more-info">More Info</a></li>
						<li>Agricultural Scientist <a href="#" class="more-info">More Info</a></li>
						<li>Plant Breeder <a href="#" class="more-info">More Info</a></li>
						<li>Animal Scientist <a href="#" class="more-info">More Info</a></li>
					</ul>
				`);
			});

			$("#aquaculture").click(function(){
				$("#jobs").html(`
					<ul>
						<li>Aquaculture Technician <a href="#" class="more-info">More Info</a></li>
						<li>Fish Farm Manager <a href="#" class="more-info">More Info</a></li>
						<li>Aquatic Biologist <a href="#" class="more-info">More Info</a></li>
						<li>Seafood Quality Control Inspector <a href="#" class="more-info">More Info</a></li>
						<li>Marine Hatchery Manager <a href="#" class="more-info">More Info</a></li>
					</ul>
				`);
			});

			$(document).on("click", ".more-info", function(){
				var jobTitle = $(this).prev().text();
				alert(`More information about ${jobTitle} will be available soon.`);
			});
		});
	</script>
</head>
<body>
	<h1>We're Hiring</h1>
	<p>Which kind of job are you interested in?</p>
	<ul>
		<li><a href="#" id="agriculture">Agriculture</a></li>
		<li><a href="#" id="aquaculture">Aquaculture</a></li>
	</ul>
	<div id="jobs"></div>
</body>
</html>
