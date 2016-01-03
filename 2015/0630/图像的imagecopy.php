<?php
/*
@Describe:图像的复制
@Author:GongBiao
@Date:2015/06/30
*/
header('Content-Type:text/html; charset=utf-8');

//bool imagecopy  ( resource $dst_im  , resource $src_im  , int $dst_x  , int $dst_y  , int $src_x  , int $src_y  , int $src_w  , int $src_h  )

/*

图像操作有
图像复制(水印)
图像半透明提取
图像的比例复制(缩略图)
*/

//把一幅小图复制到大图上，复制2份，形成证件照片的效果

/*
小图:330 * 379
大图的宽:330 * 2 + 20 高 379

*/

$sw = 330; //小图的宽
$sh = 279; //小图的高

//创建大图画面

$big = imagecreatetruecolor($sw * 2 + 20, $sh);

//创建灰色

$gray = imagecolorallocate($big, 200, 200, 200);

//填充大图
imagefill($big, 0, 0, $gray);

//再读取小图
$small = imagecreatefrompng('./feng.png');


//复制小图
imagecopy($big, $small, 0, 0, 0, 0, 330, 379);
imagecopy($big, $small, $sw + 20, 0, 0, 0, 330, 379);

//输出
header('Content-Type:image/png');

imagepng($big);

//销毁画布

imagedestroy($big);




?>

