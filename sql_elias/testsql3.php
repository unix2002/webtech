<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="product_name">Enter product name:</label>
        <input type="text" id="product_name" name="product_name">
        <input type="submit" value="Submit">
    </form>

    <table>
    <tr>
        <th>code</th>
        <th>url</th>
        <th>product_name</th>
        <th>abbreviated_product_name</th>
        <th>generic_name</th>
        <th>carbon_footprint_100g</th>
        <th>serving_size</th>
        <th>serving_quantity</th>
        <th>image_url</th>
        <th>image_small_url</th>
    </tr>
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

        $sql = "SELECT * FROM producten WHERE product_name LIKE '%$product_name%' OR abbreviated_product_name LIKE '%$product_name%' OR generic_name LIKE '%$product_name%' LIMIT 4";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["code"]. "</td>";
        ?>
        <td><?php echo $row["image_url"] ?></td>
        <?php
                echo "<td>" . $row["url"]. "</td>";
                echo "<td>" . $row["product_name"]. "</td>";
                echo "<td>" . $row["abbreviated_product_name"]. "</td>";
                echo "<td>" . $row["generic_name"]. "</td>";
                echo "<td>" . $row["co2_total"]. "</td>";
                echo "<td>" . $row["serving_size"]. "</td>";
                echo "<td>" . $row["serving_quantity"]. "</td>";
                echo "<td><img src=\"" . $row["image_url"]. "\"></td>";
                echo "<td>" . $row["image_small_url"]. "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='10'>No results found for barcode: " . $barcode. "</td></tr>";
        }
    }
    ?>
    </table>
</body>
</html>
