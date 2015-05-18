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

//pregmatch
//修正模式
$pattern = '/美女老师.+123/U';
$subject = 'I Love 美女老师__123123123123123123123';

preg_match($pattern, $subject, $matches);

show($matches);



?>


