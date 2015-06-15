<?php
/*
========文件操作==========
*/
header('Content-Type:text/html; charset=utf-8');

$filename = "abc.txt";
//w 模式下面是读不到的
$fs = fopen($filename, "w+");// w +很猛清除写
fwrite($fs, "123");
//rewind($fs);
$str = fread($fs, 10);
echo $str;
echo "<br/>";
echo "指针现在的位置是:". ftell($fs);
rewind($fs);
echo "<br/>";
echo "指针现在的位置是:". ftell($fs);
fclose($fs);
echo "<br/>";
echo "程序已执行！";
?>