<?
/***
所有由用户直接访问的这些页面

都得先加载 init.php
***/
header('Content-Type:text/html;charset=utf-8');

require('./include/init.php');

$mysql = mysql::getIns();
/*
echo '<pre>';
print_r($mysql);
echo '<pre>';
*/

/*
我们的目的
测试框架能否正常运行
能否正常过滤非法字符
能否正常操作数据库
*/

$t1 = $_GET['t1'];
$t2 = $_GET['t2'];

/*
$sql = "INSERT INTO  test(t1, t2) VALUES('$t1', '$t2')";
var_dump($mysql->query($sql));
*/
var_dump($mysql->autoExecute('test', $_GET, 'insert'));
echo '<h3>程序已执行!</h3>';
?>