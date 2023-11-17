<?php

echo date("Y"); // 2023
echo "<br>";
echo date("y"); // 23
echo "<br>";
echo date("M"); // Jan ~ Dec
echo "<br>";
echo date("m"); // 01 ~ 12
echo "<br>";
echo date("n"); // 1 ~ 12
echo "<br>";

echo date("Y-m-d H:i:s"); // 1 ~ 12
echo date("Y년 m월 d일 H시i분s초"); // 1 ~ 12
// 2023-11-08 08:21:34
echo "<br>";
echo date("D"); // Mon ~Sun 
echo "<br>";
echo date("d"); // 01 ~ 31
echo "<br>";
echo date("j"); // 1 ~ 31
echo "<br>";
echo date("D"); // Mon ~ Sun
echo "<br>";
echo date("N"); // 요일 1월 ~ 7일 일요일
echo "<br>";

switch(date("N")) {
  case 1: $yoil = "월요일"; break;
  case 2: $yoil = "화요일"; break;
  case 3: $yoil = "수요일"; break;
  case 4: $yoil = "목요일"; break;
  case 5: $yoil = "금요일"; break;
  case 6: $yoil = "토요일"; break;
  case 7: $yoil = "일요일"; break;
}

echo "오늘은 $yoil 입니다.";

?>