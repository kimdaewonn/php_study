<?php
// strlen() 문자열 bytes 반환
// $x_len = strlen("한글");
// echo $x_len;
// str_word_count() 단어수 세기 (한글은 안됨)
// echo str_word_count("Hello World");
// 문자열 뒤집는 함수
// echo strrev("Hello World");
// $a = strpos("Hello world", "world"); 6
$email = "eodnjs9605@gmail.com";

if (strpos($email, "@")) {
  echo "이메일 형식에 맞음";
} else {
  echo "이메일 형식이 잘못됨";
}







?>