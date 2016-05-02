<?php
header('Content-Type:text/html; charset=utf-8');
//x 应该输出什么?
$x = true and false;
var_dump($x);  //true 因为 '='号优先级会比and高

echo '<h3>Program runing is ok!</h3>';
?>
