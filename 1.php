<?php
// 전역변수
// 로컬변수(지역변수)

$x = 5;

function myTest() {
  $x = 3;
  echo "변수 x의 출력값 $x";
  echo "<br/>";
}

myTest();

echo "변수 x의 출력값 $x";
?>