<?php
    session_start();
?>

<header>
    <nav class = "navig">
        <ul class = "navi">
            <li><a href="leaderboard.php">Leaderboard</a></li>
	<?php

                if(isset($_SESSION['loggedin'])) {
                    echo '<li><a href="profile.php">Profile</a></li>';
                    echo '<li><a href="logout.php">Log out</a></li>';

                }
                else {
                    echo '<li><a href="login.php">Log in</a></li>';
                    echo '<li><a href = "signup.php">Sign up</a></li>';
                }
            ?>
            <!-- <li><a href="login.php">Log in</a></li>
            <li><a href = "signup.php">Sign up</a></li> -->
        </ul>
        <a href="index.php"><img class="home" src="images/icons8-home-25.png" alt="img"></a>

    </nav>
</header>
