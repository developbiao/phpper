<?php
/*
*@Description:获取文件创建时间
*@Author:GongBiao
*@Date:2015/06/15
*/
header('Content-Type:text/html; charset=utf-8');
$filename = './index.php';

echo date('Y-m-d H:i:s',filectime($filename)); //输出文件创建的时间
echo '<br />';
echo '<pre>';
print_r(stat($filename));
echo '</pre>';

echo '<hr />';

echo getFileType($filename);


 /*声明一个函数，返回文件类型

   *@param string $fileName 文件名称

  */

 function getFileType($fileName)

 {

 	$type = '';

 	switch(filetype($fileName))

 	{

 		case 'file':$type .= '普通文件';break;

 		case 'dir':$type .= '目录文件';break;

 		case 'block':$type .= '块设备文件';break;

 		case 'char':$type .= '字符设备文件';break;

 		case 'filo':$type .= '管道文件';break;

 		case 'link':$type .= '符号链接';break;

 		case 'unknown':$type .= '未知文件';break;

 		default:

 	}

 	return $type;

 }

 ?>