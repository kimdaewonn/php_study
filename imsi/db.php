<?php
// PDO

$servername = "localhost";
$username = "root";
$password = "";


try {
  $conn = new PDO("mysql:host=$servername;dbname=kingchobo", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "DB연결 성공";
} catch(PDOException $e) {
  echo $e->getMessage();
  exit;
}

?>