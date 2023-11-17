<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>폼 입력을 통한 구구단 출력</title>
</head>
<body>
  <form method="post" name="form1" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="">출력하고자 하는 단을 입력 바랍니다.</label>
    <input type="text" name="dan" id="dan" autocomplete="off">
    <button id="submit_btn">구구단 출력</button>
  </form>
  <?php
    if (isset($_POST['dan']) and $_POST['dan'] != '') {
      if(is_numeric($_POST['dan'])) {
        for($i = 1; $i <= 9; $i++) {
          echo $_POST['dan'] .'x'. $i .'=' .$_POST['dan'] * $i .'<br>';
        } 
      } else {
        echo "숫자를 입력해야 구구단 출력이 가능합니다. <br>";
      }
    }
  ?>

  <script>
    const submikt_btn = document.querySelector('#submit_btn');
    const dan = document.querySelector('#dan');

    submikt_btn.addEventListener('click',(e)=>{
      e.preventDefault();
      if(dan.value =='') {
        alert('입력값이 비었습니다.')
        dan.focus();
        return false;
      }

      if(isNaN(dan.value)) {
        alert('숫자를 입력해 주세요.')
        dan.focus();
        return false;
      }
      document.form1.submit();
    })
  </script>


</body>
</html>