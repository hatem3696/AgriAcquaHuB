<!DOCTYPE html>
<html>
<head>
	<title>Buy Seeds - Agriculture</title>
	<link rel="stylesheet" type="text/css" href="CSS/buyseeds.css">
</head>
<body>
<?php include 'header.php'; ?>
	<h1>Buy Seeds</h1>
	<div class="seed-container">
		<?php
		// List of seeds with name, image, description, why to buy, market demand, and affiliate link
		$seeds = array(
			$array = array(
				"name" => "Rice Seeds",
				"image" => "../img/rice-seed.jpg", // update the image path
				"description" => "High-quality rice seeds for a good harvest",
				"why_to_buy" => "Rice is a staple food in Bangladesh, making rice seeds a valuable commodity for farmers",
				"market_demand" => "High demand for rice seeds in the local market",
				"affiliate_link" => "https://www.amazon.com/buy-rice-seeds"
			),
			array(
				"name" => "Wheat Seeds",
				"image" => "wheat-seeds.jpg",
				"description" => "Top-quality wheat seeds for a better yield",
				"why_to_buy" => "Wheat is a versatile crop that is used for various purposes, making it a valuable investment for farmers",
				"market_demand" => "High demand for wheat seeds in the local market",
				"affiliate_link" => "https://www.daraz.com.bd/buy-wheat-seeds"
			),
			array(
				"name" => "Maize Seeds",
				"image" => "maize-seeds.jpg",
				"description" => "Premium quality maize seeds for a great harvest",
				"why_to_buy" => "Maize is a popular crop that is used for both human and animal consumption, making maize seeds a valuable investment for farmers",
				"market_demand" => "Moderate demand for maize seeds in the local market",
				"affiliate_link" => "https://www.amazon.com/buy-maize-seeds"
			),
			array(
				"name" => "Soybean Seeds",
				"image" => "soybean-seeds.jpg",
				"description" => "High-yielding soybean seeds for superior performance",
				"why_to_buy" => "Soybeans are a valuable cash crop in Bangladesh, and high-quality seeds are necessary for achieving maximum yields and profitability",
				"market_demand" => "Strong demand for soybean seeds in the local market",
				"affiliate_link" => "https://www.amazon.com/buy-soybean-seeds"
			),
			array(
				"name" => "Cotton Seeds",
				"image" => "cotton-seeds.jpg",
				"description" => "Premium cotton seeds for high-quality fiber production",
				"why_to_buy" => "Cotton is an important cash crop in Bangladesh, and high-quality seeds are necessary for producing superior fiber for textile and other uses",
				"market_demand" => "Growing demand for cotton seeds in the local market",
				"affiliate_link" => "https://www.amazon.com/buy-cotton-seeds"
			),
			array(
				"name" => "Jute Seeds",
				"image" => "jute-seeds.jpg",
				"description" => "Top-quality jute seeds for premium fiber production",
				"why_to_buy" => "Jute is a traditional cash crop in Bangladesh, and high-quality seeds are essential for producing superior fiber for industrial and other uses",
				"market_demand" => "Strong demand for jute seeds in the local market",
				"affiliate_link" => "https://www.amazon.com/buy-jute-seeds"
			),
			$tomato_seeds = array(
				"name" => "Tomato Seeds",
				"image" => "tomato-seeds.jpg",
				"description" => "High-quality tomato seeds for a good harvest",
				"why_to_buy" => "Tomatoes are a popular and versatile vegetable in Bangladesh, making tomato seeds a valuable commodity for farmers",
				"market_demand" => "High demand for tomato seeds in the local market",
				"affiliate_link" => "https://www.amazon.com/buy-tomato-seeds"
			),

			$potato_seeds = array(
				"name" => "Potato Seeds",
				"image" => "potato-seeds.jpg",
				"description" => "High-quality potato seeds for a good harvest",
				"why_to_buy" => "Potatoes are a staple food in Bangladesh, making potato seeds a valuable commodity for farmers",
				"market_demand" => "High demand for potato seeds in the local market",
				"affiliate_link" => "https://www.amazon.com/buy-potato-seeds"
			),
			$onion_seeds = array(
				"name" => "Onion Seeds",
				"image" => "onion-seeds.jpg",
				"description" => "High-quality onion seeds for a good harvest",
				"why_to_buy" => "Onions are a widely used ingredient in Bangladeshi cuisine, making onion seeds a valuable commodity for farmers",
				"market_demand" => "High demand for onion seeds in the local market",
				"affiliate_link" => "https://www.amazon.com/buy-onion-seeds"
			),
			$cucumber_seeds = array(
				"name" => "Cucumber Seeds",
				"image" => "./img/crops/cucumber_seed.jpg",
				"description" => "High-quality cucumber seeds for a good harvest",
				"why_to_buy" => "Cucumbers are a popular vegetable in Bangladesh, making cucumber seeds a valuable commodity for farmers",
				"market_demand" => "High demand for cucumber seeds in the local market",
				"affiliate_link" => "https://www.amazon.com/buy-cucumber-seeds"
			),
			$eggplant_seeds = array(
				"name" => "Eggplant Seeds",
				"image" => "eggplant-seeds.jpg",
				"description" => "High-quality eggplant seeds for a good harvest",
				"why_to_buy" => "Eggplants are a widely used ingredient in Bangladeshi cuisine, making eggplant seeds a valuable commodity for farmers",
				"market_demand" => "High demand for eggplant seeds in the local market",
				"affiliate_link" => "https://www.amazon.com/buy-eggplant-seeds"
			),
						
			
			
			
		);

		// Loop through seeds and display them on the page
		foreach ($seeds as $seed) {
			echo "<div class='seed-card'>";
			echo "<img src='images/{$seed["image"]}' alt='{$seed["name"]}'/>";
			echo "<h2>{$seed["name"]}</h2>";
			echo "<p>{$seed["description"]}</p>";
			echo "<p><strong>Why to buy:</strong> {$seed["why_to_buy"]}</p>";
			echo "<p><strong>Market demand:</strong> {$seed["market_demand"]}</p>";
			echo "<a href='{$seed["affiliate_link"]}' target='_blank'>Buy Now</a>";
			echo "</div>";
		}
		?>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>