<?php
header('Content-Type:text/html; charset=utf-8');

/*
打印九九乘法表
*/

for($i=1; $i<=9; $i++){
	//echo $i,'---';
	for($j=1; $j<=$i; $j++){
		echo $j, '*' ,$i, '=', $i * $j;
		echo "\t";
	}
	echo '<br />';
	echo '<hr/>';
}

?>
