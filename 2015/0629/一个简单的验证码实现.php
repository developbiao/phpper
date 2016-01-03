<?php
/*
@Describe:GD库制作验证码
@Author:GongBiao
@Date:2015/06/29
*/

//1、准备画布
$im = imagecreatetruecolor(50, 25);

//2、准备涂料
$red = imagecolorallocate($im, 255, 0, 0);


//3、写字imagestring --水平画一行字符串 
$str = substr(str_shuffle('ABCDEFGHIJKMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz23456789'), 0 ,4);

imagestring($im, 5, 10, 3, $str, $red);  //参数， 画布、字体大小、字符串、颜色

header('Content-Type:image/gif');
imagegif($im);

imagedestroy($im);

?>
