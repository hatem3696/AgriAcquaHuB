<!DOCTYPE html>
<html>

<head>
    <title>Workshop</title>
   

   
   <style>
    /* body style */
body {
  background-color: #f5f5f5;
}

/* main title */
.main-title {
  text-align: center;
  font-size: 40px;
  color: #444;
  margin-top: 50px;
}

/* BookBodyControl */
.BookBodyControl {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 50px;
}

/* BookBox */
.BookBox {
  margin-right: 50px;
}

/* BookBox select */
.hselect {
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  font-size: 20px;
  color: #green;
  background-color: #f5f5f5;
  transition: all 0.3s ease-in-out;
}

.hselect:focus {
  outline: none;
  border: 1px solid #ccc;
  box-shadow: 0 0 5px #ccc;
  background-color: #fff;
}

/* BookBoxResult */
.BookBoxResult {
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 5px #ccc;
}

/* data */
#data {
  font-size: 20px;
  color: #444;
  margin: 0;
}

/* Footer */
footer {
  text-align: center;
  padding: 20px;
  background-color: #444;
  color: #fff;
}

/* Footer a */
footer a {
  color: #fff;
  text-decoration: none;
}

/* Footer a:hover */
footer a:hover {
  color: #f5f5f5;
}
/* default styling. Nothing to do with freexing first row and column */
main {display: flex;}
main > * {border: 1px solid;}
table {border-collapse: collapse; font-family: helvetica}
td, th {border:  1px solid;
      padding: 10px;
      min-width: 200px;
      background: white;
      box-sizing: border-box;
      text-align: left;
}
.table-container {
  position: relative;
  max-height:  300px;
  width: 500px;
  overflow: scroll;
}

thead th {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  z-index: 2;
  background: hsl(20, 50%, 70%);
}

thead th:first-child {
  left: 0;
  z-index: 3;
}

tfoot {
  position: -webkit-sticky;
  bottom: 0;
  z-index: 2;
}

tfoot td {
  position: sticky;
  bottom: 0;
  z-index: 2;
  background: hsl(20, 50%, 70%);
}

tfoot td:first-child {
  z-index: 3;
}

tbody {
  overflow: scroll;
  height: 200px;
}

/* MAKE LEFT COLUMN FIXEZ */
tr > :first-child {
  position: -webkit-sticky;
  position: sticky; 
  background: hsl(180, 50%, 70%);
  left: 0; 
}
/* don't do this */
tr > :first-child {
  box-shadow: inset 0px 1px black;
}

</style>   
    
</head>

<body>
    <?php include '../View/header.php'; ?>
    <h1 class="main-title">Welcome to Workshops</h1>
    <div class="BookBodyControl">
        <div class="BookBox">
            <form>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <script src="./js/workshops.js"></script>
                <p>Please select a category</p>
                <select id="select" class='hselect' name='Location'>
                    <option>Select</option>
                    <option value="1">Agriculture</option>
                    <option value="2">Aquaculture</option>
                </select>
            </form>
        </div>
        <div class="BookBoxResult">
            <br>
            <p id="data"></p>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br>

    <!--  -->
    <?php include '../View/Footer.php'; ?>

    <script>
    // workshops(1);
    </script>
</body>

</html>