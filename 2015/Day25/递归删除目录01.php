<?php
header('Content-Type:text/html; charset=utf-8');
//递归删除目录和文件
function deldir($path){
static $count = 0;
	//不是目录，真接返回
	if(!is_dir($path)){
		return 0;
	}

	$dh = opendir($path);
	while(($row = readdir($dh)) != flase){
		if($row == '.' || $row == '..'){
			continue;
		}
		//判断是不是判断文件
		if(!is_dir($path.'/'.$row)){
			unlink($path.'/'.$row);
		}else{
			deldir($path.'/'.$row); //递归删除
		}

		if($count > 200){
			break;
		}
		$count++;
	}
	closedir($dh);
	rmdir($path);

	echo '删除了'.$path,'<br />';
	return true;
}

$path = './a';
deldir($path);
echo '<h3>程序已执行!</h3>';
?>
