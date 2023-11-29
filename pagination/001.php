<?php

$total = 312; //게시물 총 갯수

$limit = 10; // 한 화면 출력 갯수 0~9, 10~19

// 출력 페이지수 << 1 2 3 4 5 >>

$page_limit = 5;

$data = range(1, $total); //게시물 range(배열에 숫자넣기가능)

$page = isset($_GET['page']) && $_GET['page'] != '' && is_numeric($_GET['page']) ? $_GET['page'] : 1;

$start = ($page - 1) * $limit;

for($i = $start; $i < ($start + $limit); $i++) {
  if(isset($data[$i])) {
    echo $data[$i] ."번 게시글 <br>";
  }
}

$total_page = ceil($total / $limit); // 총 페이지 수

$start_page =((floor(($page - 1) / $page_limit ) )* $page_limit) + 1;
$end_page = $start_page + $page_limit - 1;
if($end_page > $total_page) {
  $end_page = $total_page;
}

echo "<a href='001.php?page=1'>First</a> ";

$prev_page = $start_page - 1 ;
if($prev_page > 1) {
  echo "<a href='001.php?page=".$prev_page."'>Prev</a> ";
}


for($i = $start_page; $i <= $end_page; $i++) {
  if($page == $i) {
    echo $i . " ";
  } else {
    echo "<a href='001.php?page=". $i. "'>".$i."</a> ";
  }
}

$next_page = $end_page + 1;

if($next_page <= $total_page) {
  echo "<a href='001.php?page=". $next_page. "'>Next</a> ";
}

echo "<a href='001.php?page=". $total_page."'>Last</a>";

// 1 1~5
// 2 1~5
// 3 1~5
// 4 1~5
// 5 1~5
// 6 6~10
// 7 6~10
// 8 6~10
// 9 6~10
// 10 6~10
// 11 11~15

?>