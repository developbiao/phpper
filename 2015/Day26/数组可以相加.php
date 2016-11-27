<?php
/*
@Description:无限级分类
@Author:GongBiao
@Date:2015/06/18
*/
header('Content-Type:text/html; charset=utf-8');

/**
 * 数组要加，键值相同会被覆盖
**/

$a = array(1,2,3,4,5);
$b = array(6,7,8,9,10);

echo '<pre>';
print_r($b + $a); //$a 覆盖 $b --6,7,8,9,10
echo '</pre>';

echo '-----------<br />';

$arr1 = array('a'=>'A', 'b'=>'B', 'c'=>'C');
$arr2 = array('d'=>'D', 'e'=>'E', 'a'=>'ASH'); 

echo '<pre>';
print_r($arr2 + $arr1);
echo '</pre>';

echo '<h3>程序运行完成!</h3>';
?>

