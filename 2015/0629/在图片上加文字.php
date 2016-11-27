<?php
/*
@Describe:图片中加入文字
@Author:GongBiao
@Date:2015/06/29
*/

//1、创建一画布
$im = imagecreatefromjpeg('./cross.jpg');


//2、创建颜料
$blue = imagecolorallocate($im,0, 0, 255);


//3、写字

imagettftext($im, 25, -30, 200 ,300, $blue, './SIMYOU.TTF', '美女老师的养的多肉');
//参数:画布资源、字体大小、角度、x、y、颜色



//4、保存或输出

header('Content-Type:image/jpeg');
imagejpeg($im);


//销毁画布
imagedestroy($im);

?>


