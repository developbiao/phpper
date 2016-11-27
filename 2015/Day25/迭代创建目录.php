<?php
/*
@Description:理论上(借助栈)栈递归都是可以转化为迭代的
*/
header('Content-Type:text/html; charset=utf-8');

//迭代来创建级联目录./a/b/c/d

//思路:要从浅到深创建目录的步骤，列成单子
//然后1只小猴子，一层层的去创建
function mk_dir($path){
	$arr = array();

	while(!is_dir($path)){
		//例 /a/b/c/d如果不是目录，则是的工作
		array_push($arr, $path);
		$path = dirname($path);
	}

	if(empty($arr)){
		return true;
	}

	//工作计划出栈
	while(count($arr)){
		echo $tmp = array_pop($arr),'出栈<br />';
		mkdir($tmp);
		return true;
	}
}
mk_dir('./a/b/c/d');
echo '<h3>程序已执行!</h3>';
?>
