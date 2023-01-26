<?php
    include_once 'dbconnect.incl.php';

    $name = $_POST["name"];
    $surname = $_POST['surname'];
    $birth = $_POST['birth'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $conf = mysql_real_escape_string($conn, $_POST['conf_password']);
    $conf = $_POST['conf_password'];


    if ($password != $conf) {
        header("Location: ../signup.php?signup=failed_match");
        exit();
    }

    $sql = "INSERT INTO users (id, first_name, last_name, birthday, email, passw)
    VALUES (NULL, '$name', '$surname', '$birth', '$email', '$password');";

    $sql_2 = "SELECT email FROM users;";
    $result = mysqli_query($conn, $sql_2);
    $resultCheck = mysqli_num_rows($result);

    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['email'] == $email) {
            session_start();
            $_SESSION['email_temp'] = $email;
            header("Location: ../login.php?signup=exist");
            exit();
        }
    }


    $result2 = mysqli_query($conn, $sql);

    if ( false===$result2 ) {
    printf("error: %s\n", mysqli_error($conn));
    }
    else {
        session_start();
        $_SESSION['email_temp'] = $email;
        header("Location: ../login.php?signup=new");
        exit();
    }
    // if (!mysqli_query($conn, $sql)) {
    //     echo 'Error: ' . mysqli_error($conn);
    //     header("Location: ../index.php?signup=failed");
    // }
    // else {
    //     header("Location: ../index.php?signup=succes");
    // }

?>
