<?php
/*
@Description:把数组放大1倍
*/
header('Content-Type:text/html; charset=utf-8');

/*
dir name的用法
echo dirname('d:/Code/php/aa/bb/cc');
echo dirname('d:/Code/php/aa/');
exit;
*/

function mkdirtest($path){

	if(is_dir($path)){
		echo "$path已存在了<br />";
	}

	if(is_dir(dirname($path))){

		echo $path , '<br />';
		return mkdir($path);
	}

	mkdirtest(dirname($path));
		echo $path, '<br />';
		return mkdir($path); //因为有父目录，所以可以创建路径


}

mkdirtest('./a/b/c/d/e/f');

?>

