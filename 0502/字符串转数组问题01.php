<?php
header('Content-Type:text/html; charset=utf-8');
$x = NULL;
if('0xFF' == 255){
	$x = (int)'0xFF';
}
echo $x, '<br />'; //0
echo '<h3>Program runing is ok!</h3>';
?>
