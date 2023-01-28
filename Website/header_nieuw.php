<?php
    session_start();
?>
<header class="header">
    <nav class="bar">
        <a class="brand" href="index.php">MyEcology</a>
            <ul class="barItems">
                <li class="item"><a class="pageLink" href="index.php">Home</a></li>
                <li class="item"><a class="pageLink" href="about_us.php">About Us</a></li>
		<li class="item"><a class="pageLink" href="leaderboard.php">Leaderboard</a></li>
            	<?php
                	if(isset($_SESSION['loggedin'])) {
			    echo '<li class="item"><a class="pageLink" href="logout.php">Log out</a></li>';
                    	    echo '<li class="navBut"><a class="login" href="profile.php">Profile</a></li>';	                	
			}
			else {
			    echo '<li class="navBut"><a class="login" href="/login.php">Login Here</a></li>';
			}
            ?>
            </ul>
            <div class="hamburgerMenu">
                <span class="hamburgerBar"></span>
                <span class="hamburgerBar"></span>
                <span class="hamburgerBar"></span>
            </div>
            <script src="mobile.js"></script>
        </nav>
    </header>
