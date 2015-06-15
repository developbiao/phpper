<?php
/*
========文件操作==========
判断 文件是否存在
*/
header('Content-Type:text/html; charset=utf-8');

$file = './custom.txt';
$fileowner;
$filedir = './include';

if(file_exists($file)){
	echo $file,'文件存在！<br />';
	echo '上次修改时间是',date('Y-m-d H:i:s',filemtime($file)),'<br />';
	echo '文件的owner是:',fileowner($file);
}else{
	echo $file,'文件不存在! <br />';
}

if(is_dir($filedir)){
	echo '文件夹!';
}


?>


