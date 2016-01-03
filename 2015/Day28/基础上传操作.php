<?php
header('Content-Type:text/html; charset=utf-8');

$pic = $_FILES['pic'];

echo '<pre>';
print_r($pic);
echo '</pre>';

if(move_uploaded_file($pic['tmp_name'], './files/'.$pic['name'])){
	echo '上传成功！';
}else{
	echo '上传失败:';
}

?>
