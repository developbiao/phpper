<?php
header("Content-Type:text/html; charset=utf-8");

$a = 10;
$b = &$a;
$b = 20;

echo $a;
echo "<br>";
echo $b;
?>


