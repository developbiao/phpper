<?php
header("Content-Type:text/html; charset=utf-8");

$str1 = 'china';
$str2 = '中国';

//strlen mb_strlen
echo strlen($str1);
echo '<br />';
echo strlen($str2);
echo '<br />';
echo mb_strlen($str2, 'utf-8');


?>
