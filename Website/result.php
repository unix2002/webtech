<!DOCTYPE html>
<html lang="en">

<?php
    $average = "average footprint placeholder";

    require_once('footprintcalc.php');
    $sum = result_footprint();

    // currently a placeholder
    // function calc_sum()
    // {
    //     $result = $_COOKIE['q3'] * 10;
    //     return $result;
    // }
?>

<head>
    <title>MyEcology</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
    <link rel="stylesheet" href="style.css">

    <!-- <script src="../gebruikte_scripten/berekening.js"></script>
    <script src="../gebruikte_scripten/resultscaler.js"></script> -->

</head>

<body>
<?php
    include_once 'header_nieuw.php';

    // echo "cookies are: " . $_COOKIE['q1'];
?>
    <header class="header">
        <nav class="bar">
            <a class="brand" href="index.html">MyEcology</a>
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

        <div class="container">
            <div class="form">
                <p>Your footprint is:<br><?php echo calc_sum(); ?> m3</p>
                <br>
                <p>The average footprint is:<br><?php echo $average; ?></p>
            </div>
        </div>
        <!-- <div class="content"> -->
            <!-- <h1>Your result</h1>
            <img class="result_img_average" src="./img/footprint.png">
            <div id="target">
                <img class="result_img_user" src="./img/footprint.png">
            </div>

            <div class="result_text"> -->
                <!-- get result from database -->
                <!-- <p>Your footprint is:<br><span id="footprint"></span> m3</p>
                <br>
                <p>The average footprint is:<br><span id="avg_footprint"></span></p>

                <script>
                    try {
                        var url_str = 'https://webtech-in16.webtech-uva.nl/?sum=50';
                        var string = new URL(url_str).searchParams;

                        const params = new URLSearchParams(string);
                        const sum = params.get('sum');
                        document.getElementById("footprint").innerHTML = sum;
                    }
                    finally{
                        let value = 50000;
                        document.getElementById("footprint").innerHTML = value;
                    }
                </script>
            </div>

            <button class="quiz_button" onclick="animation_player()">See my result</button> -->
        <!-- </div> -->
        <input type="submit" name="submit" value="Submit">
        <?php
            echo "cookie = " . $_COOKIE['q1'];
        ?>
    </div>
</body>
</html>
