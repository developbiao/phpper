<?php
header('content-type:text/html; charset=utf-8');
$str = 'I love imooc girl';
$encrypt = md5($str, true);
//echo $encrypt;
print_r($encrypt);
echo '<h3>Program runing is ok!</h3>';
?>
