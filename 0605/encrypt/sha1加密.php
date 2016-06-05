<?php
header('content-type:text/html; charset=utf-8');
$str = 'I love imooc girl';
$encrypt = sha1($str, true); //第二个参数给true返回原始的加密数据
/*
为了安全性，可以使用两次加密
*/
echo "<h3>{$encrypt}</h3>";
echo '<hr/>';

echo '<h3>Program runing is ok!</h3>';
?>
