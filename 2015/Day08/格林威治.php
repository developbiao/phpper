<?php
header("Content-Type:text/html; charset=utf-8");


//设定要用的默认时区。
//date_default_timezone_set('UTC');

echo date("l");
echo '<br />';
echo date('Y-m-d-->W',time());
echo '<br />';
echo date('Y-m-d 星期N H:i:s', 0);
echo '<br />';
echo gmdate('Y-m-d 星期N H:i:s', 0); //使用格林威治


?>
