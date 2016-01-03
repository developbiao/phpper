<?php
/***
@Description:创建文件夹
@Author:GongBiao
@Date:2015/06/16
***/
header('Content-Type:text/html; charset=utf-8');


$path = './misc/';
foreach(array('aaa', 'bbbb', 'cccc') as $value){
	$dirname = $path.$value;

	if(file_exists($dirname)){
		echo '文件已存在<br />';	
		continue;
	}	
	if(mkdir($dirname)){
		echo '文件夹创建成功!<br />';
	}else{
		echo '文件夹创建失败!<br />';
	}
}


echo '<h3>程序执行完毕!</h3>';


?>
