<!DOCTYPE html>
<html lang="en">

<?php
    function add_cookie($question, $val)
    {
        $new_val = $val;
        setcookie($question, $val);
    }
?>

<head>
    <title>MyEcology</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <!-- Deze include is nodig voor het ajax request-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    	$("#form").submit(function(event) {
        	event.preventDefault(); // prevent the form from submitting
        	$.ajax({
            		type: "POST", // use the POST method
            		url: "./scripten/quiz_ajax.php", // the URL of the PHP script
            		data: $("#form").serialize(), // the form data
            		success: function(data) {
                	// do something with the returned data
				$("#result").html(data);
					document.getElementById("last").style.display = "none";
            			}
        		});
    	});
});
</script>

<?php
    include_once 'header_nieuw.php';
?>
</head>
<body>
    <div class="container">
        <!-- div en dan end div? -->
	<!-- <button onclick="location.href='https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwixp5q00vH8AhUMH-wKHQdZCP0QwqsBegQIBxAB&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DdQw4w9WgXcQ&usg=AOvVaw0aHtehaphMhOCAkCydRLZU';" type="button">
        <div class="content">
        </div>
	</button> -->

        <?php
        if(!isset($_POST["submit"])) {
?>

	<script>
		var TOTAL_CO2 = null;
		function q_add(id, c) {
			TOTAL_CO2 += c;

			// 7 komt overeen met het aantal vragen.
			if (id.charAt(1) == "9") {
				calc_done();
                last();
			 	return;
			}
			next(id.charAt(1));
		}
		function calc_done() {
			// Verwerken resultaat.
			url = window.location.href;
			const params = new URLSearchParams(url.split("?")[1]);
			const total_selection = parseFloat(params.get("total"));
			TOTAL = total_selection + TOTAL_CO2;
			alert("total: " + TOTAL);
		}

		function prev(vraag_nummer) {
			// getal
            var previous_q = `options${vraag_nummer - 1}`;
            var class_name = `options${vraag_nummer}`;

            var current_q = document.querySelector(`.Q${vraag_nummer}`);
            var prev_q = document.querySelector(`.Q${vraag_nummer - 1}`);

            prev_q.style.display = "block";
            current_q.style.display = "none";
		}

		function next(vraag_nummer) {
			// nummer is char
            var next_q = `options${vraag_nummer + 1}`;
            var class_name = `options${vraag_nummer}`;

            var current_q = document.querySelector(`.Q${vraag_nummer}`);
            var next_q = document.querySelector(`.Q${vraag_nummer + 1}`);

            next_q.style.display = "block";
            current_q.style.display = "none";
		}
        function last()
        {
            var current_q = document.querySelector(`.Q9`);
            var next_q = document.querySelector(`.last`);

            next_q.style.display = "block";
            current_q.style.display = "none";
        }

		function make_cookie(currentQuestion, value)
		{
			document.cookie = `q${currentQuestion}` + value + "; expires=Thu, 18 Dec 2023 12:00:00 UTC; path=/; sameSite=none; secure; ";
		}
	</script>

        <div class="form">
            <!--
                Source:
                https://footprint.wwf.org.uk/#/
                https://www.footprintcalculator.org/home/en
	    -->
                <div class="Q1">
                    <h3>How often do you eat animal-based products?</h3>
                    <ul class="options1">
		            	<li onclick="q_add('q1a1', 0); make_cookie(1, 1);">Daily</li>
                        <li onclick="q_add('q1a2', 350); make_cookie(1, 2);">Often</li>
                        <li onclick="q_add('q1a3', 1050); make_cookie(1, 3);">Sometime</li>
			            <li onclick="q_add('q1a4', 1750); make_cookie(1, 4);">Never</li>
                    </ul>
                </div>
                <div class="Q2">
                    <h3>How much money do you spend on takeaways and restaurants?</h3>
                    <ul class="options2">
                        <li onclick="q_add('q2a1', 0); make_cookie(2, 1);">€0</li>
                        <li onclick="q_add('q2a2', 213.75); make_cookie(2, 2);">€1 - €20</li>
                        <li onclick="q_add('q2a3', 356.25); make_cookie(2, 3);">€20 - €50</li>
			            <li onclick="q_add('q2a4', 498.75); make_cookie(2, 4);">€50 or higher</li>
			            <a onclick="prev(2)"><img src="img/feet_buttons/prev.png" id="prev2"></img></a>
                    </ul>
                </div>
		        <div class="Q3">
                    <h3>What is your fuel usage per week?</h3>
                    <ul class="options3">
                        <li onclick="q_add('q3a1', 1882.1); make_cookie(3, 1);">1 litre - 10 litres</li>
                        <li onclick="q_add('q3a2', 811.25); make_cookie(3, 2);">10 litres - 20 litres</li>
                        <li onclick="q_add('q3a3', 1135.75); make_cookie(3, 3);">20 litres - 30 litres</li>
                        <li onclick="q_add('q3a4', 1460.25); make_cookie(3, 4);">30 litres - 40 litres</li>
                        <li onclick="q_add('q3a5', 1784.75); make_cookie(3, 5);">40 litres - 50 litres</li>
                        <li onclick="q_add('q3a6', 2109.25); make_cookie(3, 6);">50 litres or higher</li>
                        <li onclick="q_add('q3a7', 2433.75); make_cookie(3, 7);">I don't have a car</li>
                        <li onclick="q_add('q3a8', 2758.25); make_cookie(3, 8);">I only travel by public transport</li>
			            <a onclick="prev(3)"><img src="img/feet_buttons/prev.png" id="prev2"></img></a>
                    </ul>
                </div>
                <div class="Q4">
                    <h3>How often do you go on holiday a year?</h3>
                    <ul class="options4">
                        <li onclick="q_add('q4a1', 1500); make_cookie(4, 1);">0</li>
                        <li onclick="q_add('q4a2', 6000); make_cookie(4, 2);">1 - 2</li>
                        <li onclick="q_add('q4a3', 12000); make_cookie(4, 3);">3 - 4</li>
                        <li onclick="q_add('q4a4', 18000); make_cookie(4, 4);">5 or higher</li>
			            <a onclick="prev(4)"><img src="img/feet_buttons/prev.png" id="prev2"></img></a>
                    </ul>
                </div>
                <div class="Q5">
                    <h3>What kind of house do you live in?</h3>
                    <ul class="options5">
                        <li onclick="q_add('q5a1', 0); make_cookie(5, 1);">Detached</li>
                        <li onclick="q_add('q5a2', 21.9); make_cookie(5, 2);">Semi-detached</li>
                        <li onclick="q_add('q5a3', 43.8); make_cookie(5, 3);">Flat</li>
                        <li onclick="q_add('q5a4', 65.7); make_cookie(5, 4);">Houseboat</li>
                        <li onclick="q_add('q5a5', 87.6); make_cookie(5, 5);">Villa</li>
            			<a onclick="prev(5)"><img src="img/feet_buttons/prev.png" id="prev2"></img></a>
                    </ul>
                </div>
                <div class="Q6">
                    <h3>What is the energy label of your house?</h3>
                    <ul class="options6">
                        <li onclick="q_add('q6a1', 0); make_cookie(6, 1);">A+, A++, A+++, A++++</li>
                        <li onclick="q_add('q6a2', 0); make_cookie(6, 2);">A</li>
                        <li onclick="q_add('q6a3', 0); make_cookie(6, 3);">B, C</li>
                        <li onclick="q_add('q6a4', 0); make_cookie(6, 4);">D, E</li>
                        <li onclick="q_add('q6a5', 0); make_cookie(6, 5);">F, G</li>
                        <li onclick="q_add('q6a6', 0); make_cookie(6, 6);">I don't know</li>
			            <a onclick="prev(6)"><img src="img/feet_buttons/prev.png" id="prev2"></img></a>
                    </ul>
                </div>
                <div class="Q7">
                    <h3>What is your gas usage per year?</h3>
                    <ul class="options7">
		                <li onclick="q_add('q7a1', 0); make_cookie(7, 1);">up to 900 m3</li>
                        <li onclick="q_add('q7a2', 0); make_cookie(7, 2);">900 m3 - 1500 m3</li>
                        <li onclick="q_add('q7a3', 0); make_cookie(7, 3);">1500 m3 - 2000 m3</li>
                        <li onclick="q_add('q7a4', 0); make_cookie(7, 4);">More than 2000 m3</li>
                        <li onclick="q_add('q7a5', 0); make_cookie(7, 5);">I don't know</li>
			            <a onclick="prev(7)"><img src="img/feet_buttons/prev.png" id="prev2"></img></a>
                    </ul>
                </div>
                <div class="Q8">
                    <h3>What is your electricity usage per year?</h3>
                    <ul class="options8">
		                <li onclick="q_add('q8a1', 0); make_cookie(8, 1);">Up to 2000 kWh
                        <li onclick="q_add('q8a2', 0); make_cookie(8, 2);">2000 kWh - 2500 kWh
                        <li onclick="q_add('q8a3', 0); make_cookie(8, 3);">2500 kWh - 3000 kWh
                        <li onclick="q_add('q8a4', 0); make_cookie(8, 4);">3000 kWh - 3500 kWh
                        <li onclick="q_add('q8a5', 0); make_cookie(8, 5);">3500 kWh - 4000 kWh
                        <li onclick="q_add('q8a6', 0); make_cookie(8, 6);">4000 kWh or more
                        <li onclick="q_add('q8a7', 0); make_cookie(8, 7);">I don't know
			            <a onclick="prev(8)"><img src="img/feet_buttons/prev.png" id="prev2"></img></a>
                    </ul>
                </div>
                <div class="Q9">
                    <h3>Do you seperate your trash?</h3>
                    <ul class="options9">
			            <li onclick="q_add('q9a1', 0); make_cookie(9, 1);">Almost everything
                        <li onclick="q_add('q9a2', 0); make_cookie(9, 2);">Only organic waste
                        <li onclick="q_add('q9a3', 0); make_cookie(9, 3);">Only paper and plastic
                        <li onclick="q_add('q9a4', 0); make_cookie(9, 4);">Only glass
                        <li onclick="q_add('q9a5', 0); make_cookie(9, 5);">I don't sort my trash
			            <a onclick="prev(9)"><img src="img/feet_buttons/prev.png" id="prev2"></img></a>
                    </ul>
                </div>

		</div>
                <div class="last" id="last">
                    <h1>That's it</h1>
                    <p>Thank you for your time :)</p>
                </div>
		<script src="form.js"></script>
		<h1 style="display: none;" id="result">RESULT</h1>
        <?php

        // cookies misschien nodig voor resultpage
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

                echo "q1:" . $q1 . "\n";
                echo "q2:" . $q2 . "\n";
                echo "q3:" . $q3 . "\n";
                echo "q4:" . $q4 . "\n";
                echo "q5:" . $q5 . "\n";
                echo "q6:" . $q6 . "\n";
                echo "q7:" . $q7 . "\n";
            }
            ?>
	<!--a class="quiz_button" href="result.php">Results</a-->
    </div>
</body>
</html>
