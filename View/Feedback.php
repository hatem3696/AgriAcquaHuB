<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Feedback Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        h1 {
            text-align: center;
        }

        #feedbackForm {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #cccccc;
            border-radius: 5px;
        }

        label,
        input,
        textarea {
            display: block;
            margin-bottom: 10px;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #ffffff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .error {
            color: #ff0000;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="feedback_form.js"></script>
</head>

<body>
    <?php include '../View/header.php'; ?>
    <h1>Feedback Form</h1>

    <form id="feedbackForm" action="done.php" method="post">

        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <span id="nameError" class="error"></span>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <span id="emailError" class="error"></span>

        <label for="feedback">Feedback:</label>
        <textarea id="feedback" name="feedback"></textarea>
        <span id="feedbackError" class="error"></span>

        <input type="submit" name="submit" value="Submit">
    </form>

    <script>
        // Form validation using JavaScript
        $(document).ready(function() {
            $("#feedbackForm").on("submit", function(event) {
                event.preventDefault();

                var name = $("#name").val();
                var email = $("#email").val();
                var feedback = $("#feedback").val();

                // Reset error messages
                $(".error").html("");

                // Check for empty fields
                var isValid = true;
                if (name.trim() === "") {
                    $("#nameError").html("Please enter your name.");
                    isValid = false;
                }
                if (email.trim() === "") {
                    $("#emailError").html("Please enter your email.");
                    isValid = false;
                } else if (!isValidEmail(email)) {
                    $("#emailError").html("Please enter a valid email.");
                    isValid = false;
                }
                if (feedback.trim() === "") {
                    $("#feedbackError").html("Please enter your feedback.");
                    isValid = false;
                }

               
                    if (isValid) {
    // Submit the form if all validations pass
    $("#feedbackForm").attr("action", "done.php"); // set the form action to "done.php"
    $("#feedbackForm").submit(); // submit the form
}


            // Function to validate email address
            function isValidEmail(email) {
                var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return pattern.test(email);
            }
        });
    </script>
</body>

</html>
