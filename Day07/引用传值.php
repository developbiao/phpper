<?php
header('Content-Type:text/html; charset=utf-8');

//引用传值

$li = 22;

$wang = &$li;

var_dump($li, $wang);

$wang = 'nima';

var_dump($li);



?>
