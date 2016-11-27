<?php
/*
@Describe:复习GD库画图rectangle ellipse
@Author:GongBiao
@Date:2015/06/29
*/
header('Content-Type:text/html; charset=utf-8');

/*
思路：
画饼图
其实就是画圆弧并并填充
*/

//准备画布
$im = imagecreatetruecolor(800, 600);

//准备颜料

$gray = imagecolorallocate($im, 200, 200, 200);
$blue = imagecolorallocate($im, 0, 0, 255);
$red = imagecolorallocate($im, 255, 0, 0);

//echo IMG_ARC_CHORD,IMG_ARC_PIE,IMG_ARC_EDGED,IMG_ARC_NOFILL; 1042


//填充

imagefill($im, 0, 0, $gray);

//画一段圆弧并填充
/*
参数为:画布、圆心x值、圆心y值,宽、高起始角度，结束角度，颜色，填充方式

填充方式：
1 IMG_ARC_CHORD  直线边圆弧2端
0 IMG_ARC_PIE     弧线边圆弧2端
2 IMG_ARC_EDGED  指明用直线将起始点与结束点中心点相连
4 IMG_ARC_NOFILL 不填充轮廓（默认是填充的）
*/

imagefilledarc($im, 400, 300, 300, 300, 270, 0, $blue, 1+2 + 4); //画一个三角形

imagefilledarc($im, 50, 400, 310, 310, 0, 45, $blue, 0 + 4); //画一个填充的弧形 

imagefilledarc($im, 70, 200, 250, 250, 0, 90, $red,  1);


//输出
header('Content-Type:image/jpeg');
imagejpeg($im);

//销毁画布
imagedestroy($im);




?>