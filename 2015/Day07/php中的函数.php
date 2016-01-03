<?php
header('Content-Type:text/html; charset=utf-8');

/*
function Say(){
	echo '<h3>我想你咯!</h3>';
}

Say();

for($i=0; $i<10; $i++)
	Say();
*/

//函数的返回值
function Sum($a, $b){
	return $a + $b;
}

echo Sum(13, 74);
echo '<br />PHP中函数不区分大小写';

echo sum(75, 88);

?>
