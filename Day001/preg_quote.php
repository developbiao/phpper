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

//preg_quote($str);
/*
.\+*?[^]$()=!<>|:-
*/
//正则运算符转义

$str = 'adasdkl{pppdd}[0323]';
$str = preg_quote($str);  //对字符串转义

show($str);



?>

