<?php
session_start();

    include_once 'dbconnect.incl.php';
    // include_once '../header.php';

    $sql = "SELECT email, passw FROM users;";

    $result = mysqli_query($conn, $sql);
    // if ( false===$result ) {
    //     printf("error: %s\n", mysqli_error($conn));
    //     exit();
    // }
    // else {
    //     echo 'done.';
    // }
    $resultCheck = mysqli_num_rows($result);
    $l_email = $_POST['l_email'];
    $l_passw = $_POST['l_passw'];


    if ($resultCheck > 0) {
        for ($i = 0; $i < $resultCheck; $i++) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] == $l_email) {
                if ($row['passw'] == $l_passw) {
                    $_SESSION['loggedin'] = true;
                    $_SESSION['uname'] = $l_email;
                    header("Location: ../index.php?login=succes");
                    exit();
                }
                header("Location: ../login.php?login=failed");
                exit();
            }
        }
    }
    header("Location: ../login.php?login=failed");
    exit();

    // else {
    //     echo "<p>Wrong combination wassword blablsbal</p>";
    // }
?>
