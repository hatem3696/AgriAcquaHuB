<!DOCTYPE html>
<html>
<head>
	<title>Job Application</title>
	<style>
		/* Center the form on the page */
form {
  width: 50%;
  margin: 0 auto;
}

/* Style the form labels */
label {
  display: block;
  margin-bottom: 10px;
}

/* Style the form inputs */
input {
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  font-size: 16px;
  width: 100%;
  box-sizing: border-box;
  margin-bottom: 20px;
}

/* Style the submit button */
input[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  border: none;
  padding: 12px 20px;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}
</style>
	<script type="text/javascript">
		function validateForm() {
			var name = document.forms["jobApplication"]["name"].value;
			var email = document.forms["jobApplication"]["email"].value;
			var phone = document.forms["jobApplication"]["phone"].value;
			var resume = document.forms["jobApplication"]["resume"].value;
			
			if (name == "") {
				alert("Name must be filled out");
				return false;
			}
			if (email == "") {
				alert("Email must be filled out");
				return false;
			}
			if (phone == "") {
				alert("Phone must be filled out");
				return false;
			}
			if (resume == "") {
				alert("Resume must be uploaded");
				return false;
			}
			
			// If all fields are valid, submit the form
			document.forms["jobApplication"].action = "done1.php";
			return true;
		}
	</script>
</head>
<body>
<?php include '../View/header.php'; ?>
	<h1 <style align= center >Job Application Form</h1>
	<form name="jobApplication" onsubmit="return validateForm()" method="post">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name"><br><br>
		
		<label for="email">Email:</label>
		<input type="email" id="email" name="email"><br><br>
		
		<label for="phone">Phone:</label>
		<input type="tel" id="phone" name="phone"><br><br>
		
		<label for="resume">Upload resume:</label>
		<input type="file" id="resume" name="resume"><br><br>
		
		<input type="submit" value="Submit">
	</form>
	<?php include '../View/Footer.php'; ?>
</body>
</html>
