<?php
/*
@Describe:用户退出
@Author:GongBiao
@Date:2015/07/03
*/
header('Content-Type:text/html; charset=utf-8');

define('ACC', true);
require('./include/init.php');

session_start();
session_unset();
session_destroy();

$msg = '退出成功!';

include(ROOT . 'view/front/msg.html');

?>