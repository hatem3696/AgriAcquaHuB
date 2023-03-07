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
      text-align: center;
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

    #footer {
      background-color: #2F4F4F;
      color: #FFFFFF;
      padding: 20px;
      text-align: center;
    }

    #footer p {
      margin: 0;
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
      height: 100vh ;
      width: 100%;
    
  </style>
  
</head>

<body>
<?php include 'header.php'; ?>
  <div id="content">
   <img src="./img/hq.jpg" alt="">
</div>


  <div id="footer">
    <p>&copy; 2023 Agri Acqua HUB</p>
  </div>
  <?php include 'footer.php'; ?>
</body>

</html>