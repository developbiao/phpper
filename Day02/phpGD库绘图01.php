<?php
//准备画布
$im = imagecreatetruecolor(500, 300);

//准备涂料
$black = imagecolorallocate($im, 0, 0, 0);
$white = imagecolorallocate($im, 255, 255, 255);

//背景填充成黑色
imagefill($im, 0, 0, $black);

//圆形并填充成白色-258*151
imagefilledellipse($im, 258, 151, 200, 200, $white);

//输出到浏览器或保存起来
header("content-type:image/png");
imagepng($im);

imagedestroy($im);

?>

