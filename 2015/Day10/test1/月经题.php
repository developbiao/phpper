<?php
header('Content-Type:text/html; charset=utf-8');

$a = 3;
$b = 5;

if($a = 5 || $b = 7){
	$a++;
	$b++;

}

var_dump($a);

echo $a,',', $b;
?>


