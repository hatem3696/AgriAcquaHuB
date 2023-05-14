function createPackError() {
  var name = document.getElementById("Name").value;
  var type = document.getElementById("Type").value;
  var price = document.getElementById("Price").value;
  var days = document.getElementById("Days").value;
  var totalPackages = document.getElementById("TotalPackages").value;
  var startDate = document.getElementById("Start_Date").value;

  var nameError = document.getElementById("nameError");
  var typeError = document.getElementById("typeError");
  var priceError = document.getElementById("priceError");
  var tripError = document.getElementById("tripError");
  var tpackError = document.getElementById("tpackError");
  var dateError = document.getElementById("dateError");

  var isError = false;

  // Check for empty fields
  if (name == "") {
    nameError.innerHTML = "Please enter a package name.";
    isError = true;
  } else {
    nameError.innerHTML = "";
  }

  if (type == "") {
    typeError.innerHTML = "Please select a package type.";
    isError = true;
  } else {
    typeError.innerHTML = "";
  }

  if (price == "") {
    priceError.innerHTML = "Please enter a price.";
    isError = true;
  } else if (isNaN(price)) {
    priceError.innerHTML = "Please enter a valid price.";
    isError = true;
  } else {
    priceError.innerHTML = "";
  }

  if (days == "") {
    tripError.innerHTML = "Please enter the duration of the trip.";
    isError = true;
  } else if (isNaN(days)) {
    tripError.innerHTML = "Please enter a valid duration.";
    isError = true;
  } else {
    tripError.innerHTML = "";
  }

  if (totalPackages == "") {
    tpackError.innerHTML = "Please enter the total number of packages.";
    isError = true;
  } else if (isNaN(totalPackages)) {
    tpackError.innerHTML = "Please enter a valid number of packages.";
    isError = true;
  } else {
    tpackError.innerHTML = "";
  }

  if (startDate == "") {
    dateError.innerHTML = "Please select a start date.";
    isError = true;
  } else {
    dateError.innerHTML = "";
  }

  return !isError;
}

function createWorkError() {
  // Get form input values
  var name = document.getElementById("Name").value;
  var type = document.getElementById("category").value;
  var date = document.getElementById("Start_Date").value;

  // Define error message variables
  var nameError = "";
  var typeError = "";
  var dateError = "";

  // Validate name field
  if (name == "") {
    nameError = "Name is required.";
  }

  // Validate type field
  if (type == "") {
    typeError = "Type is required.";
  }

  // Validate date field
  if (date == "") {
    dateError = "Date is required.";
  }

  // Update error messages
  document.getElementById("nameError").innerHTML = nameError;
  document.getElementById("typeError").innerHTML = typeError;
  document.getElementById("dateError").innerHTML = dateError;

  // Check if any errors exist
  if (nameError == "" && typeError == "" && dateError == "") {
    return true; // Allow form submission
  } else {
    return false; // Prevent form submission
  }
}

function upPackError() {
  // Get form input values
  var name = document.getElementById("Name").value;
  var type = document.getElementById("Type").value;
  var description = document.getElementById("Description").value;
  var price = document.getElementById("Price").value;
  var days = document.getElementById("Days").value;
  var totalPackages = document.getElementById("TotalPackages").value;
  var startDate = document.getElementById("Start_Date").value;
  var image = document.getElementById("img").value;

  // Define error message variables
  var nameError = "";
  var typeError = "";
  var priceError = "";
  var daysError = "";
  var totPackError = "";
  var dateError = "";

  // Validate name field
  if (name.trim() === "") {
    nameError = "Package Name is required.";
  }

  // Validate type field
  if (type.trim() === "") {
    typeError = "Category is required.";
  }

  // Validate price field
  if (price.trim() === "") {
    priceError = "Price is required.";
  }

  // Validate days field
  if (days.trim() === "") {
    daysError = "Duration is required.";
  }

  // Validate total packages field
  if (totalPackages.trim() === "") {
    totPackError = "Total Package is required.";
  }

  // Validate start date field
  if (startDate.trim() === "") {
    dateError = "Start Date is required.";
  }

  // Update error messages
  document.getElementById("nameError").innerHTML = nameError;
  document.getElementById("typeError").innerHTML = typeError;
  document.getElementById("priceError").innerHTML = priceError;
  document.getElementById("daysError").innerHTML = daysError;
  document.getElementById("totPackError").innerHTML = totPackError;
  document.getElementById("dateError").innerHTML = dateError;

  // Check if any errors exist
  if (
    nameError === "" &&
    typeError === "" &&
    priceError === "" &&
    daysError === "" &&
    totPackError === "" &&
    dateError === ""
  ) {
    return true; // Allow form submission
  } else {
    return false; // Prevent form submission
  }
}
function upWorkcheck() {
  // Get form input values
  var name = document.getElementById("name").value;
  var category = document.getElementsByName("category")[0].value;
  var description = document.getElementById("description").value;
  var time = document.getElementById("time").value;

  // Define error message variables
  var nameError = "";
  var categoryError = "";
  var timeError = "";

  // Validate name field
  if (name.trim() === "") {
    nameError = "Name is required.";
  }

  // Validate category field
  if (category.trim() === "") {
    categoryError = "Category is required.";
  }

  // Validate time field
  if (time.trim() === "") {
    timeError = "Time is required.";
  }

  // Update error messages
  document.getElementById("nameError").innerHTML = nameError;
  document.getElementById("hotelError").innerHTML = categoryError;
  document.getElementById("timeError").innerHTML = timeError;

  // Check if any errors exist
  if (nameError === "" && categoryError === "" && timeError === "") {
    return true; // Allow form submission
  } else {
    return false; // Prevent form submission
  }
}
