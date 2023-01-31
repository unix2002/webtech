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

    <script src="./result.js"></script>
</head>

<body>
<?php
    include_once 'header_nieuw.php';

?>
    <!-- <div class="cookies_popup">
        please click the button to accept cookies
        <button>Accept</button>
    </div> -->

    <div class="container">
        <div class="form">
            <div class="result">
            <p>Your footprint is:<br><?php echo $sum; ?> m3</p>
            <br>
            <p>The average footprint is:<br><?php echo $average; ?></p>
            </div>
            <div id="tips_q1">
                <div class="standard_text">
                </div>
                <div class="ans_1">
                    test
                </div>
                <div class="ans_2">
                    test
                </div>
                <div class="ans_3">
                    test
                </div>
                <div class="ans_4">
                    test
                </div>
            </div>
            <div id="tips_q2">
                <div class="standard_text">
                </div>
                <div class="ans_1">
                    test
                </div>
                <div class="ans_2">
                    test
                </div>
                <div class="ans_3">
                    test
                </div>
                <div class="ans_4">
                    test
                </div>
            </div>
            <div id="tips_q3">
                <div class="standard_text">
                </div>
                <div class="ans_1">
                    test
                </div>
                <div class="ans_2">
                    test
                </div>
                <div class="ans_3">
                    test
                </div>
                <div class="ans_4">
                    test
                </div>
            </div>
            <div id="tips_q4">
                <div class="standard_text">
                </div>
                <div class="ans_1">
                    test
                </div>
                <div class="ans_2">
                    test
                </div>
                <div class="ans_3">
                    test
                </div>
                <div class="ans_4">
                    test
                </div>
            </div>
            <div id="tips_q5">
                <div class="standard_text">
                </div>
                <div class="ans_1">
                    test
                </div>
                <div class="ans_2">
                    test
                </div>
                <div class="ans_3">
                    test
                </div>
                <div class="ans_4">
                    test
                </div>
            </div>
            <div id="tips_q6">
                <div class="standard_text">
                </div>
                <div class="ans_1">
                    test
                </div>
                <div class="ans_2">
                    test
                </div>
                <div class="ans_3">
                    test
                </div>
                <div class="ans_4">
                    test
                </div>
            </div>
            <div id="tips_q7">
                <div class="standard_text">
                </div>
                <div class="ans_1">
                    test
                </div>
                <div class="ans_2">
                    test
                </div>
                <div class="ans_3">
                    test
                </div>
                <div class="ans_4">
                    test
                </div>
            </div>
            <div id="tips_q8">
                <div class="standard_text">
                </div>
                <div class="ans_1">
                    test
                </div>
                <div class="ans_2">
                    test
                </div>
                <div class="ans_3">
                    test
                </div>
                <div class="ans_4">
                    test
                </div>
            </div>
            <div id="tips_q9">
                <div class="standard_text">
                </div>
                <div class="ans_1">
                    test
                </div>
                <div class="ans_2">
                    test
                </div>
                <div class="ans_3">
                    test
                </div>
                <div class="ans_4">
                    test
                </div>
            </div>
            <script src="result.js"></script>
        </div>
    </div>
</body>
</html>