<?php

// 세션 생성

session_start();

$_SESSION['ss_name'] = '김대원';
$_SESSION['ss_age'] = '28';

?>

세션이 생성되었습니다.
<a href="2.php">세션확인</a>