<?php
$im = imagecreatetruecolor(100, 100);

//将背景设为红色
$red = imagecolorallocate($im, 255, 0, 0);

imagefill($im, 0, 0, $red);

header("Content-Type:image/png");

imagepng($im);


imagedestroy($im);
?>
