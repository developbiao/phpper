<?php
header('Content-Type:text/html; charset=utf-8');
//查看上传文件信息
echo '<pre>';
print_r($_FILES);
echo '</pre>';

//将服务器上的临时文件夹移动指定目录下
$file_name = $_FILES['myfile']['name'];
$temp_name = $_FILES['myfile']['tmp_name'];
//move 移动文件第一种方式move_uploaded_file($tmp_name, $destination)
move_uploaded_file($temp_name, 'uploads/'.$file_name);

?>