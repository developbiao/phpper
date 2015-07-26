<?php
/*
*@Describe:Json的学习
*@Author:GongBiao
*@Date:2015/07/26
*/
header('Content-Type:text/html; charset=utf-8');

$arr = array(1, 2, 3, 4, 'A', 'B', 'C', 'D');

$json = json_encode($arr);

echo "<h3>$json</h3>"; //数组打印为[]

echo '<pre>';
print_r($arr);
echo '</pre>';
?>
