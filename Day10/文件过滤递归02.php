<?php
header('Content-Type:text/html; charset=utf-8');

/*
*Description:递归输出上好中指定后缀的文件
*/
//两个缺省参数
function rdir($path=".", $typearr=array('php','png')){

	//返回指定目录的文件(子目录也是文件，一切皆文件)数组
	$files = scandir($path);

	/*
	echo '<pre>';
	print_r($files);
	echo '</pre>';
	*/

	//定义全局变量 防止递归存储时候覆盖数据
	global $arr;
	global $a;

	for($i=0;$i<count($files);$i++){

		//因为文件标识中有'.'和'..'表示路径应过滤
		if($files[$i] != "." && $files[$i] != ".."){

			$newfile = $path . DIRECTORY_SEPARATOR . $files[$i];//拼接目标文件夹的路径

			//①遍历子目录
			if(is_dir($newfile)){
				//②并递归
				rdir($newfile);
			}else{
				//取后缀,以'.'分割为数组
				$ftype = explode(".",$files[$i]);

				for($j=0;$j<count($typearr);$j++){
					//分别匹配类型数组
					//用strcasecmp不区分大小写的比较
					if(strcasecmp(end($ftype),$typearr[$j])==0){
						//array_push($arr,$files[$i]);

						//用数组下标累进形式，防止数据递归被覆盖
						$a++;
						$arr[$a]=$files[$i];

					}
				}

			}

		}

	}

	return $arr;
}

$a=rdir('.',array('php','gif'));
echo "<pre>";
//var_dump($a);
print_r($a);

/* Array
(
    [1] => class.php
    [2] => file.php
    [3] => 3.png
    [4] => 8744742f2b6eb39092a20177185ffa25.png
    [5] => ad5fcd9545814d93273868b1f8425e44.png
    [6] => c660d1c4791f82fea70a20acba4b7af3.png
    [7] => index.php
    [8] => test.php
) */

?>
