<?php
/*
@Describe:GD库图片做画布
@Author:GongBiao
@Date:2015/06/29
*/
//header('Content-Type:text/html; charset=utf-8');
/*
GD 库画图的典型流程
1：创建画布
2：创建各种颜料
3：绘画(如写字，画线，画矩形等等形状)
*/

//1：准备画布
/*
可以用imagecreateturecolor来创建空白画布
也可以 直接打开一幅图片来创建画面
imagecreatefromjpeg()
imagecreatefrompng()
imagecreatefromgif()
*/

$file = './cross.jpg';
$im = imagecreatefromjpeg($file);

//配颜料

$red = imagecolorallocate($im, 255, 0, 0);
$blue = imagecolorallocate($im, 0, 0, 255);

//从左上角到右下角，画一条红线
imageline($im, 0, 0, 456, 684, $red);

//从左下角到右上角，画一条蓝线
imageline($im, 0, 684, 456, 0, $blue);

//保存图片，也可以输出图片

/*
if(imagejpeg($im , './output/cross01.jpg' )){
	echo '创建成功!<br />';
}else{
	echo '创建失败1';
}
*/

header('Content-Type:image/png');
imagepng($im);

//销毁画布
imagedestroy($im);


?>
