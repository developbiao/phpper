<?php
header('Content-Type:text/html; charset=utf-8');
$chang = 'HEI';

echo $chang,'<br />'; //HEi

//echo constant('HEI'),'<br />';

echo constant($chang),'<br />';

//用户变名定义常量
define($chang, 'hello moto');

echo HEI;
?>
