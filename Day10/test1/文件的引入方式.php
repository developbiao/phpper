<?php
header('Content-Type:text/html; charset=utf-8');
include('./sub_hello.php');
/*
include_once('./sub_add.php'); //inclue_once不重复引用
include_once('./sub_add.php');
include_once('./sub_add.php');
include_once('./sub_add.php');
include_once('./sub_add.php');
include_once('./sub_add.php');
include_once('./sub_add.php');
*/

require('./sub_test1.php');   //require更严格一些

//test(); //如果引用了没有找文件的函数方法会发生严重致命错误
echo '一样的跑';
echo '<br />';

Say();
?>
