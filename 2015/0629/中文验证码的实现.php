<?php
/*
@Describe:中文验证码
@Author:GongBiao
@Date:2015/06/29
*/
/*
思路:
中文验证码:
如何产生随机的中文字符串
中文按其unicode编码，是有规律的,
位于0x4E00-0x9FA0

可以在unicode范围中随机选取
但有避来生僻字
*/

header('Content-Type:text/html; charset=utf-8');

//1、准备文字数组
$char = array('我', '就', '是', '我', '不', '一', '样', '的', '烟', '火');

shuffle($char);
$code = implode('', array_slice($char, 0, 4));

//2、准备画布
$im = imagecreatetruecolor(150, 50);

//3、准备颜料

$gray = imagecolorallocate($im ,200, 200, 200);
$randcolor = imagecolorallocate($im, mt_rand(0, 170), mt_rand(0, 170), mt_rand(0, 170));

//填充
imagefill($im , 0, 0, $gray);

//写字
imagettftext($im, 25, 0, 0, 30, $randcolor, './SIMYOU.TTF', $code);


//输出

header('Content-Type:image/gif');
imagegif($im);






?>
