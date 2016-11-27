<?php
/*
========文件操作==========
用文件操作函数，来批量处理客户名单
*/
header('Content-Type:text/html; charset=utf-8');

$file = './custom.txt';

/*
第一种办法以，简便快捷暴力的办法
file_get_contents获取内容
再用\r\n切成数组

注意：各操作系统下，换行符并不一致
windows: \r\n
*niux: \n
mac: \r

//下面，这个\n区分，通用性并不好
$data = file_get_contents($file);
echo '<pre>';
print_r(explode("\n", $data));
echo '</pre>';
*/

/*
第二种方法
file函数，直接读取文件内容，并行拆成数组，
返回该数组
和file_get_contents的相同之处：
和次性读入，大文件慎用
*/

$fh = fopen($file, 'rb');
while(!feof($fh)){
	echo fgets($fh),'<br />';
}

?>
