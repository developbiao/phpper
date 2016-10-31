<?php
header('Content-Type:text/html; charset=utf-8');
$fp = fopen('./02.txt', 'a'); //追加的方式打开02.txt
fwrite($fp, "php1031\n"); //给文件写内容
fclose($fp);

echo "write succefull!";

?>