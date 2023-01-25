<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="styles/style.css" />
</head>
<body>
<?php
    include_once 'header.php';
?>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const loginForm = document.querySelector('#mess');
        const redir = document.querySelector('#exist');
        const redir_new = document.querySelector('#new');


        if (window.location.toString().includes("login=failed")) {
            loginForm.classList.remove("hidden");
        }

        if (window.location.toString().includes("signup=exist")) {
            redir.classList.remove("hidden");
        }
        if (window.location.toString().includes("signup=new")) {
            redir_new.classList.remove("hidden");
        }
    })
</script>
    <div class = "container">
        <form action="includes/login.incl.php" method="post" class = "login">
            <h1>Log in</h1>
            <?php
                if (isset($_SESSION['email_temp'])) {
                    $em = $_SESSION['email_temp'];
                }
                else {
                    $em = NULL;
                }
            ?>
            <input class = "input" type="text" name = "l_email" placeholder = "E-mail" autofocus value="<?php echo $em?>">
            <!-- <input class = "input" type="text" name = "l_email" placeholder = "E-mail" autofocus> -->
            <br>
            <input class = "input" type="password" name = "l_passw" placeholder = "Password">
            <p class = "err_message hidden" id = "mess">Wrong combination e-mail/password</p>
            <br>
            <p class="redir hidden" id="exist">You already have an account</p>
            <p class="redir hidden" id="new">Account succesfully created</p>
            <button type="submit" name = "submit_login">Login</button>
            <p class="text">
                <a class="link" href="signup.php" id="linkSignUp">Don't have an account? Sign up</a>
            </p>
        </form>
    </div>
</body>
</html>
