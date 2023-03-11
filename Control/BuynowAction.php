<?php
	session_start();
	require_once('../View/buy-now-form.php');

	$errors = [];
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = trim($_POST["name"]);
		$email = trim($_POST["email"]);
		$phone = trim($_POST["phone"]);
		$address = trim($_POST["address"]);
		$card = trim($_POST["card"]);

		if (empty($name)) {
			$errors["name"] = "Name is required";
		}
		if (empty($email)) {
			$errors["email"] = "Email is required";
		} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errors["email"] = "Invalid email format";
		}
		if (empty($phone)) {
			$errors["phone"] = "Phone number is required";
		} else if (!preg_match("/^\d{11}$/", $phone)) {
			$errors["phone"] = "Invalid phone number format";
		}
		if (empty($address)) {
			$errors["address"] = "Address is required";
		}
		if (empty($card)) {
			$errors["card"] = "Card details are required";
		}

		if (empty($errors)) {
			$_SESSION["name"] = $name;
			$_SESSION["email"] = $email;
			$_SESSION["phone"] = $phone;
			$_SESSION["address"] = $address;
			$_SESSION["card"] = $card;

			$file = fopen("../orders.txt", "a");
			$order = $name . "," . $email . "," . $phone . "," . $address . "," . $card . "\n";
			fwrite($file, $order);
			fclose($file);

			header("Location: ../View/confirmation.php");
			exit();
		}
	}
?>
