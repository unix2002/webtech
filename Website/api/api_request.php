<?php
$country_code = null;

$jsonString = file_get_contents('./country_codes.txt');
$dataset = json_decode($jsonString, true);

$countryName = htmlspecialchars($_POST['country']);
foreach ($dataset as $country) {
	if ($country['countryName'] === $countryName) {
		$country_code = $country['countryCode'];
		break;
	}
}

$url = "https://api.footprintnetwork.org/v1/data/{$country_code}/2018/EFCpc";
$username = 'any-user-name';
$password = '1JP445RA2PF7p3i8rBA037Qns5Um0vqSoSEiLsCLHBeNmtTGDNg9';

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_USERPWD => "$username:$password",
  CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
  echo "Error: " . $err;
} else {
  $data = json_decode($response);
  print_r(number_format($data[0]->carbon, 2));
}
?>
