<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="script.js"></script>
</head>
<body>
<?php
    include_once 'header_nieuw.php';
?>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const loginForm = document.querySelector('#mess');

    if (window.location.toString().includes("signup=failed_match")) {
        loginForm.classList.remove("hidden");
    }
})
</script>
    <div class = "container">
        <form action="includes/signup.incl.php" method="post" class = "signup ">
            <h1>Sign Up</h1>
            <input class = "input" required type="text" name = "name" placeholder = "Name" autofocus>
            <br>
            <input class = "input" type="text" name = "surname" placeholder = "Surname">
            <br>
	    <input class = "input" type="date" name = "birth" placeholder = "Date of Birth">
            <br>
            <input class = "input" required type="text" name = "email" placeholder = "E-mail">
            <br>
	    <input class = "input" required type="password" name = "password" placeholder = "Password"> 
	    <br>
            <input class = "input" required type="password" name = "conf_password" placeholder = "Confirm Password">
            <br>
            <p class = "err_message hidden" required id = "mess">Passwords do not match!</p>
            <button type="submit" name = "submit_signup">Sign Up</button>
            <p class="text">
                <a class="link" href="login.php" id="linkSignUp">Already have an account? Log in!</a>
            </p>
        </form>
    </div>
</body>
</html>
