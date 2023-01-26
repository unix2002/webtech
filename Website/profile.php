<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="styles/style.css" />
        <script src="script.js"></script>
    </head>
    <body>
        <?php
        include_once 'header.php';
    ?>
    <?php
        include_once 'includes/dbconnect.incl.php';

        $em = $_SESSION['uname'];
        $sql = "SELECT * FROM users WHERE email='$em';";


        // if(mysqli_query($conn, $sql)){
        //     echo "Records were updated successfully.";
        // } else {
        //     echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        // }

        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
            $first = $row['first_name'];
            $_SESSION['last'] = $row['last_name'];
            $_SESSION['bd'] = $row['birthday'];
            $_SESSION['e-mail'] = $row['email'];
            $_SESSION['picture'] = $row['picture'];
        }
    ?>
    <div class="container_pr">
        <h1>Welcome!</h1>
        <?php
            if (isset($_SESSION['picture'])) {
                $ava = $_SESSION['picture'];
            }
            else {
                $ava = NULL;
            }

            // if (isset($_SESSION['first'])) {
            //     $first = $_SESSION['first'];
            // }
            // else {
            //     $first = NULL;
            // }

            if (isset($_SESSION['last'])) {
                $last = $_SESSION['last'];
            }
            else {
                $last = NULL;
            }

            if (isset($_SESSION['bd'])) {
                $bd = $_SESSION['bd'];
            }
            else {
                $bd = NULL;
            }

            if (isset($_SESSION['e-mail'])) {
                $e_mail = $_SESSION['e-mail'];
            }
            else {
                $e_mail = NULL;
            }
        ?>
        <div class="avatar">
            <img class="avatar" src="<?php echo $ava ?>" alt="avartar">
            <form action="includes/change.pic.php" method="post">
                <input type="text" name="newUrl" placeholder="URL of new avatar">
                <button type="change" name="change">Change picture</button>
            </form>
            <form action="includes.change.pic.php" method="post">
                <button type="delete" name="delete">Delete avatar</button>
            </form>
        </div>
        <div class="userinf">
            <h3>First name</h3>
            <br>
            <p><?php echo $first ?></p>
            <br>
            <h3>Last name</h3>
            <br>
            <p><?php echo $last ?></p>
            <br>
            <h3>E-mail</h3>
            <br>
            <p><?php echo $e_mail ?></p>
            <br>
            <h3>Date of birth</h3>
            <br>
            <p><?php echo $bd ?></p>
            <br>
        </div>
    </div>
</body>
</html>


