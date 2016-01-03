<?php
header("content-type:text/html; charset=utf-8");
//文件的递归移动

function movedir($srcdir, $dstdir){
	if(file_exists($srcdir)){
	mkdir($dstdir);
	$ds = opendir($srcdir);

	while($file = readdir($ds)){
		$path = $srcdir.'/'.$file;
		$dstpath = $dstdir.'/'.$file;
		if($file !='.' && $file != '..'){

			if(is_dir($path)){
				movedir($path, $dstpath);
			}else{
				copy($path, $dstpath);
				unlink($path);

			}

		}

	}
}else{
	echo '<h3 style="color:red">文件目录不存在哦！</h3>';
}

	closedir($ds);
	return rmdir($srcdir);

}

$srcdir = 'test3';
$dstdir = 'test1';

var_dump(movedir($srcdir, $dstdir));

echo 'ok';
?>

