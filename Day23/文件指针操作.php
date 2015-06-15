<?php
/*
*@Description:文件的指针操作
*@Author:GongBiao
*@Date:2015/06/15
*/
header('Content-Type:text/html; charset=utf-8');
$filename = "b.txt";
$fs = fopen($filename, "r+");
fwrite($fs, "123");
rewind($fs); //把指针放到开头
$str = fread($fs, 100); //读取100个字节
echo $str,'<br />';
echo '当前指针位置:',ftell($fs),'<br />'; 
fseek($fs, 77);
echo '当前指针位置:',ftell($fs),'<br />'; 

fclose($fs);
?>
