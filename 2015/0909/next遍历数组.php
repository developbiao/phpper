<?php
header('Content-Type:text/html; charset=utf-8');
$data = array(1, 2, 3, 4, 5, 6);
$i = 0;
while($i < 20){
	$mode = current($data) ? current($data) : reset($data);
	echo "<h3>$mode</h3>";
	next($data);
	$i ++;
}

echo "<h3>程序执行完成</h3>";
?>
