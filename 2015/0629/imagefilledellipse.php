<?php
/*
@Describe:复习GD库画图rectangle ellipse
@Author:GongBiao
@Date:2015/06/29
*/
header('Content-Type:text/html; charset=utf-8');

/*
思路：
画复杂图形，并填充

有矩形
椭圆
圆弧(统计时的饼状图，要用到)
*/

//1、创建画布
$im = imagecreatetruecolor(800, 600);

//2、颜料
$gray = imagecolorallocate($im ,200, 200, 200);
$blue = imagecolorallocate($im, 0, 0, 255);
$red = imagecolorallocate($im, 255, 0, 0);

//3、填充
imagefill($im, 0, 0, $gray);

//4、画一个矩形rectangle rectangle rectangle rectangle
imagerectangle($im, 200, 150, 600, 450, $blue);



//画椭圆ellipse
//参数:画布资源，圆心x坐标、圆心y坐标、宽、高、颜色
imagefilledellipse($im, 400, 300, 400, 300, $red );
imagefilledellipse($im, 400, 300, 300, 300, $blue);
imagefilledellipse($im, 400, 300, 200, 300, $red);
imagefilledellipse($im, 400, 300, 100, 300, $blue);


//输出
header('Content-Type:image/jpeg');
imagejpeg($im);

//销毁

imagedestroy($im);





?>


