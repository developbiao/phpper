<?php
/*
@Description:文件目录的复制
@Author:GongBiao
@Date:2015/06/18
*/
header('Content-Type:text/html; charset=utf-8');

$srcdir = "test1";
$dstdir = "test2";

function copydir($srcdir, $dstdir){
	if(!file_exists($dstdir)){
	mkdir($dstdir);
}
	$ds = opendir($srcdir);
	while($file = readdir($ds)){
		$path = $srcdir.'/'.$file;
		$dstpath = $dstdir.'/'.$file;

		if($file != '.' && $file != '..'){
			if(is_dir($path)){
				copydir($path, $dstpath);
			}else{
				copy($path, $dstpath);
			}
		}
	}

	closedir($ds); //关闭目录资源

}

copydir($srcdir, $dstdir);
echo '<h3>程序运行完成!</h3>';
?>
