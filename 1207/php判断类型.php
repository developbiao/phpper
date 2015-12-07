<?php
header('Content-Type:text/html; charset=utf-8');

$a  = 7;
if(is_integer($a)) //judgm integer
	echo 'this is interger<br />';

$a = 7.33;
if(is_double($a)) //judgm is double
	echo 'this double<br />';

$a = 'hello';
if(is_string($a))
	echo 'this is string<br />';

$a = [7, 8, 9];
if(is_array($a))
	echo 'this is array<br />';

$a = 833;
if(is_scalar($a)) //是不是标量
	echo 'this is scalar<br />';

$a = 9.333;
if(is_numeric($a))
	echo 'this is numeric<br />';


echo getType(true); //获取类型


echo '<h3>Program excute!</h3>';
?>
