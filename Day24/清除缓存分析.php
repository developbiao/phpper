<?php
/***
@Description:日志缓冲问题解决分析
@Author:GongBiao
@Date:2015/06/16
***/
header('Content-Type:text/html; charset=utf-8');

for($file='./a.txt', $i=0; $i<100; $i++){
	clearstatcache(); //清除缓存
	echo filesize($file),'<br />';
	$fh = fopen($file, 'ab');
	fwrite($fh, $i."\r\n");
	fclose($fh);
}


echo '<h3>程序执行完毕!</h3>';


?>
