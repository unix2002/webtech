<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="grids.css" />
  </head>
  <body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <label for="product_name">Enter product name:</label>
      <input type="text" id="product_name" name="product_name" />
      <input type="submit" value="Submit" />
    </form>

    <?php
    $servername = "localhost";
    $username = "eliasd";
    $password = "1234";
    $dbname = "openfoodfacts";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $product_name = $_POST['product_name'];

        $sql = "SELECT *
        FROM producten
        WHERE (product_name LIKE '%$product_name%' OR abbreviated_product_name LIKE '%$product_name%' OR generic_name LIKE '%$product_name%')
        ORDER BY (CASE WHEN image_url != 'unknown' THEN 0 ELSE 1 END), product_name
        LIMIT 4";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
    ?>

    <div class="grid-container">
      <div class="grid-item">
          <?php
          echo "<img src=\"" . $row["image_url"] . "\">";
          ?>
        <h1><?php echo $row["product_name"] ?></h1>
      </div>

    <?php
            }
        } else {
            echo "<h1>No results found for barcode: " . $barcode. "</h1>";
        }
    }
    ?>
    </div>
  </body>
</html>
