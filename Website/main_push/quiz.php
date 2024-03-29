<!DOCTYPE.php>
.php lang="en">

<head>
    <title>MyEcology</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
    <link rel="stylesheet" href="style.css">
    <script src="../gebruikte_scripten/berekening.js"></script>
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
        <div class="form">
            <!--
                Source:
                https://footprint.wwf.org.uk/#/
                https://www.footprintcalculator.org/home/en
            -->
            <div class="Q1">
                <h3>How often do you eat animal-based products?</h3>
                <ul class="options1">
                    <button class="test_button">Daily</button><br>
                    <button class="test_button">Often</button><br>
                    <button class="test_button">Sometimes</button><br>
                    <button class="test_button">Never</button>
                </ul>
            </div>
            <div class="Q2">
                <h3>How much money do you spend on takeaways and restaurants?</h3>
                <ul class="options2">
                    <button class="test_button">€0</button><br>
                    <button class="test_button">€1 - €20</button><br>
                    <button class="test_button">€20 - €50</button><br>
                    <button class="test_button">€50 or more</button>
                </ul>
            </div>
            <div class="Q3">
                <h3>What is your fuel usage per week?</h3>
                <ul class="options3">
                    <button class="test_button" onclick="add_to_sum(10)">1 - 10 litre</button><br>
                    <button class="test_button" onclick="add_to_sum(20)">10 - 20 litre</button><br>
                    <button class="test_button" onclick="add_to_sum(30)">20 - 30 litre</button><br>
                    <button class="test_button" onclick="add_to_sum(40)">40 - 50 litre</button><br>
                    <button class="test_button" onclick="add_to_sum(50)">50+ litre</button><br>
                    <button class="test_button">I don't have a car</button><br>
                    <button class="test_button">I only travel by public transport</button><br>
                </ul>
            </div>
            <div class="Q4">
                <h3>How often do you go on holiday a year?</h3>
                <ul class="options4">
                    <button class="test_button">0</button><br>
                    <button class="test_button">1 - 2</button><br>
                    <button class="test_button">3 - 4</button><br>
                    <button class="test_button">5 or higher</button><br>
                </ul>
            </div>
            <div class="Q5">
                <h3>What kind of house do you live in?</h3>
                <ul class="options5">
                    <button class="test_button">Detached</button><br>
                    <button class="test_button">Semi-detached</button><br>
                    <button class="test_button">Flat</button><br>
                    <button class="test_button">Houseboat</button><br>
                    <button class="test_button">Villa</button><br>
                </ul>
            </div>
            <div class="Q6">
                <h3>What is the energy label of your house?</h3>
                <ul class="options6">
                    <button class="test_button">A+ or higher</button><br>
                    <button class="test_button">A</button><br>
                    <button class="test_button">B or C</button><br>
                    <button class="test_button">D or E</button><br>
                    <button class="test_button">F or G</button><br>
                    <button class="test_button">I don't know</button><br>
                </ul>
            </div>
            <div class="Q7">
                <h3>What is your gas usage per year?</h3>
                <ul class="options7">
                    <button class="test_button" onclick="add_to_sum(900 * 1.78)">Up to 900m3</button><br>
                    <button class="test_button" onclick="add_to_sum(1500 * 1.78)">900 m3 - 1500 m3</button><br>
                    <button class="test_button" onclick="add_to_sum(2000 * 1.78)">1500 m3 - 2000 m3</button><br>
                    <button class="test_button" onclick="add_to_sum(2500 * 1.78)">More than 2000 m3</button><br>
                    <button class="test_button" onclick="add_to_sum(1750 * 1.78)">I don't know</button><br>
                </ul>
            </div>
            <div class="Q8">
                <h3>What is your electricity usage per year?</h3>
                <ul class="options8">
                    <button class="test_button" onclick="add_to_sum(2000 * 0,37)">Up to 2000 kWh</button><br>
                    <button class="test_button" onclick="add_to_sum(2500 * 0,37)">2000 - 2500 kWh</button><br>
                    <button class="test_button" onclick="add_to_sum(3000 * 0,37)">2500 - 3000 kWh</button><br>
                    <button class="test_button" onclick="add_to_sum(3500 * 0,37)">3000 - 3500 kWh</button><br>
                    <button class="test_button" onclick="add_to_sum(4000 * 0,37)">3500 - 4000 kWh</button><br>
                    <button class="test_button" onclick="add_to_sum(4500 * 0,37)">4000 kWh or more</button><br>
                    <button class="test_button" onclick="add_to_sum(3500 * 0,37)">I don't know</button><br>
                </ul>
            </div>
            <div class="Q9">
                <h3>Do you seperate your trash?</h3>
                <ul class="options9">
                    <button class="test_button">Almost everything</button><br>
                    <button class="test_button">Only organic waste</button><br>
                    <button class="test_button">Only paper and plastic</button><br>
                    <button class="test_button">Only glass</button><br>
                    <button class="test_button">I don't sort my trash</button><br>
                </ul>
            </div>
        </div>
        <div class="last">
            <h1>That's it</h1>
            <p>Thank you for your time and scroll down to find out your ecological footprint!</p>
            <!--Source: -->
            <img class="tips" src="./img/15-simple-ways-1.png">
            <a class="quiz_button" href="result.php">Check your footprint</a>
        </div>
        <script src="form.js"></script>
    </div>
</body>
<.php>
