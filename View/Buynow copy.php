<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Buy Now</title>
  </head>
  <body>
    <?php include 'header.php'; ?>
    <main>
      <h1>Buy Now</h1>
      <form id="buy-form" class="buy-form" action="checkout.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" class="buy-input" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" class="buy-input" name="email" required><br>

        <label for="address">Address:</label>
        <textarea id="address" class="buy-input" name="address" required></textarea><br>

        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" class="buy-input" name="quantity" min="1" max="10" value="1" required><br>

        <label for="payment-method">Payment Method:</label>
        <select id="payment-method" class="buy-input" name="payment-method" required>
          <option value="">--Select--</option>
          <option value="credit-card">Credit Card</option>
          <option value="paypal">PayPal</option>
          <option value="bank-transfer">Bank Transfer</option>
        </select><br>

        <button id="buy-now-button" class="buy-now-button" type="submit">Buy Now</button>
      </form>
    </main>
    <?php include 'footer.php'; ?>
  </body>
</html>