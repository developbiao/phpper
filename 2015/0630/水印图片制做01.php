<?php
/*
@Describe:透明度复制
@Author:GongBiao
@Date:2015/06/30
*/
header('Content-Type:text/html; charset=utf-8');

/*
透明透复制
550, 375 
225, 187
*/

//读取大图
$dst = imagecreatefromjpeg('./motox.jpg');

//读取小图

$src = imagecreatefrompng('./fly.png');

imagealphablending($src,true);
imagealphablending($dst, ture);

//制作水印图片
//参数：$dst目标画布，$src 源画布, 目标x， 目标y,  开始复制x点, 开始复制y点, 源图width, 源图height, 透明度
imagecopymerge($dst, $src, 300, 100, 0, 0, 225, 187, 30); //9个参数

echo imagejpeg($dst, './temp/moto_ad.jpg')?'OK':'FAIL';


?>

