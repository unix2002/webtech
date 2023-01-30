<!DOCTYPE html>
<html lang="en">

    <?php
    $average = "average footprint placeholder";

    include_once 'header_nieuw.php';
    require_once('footprintcalc.php');
    $sum = result_footprint();

    setcookie('total', $sum, time() + 3600);
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
    <div class="cookies_popup">
        please click the button to accept cookies
        <button>Accept</button>
    </div>

    <div class="container">
        <div class="form">
            <p>Your footprint is:<br><?php echo $sum; ?> m3</p>
            <br>
            <p>The average footprint is:<br><?php echo $average; ?></p>
        </div>
    </div>
</body>
</html>
        <!-- <div class="container">
            <div class="form">
		    <p class="resultaat">javascript voetafdruk:</p>
    		<script src="scripten/berekening.js"></script>
                <br>
                <p>The average footprint is:<br><?php echo $average; ?></p>
            </div>
        </div> -->