<?php
// $file = 'imsi1.text';

// if (file_exists($file)){
//   $pf = fopen($file, 'r');
//   if ($pf) {
//     $fz = filesize($file);
//     $fr = fread($pf,$fz);
//     if($fr){
//     echo $fr;
//     fclose($pf);
//     } else {
//       echo "파일 읽기에 실패했습니다.";
//     }
//   } else {
//     echo "파일 열기에 실패했습니다.";
//   }
// } else {
//   echo "존재하지 않는 파일입니다.";
// }

$file = 'imsi1.text';

$pf = fopen($file, 'a');
fwrite($pf, PHP_EOL. "Say, Hello~");
fclose($pf);
?>
<!-- r , w a -->
<!-- r , w+ a+ -->