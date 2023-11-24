<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="POST" name="uform" enctype="multipart/form-data" action="csv_upload.php">
    <label for="">CSV 파일을 업로드 해주세요.</label><br>
    <input type="file" name="csv" id="csv">
    <button id="btn">확인</button>
  </form>
  <script>
    const btn = document.querySelector("#btn");
    btn.addEventListener("click",(e)=>{
      e.preventDefault();
      const csv = document.querySelector("#csv");
      if(csv.value== "") {
        alert("파일을 선택해주세요.");
        return false;
      }
      document.uform.submit();
    });
  </script>
</body>
</html>
<!-- 
  exel 데이터를 DB table에 넣기
  1. excel csv 저장.
  2. DB생성(skip가능)
  3. Table 생성 (skip 가능)
  4. 업로드 Form 화면 구성
  5. 처리 부분 코딩
  6. 확인

-->
