<?php
header("Content-Type:text/html; charset=utf-8");

//用PHP打印出前一天的时间格式

echo date('Y-m-d', time()-3600*24);
echo '<br />';
echo date('Y-m-d', strtotime('now -1 day'));


?>
