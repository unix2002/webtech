<?php
    include_once 'dbconnect.incl.php';
    session_start();
    $pic = $_POST['newUrl'];
    $em = $_SESSION['e-mail'];

    $sql = "UPDATE users SET picture='$pic' WHERE email='$em';";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../profile.php?picture=changed");
        exit();
    }
    else {
        header("Location: ../profile.php?picture=not_changed");
        exit();
    }

    // if(mysqli_query($conn, $sql)){
    //     echo "Records were updated successfully.";
    // } else {
    //     echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    // }
    // $result = mysqli_query($conn, $sql);

    // $resultCheck = mysqli_num_rows($result);

    // if ($resultCheck > 0) {
    //     $row = mysqli_fetch_assoc($result);
    // }
?>