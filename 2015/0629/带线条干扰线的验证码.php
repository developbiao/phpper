<?php
/*
@Describe:有干扰线的验证码
@Author:GongBiao
@Date:2015/06/29
*/

/*
有干扰线的验证码
*/

//1、准备画布
$im = imagecreatetruecolor(50, 25);


//2、准备颜色

$red = imagecolorallocate($im, 255, 0, 0);
$gray = imagecolorallocate($im, 220, 220, 200);

//3、干扰线颜色

$randcolor = imagecolorallocate($im ,mt_rand(0, 150), mt_rand(0, 150), mt_rand(0, 150));

$linecolor1 = imagecolorallocate($im ,mt_rand(100, 150), mt_rand(100, 150), mt_rand(100, 150));
$linecolor2 = imagecolorallocate($im ,mt_rand(100, 150), mt_rand(100, 150), mt_rand(100, 150));
$linecolor3 = imagecolorallocate($im ,mt_rand(100, 150), mt_rand(100, 150), mt_rand(100, 150));

//4、填充填充背景

imagefill($im, 0, 0, $gray);


//5、绘制干扰线

imageline($im, 0, mt_rand(0,25), 50, mt_rand(0,25), $linecolor1);
imageline($im, 0, mt_rand(0,25), 50, mt_rand(0,25), $linecolor2);
imageline($im, 0, mt_rand(0,25), 50, mt_rand(0,25), $linecolor3);


//6、生成验证码
$str = substr(str_shuffle('ABCDEFGHIJKMNPQRSTUVWXYZabcdefghijkmnpqrstuvwxyz23456789'), 0, 4);

imagestring($im, 5, 8, 5, $str, $randcolor);

//6、输出验证码

header('Content-Type:image/png');
imagepng($im);

//7、回收画布资源

imagedestroy($im);




?>
