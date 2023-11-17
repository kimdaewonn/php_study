<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>로그인 폼</title>
  <script src="login.js"></script>
</head>
<body>
  <h1>로그인</h1>
  <form action="login_ok.php" name="login_form" method="post" autocomplete="off">
    <label for="">아이디</label>
    <input type="text" name="id" id="id" placeholder="아이디 입력">
    <label for="">비밀번호</label>
    <input type="password" name="pw" id="pw" placeholder="비번 입력">
    <br>
    <button id="login_btn">확인</button>
  </form>

  <a href="member.php">회원전용 페이지</a>
</body>
</html>