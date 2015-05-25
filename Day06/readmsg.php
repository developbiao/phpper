<?php
header("Content-Type:text/html; charset=utf-8");
$tid = $_GET['tid']; //获取tid

$fh = fopen('./message.txt', 'r');
$i = 1;
while(($row=fgetcsv($fh)) != false){
	if($i == $tid){
		/*
		echo "<pre>";
		print_r($row);
		echo "</pre>";
		*/
		echo '<h1>', $row[0],'<h1>';
		echo "<h3>\"".$row[1]."\"</h3>";
	}

	$i++;

}

fclose($fh);

echo '<a href="proc.php">回到目录</a>';
?>