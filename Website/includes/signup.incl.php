<?php

include_once 'dbconnect.incl.php';

$name = htmlspecialchars($_POST["name"]);
$surname = htmlspecialchars($_POST['surname']);
$birth = htmlspecialchars($_POST['birth']);
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
$conf = htmlspecialchars($_POST['conf_password']);


if ($password != $conf) {
    header("Location: ../signup.php?signup=failed_match");
    exit();
}

$options = [
    'cost' => 12,
];
$hashed_password = password_hash($password, PASSWORD_DEFAULT, $options);

$sql = "INSERT INTO users (first_name, last_name, birthday, email, passw) VALUES (?, ?, ?, ?, ?)";

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


$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "sssss", $name, $surname, $birth, $email, $hashed_password);
$result2 = mysqli_stmt_execute($stmt);

if ( false===$result2 ) {
    printf("error: %s\n", mysqli_error($conn));
}
else {
    session_start();
    $_SESSION['email_temp'] = $email;
    header("Location: ../login.php?signup=new");
}
mysqli_stmt_close($stmt);
exit();
?>
