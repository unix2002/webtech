<!DOCTYPE html>
<?php

	function add_cookie($question, $val)
	{
        $new_val = $val;
        setcookie($question, $val);
    }
?>

<html lang="en">

<head>
    <title>MyEcology</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <?php
        include_once 'header_nieuw.php';
        ?>
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
            <form action="quiz.php" method="post" id="form">
                <div class="Q1">
                    <h3>How many km do you drive in a year?</h3>
                    <ul class="options1">
			            <li><label for="q1a1"><input type="radio" id="q1a1" name="q1" value="1">0 km</label></li>
                        <li><label for="q1a2"><input type="radio" name="q1" value="2" id="q1a2">0 - 5000 km</label></li>
                        <li><label for="q1a3"><input type="radio" name="q1" value="3" id="q1a3">5000 - 10000 km</label></li>
                        <li><label for="q1a4"><input type="radio" name="q1" value="4" id="q1a4">10000 - 15000 km</label></li>
                    </ul>
                </div>
                <div class="Q2">
                    <h3>How many km do you fly in a year?</h3>
                    <ul class="options2">
                        <li><label for="q2a1"><input type="radio" name="q2" value="1" id="q2a1">0 km</label></li>
                        <li><label for="q2a2"><input type="radio" name="q2" value="2" id="q2a2">500 - 1000 km</label></li>
                        <li><label for="q2a3"><input type="radio" name="q2" value="3" id="q2a3">1000- 1500 km</label></li>
                        <li><label for="q2a4"><input type="radio" name="q2" value="4" id="q2a4">1500 - 2000 km</label></li>
                        <li><label for="q2a5"><input type="radio" name="q2" value="5" id="q2a5">2000 - 2500 km</label></li>
                        <li><label for="q2a6"><input type="radio" name="q2" value="6" id="q2a6">2500 - 3000 km</label></li>
                    </ul>
                </div>
		        <div class="Q3">
                    <h3>How much electricity do you use in a year?</h3>
                    <ul class="options3">
                        <li><label for="q3a1"><input type="radio" name="q3" value="1" id="q3a1">I don't know.</label></li>
                        <li><label for="q3a2"><input type="radio" name="q3" value="2" id="q3a2">1000 - 1500 kWh</label></li>
                        <li><label for="q3a3"><input type="radio" name="q3" value="3" id="q3a3">1500 - 2000 kWh</label></li>
                        <li><label for="q3a4"><input type="radio" name="q3" value="4" id="q3a4">2000 - 2500 kWh</label></li>
                        <li><label for="q3a5"><input type="radio" name="q3" value="5" id="q3a5">2500 - 3000 kWh</label></li>
                        <li><label for="q3a6"><input type="radio" name="q3" value="6" id="q3a6">3000 - 3500 kWh</label></li>
                        <li><label for="q3a7"><input type="radio" name="q3" value="7" id="q3a7">3500 - 4000 kWh</label></li>
                        <li><label for="q3a8"><input type="radio" name="q3" value="8" id="q3a8">4000 +</label></li>
                    </ul>
                </div>
                <div class="Q4">
                    <h3>How many square meters is your home?</h3>
                    <ul class="options4">
                        <li><label for="q4a1"><input type="radio" name="q4" value="1" id="q4a1">0 - 20</label></li>
                        <li><label for="q4a2"><input type="radio" name="q4" value="2" id="q4a2">20 - 60</label></li>
                        <li><label for="q4a3"><input type="radio" name="q4" value="3" id="q4a3">60 - 100</label></li>
                        <li><label for="q4a4"><input type="radio" name="q4" value="4" id="q4a4">100 - 140</label></li>
                    </ul>
                </div>
                <div class="Q5">
                    <h3>How many hours a day do you spent on your desktop?</h3>
                    <ul class="options5">
                        <li><label for="q5a1"><input type="radio" name="q5" value="1" id="q5a1">0 hours</label></li>
                        <li><label for="q5a2"><input type="radio" name="q5" value="2" id="q5a2">1 hour</label></li>
                        <li><label for="q5a3"><input type="radio" name="q5" value="3" id="q5a3">2 hours</label></li>
                        <li><label for="q5a4"><input type="radio" name="q5" value="4" id="q5a4">3 hours</label></li>
                        <li><label for="q5a5"><input type="radio" name="q5" value="5" id="q5a5">4 hours</label></li>
                        <li><label for="q5a6"><input type="radio" name="q6" value="6" id="q5a6">5-10 hours</label></li>
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

        } else if(isset($_POST['submit'])) {
            $q1 = $_POST['q1'];
            $q2 = $_POST['q2'];
            $q3 = $_POST['q3'];
            $q4 = $_POST['q4'];
            $q5 = $_POST['q5'];
            $q6 = $_POST['q6'];
            $q7 = $_POST['q7'];
            add_cookie('q1', $q1);
            add_cookie('q2', $q2);
            add_cookie('q3', $q3);
            add_cookie('q4', $q4);
            add_cookie('q5', $q5);
            add_cookie('q6', $q6);
            add_cookie('q7', $q7);


            if($q1 == 1) {
                $f1 = 0;
            } else if($q1 == 2) {
                $f1 = 350;
            } else if($q1 == 3) {
                $f1 = 1050;
            } else if($q1 == 4) {
                $f1 = 1750;
            }

            if($q2 == 1) {
                $f2 = 0;
            } else if($q2 == 2) {
                $f2 = 213.75;
            } else if($q2 == 3) {
                $f2 = 356.25;
            } else if($q2 == 4) {
                $f2 = 498.75;
            }

            if($q3 == 1) {
                $f3 = 1882.1;
            } else if($q3 == 2) {
                $f3 = 811.25;
            } else if($q3 == 3) {
                $f3 = 1135.75;
            } else if($q3 == 4) {
                $f3 = 1460.25;
            } else if($q3 == 5) {
                $f3 = 1784.75;
            } else if($q3 == 6) {
                $f3 = 2109.25;
            } else if($q3 == 7) {
                $f3 = 2433.75;
            } else if($q3 == 8) {
                $f3 = 2758.25;
            }

            if($q4 == 1) {
                $f4 = 1500;
            } else if($q4 == 2) {
                $f4 = 6000;
            } else if($q4 == 3) {
                $f4 = 12000;
            } else if($q4 == 4) {
                $f4 = 18000;
            }

            if($q5 == 1) {
                $f5 = 0;
            } else if($q5 == 2) {
                $f5 = 21.9;
            } else if($q5 == 3) {
                $f5 = 43.8;
            } else if($q5 == 4) {
                $f5 = 65.7;
            } else if($q5 == 5) {
                $f5 = 87.6;
            } else if($q5 == 6) {
                $f5 = 164.25;
            }

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
