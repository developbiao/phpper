<?
/***
所有由用户直接访问的这些页面

都得先加载 init.php
***/
header('Content-Type:text/html;charset=utf-8');

require('./include/init.php');

echo '<pre>';
print_r($_GET);
echo '</pre>';
echo '<h3>程序已执行!</h3>';
?>