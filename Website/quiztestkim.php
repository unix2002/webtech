<!DOCTYPE.php>
<html lang="en">

<head>
    <title>MyEcology</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style.css">
    <?php
    $sum = 0;

    function add_to_sum ($value)
    {
        $sum = $sum + $value;
    }
    ?>
</head>

<body>
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
                        <button class="test_button" name="q1" value="1">Daily</button><br>
                        <button class="test_button" name="q1" value="2">Often</button><br>
                        <button class="test_button" name="q1" value="3">Sometimes</button><br>
                        <button class="test_button" name="q1" value="4">Never</button>
                    </ul>
                </div>
                <div class="Q2">
                    <h3>How much money do you spend on takeaways and restaurants?</h3>
                    <ul class="options2">
                        <button class="test_button" name="q2" value="1">€0</button><br>
                        <button class="test_button" name="q2" value="2">€1 - €20</button><br>
                        <button class="test_button" name="q2" value="3">€20 - €50</button><br>
                        <button class="test_button" name="q2" value="4">€50 or more</button>
                    </ul>
                </div>
                <div class="Q3">
                    <h3>What is your fuel usage per week?</h3>
                    <ul class="options3">
                        <button class="test_button" onclick="add_to_sum(10)" name="q3" value="1">1 - 10 litre</button><br>
                        <button class="test_button" onclick="add_to_sum(20)" name="q3" value="2">10 - 20 litre</button><br>
                        <button class="test_button" onclick="add_to_sum(30)" name="q3" value="3">20 - 30 litre</button><br>
                        <button class="test_button" onclick="add_to_sum(30)" name="q3" value="4">30 - 40 litre</button><br>
                        <button class="test_button" onclick="add_to_sum(40)" name="q3" value="5">40 - 50 litre</button><br>
                        <button class="test_button" onclick="add_to_sum(50)" name="q3" value="6">50+ litre</button><br>
                        <button class="test_button" name="q3" value="7">I don't have a car</button><br>
                        <button class="test_button" name="q3" value="8">I only travel by public transport</button><br>
                    </ul>
                </div>
                <div class="Q4">
                    <h3>How often do you go on holiday a year?</h3>
                    <ul class="options4">
                        <button class="test_button" name="q4" value="1">0</button><br>
                        <button class="test_button" name="q4" value="2">1 - 2</button><br>
                        <button class="test_button" name="q4" value="3">3 - 4</button><br>
                        <button class="test_button" name="q4" value="4">5 or higher</button><br>
                    </ul>
                </div>
                <div class="Q5">
                    <h3>What kind of house do you live in?</h3>
                    <ul class="options5">
                        <button class="test_button" name="q5" value="1">Detached</button><br>
                        <button class="test_button" name="q5" value="2">Semi-detached</button><br>
                        <button class="test_button" name="q5" value="3">Flat</button><br>
                        <button class="test_button" name="q5" value="4">Houseboat</button><br>
                        <button class="test_button" name="q5" value="5">Villa</button><br>
                    </ul>
                </div>
                <div class="Q6">
                    <h3>What is the energy label of your house?</h3>
                    <ul class="options6">
                        <button class="test_button" name="q6" value="1">A+ or higher</button><br>
                        <button class="test_button" name="q6" value="2">A</button><br>
                        <button class="test_button" name="q6" value="3">B or C</button><br>
                        <button class="test_button" name="q6" value="4">D or E</button><br>
                        <button class="test_button" name="q6" value="5">F or G</button><br>
                        <button class="test_button" name="q6" value="6">I don't know</button><br>
                    </ul>
                </div>
                <div class="Q7">
                    <h3>What is your gas usage per year?</h3>
                    <ul class="options7">
                        <button class="test_button" name="q7" value="1" onclick="add_to_sum(900 * 1.78)">Up to 900m3</button><br>
                        <button class="test_button" name="q7" value="2" onclick="add_to_sum(1500 * 1.78)">900 m3 - 1500 m3</button><br>
                        <button class="test_button" name="q7" value="3" onclick="add_to_sum(2000 * 1.78)">1500 m3 - 2000 m3</button><br>
                        <button class="test_button" name="q7" value="4" onclick="add_to_sum(2500 * 1.78)">More than 2000 m3</button><br>
                        <button class="test_button" name="q7" value="5" onclick="add_to_sum(1750 * 1.78)">I don't know</button><br>
                    </ul>
                </div>
                <div class="Q8">
                    <h3>What is your electricity usage per year?</h3>
                    <ul class="options8">
                        <button class="test_button" name="q8" value="1" onclick="add_to_sum(2000 * 0,37)">Up to 2000 kWh</button><br>
                        <button class="test_button" name="q8" value="2" onclick="add_to_sum(2500 * 0,37)">2000 - 2500 kWh</button><br>
                        <button class="test_button" name="q8" value="3" onclick="add_to_sum(3000 * 0,37)">2500 - 3000 kWh</button><br>
                        <button class="test_button" name="q8" value="4" onclick="add_to_sum(3500 * 0,37)">3000 - 3500 kWh</button><br>
                        <button class="test_button" name="q8" value="5" onclick="add_to_sum(4000 * 0,37)">3500 - 4000 kWh</button><br>
                        <button class="test_button" name="q8" value="6" onclick="add_to_sum(4500 * 0,37)">4000 kWh or more</button><br>
                        <button class="test_button" name="q8" value="7" onclick="add_to_sum(3500 * 0,37)">I don't know</button><br>
                    </ul>
                </div>
                <div class="Q9">
                    <h3>Do you seperate your trash?</h3>
                    <ul class="options9">
                        <button class="test_button" name="q9" value="1">Almost everything</button><br>
                        <button class="test_button" name="q9" value="2">Only organic waste</button><br>
                        <button class="test_button" name="q9" value="3">Only paper and plastic</button><br>
                        <button class="test_button" name="q9" value="4">Only glass</button><br>
                        <button class="test_button" name="q9" value="5">I don't sort my trash</button><br>
                    </ul>
                </div>
                <div class="last">
                    <h1>That's it</h1>
                    <p>Thank you for your time :)</p>
                    <a class="quiz_button" href="index.php">Homepage</a>
                    <input type="submit" name="submit" value="Submit">
                    <!-- post result naar database -->
                    <a class="quiz_button" href="result.php">Check your footprint</a>
                </div>
                <script src="form.js"></script>
            </form>
        </div>
        <?php
        } else if(isset($_POST['submit'])) {
                $q1 = $_POST['q1'];
                $q2 = $_POST['q2'];
                $q3 = $_POST['q3'];
                $q4 = $_POST['q4'];
                $q5 = $_POST['q5'];
                $q6 = $_POST['q6'];
                $q7 = $_POST['q7'];

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
