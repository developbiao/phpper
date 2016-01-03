<?php
$data = array(1, 2, 3, 4, 5, 6);
$mode = current($data);
echo "<h3>$mode</h3>"; //1
$mode = next($data);
echo "<h3>$mode</h3>"; //2
$mode = next($data);
echo "<h3>$mode</h3>"; //3
$mode = next($data);
echo "<h3>$mode</h3>"; //4
$mode = next($data);
echo "<h3>$mode</h3>"; //5
$mode = next($data);
echo "<h3>$mode</h3>"; //5
$mode = next($data);
echo "<h3>$mode</h3>"; //6
$mode = next($data);
if(!$mode){
	reset($data);
}
echo "<h3>$mode</h3>"; //7
?>
