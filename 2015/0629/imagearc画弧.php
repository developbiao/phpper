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
其实就是画圆弧
*/



//1、准备画面
$im = imagecreatetruecolor(800, 600);

//2、颜料
$gray = imagecolorallocate($im ,200, 200, 200);
$blue = imagecolorallocate($im, 0, 0, 255);
$red = imagecolorallocate($im, 255, 0, 0);

//3、填充
imagefill($im, 0, 0, $gray);



/*
画一段圆弧
参数为：画布、圆心x值、圆心y值,宽、高、起始角度、结束角度、颜色
*/

imagearc($im, 400, 300, 300,300 , 0, 270, $blue);  //输出C形圆弧
imagearc($im, 400, 300, 310,210, -90, 0, $red);


//输出
header('Content-Type:image/jpeg');
imagejpeg($im);

//销毁

imagedestroy($im);





?>


