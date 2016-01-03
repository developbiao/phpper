<?php
header('Content-Type:text/html; charset=utf-8');
/*
笔记部分
把excel导入数据库的方法
excel->csv文件处理
*/

$file = './score.csv';
$fh = fopen($file, 'rb');
$data = array();

//echo $row = fgets($fh);
/*
while(!feof($fh)){
	$row = fgets($fh);
	array_push($data,explode(',', $row));
}

echo '<pre>';
print_r($data);
echo '</pre>';
*/

//这个函数已经封装了csv文件相关规范
while(!feof($fh)){
	$row = fgetcsv($fh);
	array_push($data, $row);	
}

echo '<pre>';
print_r($data);
echo '</pre>';


echo '<h3>程序已执行....</h3>';


?>
