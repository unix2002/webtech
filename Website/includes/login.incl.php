<?php
session_start();

    include_once 'dbconnect.incl.php';
    // include_once '../header.php';

    $sql = "SELECT id, email, passw FROM users;";

    $result = mysqli_query($conn, $sql);
    // if ( false===$result ) {
    //     printf("error: %s\n", mysqli_error($conn));
    //     exit();
    // }
    // else {
    //     echo 'done.';
    // }
    $resultCheck = mysqli_num_rows($result);
    $l_email = htmlspecialchars($_POST['l_email']);
    $l_passw = htmlspecialchars($_POST['l_passw']);



    if ($resultCheck > 0) {
        for ($i = 0; $i < $resultCheck; $i++) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] == $l_email) {
                if (password_verify($l_passw, $row['passw'])) {
                    $_SESSION['loggedin'] = true;
                    $_SESSION['uid'] = $row['id'];
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
