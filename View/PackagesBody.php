<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/pack.css">
    <title>Document</title>
</head>

<body>

    <div class="PackagesBody">
        <div class="PcardContainer">
            <?php
            include('../Control/PackagesController.php');
            echo showPackages(1);
            ?>

        </div>


    </div>
</body>

</html>