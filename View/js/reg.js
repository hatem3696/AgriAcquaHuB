function checkReg() {
  // Get form input values
  var fname = document.getElementById("fname").value;
  var username = document.getElementById("username").value;
  var email = document.getElementById("email").value;
  var phone = document.getElementById("phone").value;
  var password = document.getElementById("password").value;
  var cpassword = document.getElementById("cpassword").value;

  // Define error message variables
  var nameErr = "";
  var userErr = "";
  var emailErr = "";
  var phnErr = "";
  var passErr = "";
  var cpassErr = "";

  // Validate Full Name field
  if (fname.trim() === "") {
    nameErr = "Full Name is required.";
  }

  // Validate Username field
  if (username.trim() === "") {
    userErr = "Username is required.";
  }

  // Validate Email field
  if (email.trim() === "") {
    emailErr = "Email is required.";
  }

  // Validate Phone Number field
  if (phone.trim() === "") {
    phnErr = "Phone Number is required.";
  }

  // Validate Password field
  if (password.trim() === "") {
    passErr = "Password is required.";
  }

  // Validate Confirm Password field
  if (cpassword.trim() === "") {
    cpassErr = "Confirm Password is required.";
  } else if (cpassword !== password) {
    cpassErr = "Passwords do not match.";
  }

  // Update error messages
  document.getElementById("nameErr").innerHTML = nameErr;
  document.getElementById("userErr").innerHTML = userErr;
  document.getElementById("emailErr").innerHTML = emailErr;
  document.getElementById("phnErr").innerHTML = phnErr;
  document.getElementById("passErr").innerHTML = passErr;
  document.getElementById("cpassErr").innerHTML = cpassErr;

  // Check if any errors exist
  if (
    nameErr === "" &&
    userErr === "" &&
    emailErr === "" &&
    phnErr === "" &&
    passErr === "" &&
    cpassErr === ""
  ) {
    return true; // Allow form submission
  } else {
    return false; // Prevent form submission
  }
}
