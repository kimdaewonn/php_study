<?php

// explode() 함수

// $str = "a,b,c,d";

// $arr = explode(',', $str);
// $arr = ['a','b','c','d'];
// $arr = array('a','b','c','d');

// count() 함수
// 배열의 크기를 구하는 함수

// end() 함수
// 배열의 마지막 값을 리턴, 구해줍니다.

function getFileExt2($str){
  $arr = explode('.', $str);
  return $arr[count($arr) - 1];
}

$str = "abb,ccc.jpg";
$ext = getFileExt2($str);
echo $ext;


function getFileExt($file_name){
  $arr = explode('.', $file_name);
  $ext = end($arr);
  return $ext;
}

// $file_name = "photo.jpg";
// $ext = getFileExt($file_name);

// echo $ext;

?>