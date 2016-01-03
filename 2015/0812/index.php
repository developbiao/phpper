<?php
$arr = array('a', 'b', 'c');
//echo array_shift($arr);
//echo array_unshift($arr, 'd');

$arr = array_reverse($arr);

echo '<pre>';
print_r($arr);
echo '</pre>';
?>