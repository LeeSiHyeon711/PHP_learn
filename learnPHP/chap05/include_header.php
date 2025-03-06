<?php
$pageCount = 0;

function addCount(&$count){
    $count++;
}

addCount($pageCount);
?>
<p>이 사이트 방문은 <?=$pageCount?>번째 입니다.</p>