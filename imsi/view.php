<?php
include 'db.php';

$idx = $_GET["idx"];

$sql = "SELECT * FROM board WHERE idx={$idx}";
$stmt = $conn->prepare($sql);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($row);
// echo "</pre>";
// echo $idx;
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $row['subject']; ?></title>
</head>
<body>
  <p>제목 : <?php echo $row['subject']; ?></p>
  <p><?php echo nl2br($row['content']); ?></p>
  
</body>
</html>