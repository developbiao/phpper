<?php
/*
@Describe:测试批量上传MP3文件
@Author:GongBiao
@Date:2015/11/01
*/
header('Content-Type:text/html; charset=utf-8');
require_once 'MultiUpload.php';

function getFiles(){
	$i=0;
	foreach($_FILES as $file){
		if(is_string($file['name'])){
			$files[$i]=$file;
			$i++;
		}elseif(is_array($file['name'])){
			foreach($file['name'] as $key=>$val){
				$files[$i]['name']=$file['name'][$key];
				$files[$i]['type']=$file['type'][$key];
				$files[$i]['tmp_name']=$file['tmp_name'][$key];
				$files[$i]['error']=$file['error'][$key];
				$files[$i]['size']=$file['size'][$key];
				$i++;
			}
		}
	}
	return $files;
	
}


//获取所有文件信息
$files = getFiles();
$path = './media';
$flag = false;
$maxSize = 31457280;  //30MB
$allowExt = array('mp3', 'ogg', 'mp4');


//开始上传
foreach($files as $file)
{
	$multi = new MultiUpload($file, $path, $flag, $maxSize, $allowExt);
	$res = $multi->uploadFile();
	echo $res['msg'],'<br />';
	$uploadFiles[] = $res['dest'];

	//存储到数据库
}

$uploadFiles = array_values(array_filter($uploadFiles));

echo '<pre>';
print_r($uploadFiles);
echo '</pre>';

echo '<h3>程序已执行！</h3>';
?>