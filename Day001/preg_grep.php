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

//preg_grep
$pattern = '/[0-9]/';
$subject = array('pd5', 'sdsdp', '983', '7dsdu', '0ddmn', 'gbc4') ;

$arr = preg_grep($pattern, $subject);

show($arr);

?>

