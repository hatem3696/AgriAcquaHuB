<!DOCTYPE html>
<html>
<head>
	<title>Buy Now Form</title>
    <style>
		form {
			margin: 20px auto;
			width: 500px;
			padding: 20px;
			border: 1px solid #ccc;
		}
		label {
			display: block;
			margin-bottom: 5px;
			font-weight: bold;
		}
		input[type=text], input[type=email] {
			padding: 5px;
			width: 100%;
			margin-bottom: 10px;
			border-radius: 5px;
			border: 1px solid #ccc;
		}
		input[type=submit] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
		input[type=submit]:hover {
			background-color: #3e8e41;
		}
		.error {
			color: red;
			font-size: 12px;
			margin-bottom: 5px;
		}
	</style>
</head>
<body>
	<h1>Buy Now</h1>
	<form method="POST" action="../Control/BuynowAction.php">
		<label for="name">Name:</label>
		<input type="text" name="name" id="name" value="<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ''; ?>">
		<span><?php echo isset($errors['name']) ? $errors['name'] : ''; ?></span>
		<br>
		<label for="email">Email:</label>
		<input type="email" name="email" id="email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>">
		<span><?php echo isset($errors['email']) ? $errors['email'] : ''; ?></span>
		<br>
		<label for="phone">Phone:</label>
		<input type="text" name="phone" id="phone" value="<?php echo isset($_SESSION['phone']) ? $_SESSION['phone'] : ''; ?>">
		<span><?php echo isset($errors['phone']) ? $errors['phone'] : ''; ?></span>
		<br>
		<label for="address">Address:</label>
		<textarea name="address" id="address"><?php echo isset($_SESSION['address']) ? $_SESSION['address'] : ''; ?></textarea>
		<span><?php echo isset($errors['address']) ? $errors['address'] : ''; ?></span>
		<br>
		<label for="card">Card details:</label>
		<input type="text" name="card" id="card" value="<?php echo isset($_SESSION['card']) ? $_SESSION['card'] : ''; ?>">
		<span><?php echo isset($errors['card']) ? $errors['card'] : ''; ?></span>
		<br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
