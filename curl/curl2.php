<?php

echo "<p>날씨 출력</p>";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://echo.jsontest.com/temerature/-9.3/humidity/0.40/wind/3');

$response = curl_exec($ch);
curl_close($ch);

echo $response;

$arr = json_decode($response);

foreach($arr AS $key => $var) {
  echo "<br>";
}

?>