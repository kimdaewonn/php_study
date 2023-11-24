<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kimdaewonn";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try{
  echo "<p>DB 연결에 성공했습니다.</p>";

} catch(PDOException $e) {
  echo $e->getMessage();
}

$stmt = $conn->prepare("INSERT INTO myguests (firstname, lastname, email)
VALUES (:firstname, :lastname, :email)");


$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':lastname', $lastname);
$stmt->bindParam(':email', $email);

$firstname = "John";
$lastname = "Doe";
$email = "john@example,com";
$stmt->execute();

$firstname = "ddd";
$lastname = "Doedd";
$email = "ddd@example,com";
$stmt->execute();

$conn = null;
?>