<?php

// 2차원배열(다차원배열)

// asort();
// 값에 따라 오름차순 정렬
// ksort();
// 키에 따라 오름차순 장렬
// arsort(); 
// 값에 따라 내림차순 정렬(가나다 역순)
// krsort()
// 키에 따라 내림차순 정렬(가나다 역순)

// 수퍼전역 $GLOBALS


$cars = array(
  array("볼보", 22, 10),
  array("산타페", 25, 4),
  array("아우디", 12, 11),
);

echo '<table border="1">
<tr>
<th>차종</th>
<th>재고량</th>
<th>판매량</th>
</tr>
';

for($row = 0; $row <3; $row++){
  echo "<tr>";
  for($col = 0; $col <3 ; $col++){
    echo "<td>".$cars[$row][$col]."</td>";
  }

  echo "</tr>";
}


?>