<?php

$dir_name = "./upload";
$d = dir($dir_name); //인스턴스를 만들어준다.

while ($file_name =  $d->read())  {
  if($file_name == '.' or $file_name == '..'){
    continue;
  }
  // echo $file_name ."<br>";
  // echo '<img src="upload/'.$file_name .'"width="100">';
  echo "<img src='upload/{$file_name}' width='100'>";
}


$file_name = $d->read();
echo $file_name;

$d->close();

?>