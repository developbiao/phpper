<?php
//用户列表业
require('./include/init.php');
$test = new TestModel();
$list = $test->select();

/*
echo '<pre>';
print_r($list);
echo '</pre>';
*/
require('./view/userlist.html'); //显示用户列表

echo '<h3>程序运行完成</h3>';
?>