<?php
/*
========文件操作==========
*/
header('Content-Type:text/html; charset=utf-8');

$filename = 'Catch My Breath.mp3';
copy($filename, hash('md5','Catch My breath').'.mp3');  //copy文件

if(unlink($filename)){ //删除文件
	echo '<h3>文件移动成功！</h3>';

}else{
	echo '<h3>文件移动失败！</h3>';
}

?>


