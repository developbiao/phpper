<?php
header('Content-Type:text/html; charset=utf-8');
$str1 = 'yabadabadoo';
$str2 = 'yabad';

//1== 在php和JS中=! 相对==更为严格需要求数据类型一致
if(strpos($str1, $str2) !== false){
	echo "\"". $str1 . "\" contains \"" . $str2 . "\"";
}else{
	echo "\"". $str1 . "\" does not contains \"" . $str2 . "\"";
}
?>
