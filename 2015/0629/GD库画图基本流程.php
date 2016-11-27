<?php
/*
@Describe:GD库的流程
@Author:GongBiao
@Date:2015/06/29
*/
header('Content-Type:text/html; charset=utf-8');
/*
GD 库画图的典型流程
1：创建画布
2：创建各种颜料
3：绘画(如写字，画线，画矩形等等形状)
*/

//1：准备画面
$im = imagecreatetruecolor(300, 200);

//2:创建颜料imagecolorallocate
$red = imagecolorallocate($im, 0, 255, 0);

//3:画图
//最简单的，泼墨染！imagefill
imagefill($im ,0 ,70, $red);


/*
保存
*/

if(imagegif($im, './01.gif')){
	echo '画图成功!<br />';
}else{
	echo '画图失败!<br />';
}

//销毁画面
imagedestroy($im);
?>
