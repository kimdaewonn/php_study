<?php
// print_r($_FILES);

if( is_array($_FILES['photo']['tmp_name'])) {

  $cnt = count($_FILES['photo']['tmp_name']);
  $rs_arr = [];
  for ($i =0; $i <$cnt; $i++) {
    copy($_FILES['photo']['tmp_name'][$i], "upload/" .$_FILES['photo']['name'][$i]);
    $rs_arr[] = "upload/". $_FILES['photo']['name'][$i];
  }

  $arr = array("result" => "success", "img" => implode('|', $rs_arr));

  // upload/1.png|upload/2.png
  die(json_encode($arr));
  // {"result" : "success", "img" : "upload/1.png|upload/2.png"}

} else {
  copy($_FILES['photo']['tmp_name'], "upload/" .$_FILES['photo']['name']);
  $arr = array("result" => "success", "img" => "upload/" .$_FILES['photo']['name']);
  die(json_encode($arr));
}
?>