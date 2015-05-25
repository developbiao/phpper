<?php
header("Content-type:text/html; charset=utf-8");

$fh = fopen('./message.txt', 'r'); //打开一个资源

$i = 1;
while(($row = fgetcsv($fh)) != false){

	echo '<li><a href="readmsg.php?tid=',$i,'">', $row[0], '<a/></li>';

	$i++;

}

fclose($fh);

echo '<a href="index.html" target="_self">继续留言</a>';


echo '<br />';
echo 'ok';
?>