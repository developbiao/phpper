<?php
/*
Description: PHP正则表达式函数
*@name:show
*@description: output debug
*@param $var : input data
*@return void
*/

$pattern = '/[0-9]/';
$subject = 'ada3ad7sdlfp5as8sd9';

$m1 = $m2 = array();

$t1 = preg_match($pattern, $subject, $m1);
$t2 = preg_match_all($pattern, $subject, $m2);

show($m1);
echo "<hr />";
show($m2);
echo "<hr />";

show($t1.'||'.$t2);



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

