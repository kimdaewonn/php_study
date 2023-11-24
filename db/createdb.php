<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "<p>Datebase 에 연결했습니다.</p>";
} catch(PDOException $e) {
  echo $e->getMessage();
  exit;
}
try {
// $sql = "CREATE DATABASE firstdb";
$dbname = "aaa";
$sql = "DROP DATABASE " .$dbname;
$conn->exec($sql);
  echo "<p>" .$dbname. "생성되었습니다..</p>";

} catch(PDOException $a) {
  echo $a->getMessage();
  exit;
}
$conn = null;

?>