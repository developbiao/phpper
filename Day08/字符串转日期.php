<?php
header("Content-Type:text/html; charset=utf-8");


echo mktime(10,38,33,5,27,2015);
echo "<br />";
echo strtotime('now');
echo "<br />";
echo strtotime('now + 1 day');
echo "<br />";

var_dump(checkdate(12, 33, 2014));  //检查日期是否合法


?>
