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
    <input type="submit" name="total" value="Total Bill">
  </form>

  <?php
  $allPrices = [
    "Pizza" => 1500,
    "Burger" => 1000,
    "Pasta" => 800,
    "Water" =>300
  ];


  if(isset($_POST['total'])){
    $item = $_POST['items'];
    $quantity = $_POST['quantity'];

    if(array_key_exists($item,$allPrices)){
      $price = $allPrices[$item];

      $totalBill = $price * $quantity;

      echo "<br><br>";
      echo"<strong>Your Bill :</strong><br>";
      echo"Quantity: $quantity<br>";
      echo"Item: $item<br>";
      echo "Total : $totalBill RS<br><br>";
      echo"Thank You!";
    }
  }





  ?>



</body>
</html>