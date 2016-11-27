<?php
header('Content-Type:text/html; charset=utf-8');

function printdir($n){
	//判断文件名是否是目录，如果是则打开目录
	if(is_dir($n)){
		$dh = opendir($n);
	}

	//读取目录,while循环展示
	while(($row = readdir($dh)) !== false){

		if($row == '.' || $row == '..'){
			continue;
		}
		echo  $row,'<br />';

		//如果下一目录还有目录，则调用函数自身，检查->打开->读取->循环输出->过虑'.'和'..'
		
		if(is_dir(($path=$n.'/'.$row))){
				printdir($n.'/'.$row);
		}
		
	}

	//关闭目录，节省资源
	closedir($dh);
}

$n = '.';
printdir($n);
echo '<h3>OK!</h3>';

?>
