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
  <link rel="stylesheet" href="../CSS/home.css">

  

</head>
<body>
<?php include '../View/header.php'; ?>

<section class="agri-aqua-hub">
  <div class="container">
    <h2 class="section-title">Welcome to our Agriculture and Aquaculture Hub</h2>
    <p class="section-description">We are dedicated to promoting sustainable agriculture and aquaculture practices that enhance the health of our planet and its inhabitants.</p>
    <div class="row">
      <div class="col-md-6">
        <div class="feature-item">
          <img src="../img/plant2.jpg" alt="Agriculture" class="feature-img">
          <h3 class="feature-title">Sustainable Agriculture</h3>
          <p class="feature-description">Learn about the latest trends and best practices in sustainable agriculture, including regenerative farming, organic agriculture, and more.</p>
         
        </div>
      </div>
      <div class="col-md-6">
        <div class="feature-item">
          <img src="../img/fish1.jpg" alt="Aquaculture" class="feature-img">
          <h3 class="feature-title">Sustainable Aquaculture</h3>
          <p class="feature-description">Discover the latest innovations and techniques in sustainable aquaculture, including recirculating aquaculture systems, closed-containment systems, and more.</p>
         
        </div>
      </div>
    </div>
  </div>
</section>

  <div id="content">
    <div class="image-container">
    <img src="../img/hq.jpg" alt="" class="image">
      <img src="../img/2nd.jpg" alt="" class="image">
      <img src="../img/3rd.jpg" alt="" class="image">
      
    </div>
  </div>

 

<section class="why-choose-us">
  <h2>Why Choose Us</h2>
  <div class="grid">
    <div class="grid-item">
      <i class="fas fa-shipping-fast"></i>
      <h3>Fast and Free Shipping</h3>
      <p>We offer fast and free shipping on all orders, so you can receive your plants, seeds, and fishes as soon as possible.</p>
    </div>
    <div class="grid-item">
      <i class="fas fa-seedling"></i>
      <h3>High-Quality Products</h3>
      <p>All of our products are carefully selected and tested to ensure they are of the highest quality, so you can trust that you're getting the best.</p>
    </div>
    <div class="grid-item">
      <i class="fas fa-hand-holding-usd"></i>
      <h3>Affordable Prices</h3>
      <p>We believe that everyone should have access to high-quality plants, seeds, and fishes, which is why we offer affordable prices without sacrificing quality.</p>
    </div>
    <div class="grid-item">
      <i class="fas fa-headset"></i>
      <h3>Excellent Customer Support</h3>
      <p>We're here to help you with any questions or concerns you may have, and we're always happy to provide advice and support for your gardening needs.</p>
    </div>
    <div class="grid-item">
  <i class="fas fa-seed"></i>
  <h3>Wide Variety of Products</h3>
  <p>We offer a wide selection of plants, seeds, and fishes, so you can find exactly what you need for your garden or aquarium.</p>
</div>

<div class="grid-item">
  <i class="fas fa-leaf"></i>
  <h3>Sustainable and Eco-Friendly</h3>
  <p>We are committed to sustainability and eco-friendliness, and all of our products are sourced and grown with these values in mind.</p>
</div>
</div>
</section>


  <section class="user-reviews">
  <h2 style="text-align: center; color: black;">What our customers say:</h2>

  
    <div class="review-container">
    <div class="review-card">
    <img src="../img/anas.jpg" alt="User 1" class="user-img">
      <h3 class="user-name">Anas</h3>
     
      <p class="review-text">I bought some seeds from Agri-Aqua-Hub and they all sprouted beautifully. The quality of their seeds is top-notch!</p>
    </div>
    <div class="review-card">
      <img src="../img/arefin.jpg" alt="User 2" class="user-img">
      <h3 class="user-name">Suhail Arefin</h3>
      <p class="review-text">I recently purchased some fish from Agri-Aqua-Hub and they are thriving in my aquarium. The customer service was also excellent.</p>
    </div>
    <div class="review-card">
      <img src="../img/rhyme.jpg" alt="User 3" class="user-img">
      <h3 class="user-name">Rhyme Rubayet</h3>
      <p class="review-text">I've been buying plants from Agri-Aqua-Hub for years and they always arrive in perfect condition. I highly recommend this store to any plant lover.</p>
    </div>
    <div class="review-container">
    <div class="review-card">
    <img src="../img/pranto.jpg" alt="User 1" class="user-img">
      <h3 class="user-name">Pranto</h3>
      
      <p class="review-text">I bought some seeds from Agri-Aqua-Hub and they all sprouted beautifully. The quality of their seeds is top-notch!</p>
    </div>
    <div class="review-card">
      <img src="../img/jitu.jpg" alt="User 2" class="user-img">
      <h3 class="user-name">Jitu</h3>
      <p class="review-text">I recently purchased some fish from Agri-Aqua-Hub and they are thriving in my aquarium. The customer service was also excellent.</p>
    </div>
    <div class="review-card">
      <img src="../img/zerin.jpg" alt="User 3" class="user-img">
      <h3 class="user-name">Zerin</h3>
      <p class="review-text">I've been buying plants from Agri-Aqua-Hub for years and they always arrive in perfect condition. I highly recommend this store to any plant lover.</p>
    </div>
  </div>
</section>


  <?php include '../View/Footer.php'; ?>

 
</body>
</html>