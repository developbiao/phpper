<?php
header('Content-Type:text/html; charset=utf-8');
/*
@Describe: PHP正则表达函数
*/

function show($var = null){
	if(empty($var)){
		echo 'null';
	}elseif(is_array($var) || is_object($var)){
		echo '<pre>';
		print_r($var);
		echo '</pre>';
	}else{
		//string, int float...		
		echo $var;
	}
}

//preg_match

$pattern = '/[0-9]/';
$subject = '/dafds623a99sd123/';
$replacement = '美女老师';

$str1 = preg_replace($pattern, $replacement, $subject);
$str2 = preg_filter($pattern, $replacement, $subject);

show($str1);
echo '<hr />';
show($str2);


echo '<h3>Program runing is ok!</h3>';



?>
