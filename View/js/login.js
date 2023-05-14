function loginCheck() {
  var Username = document.getElementById("username").value;
  var Password = document.getElementById("password").value;
  var usernameErr = document.getElementById("userErr");
  var passErr = document.getElementById("passErr");
  var isValid = true;

  if (Username == "") {
    isValid = false;
    userErr.innerHTML = "Please enter a username";
  } else {
    userErr.innerHTML = "";
  }
  if (Password == "") {
    isValid = false;
    passErr.innerHTML = "Please enter your password";
  } else {
    passErr.innerHTML = "";
  }
  return isValid;
}
