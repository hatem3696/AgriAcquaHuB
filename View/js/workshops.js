$(document).ready(function () {
  function workshops() {
    let typ;

    $("#select").change(function () {
      if ($(this).val() == 1) {
        typ = 1;
      } else if ($(this).val() == 2) {
        typ = 2;
      }

      if (typ == 1) {
        xhttp.open("GET", "../Control/WorkshopControl.php?type=1");
      } else if (typ == 2) {
        xhttp.open("GET", "../Control/WorkshopControl.php?type=2");
      }
      xhttp.send();
    });
  }

  workshops();

  const xhttp = new XMLHttpRequest();
  xhttp.onload = function () {
    const response = JSON.parse(this.responseText);
    let t = "<table border='1px'>";
    t += "<tr>";
    t += "<th>";
    t += "Name";
    t += "</th>";
    t += "<th>";
    t += "Description";
    t += "</th>";
    t += "<th>";
    t += "Category";
    t += "</th>";
    t += "<th>";
    t += "Time";
    t += "</th>";
    t += "</tr>";

    for (let i = 0; i < response.length; i++) {
      t += "<tr>";
      t += "<td>";
      t += response[i].name;
      t += "</td>";
      t += "<td>";
      t += response[i].description;
      t += "</td>";
      t += "<td>";
      t += response[i].category;
      t += "</td>";
      t += "<td>";
      t += response[i].time;
      t += "</td>";
      t += "</tr>";
    }
    t += "</table>";
    document.getElementById("data").innerHTML = t;
  };
});
