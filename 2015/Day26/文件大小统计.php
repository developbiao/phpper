<?php
/*
@Description:文件目录的统计
@Author:GongBiao
@Date:2015/06/18
*/
header('Content-Type:text/html; charset=utf-8');

function totdir($dirname){
	static $tot;
	$ds = opendir($dirname);
	while($file = readdir($ds)){
		$path = $dirname.'/'.$file;
		if($file != '.' && $file != '..'){
			if(is_dir($path)){
				totdir($path);
			}
		}else{
			$tot += filesize($file);
		}
	}

	//返回总计大小
	return $tot / 1024;

}

$dirname = 'D:/Code';
echo totdir($dirname), 'MB<br />';
echo '<h3>程序运行完成!</h3>';
?>
