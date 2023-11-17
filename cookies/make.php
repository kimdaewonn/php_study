<?php

// 쿠키 만들기
setcookie("ck_name", "김대원", time() + 5, "/");
setcookie("ck_age", "28세", time() + 10, "/");
?>
쿠키가 생성되었습니다. <br>
<a href="cookie.php">쿠키 확인</a>