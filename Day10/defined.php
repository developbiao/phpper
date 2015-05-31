<?php
header('Content-Type:text/html; charset=utf-8');
define('PI', 3.1415926);

/*
if(defined('PI')){
	echo 'Y';
}else{
	echo 'N';
}

*/

//检查到没有定义就定义
if(!defined('HIE')){
	define('HIE', 788.23);
}
echo HIE;
?>
