<?php
include_once 'dbconnect.incl.php';

$p_old = htmlspecialchars($_POST['p_old']);
$p_new = htmlspecialchars($_POST['p_new']);

$sql = "SELECT passw FROM users WHERE id = $_SESSION['uid'];";

$result = mysqli_query($conn, $sql);

while() {

}

if () {

}




?>
