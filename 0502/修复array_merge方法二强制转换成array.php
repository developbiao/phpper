<?php
header('Content-Type:text/html; charset=utf-8');
//下面的代码有什么问题吗？输出会是什么，怎样修复它
$referenceTable = array();
$referenceTable['val1'] = array(1, 2);
$referenceTable['val2'] = 3;
$referenceTable['val3'] = array(4, 5);

//var_dump((array)$referenceTable['val2']);
echo '<hr />';

$testArray = array();

//修复方法可以使用强制类型转换
$testArray = array_merge($testArray, (array)$referenceTable['val1']);
var_dump($testArray);
echo '<hr />';
$testArray = array_merge($testArray, (array)$referenceTable['val2']);
echo '<hr />';
$testArray = array_merge($testArray, (array)$referenceTable['val3']);
var_dump($testArray);
echo '<h3>Program runing is ok!</h3>';
?>
