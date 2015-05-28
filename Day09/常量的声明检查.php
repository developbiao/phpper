<?php
header('Content-Type:text/html; charset=utf-8');

//声明常量
define('PI', 3.14);

echo PI,'<br />';

//检测常量
if(defined('PID')){
	echo '常量存在';
}else{
	echo 'PI常量不存在';
}

?>
