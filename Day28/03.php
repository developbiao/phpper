<?php
/*
@Description:基础的上传操作
@Author:GongBiao
@Date:2015/06/25
*/
header('Content-Type:text/html; charset=utf-8');

/*
接收文件，并分目录存储，生成随机文件名

1、根据时间戳，并按一定规则创建目录
2、获取文件后缀名
3、判断大小
*/

/*
计算并创建目录
*/

function mk_dir(){

	$dir = date('md/i', time());
	if(is_dir('./' . $dir)){
		return $dir;
	}else{
		mkdir('./'. $dir, 0777, ture);
		return $dir;
	}

}

/*
获取文件后缀
*/

function getExt($file){
	$tmp = explode('.', $file);
	return end($tmp);
}

/*
随机文件名
*/

function randName(){
	$str = 'abcdefghijkmnpqrstuvwxyz1234567890';
	return substr(str_shuffle($str), 0, 6);
}


//判断是否上传成功
if($_FILES['pic']['error'] != 0){
	echo '上传失败<br />';	
	switch($_FILES['pic']['error']){
		case 1: 
			echo '上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值。<br />';
			break;
		case 2:
			 echo '上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值。<br />';
			break;
		case 3: 
			echo '文件只有部分被上传。<br />';
			break;
		case 4: 
			echo '没有文件被上传。';
			break;

		default:;

	}

}

//处理文件过程

$pic = $_FILES['pic'];

//拼接文件路径

$path = './' . mk_dir() . '/' . randName() . '.' . getExt($pic['name']);

//移动
if(move_uploaded_file($pic['tmp_name'], $path)){
	echo '文件成功';
}else{
	echo  '上传失败';
	echo '<pre>';
	print_r($pic);
	echo '</pre>';
}

echo '<h3>程序运行结束！</h3>';




?>