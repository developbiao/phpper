<?php
header('Content-Type:text/html; charset=utf-8');
echo '<h3>GD库</h3>';
$width = 300;
$height = 200;

//1：创建画布 
$im = imagecreatetruecolor($width, $height);

//2:准备颜料
$red = imagecolorallocate($im, 255, 0, 0);


//3:填充画面
imagefill($im , 0, 0, $red);

//4:保存不同图片格式

imagepng($im, './01.png');


//5:销毁画布
imagedestroy($im);
echo '<pre>';
print_r($im);
echo '<pre>';
?>
