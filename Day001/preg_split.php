<?php
header("Content-Type:text/html; charset=utf-8");
/*
Description: PHP正则表达式函数
*@name:show
*@description: output debug
*@param $var : input data
*@return void
*/

function show($var = null){
	if(empty($var))	{
		echo 'null';
	}elseif(is_array($var) || is_object($var)){
		echo '<pre>';
		print_r($var);
		echo '</pre>';
	}else{
		echo $var;
	}
}

//preg_split  与字符串的explode有点相像;
$pattern = '/[0-9]/';
$subject = '美3女2老师4,7约吗?';

$arr = preg_split($pattern, $subject);

show($arr);

?>


