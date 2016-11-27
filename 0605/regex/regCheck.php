<?php

require_once 'regexTool.class.php';

$regex = new regexTool();
if(!$regex->noEmpty($_POST['username'])) exit('用户名是必须填写的！');
if(!$regex->isEmail($_POST['email'])) exit('email格式错误!');
if(!$regex->isMobile($_POST['mobile'])) exit('手机号格式错误!');

//数据库写入

/*
 * @name : show
 * @description : output debug
 * @param $var : input data
 * @return void
 */
function show($var = null, $isdump = false) {
	$func = $isdump ? 'var_dump' : 'print_r';
	if(empty($var)) {
		echo 'null';
	} elseif(is_array($var) || is_object($var)) {
		//array,object
		echo '<pre>';
		$func($var);
		echo '</pre>';
	} else {
		//string,int,float...
		$func($var);
	}
}