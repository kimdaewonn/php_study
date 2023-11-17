<?php
// 정수필터 : FILTER_VALIDATE_INT
// 실수필터 : FILTER_VALIDATE_FLOAT
// IP 필터 : FILTER_VALIDATE_IP
// 이메일 필터 : FILTER_VALIDATE_EMAIL
// URL 필터 : FILTER_VALIDATE_URL
// IPv6 주소확인 : FILTER_VALIDATE_URL

// $ip = "2001:0db8:85a3:05lll";

// ASCII 값 127보다 큰 문자 제거

if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
  echo "잘못된 IPV6.";
} else {
  echo "정상 IPV6.";
}
?>