<?php
/*
@Describe:imagefill的用法
@Author:GongBiao
@Date:2015/06/29
*/

//1、准备画布
$im = imagecreatetruecolor(800, 600);

//2、准备颜料
$gray = imagecolorallocate($im, 200, 200, 200);
$blue = imagecolorallocate($im, 0, 0, 255);
$red = imagecolorallocate($im, 255, 0, 0);

//3、填充

imagefill($im, 0, 200, $gray);

//4、画一个椭圆
imageellipse($im, 400, 300, 300, 300, $blue);

//5、再次填充

imagefill($im, 400, 300, $red); //填充到圆里面

//输出
header('Content-Type:image/jpeg');
imagepng($im);

//销毁

imagedestroy($im);

/*
总结：渲染的原理就像Photoshop里面的填充工具一样的原理
*/

?>
