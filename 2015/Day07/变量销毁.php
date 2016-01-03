<?php
header('Content-Type:text/html; charset=utf-8');

$li = 29;
$wang = &$li;

var_dump($li, $wang); //29, 29

$wang = 20;
var_dump($li, $wang);// 20, 20

unset($li);   //变量的销毁

var_dump($li, $wang);//null , 20


?>
