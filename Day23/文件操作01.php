<?php
/*
========文件操作==========
fopen();
fread();
fwrite();
fclose();

*/
header('Content-Type:text/html; charset=utf-8');



$file = './sohunew.txt';

$fh = fopen($file, 'r');

//沿着上面返回的$fh这个资源通道来读取文件
echo fread($fh, 100);

//关闭文件流
fclose($fh);
echo '<br />';

/*
r+ 读写模式，并把指针批向文件头
覆盖写
$fh = fopen($file, 'r+');
var_dump(fwrite($fh, 'hello moto'));
*/

$fh= fopen('readme01.txt', 'w');

echo fwrite($fh, '蓝蓝的天，白白的云...')? 'OK':'Faild';



?>
