<?php
/***
有一堆小文件
a.txt
b.txt
c.txt

批量处理文件内容
把小于10字节的文件，和令有fuck的文件删除掉

思路:
循环文件名
判断大小 filesize 如果<10， 删掉
如果不小于，读取内容，判断是否有fuck单词
如果有,用unlink来删除
***/
header('Content-Type:text/html; charset=utf-8');


foreach(array('a.txt','b.txt','c.txt','d.txt') as $value){
	//判断大小
	$file = './article/'.$value;
	if(filesize($file) < 10){
		unlink($file);
		echo $file,'小于10字节已删除!<br />';

		continue;
	}

	//大于10字节,就判断内容
	$content = file_get_contents($file);
	if(stripos($content, 'fuck') !== false){
		unlink($file);
		echo $file,'有不文明用语，被删除了<br />';
	}
}


echo '<h3>程度执行完毕!</h3>';


?>

