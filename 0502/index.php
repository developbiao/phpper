<?php
header('Content-Type:text/html; charset=utf-8');
//echo hexdec('0xFF'); //255
$x = NULL;
if('0xFF' == 255){
	//$x = (int)'0xFF'结果只会是零
	$x = hexdec('0xFF');
}
echo $x, '<br />'; //255
echo '<h3>Program runing is ok!</h3>';
?>
