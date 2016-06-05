<?php
header('content-type:text/html; charset=utf-8');
$str = 'I love imooc girl';
$encrypt = crypt($str);
echo '<h3>' . $encrypt . '</h3>';
$encrypt = crypt($str, 'im');
echo '<h3>' . $encrypt . '</h3>';
echo '<hr/>';

echo '<h3>Program runing is ok!</h3>';
?>
