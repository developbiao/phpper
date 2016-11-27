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


//preg-quote 帮我们转义正则表达式的运算符
$str = 'qwer{abcdef}[1234]';
$str = preg_quote($str);
show($str);


?>
