<?php

include "db.php";

// fgetcsv()

// $arr = []; // 배열

$file = fopen($_FILES['csv']['tmp_name'], 'r');

$conn->beginTransaction();

while (($line = fgetcsv($file)) !== FALSE) {
  // array_push($arr, $line);

  $sql = "INSERT INTO csvmember(cs_name, cs_email) VALUES('". $line[0] ."',
  '". $line[1] ."');" ;

  $conn->exec($sql);
}
$conn->commit();

fclose($file);

$conn = null;

?>