<?php
//php成生一个图片
sleep(10);

//创建画布
$im = imagecreatetruecolor(400, 300);

//创建画笔颜色
$green = imagecolorallocate($im, 0, 200, 0);

//填充画布
imagefill($im, 10, 10, $green);

//输出图片
header('content-type:image/jpeg');
imagejpeg($im);

//销毁图片
imagedestroy($im);
?>