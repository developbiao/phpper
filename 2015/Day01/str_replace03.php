<?php
header("Content-Type:text/html; charset=utf-8");
/*
Description: PHP正则表达式函数
*@name:show
*@description: output debug
*@param $var : input data
*@return void
*/

$pattern = array('/[0123]/', '/[456]/', '/[789]/');
$subject = 'ada3ad7sdlfp5as8sd9abd0ldd3aadn1sdsd2';
$replacement = array('美', '女', '老', '师');

$str1 = preg_replace($pattern, $replacement, $subject);
show($str1);
echo "<hr />";
//show($str2);


//print show
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

