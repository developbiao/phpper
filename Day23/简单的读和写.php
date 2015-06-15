<?php
/*
========文件的读取与写入==========
*/
header('Content-Type:text/html; charset=utf-8');


//要求把a.txt的内容读出来，赋给变量$str

/*
file_get_contents()可以获取一个文件的内容或一个网络资源的内容
注意：小心，这个函数一次性把文件内容全部读出来，放在内存里面
因些，工作中，处理上百M的文件，慎用些函数

注:file_get_contensts要获取的文件不存在，报warning
*/

/*
$file = './a.txt';
$str = file_get_contents($file);
echo $str;

echo '-------读取网络资源------<br />';

$url = 'https://github.com/developbiao/phpper'; //读https有问题
$url = 'http://www.so.com';
echo file_get_contents($url); 
*/


//读取取来的内容写到一个文件中
/*
$str = "hello \nmoto";
file_put_contents('./b.txt', $str);
*/

/*
最简单的小偷程序
*/

$url = 'http://pic.news.sohu.com/group-663128.shtml#0';
$html = file_get_contents($url);

if(file_put_contents('sohunew.txt',$html)){
	echo '东西拿到了!<br />';
}else{
	echo '失败咯~~~';	
}




?>
