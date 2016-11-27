<?php
/*
在PHP中，服务器设置cookie用，setcookie()函数

在PHP中，读取cookie，不用特殊的方法，
、因为cookie的信息已经被 PHP处理到$_COOKIE这个超全局数据里面了

*/
setcookie('username', 'lisi');
echo '<h3>设置Cookie</h3>';
?>