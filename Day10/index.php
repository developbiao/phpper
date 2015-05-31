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

//用php递归和迭代创建级联目录

function mkdirtest1($path){

	if(is_dir($path)){
		return true;
	}
	if(is_dir(dirname($path))){
		return mkdir($path);
	}
	mkdirtest(dirname($path));
		echo "$path<br />";
		return mkdir($path);
	




}

//迭代的方式创建目录

function mkdirtest2($path){

	$arr = array();
	while(!is_dir($path)){

		array_push($arr, $path); 
		echo '<pre>';
		print_r($arr);
		echo '</pre>';
		$path = dirname($path);


	}
	if(empty($arr)){
			
		echo $path, '已存在';
		return true;
	}

	while(count($arr)){
		$parentdir = array_pop($arr); //弹出最后一个数组单元
		mkdir($parentdir);
		echo '创建'.$parentdir.'成功<br />';
	}

}

//mkdirtest1('./a/b/c/d/e/f');

mkdirtest2('./a/b/123/567/8910');



?>
