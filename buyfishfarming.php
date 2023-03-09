<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="CSS/buyfishfarming.css">
    <title>Buy Fish Farming</title>
    <style>
      #fish-image {
        width: 300px;
        height: 200px;
        margin-top: 10px;
      }
      #fish-info {
        text-align: center;
      }
      #buy-now-button {
        display: block;
        margin-top: 10px;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        width: 100px;
      }
    </style>
  </head>
  <body>
  <?php include 'header.php'; ?>
    <header>
      <h1>Buy Fish Farming</h1>
    </header>
    <main>
      <h2>Select a fish to buy:</h2>
      <form>
        <label for="fish-select">Choose a fish:</label>
        <select id="fish-select" class="fish-select">
          <option value="boal">Boal</option>
          <option value="chitol">Chitol</option>
          <option value="ilish">Ilish</option>
          <option value="katla">Katla</option>
          <option value="koi">Koi</option>
          <option value="pabda">Pabda</option>
          <option value="pangas">Pangas</option>
          <option value="rui">Rui</option>
          <option value="singi">Singi</option>
          <option value="tilapia">Tilapia</option>
        </select>
      </form>
      <div id="fish-info" class="fish-info">
        <img id="fish-image" class="fish-image" src="" alt="">
        <div id="fish-price" class="fish-price"></div>
        <div id="fish-description" class="fish-description"></div>
        <a id="buy-now-button" class="buy-now-button" href="#">Buy Now</a>
      </div>
    </main>
    <script>
      const select = document.querySelector('.fish-select');
      const image = document.querySelector('.fish-image');
      const description = document.querySelector('.fish-description');
      select.addEventListener('change', function() {
        const selectedFish = select.value;
        image.src = `img/${selectedFish}.jpg`;
        fetch(`fish/${selectedFish}.txt`)
          .then(response => response.text())
          .then(data => {
            description.textContent = data;
          });
      });
    </script>
    <?php include 'Footer.php'; ?>
  </body>
</html> 