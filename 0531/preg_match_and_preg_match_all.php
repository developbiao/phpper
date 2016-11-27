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
$m1 = $m2 = array();

$t1 = preg_match($pattern, $subject, $m1); //只匹配一次
$t2 = preg_match_all($pattern, $subject, $m2); //匹配多次

show($m1);
echo '<hr />';
show($m2);
show($t1.'||'.$t2);

echo '<h3>Program runing is ok!</h3>';



?>
