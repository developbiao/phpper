<?php
/*
@Describe:调整图像的大小一半
@Author:GongBiao
@Date:2015/06/30
*/
header('Content-Type:text/html; charset=utf-8');

$ow = 594; //原图的宽度
$oh = 335; //原图的高度

$nw = (int)$ow / 2; //新图的宽度
$nh = (int)$oh / 2; //新图的高度

//创建缩略图画面
$dst = imagecreatetruecolor($nw, $nh);

//读取原始图
$src = imagecreatefromjpeg('./fly.jpg');

//复制完毕

imagecopyresampled($dst, $src, 0, 0, 0, 0, $nw, $nh, $ow, $oh);

//输出
imagepng($dst, './temp/samllfly.png');
?>
