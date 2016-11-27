<?php
/*
Description: PHP正则表达式函数
*@name:show
*@description: output debug
*@param $var : input data
*@return void
*/

function show($var = null){
	if(empty($var)){
		echo 'null';
	}elseif(is_array($var) || is_object($var)){
		//array,object
		echo '<pre>';
		print_r($var);
		echo '</pre>';
	}else{
		//string , int float
		echo $var;
	}
}
?>