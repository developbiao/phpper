<?php
/***
文件目录操作
***/
header('Content-Type:text/html; charset=utf-8');

$path = './include';
$fh =opendir($path);

/*
.
.. 是虚拟目录，分另代表 当前目录和上一级目录
*/

while($filename = readdir($fh)){
	echo $filename,'<br />';
	if(is_dir($filename)){
		echo '是目录<br />';
	}
}


echo '<h3>程序执行完毕!</h3>';


?>

