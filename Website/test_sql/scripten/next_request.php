<?php

    $servername = "localhost";
    $username = "eliasd";
    $password = "MSlyNZdNOHnECAFdUgsENZwwWPvmIqYR";
    $dbname = "openfoodfacts";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $currentPage = 4*$_POST['currentPage']-4;
    $product_name_parse = $_POST['search_data'];
    parse_str($product_name_parse, $product_name_parse2);
    
    $product_name = $product_name_parse2['product_name'];
     
    $sql = "SELECT *
    FROM producten
    WHERE (product_name LIKE '%$product_name%' OR abbreviated_product_name LIKE '%$product_name%' OR generic_name LIKE '%$product_name%')
    ORDER BY (CASE WHEN image_url != 'unknown' THEN 0 ELSE 1 END), product_name
    LIMIT 4 OFFSET $currentPage";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
		echo "{" . $row["product_name"] . "}{" .  $row["co2_total"] . "}{" . $row["image_url"] . "};";
        }
    } else {
         echo "<h1>No results found for barcode: " . $barcode. "</h1>";
    }
?>

