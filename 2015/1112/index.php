<?php
/*
@Describe:图片缩放测试
*/
header('Content-Type:text/html; charset=utf-8');
require 'ImageTools.php';

$image_tools = new imageTools();
//$image_tools::thumb('./cd2.jpg', './temp/thumb_cd.jpg', 200, 200)?'OK':'Faild';
echo $image_tools::thumb('./biaoge02.jpg', './temp/thumb_biaoge.jpg', 210, 210)?'OK':'Faild';
echo $image_tools::thumb('./test01.png', './temp/thumb_test01.png', 210, 210)?'OK':'Faild';
echo $image_tools::thumb('./width01.jpg', './temp/thumb_width01.jpg', 210, 210)?'OK':'Faild';
echo $image_tools::thumb('./height01.jpg', './temp/thumb_height.jpg', 210, 210)?'OK':'Faild';

echo '<h3>程序运行成功！</h3>';
?>