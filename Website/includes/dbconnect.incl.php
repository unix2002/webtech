<?php
$dbServername = "localhost";
$dbUsername = "valentyng";
$dbPassword = "RkoIRWoZngWbUeEVTWulArYZuJYUNzif";
$dbName = "loginsystem";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}
/* if (mysqli_connect_errno($conn)) {
    echo "Failed to connect to MySQL:" .
    mysqli_connect_error($conn);
    exit();

}*/
?>
