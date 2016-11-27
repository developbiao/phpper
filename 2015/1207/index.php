<?php
header('Content-Type:text/html; charset=utf-8');
$val = '123.33';
echo gettype($val);
echo '<br />';

$num = (int)$val; //C语言分格转换
echo gettype($num);
echo '<br />';

$str = '19930403';
$num = intval($str, 16);

echo $num;

echo '<h3>Program excute!</h3>';
?>