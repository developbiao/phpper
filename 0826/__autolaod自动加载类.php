<?php
/*
auto_load自动加载测试
*/
header('Content-Type:text/html; charset=utf-8');

//自动加载
//__autolaod的用法

function __autoload($c){
	echo '我先自动加载';
	echo './'.$c.'.php<br />';
	require_once('./'.$c.'.php');
}

$p = new PigModel();
$p->shout();


echo '<h3>Program runing is ok!</h3>';

?>
