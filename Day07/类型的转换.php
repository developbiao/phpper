<?php
header('Content-Type:text/html; charset=utf-8');

//字符串的数据
$a = '123';
$a = $a + 3;

//数据转字符串
$a = 123;
$a = $a.'hello';

//到布尔型的判断，以下值，都被当成布尔的假，而其它值，都被当成布尔类型的真
//'', '0', 0, 0.0, false, NULL,array();

if(NULL == false){
	echo 'NULL过然假';
}




?>
