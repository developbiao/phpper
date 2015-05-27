<?php
header('Content-Type:text/html; charset=utf-8');

function test1(&$a){
	$a += 1;
}

$b = 5;
test1($b);
echo $b;

?>