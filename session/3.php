<?php

session_start();
// session_unset();
// session_destroy();

unset($_SESSION['ss_age']);

?>

<a href="2.php">세션 확인</a>