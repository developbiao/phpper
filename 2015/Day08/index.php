<?php
header("Content-Type:text/html; charset=utf-8");

//字符串的练习
//将1234567890转换成1,234,567,890 每3位用逗号隔开的形式。
$str = 1234567890;

$str = c1($str);
function c1($str){

	$str = strrev($str);
	$arr = str_split($str, 3);
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
	$str = strrev(implode($arr, ','));

	return $str;
}

echo $str;



?>