<!DOCTYPE html>
<?php

    function delete_sum_cookie()
    {
        setcookie('sum', NULL, time() - 100);
    }

	function add_cookie($question, $val)
	{
        $new_val = $val;
        setcookie($question, $val);
    }

    function add_to_sum($value)
    {
        $sum = $value;
        if (isset($_COOKIE['sum']))
		{
            $sum = $_COOKIE['sum'] + $value;
		}
            setcookie('sum', $sum, time() + 600);
    }
?>

<html lang="en">

<head>
    <title>MyEcology</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style.css">
</head>

<body>
	<header class="header">
        <nav class="bar">
            <a class="brand" href="index.php">MyEcology</a>
            <ul class="barItems">
                <li class="item"><a class="pageLink" href="index.php">Home</a></li>
                <li class="item"><a class="pageLink" href="about_us.php">About Us</a></li>
                <li class="item"><a class="pageLink" href="leaderboard.php">Leaderboard</a></li>
                <li class="item"><a class="login" href="login.php">Login Here</a></li>
            </ul>
            <div class="hamburgerMenu">
                <span class="hamburgerBar"></span>
                <span class="hamburgerBar"></span>
                <span class="hamburgerBar"></span>
            </div>
            <script src="mobile.js"></script>
        </nav>
    </header>
    <div class="container">
        <nav>
            <!--Source: https://freepngimg.com/miscellaneous/footprints-->
            <img class="brand_img" src="/img/29755-9-footprints-hd-thumb.png">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about_us.php">About Us</a></li>
                <li><a href="leaderboard.php">Leaderboard</a></li>
            </ul>
            <a class="button" href="login.php">Login Here</a>
        </nav>
        <div class="content">
        </div>
        <?php
        if(!isset($_POST["submit"])) {
        ?>
        <div class="form">
            <!--
                Source:
                https://footprint.wwf.org.uk/#/
                https://www.footprintcalculator.org/home/en
            -->
            <form action="quiztestkim.php" method="post" id="form">
                <div class="Q1">
                    <h3>How often do you eat animal-based products?</h3>
                    <ul class="options1">
			            <li><label for="q1a1"><input type="radio" id="q1a1" name="q1" value="1">Daily</label></li>
                        <li><label for="q1a2"><input type="radio" name="q1" value="2" id="q1a2">Often</label></li>
                        <li><label for="q1a3"><input type="radio" name="q1" value="3" id="q1a3">Sometime</label></li>
                        <li><label for="q1a4"><input type="radio" name="q1" value="4" id="q1a4">Never</label></li>
                    </ul>
                </div>
                <div class="Q2">
                    <h3>How much money do you spend on takeaways and restaurants?</h3>
                    <ul class="options2">
                        <li><label for="q2a1"><input type="radio" name="q2" value="1" id="q2a1">€0</label></li>
                        <li><label for="q2a2"><input type="radio" name="q2" value="2" id="q2a2">€1 - €20</label></li>
                        <li><label for="q2a3"><input type="radio" name="q2" value="3" id="q2a3">€20 - €50</label></li>
                        <li><label for="q2a4"><input type="radio" name="q2" value="4" id="q2a4">€50 or higher</label></li>
                    </ul>
                </div>
		        <div class="Q3">
                    <h3>What is your fuel usage per week?</h3>
                    <ul class="options3">
                        <li><label for="q3a1"><input type="radio" name="q3" value="1" id="q3a1">1 litre - 10 litres</label></li>
                        <li><label for="q3a2"><input type="radio" name="q3" value="2" id="q3a2">10 litres - 20 litres</label></li>
                        <li><label for="q3a3"><input type="radio" name="q3" value="3" id="q3a3">20 litres - 30 litres</label></li>
                        <li><label for="q3a4"><input type="radio" name="q3" value="4" id="q3a4">30 litres - 40 litres</label></li>
                        <li><label for="q3a5"><input type="radio" name="q3" value="5" id="q3a5">40 litres - 50 litres</label></li>
                        <li><label for="q3a6"><input type="radio" name="q3" value="6" id="q3a6">50 litres or higher</label></li>
                        <li><label for="q3a7"><input type="radio" name="q3" value="7" id="q3a7">I don't have a car</label></li>
                        <li><label for="q3a8"><input type="radio" name="q3" value="8" id="q3a8">I only travel by public transport</label></li>
                    </ul>
                </div>
                <div class="Q4">
                    <h3>How often do you go on holiday a year?</h3>
                    <ul class="options4">
                        <li><label for="q4a1"><input type="radio" name="q4" value="1" id="q4a1">0</label></li>
                        <li><label for="q4a2"><input type="radio" name="q4" value="2" id="q4a2">1 - 2</label></li>
                        <li><label for="q4a3"><input type="radio" name="q4" value="3" id="q4a3">3 - 4</label></li>
                        <li><label for="q4a4"><input type="radio" name="q4" value="4" id="q4a4">5 or higher</label></li>
                    </ul>
                </div>
                <div class="Q5">
                    <h3>What kind of house do you live in?</h3>
                    <ul class="options5">
                        <li><label for="q5a1"><input type="radio" name="q5" value="1" id="q5a1">Detached</label></li>
                        <li><label for="q5a2"><input type="radio" name="q5" value="2" id="q5a2">Semi-detached</label></li>
                        <li><label for="q5a3"><input type="radio" name="q5" value="3" id="q5a3">Flat</label></li>
                        <li><label for="q5a4"><input type="radio" name="q5" value="4" id="q5a4">Houseboat</label></li>
                        <li><label for="q5a5"><input type="radio" name="q5" value="5" id="q5a5">Villa</label></li>
                    </ul>
                </div>
                <div class="Q6">
                    <h3>What is the energy label of your house?</h3>
                    <ul class="options6">
                        <li><label for="q6a1"><input type="radio" name="q6" value="1" id="q6a1">A+, A++, A+++, A++++</label></li>
                        <li><label for="q6a2"><input type="radio" name="q6" value="2" id="q6a2">A</label></li>
                        <li><label for="q6a3"><input type="radio" name="q6" value="3" id="q6a3">B, C</label></li>
                        <li><label for="q6a4"><input type="radio" name="q6" value="4" id="q6a4">D, E</label></li>
                        <li><label for="q6a5"><input type="radio" name="q6" value="5" id="q6a5">F, G</label></li>
                        <li><label for="q6a6"><input type="radio" name="q6" value="6" id="q6a6">I don't know</label></li>
                    </ul>
                </div>
                <div class="Q7">
                    <h3>What is your gas usage per year?</h3>
                    <ul class="options7">
		            	<li><label for="q7a1"><input type="radio" name="q7" value="1" id="q7a1">up to 900 m3</label></li>
                        <li><label for="q7a2"><input type="radio" name="q7" value="2" id="q7a2">900 m3 - 1500 m3</label></li>
                        <li><label for="q7a3"><input type="radio" name="q7" value="3" id="q7a3">1500 m3 - 2000 m3</label></li>
                        <li><label for="q7a4"><input type="radio" name="q7" value="4" id="q7a4">More than 2000 m3</label></li>
                        <li><label for="q7a5"><input type="radio" name="q7" value="5" id="q7a5">I don't know</label></li>
                    </ul>
                </div>
                <div class="Q8">
                    <h3>What is your electricity usage per year?</h3>
                    <ul class="options8">
			            <li><label for="q8a1"><input type="radio" name="q8" value="1" id="q8a1">Up to 2000 kWh</li>
                        <li><label for="q8a2"><input type="radio" name="q8" value="2" id="q8a2">2000 kWh - 2500 kWh</li>
                        <li><label for="q8a3"><input type="radio" name="q8" value="3" id="q8a3">2500 kWh - 3000 kWh</li>
                        <li><label for="q8a4"><input type="radio" name="q8" value="4" id="q8a4">3000 kWh - 3500 kWh</li>
                        <li><label for="q8a5"><input type="radio" name="q8" value="5" id="q8a5">3500 kWh - 4000 kWh</li>
                        <li><label for="q8a6"><input type="radio" name="q8" value="6" id="q8a6">4000 kWh or more</li>
                        <li><label for="q8a7"><input type="radio" name="q8" value="7" id="q8a7">I don't know</li>
                    </ul>
                </div>
                <div class="Q9">
                    <h3>Do you seperate your trash?</h3>
                    <ul class="options9">
			            <li><label for="q9a1"><input type="radio" name="q9" value="1" id="q9a1">Almost everything</li>
                        <li><label for="q9a2"><input type="radio" name="q9" value="2" id="q9a2">Only organic waste</li>
                        <li><label for="q9a3"><input type="radio" name="q9" value="3" id="q9a3">Only paper and plastic</li>
                        <li><label for="q9a4"><input type="radio" name="q9" value="4" id="q9a4">Only glass</li>
                        <li><label for="q9a5"><input type="radio" name="q9" value="5" id="q9a5">I don't sort my trash</li>
                    </ul>
                </div>
	</div>
                <div class="last">
                    <h1>That's it</h1>
                    <p>Thank you for your time :)</p>
                    <a class="quiz_button" href="result.php">Homepage</a>
                    <input type="submit" name="submit" value="Submit">
                </div>
                <script src="form.js"></script>
            </form>
        <?php

        // cookies misschien nodig voor resultpage
        } else if(isset($_POST['submit'])) {

                $q1 = $_POST['q1'];
	    	add_cookie('q1', $q1);
                $q2 = $_POST['q2'];
    		add_cookie('q2', $q2);
                $q3 = $_POST['q3'];
		    add_cookie('q3', $q3);
                $q4 = $_POST['q4'];
	    	add_cookie('q4', $q4);
                $q5 = $_POST['q5'];
    		add_cookie('q5', $q5);
                $q6 = $_POST['q6'];
		    add_cookie('q6', $q6);
                $q7 = $_POST['q7'];
	    	add_cookie('q7', $q7);

            echo "q1:" . $q1 . "\n";
                echo "q2:" . $q2 . "\n";
                echo "q3:" . $q3 . "\n";
                echo "q4:" . $q4 . "\n";
                echo "q5:" . $q5 . "\n";
                echo "q6:" . $q6 . "\n";
                echo "q7:" . $q7 . "\n";
            }
            ?>
	<a class="quiz_button" href="result.php">Results</a>
    </div>
</body>
</html>
