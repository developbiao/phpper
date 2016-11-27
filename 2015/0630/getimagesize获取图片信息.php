<?php
/*
@Describe:获取图片信息
@Author:GongBiao
@Date:2015/06/30
*/
header('Content-Type:text/html; charset=utf-8');
echo '<pre>';
print_r(getimagesize('http://ww1.sinaimg.cn/bmiddle/5486087cjw1etl090s8n8j219c1rb4a8.jpg'));
echo '</pre>';


?>

