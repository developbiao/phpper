<?php
header('Content-Type:text/html; charset=utf-8');

echo '<h3>递归文件目录</h3>';

function listdir($dirname, $level=0){
	$ds = opendir($dirname);
	while($file = readdir($ds)){
		$path = $dirname.'/'.$file;
		if($file !='.' && $file != '..'){
			if(is_dir($path)){
				echo str_repeat('&nbsp;&nbsp', $level).'|--'.$file.'<br />';
				$level++;
				listdir($path);
			}else{
				echo str_repeat('&nbsp;&nbsp;', $level),'|--'.$file.'<br />';
			}
		}
	}
}


$dirname = "../Day25";
listdir($dirname);

echo '<h3>程序运行完成!</h3>';
?>
