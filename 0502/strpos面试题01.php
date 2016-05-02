<?php
header('Content-Type:text/html; charset=utf-8');
$str1 = 'yabadabadoo';
$str2 = 'yabad';
if(strpos($str1, $str2)){
	echo "\"". $str1 . "\" contains \"" . $str2 . "\"";
}else{
	echo "\"". $str1 . "\" does not contains \"" . $str2 . "\"";
}
?>
