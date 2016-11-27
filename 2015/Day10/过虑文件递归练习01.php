<?php
header('Content-Type:text/html; charset=utf-8');
header('Content-Type:text/html; charset=utf-8');

/*
*Description:递归输出上好中指定后缀的文件
*/


//两个缺省参数
function rdir($path='.',  $typearr=array('php', 'png')){
	//返回指定目录的文件(子目录也是文件，一切皆文件)数组
	$files = scandir($path);

	//var_dump($files);
	for($i=0; $i<count($files); $i++){
		//因为文件标识中有‘.’和'..'表示路径应过滤
		if($files[$i] != '.' && $files[$i] != '..'){
			$newfile = $path . DIRECTORY_SEPARATOR. $files[$i];

			//遍历目录
			if(is_dir($newfile)){
				rdir($newfile);
			}
		}else{
			//取后缀，以'.'分割数组
			$ftype = explode('.', $files[$i]);

			for($j=0; $j<count($typearr); $j++){
				//分别匹配类型数组
				if(strcasecmp(end($ftype), $typearr[$j])==0){
					echo $files[$i].'<br />';
				}
			}

		}
	}
}


rdir('.', $typearr=array('php'));

?>
