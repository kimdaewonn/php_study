<?php

// phpinfo();
// exit;


// php mysql 연동 3가지방법
// MySQLi OOP
$servername = "localhost";
$username = "root";
$password = "";

// $conn = new mysqli($servername, $username, $passowrd);
// $conn = mysqli_connect($servername, $username, $passowrd);
// $conn = new PDO("mysql:host=$servername", $username, $password);

// if($conn->connect_error) {
//   echo "DB 연결에 실패했습니다.";
//   echo $conn->connect_error;
//   exit;
// } 

//   echo "DB 연결에 성공했습니다.";

// if(!$conn) {
//   die("DB연결에 실패했습니다.");
// }

//   echo "DB 연결에 성공했습니다.";

try {
  $conn = new PDO("mysql:host=$servername", $username, $password);
  echo "DB 연결에 성공했습니다.";
} catch (PDOException $e) {
  echo "DB 연결에 실패했습니다.";
  echo $e->getMessage();
}

?>