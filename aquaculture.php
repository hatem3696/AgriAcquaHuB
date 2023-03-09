
<!DOCTYPE html>
<html>
<head>
    <title>Aquaculture</title>
    <link rel="stylesheet" href="CSS/agriculture.css">
</head>
<body>
<?php include 'header.php'; ?>
    <h1 class="main-title">Welcome to Aquaculture</h1>
    <p class="sub-title">What do you need help with today?</p>
    <form method="post" action="aquaculture.php" id="needs-form">
        <input type="radio" id="buy-fish-farming" name="need" value="buy-fish-farming" class="need-option">
        <label for="buy-fish-farming">I want to buy fish for farming</label><br>
        <input type="radio" id="buy-fish-aquarium" name="need" value="buy-fish-aquarium" class="need-option">
        <label for="buy-fish-aquarium">I want to buy fish for aquarium</label><br>
        <input type="radio" id="fish-info" name="need" value="fish-info" class="need-option">
        <label for="fish-info">I want to know more about fishes</label><br>
        <input type="radio" id="fish-farming-info" name="need" value="fish-farming-info" class="need-option">
        <label for="fish-farming-info">I want to know more about fish farming</label><br><br>
        <input type="submit" name="submit" value="Submit" class="submit-button">
    </form>
    <br>
    <?php
if(isset($_POST['submit'])){
    if(isset($_POST['need'])){
        $need = $_POST['need'];
        switch ($need) {
            case 'buy-fish-farming':
                header('Location: buyfishfarming.php');
                break;
            case 'buy-fish-aquarium':
                header('Location: buyfishaquarium.php');
                break;
            case 'fish-info':
                header('Location: fishinfo.php');
                break;
            case 'fish-farming-info':
                header('Location: fishfarminginfo.php');
                break;
            default:
                echo "Please select an option";
                break;
        }
    }
}
?>
</body>
</html>






