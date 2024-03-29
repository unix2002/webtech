<!DOCTYPE html>
<html>
	<head>
		<title>Leaderboard</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style.css">
		<link rel="icon" type="image/x-icon" href="/img/favicon.ico">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script>
		var originalHeight = "140px";
		var originalWidth = "160px";
			function resetFoot() {
				foot.style.height = originalHeight;
				foot.style.width = originalWidth;
			}
			function growFoot(sizeMultiplier) {
				var foot = document.getElementById("foot");
				foot.style.height = sizeMultiplier * foot.offsetHeight + "px";
				foot.style.width = sizeMultiplier * foot.offsetWidth + "px";
			}
            function growFoot_test(sizeMultiplier)
            {
                document.getElementById("foot").style.height = sizeMultiplier * foot.offsetHeight + "px";
                document.getElementById("foot").style.width = sizeMultiplier * foot.offsetWidth + "px";
            }

			$(document).ready(function() {
    				$("#form").submit(function(event) {
        				event.preventDefault(); // prevent the form from submitting
        				$.ajax({
            					type: "POST", // use the POST method
            					url: "./api/api_request.php", // the URL of the PHP script
            					data: $("#form").serialize(), // the form data
            					success: function(data) {
                					// do something with the returned data
                					$("#result").html(data);
							resetFoot();
							// growFoot(data);
                            growFoot_test(data);
            					}
        				});
    				});
			});

		</script>
	<?php
        include_once 'header_nieuw.php'
	?>
    <style>
        .leadFoot {
            height: 200px;
            width: 160px;
            float: right;
            margin-top: 20%;
            margin-right: 25%;
        }
    </style>
	</head>
	<body>
    <div class="container">
        <div class="leadContent">
            <h1>Leaderboard</h1>
            <form id="form" action="https://webtech-in16.webtech-uva.nl/leaderboard.php" method="post">
            <!--label for="country">Enter the country name:</label-->
            <select class="country_list" name="country" id="data_list">
                <option value="Armenia">Armenia</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="Angola">Angola</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Barbados">Barbados</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Botswana">Botswana</option>
                <option value="Brazil">Brazil</option>
                <option value="Belize">Belize</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Brunei">Brunei</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Burundi">Burundi</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cabo Verde">Cabo Verde</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option> <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czechoslovakia">Czechoslovakia</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Benin">Benin</option>
                <option value="Denmark">Denmark</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Belarus">Belarus</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Ethiopia PDR">Ethiopia PDR</option>
                <option value="Estonia">Estonia</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Georgia">Georgia</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Germany">Germany</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Ghana">Ghana</option>
                <option value="Greece">Greece</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guinea">Guinea</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Honduras">Honduras</option>
                <option value="Hungary">Hungary</option>
                <option value="Croatia">Croatia</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran">Iran</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jordan">Jordan</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Cambodia">Cambodia</option>
                <option value="North Korea">North Korea</option>
                <option value="South Korea">South Korea</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Latvia">Latvia</option>
                <option value="Laos">Laos</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libya">Libya</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mexico">Mexico</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Moldova">Moldova</option>
                <option value="Namibia">Namibia</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Macedonia">Macedonia</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Norway">Norway</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Panama">Panama</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Guinea-Bissau">Guinea-Bissau</option>
                <option value="Timor-Leste">Timor-Leste</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Qatar">Qatar</option>
                <option value="Zimbabwe">Zimbabwe</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Russia">Russia</option>
                <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                <option value="St. Lucia">St. Lucia</option>
                <option value="St. Vincent and Grenadines">St. Vincent and Grenadines</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Singapore">Singapore</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="Spain">Spain</option>
                <option value="Sudan (former)">Sudan (former)</option>
                <option value="Suriname">Suriname</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syria">Syria</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Tanzania">Tanzania</option>
                <option value="Thailand">Thailand</option>
                <option value="Togo">Togo</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Oman">Oman</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="Uganda">Uganda</option>
                <option value="USSR">USSR</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United States">United States</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Samoa">Samoa</option>
                <option value="Yugoslavia">Yugoslavia</option>
                <option value="Yemen">Yemen</option>
                <option value="Congo DR">Congo DR</option>
                <option value="Zambia">Zambia</option>
                <option value="Belgium">Belgium</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Serbia">Serbia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Sudan">Sudan</option>
                <option value="South Sudan">South Sudan</option>
                <option value="Palestine">Palestine</option>
                <option value="China">China</option>
            </select>
            <br>
            <input class="lead_but" type="submit" value="Submit">
            </form>
            <h2>Results</h2>
            <p><a id="result"></a> average global hectare per person.</p>
            <p> A global hectare is the planetary average amount of CO2 being absorbed per hectare of land.</p>
	    </div>
		<img class="leadFoot" id="foot" src="./img/footprint.png"></img>
    </div>
    </body>
</html>
