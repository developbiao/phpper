<?php
header("Content-Type:text/html; charset=utf-8");

//字符串的练习
$str = 'fuck you!';
$str = 'Oh, shit!';
$arr = array('fuck', 'shit', 'betch');

$str = str_replace($arr, '***', $str);

//一批字符串
$str = '男人, 女人, 男孩，女孩';
$str = strtr($str, array('男'=>'女', '女'=>'男'));


//截取子字符串
$str = 'tommrow is another day <br />';
echo $str;
//Example 01
echo substr($str, 0, 6),'<br />';

//Example 02
echo substr($str, 3, -3),'<br />';


//Example 03
echo substr($str, -10, -3),'<br />';



?>
