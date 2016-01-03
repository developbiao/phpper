<?php
header('Content-Type:text/html; charset=utf-8');
$res = fopen('./message.txt', 'r');
while(($rows=fgetcsv($res)) != false){
	echo '<h1>'.$rows[0].'<h1>';
	echo '<h3>', $rows[1], '<h3>';
}

fclose($res);

echo '<a href="index.html" target="_self">留言</a>';

?>