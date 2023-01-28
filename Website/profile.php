<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    </head>
    <body>
    <!-- <script>
        // document.addEventListener("DOMContentLoaded", () => {
        //     const change_pass = document.querySelector('#to_appear');
        //     addEventListener()
        //     if (window.location.toString().includes("login=failed")) {
        //         change_pass.classList.remove("hidden");
        //     }
        // });

        function unhide() {
            document.addEventListener("DOMContentLoaded", () => {
            const change_pass = document.querySelector('#to_appear');
            if (window.location.toString().includes("login=failed")) {
                change_pass.classList.remove("hidden");
            }
        });

            const change_pass = document.querySelector('#to_appear');
            change_pass.classList.remove("hidden");
        }
    </script> -->
        <?php
            include_once 'header_nieuw.php';
            if (isset($_SESSION['loggedin']) == false) {
		header("Location: /login.php?no+account");
		exit();
            }
	?>
        <?php
            include_once 'includes/dbconnect.incl.php';

            $uid = $_SESSION['uid'];
            $sql = "SELECT * FROM users WHERE id='$uid';";
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
                <form action="includes/change.pic.php" method="get">
                    <input type="text" name="newUrl" placeholder="URL of new avatar">
                    <button type="submit" name="change">Change picture</button>
                </form>
                <form action="includes.change.pic.php" method="post">
                    <button type="delete" name="delete">Delete avatar</button>
                </form>
            </div>
            <div class="userinf">
                <h3>First name</h3>
                <p><?php echo $first ?></p>

                <h3>Last name</h3>

                <p><?php echo $last ?></p>

                <h3>E-mail</h3>

                <p><?php echo $e_mail ?></p>

                <h3>Date of birth</h3>

                <p><?php echo $bd ?></p>

                <button type="appear" class="change_pw" id="but_to_hide">Change Password</button>
                <form action="includes/change_pw.incl.php" method="post" class = "change_pw hidden" id="to_appear">
                    <input type="password" class="" placeholder="Current password">
                    <br>
                    <input type="password" class="" placeholder="New password">
                    <br>
                    <button type="submit", class="">Change password</button>
                </form>
                <script>
                    document.getElementById("but_to_hide").addEventListener("click", function(){
                        document.getElementById("to_appear").classList.remove("hidden");
                        document.getElementById("but_to_hide").classList.add("hidden");
                    });
                </script>
            </div>
        </div>

</body>
</html>
