<?php
/***
@Description:删除文件夹
@Author:GongBiao
@Date:2015/06/16
***/
header('Content-Type:text/html; charset=utf-8');


$path = './misc/';
foreach(array('aaa', 'bbbb', 'cccc') as $value){
	$dirname = $path.$value;

	if(file_exists($dirname)){
		if(rmdir($dirname)){
			echo '删除文件夹',$dirname,'成功!<br />';
		}else{
			echo '删除文件夹失败!<br />';
		}
	}else{
		echo '<h3>文件不存在或文件夹是非空目录</h3>'; //非空目录需要靠先删除文件再删除目录
		continue;
	}
}


echo '<h3>程序执行完毕!</h3>';


?>
