<?php
header("Content-Type:text/html; charset=utf-8");

//计算日期的时间差戳值

$day1 = '2003-7-15';
$day2 = '2015-5-27';

//方法一、用时间戳计算

echo (strtotime($day2) - strtotime($day1)) / (3600*24);
echo "<br />";

//方法二、使用DateTime类

/*
$d1 = new dateTime($day1);
$d2 = new dateTime($day2);

echo $d1->diff($d2)->days;
*/
$time1 = time();
$time2 = strtotime('now +1 day');

echo $time2 - $time1; //一天相差86400秒



?>
