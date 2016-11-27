<?php
/*
*@Describe:这个程序是把收到的POST数据，写入文本
*@Author:GongBiao
*@Date:2015/08/04
*/
header('Content-Type:text/html; charset=utf-8');

/*
分析：要用POST方法
$方法 $路径 $版本
请求行...
主体内容...
POST /0803/02.php HTTP/1.1

username-zhangsan&age=17
*/

$str = implode($_POST[], '\n');
File_put_contents('./post.txt', $str);

echo 'write ok \n';



?>