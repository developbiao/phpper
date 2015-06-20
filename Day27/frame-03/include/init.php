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


require(ROOT.'include/db.class.php'); // 导入数据库操作类
require(ROOT.'include/mysql.class.php'); //导入mysql数据库操作类
require(ROOT.'include/conf.class.php'); //导入参数类
require(ROOT.'include/log.class.php'); //导入日志类
require(ROOT.'include/lib_base.php'); //导入数据转义

//过虑参数，用递归的试过虑$_GET,$POST,$COOKIE
$_GET = _addslashes($_GET);
$_POST = _addslashes($_POST);
$_COOKIE = _addslashes($_COOKIE);

//设置报错级别

if(defined('DEBUG')){
	error_reporting(E_ALL);
}else{
	error_reporting(0);
}


?>