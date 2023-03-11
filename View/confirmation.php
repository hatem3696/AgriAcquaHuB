<!DOCTYPE html>
<html>
<head>
	<title>Order Confirmation</title>
	<style>
		body {
			background-color: #f1f1f1;
		}

		.container {
			text-align: center;
			margin-top: 50px;
			padding: 20px;
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
			animation: fadeIn 1s;
		}

		@keyframes fadeIn {
			from {
				opacity: 0;
				transform: translateY(-10%);
			}
			to {
				opacity: 1;
				transform: translateY(0);
			}
		}

		.success {
			color: #4CAF50;
			font-size: 3em;
			margin-bottom: 20px;
			animation: colorChange 2s infinite;
		}

		@keyframes colorChange {
			0% {
				color: #4CAF50;
			}
			50% {
				color: #FFC107;
			}
			100% {
				color: #4CAF50;
			}
		}

		.bow {
			animation: bow 1.5s;
		}

		@keyframes bow {
			0% {
				transform: rotate(0deg);
			}
			50% {
				transform: rotate(10deg);
			}
			100% {
				transform: rotate(0deg);
			}
		}
	</style>
</head>
<body>
	<div class="container">
		<h1 class="success">Congrats!</h1>
		<img src="https://media.giphy.com/media/l1IY1T0T96LwnF0fS/giphy.gif" alt="bow" class="bow">
		<p>Your order has been confirmed. We will send you an email with the details shortly. Thank you for shopping with us!</p>
	</div>
</body>
</html>
