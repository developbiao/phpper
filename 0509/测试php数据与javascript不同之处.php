<?php
header('Content-Type:text/html; charset=utf-8');
$arr1 = [1, 2, 3];
$arr2 = &$arr1;
array_push($arr2, 4);
print_r($arr1);
print_r($arr2);
echo '<h3>Program runing is ok!</h3>';
?>
