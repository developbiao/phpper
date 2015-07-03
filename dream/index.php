<?php
/*
@Describe:首页
@Author:GongBiao
@Date:2015/07/03
*/
header('Content-Type:text/html; charset=utf-8');

define('ACC', true);
require('./include/init.php');

session_start();
include(ROOT . 'view/front/index.html');
?>