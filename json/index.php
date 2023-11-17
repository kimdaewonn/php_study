<?php
// $age = array("Peter" => 35, "Ban" => 37, "Joe" => 20);

$age = [
  "Peter" => 35,
  "Ban" => 37,
  "Joe" => 20
];

// PHP 연관배열 => JSON
// echo json_encode($age);

// $json = '{"Peter": 35, "Ben" : 37, "Joe": 20}';
// $obj = json_decode($json,false);
// echo $obj->Peter;


$json = '{"Peter": 35, "Ben" : 37, "Joe": 20}';
$arr = json_decode($json,true);
// echo $obj["Peter"];

foreach($arr as $key => $value){
  echo $key ." 는". $value ."살 입니다.<br>"; 
}
?>