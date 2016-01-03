<?php
header("Content-Type:text/html; charset=utf-8");

//自动加载
//__autoload的用法
function __autoload($c) {
    echo '我先自动加载';
    echo './' . $c . '.php';
    echo '<br />';
    require('./' . $c . '.php');
}

$p = new PigModel();
$p->shout();



?>
