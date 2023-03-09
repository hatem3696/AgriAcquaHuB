<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>My Site</title>
  <!-- Font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

  <style>
    body {
      background-color: #000000;
      color: #FFFFFF;
      font-family: 'Roboto Slab', serif;
      font-size: 25px;
      line-height: 1.5;
      
    }

    #header {
      background-color: gray;
      padding: 20px;
      text-align: center;
    }

    #header h1 {
      margin: 0;
      font-size: 32px;
    }

   
    #content {
      padding: 20px;
      text-align: center;
    }

    #content h2 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    #content p {
      margin-bottom: 20px;
    }

    #content img {
      height: 100vh;
      width: 100%;

      
  </style>

</head>
<body>
<?php include 'header.php'; ?>
  <div id="content">
    <div class="image-container">
    <img src="./img/hq.jpg" alt="" class="image">
      <img src="./img/2nd.jpg" alt="" class="image">
      <img src="./img/3rd.jpg" alt="" class="image">
      
    </div>
  </div>
  <?php include 'footer.php'; ?>

  <style>
    .image-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .image {
      width: 200px;
      height: 200px;
      margin: 10px;
      transition: transform 0.5s ease;
    }

    .image:hover {
      transform: scale(1.1);
    }
  </style>
</body>
</html>