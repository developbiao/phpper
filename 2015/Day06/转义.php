<?php
header("Content-Type:text/html; charset=utf-8");
/*
字符串转义
在单引号中，只认识2个转义,\' => ', \\=> \
而在双引号中,认识的转义多一些，如\", \n, \t(tab制表符)等
*/
$name = "hello \"world\""; 
echo $name, '<br />';

$name = 'hello \'world\n\\';
echo $name,'<br />';


?>

