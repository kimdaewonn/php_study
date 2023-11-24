<?php

include 'db.php';

// print_r($_POST);

$subject = $_POST['subject'];
$content = $_POST['content'];

// $date = date("Y-m-d H:i:s");
// 웹서버시간
// NOW DB서버시간


try {
  $sql = "INSERT INTO board(subject, content, rdate)
  VALUES( '{$subject}', '{$content}', NOW())";
  $conn->exec($sql);
  echo "<p>게시물 등록에 성공했습니다.</p>";

  $last_id = $conn->lastInsertId();
  echo "<p>게시물 번호는 {$last_id} 입니다.</p>";
  echo "
  <script>
    self.location.href='view.php?idx=".$last_id."';
  </script>
  ";


} catch(PDOException $e) {
  echo $e->getMessage();
}


$conn = null;
?>

<!-- 
1. 데이터베이스 생성
2. 테이블 생성
3. 폼화면 작업
4.1 db 접속 모듈 작성
4.2 DB 등록 프로그래밍

 -->

<!-- create table board(
  idx integer unsigned not null auto_increment,
  subject varchar(255) default '' comment '게시물제목',
  content text comment '게시물내용',
  rdate datetime,
  primary key(idx)
); -->