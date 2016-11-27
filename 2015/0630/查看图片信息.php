<?php
/*
@Describe:透明度复制
@Author:GongBiao
@Date:2015/06/30
*/
header('Content-Type:text/html; charset=utf-8');

$arr = getimagesize('./fly.jpg');
echo '<pre>';
print_r($arr);
echo '</pre>';


//image_type_to_mime_type 打印图片类型
echo image_type_to_mime_type($arr[2]); 

?>
