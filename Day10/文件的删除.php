<?php
header("content-type:text/html; charset=utf-8");
//文件的递归删除

function deldir($dirname){


	$ds = opendir($dirname);
	while($file = readdir($ds)){
		$path = $dirname. '/'. $file;
		if($file !='.' && $file != '..'){

			if(is_dir($path)){
				deldir($path);
			}else{
				unlink($path);
			}
		}
	}

	closedir($ds); //关闭资源

	return rmdir($dirname);

}

$dirname = './test1';
var_dump(deldir($dirname));
echo 'ok';
?>

