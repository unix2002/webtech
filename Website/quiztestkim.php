<!DOCTYPE html>
<?php
    $cookie_name = "sum";
    $cookie_value = 0;
    setcookie($cookie_name, $cookie_value);
?>

<html lang="en">

<head>
    <title>MyEcology</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style.css">
    <?php
    $sum = 0;
    function add_to_sum($value)
    {
        $sum = $sum + $value;
        setcookie($cookie_name, $sum);
    }
    function add_cookie($question, $val)
    {
        set_cookie($question, $val);
    }
    ?>
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
            <form action="quiztest.php" method="post" id="form">
            <div class="Q1">
                    <h3>How often do you eat animal-based products?</h3>
                    <ul class="options1">
                        <li><input type="radio" name="q1" value="1">Daily</label></li>
                        <li><input type="radio" name="q1" value="2">Often</li>
                        <li><input type="radio" name="q1" value="3">Sometimes</li>
                        <li><input type="radio" name="q1" value="4">Never</li>
                    </ul>
                </div>
                <div class="Q2">
                    <h3>How much money do you spend on takeaways and restaurants?</h3>
                    <ul class="options2">
                        <li><input type="radio" name="q2" value="1">€0</li>
                        <li><input type="radio" name="q2" value="2">€1 - €20</li>
                        <li><input type="radio" name="q2" value="3">€20 - €50</li>
                        <li><input type="radio" name="q2" value="4">€50 or higher</li>
                    </ul>
                </div>
                <div class="Q3">
                    <h3>What is your fuel usage per week?</h3>
                    <ul class="options3">
                        <li><input type="radio" name="q3" value="1">1 litre - 10 litres</li>
                        <li><input type="radio" name="q3" value="2">10 litres - 20 litres</li>
                        <li><input type="radio" name="q3" value="3">20 litres - 30 litres</li>
                        <li><input type="radio" name="q3" value="4">30 litres - 40 litres</li>
                        <li><input type="radio" name="q3" value="5">40 litres - 50 litres</li>
                        <li><input type="radio" name="q3" value="6">50 litres or higher</li>
                        <li><input type="radio" name="q3" value="7">I don't have a car</li>
                        <li><input type="radio" name="q3" value="8">I only travel by public transport</li>
                    </ul>
                </div>
                <div class="Q4">
                    <h3>How often do you go on holiday a year?</h3>
                    <ul class="options4">
                        <li><input type="radio" name="q4" value="1">0</li>
                        <li><input type="radio" name="q4" value="2">1 - 2</li>
                        <li><input type="radio" name="q4" value="3">3 - 4</li>
                        <li><input type="radio" name="q4" value="4">5 or higher</li>
                    </ul>
                </div>
                <div class="Q5">
                    <h3>What kind of house do you live in?</h3>
                    <ul class="options5">
                        <li><input type="radio" name="q5" value="1">Detached</li>
                        <li><input type="radio" name="q5" value="2">Semi-detached</li>
                        <li><input type="radio" name="q5" value="3">Flat</li>
                        <li><input type="radio" name="q5" value="4">Houseboat</li>
                        <li><input type="radio" name="q5" value="5">Villa</li>
                    </ul>
                </div>
                <div class="Q6">
                    <h3>What is the energy label of your house?</h3>
                    <ul class="options6">
                        <li><input type="radio" name="q6" value="1">A+, A++, A+++, A++++</li>
                        <li><input type="radio" name="q6" value="2">A</li>
                        <li><input type="radio" name="q6" value="3">B, C</li>
                        <li><input type="radio" name="q6" value="4">D, E</li>
                        <li><input type="radio" name="q6" value="5">F, G</li>
                        <li><input type="radio" name="q6" value="6">I don't know</li>
                    </ul>
                </div>
                <div class="Q7">
                    <h3>What is your gas usage per year?</h3>
                    <ul class="options7">
                        <li><input type="radio" name="q7" value="1">up to 900 m3</li>
                        <li><input type="radio" name="q7" value="2">900 m3 - 1500 m3</li>
                        <li><input type="radio" name="q7" value="3">1500 m3 - 2000 m3</li>
                        <li><input type="radio" name="q7" value="4">More than 2000 m3</li>
                        <li><input type="radio" name="q7" value="5">I don't know</li>
                    </ul>
                </div>
                <div class="Q8">
                    <h3>What is your electricity usage per year?</h3>
                    <ul class="options8">
                        <li><input type="radio" name="q8" value="1">Up to 2000 kWh</li>
                        <li><input type="radio" name="q8" value="2">2000 kWh - 2500 kWh</li>
                        <li><input type="radio" name="q8" value="3">2500 kWh - 3000 kWh</li>
                        <li><input type="radio" name="q8" value="4">3000 kWh - 3500 kWh</li>
                        <li><input type="radio" name="q8" value="5">3500 kWh - 4000 kWh</li>
                        <li><input type="radio" name="q8" value="6">4000 kWh or more</li>
                        <li><input type="radio" name="q8" value="7">I don't know</li>
                    </ul>
                </div>
                <div class="Q9">
                    <h3>Do you seperate your trash?</h3>
                    <ul class="options9">
                        <li><input type="radio" name="q9" value="1">Almost everything</li>
                        <li><input type="radio" name="q9" value="2">Only organic waste</li>
                        <li><input type="radio" name="q9" value="3">Only paper and plastic</li>
                        <li><input type="radio" name="q9" value="4">Only glass</li>
                        <li><input type="radio" name="q9" value="5">I don't sort my trash</li>
                    </ul>
                </div>
                <div class="last">
                    <h1>That's it</h1>
                    <p>Thank you for your time :)</p>
                    <a class="quiz_button" href="index.php">Homepage</a>
                    <input type="submit" name="submit" value="Submit">
                </div>
                <script src="form.js"></script>
            </form>
        </div>
        <?php

        // cookies misschien nodig voor resultpage
        } else if(isset($_POST['submit'])) {
                $q1 = $_POST['q1'];
                add_cookie('q1', $_POST['q1']);
                $q2 = $_POST['q2'];
                add_cookie('q2', $_POST['q2']);
                $q3 = $_POST['q3'];
                add_cookie('q3', $_POST['q3']);
                $q4 = $_POST['q4'];
                add_cookie('q4', $_POST['q4']);
                $q5 = $_POST['q5'];
                add_cookie('q5', $_POST['q5']);
                $q6 = $_POST['q6'];
                add_cookie('q6', $_POST['q6']);
                $q7 = $_POST['q7'];
                add_cookie('q7', $_POST['q7']);

                echo "q1:" . $q1 . "\n";
                echo "q2:" . $q2 . "\n";
                echo "q3:" . $q3 . "\n";
                echo "q4:" . $q4 . "\n";
                echo "q5:" . $q5 . "\n";
                echo "q6:" . $q6 . "\n";
                echo "q7:" . $q7 . "\n";
            }
            ?>
    </div>
</body>
</html>
