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

//preg_split函数其实就是升级版的explode函数
$pattern = '/[0-9]/';
$subject = '美1女3老4师,3约5吗9?';

$array = preg_split($pattern, $subject);
show($array);

echo '<h3>Program runing is ok!</h3>';

?>

