<?php
/*
@Description:把变量写到文件中
@Author:GongBiao
@Date:2015/06/18
*/
header('Content-Type:text/html; charset=utf-8');

//设置cookie
setcookie("username", "gongbiao", time()+3600, "/");
setcookie("passwd", "123423423sd", time()+3600, "/");
setcookie("like", "美女老师", time()+3600, "/");

setcookie("like", "更多美女", time()-3600, "/");
echo '<pre>';
print_r($_COOKIE);
echo '</pre>';

echo '<h3>程序运行完成!</h3>';
?>
