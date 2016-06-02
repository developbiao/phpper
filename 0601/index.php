<?php
header('Content-Type:text/html; charset=utf-8');

//调试输出打印函数
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

//贪婪模式和懒惰模式
// '/x' 忽略空格

$pattern = '/imooc.+123/s';
$subject = 'I love imooc__123123
123123123123';

preg_match($pattern, $subject, $matches);

show($matches);


?>