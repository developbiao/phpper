<?php
/***
简历的列出文件
***/
header('Content-Type:text/html; charset=gb2312');

echo '<pre>';
print_r(glob('./*.php')); //当前目录列出*.php文件
echo '</pre>';



echo '<h3>程序执行完毕!</h3>';


?>

