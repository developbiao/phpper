<?php
header("content-type:text/html; charset=utf-8");
//文件的递归复制
$srcdir = 'test1';
$dstdir = 'test2';

function copydir($srcdir, $dstdir){
	mkdir($dstdir);
	$ds = opendir($srcdir);

	while($file = readdir($ds)){
		if($file!= '.' && $file!='..'){
			$path = $srcdir.'/'.$file;
			$dstpath = $dstdir.'/'.$file;
			if(is_dir($path)){
				copydir($path, $dstpath);
			}else{
				copy($path, $dstpath);
			}
		}
	}

}

copydir($srcdir, $dstdir);
echo 'ok';
?>

