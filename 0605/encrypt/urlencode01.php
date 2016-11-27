<?php
header('content-type:text/html; charset=utf-8');
$str = 'https://www.so.com/s?ie=utf-8&shb=1&src=360sou_newhome&q=%E7%BE%8E%E5%A5%B3';
$encrypt = rawurldecode($str);
echo "<h3>{$encrypt}</h3>";
echo '<hr/>';

echo '<h3>Program runing is ok!</h3>';
?>
