<?php
//生成一张图片
$im = imagecreatetruecolor(300, 300);

sleep(5);  //等5秒钟
header('Content-Type: image/png');
imagepng($im);
?>