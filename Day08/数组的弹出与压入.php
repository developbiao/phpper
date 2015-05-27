<?php
header("Content-Type:text/html; charset=utf-8");

//数据案例及面题

$arr = array('a', 'b', 'c', 'd');

echo array_push($arr, 'e'),'<br />'; //往数组尾部加入单元，并返回操作后的数组长度

echo array_pop($arr),'<br />'; //e  弹出尾部单元
echo array_pop($arr),'<br />'; //d

echo array_unshift($arr, 'k'),'<br />';

echo array_shift($arr), '<br />'; //弹出头部单元
echo "<pre>";
print_r($arr);
echo "</pre>";


?>
