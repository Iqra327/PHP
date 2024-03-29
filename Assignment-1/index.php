<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>Order Page</h1>

  <form action="index.php" method="post">
    <label for="items">Select Items: </label>
    <select name="items" id="items">
      <option value="Pizza">Pizza $6</option>
      <option value="Burger">Burger $5</option>
      <option value="Pasta">Pasta $4</option>
      <option value="Water">Water $2</option>
    </select>
    <br><br>
    <label for="quantity">Quantity: </label>
    <input type="number" id="quantity" name="quantity" min=1 required>
    <br><br>
    <input type="submit" name="submit" value="Total Bill">
  </form>

  <?php
  $allPrices = [
    "Pizza" => 1500,
    "Burger" => 1000,
    "Pasta" => 800,
    "Water" =>300
  ];

  if(isset($_POST['submit'])){
   $items = $POST['items'];
   $price = $POST['quantity'];
   
  }
  ?>




</body>

</html>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Page</title>
</head>
<body>
    <h1>Order Page</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="item">Select an item:</label>
        <select name="item" id="item">
            <option value="burger">Burger - $5</option>
            <option value="pizza">Pizza - $8</option>
            <option value="sandwich">Sandwich - $6</option>
        </select><br><br>
        <label for="quantity">Enter quantity:</label>
        <input type="number" name="quantity" id="quantity" min="1" required><br><br>
        <input type="submit" name="submit" value="Calculate Total">
    </form>

    <?php
    // Define food prices
    $food_prices = array(
        "burger" => 5,
        "pizza" => 8,
        "sandwich" => 6
    );

    // Function to calculate total
    function calculateTotal($price, $quantity) {
        return $price * $quantity;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve selected item and quantity
        $selected_item = $_POST["item"];
        $selected_quantity = $_POST["quantity"];

        // Check if selected item exists in food prices array
        if (array_key_exists($selected_item, $food_prices)) {
            // Calculate total
            $total_price = calculateTotal($food_prices[$selected_item], $selected_quantity);
            echo "<h2>Total Bill: $" . $total_price . "</h2>";
        } else {
            echo "<h2>Invalid item selected</h2>";
        }
    }
    ?>

</body>
</html> -->
