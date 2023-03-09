<!DOCTYPE html>
<html>
  <head>
    <title>Buy Fish Farming</title>
    
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
        <select id="fish-select">
          <option value="Angelfish">AngelFish</option>
          <option value="Betta">Betta</option>
          <option value="Discus">Discus</option>
          <option value="Guppies">Guppies</option>
          <option value="Neon">Neon</option>
         
        </select>
      </form>
      <div id="fish-info">
        <img id="fish-image" src="" alt="">
        <div id="fish-price"></div>
        <a id="buy-now-button" href="#">Buy Now</a>
      </div>
    </main>
  </body>
</html>
