<?php
header("Content-Type:text/html; charset=utf-8");
$var = 33;
function test(){
	global $var; //声明它有全局变量
	echo $var;

}

test();
?>
