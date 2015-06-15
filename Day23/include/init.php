<?php
/*
file init.php
作用：框架初始化
*/

//初始化当前绝对路径
//换成下斜线是因为win/linux都支持正斜线
define('ROOT',str_replace('\\', '/', dirname(dirname(__FILE__))).'/');

//定义调试模式
define('DEBUG', true);


require(ROOT.'include/db.class.php');
require(ROOT.'include/conf.class.php');

//过虑参数，用递归的试过虑$_GET,$POST,$COOKIE

//设置报错级别

if(defined('DEBUG')){
	error_reporting(E_ALL);
}else{
	error_reporting(0);
}


?>