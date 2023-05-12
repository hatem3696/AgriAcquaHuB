<!DOCTYPE html>
<html>

<head>
    <title>Workshop</title>
    <link rel="stylesheet" href="../CSS/agriculture.css">

    <style>
    h1 {
        text-align: center;
    }

    #viewEmp th,
    tr {
        background-color: #ddf5f7;
        color: #3b577d;
        width: 500px;
        text-align: center;
        border-bottom: 1px solid #3B577D;
        border-right: 1px solid #3B577D;
        ;
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