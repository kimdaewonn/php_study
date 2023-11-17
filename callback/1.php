<?php

function exclaim($name, $str){ 
  return $name. "님, ". $str ."! <br>";
}

function ask($name, $str){ 
  return $name. "님, ". $str ."? <br>";
}

function printFormatted($name, $str, $format) {
  echo $format($name,$str);
}

printFormatted("톰","안녕", "exclaim");
printFormatted("브라이언","어디", "ask");
?>