<?php
    session_start();
    include_once 'dbconnect.incl.php';

    $em = $_SESSION['e-mail'];
    $sql = "SELECT * FROM users WHERE email=$em;";

    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['first'] = $row['first_name'];
        $_SESSION['last'] = $row['last_name'];
        $_SESSION['bd'] = $row['birthday'];
        $_SESSION['e-mail'] = $row['email'];
        $_SESSION['picture'] = $row['picture'];
    }
?>